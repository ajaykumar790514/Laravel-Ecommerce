<div class="p-4 ">

  <h2 class="font-semibold text-xl px-10 text-gray-700">Order Details</h2>
  <div class="px-10 mt-4">
    <h4 class="font-medium">Order <span class="text-indigo-800">#{{$orderId}}</span></h4>
  </div>

  <div class="mt-4 grid md:grid-cols-3 gap-5 px-3">

    <div class="md:col-span-2  ">
      <div class=" bg-white rounded-sm shadow-main p-4">
        <h5 class="font-medium text-gray-600">Order Details</h5>


        <table class="min-w-full divide-y mt-3 divide-gray-200 dark:divide-neutral-700">
          <thead class="bg-gray-50 dark:bg-neutral-800">
            <tr>



              <th scope="col" class="px-3 xl:ps-0 py-3 text-start">
                <div class="flex items-center px-3 gap-x-2">
                  <span class=" font-semibold uppercase text-xs text-gray-800 dark:text-neutral-200">
                    Product
                  </span>
                </div>
              </th>


              <th scope="col" class=" py-3 text-center  whitespace-nowrap">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                    Price
                  </span>
                </div>
              </th>

              <th scope="col" class="px-6 py-3 text-center  whitespace-nowrap">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                    Quantity
                  </span>
                </div>
              </th>
              <th scope="col" class="px-6 py-3 text-center  whitespace-nowrap">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs  font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                    Total
                  </span>
                </div>
              </th>





            </tr>
          </thead>

          <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
            @foreach ($order->orderItems as $item)
            @php
            // Decode the JSON stored in varient
            $varient = json_decode($item->varient, true);
            @endphp
            <tr>
              {{-- <td>{{$varient}}</td> --}}
              <td class=" ">
                <div class="ps-2 lg:ps-3 xl:ps-0 pe-2 py-3">
                  <div class="flex items-center gap-x-3 px-2">
                    @if ($item->product->images->first()->image)

                    <img class="inline-block size-[38px] rounded-full"
                      src="{{ asset($item->product->images->first()->image)}}" alt="Image Description">
                    @endif
                    <div class="grow">
                      <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">
                        {{$item->product->name}}
                      </span>
                      <span class="block text-sm text-gray-500 dark:text-neutral-500">{{$varient['name']}}</span>
                    </div>
                  </div>
                </div>
              </td>


              <td class="">

                <span class="pe-6">
                  {{$varient['offer_price']}}</span>
              </td>
              <td class=" ">
                <span class="px-6"> {{$item->quantity}}
                </span>
              </td>

              <td class="">

                <span class="px-6 text-nowrap">
                  ₹ {{$varient['offer_price'] * $item->quantity}}</span>
              </td>

            </tr>

            @endforeach
            <tr>
              <th colspan="3" class="font-medium py-3 px-10 text-end">
                SubTotal
              </th>
              <td class="px-6"><span class="text-nowrap">₹ {{$order->cart_amount}}</span></td>
            </tr>
            <tr>
              <th colspan="3" class="font-medium py-3 px-10 text-end">
                Discount
              </th>
              <td class="px-6"><span class="text-nowrap">₹ {{$order->discount_amount}}</span></td>
            </tr>
            <tr>
              <th colspan="3" class="font-medium py-3 px-10 text-end">
                Tax
              </th>
              <td class="px-6"><span class="text-nowrap">₹ {{$order->tax_amount}}</span></td>
            </tr>
            <tr>
              <th colspan="3" class="font-medium py-3 px-10 text-end">
                Delivery Fee
              </th>
              <td class="px-6"><span class="text-nowrap">₹ {{$order->delivery_fee}}</span></td>
            </tr>
            <tr class="text-indigo-600">
              <th colspan="3" class="font-medium py-3 px-10 text-end">
                Total
              </th>
              <td class="px-6 font-medium"><span class="text-nowrap">₹ {{$order->total_amount}}</span>
              </td>
            </tr>




          </tbody>
        </table>
      </div>
      <div class="mt-5 bg-white shadow-main p-4">
        <h2 class="font-medium">Order activity
        </h2>

        <!-- Timeline -->
        <div class="mt-4">


          @foreach ($order->history as $orderHistory )
          <div class="flex gap-x-3">
            <!-- Left Content -->
            <div class="w-16 text-end">
              <span class="text-xs text-gray-500 dark:text-neutral-400">{{$orderHistory->created_at->format('d-m-Y, g:i
                A
                ')}}</span>
            </div>
            <!-- End Left Content -->

            <!-- Icon -->
            <div
              class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-indigo-200 dark:after:bg-neutral-700">
              <div class="relative z-10 size-7 flex justify-center items-center">
                <div class="size-2 rounded-full bg-indigo-400 dark:bg-neutral-600"></div>
              </div>
            </div>
            <!-- End Icon -->

            <!-- Right Content -->
            <div class="grow pt-0.5 pb-8">
              <h3 class="flex gap-x-1.5 capitalize font-semibold  
              
        @if ($orderHistory->status === 'pending') text-yellow-500
        @elseif ($orderHistory->status === 'accepted') text-green-500
        @elseif ($orderHistory->status === 'cancelled') text-red-500
        @else text-indigo-500
        @endif
             dark:text-white">
                {{$orderHistory->status}}
              </h3>
              <p class="mt-1 text-sm 
              @if ($orderHistory->status === 'pending') text-yellow-600
              @elseif ($orderHistory->status === 'accepted') text-green-600
              @elseif ($orderHistory->status === 'cancelled') text-red-600
              @elseif ($orderHistory->status === 'delivered') text-blue-600
              @else text-gray-600
              @endif
              dark:text-neutral-400">
              @if ($orderHistory->status === 'pending')
                  Your order is pending. Please wait for confirmation.
              @elseif ($orderHistory->status === 'accepted')
                  Your order has been accepted. It will be processed soon.
              @elseif ($orderHistory->status === 'cancelled')
                  Your order has been canceled. Please contact support for more information.
              @elseif ($orderHistory->status === 'delivered')
                  Your order has been delivered. Enjoy your purchase!
              @else
                  Just chill for now... 😉
              @endif
          </p>
            </div>
            <!-- End Right Content -->
          </div>
          @endforeach


          <!-- Item -->

          <!-- End Item -->
        </div>
        <!-- End Timeline -->
      </div>
    </div>
    <div>
      <div class=" p-3 bg-white shadow-md rounded-sm">
        <h5 class="font-medium text-gray-600">Summery</h5>
        <h6 class="text-gray-700 mt-2 text-sm"><span class="font-medium">Order Id :
          </span>{{$order->order_number}}</h6>
        <h6 class="text-gray-700 mt-2 text-sm"><span class="font-medium">Order Date :
          </span>{{$order->created_at->format('d-m-Y')}}</h6>
        <h6 class="text-gray-700 mt-2 text-sm"><span class="font-medium">Total Price :
          </span>{{$order->total_amount}}</h6>
      </div>
      <div class=" p-3 mt-5 bg-white shadow-md rounded-sm">
        <h5 class="font-medium text-gray-600">Customer Details</h5>
        <h6 class="font-medium mt-2 text-indigo-600">{{$order->user->name}}</h6>
        <h6 class="text-gray-700 mt-2"><span class="font-medium">Email : </span>{{$order->user->email}}</h6>
        <h6 class="text-gray-700 mt-2"><span class="font-medium">Mobile : </span>{{$order->user->mobile}}</h6>
      </div>
      <div class=" p-3 bg-white shadow-md mt-5 rounded-sm">
        <h5 class="font-medium text-gray-600">Shipping Address
        </h5>
        <p class="text-gray-900 text-wrap mt-2">
          {{$order->customerAddress->address}},
          <br>
          {{$order->customerAddress->city}},
          {{$order->customerAddress->state}}, {{$order->customerAddress->pincode}},



        </p>

        <h6 class="text-gray-700 mt-2"><span class="font-medium">Mobile :
          </span>{{$order->customerAddress->mobile}}
        </h6>

      </div>
      <div class=" p-3 mt-5 bg-white shadow-md rounded-sm">
        <h5 class="font-medium text-gray-600">Payment Method
        </h5>
        <p class="text-gray-900 text-wrap mt-2">


          <span> {{$order->payment_method}}
          </span>
          @if ($order->payment)
          <span class="capitalize font-medium ml-3"> {{$order->payment->payment_method}}
          </span>
          @endif

        </p>



      </div>
    </div>
  </div>

</div>