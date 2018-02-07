          <div class="img-post">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
          } else {
			_e('<i class="fas ');
            icon();
			_e('"></i>');
          } ?>
          </div><!-- end img post -->