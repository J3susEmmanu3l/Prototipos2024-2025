<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Alumno</title>
    <link rel="stylesheet" href="css/estudiante.css">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <nav class="sidebar">
            <h2>Alumno</h2>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Mis Materias</a></li>
                <li><a href="#">Calificaciones</a></li>
                <li><a href="#">Faltas</a></li>
                <li><a href="#">Perfil</a></li>
            </ul>
            <a href="#" class="logout">Cerrar sesión</a>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>Bienvenido, [Nombre del Alumno]</h1>
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
</body>
</html>
