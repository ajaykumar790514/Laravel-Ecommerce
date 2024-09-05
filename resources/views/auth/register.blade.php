<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        {{-- <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div> --}}

        <div class="login-form">
            <h4 class="login-title">Register</h4>
            <div class="row">
                <div class="col-md-6 col-12 mb-20">
                    <label>Full Name</label>
                    <input class="mb-0" required autofocus name="name" type="text" placeholder="Full Name">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                </div>
                <div class="col-md-6 col-12 mb-20">
                    <label>Mobile No.</label>
                    <input class="mb-0" required name="mobile" type="text" placeholder="Mobile No.">
                    <x-input-error :messages="$errors->get('mobile')" class="mt-2" />

                </div>
                <div class="col-md-12 mb-20">
                    <label>Email Address*</label>
                    <input class="mb-0" required name="email" type="email" placeholder="Email Address">
                </div>
                <div class="col-md-6 mb-20">
                    <label>Password</label>
                    <input class="mb-0" name="password"  required type="password" placeholder="Password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>
                <div class="col-md-6 mb-20">
                    <label>Confirm Password</label>
                    <input   name="password_confirmation"  class="mb-0" required type="password" placeholder="Confirm Password">
                </div>
                <div class="col-md-12  text-md-right">
                    <a                 href="{{ route('login') }}"> Already registered?</a>
                </div>
                <div class="col-12">
                    <button class="register-button mt-0">Register</button>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>