<?php /* Template Name: News */ ?>
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

                                    <strong>NEWS</strong>
                                    <em>NEWS</em>



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
                                    <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                                    <li><a href="<?php echo home_url('news'); ?>">ニュース</a></li>
                                    <li><strong></strong></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--△△△ section △△△-->

        <!--▽▽▽ section ▽▽▽-->
        <section>

            <div class="p-stdfmt">
                <div class="p-section">
                    <div class="p-section__inner">
                        <div style="text-align:left;">
                            <div class="main-contentsarea01">
                                <h3>お知らせ一覧</h3>
                            </div>
                            <?php get_template_part('archive'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--△△△ section △△△-->
    </div>
    <!--▲ p-main ▲-->
</div>
<!--▲▲ l-main ▲▲-->
<?php get_footer() ?>