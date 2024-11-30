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
            <form class="form" action="">
              <input
                placeholder="Correo electrónico"
                id="email"
                name="email"
                type="email"
                class="input"
                required=""
              />
              <input
                placeholder="Contraseña"
                id="password"
                name="password"
                type="password"
                class="input"
                required=""
              />
              <span class="forgot-password"><a href="#">Olvidaste tu contraseña?</a></span>
              <input value="Iniciar sesión" type="submit" class="login-button" />
            </form>
            <p class="signup">No tienes cuenta? <a href="register">Sign up</a></p>
    </div>
</body>
</html>
