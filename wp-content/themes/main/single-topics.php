<?php get_header(); ?>

<div class="l-main">
    <div class="p-main">
        <!-- Page Title Section -->
        <section>
            <div class="p-pagetitle">
                <div class="p-bg p-bg__grd p-bg__grd_maintheme">
                    <div class="p-section">
                        <div class="p-section__inner">
                            <div class="p-pagetitle__box">
                                <h1>
                                    <strong><?php the_title(); ?></strong>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Breadcrumb Section -->
        <section>
            <div class="p-breadcrumblist">
                <div class="p-bg p-bg__clr p-bg__clr_basetheme">
                    <div class="p-section">
                        <div class="p-section__inner">
                            <div class="p-breadcrumblist__box">
                                <ul>
                                    <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
                                    <li><a href="<?php echo home_url('/topics'); ?>">Topics</a></li>
                                    <li><strong><?php the_title(); ?></strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content Section -->
        <section>
            <div class="p-stdfmt">
                <div class="p-section">
                    <div class="p-section__inner">
                        <div class="p-stdfmt__tit">
                            <div class="p-tit p-tit__type02">
                                <h2><strong><?php the_title(); ?></strong></h2>
                            </div>
                        </div>
                        <div class="p-stdfmt__box">
                            <div class="p-table">
                                <div class="p-table__box is_column">
                                    <div style="text-align:left;">
                                        <p><?php the_content(); ?></p>
                                        <p style="margin-top:2rem;text-align:right;">
                                            <span class="day"><?php the_date(); ?> <?php the_time(); ?></span><br>
                                            カテゴリ: 
                                            <span class="category"><?php the_category(', '); ?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>
