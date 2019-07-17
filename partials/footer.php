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