<div class="md:p-6 p-2">

    <div class="grid md:grid-cols-2 gap-5">


        <div class=" px-6 py-4 flex justify-between w-full bg-cover bg-no-repeat bg-white shadow-main rounded-lg"
            style="background-image: url('{{ asset('img/balance-bg.png') }}')">
            <div>
                <h3 class="font-medium text-xl text-gray-800">Total Income</h3>
                <p
                    class="font-bold text-3xl mt-2 bg-gradient-to-r from-yellow-600 to-red-600 inline-block  bg-clip-text text-transparent">
                    ₹ 1000</p>
                <p class="mt-2 text-sm">This Month</p>
            </div>
            <div class="relative">
                <img class="absolute top-0 -left-6" src="{{ asset('img/widget-img.png') }}" alt="">
                <img src="{{ asset('img/mobile.gif') }}" class="h-[150px]" alt="">
            </div>
        </div>
        <div class="grid md:grid-cols-2 gap-5">
            <div style="background-image: url('{{ asset('img/widget-bg.png ') }}')"
                class="bg-white  h-24 rounded-lg hover:-translate-y-1 duration-300 bg-cover bg-no-repeat w-full bg-top shadow-main relative overflow-hidden p-3 flex justify-between items-center">
                <div>
                    <h4 class="font-medium text-gray-800">Todays Product</h4>
                    <h2 class="font-semibold text-3xl mt-2">20</h2>
                </div>
                <div class=" p-5 absolute -right-4 rounded-full bg-gradient-to-tr from-indigo-200 to-transparent ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 text-indigo-800">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>


                </div>
            </div>
            <div style="background-image: url('{{ asset('img/widget-bg.png ') }}')"
                class="bg-white h-24 rounded-lg bg-cover bg-no-repeat w-full bg-top hover:-translate-y-1 duration-300 shadow-main relative overflow-hidden p-3 flex justify-between items-center">
                <div>
                    <h4 class="font-medium text-gray-800">Total Users</h4>
                    <h2 class="font-semibold text-3xl mt-2">20</h2>
                </div>
                <div class=" p-5 absolute -right-4 rounded-full bg-gradient-to-tr from-rose-200 to-transparent ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 text-rose-800">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>


                </div>
            </div>
            <div style="background-image: url('{{ asset('img/widget-bg.png ') }}')"
                class="bg-white h-24 rounded-lg bg-cover bg-no-repeat w-full bg-top hover:-translate-y-1 duration-300 shadow-main relative overflow-hidden p-3 flex justify-between items-center">
                <div>
                    <h4 class="font-medium text-gray-800">Total Order</h4>
                    <h2 class="font-semibold text-3xl mt-2">20</h2>
                </div>
                <div class=" p-5 absolute -right-4 rounded-full bg-gradient-to-tr from-fuchsia-200 to-transparent ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 text-fuchsia-800">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                    </svg>


                </div>
            </div>
            <div style="background-image: url('{{ asset('img/widget-bg.png ') }}')"
                class="bg-white h-24 rounded-lg bg-cover bg-no-repeat w-full bg-top hover:-translate-y-1 duration-300 shadow-main relative overflow-hidden p-3 flex justify-between items-center">
                <div>
                    <h4 class="font-medium text-gray-800">Pending Order</h4>
                    <h2 class="font-semibold text-3xl mt-2">20</h2>
                </div>
                <div class=" p-5 absolute -right-4 rounded-full bg-gradient-to-tr from-yellow-200 to-transparent ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 text-yellow-800">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>


                </div>
            </div>

        </div>





    </div>

    <div class="mt-5 grid md:grid-cols-3 gap-5">
        <div class="h-80 bg-white rounded-lg md:col-span-2 shadow-main p-4">
            <h3 class="font-medium">Order History</h3>
        </div>
        <div class="h-80 bg-white rounded-lg shadow-main  p-4">

            <h3 class="font-medium ">Product Category</h3>

            <div wire:ignore id="chart" class="mt-4">

            </div>
        </div>
    </div>
    {{-- Latest Order --}}
    <div class="mt-5 grid md:grid-cols-3 gap-5">
        <div class=" bg-white dark:bg-neutral-800 dark:text-gray-100 rounded-lg  shadow-main p-5">
            <div class="flex items-center justify-between border-b-[1.1px] pb-3">
                <h3 class=" text-xl font-medium">New User</h3>
                <div>
                    <div class="inline-flex gap-x-2">
                        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                            href="{{ route('users') }}">
                            View all
                        </a>


                    </div>
                </div>
            </div>
            <div class="mt-5">
                @foreach ($users as $user)
                <div class="border-b-[1px] py-2 flex justify-between items-center">
                    <div>
                        <h3 class="font-medium text-[15px]">{{$user->name}}</h3>
                        <p class="text-gray-700 text-[14px] dark:text-neutral-300">{{$user->email}}</p>
                    </div>
                    <p class="text-xs">{{$user->created_at->diffForHumans()}}</p>
                </div>
                @endforeach





            </div>
        </div>

        <!-- Table Section -->
        <div class=" md:col-span-2 ">
            <!-- Card -->
            <div class="flex  flex-col">
                <div class="overflow-x-auto">
                    <div class=" min-w-full inline-block align-middle">
                        <div
                            class="bg-white border border-gray-200 rounded-md shadow-main overflow-hidden dark:bg-neutral-800 dark:border-neutral-700">
                            <!-- Header -->
                            <div
                                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                        New Orders </h2>

                                </div>

                                <div>
                                    <div class="inline-flex gap-x-2">
                                        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                            href="{{ route('manage_order') }}">
                                            View all
                                        </a>


                                    </div>
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

                                        <th scope="col" class=" py-3 text-center ">
                                            <div class="flex items-center gap-x-2">
                                                <span
                                                    class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                    Method
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col" class=" py-3 text-center ">
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
                                                    Total Amount
                                                </span>
                                            </div>
                                        </th>






                                        <th scope="col" class="px-6 py-3 text-end sr-only">Edit</th>
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    @foreach ($orders as $order)
                                    <tr>
                                        <td class=" whitespace-nowrap">
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                                    </svg>

                                                    {{$order->payment_status}}
                                                </span>
                                                @else
                                                <span
                                                    class="py-1 px-2 inline-flex capitalize items-center gap-x-1 text-xs font-medium bg-emerald-100 text-emerald-900 rounded-md dark:bg-yellow-500/10 dark:text-yellow-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                    </svg>

                                                    {{$order->payment_status}}
                                                </span>
                                                @endif
                                            </div>
                                        </td>
                                        <td class=" whitespace-nowrap">
                                            <div class=" py-3">
                                                <div class="flex items-center gap-x-3">
                                                    <span
                                                        class="text-xs text-gray-900 font-medium dark:text-neutral-500">₹
                                                        {{$order->total_amount}}</span>

                                                </div>
                                            </div>
                                        </td>
                                        <td class=" whitespace-nowrap">
                                            <div class=" py-3">
                                                <div class="flex items-center gap-x-3">
                                                    <span
                                                        class="text-xs text-gray-500 font-medium dark:text-neutral-500">
                                                        {{$order->created_at->diffForHumans()}}
                                                    </span>

                                                </div>
                                            </div>
                                        </td>


                                    </tr>

                                    @endforeach




                                </tbody>
                            </table>
                            <!-- End Table -->

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

</div>

@push('js')


<script>
    document.addEventListener('livewire:init', function() {

        var options= @json($categoryData['chartOptions']);

        options.labels = @json($categoryData['labels']);

        options.series = @json($categoryData['series']);

    

var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();
    });
</script>

@endpush