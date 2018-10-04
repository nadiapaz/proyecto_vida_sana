<?php 

function register_enqueue_style(){
$theme_data = wp_get_theme();



/*registando los estilos*/

wp_register_style('bootstrap', get_theme_file_uri('/assets/vendor/css/bootstrap.min.css'), null, null, 'screen');
wp_register_style('fontawesome', get_theme_file_uri('/assets/vendor/css/fontawesome.css'), null, null, 'sreen');
wp_register_style('style', get_theme_file_uri('/assets/css/style.css'), null, $theme_data->get('Version'), 'screen');

 wp_enqueue_style('bootstrap');
// wp_enqueue_style('fontawesome');
 wp_enqueue_style('style');

 
}
add_action('wp_enqueue_scripts', 'register_enqueue_style');



function register_enqueue_scripts(){
$theme_data = wp_get_theme();
    
    /* Deregister Scripts */
    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-migrate' );


/*registrando js*/
/* Registrando scripts */

wp_register_script('jquery', get_theme_file_uri('/assets/vendor/jquery/jquery.min.js'), null, '3.3.1', true);
wp_register_script('jquery-migrate', get_theme_file_uri('/assets/vendor/jquery/jquery-migrate.min.js'), array('jquery'), '3.0.0', true);
wp_register_script('jqueryeasing', get_parent_theme_file_uri('/assets/vendor/js/jquery.easing.1.3.js'),
'1.3',null, true);
wp_register_script('bootstrap', get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'),
'4.1.3',null, true);
wp_register_script('scripts', get_parent_theme_file_uri('/assets/js/scripts.js'), array('jquery'), null, true);

 /* Estilos en cola */
 wp_enqueue_script('jquery');
 wp_enqueue_script('jquery-migrate');
 wp_enqueue_script('jqueryeasing');
 wp_enqueue_script('bootstrap');
 wp_enqueue_script('scripts');

}
add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

/*registro de menú*/

function menus_setup() {
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu'),
      )
  );
}

add_action( 'after_setup_theme', 'menus_setup');

/*logo personalizable*/

function config_custom_logo() {
    add_theme_support( 'custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
    ));
  }
  add_action( 'after_setup_theme', 'config_custom_logo' );

/*desactivar error functions.php Notice: ob_end_flush(): failed to send buffer of zlib output compression (1) in*/
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

//activando widgets
        function widgets_anafrank() {

        // Nueva Zona Agregada
        register_sidebar( array(
        'name'          => __( 'Header', 'anafrank' ),
        'id'            => 'sidebar-4',
        'description'   => __( 'Add widgets here to appear in your header.', 'twentyseventeen' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
        'name'          => __( 'Sidebar', 'anafrank' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyseventeen' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
        'name'          => __( 'Footer 1', 'anafrank' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) );

        register_sidebar( array(
        'name'          => __( 'Footer 2', 'anafrank' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        ) );
        }
        add_action( 'widgets_init', 'widgets_anafrank' );


?>