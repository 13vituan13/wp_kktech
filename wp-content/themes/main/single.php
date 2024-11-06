<?php get_header() ?>
<!-- start main content -->
<div class="main_content clearfix ">
            <div class="tieude_link">
                <a class="text-1" href="">Trang chủ</a>
                <span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>
                <?php the_category('text-1'); ?>
                <span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>
                <a class="text-2"><?php the_title() ?></a>
            </div>
            <div class="box_container pd50">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="tieude_giua"><?php the_title() ?></div>          
                    <!-- <div class="meta">
                        <span>Ngày đăng: <?php echo get_the_date('d - m -Y'); ?></span>
                        <span>Tác giả: <?php echo the_author(); ?></span>
                        <span>Chuyên mục: <?php echo the_category(); ?></span>
                        <span>lượt xem: 123</span>
                    </div>   -->
                    <div class="content">
                        <?php the_content(); ?>
                        <div class="clearfix"></div>
                        <!-- <p class="ngay"><i class="fa fa-calendar" aria-hidden="true"></i> 30/08/2022 04:12 PM <span><i
                                class="fa fa-eye" aria-hidden="true"></i> 352</span></p> -->
                        <div class="addthis_toolbox addthis_default_style ">
                            <div class="zalo-share-button" data-href="" data-oaid="427688403758010973" data-layout="1"
                                data-color="blue" data-customize="false"></div>
                            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                            <a class="addthis_button_facebook_share" fb:share:layout="button_count"></a>
                            <a class="addthis_button_tweet"></a>
                            <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                            <a class="addthis_counter addthis_pill_style"></a>
                        </div>
                        <div class="fb-comments" data-href="https://ktdtienphat.vn//sua-dien-cong-nghiep-kcn-hai-son"
                            data-numposts="5" data-width="100%"></div>
                    </div>                 
                <?php endwhile;?>
            <?php endif; ?>
            </div>
        </div>
        <!-- end main content -->
<?php get_footer() ?>