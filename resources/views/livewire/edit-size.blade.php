<div wire:ingore>

    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">

        <h3 class="font-bold text-gray-800 dark:text-white">
            Update Size
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
    <div class="p-4">

        <div wire:ignore.self>
            <label for="title" class="dark:text-white font-medium pb-2">Name</label>
            <input type="text"
                class="w-full mt-2 rounded-md bg-transparent  dark:text-slate-50 placeholder:dark:text-white"
                placeholder="Medium" name="" id="" wire:model.live='name'>

            @error('name')
            <span wire:ignore.self class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        <div wire:ignore.self class="mt-2">
            <label for="title" class="dark:text-white font-medium pb-2">Code </label>
            <input type="text"
                class="w-full mt-2 rounded-md bg-transparent  dark:text-slate-50 placeholder:dark:text-white"
                placeholder="M" name="" id="" wire:model.live='code'>

            @error('code')
            <span wire:ignore.self class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        

        <div class="mt-2" wire:ignore.self>
            <label for="title" class="dark:text-white font-medium pb-1">Status
            </label>
            <select name="" id="" wire:model.live="status"
                class="w-full mt-1 rounded-md bg-transparent dark:text-slate-50 placeholder:dark:text-white">
                <option class="bg-transparent dark:text-white dark:bg-black" value="1">Active
                </option>
                <option class="bg-transparent dark:text-white  dark:bg-black" value="0">
                    Deactive
                </option>
            </select>
        </div>
        <div class="mt-3" wire:ignore.self>

            <button wire:click="submit" type="button" wire:loading.attr="disabled" wire:target="icon"
                wire:loading.class="opacity-50 cursor-not-allowed"
                class="py-1.5 hover:bg-primary/90 w-full px-5 rounded-md bg-primary text-white font-medium">
                Submit
            </button>



        </div>

    </div>


</div>