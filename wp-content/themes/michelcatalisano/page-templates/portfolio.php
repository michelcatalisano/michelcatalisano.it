<?php
/**
 * Template Name: Portfolio
 *
 * Template for displaying a blank page.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<link href="https://fonts.googleapis.com/css?family=Poppins:100,700" rel="stylesheet">

<div class="wrapper" id="wrapper-index">

	<main id="main" class="site-main" role="main">


		<section id="work">
			<div id="fullpage">
				<?php
					$query = new WP_Query(
						array(
							'post_type' => 'portfolio',
							'posts_per_page'	=> -1,
							'order'	=> 'ASC'
						)
					);
					while ( $query->have_posts() ) : $query->the_post();
				?>
					<?php get_template_part( 'loop-templates/content', 'portfolio' ); ?>
				<?php endwhile; wp_reset_query(); ?>
			</div>
	 	</section>



  </main>

<?php
get_footer();
