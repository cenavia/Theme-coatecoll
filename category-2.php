<?php get_header(); ?>
      <section class="proyect-group">
        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="proyect">

                <figure class="proyect__content-image">
                   <?php the_post_thumbnail('thumbnail', array( 'class' => 'proyect__content-image__image' ) ); ?>
                </figure>
                <header class="proyect__header">
                    <h2 class="proyect__header__title h2"><?php the_title(); ?></h2>
                </header>
               <?php the_excerpt(); ?>

                <a class="proyect__link" href="<?php the_permalink(); ?>">Ver más</a>
            </article>
           <?php endwhile; ?>
           <!-- post navigation -->
           <?php else: ?>
              <h4>No hemos encontrado resultados</h4>
           <!-- no posts found -->
           <?php endif; ?>
         
        </section>

 <?php get_footer(); ?>        