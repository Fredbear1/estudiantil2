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
                <a href="usuario.php" class="nav-item nav-link">usuario</a>
                
             
            </div>
               <!--carito-->
               <img src="img/cart.png" alt="">
               <div id="carrito">
        </div>
    </nav>
    <!-- Fin de la barra de navegación -->


    <!-- Inicio de encabezado de página -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">productos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">CASA</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">SOBRE</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">productos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Fin de encabezado de página -->


    <!-- Inicio del productos -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">productos</p>
                <h1 class="text-uppercase">LO QUE PROPORCIONAMOS</h1>
            </div>
            <div class="container">
                     <div class="card">                            
                         <img src="img/chunky pollo razas pequeñas adultos (perros).png">                           
                         <h4>Chunky pollo razas pequeñas adultos perros  </h4>                               
                         <p>4kg= 32.900</p>                            
                         <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>                            
                     </div>
                        <div class="card">
                            <img src="img/ringo-premium.jpg">
                            <h4>Ringo premium  adultos perros</h4>
                            <p>1kg= 6.200</p>
                            <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                        </div>
                         <div class="card">
                         <img src="img/Ringo VitalitySuperPremiumCachorros perro.jpg">
                         <h4> Ringo - Vitality Super Premium Cachorros</h4>
                         <p>perros  1kg= 14.500</p>
                         <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                     </div>
                     <div class="card">
                        <img src="img/chunky cordero, arroz y salmon adulto (perro).png">
                        <h4>Chunky Cordero, Arroz Y Salmón Adultos perro </h4>
                        <p>15kg =24.800</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>
                    <div class="card">
                        <img src="img/nutrecan campo adulto 25kg.jpg">
                        <h4>Nutrecan campo adulto perro</h4>
                        <p>25kg=157.100</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>
                    <div class="card">
                        <img src="img/evolve cat lata pavo gato.png">
                        <h4>Evolve Cat Lata Pavo gato</h4>
                        <p>156gm=7.400</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>
                    <div class="card">
                        <img src="img/nutrecathomeadulto gato.jpg">
                        <h4>Nutrecat home adulto gato </h4>
                        <p>1.5kg=22.800</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>
                    <div class="card">
                        <img src="img/BRFORCATWILDADULTO gato.jpg">
                        <h4>Br For Cat Wild Adulto gato </h4>
                        <p>1kg=35.500</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>   
                    <div class="card">
                        <img src="img/BRFORCATWILDcachorro gato.jpg">
                        <h4>Br For Cat Wild cachorro gato</h4>
                        <p>1kg=35.500</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>   
                    <div class="card">
                        <img src="img/potechunkydelicatpollo gato.png">
                        <h4>Pote chunky delicat pollo gato </h4>
                        <p>156gm=5.200</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>   
                    <div class="card">
                        <img src="img/camadonutgrande.jpg">
                        <h4>Cama donut grande</h4>
                        <p>159.900</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>   
                    <div class="card">
                        <img src="img/camatrenza.jpg">
                        <h4>Camatrenza</h4>
                        <p>230.000</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>   
                    <div class="card">
                        <img src="img/collar arcoiris.png">
                        <h4>Collar arcoiris</h4>
                        <p>27.700</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>   
                    <div class="card">
                        <img src="img/correa individual.jpg">
                        <h4>Correa individual</h4>
                        <p>23.100</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>   
                    <div class="card">
                        <img src="img/disfras hombre araña.jpg">
                        <h4>Disfras hombre araña </h4>
                        <p>132.700</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>   
                    <div class="card">
                        <img src="img/hueso plastico.png">
                        <h4>Hueso plastic</h4>
                        <p>35.600</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>   
                    <div class="card">
                        <img src="img/pelotas kong.png">
                        <h4>Pelotas kong </h4>
                        <p>x3=18.300</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>   
                    <div class="card">
                        <img src="img/indupet cañita con cascabel.jpg">
                        <h4>•	Indupel cañita con cascabel</h4>
                        <p>20.000</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>   
                    <div class="card">
                        <img src="img/arena aglomerante furry gato.png">
                        <h4>arena aglomerante furry gato</h4>
                        <p>20.900</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>   
                    <div class="card">
                        <img src="img/freemiau arena gato.jpg">
                        <h4>•	freemiau arena gato</h4>
                        <p>26.600</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>   
                    <div class="card">
                        <img src="img/carousel-1.jpeg">
                        <h4>dfgdfgbfgdf</h4>
                        <p>dfgdfgdfgbfgvbfvbdf</p>
                        <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">leer mas</a>
                    </div>            
               </div>         
            </div>            

    <!-- Fin del servicio -->





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
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
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
                        &copy; <a class="border-bottom" href="#">FGDFGDFGDFGDFG</a>FDGDFGDFGDFG.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        Diseñado por <a class="border-bottom">jefferson</a>
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