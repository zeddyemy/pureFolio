<?php

/**
 * The template for displaying search form of the theme
 *
 *
 * @package pureFolio
 */
?>

<form role="search" method="get" id="search-form" class="search-form" action="<?php echo home_url('/'); ?>">
    <input type="text" name="s" id="search-field" class="search-field" value="" placeholder="What would you like to find?">
    <input type="hidden" value="post" name="post_type" id="post_type">
    <button class="search-btn">
        <i class='bx bx-search'></i>
    </button>
</form>