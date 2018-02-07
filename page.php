<?php get_header(); ?>
<?php get_template_part( 'content-open' ); ?>
      <!-- start -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post">
          <div class="row justify-content-end">
            <div class="article col-md-9">
              <article class="non-home">
                <?php the_content(''); ?>
              </article>          
            </div><!-- end article -->
          </div><!-- end row -->
        </div><!-- end post -->    
      <?php endwhile; endif; ?>
<?php get_template_part( 'content-close' ); ?>
<?php get_footer(); ?>
