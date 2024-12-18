<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olvidé mi Contraseña</title>
  <link rel="stylesheet" href="css/olvidar.css">
</head>
<body>
  <div class="centrar">
    <div class="container">
      <h2 class="heading">Recuperar Contraseña</h2>
      <p class="description">Introduce tu correo electrónico para recibir un enlace de recuperación.</p>
      <form class="form" action="/reset-password" method="post">
        <input
          type="email"
          class="input"
          name="email"
          placeholder="Correo Electrónico"
          required>

        <button type="submit" class="login-button">Enviar Enlace</button>
        <p class="back-link">
          <a href="iniciarsesion">Regresar al inicio</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
