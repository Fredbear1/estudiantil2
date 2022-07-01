<?php
/*
* Este archivo muestra los productos en una tabla.
*/
session_start();
include "php/conection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

</body>
</html>
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



	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Carrito</h1>
			<a href="./products.php" class="btn btn-default">Productos</a>
			<br><br>
			<?php
			/*
			* Esta es la consulta para obtener todos los productos de la base de datos.
			*/
			$products = $con->query("select * from product");
			if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])):
			?>
			<table class="table table-bordered">
			<thead>
				<th>Cantidad</th>
				<th>Producto</th>
				<th>Precio Unitario</th>
				<th>Total</th>
				<th></th>
			</thead>
			<?php 
            $tt=0;
			/*
			* A partir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
			*/
			foreach($_SESSION["cart"] as $c):
			$products = $con->query("select * from product where id=$c[product_id]");
			$r = $products->fetch_object();
				?>
			<tr>
			<th><?php echo $c["q"];?></th>
				<td><?php echo $r->name;?></td>
				<td>$ <?php echo number_format($r->price); ?></td>
				<td>$ <?php echo number_format($c["q"]*$r->price); ?></td>
                
             <?php  $tt+=$c["q"]*$r->price; ?>
				<td style="width:260px;">
				<?php
				$found = false;
				foreach ($_SESSION["cart"] as $c) 
				{
				 if($c["product_id"]==$r->id)
				 	{ 
				 		$found=true; 
				 		break; 
				 	}
				}
				?>
					<a href="php/delfromcart.php?id=<?php echo $c["product_id"];?>" class="btn btn-danger">Eliminar</a>
				</td>
                
			</tr>
			<?php endforeach; ?>
            <tr>
                <th>Total a pagar</th>
                <td> $ <?php echo number_format($tt); ?></td>
            </tr>
			</table>

			<form class="form-horizontal" method="post" action="./php/process.php">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Email del cliente</label>
			    <div class="col-sm-5">
			      <input type="email" name="email" required class="form-control" id="inputEmail3" placeholder="Email del cliente">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-primary">Procesar Venta</button>
			    </div>
			  </div>
			</form>


			<?php else:?>
				<p class="alert alert-warning">El carrito está vacío.</p>
			<?php endif;?>
			<br><br><hr>
		</div>
	</div>
</div>




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