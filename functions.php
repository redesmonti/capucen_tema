<?php

function capucen_styles(){
	wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
	//wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
  wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css');
  wp_enqueue_script('jquery');
 
  wp_enqueue_script('captcha', "https://www.google.com/recaptcha/api.js", array('jquery'), true);
  wp_enqueue_script('bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'), true);
  wp_enqueue_script( 'wow', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), '', true );
  wp_enqueue_script( 'count', get_stylesheet_directory_uri() . '/js/count.js', array(), '', true );

  wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/css/animate.css');
  wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/css/footer.css');
  wp_enqueue_style('style', get_stylesheet_uri()); //usa el style.css, debe ser la ultima hoja de estilos
}
add_action('wp_enqueue_scripts', 'capucen_styles'); //Hook para llamar al la funcion en wordpress

//* Enqueue script to activate WOW.js
add_action('wp_enqueue_scripts', 'sk_wow_init_in_footer');
function sk_wow_init_in_footer() {
  add_action( 'print_footer_scripts', 'wow_init' );
}
//* Add JavaScript before </body>
function wow_init() { ?>
  <script type="text/javascript">
    new WOW().init();
  </script>
<?php }


/*Menus*/

require_once('wp-bootstrap-navwalker.php');
//Permite agregar los menus
function mis_menus() {
  register_nav_menus(
    array(
      'navigation' => __( 'Menú de navegación de pagina'),
    )
  );
}
add_action( 'after_setup_theme', 'mis_menus' );

/*Añadir imagen destacada*/
add_theme_support( 'post-thumbnails' );

function longitud_excerpt($length) {
    return 20;
}
add_filter('excerpt_length', 'longitud_excerpt');

function mis_widgets(){
 register_sidebar(
   array(
       'name'          => __( 'Sidebar' ),
       'id'            => 'sidebar',
       'description'   => 'Widget para las paginas interiores',
       'before_widget' => '<div id="%1$s" class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3 class="widget-tittle">',
       'after_title'   => '</h3>',
   )
 );

 register_sidebar( 
  array(
       'name'          => __( 'Sidebar2' ),
       'id'            => 'sidebar2',
       'description'   => 'Widget para filtrar Eventos (Agenda)',
       'before_widget' => '<div id="%1$s" class="widget">',
       'after_widget'  => '</div>',
       'before_title'  => '<h3 class="widget-tittle">',
       'after_title'   => '</h3>',
  ) 
  );

}
add_action('init','mis_widgets');

/*Eventos*/

