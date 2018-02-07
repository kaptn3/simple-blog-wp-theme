<div class="sidebar col-md-3" style="word-break: break-all;">
<!-- на будущее -->
<?php
  $args = array(
	'taxonomy'  => array('post_tag','category'),
   ); 

  wp_tag_cloud($args);
?> 
  <a class="btn-up"><i class="fas fa-angle-up" data-fa-mask="fas fa-circle"></i></a>
</div>