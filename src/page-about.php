<?php get_header(); ?>

  <!--メイン部-->
  <main class="c-main--common">
    <div class="c-common-area">
      <h2 class="c-common-ttl">
        <span>ABOUT</span>
        <span></span>
        <span>私について</span>
      </h2>
      <div class="l-about">
        <img src="<?php echo get_template_directory_uri(); ?>/img/creator_img.jpg" alt="" class="l-about__img" width="300" height="450">

        <section class="l-about__txtbox">
          <h3>
            <span>MANABU KAWATANI</span>
            <span>河谷 学</span>
            <span>Front-end Engineer / Designer</span>
          </h3>
          <p>ポートフォリオをご覧頂き、ありがとうございます。</p>
          <br>
          <p>2014年に電話占い事業を運営する会社に入社し、フロントエンドエンジニア兼Webデザイナーとして勤務しました。</p>
          <p>2023年1月から、オープンハウスグループ内の広告代理店にフロントエンドエンジニアとして入社し、オープンハウス様のクリエイティブの構築、KaizenやKarteなどのWeb接客ツールやLPOツールを用いたサイト改善、ABテスト、ページ最適化などの業務を行っています。</p>
          <p>「Github」<br><a href="https://github.com/mnbk21" target="_blank" class="l-about__txtLink">https://github.com/mnbk21</a></p>
        </section>

      </div>

      <a href="<?php echo esc_url(home_url('/')); ?>" class="c-back-btn">
        <span>
          トップへ戻る
        </span>
        <span></span>
      </a>

      </div>

    </div>

    </div>
  </main>

<!--フッター部-->
<?php get_footer(); ?>