<!-- カテゴリー一覧 -->
<section class="category mb--lr" id="category">
    <h2 class="category__title">カテゴリー</h2>
    <span class="category__title--en">CATEGORIES</span>

    <div class="category__container">
        <!-- codeカテゴリーの子カテゴリー一覧 -->
        <div class="categorySection mb--md">
            <div class="categorySection__imageContainer">
                <img src="<?php echo get_template_directory_uri(); ?>/images/code.jpg" alt="" class="categorySection__image" width="100%" height="200px">
                <p class="categorySection__text">コーディング<br><span class="categorySection__text--small">CODE</span></p>
            </div>
            <ul class="categorySection__list">
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
                <li class="categorySection__item">
                    <a href="<?php echo get_category_link($category->term_id); ?>" class="categorySection__link">
                        <?php echo $category->cat_name; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- codeカテゴリーの子カテゴリー一覧 -->

        <!-- photoカテゴリーの子カテゴリー一覧 -->
        <div class="categorySection mb--md">
            <div class="categorySection__imageContainer">
                <img src="<?php echo get_template_directory_uri(); ?>/images/photo.jpg" alt="" class="categorySection__image" width="100%" height="200px">
                <p class="categorySection__text">写真のコト<br><span class="categorySection__text--small">PHOTO</span></p>
            </div>
            
            <ul class="categorySection__list">
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
                <li class="categorySection__item">
                    <a href="<?php echo get_category_link($category->term_id); ?>" class="categorySection__link">
                        <?php echo $category->cat_name; ?>
                    </a>
                </li>
            <?php endforeach;?>
            </ul>
        </div>
        <!-- photoカテゴリーの子カテゴリー一覧 -->
        
        <!-- lifeカテゴリーの子カテゴリー一覧 -->
        <div class="categorySection mb--md">
            <div class="categorySection__imageContainer">
                <img src="<?php echo get_template_directory_uri()?>/images/life.jpg" alt="" class="categorySection__image" width="100%" height="200px">
                <p class="categorySection__text">暮らしのコト<br><span class="categorySection__text--small">LIFE</span></p>
            </div>
            
            <ul class="categorySection__list">
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
                <li class="categorySection__item">
                    <a href="<?php echo get_category_link($category->term_id); ?>" class="categorySection__link">
                        <?php echo $category->cat_name; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- lifeカテゴリーの子カテゴリー一覧 -->
    </div>
</section>
<!-- カテゴリー一覧 -->