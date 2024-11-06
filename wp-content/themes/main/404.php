<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
<div class="main_content clearfix" style="text-align: center;">
	<header class="page-header alignwide" style="margin-top:50px;">
		<h1 class="page-title"><?php esc_html_e( 'Không Tìm Thấy Nội Dung', 'electricTheme' ); ?></h1>
	</header><!-- .page-header -->

	<div class="error-404 not-found default-max-width"  style="margin-bottom:50px;">
		<div class="page-content">
			<p><?php esc_html_e( 'Có vẻ như cái bạn muốn không được tìm thấy ở đây. Có thể thử tìm kiếm khác?', 'electricTheme' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->
</div>
<?php
get_footer();
