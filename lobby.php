<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Baldo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- icono de favoritos -->
    <link href="img/image-removebg-preview.png" rel="icon">

    <!-- Fuentes web de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <!-- Hoja de estilos de fuentes de iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Hoja de estilo de bibliotecas -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Hoja de estilo Bootstrap personalizada -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Hoja de estilo de plantilla -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Inicio giratorio -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Extremo giratorio -->


    <!-- Inicio de la barra de navegación -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <img src="img/image-removebg-preview.png" width="80" height="80">
            <h1 class="mb-0 text-primary text-uppercase"><i></i>Baldo</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="lobby.php" class="nav-item nav-link">CASA</a>
                <a href="sobre.php" class="nav-item nav-link">SOBRE</a>
                <a href="productosp.php" class="nav-item nav-link">productos</a>
                <a href="login-vista.php" class="nav-item nav-link">usuario</a>

                
             
            </div>
               <!--carito-->

                <div id="carrito">
                    <a href="crindex.php"><span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/cart.png" alt=""></a>
                </div>
    </nav>
    <!-- Fin de la barra de navegación -->


    <!-- Inicio del carrusel -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpeg" alt="Image" style=" height: 705px; ;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">cada vez que adquieres un servicio de Baldo <p style="color:#FF0000";>AYUDAS</p> a una comunidad y a sus animales en COLOMBIA</h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-map-marker-alt text-primary me-3"></i>Cl 10A #41-62 a 41-86
                                Medellín, Antioquia</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-phone-alt text-primary me-3"></i>+57 3218777082</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpeg" alt="Image"    style=" height:100%;" >
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">EMPIEZA EL AÑO <p style="color:#FF0000";>dandole amor y bienestra a tus peluditos</p></h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-map-marker-alt text-primary me-3"></i>Cl 10A #41-62 a 41-86
                                Medellín, Antioquia</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-phone-alt text-primary me-3"></i>+57 3218777082</h4>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Final del carrusel -->


    <!-- Acerca de Inicio -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid w-75 align-self-end" src="img/Sobre nosotros.jpg" alt="">
                        <div class="w-50 bg-secondary p-5" style="margin-top: -25%;">
                            <h1 class="text-uppercase text-primary mb-3">25 años</h1>
                            <h2 class="text-uppercase mb-0">Experiencia</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block bg-secondary text-primary py-1 px-4">Sobre nosotros</p>
                    <h1 class="text-uppercase mb-4">Conoce más de Baldo</h1>
                    <p>Somos una entidad que, desde el año <p style="color:#FF0000";>1997</p>ha emprendido campañas de cuidado y respeto por todas las demás especies animales.</p>
                    <p class="mb-4">. Nuestro objetivo es crear una sociedad donde los animales no humanos y humanos convivan en armonía y respeto, donde seamos capaces de valorar las diferencias y proteger aquellos que no pueden defenderse.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h3 class="text-uppercase mb-3">Ya que EN 1997</h3>
                            <p class="mb-0">COMENSAMOS CON ESTA CAMPAÑA DEL CUIDADO Y PROTECION DE LOS ANIMALES Y LA BUSQUEDA DE UN HOGAR</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-uppercase mb-3">MAS DE 1000 CLIENTES</h3>
                            <p class="mb-0">NOS HAN CONTACTADO PARA EL CUIDADO Y PROTECION DE LOS ANIMALES </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Acerca del final -->


 


    <!-- Precio de inicio -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">PUNTOS DE ATENCION</p>
                        <h1 class="text-uppercase mb-4">CONSULTE NUESTROS PUNTOS DE ATENCION AL CLIENTE</h1>
                         <form>
                            <div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="text-uppercase mb-0">Parque Principal de Bello </h6>
                                    <span class="text-uppercase text-primary">Cra. 50 #5a0-1, Bello, Antioquia</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="text-uppercase mb-0">Rionegro </h6>
                                    <span class="text-uppercase text-primary">Cra. 47 #51-103 a 51-1</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="text-uppercase mb-0">Itagüi, Antioquia</h6>
                                    <span class="text-uppercase text-primary">Cra. 50A #34-157 a 34-99</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="text-uppercase mb-0">Medellín, Antioquia </h6>
                                    <span class="text-uppercase text-primary">Cl 10 #43d-2 a 43d-72</span>
                                </div>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="text-uppercase mb-0">Villa Flora ROBLEDO</h6>
                                    <span class="text-uppercase text-primary">Cl. 65 #84-2 a 84-114</span>
                                </div>
                               
                            </div>
                         </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;">
                        <iframe class="google-map w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" style="filter: grayscale(100%) invert(92%) contrast(83%); border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de precio -->


     <!-- Inicio del productos -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">productos</p>
                <h1 class="text-uppercase">LO QUE PROPORCIONAMOS</h1>
            </div>
            <div class="container">
                     <div class="card">                            
                         <img src="img/cervicioveterinario.jpeg">                           
                         <h4>cervicio veterinario en casa </h4>                               
                         <p>80.900</p>                            
                         <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>                            
                     </div>
                        <div class="card">
                            <img src="img/baño de mascotas.jpeg">
                            <h4>baño der mascotas</h4>
                            <p>35.200</p>
                            <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                        </div>
                         <div class="card">
                         <img src="img/AdobeStock_85975299_Preview.jpeg">
                         <h4> servicio de adocion</h4>
                         <p></p>
                         <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                     </div>
                     <div class="card">
                        <img src="img/serviciop de vacunacion.jpeg">
                        <h4>servicio de vacunacion </h4>
                        <p>24.800</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>
                </div>
            </div>
        <!-- Fin del servicio -->


    <!-- Testimonio Inicio -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Testimonial</p>
                <h1 class="text-uppercase">LO QUE DICEN NUESTROS CLIENTES</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                    <h4 class="text-uppercase">Sandra Calle</h4>
                    <p class="text-primary">FAMILIAS FELICES Y ANIMALES SALUDABLES</p>
                    <span class="fs-5">Son súper tiernos y especiales con las mascotas ¡¡¡Aprovechen!!!</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt=''>">
                    <h4 class="text-uppercase">Maria Victoria Vélez</h4>
                    <p class="text-primary">FAMILIAS FELICES Y ANIMALES SALUDABLES</p>
                    <span class="fs-5">Una de mis niñas de compañía fue esterilizada por ustedes hace 4 años. Conozco vuestro trabajo y es excelente</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>">
                    <h4 class="text-uppercase">Marcela Acosta</h4>
                    <p class="text-primary">FAMILIAS FELICES Y ANIMALES SALUDABLES</p>
                    <span class="fs-5">Los felicito, tienen mucha vocación de servicio y ayudaron muchísimo a mi perrita.</span>
                </div>
            </div>      
        </div>
    </div>
    <!-- Testimonio Fin -->


    <!-- Inicio de pie de página -->
    <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">PONERSE EN CONTACTO</h4>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-map-marker-alt text-primary"></span>
                        </div>
                        <span>Cra. 47 #51-103 a 51-1</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-phone-alt text-primary"></span>
                        </div>
                        <span>+57 3218777082</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-square bg-dark flex-shrink-0 me-3">
                            <span class="fa fa-envelope-open text-primary"></span>
                        </div>
                        <span>leyenda19971@gmail.com</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">ENLACES RÁPIDOS</h4>
                    <a class="btn btn-link" href="">SOBRE NOSOTROS</a>
                    <a class="btn btn-link" href="">CONTACTENOS</a>
                    <a class="btn btn-link" href="">NUESTROS SERVICIOS</a>
                    <a class="btn btn-link" href="">TERMINOS Y CONDICIONES</a>
                    <a class="btn btn-link" href="">APOYO</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-uppercase mb-4">BOLETIN INFORMATIVO</h4>
                    <div class="position-relative mb-4">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="TU email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">ISCRIBIRSE</button>
                    </div>
                    <div class="d-flex pt-1 m-n1">
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">FGJFGJFGJFGJFGJ</a>juanj,juank,elkin
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                       
                        DISEÑADO POR <a class="border-bottom"">jefferson</a>
                        <br>Distribuido por: <a class="border-bottom"target="_blank">juank.elkin.juanj</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de pie de página -->


    <!-- Volver arriba -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- Bibliotecas JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Javascript de plantilla -->
    <script src="js/main.js"></script>
</body>

</html>