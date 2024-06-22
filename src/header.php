<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0,viewport-fit=cover">
    <meta name="description" content="不動産広告代理店、電話占いサイトなどで制作したクリエイティブなどを抜粋して掲載しています。">
    <meta name="robots" content="noindex , nofollow" />
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.svg')); ?>" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
    <header class="l-header">
      <div class="l-header__inner">

        <!--ページ上部にスクロールするボタン-->
        <a href="" class="c-toppage-btn"></a>

        <div class="l-header-logo-search">
          <h1 class="l-header-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header-logo__link">
              <img src="<?php echo esc_url(get_theme_file_uri('img/logo_title.svg')); ?>" alt="<?php bloginfo('name'); ?>" width="150" height="45">
            </a>
          </h1>

          <div class="c-hamburger">
            <span class="c-hamburger__bar1"></span>
            <span class="c-hamburger__bar2"></span>
            <span class="c-hamburger__bar3"></span>
          </div>

          <!--PCのヘッダーの検索フォーム-->
          <div class="c-header-search--pc">
            <?php get_search_form(); ?>
          </div>
        </div>

        <!--PCナビメニュー-->
        <nav class="l-header-nav">
          <a href="" class="l-header-nav__link l-header-nav__link--txtbox">CATEGORY</a>
          <a href="<?php echo esc_url(home_url('/about')); ?>" class="l-header-nav__link">ABOUT</a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="l-header-nav__link">CONTACT</a>
        </nav>

        <!--SPスライドナビ-->
        <nav class="l-slide-nav">
          <section class="l-slide-nav__list">
            <h2 class="l-slide-nav__ttl">CATEGORY</h2>
            <a href="<?php echo esc_url(home_url('#page-scroll1')); ?>" class="l-slide-nav__link">&gt;レスポンシブサイト</a>
            <a href="<?php echo esc_url(home_url('#page-scroll2')); ?>" class="l-slide-nav__link">&gt;アニメーションLP(スマホサイト)</a>
            <a href="<?php echo esc_url(home_url('#page-scroll3')); ?>" class="l-slide-nav__link">&gt;LPデザイン(スマホサイト)</a>
          </section>

          <section class="l-slide-nav__list">
            <h2 class="l-slide-nav__ttl">OTHERS</h2>
            <a href="<?php echo esc_url(home_url('/about')); ?>" class="l-slide-nav__link">&gt;ABOUT</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="l-slide-nav__link">&gt;CONTACT</a>
          </section>

          <!--SP検索フォーム-->
          <div class="l-header-search--sp">
            <?php get_search_form(); ?>
          </div>
          <!--SPの検索フォームの吹き出し-->
          <div class="l-search-txtbox--sp">
            <h2>（例）</h2>
            <span>・企画設計</span>
            <span>・デザイン</span>
            <span>・html, css</span>
            <span>・JavaScript</span>
            など
          </div>
        </nav>

      </div>

    </header>

    <!--モーダル-->
    <div class="c-modal"></div>

    <!--PCのヘッダー下の吹き出しの領域-->
    <div class="l-header-txtboxwrap--pc">

      <!--PCの検索フォームの吹き出し-->
      <div class="l-header-search-txtbox--pc">
        <button class="c-txtbox-closeBtn"></button>
        <h4>（例）</h4>
        <span>・企画設計</span>
        <span>・デザイン</span>
        <span>・html, css</span>
        <span>・JavaScript</span>
        など
      </div>

      <!--PCのカテゴリーの吹き出し-->
      <div class="l-header-category-txtbox--pc">
        <button class="c-txtbox-closeBtn"></button>
        <a href="<?php echo esc_url(home_url('#page-scroll1')); ?>">&gt;レスポンシブサイト</a>
        <a href="<?php echo esc_url(home_url('#page-scroll2')); ?>">&gt;アニメーションLP(スマホサイト)</a>
        <a href="<?php echo esc_url(home_url('#page-scroll3')); ?>">&gt;LPデザイン(スマホサイト)</a>
      </div>

    </div>