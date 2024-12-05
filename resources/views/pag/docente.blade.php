<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Maestro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/docente.css">
    <script src="js/panelmaestro.js"></script>
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
            <img class="foto" src="how2.jpg" alt="Foto de perfil">
    </header>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>Bienvenido, Profesor</h1>
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
    <script src="Panel_de_maestro.js"></script>
</body>
</html>
