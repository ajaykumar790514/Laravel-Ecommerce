<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\OrderHistory;
use Carbon\Carbon;
use Livewire\Component;

class UpdateManageOrder extends Component
{
    public $minDate;
    public $orderId;
    public $payment_status;
    public $delivery_date;
    public $status;


    public function mount($params)
    {
        $this->minDate = Carbon::now()->format('Y-m-d');

        $data = Order::findOrFail($params['id']);
        $this->payment_status = $data->payment_status;
        $this->delivery_date = $data->delivery_time;
        $this->status = $data->status;
        $this->orderId = $data->id;
    }

    public function submit()
    {
        $data = Order::findOrFail($this->orderId);
        $data->payment_status = $this->payment_status;
        $data->delivery_time = $this->delivery_date;


        if ($data->status != $this->status && !$this->checkAlreadyExistsStatus($data->id, $this->status)) {
            OrderHistory::create([
                'order_id' => $data->id,
                'status' => $this->status,
            ]);
            $data->status = $this->status;
        }



        $data->save();
        $this->dispatch('closeDrawer');
        $this->dispatch('updateOrders');
    }

    private function checkAlreadyExistsStatus($orderId, $status)
    {
        return OrderHistory::where('order_id', $orderId)->where('status', $status)->exists();
    }
    public function render()
    {
        return view('livewire.update-manage-order');
    }
}
