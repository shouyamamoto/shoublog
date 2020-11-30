<?php get_header(); ?>
<body>
    <?php get_template_part('template-parts/nav', 'bar'); ?>

    <!-- 検索フォーム -->
    <?php get_search_form(); ?>
    <!-- 検索フォーム -->

    <!-- 検索結果 -->
    <div class="searchResults">
        <p class="searchResults__label">「<?php the_search_query(); ?>」の検索結果：<?php echo $wp_query->found_posts; ?>件</p>

        <?php if(have_posts()) :?>
        <ul class="searchResults__list">
            <?php while(have_posts()): the_post(); ?>
            <li class="searchResults__item mb--sm">
                <a href="" class="searchResults__link">
                    <div class="searchResults__image">
                        <a href="<?php the_permalink(); ?>" class="searchResults__link">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo thumb_url( 'large' );?>" class="searchResults__thumbnail" alt="">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="no-image" alt="サムネイルがありません。" width="100%" height="200px">
                            <?php endif; ?>
                        </a>
                    </div>
                        
                    <div class="searchResults__details">
                        <a href="<?php the_permalink(); ?>" class="searchResults__link">
                            <span class="searchResults__time"><?php the_time('Y/n/j'); ?></span>
                            <h2 class="searchResults__detailTitle"><?php the_title(); ?></h2>
                        </a>
                    </div>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php else: ?>
            <p>記事は見つかりませんでした。ほかのキーワードで検索するか、しょうたろうに依頼してみてください！</p>
        <?php endif; ?>

        <!-- ページナビ -->
        <?php if (function_exists( 'wp_pagenavi')) { wp_pagenavi();} ?>

        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb');?>
    </div>
    <!-- 検索結果 -->
    
    <!-- カテゴリー一覧 -->
    <?php get_template_part('template-parts/category', 'list')?>

    <!-- 自己紹介 -->
    <?php get_template_part('template-parts/about'); ?>
    <!-- 自己紹介 -->
    

<?php get_footer(); ?>
