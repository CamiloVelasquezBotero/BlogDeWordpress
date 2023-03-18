<?php get_header(); ?>

<div class="container">
    <div class="row">
        <section class="main col-md-8">
            <section class="row single-post">
                    <article class="col-sm-12 post">
                        <div class="contenedor">
                            <div class="info">
                                <h2 class="titulo">Error 404</h2>
                                <div class="texto">
                                    <p>La pagina que buscas no se encuentra, por favor verifica que la Url que buscas sea correcta.</p>
                                    <br>
                                    <a href=" <?php bloginfo('url') ?>">Regresar a la pagina de inicio</a>
                                </div>
                            </div>
                        </div>
                    </article>
            </section>
        </section>

        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>