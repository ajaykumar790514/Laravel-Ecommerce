<div>
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-6 sm:px-6 lg:px-8 lg:py-6 mx-auto">
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
                                    Page Banner
                                </h2>
                            </div>
                            <button wire:click="$dispatch('openDrawer',{event:{component:'add-page-banner',params:{}}})"
                                class="py-1 rounded-md bg-indigo-100 text-indigo-700 px-6  font-semibold ">
                                <span class="text-xl">+</span> Add New</button>


                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead class="bg-gray-50 dark:bg-neutral-800">
                                <tr>


                                    <th scope="col" class="ps-6  py-3 whitespace-nowrap  text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Sr No.
                                            </span>
                                        </div>
                                    </th>
                                    <th scope="col" class="ps-6    text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Offer Banner Image
                                            </span>
                                        </div>
                                    </th>
                                    <th scope="col" class="ps-6    text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span
                                                class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Title
                                            </span>
                                        </div>
                                    </th>
                                    







                                    <th scope="col" class="px-6  text-end"></th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">

                                @foreach ($banners as $index=>$banner)
                                <tr>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 ">
                                            <span
                                                class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$index+1}}
                                            </span>

                                        </div>
                                    </td>
                                    <td class=" whitespace-nowrap">
                                        <div class="ps-6 pe-6 ">
                                            <div class="flex items-center gap-x-3">
                                                <div class="grow">
                                                    @if ($banner->image)
                                                    <img src="{{ asset($banner->image) }}" alt="Banner Image"
                                                        class="h-28 object-contain max-w-[300px]">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class=" whitespace-nowrap">
                                        <div class="px-6 ">
                                            <span
                                                class="block text-sm text-gray-900 capitalize dark:text-neutral-500">{{$banner->title}}</span>
                                        </div>
                                    </td>
                                  

                               
                                    </td>
                                    <td class=" whitespace-nowrap">
                                        <div class="px-6 ">
                                            <button title="Edit Banner Image"
                                                wire:click="$dispatch('openDrawer',{event:{component:'edit-page-banner',params:{id:{{$banner->id}}}}})">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class="size-5 text-emerald-900 mr-2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>

                                            </button>
                                            <button title="Delete Banner Image" wire:click="delete({{$banner->id}})"
                                                wire:confirm="Are You Want To Sure Delete Banner Image">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class="size-5 text-red-600">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>

                                            </button>
                                        </div>
                                    </td>

                                </tr>
                                @endforeach





                            </tbody>
                        </table>
                        <!-- End Table -->


                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
</div>