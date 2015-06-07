<?php get_header(); ?>

<!-- contenido del centro de la pagina index -->

<main class="content-group">
      <figure class="banner" style="background-image: url(<?php bloginfo('template_url'); ?>/img/portada.jpg);"></figure>
      <header class="proyects__header">
        <h1 class="proyects__header__tittle h1 ">
          Proyectos Destacados
        </h1>
      </header>
        <section class="proyect-group">

        	 <?php rewind_posts(); ?>
			  <?php query_posts('cat=3&order=Asc'); ?>
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

        <section class="services-group">
          <header class="services__header align-text">
            <h1 class="services__header__tittle h1 ">
              Le ayudamos con sus principales necesidades empresariales
            </h1>
          </header>
          <div class="wraper-service">
           
	        <?php rewind_posts(); ?>
	        <?php query_posts('cat=5&order=Asc'); ?>
	        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	            <article class="service">

	                <figure class="service__image-content  align-text">
	                   <?php the_post_thumbnail('full', array( 'class' => 'service__image-content__image' ) ); ?>
	                </figure>
	                <header class="service__header">
	                    <a href="<?php the_permalink(); ?>">
	                      <h2 class="service__header__title h2"><?php the_title(); ?></h2>
	                    </a>
	                </header>
	               <?php the_excerpt(); ?>
	               
	            </article>
	           <?php endwhile; ?>
	           <!-- post navigation -->
	           <?php else: ?>
	              <h4>No hemos encontrado resultados</h4>
	           <!-- no posts found -->
	           <?php endif; ?>

           
          </div>
        </section>

        <section class="links-group">
         

	        <?php rewind_posts(); ?>
	        <?php query_posts('cat=6&order=Asc'); ?>
	        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	            <article class="link">
	               <a class="link__content__url"href="<?php the_title(); ?>" target="_blank">
	                <figure class="link__content">
	                   <?php the_post_thumbnail('full', array( 'class' => 'link__content__image' ) ); ?>
	                </figure>
	               </a>
	            </article>
	           <?php endwhile; ?>
	           <!-- post navigation -->
	           <?php else: ?>
	              <h4>No hemos encontrado resultados</h4>
	           <!-- no posts found -->
	           <?php endif; ?>


        </section>
    </main>

 <!-- fin contenido del centro de la pagina index -->

 <?php get_footer(); ?>