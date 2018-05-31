<?php
 $img = get_field('img'); if( !empty($img) ): ?>

<div class="col-12 col-sm-6 col-lg-4 item">
  <div class="content">
    <h4><?php the_title(); ?> </h4>
    <p><?php the_content(); ?></p>
  </div>
  <img class="img" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
  <?php endif; ?>
</div>
