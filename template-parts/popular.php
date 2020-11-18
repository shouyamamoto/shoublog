<!-- よく読まれている記事 --><!-- 3件ループ --> <?php
    // views post metaで記事のPV情報を取得する
    setPostViews(get_the_ID());

    $args = array(
        'meta_key' => 'post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'posts_per_page' => 3, // ← 3件取得
    );
    $the_query = new WP_Query($args);
?> <section class="popular"> <?php if(is_single() || is_search()) :?> <h2 class="popular__title">POPULAR</h2> <?php else : ?> <h2 class="popular__title"><span class="popular__title--num">01</span>POPULAR</h2> <?php endif; ?> <ul class="popular__list"> <?php 
            // WP_Queryによるループ
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
        ?> <li class="popular__item mb--sm"><div class="popular__image"><a href="<?php the_permalink(); ?>" class="popular__link"> <?php if (has_post_thumbnail()) : ?> <img src="<?php echo thumb_url( 'large' );?>" class="popular__thumbnail" alt=""> <?php else : ?> <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="no-image" alt="サムネイルがありません。" width="100%" height="200px"> <?php endif; ?> </a></div><div class="popular__details"><a href="<?php the_permalink(); ?>" class="popular__link"><span class="popular__time"><?php the_time('Y/n/j'); ?></span><h2 class="popular__detailTitle"><?php the_title(); ?></h2></a></div></li> <?php endwhile; ?> <?php wp_reset_postdata(); ?> <?php else : ?> <p>記事がありません。</p> <?php endif; ?> </ul><span class="popular__arrow--left"></span> <span class="popular__arrow--right"></span></section><!-- よく読まれている記事 -->