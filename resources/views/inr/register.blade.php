<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-In-Mate</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
  <div class="centrar">
    <div class="container">
            <div class="heading">{{__('Register')}}</div>

            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="flex">
                  <label>
                    <input required placeholder="¨{{__('Name')}}" type="text" class="name" name="name">
                  </label>

                  <label>
                    <input required placeholder="{{__('Last Name')}}" type="text" class="name" name="apellido">
                  </label>
                </div>

                <input placeholder={{__('Email')}} id="email" name="email" type="email" class="input email-field" required=""/>

                <div class="radio-group">
                    <label class="radio-label">
                      <input type="radio" name="user-type" value="1" class="radio-option">
                      Docente

                    </label>
                    <label class="radio-label">
                      <input type="radio" name="user-type" value="2" class="radio-option">
                      Estudiante
                    </label>
                </div>

                <input placeholder="{{__('Password')}}" id="password" name="password" type="password" class="input password-field" required=""/>

                <input required placeholder="{{__('Confirm Password')}}" type="password" class="input password-field" name="password_confirmation">

                <div class="show-password">
                    <input type="checkbox" id="show-password">
                    <label for="show-password">{{__('Show Password')}}</label>
                </div>

                @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif

                <button class="login-button">{{ __('Register') }}</button>
                <p class="signup">{{ __('Already registered?') }} <a href="{{ asset('/login') }}">Iniciar Sesión</a></p>
            </form>
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






<!-- filepath: /c:/xampp/htdocs/laravel/Prototipos2024-2025/resources/views/auth/register.blade.php -->
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Role Selection Radios -->
        <div class="mt-4">
            <span class="text-gray-700">Selecciona tu rol:</span>
            <div class="flex items-center mt-2">
                <input type="radio" id="estudiante" name="tipo" value="0" class="mr-2"
                    {{ old('tipo') == '0' ? 'checked' : '' }} required>
                <label for="estudiante">Estudiante</label>
            </div>
            <div class="flex items-center mt-2">
                <input type="radio" id="docente" name="tipo" value="1" class="mr-2"
                    {{ old('tipo') == '1' ? 'checked' : '' }} required>
                <label for="docente">Docente</label>
            </div>
            <x-input-error :messages="$errors->get('tipo')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
