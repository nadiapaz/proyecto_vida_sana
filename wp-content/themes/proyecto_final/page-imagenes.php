<?php get_header(); ?>
<!-- Template Name:imagenes -->
<h1>Sección imágenes <i class="fas fa-camera-alt"></i></h1>

<!--carousel-->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/profesor.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/profesor1.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/profesor2.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<h2> Galería de imágenes eventos <i class="fas fa-camera-retro"></i></h2>

<div class="container">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/activa.png" alt="" class="img-fluid">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/baile.png" alt="" class="img-fluid">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/salto.jpg" alt="" class="img-fluid">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/salto2.jpg" alt=""class="img-fluid">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/galeria.jpg" alt=""class="img-fluid">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/galeria2.jpg" alt=""class="img-fluid">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/galeria3.jpg" alt="" class="img-fluid">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/galeria4.jpg" alt="" class="img-fluid">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/galeria5.jpg" alt="" class="img-fluid">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/galeria6.jpg" alt="" class="img-fluid">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/galeria7.jpg" alt="" class="img-fluid">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/galeria9.jpg" alt="" class="img-fluid">
</div>


<?php get_footer(); ?>