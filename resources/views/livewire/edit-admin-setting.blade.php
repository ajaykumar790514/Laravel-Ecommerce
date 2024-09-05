<div class="overflow-y-auto">
    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">

        <h3 class="font-semibold text-indigo-700  dark:text-white">
            Update Site Setting
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

    <div class="p-3">
        <div>
            <label for="title" class="dark:text-white text-sm text-indigo-700 font-medium pb-2">Name : </label>
            <input type="text" autofocus
                class="w-full mt-2 rounded-sm bg-transparent  dark:text-slate-50 placeholder:dark:text-white"
                placeholder="Enter Company Name" name="" id="" wire:model.live='name'>

            @error('name')
            <span wire:ignore.self class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-3">
            <label for="title" class="dark:text-white text-sm text-indigo-700 font-medium pb-2">Logo : </label>
            <input type="file" accept="image/*"
                class="w-full mt-2 border rounded-sm bg-transparent  dark:text-slate-50 placeholder:dark:text-white"
                placeholder="Enter Company Name" name="" id="" wire:model.live='logo'>

            @error('logo')
            <span wire:ignore.self class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-3">
            <label for="title" class="dark:text-white text-sm text-indigo-700 font-medium pb-2">Favicon : </label>
            <input type="file"
                class="w-full mt-2 border rounded-sm bg-transparent  dark:text-slate-50 placeholder:dark:text-white"
                placeholder="Enter Company Name" name="" id="" wire:model.live='favicon'>

            @error('favicon')
            <span wire:ignore.self class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-3">
            <label for="title" class="dark:text-white text-sm text-indigo-700 font-medium pb-2">Slogan : </label>
            <textarea name="" wire:model.live='slogan'
                class="w-full mt-2 border rounded-sm bg-transparent  dark:text-slate-50 placeholder:dark:text-white"
                id="" cols="30" rows="4" placeholder="Enter Company Slogan"></textarea>

            @error('slogan')
            <span wire:ignore.self class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-2">
            <label for="title" class="dark:text-white text-sm text-indigo-700 font-medium pb-2">Address : </label>
            <textarea name="" wire:model.live='address'
                class="w-full mt-2 border rounded-sm bg-transparent  dark:text-slate-50 placeholder:dark:text-white"
                id="" cols="30" rows="2" placeholder="Enter Company Slogan"></textarea>

            @error('address')
            <span wire:ignore.self class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-3">
            <label for="title" class="dark:text-white text-sm text-indigo-700 font-medium pb-2">Facebook : </label>
            <input class="w-full mt-2  rounded-sm bg-transparent  dark:text-slate-50 placeholder:dark:text-white"
                placeholder="Enter Facebook link" name="" id="" wire:model.live='facebook'>

            @error('facebook')
            <span wire:ignore.self class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-3">
            <label for="title" class="dark:text-white text-sm text-indigo-700 font-medium pb-2">Twitter : </label>
            <input class="w-full mt-2  rounded-sm bg-transparent  dark:text-slate-50 placeholder:dark:text-white"
                placeholder="Enter Twitter link" name="" id="" wire:model.live='twitter'>

            @error('twitter')
            <span wire:ignore.self class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-3">
            <label for="title" class="dark:text-white text-sm text-indigo-700 font-medium pb-2">Instagram : </label>
            <input class="w-full mt-2  rounded-sm bg-transparent  dark:text-slate-50 placeholder:dark:text-white"
                placeholder="Enter Instagram link" name="" id="" wire:model.live='instagram'>

            @error('instagram')
            <span wire:ignore.self class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-3">
            <label for="title" class="dark:text-white text-sm text-indigo-700 font-medium pb-2">Linkedin : </label>
            <input class="w-full mt-2  rounded-sm bg-transparent  dark:text-slate-50 placeholder:dark:text-white"
                placeholder="Enter Linkedin link" name="" id="" wire:model.live='linkedin'>

            @error('linkedin')
            <span wire:ignore.self class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        <div class="mt-3">
            <label for="title" class="dark:text-white text-sm text-indigo-700 font-medium pb-2">YouTube : </label>
            <input class="w-full mt-2  rounded-sm bg-transparent  dark:text-slate-50 placeholder:dark:text-white"
                placeholder="Enter YouTube link" name="" id="" wire:model.live='youtube'>
    
            @error('youtube')
            <span wire:ignore.self class="text-red-600">{{$message}}</span>
            @enderror
        </div>

        <div class="mt-4 pb-10">
            <button class="py-1.5 px-10 w-full bg-indigo-600 text-white" wire:click ="submit"> Submit</button>
        </div>
    </div>
    
</div>
</div>