<?php

namespace App\Livewire;

use App\Models\CustomerAddress;
use App\Models\Order;
use App\Models\OrderHistory;
use App\Models\OrderItems;
use App\Models\OrderPayment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\Component;
use Razorpay\Api\Api;

class CheckOutPage extends Component
{
    public $addressId;
    public $address;
    public $city;
    public $state;
    public $notes;
    public $paymentMode;
    public $varient = [];
    public $pincode;
    public $mobile;
    public $shippingFee = 100;
    public $couponCode = 50;
    public $tax = 100;
    public $razorPayId;
    public $razorPaySecretId;
    public $totalCartAmount = 0;
    protected $rules = [
        'paymentMode' => 'required',
    ];

    protected $addRule = [
        'address' => 'required',
        'city' => 'required',
        'state' => 'required',
        'pincode' => 'required',
        'mobile' => 'required',

    ];
    public function mount()
    {
        $this->razorPayId = config('services.razorpay.key');
        $this->razorPaySecretId = config('services.razorpay.secret');
        $this->loadCustomerAddress();
        $this->loadCart();
    }


    protected function loadCustomerAddress()
    {
        $address = CustomerAddress::where('user_id', Auth::id())->first();
        if ($address) {
            $this->addressId = $address->id;
        }
    }

    protected function loadCart()
    {
        $carts = Session::get('cart', []);
        foreach ($carts as $cart) {
            $this->varient[] = $cart;
            $this->totalCartAmount += $cart['varient']['offer_price'] * $cart['quantity'];
        }
    }

    protected function generateOrderNumber()
    {
        return Carbon::now()->format('dm') . mt_rand(1000, 9999);
    }

    protected function genrateRazorPayOrder($amount)
    {

        $api  = new Api($this->razorPayId, $this->razorPaySecretId);

        $orderData = [
            'amount' => $amount * 100,
            'currency' => 'INR',

        ];
        $razorpayOrder = $api->order->create($orderData);

        return $razorpayOrder->id;
    }

    public function submit()
    {
        $totalAmount = $this->calculateTotalAmount();

        if ($this->paymentMode == "Online") {

            $razorpayOrderId = $this->genrateRazorPayOrder($totalAmount);

            $this->dispatch('triggerRazorpay', json_encode([
                'orderId' => $razorpayOrderId,
                'key' => $this->razorPayId,
                'amount' => $totalAmount * 100,
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'contact' => Auth::user()->mobile,
            ]));
        } else {

            $order =  $this->saveOrder('COD', 'unpaid');
            return redirect()->route('order_success', ['id' => $order->order_number]);
        }
    }

    protected function calculateTotalAmount()
    {
        return $this->totalCartAmount + $this->tax + $this->shippingFee - $this->couponCode;
    }


    #[On('paymentsuccess')]
    public function paymentSuccess($response)
    {

        $api = new Api($this->razorPayId, $this->razorPaySecretId);

        $data = $api->payment->fetch($response['razorpay_payment_id']);

        if ($data->status = "captured") {
            $order =   $this->saveOrder('Online', 'paid');


            OrderPayment::create([
                'order_id' => $order->id,
                'payment_method' => $data->method,
                'payment_id' => $data->id,
                'amount' => $order->total_amount,
                'razorpay_order_id' => $data->order_id
            ]);

            return redirect()->route('order_success', ['id' => $order->order_number]);
        }
    }

    public function saveOrder($paymentMethod, $paymentStatus)
    {
        // dd($this->varient);

        $this->validate();
        $newAddress = $this->createNewAddressIfNeeded();


        $newOrder = Order::create([
            'user_id' => Auth::id(),
            'customer_address_id' => $newAddress ? $newAddress->id : $this->addressId,
            'notes' => $this->notes,
            'order_number' => $this->generateOrderNumber(),
            'payment_method' => $paymentMethod,
            'payment_status' => $paymentStatus,
            'total_amount' => $this->calculateTotalAmount(),
            'cart_amount' => $this->totalCartAmount,
            'discount_amount' => $this->couponCode,
            "delivery_fee" => $this->shippingFee,
            "tax_amount" => $this->tax,
            "platform_fee" => 0,
            "order_type" => "delivery",
            'note' => $this->notes,
        ]);

        OrderHistory::create([
            'order_id' => $newOrder->id,
            'status' => 'pending',
        ]);

        foreach ($this->varient as $varient) {
            OrderItems::create([
                'order_id' => $newOrder->id,
                'product_id' => $varient['varient']['product_id'],
                'quantity' => $varient['quantity'],
                'varient' => json_encode($varient['varient']),
            ]);
        }

        return $newOrder;
    }

    protected function createNewAddressIfNeeded()
    {
        if ($this->address && $this->city && $this->state && $this->pincode && $this->mobile) {
            return CustomerAddress::create([
                'user_id' => Auth::id(),
                'address' => $this->address,
                'city' => $this->city,
                'state' => $this->state,
                'pincode' => $this->pincode,
                'mobile' => $this->mobile,
            ]);
        }

        return null;
    }
    public function render()
    {
        $carts  = Session::get('cart');
        $oldAddress = CustomerAddress::where('user_id', Auth::id())->get();
        return view('livewire.check-out-page', compact('carts', 'oldAddress'))->layout('layouts.guest');
    }
}
