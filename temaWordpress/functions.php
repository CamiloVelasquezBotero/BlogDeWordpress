<?php
//Se habilita el soporte para agregar imagenes destacadas en miniatura para las entradas de WP
add_theme_support('post-thumbnails');
//Agregar tamaño de imagen, y (true) para que nos corte la imgen si es que no cabe
add_image_size('homepage-thumb', 745, 372, true);

//Creamos menus los menus en wordpress
register_nav_menus( array(
    'menu-top' => 'Menu Principal',
    'menu-footer' => 'Menu Footer'
));

register_sidebar(array(//Creamos un Widget para el header
    'name' => 'Header',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));

register_sidebar(array(//Creamos un Widget para el Sidebar
    'name' => 'Sidebar',
    'before_widget' => '<div class="widget"><div class="titulo-seccion">', //Quiero que antes del que tenga la clase widget, me coloquees este codigo
    'after_widget' => '</div></div>', //Y al final de esta etiqeuta me coloques esta etiqeuta
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));

register_sidebar(array(//Creamos un Widget para el Footer
    'name' => 'Footer',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
));

?>