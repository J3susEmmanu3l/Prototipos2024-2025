<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body style="font-family: Arial, Helvetica, sans-serif; background-color: #e8e8e8;">
    <div class="centrar">
        <form class="form" action="{{url('upload')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <p class="title">Registrarse</p>
            <div class="flex">
            <label>
                <input required="" placeholder="" type="text" class="input" name="nombre">
                <span>Nombres</span>
            </label>

            <label>
                <input required="" placeholder="" type="text" class="input" name="apellido">
                <span>Apellido</span>
            </label>
        </div>

        <label>
            <input required="" placeholder="" type="email" class="input" name="email">
            <span>Correo Electrónico</span>
        </label>

    <div class="radio-group">
        <div class="radio-option">
        <input type="radio" id="docentes" name="userType" value="docentes" required>
        <label for="docentes" class="radio-label">Docentes</label>
        </div>
        <div class="radio-option">
        <input type="radio" id="estudiantes" name="userType" value="estudiantes"   required>
        <label for="estudiantes" class="radio-label">Estudiantes</label>
        </div>
    </div>

        <label>
            <input required="" placeholder="" type="password" class="input" name="password">
            <span>Contraseña</span>
        </label>
        <label>
            <input required="" placeholder="" type="password" class="input" name="password_confirmation">
            <span>Confirmar Contraseña</span>
        </label>
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password')}}</span>
        @endif
        <button class="submit">Registrarse</button>
        <p class="signin">Ya tienes una cuenta? <a href="{{asset('/iniciarsesion')}}">Iniciar Sesión</a> </p>
    </form>
    </div>
</body>
</html>
