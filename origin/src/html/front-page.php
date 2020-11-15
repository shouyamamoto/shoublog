<?php get_header(); ?>
<body>
    <!-- メインビジュアル -->
    <header class="mainVisual mb--md">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mainVisual.jpg" class="mainVisual__image" alt="やましょうのブログのメインビジュアルです。" width="100%" height="200px">
    </header>
    <!-- メインビジュアル -->

    <?php get_template_part('template-parts/nav', 'bar'); ?>

    <!-- よく読まれている記事 -->
    <!-- 3件ループ -->
    <?php
        // views post metaで記事のPV情報を取得する
        setPostViews(get_the_ID());

        $args = array(
            'meta_key' => 'post_views_count',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
            'posts_per_page' => 3, // ← 3件取得
        );
        $the_query = new WP_Query($args);
    ?>
    <section class="popular mb--md">
        <h2 class="popular__title"><span class="popular__title--num">01</span>POPULAR</h2>

        <ul class="popular__list">
            <?php 
                // WP_Queryによるループ
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
            ?>
            <li class="popular__item">
                <div class="popular__image">
                    <a href="<?php the_permalink(); ?>" class="popular__link">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>
                </div>

                <div class="popular__details">
                    <a href="<?php the_permalink(); ?>" class="popular__link">
                        <?php the_title(); ?>
                    </a>
                </div>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>記事がありません。</p>
            <?php endif; ?>
        </ul>
        <span class="popular__arrow--left"></span>
        <span class="popular__arrow--right"></span>
    </section>
    <!-- よく読まれている記事 -->

    <!-- 記事一覧 -->
    <section class="article">
        <!-- codeの記事 -->
        <?php 
            $args = array(
                'post_type' => 'post',
                'category_name' => 'code',
                'posts_per_page' => 4,
            );
            $the_query = new WP_Query($args);
        ?>
        <article class="codeArticle mb--lr">
            <h2 class="codeArticle__title"><span class="codeArticle__title--num">02</span>CODE</h2>
            <ul class="codeArticle__list">
            <?php if ($the_query->have_posts()) :?>
            <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="codeArticle__item mb--sm">
                    <div class="codeArticle__image">
                        <a href="<?php the_permalink(); ?>" class="codeArticle__link">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="no-image" alt="サムネイルがありません。" width="300px" height="200px">
                            <?php endif; ?>
                        </a>
                    </div>
                    
                    <div class="codeArticle__details">
                        <a href="<?php the_permalink(); ?>" class="codeArticle__link">
                            <span class="codeArticle__time"><?php the_time('Y/n/j'); ?></span><br>
                            <?php the_title(); ?>
                        </a>
                    </div>
                </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>記事がありません。</p>
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

        <!-- photoの記事 -->
        <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'category_name' => 'photo',
            );

            $the_query = new WP_Query($args);
        ?>
        <article class="photoArticle mb--lr">
            <h2 class="photoArticle__title"><span class="photoArticle__title--num">03</span>PHOTO</h2>
            <?php if ($the_query->have_posts()) :?>
            <ul class="photoArticle__list">
                <?php while($the_query->have_posts()) : $the_query->the_post() ; ?>
                <li class="photoArticle__item mb--sm">
                    <div class="photoArticle__image">
                        <a href="<?php the_permalink(); ?>" class="photoArticle__link">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="no-image" alt="サムネイルがありません。" width="300px" height="200px">
                            <?php endif; ?>
                        </a>
                    </div>
                    
                    <div class="photoArticle__details">
                        <a href="<?php the_permalink(); ?>" class="photoArticle__link">
                            <span class="photoArticle__time"><?php the_time('Y/n/j'); ?></span><br>
                            <?php the_title(); ?>
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

        <!-- lifeの記事 -->
        <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'category_name' => 'life',
                );
                $the_query = new WP_Query($args);
        ?>
        <article class="lifeArticle mb--lr">
            <h2 class="lifeArticle__title"><span class="lifeArticle__title--num">04</span>LIFE</h2>
            <?php if ($the_query->have_posts()):?>
            <ul class="lifeArticle__list">
                <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="lifeArticle__item mb--sm">
                        <div class="lifeArticle__image">
                            <a href="<?php the_permalink(); ?>" class="lifeArticle__link">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="no-image" alt="サムネイルがありません。" width="300px" height="200px">
                                <?php endif; ?>
                            </a>
                        </div>
                        
                        <div class="lifeArticle__details">
                            <a href="<?php the_permalink(); ?>" class="lifeArticle__link">
                                <span class="lifeArticle__time"><?php the_time('Y/n/j'); ?></span><br>
                                <?php the_title(); ?>
                            </a>
                        </div>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <p>記事がありません。</p>
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

    <!-- 自己紹介 -->
    <section class="about mb--lr">
        <h2 class="about__title"><span class="about__title--num">05</span>ABOUT</h2>
        <div class="about__item">
            <a href="" class="about__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/me.jpg" class="about__image" alt="#" width="100%" height="200px">
            </a>
        </div>
        <button class="about__btn">
            <a href="<?php echo get_permalink(2227); ?>" class="about__link">もっと知る</a>
        </button>
    </section>
    <!-- 自己紹介 -->

    <?php get_template_part('template-parts/category', 'list')?>

<?php get_footer(); ?>