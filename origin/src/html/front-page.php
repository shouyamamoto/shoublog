<?php get_header(); ?>
<body>
    <!-- メインビジュアル -->
    <header class="mainVisual">
        <img src="<?php echo get_template_directory_uri(); ?>/images/mainVisual.jpg" alt="" width="414px" height="200px" style="object-fit: cover;">
    </header>
    <!-- メインビジュアル -->

    <!-- ナビバー -->
    <nav class="nav">
        <ul class="nav__list">
            <li class="nav__item home">
                <a href="">HOME</a>
            </li>
            <li class="nav__item category">
                <a href="">CATEGORY</a>
            </li>
            <li class="nav__item about">
                <a href="">ABOUT</a>
            </li>
            <li class="nav__item contact">
                <a href="">CONTACT</a>
            </li>
        </ul>
    </nav>
    <!-- ナビバー -->

    <!-- よく読まれている記事 -->
    <!-- 3件ループ -->
    <section class="mustPopular">
        <h2 class="mustPopular__title"><span>01</span>MUST-POPULAR</h2>

        <ul class="mustPopular__list">
            <?php if(have_posts()) : while(have_posts()) : the_post();?>
                <li class="mostPopular__item">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        <?php the_excerpt(); ?>
                    </a>
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
                    <a href="" class="codeArticle__link">
                        <?php the_title(); ?>
                        <?php the_excerpt(); ?>
                    </a>
                </li>
            <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
            <?php else: ?>
                <p>記事がありません。</p>
            <?php endif; ?>
            </ul>
            <button class="codeArticle__btn">
                <a href="" class="codeArticle__link"></a>
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
            <h2 class="photoArticle__title"><span>03</span>PHOTO</h2>
            <?php if ($the_query->have_posts()) :?>
            <ul class="photoArticle__list">
                <?php while($the_query->have_posts()) : $the_query->the_post() ; ?>
                    <li class="photoArticle__item">
                        <a href="" class="photoArticle__link">
                            <?php the_title(); ?>
                            <?php the_excerpt(); ?>
                        </a>
                    </li>
                <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
                <?php else: ?>
                    <p>記事がありません。</p>
                <?php endif; ?>
            </ul>
            <button class="photoArticle__btn">
                <a href="" class="photoArticle__link"></a>
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
        <article class="lifeArticle">
            <h2 class="lifeArticle__title"><span>04</span>LIFE</h2>
            <?php if ($the_query->have_posts()):?>
            <ul class="lifeArticle__list">
                <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="lifeArticle__item">
                        <a href="" class="lifeArticle__link">
                            <?php the_title(); ?>
                            <?php the_excerpt(); ?>
                        </a>
                    </li>
                <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
                <?php else: ?>
                    <p>記事がありません。</p>
                <?php endif; ?>
            </ul>
            <button class="lifeArticle__btn">
                <a href="" class="lifeArticle__link"></a>
            </button>
        </article>
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

    <!-- カテゴリー一覧 -->
    <section class="category">
        <h2 class="category__title">CATEGORY</h2>
        
        <!-- codeカテゴリーの子カテゴリー一覧 -->
        <div class="codeCategory">
            <img src="<?php echo get_template_directory_uri(); ?>/images/code.jpg" alt="" class="codeCategory__image">
            <ul class="codeCategory__list">
                <?php 
                    $parent_category = get_category_by_slug('code');
                    $args = array(
                        'type' => 'post',
                        'child_of' => 152,
                        'hide_empty' => 0,
                        'order_by' => 'name',
                    );
                    $child_categories = get_categories($args);
                    foreach($child_categories as $category) :
                ?>
                <li class="codeCategory__item">
                    <a href="<?php echo get_category_link($category->term_id); ?>" class="codeCategory__link">
                        <?php echo $category->cat_name; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- codeカテゴリーの子カテゴリー一覧 -->

        <!-- photoカテゴリーについているタグの一覧 -->
        <div class="photoCategory">
            <img src="" alt="" class="photoCategory__image">
            <?php 
                    $parent_category = get_category_by_slug('photo');
                    $args = array(
                        'type' => 'post',
                        'child_of' => $parent_category->term_id,
                        'hide_empty' => 0,
                        'order_by' => 'name',
                    );
                    $child_categories = get_categories($args);
                    foreach($child_categories as $category) :
                ?>
            <ul class="photoCategory__list">
                <li class="photoCategory__item">
                    <a href="<?php echo get_category_link($category->term_id); ?>" class="photoCategory__link">
                        <?php echo $category->cat_name; ?>
                    </a>
                </li>
            </ul>
            <?php endforeach;?>
        </div>
        <!-- photoカテゴリーについているタグの一覧 -->
        
        <!-- lifeカテゴリーについているタグの一覧 -->
        <div class="lifeCategory">
            <img src="" alt="" class="lifeCategory__image">
            <?php 
                $parent_category = get_category_by_slug('life');
                $args = array(
                    'type' => 'post',
                    'child_of' => $parent_category->term_id, 
                    'hide_empty' => 0,
                    'order_by' => 'name',
                );

                $child_categories = get_categories($args);
                foreach($child_categories as $category):
            ?>
            <ul class="lifeCategory__list">
                <li class="lifeCategory__item">
                    <a href="<?php echo get_category_link($category->term_id); ?>" class="lifeCategory__link">
                        <?php echo $category->cat_name; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- lifeカテゴリーについているタグの一覧 -->
    </section>
    <!-- カテゴリー一覧 -->

<?php get_footer(); ?>