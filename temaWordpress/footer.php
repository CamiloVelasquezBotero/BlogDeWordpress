<footer>
    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')): endif; ?>

    <div class="menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <?php wp_nav_menu(
                        array(
                            //Creamos el menu de navegacion de Wp
                            'container' => false,
                            //Le decimos que no tenga un contenedor por que los encerraremos en un wrap(ul)
                            'menu_class' => '',
                            //Le agregamos alguna clase adicional
                            'items_wrap' => '<ul class="col-md-12">%3$s</ul>',
                            //elegimos que se encierre en un wrap
                            'theme_location' => 'menu-footer' //ubicacion que tendra el menu
                        )
                    ); ?>

                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Sitio creado por Camilo Velasquez Botero</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>