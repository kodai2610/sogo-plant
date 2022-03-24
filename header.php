<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-T2N7HKV');
    </script>
    <!-- End Google Tag Manager -->
    <!-- サイト情報 -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <!-- OG -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content=" ページの タイトル" />
    <meta property="og:description" content=" ページのディスクリプション" />
    <meta property="og:image" content=" サムネイル画像の URL" />
    <!-- favicon -->
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/common/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/img/common/apple-touch-icon.png">
    <link rel="android-touch-icon" sizes="192x192" href="<?php bloginfo('template_url'); ?>/assets/img/common/android-touch-icon.png">
    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/111ed88bdd.js" crossorigin="anonymous"></script>
    <!-- aos sheets -->
    <link href="<?php bloginfo('template_url'); ?>/assets/css/aos.css" rel="stylesheet">
    <!-- slick sheets -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <!-- style sheets -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/reset.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.min.css">
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2N7HKV"
      height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header header-noindex">
      <div class="header-inner">
        <h1 class="header-logo hover">
          <a href="<?php echo esc_url(home_url('')); ?>" class="header-logo__link">
            <img class="forPc" src="<?php bloginfo('template_url'); ?>/assets/img/common/header-logo.png" alt="ロゴ">
            <img class="forSp" src="<?php bloginfo('template_url'); ?>/assets/img/common/header-logo-sp.png" alt="ロゴ">
          </a>
        </h1>
        <nav class="header-nav forPc">
          <ul class="header-nav__list">
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/about/')); ?>" class="header-nav__link">ABOUT US</a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/works/')); ?>" class="header-nav__link">WORKS</a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/person/')); ?>" class="header-nav__link">PERSON</a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/culture/')); ?>" class="header-nav__link">CULTURE</a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/story/')); ?>" class="header-nav__link">STORY</a>
            </li>
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="header-nav__link">RECRUIT</a>
            </li>
          </ul>
          <a href="<?php echo home_url(); ?>/recruit#recruit-area" class="header-nav__btn cmn-btn">
            ENTRY
          </a>
        </nav>
        <div class="header-btn forSp" id="js-btn">
          <span class="header-btn__cross01"></span>
          <span class="header-btn__cross02"></span>
          <div class="header-btn__lines">
            <span class="header-btn__line"></span>
            <span class="header-btn__line"></span>
            <span class="header-btn__line"></span>
          </div>
        </div>
      </div>
      <div class="mordal" id="js-mordal">
        <div class="mordal-inner">
          <nav class="mordal-nav">
            <ul class="mordal-nav__list">
              <li class="momrdal-nav__item">
                <a href="<?php echo esc_url(home_url('/about/')); ?>" class="mordal-nav__link">私たちについて</a>
              </li>
              <li class="momrdal-nav__item">
                <a href="<?php echo esc_url(home_url('/works/')); ?>" class="mordal-nav__link">仕事紹介</a>
              </li>
              <li class="momrdal-nav__item">
                <a href="<?php echo esc_url(home_url('/person/')); ?>" class="mordal-nav__link">働く人</a>
              </li>
              <li class="momrdal-nav__item">
                <a href="<?php echo esc_url(home_url('/culture/')); ?>" class="mordal-nav__link">働く環境</a>
              </li>
              <li class="momrdal-nav__item">
                <a href="<?php echo esc_url(home_url('/story/')); ?>" class="mordal-nav__link">ストーリー</a>
              </li>
              <li class="momrdal-nav__item">
                  <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="mordal-nav__link">採用情報</a>
                </li>
            </ul>
            <a href="<?php echo home_url(); ?>/recruit#recruit-area" class="mordal-nav__btn cmn-btn">ENTRY</a>
          </nav>
        </div>
        <div class="mordal-bg"></div>
      </div>
      </header>