<?php
    if(is_page()) {
        remove_filter('the_content', 'wpautop');
    }
?>

<?php get_header(); ?>

    <?php get_template_part('template-parts/nav', 'bar'); ?>

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="page">
            <h1 class="page__title"><?php the_title(); ?></h1>
            
            <?php if(has_post_thumbnail()) :?>
                <img src="<?php echo thumb_url( 'large' );?>" class="articleSingle__thumbnail" alt="">
            <?php endif; ?>

            <div class="page__content">
                <?php the_content(); ?>
            </div>

            <?php get_template_part('template-parts/breadcrumb'); ?>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <!-- 検索フォーム -->
    <?php get_search_form(); ?>
    <!-- 検索フォーム -->

    <!-- カテゴリー一覧 -->
    <?php get_template_part('template-parts/category', 'list'); ?>
    <!-- カテゴリー一覧 -->
    
<?php get_footer(); ?>