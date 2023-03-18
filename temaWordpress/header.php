<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css">
    <!--La funcion php permite localizar la direccion de nuestra pagina para que a la vez ya dentro busque la direccion de lso estilos css-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,600&family=Oswald&display=swap"
        rel="stylesheet">
    <title>
        <?php if (is_home()) { //Si el usuario esta en casa(pagina principal)
                echo get_bloginfo('name'); //obten el nombre del blog
            } else if (is_single()) {
                echo the_title(); //Si estamos en la pagina sigle obten el titulo
            } else {
                echo get_bloginfo('name'); //Si no es ninguna de las dos, entonces traeme el nombre del blog
            } ?>
    </title>

    <?php wp_head(); ?><!--Esto nos srive para agregar la barra de edicion de wordpress (Muy Importante!!)-->
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="logo col-xs-12 col-sm-6">
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""><h2>Camilo Velasquez B.</h2></a>
                    
                </div>
                <div class="redes-sociales col-xs-12 col-sm-6">
                    <a class="youtube" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a>
                    <a class="facebook" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <nav class="menu">
            <div class="container">
                <div class="row">

                    <?php wp_nav_menu(array( //Creamos el menu de navegacion de Wp
                        'container' => false, //Le decimos que no tenga un contenedor por que los encerraremos en un wrap(ul)
                        'menu_class' => '', //Le agregamos alguna clase adicional
                        'items_wrap' => '<ul class="col-md-12">%3$s</ul>', //elegimos que se encierre en un wrap
                        'theme_location' => 'menu-top' //ubicacion que tendra el menu
                    )); ?>
                    
                </div>
            </div>
        </nav>
    </header>