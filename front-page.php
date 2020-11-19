<?php get_header(); ?>
<body>
    <!-- メインビジュアル -->
    <header class="mainVisual mb--md">
        <h1 class="mainVisual__title">shoublog</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/images/mainVisual.jpg" class="mainVisual__image" alt="やましょうのブログのメインビジュアルです。" width="100%" height="200px">
    </header>
    <!-- メインビジュアル -->

    <?php get_template_part('template-parts/nav', 'bar'); ?>

    <!-- よく読まれている記事 -->
    <?php get_template_part('template-parts/popular');?>
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
        <article class="codeArticle">
            <h2 class="codeArticle__title"><span class="codeArticle__title--num">02</span>CODE</h2>
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
        <article class="photoArticle">
            <h2 class="photoArticle__title"><span class="photoArticle__title--num">03</span>PHOTO</h2>
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

        <!-- lifeの記事 -->
        <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'category_name' => 'life',
                );
                $the_query = new WP_Query($args);
        ?>
        <article class="lifeArticle">
            <h2 class="lifeArticle__title"><span class="lifeArticle__title--num">04</span>LIFE</h2>
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
    <section class="about">
        <h2 class="about__title"><span class="about__title--num">05</span>ABOUT</h2>
        <div class="about__item">
            <a href="" class="about__link">
                <img src="<?php echo get_template_directory_uri(); ?>/images/me.jpg" class="about__image" alt="#" width="100%" height="auto">
            </a>
        </div>
    </section>
    <!-- 自己紹介 -->
    
    <!-- 検索フォーム -->
    <?php get_search_form(); ?>

    <!-- カテゴリー一覧 -->
    <?php get_template_part('template-parts/category', 'list')?>

<?php get_footer(); ?>