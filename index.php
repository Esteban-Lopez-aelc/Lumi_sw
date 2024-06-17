<?php 

?>
<!-- Pagina principal del portal -->
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- metadatos -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0E1428">
    <!-- Enlaces y bibliotecas usadas; estilos, bootstrap -->
    <link rel="icon" type="image/png" href="./images/favicon.png">
    <title>LUMIREPORT - SISTEMA DE REPORTE DE LUMINARIAS</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- barra de navegacion -->
    <nav id="mainnav" class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="./images/menu_icon.png" alt="Logo" width="30" height="30"
                    class="d-inline-block align-text-top">
                LUMIREPORT
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contactanos</a>
                    </li>
                </ul>
                <a class="btn btn-primary" href="geovisor.php" role="button">Geovisor</a>
            </div>
        </div>
    </nav>
    <!-- hero section -->
    <div id="hero" class="py-6 d-md-py7">
        <div class="container ">
            <div id="insidehero" class="p-3 py-5 my-5 p-md-5 blurred-content">
                <h2 class="mb-4">¡Bienvenido a nuestro servicio de reporte de daños en luminarias!</h2>
                <p class="mb-4"> 
                    Reporta cualquier problema de iluminación pública de manera rápida y sencilla. 
                    Nuestro equipo resolverá cada reporte con prontitud para mantener 
                    nuestras calles seguras y bien iluminadas. 
                    ¡Gracias por ayudarnos a mantener nuestra comunidad brillando!
                </p>
                <div style="text-align: center;">
                    <a class="btn btn-primary" href="inicio_admin.php" role="button">ACCESO ADMINISTRACIÓN</a>
                    <a class="btn btn-primary" href="inicio_user.php" role="button">ACCESO USUARIOS</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Seccion acerca de lumireport -->
    <div class="scroll-reveal" id="about">
    <div id="aboutcover" class="py-5">
        <div class="container">
            <h3 class="text-center">Acerca de Lumireport</h3>
            <div class="row py-5 justify-content-center">
                <div class="col-md-8 text-center">
                    <p>En un esfuerzo por mejorar la seguridad y la calidad de vida en nuestra comunidad,
                        hemos puesto en marcha este proyecto de luminarias con el objetivo de 
                        mantener nuestras calles y espacios públicos adecuadamente iluminados.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="video-wrapper">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/zpYoEFHckog" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="video-caption text-center">
                        <h5>Primer tutorial</h5>
                        <p>Una introducción a Lumireport.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="video-wrapper">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/i5E0eLa4h74" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="video-caption text-center">
                        <h5>Segundo tutorial</h5>
                        <p>Cómo reportar una luminaria.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="video-wrapper">
                        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/PpIxPzQGOwE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="video-caption text-center">
                        <h5>Tercer tutorial</h5>
                        <p>Administracion y actualizacion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Seccion nuestros servicios -->
    <div id="services" class="py-5 scroll-reveal">
        <div class="container">
            <h3 class="text-center">Nuestros servicios</h3>
            <div class="text-center py-5">
                <div class="row">
                    <div class="col-md-4">
                        <img class="my-4" src="./images/icons/mantenimiento.png" alt="Tarot Card Readings Icon" height="100">
                        <h4> Mantenimiento Preventivo
                        </h4>
                        <p>Nuestro servicio de mantenimiento preventivo incluye inspecciones regulares y 
                            ajustes necesarios para asegurar el correcto funcionamiento de cada luminaria. 
                            Esto ayuda a prevenir problemas futuros y a maximizar la vida útil de tus sistemas 
                            de iluminación.</p>
                    </div>
                    <div class="col-md-4">
                        <img class="my-4" src="./images/icons/trabajador.png" alt="Career Path Alignment Icon" height="100">
                        <h4>Reparación y Sustitución</h4>
                        <p>En caso de que alguna luminaria presente problemas o averías, nuestro equipo de técnicos 
                            especializados estará disponible para realizar las reparaciones necesarias de manera rápida
                             y eficiente. Además, podemos gestionar la sustitución de luminarias obsoletas por modelos 
                             más modernos y eficientes.</p>
                    </div>
                    <div class="col-md-4">
                        <img class="my-4" src="./images/icons/centro-de-llamadas.png" alt="Life Purpose Exploration Icon" height="100">
                        <h4>Asesoramiento Personalizado</h4>
                        <p>Nuestro equipo de expertos está disponible para brindarte asesoramiento personalizado 
                            sobre las mejores soluciones de iluminación para tu comunidad, teniendo en cuenta 
                            tus necesidades específicas, presupuesto y objetivos a largo plazo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Seccion nosotros -->
    <div class="scroll-reveal" id="nosotros">
        <div id="featurecover" class="py-5">
            <div class="container">
                <h3 class="text-center">Nosotros</h3>
                <div class="text-center py-5">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <img src="./images/estudiantes/estudiante1.jpg" alt="Circular Image"
                                class="img-fluid rounded-circle my-4" style="width: 150px; height: 150px;">
                            <h4>
                                Andres Esteban Lopez
                            </h4>                         
                            <p>
                                Esteban Lopez, estudiante de ingeniería topográfica, Desarrolla actividades enfocadas en sistemas de informacion geografica y programacion.  
                                Lidera la implementación de soluciones técnicas para el proyecto de luminarias, asegurando su eficacia.
                            </p>
                            <a href="https://www.facebook.com/esteeban.lopeez"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/esteeban_l?igsh=M3ZrZTE1N2phMGEw"> <i class="bi bi-instagram"></i>
                            <a href="https://esteban-lopez-aelc.github.io/sitio_web/"><i class="bi bi-person-vcard"></i></a>
                        </div>
                        <div class="col-md-4">
                            <img src="./images/estudiantes/estudiante2.png" alt="Circular Image"
                                class="img-fluid rounded-circle my-4" style="width: 150px; height: 150px;">
                            <h4>Hilary Guzman Villarejo
                            </h4>
                            </a>
                            <p>
                                Hilary Guzman Villarejo es una estudiante de ingeniería topográfica con habilidades destacadas en desarrollo tecnológico. 
                                se destaca en comunicación y participación en distintas areas.
                                Lidera la implementación de soluciones técnicas para el proyecto de luminarias, asegurando su eficacia.            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Seccion de contactanos -->
    <div id="contact" class="py-5 scroll-reveal">
        <div class="container">
            <h3 class="text-center">Contactanos</h3>
            <div class="row py-5 justify-content-center">
                <div class="col-md-6 text-center">
                    <h4 class="mt-4">Telefono</h4>
                    <h5>
                        <a href="tel:+573137267893"><span class="me-5">+57 3137267893</span></a>
                    </h5>
                    <h5>
                        <a href="tel:+57311 6885721"><span class="me-5">+57 311 6885721</span></a>
                    </h5>
                    <h4 class="mt-4">Correo Electronico</h4>
                    <h5>andres.esteban.lopez@correounivalle.edu.co</h5>
                    <h5>hilary.guzman@correounivalle.edu.co</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Pie de pagina o footer -->
    <div class="scroll-reveal" id="footer">
        <div class="container">
            <div class="py-3 text-center">
                <p>© 2024 Lumireport. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
    <!-- Boton de regresar -->
    <button class="back-to-top" id="backToTopBtn">
        <i class="bi bi-arrow-up-short"></i>
    </button>
    <!-- Script adicionales -->
    <script src="./js/scrollreveal.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/swiper-bundle.min.js"></script>
    <script defer src="./js/script.js"></script>
</body>

</html>
