<div class="p-4">
    <div class="flex justify-between items-center py-3 px-1 border-b dark:border-neutral-700">

        <h3 class="font-semibold text-purple-800 dark:text-white">
            Manage Order
        </h3>


        <button type="button"
            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700"
            wire:click="$dispatch('closeDrawer')">
            <span class="sr-only">Close modal</span>
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
            </svg>
        </button>
    </div>
    <div class="mt-5">
        <label for="payStatus" class="font-medium text-sm">Payment Status : </label>

        <select name="" class="w-full mt-2 rounded-sm " id="payStatus" wire:model.live="payment_status">
            <option value="unpaid">UnPaid</option>
            <option value="paid">Paid</option>

        </select>
    </div>
    <div class="mt-5">
        <label for="Delivery" class="font-medium text-sm"> Delivery Date : </label>

        <input type="date" class="mt-2 rounded-sm w-full" wire:model.live="delivery_date" name="" id=""
            min='{{$minDate}}'>
    </div>
    <div class="mt-5">
        <label for="Status" class="font-medium text-sm"> Status : </label>

        <select name="" class="w-full mt-2 rounded-sm " id="Status" wire:model.live="status">
            <option value="pending">Pending</option>
            <option value="accepted">Accepted</option>
            <option value="cancelled">Cancelled</option>
            <option value="delivered">Delivered</option>
        </select>
    </div>
    <div class="mt-5">
        <button wire:click = "submit" class="font-medium bg-purple-600 text-white py-1.5 px-10 rounded-sm w-full">Submit</button>
    </div>
</div>