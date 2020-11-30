<?php get_header(); ?>
    <?php get_template_part('template-parts/nav', 'bar'); ?>

    <!-- 検索フォーム -->
    <?php get_search_form(); ?>
    <!-- 検索フォーム -->

    <!-- カテゴリー検索結果 -->
    <div class="archiveResults">
        <p class="archiveResults__label"><?php single_cat_title(); ?></p>
        <?php if (have_posts()): ?>
        <ul class="archiveResults__list">
            <?php while(have_posts()): the_post(); ?>
            <li class="archiveResults__item mb--sm">
                <a href="" class="archiveResults__link">
                    <div class="archiveResults__image">
                        <a href="<?php the_permalink(); ?>" class="archiveResults__link">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo thumb_url( 'large' );?>" class="archiveResults__thumbnail" alt="">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="no-image" alt="サムネイルがありません。" width="100%" height="200px">
                            <?php endif; ?>
                        </a>
                    </div>
                        
                    <div class="archiveResults__details">
                        <a href="<?php the_permalink(); ?>" class="archiveResults__link">
                            <span class="archiveResults__time"><?php the_time('Y/n/j'); ?></span>
                            <h2 class="archiveResults__detailTitle"><?php the_title(); ?></h2>
                        </a>
                    </div>
                </a>
            </li>
            <?php endwhile;?>
        </ul>
        <?php else: ?>
            <p>記事は見つかりませんでした。ほかのキーワードで検索するか、しょうたろうに依頼してみてください！</p>
        <?php endif; ?>
        <!-- カテゴリー検索結果 -->

        <!-- ページナビ -->
        <?php if (function_exists( 'wp_pagenavi')) { wp_pagenavi();} ?>
        
        <!-- パンくずリスト -->
        <?php get_template_part('template-parts/breadcrumb'); ?>
    </div>
    <!-- 検索結果 -->

    <?php get_template_part('template-parts/category', 'list') ?>

    <!-- 自己紹介 -->
    <?php get_template_part('template-parts/about'); ?>
    <!-- 自己紹介 -->
    

<?php get_footer(); ?>