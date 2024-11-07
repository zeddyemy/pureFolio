<?php

/*
    Template part : Search Result
    Description : This Template Part Is Designed To Display search results of a particular Search on the site.
    This Template Part Also contains Other Templates That Determines How The would Post Looks Like.

    Template Parts :    1) None Template :> If there are no post in a category.
*/
$folio_query = new WP_Query(
	array(
		'post_type' => 'portfolios',
		's' => get_search_query()
	)
);
?>
<section class="all-post">
	<?php if (have_posts()) : ?>

		<div class="all-post-title">
			<div class="title"> Search result for : "<?php the_search_query(); ?>"</div>
		</div>

		<article class="grid blogCards">
			<?php
			while (have_posts()) : the_post();
				if (get_post_type() === 'portfolios') {
					echo get_portfolio_card();
				} else {
					echo get_default_card();
				}
			endwhile;
			?>
		</article>

		<div class="pagination row flexCenter">
			<?php echo paginate_links(); ?>
		</div>

	<?php else :
		get_template_part('template-parts/none', get_post_format()); // None template part
	endif; ?>

</section>