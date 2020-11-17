<!-- カテゴリー一覧 -->
<section class="category mb--lr" id="category">
    <h2 class="category__title">CATEGORY</h2>
    
    <!-- codeカテゴリーの子カテゴリー一覧 -->
    <div class="codeCategory mb--md">
        <div class="codeCategory__imageContainer">
            <img src="<?php echo get_template_directory_uri(); ?>/images/code.jpg" alt="" class="codeCategory__image" width="100%" height="200px">
            <p class="codeCategory__text">コーディング<br><span class="codeCategory__text--small">CODE</span></p>
        </div>
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

    <!-- photoカテゴリーの子カテゴリー一覧 -->
    <div class="photoCategory mb--md">
        <div class="codeCategory__imageContainer">
            <img src="<?php echo get_template_directory_uri(); ?>/images/photo.jpg" alt="" class="photoCategory__image" width="100%" height="200px">
            <p class="codeCategory__text">写真のコト<br><span class="photoCategory__text--small">PHOTO</span></p>
        </div>
        
        <ul class="photoCategory__list">
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
            <li class="photoCategory__item">
                <a href="<?php echo get_category_link($category->term_id); ?>" class="photoCategory__link">
                    <?php echo $category->cat_name; ?>
                </a>
            </li>
        <?php endforeach;?>
        </ul>
    </div>
    <!-- photoカテゴリーの子カテゴリー一覧 -->
    
    <!-- lifeカテゴリーの子カテゴリー一覧 -->
    <div class="lifeCategory mb--md">
        <div class="codeCategory__imageContainer">
            <img src="<?php echo get_template_directory_uri()?>/images/life.jpg" alt="" class="lifeCategory__image" width="100%" height="200px">
            <p class="codeCategory__text">暮らしのコト<br><span class="photoCategory__text--small">LIFE</span></p>
        </div>
        
        <ul class="lifeCategory__list">
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
            <li class="lifeCategory__item">
                <a href="<?php echo get_category_link($category->term_id); ?>" class="lifeCategory__link">
                    <?php echo $category->cat_name; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!-- lifeカテゴリーの子カテゴリー一覧 -->
</section>
<!-- カテゴリー一覧 -->