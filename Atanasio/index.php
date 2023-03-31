<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I.E Atanasio Girardot</title>
    <link rel="stylesheet" href="Css/menu.css">
    <script src="https://kit.fontawesome.com/6a498da694.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="Images/escudo.png" type="image/x-icon">
    <!-- Bootstrap 5-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navegación -->
    <header id="inicio">
        <div class="escudo">
            <img src="Images/escudo.png" alt="Escudo Atanasio Girardot">
        </div>

        <div class="logo">
            <img src="Images/logo.png" alt="Logo Girardot Aprende">
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark text-white">

        <div class="container">
            <a href="#" class="navbar-brand">I.E ATANASIO <span class="text-dark">GIRARDOT</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="#inicio" class="nav-link"><i class="fa-solid fa-house"></i>Inicio</a></li>
                    <li class="nav-item"><a href="#noticias" class="nav-link"><i class="fa-solid fa-newspaper"></i>Noticias</a></li>
                    <li class="nav-item"><a href="#contacto" class="nav-link"><i class="fa-regular fa-id-badge"></i>Matriculas</a></li>
                    <li class="nav-item"><a href="#historia" class="nav-link"><i class="fa-solid fa-users-line"></i>Quienes Somos</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link"><i class="fa-regular fa-user"></i>Ingresar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cuerpo de la página 
        Carrusel de Imagenes
    -->

    <div id="carouselE" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselE" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1">
            </button>
            <!-- Button 2-->
            <button type="button" data-bs-target="#carouselE" data-bs-slide-to="1" aria-current="true"
                aria-label="Slide 2">
            </button>
            <!-- Button 3-->
            <button type="button" data-bs-target="#carouselE" data-bs-slide-to="2" aria-current="true"
                aria-label="Slide 3">
            </button>
            <!-- Button 2-->
            <button type="button" data-bs-target="#carouselE" data-bs-slide-to="3" aria-current="true"
                aria-label="Slide 4">
            </button>
        </div>

        <div class="carousel-inner">
            <!-- Item 1-->
            <div class="carousel-item active">
                <img src="Images/colegio1.jpg" alt="" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>Institución Educativa Atanasio Girardot</h5>
                    <p>
                    Aquí encontraras información relevante a nuestra institución, blog de noticias, notas, matriculas, certificados y muchas otras cosas, ¡Bienvenido! 
                    </p>
                    <a href="#" class="btn btn-success mt-3">Más Información</a>
                </div>
            </div>

            <!-- Item 2-->
            <div class="carousel-item ">
                <img src="Images/Colegio2.jpg" alt="" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>Institución Educativa Atanasio Girardot</h5>
                    <p>
                    Aquí encontraras información relevante a nuestra institución, blog de noticias, notas, matriculas, certificados y muchas otras cosas, ¡Bienvenido!
                    </p>
                    <a href="#" class="btn btn-success mt-3">Más Información</a>
                </div>
            </div>

            <!-- Item 3-->
            <div class="carousel-item ">
                <img src="Images/Colegio3.jpg" alt="" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>Institución Educativa Atanasio Girardot</h5>
                    <p>
                    Aquí encontraras información relevante a nuestra institución, blog de noticias, notas, matriculas, certificados y muchas otras cosas, ¡Bienvenido!
                    </p>
                    <a href="#" class="btn btn-success mt-3">Más Información</a>
                </div>
            </div>

            <!-- Item 4-->
            <div class="carousel-item ">
                <img src="Images/Colegio4.jpg" alt="" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>Institución Educativa Atanasio Girardot</h5>
                    <p>
                    Aquí encontraras información relevante a nuestra institución, blog de noticias, notas, matriculas, certificados y muchas otras cosas, ¡Bienvenido!
                    </p>
                    <a href="#" class="btn btn-success mt-3">Más Información</a>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button"
        data-bs-target="#carouselE"
        data-bs-slide="prev"
        >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button"
        data-bs-target="#carouselE"
        data-bs-slide="next"
        >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Noticias Girardot -->
    
    <section id="noticias">

        <div class="separador2">
            <img src="Images/banner.svg" alt="Barra de separación">
        </div>
    
           <div class="blog-section">
            <div class="section-content blog">
                <div class="title">
                    <img src="Images/title_noticias.svg" alt="Noticias Atanasio Girardot">
                </div>
                <div class="cards">
                    <div class="card">
                        <div class="img-section">
                            <img src="Images/Noticia1.png" alt=" Noticias Atanasio Girardot">
                        </div>
                        <div class="article">
                            <h4>INFORMACIÓN ATANASIO GIRARDOT <i class="fa-solid fa-volume-high"></i></h4>
                            <br>
                            <p class="p-info">Conoce más informaicón y noticias acerca de nosotros, ¿Qué estas esperando?</p>
                        </div>
                        <div class="blog-view">
                            <a href="view/Noticias/public_noticias.php" class="button">Ver más noticias</a>
                        </div>
                        <div class="posted-date">
                            <p>HOY</p>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="img-section">
                            <img src="Images/Noticia2.png" alt="Noticias Atanasio Girardot">
                        </div>
                        <div class="article">
                            <h4>NOTICIAS DEL DÍA A DÍA <i class="fa-solid fa-volume-high"></i></h4>
                            <br>
                            <p class="p-info">Conoce más informaicón y noticias acerca de nosotros, ¿Qué estas esperando?</p>
                        </div>
                        <div class="blog-view">
                            <a href="view/Noticias/public_noticias.php" class="button">Ver más noticias</a>
                        </div>
                        <div class="posted-date">
                            <p>HOY</p>
                        </div>
                    </div>
    
                    <div class="card">
                        <div class="img-section">
                            <img src="Images/Noticia3.png" alt="Noticias Atanasio Girardot">
                        </div>
                        <div class="article">
                            <h4>NOTICIAS ACERCA DE LA SEMANA CULTURAL <i class="fa-solid fa-volume-high"></i></h4>
                            <br>
                            <p class="p-info">Conoce más informaicón y noticias acerca de nosotros, ¿Qué estas esperando?</p>
                        </div>
                        <div class="blog-view">
                            <a href="view/Noticias/public_noticias.php" class="button">Ver más noticias</a>
                        </div>
                        <div class="posted-date">
                            <p>HOY</p>
                        </div>
                    </div>
    
    <!-- Noticias 2 -->
    
                    </div>
                </div>
           </div>
    
        <div class="separador3">
            <img src="Images/banner.svg" alt="Barra de separación">
        </div>
