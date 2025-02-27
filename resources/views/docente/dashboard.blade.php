<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Maestro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/docente.css') }}">
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
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Estudiantes</a></li>
                <li><a href="#">Asignaciones</a></li>
                <li><a href="#">Calificaciones</a></li>
                <li><a href="#">Configuración</a></li>
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
            <img class="foto" src="#" alt="Foto de perfil" id="img">
    </header>

        <!-- Main Content -->
        <main class="main-content">
            <header>
            <h1>Bienvenido, Profesor/a puto</h1>
            </header>
            <section class="content">
                <div class="card">
                    <h3>Estudiantes</h3>
                    <p>Ver lista completa de estudiantes</p>
                    <button>Ver más</button>
                </div>
                <div class="card">
                    <h3>Asignaciones</h3>
                    <p>Revisar y asignar tareas</p>
                    <button>Revisar</button>
                </div>
                <div class="card">
                    <h3>Calificaciones</h3>
                    <p>Gestionar calificaciones</p>
                    <button>Administrar</button>
                </div>
            </section>
        </main>
    </div>
    <!--SE CORRIGE SCRIP ESTABA PANEL MAESTRO SE COLOCA PANEL ALUMNO-->
    <script src="{{ asset('js/panelmaestro.js') }}"></script>
</body>
</html>
