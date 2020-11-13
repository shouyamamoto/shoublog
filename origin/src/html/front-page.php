<?php get_header(); ?>
<body>
    <!-- メインビジュアル -->
    <header class="mainVisual">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mainVisual.jpg" alt="" width="414px" height="200px" style="object-fit: cover;">
    </header>
    <!-- メインビジュアル -->

    <?php get_template_part('template-parts/nav', 'bar'); ?>

    <!-- よく読まれている記事 -->
    <!-- 3件ループ -->
    <section class="mustPopular">
        <h2 class="mustPopular__title"><span>01</span>MUST-POPULAR</h2>

        <ul class="mustPopular__list">
            <?php if(have_posts()) : while(have_posts()) : the_post();?>
                <li class="mustPopular__item">
                    <div class="mustPopular__image">
                        <a href="<?php the_permalink(); ?>" class="mustPopular__link">
                        <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </div>
                    
                    <div class="mustPopular__Details">
                        <a href="<?php the_permalink(); ?>" class="mustPopular__link">
                        <p><?php the_time('Y/n/j'); ?><p>
                        <?php the_title(); ?>
                        <?php the_excerpt(); ?>
                        </a>
                    </div>
                </li>
            <?php endwhile; ?>
            <?php else : ?>
                <p>記事がありません。</p>
            <?php endif; ?>
        </ul>
        <span class="mustPopular__arrow--left"></span>
        <span class="mustPopular__arrow--right"></span>
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
        <article class="codeArticle">
            <h2 class="codeArticle__title"><span>02</span>CODE</h2>
            <ul class="codeArticle__list">
            <?php if ($the_query->have_posts()) :?>
            <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="codeArticle__item">
                    <div class="codeArticle__image">
                        <a href="<?php the_permalink(); ?>" class="codeArticle__link">
                        <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </div>
                    
                    <div class="codeArticle__Details">
                        <a href="<?php the_permalink(); ?>" class="codeArticle__link">
                        <p><?php the_time('Y/n/j'); ?><p>
                        <?php the_title(); ?>
                        <?php the_excerpt(); ?>
                        </a>
                    </div>
                </li>
            <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
            <?php else: ?>
                <p>記事がありません。</p>
            <?php endif; ?>
            </ul>
        </article>
        <button class="codeArticle__btn">
            <?php 
                $category_id = get_cat_ID('code');
                $category_link = get_category_link($category_id);
            ?>
            <a href="<?php echo esc_url( $category_link ); ?>" class="codeArticle__link">もっと読む</a>
        </button>
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
            <h2 class="photoArticle__title"><span>03</span>PHOTO</h2>
            <?php if ($the_query->have_posts()) :?>
            <ul class="photoArticle__list">
                <?php while($the_query->have_posts()) : $the_query->the_post() ; ?>
                <li class="photoArticle__item">
                    <div class="photoArticle__image">
                        <a href="<?php the_permalink(); ?>" class="photoArticle__link">
                        <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </div>
                    
                    <div class="photoArticle__Details">
                        <a href="<?php the_permalink(); ?>" class="photoArticle__link">
                        <p><?php the_time('Y/n/j'); ?><p>
                        <?php the_title(); ?>
                        <?php the_excerpt(); ?>
                        </a>
                    </div>
                </li>
                <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
                <?php else: ?>
                    <p>記事がありません。</p>
                <?php endif; ?>
            </ul>
        </article>
        <button class="photoArticle__btn">
            <?php 
                $category_id = get_cat_ID('photo');
                $category_link = get_category_link($category_id);
            ?>
            <a href="<?php echo esc_url( $category_link ); ?>" class="photoArticle__link">もっと読む</a>
        </button>
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
        <article class="lifeArticle">
            <h2 class="lifeArticle__title"><span>04</span>LIFE</h2>
            <?php if ($the_query->have_posts()):?>
            <ul class="lifeArticle__list">
                <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="lifeArticle__item">
                        <div class="lifeArticle__image">
                            <a href="<?php the_permalink(); ?>" class="lifeArticle__link">
                            <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                        
                        <div class="lifeArticle__Details">
                            <a href="<?php the_permalink(); ?>" class="lifeArticle__link">
                            <p><?php the_time('Y/n/j'); ?><p>
                            <?php the_title(); ?>
                            <?php the_excerpt(); ?>
                            </a>
                        </div>
                    </li>
                <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
                <?php else: ?>
                    <p>記事がありません。</p>
                <?php endif; ?>
            </ul>
        </article>
        <button class="lifeArticle__btn">
            <?php 
                $category_id = get_cat_ID('life');
                $category_link = get_category_link($category_id);
            ?>
            <a href="<?php echo esc_url( $category_link ); ?>" class="lifeArticle__link">もっと読む</a>
        </button>
    </section>
    <!-- lifeの記事 -->

    <!-- 自己紹介 -->
    <section class="about">
        <h2 class="about__title"><span>05</span>ABOUT</h2>
        <div class="about__item">
            <a href="" class="about__link">
                <img src="#" alt="#">
            </a>
        </div>
    </section>
    <!-- 自己紹介 -->

    <?php get_template_part('template-parts/category', 'list')?>

<?php get_footer(); ?>