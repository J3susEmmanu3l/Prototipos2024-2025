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
