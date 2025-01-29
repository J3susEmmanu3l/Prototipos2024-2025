<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Alumno</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <!--SE CORRIGE HOJA DE REFERENCIA, ESTABA PANEL DE MAESTRO SE CAMBIA A PANEL DE ALUMNO-->
    <link rel="stylesheet" href="css/estudiante.css">

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
                <li><a href="#">Mis Materias</a></li>
                <li><a href="#">Calificaciones</a></li>
                <li><a href="#">Faltas</a></li>
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
                <div class="cerrarsesion">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>

            </ul>

        </nav>
                                                                            <!-- SE AGREGA ID A IMAGEN-->
            <img class="foto" src="#" alt="Foto de perfil" id="img">
    </header>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>Bienvenido, {{ $nombre }}</h1>
            </header>
            <section class="content">
                <div class="card">
                    <h3>Mis Faltas</h3>
                    <p>Tienes <strong>3</strong> faltas en Matemáticas.</p>
                    <button>Ver detalles</button>
                </div>
                <div class="card">
                    <h3>Materias</h3>
                    <p>Consulta tus materias y horarios.</p>
                    <button>Ir a mis materias</button>

                </div>
                <div class="card">
                    <h3>Calificaciones</h3>
                    <p>Revisa tus calificaciones más recientes.</p>
                    <button>Ver calificaciones</button>
                </div>
            </section>
        </main>
    </div>
    <!--SE CORRIGE SCRIP ESTABA PANEL MAESTRO SE COLOCA PANEL ALUMNO-->
    <script src="js/panelalumno.js"></script>
</body>
</html>
