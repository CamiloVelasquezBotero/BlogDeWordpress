<aside class="sidebar col-md-4">
    <div class="widget redes-sociales">
        <div class="titulo-seccion">
            <h3>Siguenos</h3>
            <div class="redes-sociales">
                <a class="youtube" href="http://www.youtube.com"><i class="icono fa fa-youtube"></i>
                    <span class="seguidores">130k</span>
                </a>
                <a class="facebook" href="http://www.facebook.com"><i class="icono fa fa-facebook"></i>
                    <span class="seguidores">6k</span>
                </a>
                <a class="twitter" href="http://www.twitter.com"><i class="icono fa fa-twitter"></i>
                    <span class="seguidores">6.5k</span>
                </a>
            </div>
        </div>
    </div>

    <div class="widget boletin">
        <div class="titulo-seccion">
            <h3>Subscribete</h3>
            <form action="" class="formulario">
                <label for="email">Subscribete a nuestro boletin</label>
                <input type="email" id="email" placeholder="Correo Electronico">
                <input type="submit" value="enviar">
            </form>
        </div>
    </div>

    <div class="widget ad">
        <div class="contenedor-ad">
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/ad2.jpg" alt="DescripcionFoto"></a>
        </div>
    </div>

    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar')) :endif; ?>
</aside>