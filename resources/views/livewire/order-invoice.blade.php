<div>
    <!-- Invoice -->
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
        <div class="sm:w-11/12 lg:w-3/4 mx-auto" id="printable">
            <!-- Card -->
            <div class="flex flex-col p-4 sm:p-10 bg-white shadow-md rounded-xl dark:bg-neutral-800">
                <!-- Grid -->
                <div class="flex justify-between">
                    <div>
                        @if ($setting->logo)
                        <img src="{{ asset($setting->logo) }}" class="w-[150px]" alt="">
                        @endif

                        <h1 class="mt-2 text-lg md:text-xl font-semibold text-blue-600 dark:text-white">
                            {{$setting->name}}
                        </h1>
                    </div>
                    <!-- Col -->

                    <div class="text-end">
                        <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 dark:text-neutral-200">Invoice #
                        </h2>
                        <div class="flex  mt-2 gap-2 items-center">

                            <span class="font-medium">Order Id : </span>
                            <span class=" block text-gray-500 dark:text-neutral-500">{{$order->order_number}}</span>
                        </div>

                    </div>
                    <!-- Col -->
                </div>
                <!-- End Grid -->

                <!-- Grid -->
                <div class="mt-8 grid sm:grid-cols-2 gap-3">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">Bill to:</h3>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">{{$order->user->name}}
                        </h3>
                        <address class="mt-2 not-italic text-gray-500 dark:text-neutral-500">
                            {{$order->customerAddress->address}} <br>
                            {{$order->customerAddress->city}} <br>
                            {{$order->customerAddress->state}}
                            {{$order->customerAddress->pincode}} <br>
                        </address>
                        <dl class="flex gap-3  ">
                            <dt class=" font-semibold text-gray-700 dark:text-neutral-200">Mobile No. :
                            </dt>
                            <dd class=" text-gray-500 dark:text-neutral-500">+91-{{$order->customerAddress->mobile}}
                            </dd>
                        </dl>
                    </div>
                    <!-- Col -->

                    <div class="sm:text-end space-y-2">
                        <!-- Grid -->
                        <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-neutral-200">Invoice date:
                                </dt>
                                <dd class="col-span-2 text-gray-500 dark:text-neutral-500">
                                    {{$order->created_at->format('d/m/Y')}}</dd>
                            </dl>
                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-neutral-200">Delivery date:
                                </dt>
                                @if ($order->delivery_time)
                                <dd class="col-span-2 text-gray-500 dark:text-neutral-500">
                                    {{\Carbon\Carbon::parse($order->delivery_time)->format('d/m/Y')}}</dd>
                                @endif
                            </dl>
                        </div>
                        <!-- End Grid -->
                    </div>
                    <!-- Col -->
                </div>
                <!-- End Grid -->

                <!-- Table -->
                <div class="mt-6">
                    <div class="border border-gray-200 p-4 rounded-lg space-y-4 dark:border-neutral-700">
                        <div class="hidden sm:grid sm:grid-cols-5">
                            <div
                                class="sm:col-span-2 text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                Item</div>
                            <div class="text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                Qty</div>
                            <div class="text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                Rate</div>
                            <div class="text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                Amount</div>
                        </div>

                        <div class="hidden sm:block border-b border-gray-200 dark:border-neutral-700"></div>

                        @foreach ($order->orderItems as $product)

                        @php
                        // Decode the JSON stored in varient
                        $varient = json_decode($product->varient, true);
                        @endphp
                        {{-- <div></div> --}}
                        <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                            <div class="col-span-full sm:col-span-2">
                                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Item</h5>
                                <div>
                                    <p class="font-medium text-gray-800 dark:text-neutral-200">
                                        {{$product->product->name}}
                                    </p>
                                    <p class="text-gray-800 text-sm">{{$varient['name']}}</p>
                                </div>
                            </div>
                            <div>
                                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Qty</h5>
                                <p class="text-gray-800 dark:text-neutral-200">{{$product->quantity}}</p>
                            </div>
                            <div>
                                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Rate</h5>
                                <p class="text-gray-800 dark:text-neutral-200">{{$varient['offer_price']}}</p>
                            </div>
                            <div>
                                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Amount</h5>
                                <p class="sm:text-end text-gray-800 dark:text-neutral-200">₹ {{$varient['offer_price'] *
                                    $product->quantity}}</p>
                            </div>
                        </div>
                        <div class="sm:hidden border-b border-gray-200 dark:border-neutral-700"></div>
                        @endforeach



                    </div>
                </div>
                <!-- End Table -->

                <!-- Flex -->
                <div class="mt-8 flex sm:justify-end">
                    <div class="w-full max-w-2xl sm:text-end space-y-2">
                        <!-- Grid -->
                        <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-neutral-200">Subtotal:</dt>
                                <dd class="col-span-2 text-gray-500 dark:text-neutral-500">₹ {{$order->cart_amount}}
                                </dd>
                            </dl>



                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-neutral-200">Tax:</dt>
                                <dd class="col-span-2 text-gray-500 dark:text-neutral-500">₹ {{$order->tax_amount}}</dd>
                            </dl>
                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-neutral-200">Delivery Fee:
                                </dt>
                                <dd class="col-span-2 text-gray-500 dark:text-neutral-500">₹ {{$order->delivery_fee}}
                                </dd>
                            </dl>
                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-neutral-200"> Discount:</dt>
                                <dd class="col-span-2 text-gray-500 dark:text-neutral-500">₹ {{$order->discount_amount}}
                                </dd>
                            </dl>

                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-neutral-200">Total Amount :
                                </dt>
                                <dd class="col-span-2 font-medium text-gray-500 dark:text-neutral-500">₹
                                    {{$order->total_amount}}
                                </dd>
                            </dl>


                        </div>
                        <!-- End Grid -->
                    </div>
                </div>
                <!-- End Flex -->

                <div class="mt-8 sm:mt-12">
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">Thank you!</h4>
                    <p class="text-gray-500 dark:text-neutral-500">If you have any questions concerning this invoice,
                        use the following contact information:</p>
                    <div class="mt-2">
                        <p class="block text-sm font-medium text-gray-800 dark:text-neutral-200">{{$setting->email}}</p>
                        <p class="block text-sm font-medium text-gray-800 dark:text-neutral-200">+91-{{$setting->phone}}
                        </p>
                    </div>
                </div>

                <p class="mt-5 text-sm text-gray-500 dark:text-neutral-500">© {{date('Y')}}.{{$setting->name}}</p>
            </div>
            <!-- End Card -->

            <!-- Buttons -->
            <!-- End Buttons -->
        </div>
        <div class="mt-6 flex justify-end gap-x-3">
          
            <button
                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                onclick="window.print()">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="6 9 6 2 18 2 18 9" />
                    <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                    <rect width="12" height="8" x="6" y="14" />
                </svg>
                Print
            </button>
        </div>
    </div>
    <!-- End Invoice -->
</div>