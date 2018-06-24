<?php
  $img = get_field('img');
  if( !empty($img) ):
?>

<div class="item section">
  <div class="row">
    <div class="content-portfolio col-md-6">
      <p class="main-subtitle"><?php the_field('subtitle'); ?></p>
      <h4 class="main-title" id="title"><?php the_title(); ?> </h4>
      <div class="paragraph"><?php the_field('paragraph'); ?></div>
    </div>

    <div class="img-container col-md-6">
      <img class="img" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
      <?php endif; ?>
    </div>
  </div>

</div>
