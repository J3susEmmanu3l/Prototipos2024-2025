<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check-In-Mate</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
    AOS.init(); // Inicializar AOS
  </script>
  <header>
    <nav>
      <ul class="nav-links">
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Programas</a></li>
      </ul>
      <div class="brand">Check-In-Mate (Asistio)</div>

      <div class="Iniciar">
        <li><a href="{{route('login')}}">{{ __('Log in') }}</a></li>
      </div>
    </nav>
  </header>

  <script>
    const nav = document.querySelector(".nav");
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("abajo",window.scrollY>0);
    })
  </script>

  <main class="hero">
    <div class="hero-content">
      <h1>Escanea, registra y ahorra tiempo para enfocarte en enseñar.</h1>
      <p>¡Entra ahora y optimiza tu tiempo!</p>
      <div class="cta-hover">
        <a href="{{ route('register') }}" class="cta">{{ __('Star Now' )}}</a>
      </div>
    </div>
  </main>

  <section class="features">
    <div class="feature" data-aos="fade-up">
      <img src="photos/user-regular.jpg" alt="Regístrate" class="feature-icon">
      <h2>Regístrate</h2>
      <p>Comienza ahora y crea tu cuenta en pocos pasos. Simplifica el registro de asistencia para tus clases con nuestra plataforma fácil de usar.</p>
    </div>
    <div class="feature" data-aos="fade-up" data-aos-delay="200">
      <img src="photos/codigo-qr.png" alt="Pon el código" class="feature-icon">
      <h2>Pon el código</h2>
      <p>Genera y utiliza códigos QR personalizados para registrar la asistencia de tus estudiantes de manera rápida y sin errores.</p>
    </div>
    <div class="feature" data-aos="fade-up" data-aos-delay="400">
      <img src="photos/maestro.png" alt="Sigue dando clases" class="feature-icon">
      <h2>¡Sigue dando clases!</h2>
      <p>Dedica más tiempo a tus clases y menos a la gestión de asistencia. Nuestra herramienta trabaja por ti para que te concentres en enseñar.</p>
    </div>
  </section>

  <div class="cta-section">
    <a href="#" class="cta-red">Leer más</a>
  </div>

  <section class="info-section" data-aos="fade-left">
    <img src="photos/fondo2.jpg" alt="Gestión de asistencia">
    <div class="info-content">
      <h2>Innovación en la gestión de asistencia</h2>
      <p>Implementa un sistema moderno y eficiente para gestionar la asistencia en tus clases. Con nuestra herramienta QR, simplificarás procesos y ganarás confianza en el uso de tecnología para tus actividades diarias.</p>
    </div>
  </section>

  <!-- Segunda sección de información -->
  <section class="info-section2" data-aos="fade-right">
    <img src="photos/fondo3.jpg" alt="Gestión de asistencia">
    <div class="info-content2">
      <h2>¿Qué es Check-In-Mate?</h2>
      <p>Check-In-Mate es una plataforma web innovadora creada para facilitar y optimizar el proceso de pase de lista en entornos educativos. A través del uso de códigos QR, permite registrar la asistencia de los alumnos de forma ágil y precisa, eliminando la necesidad de métodos tradicionales y reduciendo el tiempo invertido en esta tarea. Los registros se almacenan automáticamente en una base de datos centralizada, proporcionando una gestión eficiente y confiable de la información.</p>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-container">
      <div class="footer-column">
        <h3>Sobre el Proyecto</h3>
        <p>Este es un prototipo desarrollado como parte <br> de un proyecto académico por estudiantes de <br> preparatoria. No representa un sitio oficial ni <br> está en uso comercial.</p>
      </div>
      <div class="footer-column">
        <h3>Equipo de Desarrollo</h3>
        <ul>
            <li style="padding-top: 10px;"><strong>Shiadani Andrade</strong> (Desarrolladora de Front-end)</li>
            <li style="margin-top: 10px;"><strong>Emmanuel Ruiz</strong> (Desarrollador de Back-end)</li>
            <li style="margin-top: 10px;"><strong>Eduardo Reyes</strong> (Desarrollador de Back-end)</li>
            <li style="margin-top: 10px;"><strong>Avril Moreno</strong> (Encargada de investigación y Marketing)</li>
        </ul>
      </div>
      <div class="footer-column">
        <h3>Contacto</h3>
        <p>¿Tienes alguna sugerencia o comentario? Contáctanos:</p>
        <p><a href="mailto:prototipo.checkinmate@gmail.com">prototipo.checkinmate@gmail.com</a></p>
      </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
