<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/docente/clases.css') }}">
</head>
<body>

    <header class="header-principal">
        <!-- Ícono del menú hamburguesa -->
        <button id="abrir" class="abrir-menu">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

        <nav class="nav" id="nav">
            <!-- Ícono de cierre del menú -->
            <button class="cerrar-menu" id="cerrar">
                <div class="hamburger close">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

            <ul class="nav-list">
                <li><a href="{{ route('docente.dashboard') }}">{{ __('Home') }}</a></li>
                <li><a href="#">Grupos</a></li>
                <li><a href="#">Asignaciones</a></li>
                <li><a href="#">Calificaciones</a></li>
            </ul>
        </nav>

        <nav class="nav nav2" id="nav2">
            <!-- Ícono de cierre del menú -->
            <button class="cerrar-menu" id="cerrar2">
                <div class="hamburger close">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

            <ul class="nav-list">
                <li><a href="#">Mi perfil</a></li>
                <li><a href="#">Configuración</a></li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="cerrarsesion" >
                        {{ __('Log Out') }}
                    </button>
                </form>
            </ul>

        </nav>
             <!-- SE AGREGA ID A IMAGEN-->
            <img class="foto" src="how2.jpg" alt="Foto de perfil" id="img">
    </header>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>Bienvenido, Profesor</h1>
            </header>
            <section class="content">
            <!-- Botón grande con "+" -->
            <a href="" class="add-button">+</a>
        </main>

        <!--Modal (Ventana emergente) -->
        <div id="modal" class="modal">
            <div class="modal-content">
                    <h2 class="text-modal">Agregar una nueva clase</h2>
                    <p class="text-modal2">Introduce los detalles de la nueva clase:</p>
                <input type="text" placeholder="Nombre de la clase" id="class-name"><br><br>
                <button class="Agregar-btn" onclick="agregarModal()">Agregar</button>
                <button class="Agregar-btn" id="cerrar-modal">Cerrar</button> <!-- Se cambia onclick por id -->
            </div>
        </div>
    <!--SE CORRIGE SCRIPT ESTABA PANEL MAESTRO SE COLOCA PANEL ALUMNO-->
    <script src="{{ asset('js/docente/clases.js') }}"></script>

</body>
</html>
