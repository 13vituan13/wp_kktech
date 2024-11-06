<div class="wap_menu">
            <div class="menu_mobi_add"></div>
            <div class="menu_mobi flex">
                <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>
                <p class="menu_baophu"></p>
                <a class="phone_mb" title="0911.369.822 ( Mr.Luan )">0911.369.822 ( Mr.Luan )</a>
                <a href="" class="home_mobi"><i class="fa fa-home" aria-hidden="true"></i></a>
            </div>
            <div class="menu wap_1200 flex ja">
                <div class="gr_menu">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'topMenu',
                            'container' => false,
                            'menu_id' => 'top-menu',
                            'menu_class' => 'flex ja',
                        )
                    );
                ?>
                </div>
                <div class="search">
                    <form action="<?php bloginfo('url') ?>" method="GET" role="form">
                        <input type="text" name="s" class="keyword" id="keyword">
                        <button type="submit" class="fa fa-search btn_search" aria-hidden="true"></button >
                    </form>    
                </div>
            </div>
        </div>