<?php get_header(); ?>

 <?php the_post_thumbnail('full', array( 'class' => 'post__content-image__image' ) ); ?>

 <?php rewind_posts(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <header class="header">
        <h1 class="header__title"><?php the_title(); ?></h1>
    </header>

    <article class="container__item">
    	 <?php the_content(); ?>
    </article>
     <?php endwhile; ?>
     <!-- post navigation -->
     <?php else: ?>
        <h4>No hemos encontrado resultados</h4>
     <!-- no posts found -->
     <?php endif; ?>


<?php get_footer(); ?>