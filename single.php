<?php get_header(); ?>

    <?php get_template_part('template-parts/nav', 'bar'); ?>

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article class="articleSingle">
            <span class="articleSingle__label"><?php the_category(); ?></span>

            <span class="articleSingle__time"><?php the_time('Y/m/d'); ?></span>
            
            <h1 class="articleSingle__title"><?php the_title(); ?></h1>

            <img src="<?php echo thumb_url( 'large' );?>" class="articleSingle__thumbnail" alt="">

            <div class="articleSingle__content">
                <?php the_content(); ?>
            </div>
            

            <?php get_template_part('template-parts/breadcrumb'); ?>
        </article>
    <?php endwhile; ?>
    <?php endif; ?>
    
    <!-- 同じカテゴリーの記事を表示させる -->
    <?php
    // 記事のカテゴリー情報を取得する
    $cat = get_the_category();
    $cat_name = $cat[0]->cat_name;
    ?>
    <?php if($cat_name === 'LIFE'): ?>
        <!-- lifeの記事 -->
        <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'category_name' => 'life',
            );
            $the_query = new WP_Query($args);
        ?>
        <article class="lifeArticle singlePost">
            <h2 class="lifeArticle__title">オススメの記事</h2>
            <span class="lifeArticle__title--en">RECOMMEND</span>
            <?php if ($the_query->have_posts()):?>
            <ul class="lifeArticle__list">
                <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="lifeArticle__item mb--sm">
                        <div class="lifeArticle__image">
                            <a href="<?php the_permalink(); ?>" class="lifeArticle__link">
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php echo thumb_url( 'large' );?>" class="lifeArticle__thumbnail" alt="">
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="no-image" alt="サムネイルがありません。" width="100%" height="200px">
                                <?php endif; ?>
                            </a>
                        </div>
                        
                        <div class="lifeArticle__details">
                            <a href="<?php the_permalink(); ?>" class="codeArticle__link">
                                <span class="codeArticle__time"><?php the_time('Y/n/j'); ?></span>
                                <h2 class="codeArticle__detailTitle"><?php the_title(); ?></h2>
                            </a>
                        </div>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>
            <button class="lifeArticle__btn">
                <?php 
                    $category_id = get_cat_ID('life');
                    $category_link = get_category_link($category_id);
                ?>
                <a href="<?php echo esc_url( $category_link ); ?>" class="lifeArticle__link">もっと読む</a>
            </button>
        </article>
        </section>
        <!-- lifeの記事 -->
    <?php elseif($cat_name === 'CODE'): ?>
        <!-- codeの記事 -->
        <?php 
            $args = array(
                'post_type' => 'post',
                'category_name' => 'code',
                'posts_per_page' => 4,
            );
            $the_query = new WP_Query($args);
        ?>
        <article class="codeArticle singlePost">
            <h2 class="codeArticle__title">オススメの記事</h2>
            <span class="codeArticle__title--en">RECOMMEND</span>
            <ul class="codeArticle__list">
            <?php if ($the_query->have_posts()) :?>
            <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="codeArticle__item mb--sm">
                    <div class="codeArticle__image">
                        <a href="<?php the_permalink(); ?>" class="codeArticle__link">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo thumb_url( 'large' );?>" class="codeArticle__thumbnail" alt="">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="no-image" alt="サムネイルがありません。" width="100%" height="200px">
                            <?php endif; ?>
                        </a>
                    </div>
                    
                    <div class="codeArticle__details">
                        <a href="<?php the_permalink(); ?>" class="codeArticle__link">
                            <span class="codeArticle__time"><?php the_time('Y/n/j'); ?></span>
                            <h2 class="codeArticle__detailTitle"><?php the_title(); ?></h2>
                        </a>
                    </div>
                </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            </ul>
            <button class="codeArticle__btn">
                <?php 
                    $category_id = get_cat_ID('code');
                    $category_link = get_category_link($category_id);
                ?>
                <a href="<?php echo esc_url( $category_link ); ?>" class="codeArticle__link">もっと読む</a>
            </button>
        </article>
        <!-- codeの記事 -->
    <?php elseif($cat_name === 'PHOTO'): ?>
        <!-- photoの記事 -->
        <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'category_name' => 'photo',
            );

            $the_query = new WP_Query($args);
        ?>
        <article class="photoArticle singlePost">
            <h2 class="photoArticle__title">オススメの記事</h2>
            <span class="photoArticle__title--en">RECOMMEND</span>
            <?php if ($the_query->have_posts()) :?>
            <ul class="photoArticle__list">
                <?php while($the_query->have_posts()) : $the_query->the_post() ; ?>
                <li class="photoArticle__item mb--sm">
                    <div class="photoArticle__image">
                        <a href="<?php the_permalink(); ?>" class="photoArticle__link">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo thumb_url( 'large' );?>" class="photoArticle__thumbnail" alt="">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="no-image" alt="サムネイルがありません。" width="100%" height="200px">
                            <?php endif; ?>
                        </a>
                    </div>
                    
                    <div class="photoArticle__details">
                        <a href="<?php the_permalink(); ?>" class="codeArticle__link">
                            <span class="codeArticle__time"><?php the_time('Y/n/j'); ?></span>
                            <h2 class="codeArticle__detailTitle"><?php the_title(); ?></h2>
                        </a>
                    </div>
                </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <p>記事がありません。</p>
                <?php endif; ?>
            </ul>
            <button class="photoArticle__btn">
                <?php 
                    $category_id = get_cat_ID('photo');
                    $category_link = get_category_link($category_id);
                ?>
                <a href="<?php echo esc_url( $category_link ); ?>" class="photoArticle__link">もっと読む</a>
            </button>
        </article>
        <!-- photoの記事 -->
    <?php endif; ?>
    <!-- 同じカテゴリーの記事を表示させる -->

    <!-- 人気記事表示 -->
    <?php get_template_part('template-parts/popular'); ?>
    <!-- 人気記事表示 -->

    <!-- 検索フォーム -->
    <?php get_search_form(); ?>
    <!-- 検索フォーム -->

    <!-- カテゴリー一覧 -->
    <?php get_template_part('template-parts/category', 'list'); ?>
    <!-- カテゴリー一覧 -->

    <!-- 自己紹介 -->
    <?php get_template_part('template-parts/about'); ?>
    <!-- 自己紹介 -->
    
    
<?php get_footer(); ?>