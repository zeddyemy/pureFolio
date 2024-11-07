<?php

global $pureFolioThemeMods;

?>


<article class="article-card card">
	<header>
		<h1 class="title article-card-title"><?php the_title(); ?></h1>
		<?php if ($pureFolioThemeMods['toggle_single_excerpt'] == true) { ?>
			<div class="excerpt"><?php echo get_the_excerpt(); ?></div>
		<?php } ?>
		<div class="author-date">
			<span class="author"> By <?php the_author_posts_link(); ?> </span> <span> • </span>
			<time pubdate datetime="<?php the_time('Y-m-d') ?>"> <?php the_time('F jS, Y') ?> </time>
		</div>
	</header>

	<?php
	if ($pureFolioThemeMods['toggle_share_btns'] == true) {
		social_share_btns();
	}

	if ($pureFolioThemeMods['toggle_single_featured_img'] == true) { ?>
		<div class="featured-image">
			<?php theme_post_thumb(); ?>
		</div>
	<?php } ?>

	<div class="article-content">
		<?php the_content(__('(more...)')); ?>
	</div>
</article>


<?php

if (comments_open() || get_comments_number()) {

	comments_template();
}

?>