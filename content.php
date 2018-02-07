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
		  <h2 class="header-article"><a class="header-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		  <span><i class="fas fa-tags"></i> <?php the_tags('', ', '); ?></span>
          <article>
            <?php the_content(''); ?>
		  </article>     
		  
          <p class="read-more"><a href="<?php the_permalink(); ?>">Читать далее</a></p>
        </div><!-- end article -->
      </div><!-- end row excerpt-post -->
      <footer class="footer-post">
        <div class="line"></div>
      </footer> 
    </div><!-- end post -->