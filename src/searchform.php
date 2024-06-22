<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
    <button type="submit">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_search.svg" alt="">
    </button>
    <input type="text" name="s" id="s" placeholder="Search" maxlength="50" autocomplete="off">
</form>