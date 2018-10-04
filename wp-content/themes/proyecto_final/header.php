<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <?php wp_head() ?>
  </head>
<body>

<?php
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
	
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="inicio"><img src="<?php echo $logo[0]; ?>" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" 
  id="navbarNavDropdown">
						
					<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
  <?php wp_nav_menu( array(
    'theme_location' => 'header-menu',
    'container_id' => 'navbarNavDropdown',
    'container_class' => 'collapse navbar-collapse justify-content-end',

    'menu_class'  => 'navbar-nav'
  ));
  ?>
<?php } ?>
						
					</div>	
		</nav>
<!--

    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="clases.html">Clases<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="experiencias.html">Experiencias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="imagenes.html">Imágenes</a>
      </li>
      <li>
        <a class="nav-link" href="noticias.html">Noticias</a> 
      </li>
      <li>
      <a class="nav-link" href="videos.html">Videos</a>
      </li>
      <li>
      <a class="nav-link" href="contacto.html">Contacto</a>
      </li> 
    </ul>
  </div>
</nav>
-->