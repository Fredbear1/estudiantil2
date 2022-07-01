
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
                
             
                <div id="carrito">
                    <a href="crindex.php"><span class="glyphicon glyphicon-shopping-cart"></span> <img src="img/cart.png" alt=""></a>
                </div>
    </nav>
    <!-- Fin de la barra de navegación -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary p-5">
                        <p class="d-inline-block bg-dark text-primary py-1 px-4">Contactanos</p>
                        <h1 class="text-uppercase mb-4">ya te registrate</h1>
                        <p class="mb-4">en muy facil solo llena el formulario y listo<a href="https://BALDO">BALDO</a>.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                        <label for="name">TU NOMBRE</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email">
                                        <label for="email">TU GMAIL</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                       <p> <input type="password"class="form-control bg-transparent" id="subject" placeholder="CONTRASEÑA"></p>
                                       
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">MENSAJE</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">REGISTRATE</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;">
                         <img src="img/baño de mascotas.jpeg" alt="100%" width="150%">
                    </div>
                </div>
            
            <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
               
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
                        &copy; <a class="border-bottom" href="#">nombre del sitio</a>juank,elkin,juanj
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                      
                        Designed By <a class="border-bottom"">jefferson/a>
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