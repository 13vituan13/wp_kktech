<?php 
//hàm set up khi khởi tạo.
function theme_setup() {
    // hàm set up đăng kí menu, hiện mục Menu trong dashboard Admin.
    register_nav_menu('topMenu', 'Menu chính');
    // hàm set up khởi tạo chức năng upload image đại diện cho bài viết.
    add_theme_support('post-thumbnails');
}

function get_youtube_thumbnail($youtube_url) {
    // Kiểm tra nếu URL không phải là URL YouTube
    if (strpos($youtube_url, 'youtube.com') === false && strpos($youtube_url, 'youtu.be') === false) {
        return false;
    }

    // Lấy ID của video từ URL YouTube
    $video_id = '';
    if (strpos($youtube_url, 'youtube.com') !== false) {
        parse_str(parse_url($youtube_url, PHP_URL_QUERY), $query);
        if (isset($query['v'])) {
            $video_id = $query['v'];
        }
    } elseif (strpos($youtube_url, 'youtu.be') !== false) {
        $video_id = substr(parse_url($youtube_url, PHP_URL_PATH), 1);
    }

    // Nếu không lấy được ID của video, trả về false
    if (!$video_id) {
        return false;
    }

    // Xây dựng URL của ảnh thumbnail tương ứng
    $thumbnail_url = 'https://i3.ytimg.com/vi/' . $video_id . '/maxresdefault.jpg';

    return $thumbnail_url;
}
add_action('init', 'get_youtube_thumbnail');
// hàm chạy khi khởi tạo để call các hàm khác.
add_action('init', 'theme_setup');



