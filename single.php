<?php get_header(); ?>
<?php get_template_part( 'content-open' ); ?>
      <!-- start -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post">
          <div class="post-info row">      
        <div class="col-md-3">
<?php get_template_part( 'content-thumbnail' ); ?> 
        </div><!-- end col-md-3 -->
        <div class="meta-post col-md-9">
		  <div class="meta-post-p">	  		
            <?php get_template_part( 'content-meta' ); ?> 
		  </div>
        </div><!-- end meta col-md-9  -->  
		<div class="line"></div>     
      </div><!-- end post-info -->
          <div class="excerpt-post row justify-content-center">
            <div class="none content col-md-3"></div>
            <div class="article col-md-9">
			  <h2 class="header-article"><?php the_title(); ?></h2>
		      <article class="non-home">
                <?php the_content(''); ?>
              </article>   
			  <span><i class="fas fa-tags"></i> <?php the_tags('', ', '); ?></span>
            </div><!-- end article -->
          </div><!-- end row excerpt-post -->
        </div><!-- end post -->    
      <?php endwhile; endif; ?>
<?php get_template_part( 'content-close' ); ?>
<?php get_footer(); ?>