</section>

<!-- Historia -->

<section id="historia" class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img">
                    <img src="Images/Colegio3.jpg" class="img-fluid" alt="Imagen Historia I.E Atanasio Girardot">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text text-back">
                    <h2><i class="fa-solid fa-book"></i>HISTORIA DE NUESTRA INSTITUCIÓN</h2>
                    <p class="text-historia">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex veritatis quae voluptatum neque architecto voluptatem nostrum magni magnam esse sit reprehenderit iste repudiandae odit, praesentium temporibus accusantium exercitationem aspernatur expedita.
                    Consectetur minima quis et necessitatibus voluptate. Reprehenderit ipsam, molestiae consequatur iusto, eligendi incidunt molestias iste repudiandae mollitia aut doloremque? Maiores nisi perspiciatis dolores temporibus accusamus reprehenderit dolorum nemo. Nisi, et?
                    Deleniti consequatur, nam eligendi natus ad modi dolor minima doloribus, molestiae earum nostrum ab, aperiam quae sit. Ab nesciunt voluptate, rerum cumque nisi assumenda eos esse id dolor recusandae deleniti?
                    Optio quo dolore ut dignissimos unde, in sit ex ratione suscipit quos facere explicabo doloremque pariatur, numquam provident recusandae repellendus! Ex, ea excepturi? Itaque accusamus dolorem numquam mollitia harum iure.
                    Architecto quaerat impedit corporis sequi harum labore sed deserunt incidunt id molestias nemo quidem placeat, nulla vitae quam hic odio inventore. Eveniet, praesentium sapiente ratione ipsum eos nulla reiciendis facere.
                    Voluptatem magnam eligendi ipsa quos omnis iure ex beatae quaerat non id ea sint eum repellendus repellat maxime nostrum sequi et dolorum placeat illum, amet vel eius! Rem, quidem alias?
                    Quo eveniet id non, a inventore voluptates. Ipsam, eligendi saepe! Ducimus aperiam facilis molestias libero sint eum dolores, sapiente aspernatur totam doloribus, quasi sed debitis, alias pariatur laboriosam repellendus maxime.
                    Quos numquam blanditiis deserunt libero nisi accusantium eveniet vero unde omnis? Officia asperiores maiores veniam amet fugit repellat autem, eaque, maxime temporibus, nihil unde enim nemo soluta hic quam aperiam?
                    Impedit, iure similique. Fuga voluptatem accusantium distinctio nobis velit nulla eius, voluptatibus sequi et assumenda dolore, repellendus numquam eos! Eos harum molestiae qui necessitatibus nesciunt et debitis ipsam accusantium quidem!
                    Officia unde, quo distinctio earum ad explicabo suscipit nisi exercitationem et non, placeat voluptas nam commodi aperiam aspernatur at nostrum cum. Enim minima magnam iste cum accusamus libero quis dolor.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="separador3">
    <img src="Images/banner.svg" alt="Barra de separación">
