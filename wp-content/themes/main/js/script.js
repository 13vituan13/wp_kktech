/* ページ内リンク */
$(function(){
  $('a[href^="#"]').click(function(){
    var adjust = $(".l-header").innerHeight();
    var speed = 400;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - adjust;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
});



/* ページトップ */
$(function () {
  var navi__pagetop = $(".p-navi__pagetop");
  navi__pagetop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      navi__pagetop.fadeIn();
    } else {
      navi__pagetop.fadeOut();
    }
  });
  navi__pagetop.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });
});
$(document).ready(function () {
  $(".p-navi__pagetop").hide();
  $(window).on("resize load scroll", function () {
    scrollHeight = $(document).height();
    scrollPosition = $(window).height() + $(window).scrollTop();
    footHeight = $(".l-footer").innerHeight();
    if (scrollHeight - scrollPosition <= footHeight - 70 ) {
      $(".p-navi__pagetop").css({
        position: "absolute",
        bottom: footHeight - 35,
      });
    } else {
      $(".p-navi__pagetop").css({
        position: "fixed",
        bottom: "35px",
      });
    }
  });
});



/* グロナビ */
$(function () {
  $('.p-header__gnavi_menu > p').click(function(){
    $('body').toggleClass('js_gnavi_open');
    return false;
  });
  $('.p-header__gnavi_menu > ul > li > dl > dt').click(function(){
    $(this).parent('dl').toggleClass('js_gmenu_open');
    return false;
  });
  $('.p-footer__sitemap_box dl dt').click(function(){
    $(this).parent('dl').toggleClass('js_gmenu_open');
  });
  // リサイズで解除
  $(window).resize(function () {
    $('body').removeClass('js_gnavi_open');
    $('.p-header__gnavi_menu > ul > li > dl').removeClass('js_gmenu_open');
    $('.p-footer__sitemap_box dl').removeClass('js_gmenu_open');
  });
});



/* FAQ */
$(function () {
  $('.js_faq dl dt').click(function(){
    $(this).parent('dl').parent('.js_faq').toggleClass('js_faq_open');
  });
});



/* heroスライドショー */
$(function () {
  if( $('.js_hero').length ){
    $('.js_hero ul').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 8000,
      speed: 1000,
      arrows: true,
      dots: true,
      centerMode: true,
      centerPadding: '0',
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  };
});




/* topicsスライドショー */
$(function () {
  if( $('.js_topicstop').length ){
    $('.js_topicstop ul').slick({
      infinite: true,
      autoplay: false,
      autoplaySpeed: 8000,
      speed: 1000,
      arrows: true,
      dots: true,
      centerMode: true,
      slidesToScroll: 1,
      slidesToShow: 4,
      centerPadding: '0',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            centerPadding: '10%',
          },
        },
      ],
    });
  };
});





$(function () {
  $(window).scroll(function () {
    const windowHeight = $(window).height();
    const scroll = $(window).scrollTop();

    $('.js_fade').each(function () {
      const targetPosition = $(this).offset().top;
      if (scroll > targetPosition - windowHeight + 200) {
        $(this).addClass("js_fade_in");
      }
    });
  });
});
