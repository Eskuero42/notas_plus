<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Escuela</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('principal/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('principal/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('principal/assets/css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('principal/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('principal/assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>


<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <!-- formuario login-->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a class="brand-link" style="display: flex; align-items: center; padding: 10px;">
                            <img src="{{ asset('img/recurso7.png') }}" alt="Logo 1" class="brand-image img-circle elevation-4"
                                style="box-shadow: 4px 4px 12px 2px rgba(0, 0, 0, 0.4); width: 50px; height: 60px; background-color: white; margin-right: 25px;border-radius: 50px;">
                            <img src="{{ asset('img/recurso6.png') }}" alt="Logo 2"
                                style="box-shadow: 4px 4px 12px 2px rgba(0, 0, 0, 0.4); width: 120px; height: 30px; background-color: white; border-radius: 10px;">
                        </a>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section">
                                <a href="#top" class="active" style="font-size: 15px; font-weight: bold;">Inicio</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#services" style="font-size: 15px; font-weight: bold;">Servicios</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#courses" style="font-size: 15px; font-weight: bold;">Cursos</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#events" style="font-size: 15px; font-weight: bold;">Eventos</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#contact" style="font-size: 15px; font-weight: bold;">Contactos</a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#loginModal" class="scroll-to-section" data-bs-toggle="modal" style="font-size: 15px; font-weight: bold;">
                                    Iniciar Sesión
                                </a>
                            </li>
                            <li class="scroll-to-section">
                                <a href="#verificationModal" class="scroll-to-section" data-bs-toggle="modal" style="font-size: 15px; font-weight: bold;">
                                    <img src="{{('img/login.png')}}" alt="Registrar Administrador" style="width: 20px; height: 20px;">
                                </a>
                            </li>
                            
                        </ul>
                        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                            <div class="header-text">
                                <span class="category">Nuestros Cursos</span>
                                <h2>Con Maestros Calificados, ¡Todo Es Más Fácil!</h2>
                                <p>En la Escuela Primaria "San Juan", ofrecemos una educación integral con maestros
                                    comprometidos y especializados en cada área. Nos basamos en métodos innovadores
                                    que
                                    facilitan el aprendizaje de nuestros estudiantes en un ambiente inclusivo.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Solicitar Información</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> ¿Por Qué Elegirnos?</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item item-2">
                            <div class="header-text">
                                <span class="category">Mejores Resultados</span>
                                <h2>Obtén los mejores resultados con tu esfuerzo</h2>
                                <p>En la Escuela Primaria "San Juan", fomentamos el esfuerzo y el compromiso para
                                    que
                                    nuestros estudiantes alcancen su máximo potencial. Con un enfoque educativo
                                    personalizado, cada niño recibe la atención que necesita para sobresalir.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Solicitar Información</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> ¿Qué significa obtener el mejor
                                            resultado?</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item item-3">
                            <div class="header-text">
                                <span class="category">Educación Innovadora</span>
                                <h2>La Educación Innovadora te ayuda a alcanzar el éxito</h2>
                                <p>En la Escuela Primaria "San Juan", incorporamos métodos educativos innovadores
                                    que
                                    fomentan el pensamiento crítico y la creatividad, preparando a nuestros
                                    estudiantes
                                    para enfrentar los desafíos del futuro.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Solicitar Información</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> ¿Qué es la Educación
                                            Innovadora?</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('principal/assets/images/service-01.png') }}" alt="online degrees">
                        </div>
                        <div class="main-content">
                            <h4>Programas Educativos</h4>
                            <p>En la Escuela Primaria "San Juan", ofrecemos programas
                                innovadores diseñados para el desarrollo académico y personal
                                de nuestros estudiantes, adaptados a sus necesidades y enfocados
                                en el aprendizaje integral y creativo.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('principal/assets/images/service-02.png') }}" alt="short courses">
                        </div>
                        <div class="main-content">
                            <h4>Cursos Cortos</h4>
                            <p>En la Escuela Primaria "San Juan", brindamos
                                una serie de cursos cortos enfocados en áreas
                                como ciencias, matemáticas y lectura, con el fin
                                de complementar el aprendizaje y potenciar el desarrollo
                                de habilidades clave para nuestros estudiantes.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('principal/assets/images/service-03.png') }}" alt="web experts">
                        </div>
                        <div class="main-content">
                            <h4>Profesores Especializados</h4>
                            <p>En la Escuela Primaria "San Juan", contamos
                                con un equipo de profesionales altamente
                                capacitados en distintas áreas educativas, que brindan
                                un enfoque personalizado y motivador para fomentar el aprendizaje
                                y crecimiento de cada estudiante.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ¿Por dónde comenzar?
                                </button>
                            </h2>

                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    En la Escuela Primaria "San Juan", ofrecemos una educación
                                    integral y personalizada para cada estudiante. Nuestro
                                    enfoque educativo se basa en principios sólidos que
                                    promueven el desarrollo cognitivo, emocional y
                                    social de los niños, brindando herramientas para su
                                    crecimiento académico y personal. A través de una enseñanza
                                    innovadora y actividades extracurriculares, buscamos formar
                                    futuros líderes comprometidos con su comunidad y el mundo.
                                </div>
                            </div>

                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿Cómo trabajamos juntos?
                                </button>

                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    En la Escuela Primaria "San Juan",
                                    creemos que el éxito de nuestros estudiantes
                                    depende de una colaboración estrecha entre
                                    los padres, los maestros y la comunidad escolar.
                                    Trabajamos juntos para ofrecer un ambiente de a
                                    prendizaje seguro, estimulante y enriquecedor.
                                    Fomentamos la participación activa de las familias a
                                    través de reuniones, eventos escolares y actividades
                                    extracurriculares, con el objetivo de apoyar el
                                    crecimiento académico y personal de cada niño.
                                </div>

                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    ¿Por qué la Escuela "San Juan" es la mejor?
                                </button>

                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    En la Escuela Primaria "San Juan",
                                    nos enorgullece ofrecer un ambiente
                                    educativo de calidad, donde los estudiantes
                                    reciben una formación integral en valores,
                                    conocimientos académicos y habilidades sociales.
                                    Contamos con un equipo docente altamente calificado
                                    y programas educativos innovadores que garantizan
                                    el mejor desarrollo para nuestros alumnos.
                                </div>

                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    ¿Recibimos el mejor apoyo?
                                </button>

                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    En la Escuela Primaria "San Juan",
                                    brindamos un excelente apoyo a nuestros
                                    estudiantes y sus familias, ofreciendo
                                    recursos adicionales como tutorías,
                                    actividades extracurriculares y seguimiento
                                    personalizado. Los padres pueden acceder a
                                    información relevante a través de nuestra
                                    plataforma en línea, donde se publican
                                    actualizaciones sobre el progreso académico y
                                    eventos escolares.
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>Sobre Nosotros</h6>
                        <h2>¿Qué nos hace la mejor opción educativa?</h2>
                        <p>En la Escuela Primaria "San Juan",
                            nos comprometemos a ofrecer una educación
                            de calidad que fomente el desarrollo académico,
                            emocional y social de nuestros estudiantes.
                            Contamos con un equipo docente altamente
                            capacitado y un enfoque pedagógico innovador
                            que prepara a nuestros niños para el futuro
                            con valores sólidos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Programas Recientes</h6>
                        <h2>Programas Educativos Recientes</h2>
                    </div>
                </div>
            </div>
            <ul class="event_filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Mostrar Todos</a>
                </li>
                <li>
                    <a href="#!" data-filter=".design">Matemáticas</a>
                </li>
                <li>
                    <a href="#!" data-filter=".development">Ciencias</a>
                </li>
                <li>
                    <a href="#!" data-filter=".wordpress">Lenguaje</a>
                </li>
            </ul>

            <div class="row event_box">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('principal/assets/images/course-01.jpg') }}"
                                    alt=""></a>
                            <span class="category">Matemáticas</span>
                            <span class="price">
                                <h6><em>$</em>160</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Profesor Juan Pérez</span>
                            <h4>Aprende Matemáticas Básicas
                                ahora
                            </h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('principal/assets/images/course-02.jpg') }}"
                                    alt=""></a>
                            <span class="category">Ciencias</span>
                            <span class="price">
                                <h6><em>$</em>340</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Profesora Ana Gómez</span>
                            <h4>Consejos para el Estudio de las Ciencias</h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('principal/assets/images/course-03.jpg') }}"
                                    alt=""></a>
                            <span class="category">Lenguaje</span>
                            <span class="price">
                                <h6><em>$</em>640</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Profesor Juan Pérez</span>
                            <h4>Tendencias en el Aprendizaje del Lenguaje</h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('principal/assets/images/course-04.jpg') }}"
                                    alt=""></a>
                            <span class="category">Historia</span>
                            <span class="price">
                                <h6><em>$</em>450</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Profesor Juan Pérez</span>
                            <h4>Descubriendo la Historia del Mundo</h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('principal/assets/images/course-05.jpg') }}"
                                    alt=""></a>
                            <span class="category">Geografía</span>
                            <span class="price">
                                <h6><em>$</em>320</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Sophia Rose</span>
                            <h4>Explorando el Mundo a Través de la Geografía</h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="{{ asset('principal/assets/images/course-06.jpg') }}"
                                    alt=""></a>
                            <span class="category">Artes Plásticas</span>
                            <span class="price">
                                <h6><em>$</em>240</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">David Hutson</span>
                            <h4>Creando Obras de Arte</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="section testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="owl-carousel owl-testimonials">
                        <div class="item">
                            <p>“Por favor, cuéntales a tus amigos o familiares sobre el sitio web de nuestra
                                escuela.
                                Todos pueden acceder para conocer más sobre nuestras actividades y eventos. ¡Gracias
                                por
                                visitarnos!”</p>
                            <div class="author">
                                <img src="assets/images/testimonial-author.jpg" alt="">
                                <span class="category">Profesor de Matemáticas</span>
                                <h4>Juan Martínez</h4>
                            </div>
                        </div>

                        <div class="item">
                            <p>“Nuestra escuela se esfuerza por proporcionar un ambiente seguro y amigable donde los
                                niños puedan aprender y crecer. Fomentamos la creatividad y el trabajo en equipo
                                para
                                que cada estudiante se sienta apoyado y motivado.”</p>
                            <div class="author">
                                <img src="assets/images/testimonial-author.jpg" alt="">
                                <span class="category">Profesor de Ciencias</span>
                                <h4>María González</h4>
                            </div>
                        </div>

                        <div class="item">
                            <p>“Nuestra escuela se enorgullece de ofrecer un entorno educativo de calidad, donde los
                                niños pueden aprender de manera divertida y colaborativa. Nos enfocamos en el
                                desarrollo
                                integral de cada estudiante, fomentando valores y habilidades para su futuro.”</p>
                            <div class="author">
                                <img src="assets/images/testimonial-author.jpg" alt="">
                                <span class="category">Profesora de Arte</span>
                                <h4>Ana Rodríguez</h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>LO QUE OPINAN</h6>
                        <h2>¿Cómo ven nuestra escuela?</h2>
                        <p>Los estudiantes y sus familias nos comparten siempre su alegría por aprender en un
                            ambiente
                            lleno de cariño y respeto, donde cada niño es importante y único.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section events" id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Calendario</h6>
                        <h2>Próximos Eventos</h2>
                    </div>

                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="{{ asset('principal/assets/images/event-01.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Arte y Manualidades</span>
                                        <h4>Prácticas Creativas</h4>
                                    </li>
                                    <li>
                                        <span>Fecha:</span>
                                        <h6>16 Feb 2024</h6>
                                    </li>
                                    <li>
                                        <span>Duración:</span>
                                        <h6>2 Horas</h6>
                                    </li>
                                    <li>
                                        <span>Precio:</span>
                                        <h6>Gratis</h6>
                                    </li>
                                </ul>

                                <a><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="{{ asset('principal/assets/images/event-02.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Ciencias Naturales</span>
                                        <h4>Explorando el Mundo Natural</h4>
                                    </li>
                                    <li>
                                        <span>Fecha:</span>
                                        <h6>24 Feb 2024</h6>
                                    </li>
                                    <li>
                                        <span>Duración:</span>
                                        <h6>1 Hora</h6>
                                    </li>
                                    <li>
                                        <span>Precio:</span>
                                        <h6>Gratis</h6>
                                    </li>
                                </ul>
                                <a><i class="fa fa-angle-right"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="image">
                                    <img src="{{ asset('principal/assets/images/event-03.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <ul>
                                    <li>
                                        <span class="category">Matemáticas</span>
                                        <h4>Resolviendo Problemas de Matemáticas</h4>
                                    </li>
                                    <li>
                                        <span>Fecha:</span>
                                        <h6>12 Mar 2024</h6>
                                    </li>
                                    <li>
                                        <span>Duración:</span>
                                        <h6>1 Hora</h6>
                                    </li>
                                    <li>
                                        <span>Precio:</span>
                                        <h6>Gratis</h6>
                                    </li>
                                </ul>
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h6>Contáctanos</h6>
                        <h2>¡Estamos para ayudarte en todo momento!</h2>
                        <p>Gracias por elegirnos. Si tienes alguna duda o pregunta, no dudes en contactarnos.
                            Estamos
                            aquí para ayudarte.</p>
                    </div>

                    <div class="contact-info"
                        style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <h6 style="color: #333; font-size: 18px; margin-bottom: 10px; font-weight: bold;">
                            Información
                            de Contacto</h6>
                        <p style="color: #555; font-size: 16px; line-height: 1.6;">Si tienes alguna pregunta o
                            necesitas ayuda, puedes ponerte en contacto con nosotros de la siguiente manera:</p>

                        <ul style="list-style-type: none; padding-left: 0;">
                            <li style="margin-bottom: 15px;">
                                <span style="color: #007bff; font-weight: bold;">Dirección:</span>
                                <h6 style="color: #555; font-size: 16px;">Calle Ficticia 123, Ciudad, País</h6>
                            </li>
                            <li style="margin-bottom: 15px;">
                                <span style="color: #007bff; font-weight: bold;">Teléfono:</span>
                                <h6 style="color: #555; font-size: 16px;">+123 456 7890</h6>
                            </li>
                            <li style="margin-bottom: 15px;">
                                <span style="color: #007bff; font-weight: bold;">Email:</span>
                                <h6 style="color: #555; font-size: 16px;">contacto@escuela.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 align-self-center">
                    <div class="contact-us-content">
                        <form id="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h6>Ubicación</h6>
                                    <p>Encuéntranos aquí:</p>
                                    <div id="map-container"
                                        style="position: relative; overflow: hidden; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15084.696308494663!2d-65.254757!3d-19.057745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93fbc8c57e20c341%3A0x0!2zMTnCsDAzJzI3LjkiUyA2NcKwMTUnMTkuMSJX!5e0!3m2!1ses-419!2sbo!4v1732631854994!5m2!1ses-419!2sbo"
                                            style="border: 0; width: 100%; height: 400px;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal iniciar sesion-->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de login -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input id="email" type="email" name="email" class="form-control" required
                                    autofocus>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <input id="password" type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                       
                        <div>
                            <button type="submit" class="btn btn-primary w-100">Iniciar Sesion</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Verificación -->
    <div class="modal fade" id="verificationModal" tabindex="-1" aria-labelledby="verificationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="verificationModalLabel">
                        <i class="fas fa-lock"></i> Código de Verificación
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <form id="verificationForm">
                        <div class="mb-3">
                            <label for="admin_code" class="form-label">
                                <i class="bi bi-key"></i> Código de Verificación
                            </label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" id="admin_code" name="admin_code" class="form-control"
                                    placeholder="Ingrese el código" required>
                            </div>
                            <div class="text-danger mt-2 d-none" id="codeError">Código incorrecto. Por favor,
                                intente
                                nuevamente.</div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x"></i> Cancelar
                    </button>
                    <button type="button" class="btn btn-primary" id="verifyCodeButton">
                        <i class="bi bi-check"></i> Verificar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Registro -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="registerForm" action="{{ route('registro-admin') }}" method="POST">
                    @csrf
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="registerModalLabel">
                            <i class="bi bi-person-plus"></i> Registrar Administrador
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="name" class="form-label">
                                <i class="bi bi-person"></i> Nombre
                            </label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Ingrese el nombre" required>
                            </div>
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                <i class="bi bi-envelope"></i> Correo Electrónico
                            </label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Ingrese el correo" required>
                            </div>
                        </div>

                        <!-- Contraseña -->
                        <div class="mb-3">
                            <label for="password" class="form-label">
                                <i class="bi bi-lock"></i> Contraseña
                            </label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" id="password" name="password" class="form-control"
                                    placeholder="Ingrese la contraseña" required>
                            </div>
                        </div>

                        <!-- Confirmar Contraseña -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">
                                <i class="bi bi-lock"></i> Confirmar Contraseña
                            </label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="form-control" placeholder="Confirme la contraseña" required>
                            </div>
                        </div>

                        <!-- Código de verificación (oculto) -->
                        <input type="hidden" id="hidden_admin_code" name="admin_code">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x"></i> Cancelar
                        </button>
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-check-circle"></i> Registrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="container">
                <div class="col-lg-12">
                    <div class="social-icons" style="text-align: center; margin-top: 20px;">
                        <a href="https://facebook.com" target="_blank"
                            style="margin-right: 15px; font-size: 36px; color: #3b5998; text-decoration: none;"><i
                                class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com" target="_blank"
                            style="margin-right: 15px; font-size: 36px; color: #00acee; text-decoration: none;"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://wa.me/11234567890" target="_blank"
                            style="margin-right: 15px; font-size: 36px; color: #25D366; text-decoration: none;"><i
                                class="fab fa-whatsapp"></i></a>

                        <a href="https://instagram.com" target="_blank"
                            style="margin-right: 15px; font-size: 36px; color: #C13584; text-decoration: none;"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://youtube.com" target="_blank"
                            style="margin-right: 15px; font-size: 36px; color: #FF0000; text-decoration: none;"><i
                                class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </footer>
    <!--
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger intent="WELCOME" chat-title="Sabiondo" agent-id="cb13dbb3-098a-4566-adf1-62e26f49f653"
        language-code="es" chat-icon="https://i.postimg.cc/vH73Qz65/Recurso-3.png"></df-messenger>
    -->
    <!-- Scripts -->

    <!--verificacion del codigo-->
    <script>
        document.getElementById('verifyCodeButton').addEventListener('click', function() {
            const correctCode = '1234567890'; // Código válido
            const inputCode = document.getElementById('admin_code').value;
            const codeError = document.getElementById('codeError');

            if (inputCode === correctCode) {
                // Ocultar el error (si estaba visible)
                codeError.classList.add('d-none');

                // Asignar el código al input oculto del formulario de registro
                document.getElementById('hidden_admin_code').value = inputCode;

                // Cerrar el modal de verificación
                $('#verificationModal').modal('hide');

                // Abrir el modal de registro
                $('#registerModal').modal('show');
            } else {
                // Mostrar el mensaje de error
                codeError.classList.remove('d-none');
            }
        });
    </script>
    <!--ALERTAS-->
    <script>
        $(document).ready(function() {
            @if (session('success'))
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'center', // Cambié la posición a 'center' para que aparezca en el centro
                    showConfirmButton: false,
                    timer: 2500,
                    customClass: {
                        popup: 'big-toast' // Agregar una clase personalizada para el tamaño
                    }
                });

                Toast.fire({
                    icon: 'success',
                    title: '{{ session('success') }}'
                });
            @endif
        });
    </script>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('principal/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('principal/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('principal/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('principal/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('principal/assets/js/counter.js') }}"></script>
    <script src="{{ asset('principal/assets/js/custom.js') }}"></script>

</body>

</html>
