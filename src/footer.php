    <!--フッター部-->
    <footer class="l-footer">
      <div class="l-footer__inner">

        <!--PCのフッターの検索フォームの吹き出し-->
        <div class="l-footer-search-txtbox--pc">
          <button class="c-txtbox-closeBtn"></button>
          <h4>（例）</h4>
          <span>・企画設計</span>
          <span>・デザイン</span>
          <span>・html, css</span>
          <span>・JavaScript</span>
          など
        </div>

        <!--フッターのロゴ-->
        <section class="l-footer-logo">
          <h2 class="l-footer-logo__ttl">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="l-footer-logo__link">
              <img src="<?php echo esc_url(get_theme_file_uri('img/logo_title.svg')); ?>" alt="<?php bloginfo('name'); ?>" width="150" height="45">
            </a>
          </h2>
          <p class="l-footer-logo__txt">
            不動産広告代理店、電話占いサイトなどで制作したクリエイティブなどを抜粋して掲載しています。
          </p>
        </section>

        <!--リンク部分SP用-->
        <div class="l-footer-links--sp">
          <a href="" class="l-footer-link--sp">CATEGORY</a>
          <div class="l-footer-links-accord--sp">
            <a href="<?php echo esc_url(home_url('#page-scroll1')); ?>">Webアプリケーション</a>
            <a href="<?php echo esc_url(home_url('#page-scroll2')); ?>">レスポンシブサイト</a>
            <a href="<?php echo esc_url(home_url('#page-scroll3')); ?>">アニメーションLP(スマホサイト)</a>
            <a href="<?php echo esc_url(home_url('#page-scroll4')); ?>">LPデザイン(スマホサイト)</a>
          </div>
          <a href="<?php echo esc_url(home_url('/about')); ?>">ABOUT</a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>">CONTACT</a>
        </div>

        <!--右側PC用-->
        <div class="l-footer-links--pc">
          <section class="l-footer-links__links--pc">
            <h3 class="l-footer-links__ttl--pc">CATEGORY</h3>
            <a href="<?php echo esc_url(home_url('#page-scroll1')); ?>">&gt;Webアプリケーション</a>
            <a href="<?php echo esc_url(home_url('#page-scroll2')); ?>">&gt;レスポンシブサイト</a>
            <a href="<?php echo esc_url(home_url('#page-scroll3')); ?>">&gt;アニメーションLP(スマホサイト)</a>
            <a href="<?php echo esc_url(home_url('#page-scroll4')); ?>">&gt;LPデザイン(スマホサイト)</a>
          </section>

          <section class="l-footer-links__links--pc">
            <h3 class="l-footer-links__ttl--pc">OTHERS</h3>
            <a href="<?php echo esc_url(home_url('/about')); ?>">&gt;ABOUT</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>">&gt;CONTACT</a>

            <div class="l-footer-links__search--pc">
              <?php get_search_form(); ?>
            </div>
          </section>
        </div>
        
      </div>
      <span class="l-footer_copyright">&copy;MK PORTFOLIO</span>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>