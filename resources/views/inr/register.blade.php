<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body style="font-family: Arial, Helvetica, sans-serif; background-color: #e8e8e8;">
  <div class="centrar">
    <div class="container">
            <div class="heading">Registrarse</div>

            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <form class="form" action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex">
                  <label>
                    <input required placeholder="Nombre" type="text" class="name" name="nombre">
                  </label>

                  <label>
                    <input required placeholder="Apellido" type="text" class="name" name="apellido">
                  </label>
                </div>

                <input placeholder="Correo electrónico" id="email" name="email" type="email" class="input email-field" required=""/>

                <div class="radio-group">
                    <label class="radio-label">
                      <input type="radio" name="user-type" value="docentes" class="radio-option">
                      Docentes

                    </label>
                    <label class="radio-label">
                      <input type="radio" name="user-type" value="estudiantes" class="radio-option">
                      Estudiantes
                    </label>
                </div>

                <input placeholder="Contraseña" id="password" name="password" type="password" class="input password-field" required=""/>

                <input required placeholder="Confirmar Contraseña" type="password" class="input password-field" name="password_confirmation">

                <div class="show-password">
                    <input type="checkbox" id="show-password">
                    <label for="show-password">Mostrar contraseña</label>
                </div>

                @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif

                <button class="login-button">Registrarse</button>
                <p class="signup">¿Ya tienes una cuenta? <a href="{{ asset('/iniciarsesion') }}">Iniciar Sesión</a></p>
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
