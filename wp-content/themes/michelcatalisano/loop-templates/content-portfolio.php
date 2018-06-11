<?php
 $img = get_field('img'); if( !empty($img) ): ?>

<div class="item row justify-content-around">
  <div class="content-portfolio col-4">
    <p class="main-subtitle"><?php the_field('subtitle'); ?></p>
    <h4 class="main-title"><?php the_title(); ?> </h4>
    <div class="paragraph"><?php the_field('paragraph'); ?></div>
  </div>

  <div class="img-container col-8">
    <img class="img" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
  </div>
  <?php endif; ?>

</div>
