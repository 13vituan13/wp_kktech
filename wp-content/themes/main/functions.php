<?php 
// Hàm set up khi khởi tạo.
function theme_setup() {
    // Đăng kí menu và hiện mục Menu trong dashboard Admin.
    register_nav_menu('main-menu', 'main-menu');
    // Hỗ trợ tính năng ảnh đại diện cho bài viết.
    add_theme_support('post-thumbnails');
}

add_action('init', 'theme_setup');

// Register custom post type 'Topics'
function custom_post_type() {
    register_post_type('topics',
        array(
            'labels' => array(
                'name' => __('Topics'), // Tiêu đề menu
                'singular_name' => __('Topic') // Tiêu đề mục trong menu
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'topics'),
            'supports' => array('title', 'editor', 'thumbnail'), // Thêm 'thumbnail' để hỗ trợ ảnh đại diện
        )
    );
}

// Thay đổi các text khác
function custom_post_type_args($args, $post_type) {
    if ($post_type === 'topics') {
        $args['menu_icon'] = 'dashicons-megaphone'; // Thay đổi biểu tượng trong menu cho 'Topics'

        $args['labels']['menu_name'] = __('Topics'); // Tiêu đề menu
        $args['labels']['all_items'] = __('All Topics'); // Tất cả mục
        $args['labels']['add_new'] = __('Add new topic'); // Thêm mới mục
        $args['labels']['add_new_item'] = __('Add new Topic'); // Thêm mới topic
        $args['labels']['edit_item'] = __('Edit Topic'); // Chỉnh sửa topic
        $args['labels']['new_item'] = __('Add new'); // Thêm mới
        $args['labels']['view_item'] = __('View Topic'); // Xem topic
        $args['labels']['search_items'] = __('Search Topics'); // Tìm kiếm
        $args['labels']['not_found'] = __('No Topics found'); // Không tìm thấy
        $args['labels']['not_found_in_trash'] = __('No Topics found in trash'); // Không tìm thấy trong thùng rác
    }
    return $args;
}
add_filter('register_post_type_args', 'custom_post_type_args', 10, 2);

add_action('init', 'custom_post_type');

// Tạo Custom Walker Class cho cấu trúc menu tùy chỉnh
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()) {
        if ($depth === 0) {
            $output .= '<dd><ul>';
        } else {
            $output .= '<ul>';
        }
    }

    function end_lvl(&$output, $depth = 0, $args = array()) {
        if ($depth === 0) {
            $output .= '</ul></dd>';
        } else {
            $output .= '</ul>';
        }
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $data_attribute = isset($item->attr_title) && !empty($item->attr_title) ? ' data-gnavi="' . esc_attr($item->attr_title) . '"' : '';

        if ($depth === 0 && in_array('menu-item-has-children', $item->classes)) {
            $output .= '<li' . $data_attribute . '>';
            $output .= '<dl><dt><span><strong>' . $item->title . '</strong></span></dt>';
        } else {
            $output .= '<li' . $data_attribute . '>';
            $output .= '<a href="' . esc_url($item->url) . '"><strong>' . $item->title . '</strong></a>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = array()) {
        if ($depth === 0 && in_array('menu-item-has-children', $item->classes)) {
            $output .= '</dl></li>';
        } else {
            $output .= '</li>';
        }
    }
}

// Hàm hiển thị menu với cấu trúc tùy chỉnh
function display_custom_menu() {
    ?>
    <div class="p-header__gnavi_menu">
        <p>
            <span>
                <b>
                    <i></i>
                    <i></i>
                    <i></i>
                </b>
                <em>
                    <strong>MENU</strong>
                    <strong>CLOSE</strong>
                </em>
            </span>
        </p>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => false,
            'menu_id' => 'main-menu',
            'menu_class' => '',
            'walker' => new Custom_Walker_Nav_Menu(), // Sử dụng Custom Walker
        ));
        ?>
    </div>
    <?php
}
?>
