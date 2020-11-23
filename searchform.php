<form action="<?php echo home_url('/'); ?>" method="get" class="search">
    <h2 class="search__title">SEARCH</h2>
    <div class="search__area">
        <input type="text" name="s" value="<?php the_search_query(); ?>" class="search__form">
        <img src="<?php echo get_template_directory_uri(); ?>/images/search-solid.svg" alt="" class="search__icon">
    </div>

    <ul class="search__list">
    <?php
        $categories = get_categories();
        foreach($categories as $category) {
        echo '<li class="search__item"><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
        }
        ?>
    </ul>
</form>