<?php get_header(); ?>
<?php get_template_part( 'content-open' ); ?>
    <div class="post">
      <div class="post-info row">
      <div class="line"></div>
        <div class="col-md-3">
<?php get_template_part( 'content-thumbnail' ); ?> 
        </div><!-- end col-md-2 -->
        <div class="meta-and-header col-md-9">
          <div class="meta-post">
            <p><a href="<?php echo get_home_url(); ?>">Главная</a></p>
          </div><!-- end meta -->
          <h2 class="header-article">Упс, страница не найдена!</h2>
        </div><!-- end col-md-9 -->
      </div><!-- end post-info -->
      <footer class="row justify-content-center">
      </footer> 
    </div><!-- end post -->
<?php get_template_part( 'content-close' ); ?>
<?php get_footer(); ?>