<?php get_header(); ?>
<body>
    <!-- メインビジュアル -->
    <header class="mainVisual"></header>
    <!-- メインビジュアル -->

    <?php get_template_part('template-parts/nav', 'bar'); ?>

    <article class="articleDetail">
        <p class="articleDetail__label">wordpress</p>
        <p class="articleDetail__time">2020.11.13</p>
        <h2 class="articleDetail__title">WordPressについて</h2>
        <div class="articleDetail__content">これはこうです。</div>
    </article>

    <?php get_template_part('template-parts/category', 'list')?>

<?php get_footer(); ?>