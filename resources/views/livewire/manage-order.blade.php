<div>

    <!-- Table Section -->
    <div class="max-w-[85rem] px-2 py-10 sm:px-6 lg:px-3 lg:py-8 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                    Orders
                                </h2>

                            </div>

                          
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead class="bg-gray-50 dark:bg-neutral-800">
                                <tr>


                                    <th scope="col" class="px-6 lg:ps-3 xl:ps-0 py-3 text-start">
                                        <div class="flex items-center px-4 gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-purple-800 dark:text-neutral-200">
                                                ID
                                            </span>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-3 xl:ps-0 py-3 text-start">
                                        <div class="flex items-center px-3 gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Name
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class=" py-3 text-center whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Payment Method
                                            </span>
                                        </div>
                                    </th>
                                    <th scope="col" class=" py-3 text-center whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Payment Status
                                            </span>
                                        </div>
                                    </th>
                                    <th scope="col" class=" py-3 text-center  whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Total Amount
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-center  whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Status
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class=" py-3 text-center  whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Order Date
                                            </span>
                                        </div>
                                    </th>
                                    <th scope="col" class=" py-3 text-center  whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Delivery Date
                                            </span>
                                        </div>
                                    </th>



                                    <th scope="col" class="px-6 py-3 text-end"></th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                @foreach ($orders as $order)
                                <tr>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-4 py-3">
                                            <a href="{{ route('orderDetail', ['id'=>$order->order_number]) }}"
                                                class="font-semibold text-sm text-purple-800">{{$order->order_number}}</a>
                                        </div>
                                    </td>
                                    <td class=" whitespace-nowrap">
                                        <div class="ps-2 lg:ps-3 xl:ps-0 pe-2 py-3">
                                            <div class="flex items-center gap-x-3 px-2">

                                                <div class="grow">
                                                    <span
                                                        class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">
                                                        {{$order->user->name}}
                                                    </span>
                                                    <span
                                                        class="block text-sm text-gray-500 dark:text-neutral-500">{{$order->user->email}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="  whitespace-nowrap">
                                        <div class="  py-3">
                                            <span
                                                class="text-sm font-medium text-teal-600  py-1 h-auto px-3 rounded-md">
                                                {{$order->payment_method}}</span>
                                        </div>
                                    </td>
                                    <td class=" whitespace-nowrap">
                                        <div class=" py-3">
                                            @if ($order->payment_status == 'unpaid')
                                            <span
                                                class="py-1 px-2 inline-flex capitalize items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-900 rounded-md dark:bg-yellow-500/10 dark:text-yellow-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                                </svg>

                                                {{$order->payment_status}}
                                            </span>
                                            @else
                                            <span
                                                class="py-1 px-2 inline-flex capitalize items-center gap-x-1 text-xs font-medium bg-emerald-100 text-emerald-900 rounded-md dark:bg-yellow-500/10 dark:text-yellow-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>

                                                {{$order->payment_status}}
                                            </span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class=" py-3">
                                            <div class="flex items-center gap-x-3">
                                                <span class="text-xs text-gray-900 font-medium dark:text-neutral-500">₹
                                                    {{$order->total_amount}}</span>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class=" py-3">
                                            @if ($order->status == 'pending')
                                            <span
                                                class="py-1 px-2 inline-flex capitalize items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-800 rounded-md dark:bg-yellow-500/10 dark:text-yellow-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                                </svg>

                                                {{$order->status}}
                                            </span>
                                            @elseif ($order->status == 'accepted')
                                            <span
                                                class="py-1 px-2 inline-flex capitalize items-center gap-x-1 text-xs font-medium bg-emerald-100 text-emerald-900 rounded-md dark:bg-yellow-500/10 dark:text-yellow-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>

                                                {{$order->status}}
                                            </span>
                                            @elseif ($order->status == 'cancelled')
                                            <span
                                                class="py-1 px-2 inline-flex capitalize items-center gap-x-1 text-xs font-medium bg-rose-100 text-rose-900 rounded-md dark:bg-yellow-500/10 dark:text-yellow-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18 18 6M6 6l12 12" />
                                                </svg>


                                                {{$order->status}}
                                            </span>
                                            @else
                                            <span
                                                class="py-1 px-2 inline-flex capitalize items-center gap-x-1 text-xs font-medium bg-indigo-100 text-indigo-900 rounded-md dark:bg-yellow-500/10 dark:text-yellow-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                                                </svg>


                                                {{$order->status}}
                                            </span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-2 py-3">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                {{($order->created_at)->format("d-M-Y") }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-2 py-3">
                                            @if ($order->delivery_time)

                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                {{\Carbon\Carbon::parse($order->delivery_time)->format("d-M-Y") }}
                                            </span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-1.5">
                                            <button class="mr-2">
                                                <a href="{{ route('orderInvoice', ['id'=>$order->order_number]) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-[18px] text-indigo-900">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                                                    </svg>
                                                </a>

                                            </button>
                                            <button
                                                wire:click="$dispatch('openDrawer',{event:{component:'update-manage-order',params:{id:{{$order->id}}}}})">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class="size-[18px] text-teal-950">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                            </button>

                                        </div>
                                    </td>
                                </tr>

                                @endforeach




                            </tbody>
                        </table>
                        <!-- End Table -->
                        <div class="px-3 py-3">
                            {{$orders->links()}}
                        </div>
                        <!-- Footer -->

                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
</div>