<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{--
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />

            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div> --}}
        <div class="login-form">
            <h4 class="login-title">Login</h4>
            <div class="row">
                <div class="col-md-12 col-12 mb-20">
                    <label for="email">Email Address*</label>
                    <input id="email" class="mb-0" name="email" type="email" placeholder="Email Address" autofocus>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>
                <div class="col-12 mb-20">
                    <label for="password">Password</label>
                    <input id='password' class="mb-0" type="password" name="password" placeholder="Password" required
                        autocomplete="current-password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>
                <div class="col-md-8">
                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                        <input type="checkbox" id="remember_me"   name="remember">
                        <label for="remember_me">Remember me</label>
                    </div>
                </div>
                <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                    <a href="{{ route('register') }}"> Create New Account </a>
                    {{-- <a href="#"> Forgotten pasward?</a> --}}
                </div>
                <div class="col-md-12">
                    <button class="register-button mt-0">Login</button>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>