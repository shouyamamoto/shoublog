<?php

/*
<title>タグを出力する
*/
add_theme_support('title-tag');

/*
アイキャッチ画像を有効化
*/
add_theme_support( 'post-thumbnails' );


// 人気記事を表示させる
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
// 記事viewカウント用関数
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

/*
サムネイル画像を呼び出す
*/
function thumb_url( $size ) {
    if( has_post_thumbnail() ) {
        $postthumb =wp_get_attachment_image_src( get_post_thumbnail_id(), $size );
        $url = $postthumb[0];
    }
    return $url;
    }
?>