</div>

<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img">
                    <img src="Images/escudo.png" class="img-escudo" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text text-back">
                    <h2><i class="fa-solid fa-shield-heart"></i>ESCUDO</h2>
                    <p class="text-historia">El escudo tiene forma circular con fondo verde biche
                        representando la esperanza de la comunidad por un país cada vez
                        mejor; dentro del círculo se encuentra el nombre de la institución
                        y se superpone una silueta en forma de armadura que contiene tres
                        símbolos gráficos: 
                        <br>
                        <br>
                        El primero, un águila que representa el respeto que el PEI busca
                        fortalecer en las nuevas generaciones; esta ave recoge los atributos
                        de fortaleza, poder, determinación, audacia e intelecto que deben
                        caracterizar a cada miembro de la comunidad, para hacerlo capaz
                        de respetar a sus congéneres y a su vez hacerlo merecedor del
                        mismo respeto, es decir, que el águila representa la capacidad de
                        actuar con inteligencia, prudencia y consideración hacia las demás
                        personas para cultivar la sana convivencia. Dos flechas en
                        dirección vertical indican que en el respeto se originan los valores
                        de solidaridad y paz.
                        <br>
                        <br>
                        El segundo símbolo son dos manos entrelazadas que representan
                        el valor de la solidaridad, el cual muestra que la comunidad
                        atanaísta, basada en su modelo pedagógico Escuela Activa
                        Urbana, siempre está unida en la búsqueda de las mismas metas de
                        desarrollo social, con gran sentido de apoyo, ayuda, colaboración,
                        cooperación y sentido de pertenencia institucional, especialmente
                        en situaciones difíciles.
                        <br>
                        <br>
                        El tercer símbolo es una paloma que representa la paz tan
                        anhelada en nuestro país y que a nivel institucional se sueña ver
                        reflejada en ambientes educativos libres de conflictos y de
                        violencia, impregnados de tranquilidad y confianza en el otro de
                        quien siempre se espera comprensión, consideración y buen trato.
                        Finalmente, dos flechas indican la interdependencia entre los
                        valores de solidaridad y paz con los cuales es posible mantener la
                        sana convivencia, es decir, que si somos solidarios forjamos paz y
                        promovemos la paz demostramos solidaridad por nuestra
                        comunidad.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="separador3">
    <img src="Images/banner.svg" alt="Barra de separación">
</div>

<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img">
                    <img src="Images/Bandera.png" class="img-bandera" alt="Bandera Colegio Atanasio Girardot">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text text-back">
                    <h2><i class="fa-solid fa-school-flag"></i>BANDERA</h2>
                    <p class="text-historia">La bandera está conformada por cuatro franjas rectangulares de
                    colores amarillo y blanco intercalados 
                    <br>
                    <br>
                    El amarillo representa la honestidad, franqueza y autenticidad.
                    El blanco representa el amor a la verdad.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="separador3">
    <img src="Images/banner.svg" alt="Barra de separación">
</div>

<!-- Misión y visión -->

<section class="about section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img">
                    <img src="Images/Mision_Vision.jpg" class="img-info" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text text-back">
                    <h2><i class="fa-solid fa-dove"></i>MISION</h2>
                    <p class="text-historia">La misión de la Institución Educativa Atanasio
                        Girardot es la de formar a los niños, jóvenes y
                        adultos líderes en competencias laborales
                        generales fortalecidas por las TIC y el
                        bilingüismo desde un contexto cultural,
                        económico, político y socialmente incluyente en
                        el cual están inmersos; mediados por un modelo
                        pedagógico activo, democrático y axiológico,
                        para desempeñarse con calidad y contribuyendo
                        al desarrollo de la sociedad.</p>
                        <br>
                        <br>
                        <h2><i class="fa-brands fa-earlybirds"></i>VISION</h2>
                    <p class="text-historia">En el año 2025 la Institución Educativa
                        Atanasio Girardot, será líder en procesos
                        académicos y de formación académica
                        atendiendo a la diversidad educativa; con un
                        proyecto institucional articulado con las TIC y
                        con profundización en Inglés, que permita
                        desarrollar competencias laborales para atender
                        los retos de un mundo globalizado y complejo.</p> 
                </div>
            </div>
        </div>
    </div>
</section>

<div class="separador3">
    <img src="Images/banner.svg" alt="Barra de separación">
</div>

<!-- Servicios -->

