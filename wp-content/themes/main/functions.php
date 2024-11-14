<?php
/**
 * Theme Functions
 * 
 * @package CustomTheme
 * @version 1.0.0
 */

// Ngăn chặn truy cập trực tiếp
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * ==================================================
 * 1. THEME SETUP & SUPPORTS
 * ==================================================
 */

/**
 * Thiết lập các tính năng cơ bản cho theme
 */
function theme_setup() {
    // Kích hoạt tính năng title-tag
    add_theme_support('title-tag');
    
    // Kích hoạt tính năng thumbnail cho post/page
    add_theme_support('post-thumbnails');

    // Kích hoạt tính năng HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    // Kích hoạt tính năng feed links
    add_theme_support('automatic-feed-links');
    
    // Kích hoạt tính năng custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true
    ));
    
    // Đăng ký menu
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'custom-theme'),
        'footer-menu' => __('Footer Menu', 'custom-theme')
    ));

}
add_action('after_setup_theme', 'theme_setup');

/**
 * ==================================================
 * 2. CUSTOM POST TYPES
 * ==================================================
 */

/**
 * Đăng ký Custom Post Type 'Topics'
 */
function custom_post_type() {
    $labels = array(
        'name'               => _x('Topics', 'post type general name', 'custom-theme'),
        'singular_name'      => _x('Topic', 'post type singular name', 'custom-theme'),
        'menu_name'          => _x('Topics', 'admin menu', 'custom-theme'),
        'name_admin_bar'     => _x('Topic', 'add new on admin bar', 'custom-theme'),
        'add_new'           => _x('Add New', 'topic', 'custom-theme'),
        'add_new_item'      => __('Add New Topic', 'custom-theme'),
        'new_item'          => __('New Topic', 'custom-theme'),
        'edit_item'         => __('Edit Topic', 'custom-theme'),
        'view_item'         => __('View Topic', 'custom-theme'),
        'all_items'         => __('All Topics', 'custom-theme'),
        'search_items'      => __('Search Topics', 'custom-theme'),
        'not_found'         => __('No topics found.', 'custom-theme'),
        'not_found_in_trash'=> __('No topics found in Trash.', 'custom-theme')
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true, // Kích hoạt Gutenberg editor
        'query_var'          => true,
        'rewrite'            => array('slug' => 'topics', 'with_front' => true),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt',
            'comments',
            'revisions'
        ),
        'menu_icon'          => 'dashicons-megaphone'
    );

    register_post_type('topics', $args);
}
add_action('init', 'custom_post_type', 0);

/**
 * Xử lý rewrite rules khi active theme
 */
function my_rewrite_flush() {
    custom_post_type();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'my_rewrite_flush');

/**
 * ==================================================
 * 3. CUSTOM MENU WALKER
 * ==================================================
 */

/**
 * Custom Walker Class cho Menu
 */
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    /**
     * Bắt đầu level menu
     */
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        if ($depth === 0) {
            $output .= "\n$indent<dd><ul class='sub-menu'>\n";
        } else {
            $output .= "\n$indent<ul class='sub-menu'>\n";
        }
    }

    /**
     * Kết thúc level menu
     */
    function end_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        if ($depth === 0) {
            $output .= "$indent</ul></dd>\n";
        } else {
            $output .= "$indent</ul>\n";
        }
    }

    /**
     * Bắt đầu mỗi menu item
     */
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $data_attribute = isset($item->attr_title) && !empty($item->attr_title) 
            ? ' data-gnavi="' . esc_attr($item->attr_title) . '"' 
            : '';

        if ($depth === 0 && in_array('menu-item-has-children', $item->classes)) {
            $output .= $indent . '<li' . $data_attribute . ' class="menu-item-has-children">';
            $output .= '<dl><dt><span><strong>' . esc_html($item->title) . '</strong></span></dt>';
        } else {
            $classes = empty($item->classes) ? array() : (array) $item->classes;
            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
            $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
            
            $output .= $indent . '<li' . $data_attribute . $class_names . '>';
            $output .= '<a href="' . esc_url($item->url) . '"><strong>' . 
                      esc_html($item->title) . '</strong></a>';
        }
    }

    /**
     * Kết thúc mỗi menu item
     */
    function end_el(&$output, $item, $depth = 0, $args = array()) {
        if ($depth === 0 && in_array('menu-item-has-children', $item->classes)) {
            $output .= "</dl></li>\n";
        } else {
            $output .= "</li>\n";
        }
    }
}

