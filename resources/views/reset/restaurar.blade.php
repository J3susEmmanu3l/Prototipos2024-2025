<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurar Contraseña</title>
  <link rel="stylesheet" href="css/restaurar.css">
</head>
<body>
  <div class="centrar">
    <div class="container">
      <h2 class="heading">Cambia tu contraseña</h2>

      <p class="description">Añade tu nueva contraseña</p>
      <form class="form" action="/reset-password" method="post">
        <input placeholder="Nueva contraseña" id="password" name="password" type="password" class="input password-field" required=""/>

        <input required placeholder="Confirmar Contraseña" type="password" class="input password-field" id="confirm-password" name="password_confirmation">

        <div class="show-password">
            <input type="checkbox" id="show-password">
            <label for="show-password">Mostrar contraseña</label>
        </div>

        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
         @endif

        <button type="submit" class="login-button">Cambiar contraseña</button>
        <p class="back-link">
          <a href="iniciarsesion">Regresar al inicio</a>
        </p>
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
