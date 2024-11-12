<?php 
// Hàm set up khi khởi tạo.
function theme_setup() {
    // Đăng kí menu và hiện mục Menu trong dashboard Admin.
    register_nav_menu('topMenu', 'Menu chính');
    // Hỗ trợ tính năng ảnh đại diện cho bài viết.
    add_theme_support('post-thumbnails');
}

add_action('init', 'theme_setup');

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
            'theme_location' => 'topMenu',
            'container' => false,
            'menu_id' => 'top-menu',
            'menu_class' => '',
            'walker' => new Custom_Walker_Nav_Menu(), // Sử dụng Custom Walker
        ));
        ?>
    </div>
    <?php
}
?>
