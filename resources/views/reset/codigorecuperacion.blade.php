<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Código de recuperación</title>
  <link rel="stylesheet" href="css/codigorecuperacion.css">
</head>
<body>
  <div class="centrar">
    <div class="container">
      <h2 class="heading">Introduce el código</h2>
      <p class="description">Introduce el código de 6 dígitos que se ha enviado a tu correo electrónico</p>
      <form class="form" action="/reset-password" method="post">
        <input
          type="email"
          class="input"
          name="email"
          placeholder="Introduce el código"
          required>
        <button type="submit" class="login-button">Cambiar contraseña</button>
        <p class="back-link">
          <a href="iniciarsesion">Regresar al inicio</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
