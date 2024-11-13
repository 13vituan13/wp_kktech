<?php get_header(); ?>

<div class="l-main">
    <!--▼ p-main ▼-->
    <div class="p-main">

        <!--▽▽▽ section ▽▽▽-->
        <section>
            <div class="p-pagetitle">
                <div class="p-bg p-bg__grd p-bg__grd_maintheme">
                    <div class="p-section">
                        <div class="p-section__inner">
                            <div class="p-pagetitle__box">
                                <h1>
                                    <strong>トピックス</strong>
                                    <em>トピックス</em>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--△△△ section △△△-->

        <!--▽▽▽ Breadcrumb section ▽▽▽-->
        <section>
            <div class="p-breadcrumblist">
                <div class="p-bg p-bg__clr p-bg__clr_basetheme">
                    <div class="p-section">
                        <div class="p-section__inner">
                            <div class="p-breadcrumblist__box">
                                <ul>
                                    <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                                    <li><a href="<?php echo home_url('topics'); ?>">トピックス</a></li>
                                    <li><strong><?php the_title(); ?></strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--△△△ Breadcrumb section △△△-->

        <!--▽▽▽ Content section ▽▽▽-->
        <section>
        <div class="p-stdfmt">
            <div class="p-section">
                <div class="p-section__inner">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <div class="main-contentsarea01">
                                <div><?php the_content(); ?></div>
                                
                                <p style="text-align: right;">
                                    <?php echo get_the_modified_date('Y-m-d'); ?><br>
                                    <?php 
                                        $next_post = get_posts( array(
                                            'post_type' => 'topics', // Chỉ lấy bài viết từ custom post type 'topics'
                                            'posts_per_page' => 1, // Chỉ lấy 1 bài viết tiếp theo
                                            'post_status' => 'publish', // Đảm bảo chỉ lấy bài viết đã được công bố
                                            'orderby' => 'date', // Sắp xếp theo ngày đăng
                                            'order' => 'ASC', // Thứ tự tăng dần
                                            'exclude' => get_the_ID(), // Loại trừ bài viết hiện tại
                                        ) );
                                        
                                        if ( ! empty( $next_post ) ) {
                                            $next_post_title = get_the_title( $next_post[0]->ID );
                                            echo '<a href="' . get_permalink( $next_post[0]->ID ) . '">＞＞ ' . $next_post_title . '情報はこちら</a>';
                                        }
                                    ?>
                                </p>
                            </div>
                    <?php
                        endwhile;
                    else :
                        echo '<p>記事は見つかりませんでした。</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
        </section>
        <!--△△△ Content section △△△-->

    </div>
    <!--▲ p-main ▲-->
</div>

<?php get_footer(); ?>