/**
 * Hàm hiển thị custom menu
 */
function display_custom_menu() {
    ?>
    <div class="p-header__gnavi_menu">
        <p class="menu-toggle">
            <span>
                <b>
                    <i></i>
                    <i></i>
                    <i></i>
                </b>
                <em>
                    <strong><?php esc_html_e('MENU', 'custom-theme'); ?></strong>
                    <strong><?php esc_html_e('CLOSE', 'custom-theme'); ?></strong>
                </em>
            </span>
        </p>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container'      => false,
            'menu_id'       => 'main-menu',
            'menu_class'    => 'main-menu-wrapper',
            'walker'        => new Custom_Walker_Nav_Menu(),
            'fallback_cb'   => '__return_false'
        ));
        ?>
    </div>
    <?php
}

/**
 * ==================================================
 * 4. PERFORMANCE OPTIMIZATIONS
 * ==================================================
 */

/**
 * Tối ưu hóa WordPress head
 */
function optimize_wp_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
}
add_action('init', 'optimize_wp_head');

/**
 * ==================================================
 * 5. DEVELOPMENT & DEBUGGING
 * ==================================================
 */

/**
 * Debug template hierarchy
 * Chỉ hoạt động khi WP_DEBUG = true
 */
if (defined('WP_DEBUG') && WP_DEBUG) {
    error_log('Template Being Used: ' . $template);
    add_filter('template_include', 'var_dump_template_hierarchy', 999);
}

function var_dump_template_hierarchy($template) {
    global $wp_query;
    
    error_log('==== Debug Template Selection ====');
    error_log('Is Single: ' . ($wp_query->is_single ? 'true' : 'false'));
    error_log('Current Post Type: ' . get_post_type());
    error_log('Template Being Used: ' . $template);
    error_log('WP_Query Post Type: ' . $wp_query->query_vars['post_type']);
    error_log('Is Singular: ' . ($wp_query->is_singular ? 'true' : 'false'));
    
    if (is_singular('topics')) {
        $templates = array(
            "single-topics-{$wp_query->post->post_name}.php",
            "single-topics.php",
            "single.php",
            "singular.php",
            "index.php"
        );
        
        error_log('Template Hierarchy for Topics:');
        foreach ($templates as $template_file) {
            $exists = file_exists(get_template_directory() . '/' . $template_file);
            error_log("$template_file - " . ($exists ? 'exists' : 'not found'));
        }
    }
    
    return $template;
}

/**
 * ==================================================
 * 6. ADDITIONAL FEATURES
 * ==================================================
 */

/**
 * Thêm hỗ trợ custom CSS trong admin
 */
function theme_custom_styles() {
    add_editor_style('assets/css/editor-style.css');
}
add_action('admin_init', 'theme_custom_styles');

/**
 * Tùy chỉnh độ dài excerpt
 */
