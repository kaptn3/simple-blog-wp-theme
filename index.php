<?php get_header(); ?>
<?php get_template_part( 'content-open' ); ?>
      <!-- start -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'content' ); ?>    
      <?php endwhile; ?>
        <!--?php echo get_next_posts_link(); ?-->
      <?php else: ?>
      <p><?php _e('Записей пока нет.'); ?></p>
      <?php endif; ?>
<?php get_template_part( 'content-close' ); ?>
<?php get_footer(); ?>
