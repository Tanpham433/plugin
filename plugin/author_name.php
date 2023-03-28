<?php
/*
Plugin Name:  Author Name

*/
function display_author_name_below_post($content){
    if( is_single() && get_post_type() == 'post' ) {
        // Lấy tên tác giả hiện tại của bài viết
        $author_name = get_the_author();

        // Hiển thị tên tác giả bên dưới nội dung bài viết
        $content .= '<p>Tác giả: ' . $author_name . '</p>';
    }

    return $content;
}
add_filter('the_content', 'display_author_name_below_post');
?>