function custom_excerpt_length($length) {
    return 20; // Số từ trong excerpt
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

/**
 * Tùy chỉnh more link trong excerpt
 */
function custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');


/**
 * ==================================================
 * 7. SEND EMAIL
 * ==================================================
 */
add_action('phpmailer_init', 'send_smtp_email');

function send_smtp_email( $phpmailer ) {
    global $wpdb;
    if ( ! isset( $wpdb ) ) {
        echo "Error: \$wpdb not available.";
        return;
    }

    $config_email = $wpdb->get_row("SELECT * FROM wp_mail_config WHERE id = 1");

    if ($config_email) {
        $sender_email = $config_email->email;
        $sender_pass = $config_email->password;

        $phpmailer->isSMTP(); // SMTP protoco to send email.

        $phpmailer->Host       = $config_email->host; // HOST of the SMTP server, here is Gmail [SMTP, POP3, IMAP, SMTPS, POP3S/IMAPS].

        $phpmailer->SMTPAuth   = true; // Turn on SMTP authentication mode.

        $phpmailer->Username   = $sender_email; // Email Sender, here is Admin email.

        $phpmailer->Password   = $sender_pass; // Password-App of Email.

        $phpmailer->SMTPSecure = $config_email->protocol; // Protoco SSL(Secure Sockets Layer, Old, 465, non-security) or TLS(Transport Layer Security, New, 587,security)  to secure the connection.

        $phpmailer->From       = $sender_email;  // Setup Email from email send.

        $phpmailer->FromName   = $config_email->name_from; // Setup Name of sender email.

        $phpmailer->Port       = $config_email->port; // Port gateway SMTP mail server.

        // Add an email address to receive feedback (Reply-To)
        $phpmailer->addReplyTo( $sender_email, 'Feedback' );

    } else {
        echo "Error: No data found in the database.";
    }
}

// set up content mail to HTML
add_filter( 'wp_mail_content_type', 'set_my_mail_content_type' );
function set_my_mail_content_type() {
    return "text/html";
}

function send_contact_email() {

    // Check nonce CSRF before processing
    if (!isset($_POST['contact_nonce']) || 
        !wp_verify_nonce($_POST['contact_nonce'], 'contact_form_nonce')) {
        wp_send_json_error('Security check failed');
        return;
    }

    // Check and get form data
    if (
        isset($_POST['user_name']) && 
        isset($_POST['user_email']) && 
        isset($_POST['user_tel']) && 
        isset($_POST['mail_body'])
    ) {
        // use `sanitize` function of Wordpress to clean data input, ex: clear HTML tags, normalize special characters, format email... 
        $contact_data = array(
            'user_name'     => sanitize_text_field($_POST['user_name']),
            'user_email'    => sanitize_email($_POST['user_email']),
            'user_tel'      => sanitize_text_field($_POST['user_tel']),
            'mail_body'     => sanitize_textarea_field($_POST['mail_body'])
        );

        // Load email template
        ob_start(); // use ob_start() to get Content is saved to buffer; if not use ob_start(); The content next code will be printed out , $message = ???
        include get_template_directory() . '/email/contact_template.php';
        $message = ob_get_clean(); // Get content from buffer

        $subject = "【らぽくらぶ】ホームページからのお問い合わせ";

        global $wpdb;
        if (!isset($wpdb)) {
            wp_send_json_error('Database connection error');
            return;
        }

        // Get recipient email from DB
        // $config_emails = $wpdb->get_results(
        //     "SELECT email FROM wp_mail_config WHERE id IN (2, 3)"
        // );
        
        // $recipient_emails = array();
        // foreach ($config_emails as $config_email) {
        //     $recipient_emails[] = $config_email->email;
        // }
        // $recipient_email = implode(',', $recipient_emails);

        $headers = array('Content-Type: text/html; charset=UTF-8');

        // Send for admin
        // $sent = wp_mail($recipient_email, $subject, $message, $headers);

        // Send for user
        $subject_user = "【らぽくらぶ】ホームページからのお問い合わせ";
        $sent_user = wp_mail($contact_data['user_email'], $subject_user, $message, $headers);

        if ($sent_user) {
            wp_send_json_success('Email sent successfully');
        } else {
            wp_send_json_error('Failed to send email');
        }

    } else {
        wp_send_json_error('Missing required fields');
    }

    wp_die();
}

// For user has been login
add_action('wp_ajax_send_contact_email', 'send_contact_email');

// For user has not been login
add_action('wp_ajax_nopriv_send_contact_email', 'send_contact_email');