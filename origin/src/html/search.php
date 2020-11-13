<?php get_header(); ?>
<body>
    <!-- メインビジュアル -->
    <header class="mainVisual"></header>
    <!-- メインビジュアル -->
    
    <?php get_template_part('template-parts/nav', 'bar'); ?>

    <!-- 検索フォーム -->
    <div class="search">
        <h2 class="search__title--en">SEARCH<br>
            <span class="search__title--ja">記事を検索する</span>
        </h2>

        <form action="/" method="get" class="search__form">
            <input type="text" name="s" placeholder="検索する...">
        </form>

        <ul class="search__list">
            <li class="search__item">
                <a href="" class="search__link">wordpress</a>
            </li>
            <li class="search__item">
                <a href="" class="search__link">photo</a>
            </li>
            <li class="search__item">
                <a href="" class="search__link">XT-10</a>
            </li>
            <li class="search__item">
                <a href="" class="search__link">work</a>
            </li>
        </ul>
    </div>
    <!-- 検索フォーム -->

    <!-- 検索結果 -->
    <div class="searchResults">
        <p class="searchResults__label">...の検索結果</p>

        <ul class="searchResults__list">
            <li class="searchResults__item">
                <p class="searchResults__listLabel">code</p>
                <a href="" class="searchResults__link">
                    <img src="" alt="" class="searchResults__image">
                    <p class="searchResults__caption"></p>
                </a>
            </li>
            <li class="searchResults__item">
                <p class="searchResults__listLabel">code</p>
                <a href="" class="searchResults__link">
                    <img src="" alt="" class="searchResults__image">
                    <p class="searchResults__caption"></p>
                </a>
            </li>
            <li class="searchResults__item">
                <p class="searchResults__listLabel">code</p>
                <a href="" class="searchResults__link">
                    <img src="" alt="" class="searchResults__image">
                    <p class="searchResults__caption"></p>
                </a>
            </li>
            <li class="searchResults__item">
                <p class="searchResults__listLabel">code</p>
                <a href="" class="searchResults__link">
                    <img src="" alt="" class="searchResults__image">
                    <p class="searchResults__caption"></p>
                </a>
            </li>
            <li class="searchResults__item">
                <p class="searchResults__listLabel">code</p>
                <a href="" class="searchResults__link">
                    <img src="" alt="" class="searchResults__image">
                    <p class="searchResults__caption"></p>
                </a>
            </li>
            <li class="searchResults__item">
                <p class="searchResults__listLabel">code</p>
                <a href="" class="searchResults__link">
                    <img src="" alt="" class="searchResults__image">
                    <p class="searchResults__caption"></p>
                </a>
            </li>
            <li class="searchResults__item">
                <p class="searchResults__listLabel">code</p>
                <a href="" class="searchResults__link">
                    <img src="" alt="" class="searchResults__image">
                    <p class="searchResults__caption"></p>
                </a>
            </li>
            <li class="searchResults__item">
                <p class="searchResults__listLabel">code</p>
                <a href="" class="searchResults__link">
                    <img src="" alt="" class="searchResults__image">
                    <p class="searchResults__caption"></p>
                </a>
            </li>
            <li class="searchResults__item">
                <p class="searchResults__listLabel">code</p>
                <a href="" class="searchResults__link">
                    <img src="" alt="" class="searchResults__image">
                    <p class="searchResults__caption"></p>
                </a>
            </li>
            <li class="searchResults__item">
                <p class="searchResults__listLabel">code</p>
                <a href="" class="searchResults__link">
                    <img src="" alt="" class="searchResults__image">
                    <p class="searchResults__caption"></p>
                </a>
            </li>
        </ul>
    </div>
    <!-- 検索結果 -->

    <?php get_template_part('template-parts/category', 'list')?>

<?php get_footer(); ?>