<section class="services section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="section-header text-center text-white pb-5">
                    <h2><i class="fa-brands fa-uncharted"></i>PROGRAMAS</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio totam doloremque asperiores iste excepturi eveniet numquam earum, illum eos velit nihil quidem at amet soluta, labore sunt nemo ratione. Quam!</p>
                </div>
            </div>
        </div>
        <!-- Servicio 1 -->
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                    <div class="card-body">
                    <i class="fa-solid fa-book-open-reader"></i>
                        <h3 class="card-title text-success">PROGRAMA TODOS A APRENDER</h3>
                        <p class="lead">Todos a Aprender es un programa del Ministerio de Educación Nacional que se creó para
                        transformar la calidad de la educación en el país, haciendo énfasis en las áreas de matemáticas
                        y lenguaje las que necesitan fortalecerse, con acciones integrales que disminuyen las brechas y
                        las debilidades del sistema educativo.</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 2 -->
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                    <div class="card-body">
                    <i class="fa-solid fa-user-graduate"></i>
                        <h3 class="card-title text-success">PROGRAMA INSTITUCIONAL DE BILINGÜISMO</h3>
                        <p class="lead">La institución ha venido adelantando varias iniciativas en materia de bilingüismo a través de la
                        gestión de la Fundación Lúker (2012) en asocio con el Centro Colombo Americano, de la SEM
                        con el programa Jornada Extendida (2013) y del Programa Manizales Bilingüe a través de la
                        Universidad Católica y el Centro Colombo Americano (2014-2015)</p>
                    </div>
                </div>
            </div>
            <!-- Servicio 3 -->
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                    <div class="card-body">
                    <i class="fa-solid fa-people-group"></i>
                        <h3 class="card-title text-success">PROGRAMA DE INCLUSION EDUCATIVA</h3>
                        <p class="lead">La institución siempre ha buscado adaptar el currículo a las necesidades de su población; desde
                        el año 2009 se realizan las adaptaciones para responder al Decreto 366 del mismo año, con lo
                        que se incorpora y organiza el servicio de apoyo pedagógico para la atención de alumnos con
                        discapacidad o con capacidades o talentos excepcionales.</p>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>

</section>

<!-- Contacto -->

<section id="contacto" class="contact section-padding">
    <div class="separador3">
        <img src="Images/banner.svg" alt="Barra de separación">
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center text-white pb-5">
                    <h2><i class="fa-regular fa-address-book"></i>CONTACTO</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio totam doloremque asperiores iste excepturi eveniet numquam earum, illum eos velit nihil quidem at amet soluta, labore sunt nemo ratione. Quam!</p>
                </div>
            </div>
        </div>

        <div class="row m-0">
            <div class="col-md-12 p-0 pt-4 pb-4">
                <form action="#" class="bg-dark p-4 m-auto">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Correo">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Mensaje" rows="3"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block mt-3">Enviar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</section>

<!-- Pie de página -->

<footer id="footer">
    <div class="container__footer">
        <div class="box__footer">
            <div class="escudo_footer">
                <img src="Images/escudo.png" alt="Escudo Atanasio Girardot">
            </div>
            <div class="terminos">
                <p>Institución Educativa Atanasio Girardot
                <br>
                <br>
                ESCUELA ACTIVA URBANA
                </p>
            </div>
        </div>
        <div class="box__footer">
            <h2>Contacto</h2>
            <a href="https://www.google.com/maps/place/Cl.+67+%2330c-33,+Manizales,+Caldas/@5.0527088,-75.4946948,3a,75y,257.86h,90t/data=!3m6!1e1!3m4!1sVxaKI0eGiRq0wiA0iKwSGQ!2e0!7i13312!8i6656!4m6!3m5!1s0x8e4765651066a83b:0x154da7a5092b4e90!8m2!3d5.0527051!4d-75.4947252!10e5" target="_blank">Dirección: Calle 67 30 C 33</a>
            <p class="f-p">Email: colatanasio@hotmail.com</p>
            <p class="f-p2">Tel: 8875772</p>
            <div class="footer__convenio">
                <img src="Images/Alcaldia-De-Manizales.png" alt="Alcaldia De Manizales">
            </div>
        </div>

        <div class="box__footer">
            <h2>Redes Sociales</h2>
            <a href="#"><i class="fa-brands fa-square-facebook"></i>Facebook</a>
            <a href="#"><i class="fa-brands fa-youtube"></i>Youtube</a>
            <a href="#"><i class="fa-brands fa-square-instagram"></i>Instagram</a>
            <div class="footer__convenio">
                <img src="Images/logo.png" alt="Alcaldia De Manizales">
            </div>
        </div>
    </div>
    <div class="box__copyright">
        <hr>
        <p>Todos los derechos reservados &copy;<b>I.E Atanasio Girardot</b> 2022</p>
    </div>
</footer>

    <script src="Js/main.js"></script>
</body>
</html>