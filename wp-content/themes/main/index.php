<?php get_header() ?>

<!--▼▼ l-main ▼▼-->
<div class="l-main">
  <!--▼ p-main ▼-->
  <div class="p-main">

    <!--▽▽▽ section ▽▽▽-->
    <section>
      <div class="p-hero">
        <div class="p-bg p-bg__clr p-bg__clr_wht">
          <div class="p-section">
            <div class="p-section__inner">
              <div class="p-hero__box">
                <div class="p-hero__box_slider">
                  <div class="js_hero">
                    <ul>
                      <li>
                        <span>
                          <i class="sw_pc"><img src="https://placehold.co/1200x550" alt=""></i>
                          <i class="sw_sp"><img src="https://placehold.co/1200x550" alt=""></i>
                        </span>
                      </li>
                      <li>
                        <span>
                          <i class="sw_pc"><img src="https://placehold.co/1200x550" alt=""></i>
                          <i class="sw_sp"><img src="https://placehold.co/1200x550" alt=""></i>
                        </span>
                      </li>
                      <li>
                        <span>
                          <i class="sw_pc"><img src="https://placehold.co/1200x550" alt=""></i>
                          <i class="sw_sp"><img src="https://placehold.co/1200x550" alt=""></i>
                        </span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--△△△ section △△△-->

    <!--▽▽▽ section ▽▽▽-->
    <section>
      <div class="p-topicstop js_fade js_fade_btm">
        <div class="p-bg p-bg__clr p-bg__clr_wht">
          <div class="p-section">
            <div class="p-section__inner">
              <div class="p-topicstop__tit">
                <div class="p-tit p-tit__type02">
                  <h2>
                    <strong>TOPICS</strong>
                    <small>トピックス</small>
                  </h2>
                </div>
              </div>
              <div class="p-topicstop__bgi">
                <p>
                  <em>TOPICS</em>
                </p>
              </div>
              <div class="p-topicstop__box">
                <div class="js_topicstop">
                  <ul>
                    <?php
                      // Tạo một truy vấn WP_Query để lấy các bài viết từ custom post type 'topics'
                      $args = array(
                          'post_type' => 'topics', // Custom post type 'topics'
                          'posts_per_page' => 6, // Số lượng bài viết muốn hiển thị (có thể thay đổi)
                          'post_status' => 'publish', // Chỉ lấy bài viết đã được công bố
                          'orderby' => 'date', // Sắp xếp theo ngày đăng
                          'order' => 'DESC' // Thứ tự giảm dần
                      );

                      $query = new WP_Query($args);

                      // Kiểm tra nếu có bài viết và bắt đầu vòng lặp
                      if ($query->have_posts()) :
                          while ($query->have_posts()) : $query->the_post();
                      ?>
                              <li>
                                  <a href="<?php the_permalink(); ?>">
                                      <div class="p-topicstop__box_item">
                                          <div class="p-topicstop__box_item--img">
                                              <!-- Ở đây bạn có thể thay thế hình ảnh bằng cách sử dụng hình ảnh đại diện -->
                                              <i><img src="https://placehold.co/280x210" alt="<?php the_title(); ?>"></i>
                                          </div>
                                          <div class="p-topicstop__box_item--txt">
                                              <div class="p-topicstop__box_item--txt-date">
                                                  <!-- Hiển thị ngày bài viết -->
                                                  <p><?php echo get_the_date('Y-m-d'); ?></p>
                                              </div>
                                              <div class="p-topicstop__box_item--txt-tit">
                                                  <!-- Hiển thị tiêu đề bài viết -->
                                                  <p><?php the_title(); ?></p>
                                              </div>
                                          </div>
                                      </div>
                                  </a>
                              </li>
                      <?php
                          endwhile;
                          wp_reset_postdata(); // Đặt lại dữ liệu sau khi vòng lặp kết thúc
                      else :
                          echo '<p>Không có bài viết nào.</p>';
                      endif;
                    ?>
                  </ul>
                </div>
              </div>
              <div class="p-topicstop__btn">
                <div class="p-stdbtn p-stdbtn__clr p-stdbtn__clr_wht">
                  <div class="p-stdbtn__btn">
                    <ul>
                      <li><a href="<?php echo home_url(path: 'topics'); ?>"><strong>一覧をみる</strong></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--△△△ section △△△-->

    <!--▽▽▽ section ▽▽▽-->
    <section>
      <div class="p-topicstop is_reverse js_fade js_fade_btm">
        <div class="p-bg p-bg__clr p-bg__clr_wht">
          <div class="p-section">
            <div class="p-section__inner">
              <div class="p-topicstop__tit">
                <div class="p-tit p-tit__type02">
                  <h2>
                    <strong>DX PRODUCT</strong>
                    <small>DX製品ご紹介</small>
                  </h2>
                </div>
              </div>
              <div class="p-topicstop__bgi">
                <p>
                  <em>DX PRODUCT</em>
                </p>
              </div>
              <div class="p-topicstop__box">
                <div class="js_topicstop">
                  <ul>
                    <!--右端から始まります。0個目Start-->
                    <li>
                      <a href="/solution/solution-conrepo_education.html">
                        <div class="p-topicstop__box_item">
                          <div class="p-topicstop__box_item--img">
                            <i><img src="https://placehold.co/280x210" alt=""></i>
                          </div>
                          <div class="p-topicstop__box_item--txt">
                            <div class="p-topicstop__box_item--txt-tit">
                              <p>クラウド型 教育現場向け健康管理サービス<br><br></p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>

                    <!--右端から始まります。1個目Start-->
                    <li>
                      <a href="/solution/miraiconnect.html">
                        <div class="p-topicstop__box_item">
                          <div class="p-topicstop__box_item--img">
                            <i><img src="https://placehold.co/280x210" alt=""></i>
                          </div>
                          <div class="p-topicstop__box_item--txt">
                            <div class="p-topicstop__box_item--txt-tit">
                              <p>ウェアラブルデバイスを利用した高セキュリティリアルタイム遠隔作業支援サービス</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>

                    <!--右端から始まります。2個目Start-->
                    <li>
                      <a href="/solution/magicconnect.html">
                        <div class="p-topicstop__box_item">
                          <div class="p-topicstop__box_item--img">
                            <i><img src="https://placehold.co/280x210" alt=""></i>
                          </div>
                          <div class="p-topicstop__box_item--txt">
                            <div class="p-topicstop__box_item--txt-tit">
                              <p>高いセキュリティーレベルを保ち、簡単に導入できる、モバイルアクセスサービス。<br>
                                インターネットに接続されたパソコンにUSBキーを挿入するだけで自宅や外出先が仕事場に。</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!--右端から始まります。3個目Start-->
                    <li>
                      <a href="/solution/amivoice.html">
                        <div class="p-topicstop__box_item">
                          <div class="p-topicstop__box_item--img">
                            <i><img src="https://placehold.co/280x210" alt=""></i>
                          </div>
                          <div class="p-topicstop__box_item--txt">
                            <div class="p-topicstop__box_item--txt-tit">
                              <p>点検業務、検査業務、日報作成等に音声入力機能を追加できます</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!--右端から始まります。4個目Start-->
                    <li>
                      <a href="/winactor/index.html">
                        <div class="p-topicstop__box_item">
                          <div class="p-topicstop__box_item--img">
                            <i><img src="https://placehold.co/280x210" alt=""></i>
                          </div>
                          <div class="p-topicstop__box_item--txt">
                            <div class="p-topicstop__box_item--txt-tit">
                              <p>国内シェアNo1 RPA<br>導入支援、技術支援もご提供します。</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!--右端から始まります。5個目Start-->
                    <li>
                      <a href="/solution/smartmat.html">
                        <div class="p-topicstop__box_item">
                          <div class="p-topicstop__box_item--img">
                            <i><img src="https://placehold.co/280x210" alt=""></i>
                          </div>
                          <div class="p-topicstop__box_item--txt">
                            <div class="p-topicstop__box_item--txt-tit">
                              <p>スマートマットで貴社のDX化に貢献します。<br>　</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>

                    <!--右端から始まります。6個目Start-->
                    <li>
                      <a href="https://www.mirait-one.com/solution/lp/castingtable/">
                        <div class="p-topicstop__box_item">
                          <div class="p-topicstop__box_item--img">
                            <i><img src="https://placehold.co/280x210" alt=""></i>
                          </div>
                          <div class="p-topicstop__box_item--txt">
                            <div class="p-topicstop__box_item--txt-tit">
                              <p>コンタクトセンターのマネージメントを最適化するWFMツール<br>　</p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!--右端から始まります。7個目Start-->
                    <li>
                      <a href="/solution/solution-conrepo.html">
                        <div class="p-topicstop__box_item">
                          <div class="p-topicstop__box_item--img">
                            <i><img src="https://placehold.co/280x210" alt=""></i>
                          </div>
                          <div class="p-topicstop__box_item--txt">
                            <div class="p-topicstop__box_item--txt-tit">
                              <p>企業で働くすべての人の健康管理を支える「健康状態把握」ツール

                              </p>
                            </div>
                          </div>
                        </div>
                      </a>
                    </li>

                    <!---->

                  </ul>
                </div>
              </div>
              <div class="p-topicstop__btn">
                <div class="p-stdbtn p-stdbtn__clr p-stdbtn__clr_wht">
                  <div class="p-stdbtn__btn">
                    <ul>
                      <li><a href="/solution/dx-product.html"><strong>一覧をみる</strong></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--△△△ section △△△-->

    <!--▽▽▽ section ▽▽▽-->
    <section>
      <div class="p-newstop js_fade js_fade_btm">
        <div class="p-bg p-bg__clr p-bg__clr_wht">
          <div class="p-section">
            <div class="p-section__inner">
              <div class="p-newstop__tit">
                <div class="p-tit p-tit__type02">
                  <h2>
                    <strong>NEWS</strong>
                    <small>ニュース</small>
                  </h2>
                </div>
              </div>
              <div class="p-newstop__bgi">
                <p>
                  <em>NEWS</em>
                </p>
              </div>

              <?php get_template_part('archive'); ?>

              <div class="p-newstop__btn">
                <div class="p-stdbtn p-stdbtn__clr p-stdbtn__clr_maintheme">
                  <div class="p-stdbtn__btn">
                    <ul>
                      <li><a href="<?php echo home_url('news'); ?>"><strong>一覧をみる</strong></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--△△△ section △△△-->

    <!--▽▽▽ section ▽▽▽-->
    <section>
      <div class="p-servicetop js_fade">
        <div class="p-bg p-bg__clr p-bg__clr_wht">
          <div class="p-section">
            <div class="p-section__inner">
              <div class="p-servicetop__tit">
                <div class="p-tit p-tit__type02">
                  <h2>
                    <strong>SOLUTION</strong>
                    <small>ソリューション</small>
                  </h2>
                </div>
              </div>
              <div class="p-servicetop__bgi js_fade js_fade_rgt">
                <p>
                  <em>SOLUTION</em>
                </p>
              </div>
              <div class="p-servicetop__box">
                <!--▽▽  ▽▽-->
                <div class="p-servicetop__box_item">
                  <div class="p-servicetop__box_item--img">
                    <p class="js_fade js_fade_lft">
                      <i><img src="https://placehold.co/570x340" alt="システム開発・運用"></i>
                    </p>
                  </div>
                  <div class="p-servicetop__box_item--txt">
                    <div class="p-servicetop__box_item--txt-tit">
                      <p class="js_fade js_fade_lft">
                        <strong>システム開発・運用</strong>
                        <small>フレームワークや自動化ツールを<br>用いた業務システム開発</small>
                      </p>
                    </div>
                    <div class="p-servicetop__box_item--txt-link js_fade">
                      <div
                        class="p-textlink p-textlink__arrow p-textlink__arrow_right p-textlink__clm p-textlink__clm_sep02">
                        <ul class="js_fade js_fade_lft">
                          <li><object><a
                                href="/package/rakuraku-fw2/index.html"><strong>楽々Framework3</strong></a></object>
                          </li>
                          <li><object><a
                                href="/package/rakuraku-wf2/index.html"><strong>楽々WorkflowII</strong></a></object>
                          </li>
                          <li><object><a
                                href="/package/quick-solution/index.html"><strong>QuickSolution</strong></a></object>
                          </li>
                          <li><object><a href="/package/document-plus/index.html"><strong>楽々Document
                                  Plus</strong></a></object></li>
                          <li><object><a
                                href="/package/super-stream/index.html"><strong>SuperStream</strong></a></object>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!--△△  △△-->
                <!--▽▽  ▽▽-->
                <div class="p-servicetop__box_item is_reverse">
                  <div class="p-servicetop__box_item--img">
                    <p class="js_fade js_fade_rgt js_fade_delay">
                      <i><img src="https://placehold.co/570x340" alt="クラウド構築・運用"></i>
                    </p>
                  </div>
                  <div class="p-servicetop__box_item--txt">
                    <div class="p-servicetop__box_item--txt-tit">
                      <p class="js_fade js_fade_rgt">
                        <strong>クラウド構築・運用</strong>
                        <small>堅牢かつ柔軟なIT基盤をトータル支援</small>
                      </p>
                    </div>
                    <div class="p-servicetop__box_item--txt-link js_fade">
                      <div
                        class="p-textlink p-textlink__arrow p-textlink__arrow_right p-textlink__clm p-textlink__clm_sep02">
                        <ul class="js_fade js_fade_rgt">
                          <li><object><a href="/ibm/softlayer/index.html"><strong>MIRACLE</strong></a></object></li>
                          <li><object><a href="/ibm/softlayer/index.html"><strong>IBM Cloud</strong></a></object>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!--△△  △△-->
                <!--▽▽  ▽▽-->
                <div class="p-servicetop__box_item">
                  <div class="p-servicetop__box_item--img">
                    <p class="js_fade js_fade_lft">
                      <i><img src="https://placehold.co/570x340" alt="スマートデバイスソリューション"></i>
                    </p>
                  </div>
                  <div class="p-servicetop__box_item--txt">
                    <div class="p-servicetop__box_item--txt-tit">
                      <p class="js_fade js_fade_lft">
                        <strong>スマートデバイス<br>ソリューション</strong>
                        <small>オフィスの外の業務もIT化、効率化</small>
                      </p>
                    </div>
                    <div class="p-servicetop__box_item--txt-link js_fade">
                      <div class="p-textlink p-textlink__arrow p-textlink__arrow_right">
                        <ul class="js_fade js_fade_lft">
                          <!--<li><object><a href="/solution/imagegate/index.html"><strong>ImageGate&reg;<br class="sw_sp">（スマートデバイス向け）</strong></a></object></li>-->
                          <li><object><a href="/solution/05/index.html"><strong>e-店舗</strong></a></object></li>
                          <li><object><a href="/winactor/index.html"><strong>WinActor（ウィンアクター）</strong></a></object>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!--△△  △△-->
                <!--▽▽  ▽▽-->
                <div class="p-servicetop__box_item is_reverse">
                  <div class="p-servicetop__box_item--img">
                    <p class="js_fade js_fade_rgt">
                      <i><img src="https://placehold.co/570x340" alt="RPAソリューション"></i>
                    </p>
                  </div>
                  <div class="p-servicetop__box_item--txt">
                    <div class="p-servicetop__box_item--txt-tit">
                      <p class="js_fade js_fade_rgt">
                        <strong>RPAソリューション</strong>
                        <small>定型業務をロボットで自動化。<br>働き方改革の実現に</small>
                      </p>
                    </div>
                    <div class="p-servicetop__box_item--txt-link js_fade">
                      <div class="p-textlink p-textlink__arrow p-textlink__arrow_right">
                        <ul class="js_fade js_fade_rgt">
                          <li><object><a href="/winactor/index.html"><strong>WinActor（ウィンアクター）</strong></a></object>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!--△△  △△-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--△△△ section △△△-->

    <!--▽▽▽ section ▽▽▽-->
    <section>
      <div class="p-companytop js_fade js_fade_btm">
        <div class="p-bg p-bg__clr p-bg__clr_wht">
          <div class="p-section">
            <div class="p-section__inner">
              <div class="p-companytop__tit">
                <div class="p-tit p-tit__type02">
                  <h2>
                    <strong>COMPANY</strong>
                    <small>会社情報</small>
                  </h2>
                </div>
              </div>
              <div class="p-companytop__bgi">
                <p>
                  <em>COMPANY</em>
                </p>
              </div>
              <div class="p-companytop__box">
                <!--▽▽  ▽▽-->
                <div class="p-companytop__box_item">
                  <div class="p-companytop__box_item--img">
                    <p>
                      <i><img src="https://placehold.co/682x500" alt=""></i>
                    </p>
                  </div>
                  <div class="p-companytop__box_item--txt">
                    <div class="p-companytop__box_item--txt-tit">
                      <p>
                        <strong>終わらない挑戦の、<br class="sw_sp">始まり。</strong>
                      </p>
                    </div>
                    <div class="p-companytop__box_item--txt-txt">
                      <p>ミライト・ワン・システムズは、お客さまの未来に向けた事業成長の推進力でありたい。<br>スタッフ一人ひとりがこの思いを心に深く刻み込み、ミライトグループで永年培った業務知識とI C
                        T先端技術を活用しながら、お客さまと共に成長していくことをめざします。<br>急速に変化する市場環境に適合し、豊かな未来への社会基盤の創造に向けて、私たちの終わらない挑戦がいま、始まります。
                      </p>
                    </div>
                    <div class="p-companytop__box_item--txt-btn">
                      <div class="p-stdbtn p-stdbtn__clr p-stdbtn__clr_maintheme">
                        <div class="p-stdbtn__btn">
                          <ul>
                            <li><a href="/company/index.html"><strong>詳しくみる</strong></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--△△  △△-->
              </div>
              <div class="p-companytop__cnt">
                <ul>
                  <!--<li>
                        <a href="#">
                          <div class="p-companytop__cnt_item">
                            <div class="p-companytop__cnt_item--img">
                              <p>
                                <i><img src="/img/index/companytop_cnt01_item01_img01_img01.png" alt="会社案内を見る"></i>
                              </p>
                            </div>
                            <div class="p-companytop__cnt_item--txt">
                              <p>
                                <strong>会社案内を見る</strong>
                              </p>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="p-companytop__cnt_item">
                            <div class="p-companytop__cnt_item--img">
                              <p>
                                <i><img src="/img/index/companytop_cnt01_item02_img01_img01.png" alt="valuebookを見る"></i>
                              </p>
                            </div>
                            <div class="p-companytop__cnt_item--txt">
                              <p>
                                <strong>valuebookを見る</strong>
                              </p>
                            </div>
                          </div>
                        </a>
                      </li>-->
                  <li>
                    <!--<a class="js_modaal js_modaal_video" href="https://www.youtube.com/embed/dEgVvh0B6is">-->
                    <a class="js_modaal js_modaal_video" href="https://www.youtube.com/embed/YsywWr9de34">
                      <div class="p-companytop__cnt_item">
                        <div class="p-companytop__cnt_item--img">
                          <p>
                            <i><img src="https://placehold.co/620x460" alt="PRVを見る"></i>
                          </p>
                        </div>
                        <div class="p-companytop__cnt_item--txt">
                          <p>
                            <strong>PRVを見る</strong>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
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
      <div class="p-grouplist js_fade js_fade_btm">
        <div class="p-bg p-bg__clr p-bg__clr_wht">
          <div class="p-section">
            <div class="p-section__inner">
              <div class="p-grouplist__tit">
                <div class="p-tit p-tit__type02">
                  <h2>
                    <strong>MIRAIT ONE SYSTEMS Group</strong>
                    <small>ミライト・ワン・システムズ グループ会社</small>
                  </h2>
                </div>
              </div>
              <div class="p-grouplist__box">
                <ul>
                  <li>
                    <a href="https://www.trustsystem.co.jp/" target="_blank">
                      <div class="p-grouplist__box_item">
                        <i><img src="https://placehold.co/225x109" alt="株式会社トラストシステム"></i>
                        <small>株式会社トラストシステム</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="http://www.actis.co.jp/" target="_blank">
                      <div class="p-grouplist__box_item">
                        <i><img src="https://placehold.co/225x109" alt="株式会社アクティス"></i>
                        <small>株式会社アクティス</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.timetec.co.jp/" target="_blank">
                      <div class="p-grouplist__box_item">
                        <i><img src="https://placehold.co/225x109" alt="タイムテック株式会社"></i>
                        <small>タイムテック株式会社</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="http://www.creist.co.jp/" target="_blank">
                      <div class="p-grouplist__box_item">
                        <i><img src="https://placehold.co/225x109" alt="株式会社CREiST"></i>
                        <small>株式会社CREiST</small>
                      </div>
                    </a>
                  </li>
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
      <div class="p-grouplist js_fade js_fade_btm">
        <div class="p-bg p-bg__clr p-bg__clr_wht">
          <div class="p-section">
            <div class="p-section__inner">
              <div class="p-grouplist__tit">
                <div class="p-tit p-tit__type02">
                  <h2>
                    <strong>MIRAIT ONE Group</strong>
                    <small>ミライト・ワン グループ</small>
                  </h2>
                </div>
              </div>
              <div class="p-grouplist__box">
                <ul>
                  <li>
                    <a href="https://www.mirait-one.com/" target="_blank">
                      <div class="p-grouplist__box_item">
                        <i><img src="https://placehold.co/225x43" alt="ミライト・ワン"></i>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.lantro.com/" target="_blank">
                      <div class="p-grouplist__box_item">
                        <i><img src="https://placehold.co/225x43" alt="ラントロビジョン"></i>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.ttk-g.co.jp/" target="_blank">
                      <div class="p-grouplist__box_item">
                        <i><img src="https://placehold.co/225x43" alt="TTK"></i>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <br>
              <div class="p-grouplist__box">
                <ul>
                  <li>
                    <a href="https://www.solcom.co.jp/" target="_blank">
                      <div class="p-grouplist__box_item">
                        <i><img src="https://placehold.co/225x43" alt="株式会社ソルコム"></i>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.stk.co.jp/" target="_blank">
                      <div class="p-grouplist__box_item">
                        <i><img src="https://placehold.co/225x43" alt="四国通建"></i>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.seibu-const.co.jp/" target="_blank">
                      <div class="p-grouplist__box_item">
                        <i><img src="https://placehold.co/225x43" alt="西武建設"></i>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <br>
              <div class="p-grouplist__box">
                <ul>
                  <li>
                    <a href="https://www.kkc.co.jp/" target="_blank">
                      <div class="p-grouplist__box_item">
                        <i><img src="https://placehold.co/225x43" alt="国際航業株式会社"></i>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="p-grouplist__box_item">
                    </div>

                  </li>
                  <li>
                    <div class="p-grouplist__box_item">
                    </div>
                  </li>
                </ul>
              </div>
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