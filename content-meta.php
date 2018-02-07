<p>
  <span><i class="fas fa-pen-square"></i> <?php the_category(', '); ?>   </span> 
  <span><i class="fas fa-user"></i> <?php the_author(); ?></span> 
  <span><i class="fas fa-calendar-alt"></i> <?php echo get_the_date('d.m.Y'); ?></span> 
  <span><i class="fas fa-clock"></i> <?php echo get_the_time(); ?></span>
</p>