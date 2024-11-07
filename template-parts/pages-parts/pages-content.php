<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pureFolio
 */

global $pureFolioThemeMods;
global $pureFolioPageThemeMods;
?>



<section class="article-card card">
	<header>
		<?php if (!$pureFolioPageThemeMods['toggle_hero_header']) { ?>
			<h2 class="article-card-title"> <?php the_title(); ?> </h2>
		<?php } ?>
	</header>


	<?php if ($pureFolioThemeMods['toggle_pages_featured_img']) { ?>
		<div class="featured-image">
			<?php theme_post_thumb(); ?>
		</div>
	<?php } ?>

	<div class="article-content">
		<?php the_content(__('(more...)')); ?>
	</div>
</section>