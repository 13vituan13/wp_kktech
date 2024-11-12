<?php
/**
 * The template for displaying archive pages
 *
 * @package WordPress
 */
?>

<div class="p-newstop__box">
	<?php
	// Kiểm tra nếu đang ở trang chủ, WP_Query để lấy các bài viết
	if (is_front_page()) {
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 5,
			'orderby' => 'date',
			'order' => 'DESC'
		);
	} else {
		// Ở các trang khác (như trang lưu trữ)
		$args = array(
			'post_type' => 'post', // Lấy bài viết
			'posts_per_page' => 10, // Số lượng bài viết cần lấy
			'orderby' => 'date', // Sắp xếp theo ngày đăng
			'order' => 'DESC', // Thứ tự giảm dần
			'paged' => get_query_var('paged', 1) // Lấy số trang hiện tại
		);
	}


	$query = new WP_Query($args);

	// Kiểm tra xem có bài viết nào không
	if ($query->have_posts()):
		echo '<ul>';

		// Lặp qua các bài viết và hiển thị chúng
		while ($query->have_posts()):
			$query->the_post();
			// Lấy ngày đăng của bài viết
			$post_date = get_the_date('Y.m.d');

			// Lấy tiêu đề bài viết
			$post_title = get_the_title();

			// Lấy URL bài viết
			$post_url = get_permalink();

			// Lấy thể loại (category) của bài viết (nếu có)
			$categories = get_the_category();
			$category = !empty($categories) ? $categories[0]->name : 'お知らせ'; // Mặc định là "お知らせ" nếu không có thể loại
	
			echo '<li data-cate="' . esc_attr($category) . '">';
			echo '<a href="' . esc_url($post_url) . '">';
			echo '<div class="p-newstop__box_item">';
			echo '<div class="p-newstop__box_item--date"><p><strong>' . esc_html($post_date) . '</strong></p></div>';
			echo '<div class="p-newstop__box_item--txt"><p class="news_list_title">' . esc_html($post_title) . '</p></div>';
			echo '</div>';
			echo '</a>';
			echo '</li>';

		endwhile;

		echo '</ul>';

		if (!is_front_page()):
		
			// Hiển thị phân trang theo kiểu HTML của bạn
			$pagination = paginate_links(array(
				'prev_text' => '<span style="margin-left:2em; border:1px ridge #999; padding:5px;">＜＜前の10件</span>',
				'next_text' => '<span style="margin-left:2em; border:1px ridge #999; padding:5px;">次の10件＞＞</span>',
				'current' => max(1, get_query_var('paged')),
				'total' => $query->max_num_pages,
				'type' => 'array', // Trả về kết quả dưới dạng mảng để tùy chỉnh
			));


			if ($pagination):
				echo '<p style="width:70%; margin:50px auto; text-align:center;">';
				echo '<span style="word-spacing:1em; border:0px ridge #999; padding:5px;">';

				// Hiển thị các trang hiện tại và các trang liên kết
				foreach ($pagination as $page) {
					if (strpos($page, 'current') !== false) {
						// Trang hiện tại, thêm lớp CSS tô xanh đậm
						echo '<span class="link_page current_page" style="font-weight:bold; color:#0066ff;">' . $page . '</span>&nbsp;';
					} else {
						// Các trang khác
						echo '<span class="link_page">' . $page . '</span> ';
					}
				}

				echo '</span>';
				echo '</p>';
			endif;

		endif; // end if is_front_page()

	else:
		echo '<p>Không có bài viết nào.</p>';
	endif;

	// Reset query
	wp_reset_postdata();
	?>
</div>