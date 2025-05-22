<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-In-Mate</title>
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
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
                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                <input placeholder={{__('Email')}} id="email" name="email" type="email" class="input email-field" required=""/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <div class="radio-group">
                    <label class="radio-label">
                      <input type="radio" name="tipo" value="1" class="radio-option"
                      {{ old('tipo') == '1' ? 'checked' : '' }} required>
                      Docente

                    </label>
                    <label class="radio-label">
                      <input type="radio" name="tipo" value="0" class="radio-option"
                      {{ old('tipo') == '0' ? 'checked' : '' }} required>
                      Estudiante
                    </label>
                    <x-input-error :messages="$errors->get('tipo')" class="mt-2" />
                </div>

                <div>
                    <input placeholder="{{__('Password')}}" id="password" name="password" type="password" class="input password-field" required=""/>

                    <input required placeholder="{{__('Confirm Password')}}" type="password" class="input password-field" name="password_confirmation">

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

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
