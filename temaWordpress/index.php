<?php get_header(); ?><!--Esto sirve para indicarle que trabajaremos con lenguaje PHP-->

    <div class="container">
        <div class="row">
            <div class="main col-md-8">
                <div class="row titulo-seccion">
                    <div class="col-md-12">
                        <h3>Lo mas reciente</h3>
                    </div>
                </div>

                <div class="row posts">
                    <?php if(have_posts()) : while(have_posts()) : the_post();?><!--Si tenemos posts ejecuta, mientras haya posts, muestra el post-->
                    <!-- Articulo -->
                    <article class="col-md-6 post">
                        <div class="contenedor">
                            <div class="thumb">
                                <a href="<?php the_permalink(); ?>"> <?php if(has_post_thumbnail()) {the_post_thumbnail('homepage_thumb');}?></a><!--Si el articulo tiene una imagen, traemela con la medida de (homepage_thumn)-->
                            </div>
                            <div class="info">
                                <h2 class="titulo"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><!--Obten el enlace y el titulo de la entrada-->
                                <p class="fecha"><?php echo get_the_date(); ?></p><!--Obten la fecha de cada articulo-->
                                <div class="extracto"><?php echo the_excerpt(); ?></div><!--Obten el extracto de worpress-->
                                <div class="categorias">
                                    <?php the_category(); ?><!--Obten las cateogiras de mi entrada en Wp-->
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; else : ?><!--De otra forma-->
                    <!-- NO hay Articulos -->
                    <article class="col-md-6 post">
                        <div class="contenedor">
                            <div class="info">
                                <h2 class="titulo">El Post que buscas no existe</h2><!--Obten el enlace y el titulo de la entrada-->
                                <div class="extracto"><p>Revisa que la "Url" que hayas ingresado sea correcta.</p></div><!--Obten el extracto de worpress-->
                            </div>
                        </div>
                    </article>
                    <?php endif; ?>
                </div>

                <section class="row paginacion">
                    <div class="col-md-12">
                        <div class="paginacion"><?php wp_pagenavi(); ?></div>
                    </div>
                </section>
            </div>
            
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>
    