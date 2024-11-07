<?php
/*
    Template part : Pages
    Description : This Template Part Is For The Pages Of The Site.
    It Also Consists Of Other Template Parts That Brings About The Design And Looks Of The Single Page.

    Template Parts : 	1) hero-header
						2) page content
						3) None template part.
						4) The Side Bar.

*/
global $pureFolioThemeMods;
global $pureFolioPageThemeMods;
$mainSecWidth = ($pureFolioPageThemeMods['toggle_sidebar']) ? 'col-8' : 'col-9';

?>

<?php
    if ($pureFolioPageThemeMods['toggle_hero_header']) {
		get_template_part('template-parts/pages-parts/hero-header', get_post_format());
    }
?>

<section class="wrapper pages pages-heroHeader-isActive col-12 flex layout">

	<section class="<?php echo $mainSecWidth; ?> main" >
		<?php if (have_posts()) :

			while (have_posts()) : the_post();

				get_template_part( 'template-parts/pages-parts/pages-content', get_post_format() );

			endwhile;

		else:

			// if there is nothing on the page
			get_template_part( 'template-parts/none', get_post_format() );

		endif; ?>
	</section>

	<?php if ($pureFolioPageThemeMods['toggle_sidebar']) { ?>
		<div class="col-4 side">
			<?php get_sidebar('pages'); ?>
		</div>
	<?php } ?>
</section>