// La función no será utilizada antes del 'init'.
add_action( 'init', 'my_event_init' );
/* Here's how to create your customized labels */
function my_event_init() {
  $labels = array(
  'name' => _x( 'Eventos', 'post type general name' ),
        'singular_name' => _x( 'Evento', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo Evento', 'event' ),
        'add_new_item' => __( 'Añadir nuevo Evento' ),
        'edit_item' => __( 'Editar Evento' ),
        'new_item' => __( 'Nuevo Evento' ),
        'view_item' => __( 'Ver Evento' ),
        'search_items' => __( 'Buscar Eventos' ),
        'not_found' =>  __( 'No se han encontrado Eventos' ),
        'not_found_in_trash' => __( 'No se han encontrado Eventos en la papelera' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
    );
 
    register_post_type( 'Evento', $args ); /* Registramos y a funcionar */
}
 
// Lo enganchamos en la acción init y llamamos a la función create_event_taxonomies() cuando arranque
add_action( 'init', 'create_event_taxonomies', 0 );
 
// Creamos dos taxonomías, Categoria y autor para el custom post type "libro"
function create_event_taxonomies() {

  // Añadimos nueva taxonomía y la hacemos jerárquica (como las categorías por defecto)
  $labels = array(
  'name' => _x( 'Categorias', 'taxonomy general name' ),
  'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
  'search_items' =>  __( 'Buscar por Categoria' ),
  'all_items' => __( 'Todos los Categorias' ),
  'parent_item' => __( 'Categoria padre' ),
  'parent_item_colon' => __( 'Categoria padre:' ),
  'edit_item' => __( 'Editar Categoria' ),
  'update_item' => __( 'Actualizar Categoria' ),
  'add_new_item' => __( 'Añadir nueva Categoria' ),
  'new_item_name' => __( 'Nombre del nueva Categoria' ),
);
register_taxonomy( 'categoria', array( 'evento' ), array(
  'hierarchical' => true,
  'labels' => $labels, /* ADVERTENCIA: Aquí es donde se utiliza la variable $labels */
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => array( 'slug' => 'categoria' ),
));

// Añado otra taxonomía, esta vez no es jerárquica, como las etiquetas.
$labels = array(
  'name' => _x( 'Etiquetas', 'taxonomy general name' ),
  'singular_name' => _x( 'Etiqueta', 'taxonomy singular name' ),
  'search_items' =>  __( 'Buscar Etiquetas' ),
  'popular_items' => __( 'Etiquetas populares' ),
  'all_items' => __( 'Todos los Etiquetas' ),
  'parent_item' => null,
  'parent_item_colon' => null,
  'edit_item' => __( 'Editar Etiqueta' ),
  'update_item' => __( 'Actualizar Etiqueta' ),
  'add_new_item' => __( 'Añadir nuevo Etiqueta' ),
  'new_item_name' => __( 'Nombre del nuevo Etiqueta' ),
  'separate_items_with_commas' => __( 'Separar Etiquetas por comas' ),
  'add_or_remove_items' => __( 'Añadir o eliminar Etiquetas' ),
  'choose_from_most_used' => __( 'Escoger entre los Etiquetas más utilizadas' )
);
 
register_taxonomy( 'etiqueta', 'evento', array(
  'hierarchical' => false,
  'labels' => $labels, /* ADVERTENCIA: Aquí es donde se utiliza la variable $labels */
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => array( 'slug' => 'etiqueta' ),
));
} // Fin de la función create_event_taxonomies().



/*Temas_de_Interes*/

// La función no será utilizada antes del 'init'.
add_action( 'init', 'my_tdi_init' );
/* Here's how to create your customized labels */
function my_tdi_init() {
  $labels = array(
  'name' => _x( 'Temas de Interes', 'post type general name' ),
        'singular_name' => _x( 'Tema de Interes', 'post type singular name' ),
        'add_new' => _x( 'Añadir nuevo Tema de Interes', 'tema_de_interes' ),
        'add_new_item' => __( 'Añadir nuevo Tema de Interes' ),
        'edit_item' => __( 'Editar Tema de Interes' ),
        'new_item' => __( 'Nuevo Tema de Interes' ),
        'view_item' => __( 'Ver Tema de Interes' ),
        'search_items' => __( 'Buscar Temas de Interes' ),
        'not_found' =>  __( 'No se han encontrado Temas de Interes' ),
        'not_found_in_trash' => __( 'No se han encontrado Temas de Interes en la papelera' ),
        'parent_item_colon' => ''
    );
 
    // Creamos un array para $args
    $args = array( 'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
    );
 
    register_post_type( 'tema_de_interes', $args ); /* Registramos y a funcionar */
}
 
// Lo enganchamos en la acción init y llamamos a la función create_event_taxonomies() cuando arranque
add_action( 'init', 'create_tdi_taxonomies', 0 );
 
// Creamos dos taxonomías, Categoria y autor para el custom post type "libro"
function create_tdi_taxonomies() {

  // Añadimos nueva taxonomía y la hacemos jerárquica (como las categorías por defecto)
  $labels = array(
  'name' => _x( 'Categorias', 'taxonomy general name' ),
  'singular_name' => _x( 'Categoria', 'taxonomy singular name' ),
  'search_items' =>  __( 'Buscar por Categoria' ),
  'all_items' => __( 'Todos los Categorias' ),
  'parent_item' => __( 'Categoria padre' ),
  'parent_item_colon' => __( 'Categoria padre:' ),
  'edit_item' => __( 'Editar Categoria' ),
  'update_item' => __( 'Actualizar Categoria' ),
  'add_new_item' => __( 'Añadir nueva Categoria' ),
  'new_item_name' => __( 'Nombre del nueva Categoria' ),
);
register_taxonomy( 'categoria_tdi', array( 'tema_de_interes' ), array(
  'hierarchical' => true,
  'labels' => $labels, /* ADVERTENCIA: Aquí es donde se utiliza la variable $labels */
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => array( 'slug' => 'categoria' ),
));

// Añado otra taxonomía, esta vez no es jerárquica, como las etiquetas.
$labels = array(
  'name' => _x( 'Etiquetas', 'taxonomy general name' ),
  'singular_name' => _x( 'Etiqueta', 'taxonomy singular name' ),
  'search_items' =>  __( 'Buscar Etiquetas' ),
  'popular_items' => __( 'Etiquetas populares' ),
  'all_items' => __( 'Todos los Etiquetas' ),
  'parent_item' => null,
  'parent_item_colon' => null,
  'edit_item' => __( 'Editar Etiqueta' ),
  'update_item' => __( 'Actualizar Etiqueta' ),
  'add_new_item' => __( 'Añadir nuevo Etiqueta' ),
  'new_item_name' => __( 'Nombre del nuevo Etiqueta' ),
  'separate_items_with_commas' => __( 'Separar Etiquetas por comas' ),
  'add_or_remove_items' => __( 'Añadir o eliminar Etiquetas' ),
  'choose_from_most_used' => __( 'Escoger entre los Etiquetas más utilizadas' )
);
 
register_taxonomy( 'etiqueta_tdi', 'tema_de_interes', array(
  'hierarchical' => false,
  'labels' => $labels, /* ADVERTENCIA: Aquí es donde se utiliza la variable $labels */
  'show_ui' => true,
  'query_var' => true,
  'rewrite' => array( 'slug' => 'etiqueta' ),
));
} // Fin de la función create_tdi_taxonomies().


?>