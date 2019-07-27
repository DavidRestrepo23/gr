<?php 
    $base_url_admin = "http://" . $_SERVER['SERVER_NAME'] ."/gr/admin";
    $base_url = "http://" . $_SERVER['SERVER_NAME'] ."/gr" 
?>

<!-- Estructura Básica -->
<!DOCTYPE html>
<html lang="es">

<head>
    <title> Solicitar Cotización </title>
    <link rel="shortcut icon" href="images/icon.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Servicios De Telecomunicaciones">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<!-- Estructura Básica -->


<body>

    <div class="super_container">

        <!-- Datos de hipervinculo -->
        <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="menu_close_container">
                    <div class="menu_close"></div>
                </div>
            </div>
        </div>


        <!-- Encabezado -->
        <div class="home">
            <header class="header" id="header">
                <div>
                    <div class="header_nav" id="header_nav_pin">
                        <div class="header_nav_inner">
                            <div class="header_nav_container">
                                <a href="index.php"><img class="logoxd align-items-center justify-content-start" src="images/logo.png" alt="Imagen del icono"></a>
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="header_nav_content d-flex flex-row align-items-center justify-content-end">
                                                <nav class="main_nav">
                                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                                        <li><a href="index.php">Inicio</a></li>
                                                        <li><a href="quienessomos.php">Quienes Somos</a></li>
                                                        <li><a href="servicios.php">Servicios</a></li>
                                                        <li class="active"><a href="solicitarcotizacion.php">Solicitar Cotización</a></li>
                                                        <li><a href="galeria.php">Galería</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        
        <section>
            <div class="container mt-5 mb-5 pt-5">
                <div class="row  justify-content-center">
                    <div class="col-12">
                    <div class="footer_col">
						<div class="footer_contact">
                            <h1 class="mb-5 text-center"> Registro Cliente </h1>			
                            <form action="<?php echo $base_url_admin ?>/controlador/clienteControlador.php" method="post" class="footer_contact_form" id="footer_contact_form">
                            <div class="form-group">
                                <input type="hidden" class="form-control" value="<?php echo $base_url ?>/registro-cliente.php" name="back_url" >
                            </div>
                                <div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
                                    <input type="text" class="footer_contact_input" placeholder ="Ingresa Cédula" required="required" name="identification">
                                    <input type="text" class="footer_contact_input" placeholder ="Ingresa Nombre" required="required" name="name">
                                </div>
                                <div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
                                    <input type="text" class="footer_contact_input" placeholder="Teléfono" required="required" name="mobile">
                                    <input type="email" class="footer_contact_input" placeholder="Correo" required="required" name="email">
                                </div>
                                <input type="submit" class="footer_contact_button" value="Registrarme">
                            </form>
							</div>
						</div>
					</div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Footer -->
        <footer class="footer">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
            <div class="footer_content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 footer_col">
                            <div class="footer_about">
                                <div class="logo">
                                    <a href="#"> <img class="imgfooter" src="images/icon.png" alt=""><span></span></a>
                                </div>
                                <div class="footer_about_text">Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</div>
                                <div class="footer_social">
                                </div>
                                <div class="copyright">
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with by <a href="#">ZASOLUCIONES</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 footer_col">
                            <div class="footer_contact">
                                <div class="footer_contact_title">Contacto</div>
                                <a name="contacto"></a>
                                <div class="footer_contact_form_container">
                                    <form action="enviar.php" method="post" class="footer_contact_form" id="footer_contact_form">
                                        <div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
                                            <input type="text" class="footer_contact_input" placeholder="Nombre" required="required" name="nombre">
                                            <input type="email" class="footer_contact_input" placeholder="Correo" required="required" name="correo">
                                        </div>
                                        <textarea class="footer_contact_input footer_contact_textarea" placeholder="Mensaje" required="required" name="mensaje"></textarea>
                                        <input type="submit" class="footer_contact_button" value="Enviar Mensaje">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
                                <nav class="footer_nav">
                                    <ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                        <li class="active"><a href="index.php">Inicio</a></li>
                                        <li><a href="quienessomos.php">Quienes Somos</a></li>
                                        <li><a href="servicios.php">Servicios</a></li>
                                        <li><a href="solicitarcotizacion.php">Solicitar Cotización</a></li>
                                        <li><a href="galeria.php">Galería</a></li>
                                    </ul>
                                </nav>

                                <div class="footer_phone ml-lg-auto">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>+57 322 595 9220</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>