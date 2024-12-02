<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" href="css/iniciarsesion.css">
</head>
<body style="font-family: Arial, Helvetica, sans-serif; background-color: #e8e8e8;">
    <div class="centrar">
        <div class="container">
            <div class="heading">Iniciar sesión</div>

            @if (session('error'))
                <p style="color: red;">{{ session('error') }}</p>
            @endif

            <form class="form" action="{{ route('login') }}" method="POST">
                @csrf
                <input
                    placeholder="Correo electrónico"
                    id="email"
                    name="email"
                    type="email"
                    class="input email-field"
                    required=""
                />
                <input
                    placeholder="Contraseña"
                    id="password"
                    name="password"
                    type="password"
                    class="input password-field"
                    required=""
                />
                <div class="show-password">
                    <input type="checkbox" id="show-password">
                    <label for="show-password">Mostrar contraseña</label>
                </div>

                <span class="forgot-password"><a href="#">¿Olvidaste tu contraseña?</a></span>
                <input value="Iniciar sesión" type="submit" class="login-button" />
            </form>
            <p class="signup">¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
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
