<?php /* Template Name: Topics */ ?>
<?php get_header(); ?>
<!--▼▼ l-main ▼▼-->
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
                                    <em>TOPICS</em>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--△△△ section △△△-->

        <!--▽▽▽ section ▽▽▽-->
        <section>
            <div class="p-breadcrumblist">
                <div class="p-bg p-bg__clr p-bg__clr_basetheme">
                    <div class="p-section">
                        <div class="p-section__inner">

                            <div class="p-breadcrumblist__box">
                                <ul>
                                    <li><a href="/">ホーム</a></li>

                                    <li><a href="https://www.mirait-one-systems.co.jp/topics/">トピックス</a></li>

                                    <li><strong>トピックス</strong></li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--△△△ section △△△-->

        <!-- Archive section -->
        <?php
            // Include the category template
            require_once get_template_directory() . '/category.php';

            // Render the category posts with topics category
            render_category_posts('topics');
        ?>
    </div>
    <!--▲ p-main ▲-->
</div>
<!--▲▲ l-main ▲▲-->
<?php get_footer() ?>