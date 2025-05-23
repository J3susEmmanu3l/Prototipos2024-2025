<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-In-Mate</title>
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
</head>
<body style="font-family: Arial, Helvetica, sans-serif; background: url(photos/fondo1.png); height: 100vh;">

    <div class="centrar">
        <div class="container">
            <div class="heading">{{ __('Log in') }}</div>

            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <form method="POST" action="{{ route('login') }}">
                 @csrf
                <input
                    placeholder="{{ __('Email') }}"
                    id="email"
                    name="email"
                    type="email"
                    class="input email-field"
                    required=""
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <input
                    placeholder="{{ __('Password') }}"
                    id="password"
                    name="password"
                    type="password"
                    class="input password-field"
                    required=""
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <div class="show-password">
                    <input type="checkbox" id="show-password">
                    <label for="show-password">{{ __('Show Password') }}</label>
                </div>


                <button class="login-button">{{ __('Log In') }}</button>
            </form>
            <p class="signup"> {{ __('Dont have an account?') }} <a href="{{ route('register') }}">Regístrate</a></p>
        </div>
    </div>
    <script>
        // Mostrar u ocultar contraseñas al marcar el checkbox
        document.getElementById('show-password').addEventListener('change', function () {
            const passwordFields = document.querySelectorAll('.password-field');
            passwordFields.forEach(field => {
                field.type = this.checked ? 'text' : 'password';
            });
        });
    </script>
</body>
</html>


<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
