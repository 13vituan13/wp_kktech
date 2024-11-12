<?php
/**
 * Template for displaying category posts
 * This template will be called by topics.php and events.php
 */

    function render_category_posts($post_type = '')
    {
        // Query posts
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => $post_type, // Lọc theo custom post type 'Topics'
            'posts_per_page' => 10,
            'paged' => $paged
        );
        $query = new WP_Query($args);
        ?>
        <!-- Posts Section -->
        <div class="p-stdfmt">
            <div class="p-section">
                <div class="p-section__inner">
                    <section>
                        <div class="p-topicsarchive">
                            <div class="p-section">
                                <div class="p-section__inner">
                                    <div class="p-topicsarchive__box">
                                        <ul>
                                            <?php if ($query->have_posts()):
                                                while ($query->have_posts()):
                                                    $query->the_post(); ?>
                                                    <li>
                                                        <a href="<?php the_permalink(); ?>">
                                                            <div class="p-topicsarchive__box_item">
                                                                <div class="p-topicsarchive__box_item--img">
                                                                    <i>
                                                                        <?php if (has_post_thumbnail()): ?>
                                                                            <?php the_post_thumbnail('full', array('decoding' => 'async', 'loading' => 'lazy')); ?>
                                                                        <?php else: ?>
                                                                            <img src="https://placehold.co/306x240" alt="" decoding="async"
                                                                                loading="lazy">
                                                                        <?php endif; ?>
                                                                    </i>
                                                                </div>
                                                                <div class="p-topicsarchive__box_item--txt">
                                                                    <div class="p-topicsarchive__box_item--txt-date">
                                                                        <p><?php echo get_the_date('Y-m-d'); ?></p>
                                                                    </div>
                                                                    <div class="p-topicsarchive__box_item--txt-tit">
                                                                        <p><?php the_title(); ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                <?php endwhile; endif;
                                            wp_reset_postdata(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <?php
    }
?>