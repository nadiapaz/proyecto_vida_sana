<?php get_header(); ?>
<!-- Template Name:contacto -->
<h1>¿Quieres contactarte con nosotros?</h1>
<div class="container">
<p> Puedes elegir nuestros medios de difusión masivos, redes sociales, teléfonos de contacto, etc.</p>
</div>

<div class="container">
<ul>
  <li> <i class="fab fa-facebook"> <a class="btn btn-warning" href="https://www.facebook.com/SaludQuilicura/" target="_blank" role="button">picha aquí</a></i></li>
  <li> <i class="fab fa-instagram"> <a class="btn btn-danger" href="https://www.instagram.com/saludquilicura/" target="_blank" role="button">picha aquí</a> </i></li>
  <li> <i class="fab fa-twitter"></i> <a class="btn btn-warning" href="https://twitter.com/saludquilicura" target="_blank" role="button">picha aquí</a></li>
  <li> <i class="fas fa-hand-point-up"></i> <a class="btn btn-danger" href="https://www.saludquilicura.cl/" target="_blank" role="button">picha aquí</a></li>
</ul>
</div>


<div class="header_img">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/suri.png" alt="" class="img-fluid">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/emergencia.png" alt="" class="img-fluid">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/urgencia.png" alt="" class="img-fluid">
</div>

<h2> Consultorio Manuel Bustos <i class="fas fa-user-md"></i></h2>
<div class="container">
<p>
	Director: Carlos Miño Morales<br> 
	Dirección: Lo Cruzat #0486<br>
	Teléfono: (56 2) 24059 402<br>
</p>
</div>

<!--mapa-->
<div class="container col-md-4">
<div class="google-maps" id="mapa">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13330.569974445883!2d-70.7203366!3d-33.3542886!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89f0ef714eae011d!2sConsultorio+Manuel+Bustos!5e0!3m2!1ses-419!2scl!4v1531184028318" width="600" height="450" frameborder="0" style="border:0"allowfullscreen></iframe>
</div>
</div>
<div class="container col-md-4">
<p class="footer_p"> ¿Quieres contactarte con nosotros?, no dudes en escribirnos <i class="fas fa-pencil-alt"></i></p>
<?php echo do_shortcode('[contact-form-7 id="36" title="Formulario de contacto 1"]') ?>
</div>


<?php get_footer(); ?>