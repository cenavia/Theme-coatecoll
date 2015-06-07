  
        <?php rewind_posts(); ?>
        <?php query_posts('cat=6&order=Asc'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="link">
               <a class="link__content__url"href="">
                <figure class="link__content">
                   <?php the_post_thumbnail('thumbnail', array( 'class' => 'link__content__image' ) ); ?>
                </figure>
               </a>
            </article>
           <?php endwhile; ?>
           <!-- post navigation -->
           <?php else: ?>
              <h4>No hemos encontrado resultados</h4>
           <!-- no posts found -->
           <?php endif; ?>