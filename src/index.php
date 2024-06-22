<!--ヘッダー部-->
<?php get_header(); ?>

    <!--キービジュアル-->
    <section class="p-kv">
      <div class="p-kv__bg"></div>
      <div class="p-kv__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/img/mv_img.png" class="p-kv__inner-img" alt="" width="298" height="173">
        <section class="p-creator">
          <h2 class="p-creator__ttl">
            <span>MANABU KAWATANI</span>
            <span>Front-end Engineer / Designer</span>
          </h2>
          <p class="p-creator__txt">
            不動産広告代理店、電話占いサイトなどで制作したクリエイティブなどを抜粋して掲載しています。
          </p>
        </section>
      </div>
    </section>

    <!--メイン部-->
    <main class="l-main">

      <!--Webアプリケーション-->
      <section id="page-scroll1" class="p-product-area">
        <h2 class="c-common-ttl">
          <span>Web Application</span>
          <span></span>
          <span>Webアプリケーション</span>
        </h2>
        <div class="p-product-area__inner">

          <!--投稿ループ-->
          <?php
            $args = array( 'post_type' => 'web-application' );  // カスタム投稿タイプ「web-application」
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

          <!--表示させるコンテンツ内容-->
          <div class="p-product large">
            <a href="<?php echo esc_url(get_permalink()); ?>" class="p-product__thumb">
              <picture class="p-product__thumb-img--b">
                <source media="(max-width:599px)" srcset="<?php echo first_image(); ?>" sizes="100vw" alt="<?php the_title(); ?>" />
                <!--PCの場合はサムネイル出力(遅延読み込みは無効に)-->
                <?php the_post_thumbnail('full', array('loading' => 'eager')); ?>
              </picture>

              <div class="p-product__thumb-ttl">
                <h3 class="p-product__thumb-subttl"><?php the_subtitle(); ?></h3>
                <h3  class="p-product__thumb-mainttl"><?php the_title(); ?></h3>
              </div>
            </a>
            <div class="c-product-tag-wrap">
              <?php the_tags('<span class="c-product-tag">' , '</span><span class="c-product-tag">' , '</span>'); ?>
            </div>
          </div>

          <?php endwhile; else : ?>
            <!--コンテンツが無い場合に表示させる内容-->
          <?php endif; ?>

        </div>
      </section>

      <!--レスポンシブサイト-->
      <section id="page-scroll2" class="p-product-area">
        <h2 class="c-common-ttl">
          <span>RESPONSIVE</span>
          <span></span>
          <span>レスポンシブサイト</span>
        </h2>
        <div class="p-product-area__inner">

          <!--投稿ループ-->
          <?php
            $args = array( 'post_type' => 'responsive' );  // カスタム投稿タイプ「responsive」
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

          <!--表示させるコンテンツ内容-->
          <div class="p-product large">
            <a href="<?php echo esc_url(get_permalink()); ?>" class="p-product__thumb">
              <picture class="p-product__thumb-img--b">
                <source media="(max-width:599px)" srcset="<?php echo first_image(); ?>" sizes="100vw" alt="<?php the_title(); ?>" />
                <!--PCの場合はサムネイル出力(遅延読み込みは無効に)-->
                <?php the_post_thumbnail('full', array('loading' => 'eager')); ?>
              </picture>

              <div class="p-product__thumb-ttl">
                <h3 class="p-product__thumb-subttl"><?php the_subtitle(); ?></h3>
                <h3  class="p-product__thumb-mainttl"><?php the_title(); ?></h3>
              </div>
            </a>
            <div class="c-product-tag-wrap">
              <?php the_tags('<span class="c-product-tag">' , '</span><span class="c-product-tag">' , '</span>'); ?>
            </div>
          </div>

          <?php endwhile; else : ?>
            <!--コンテンツが無い場合に表示させる内容-->
          <?php endif; ?>

        </div>
      </section>

      <!--ANIMATION LP-->
      <section id="page-scroll3" class="p-product-area">
        <h2 class="c-common-ttl">
          <span>ANIMATION LP</span>
          <span></span>
          <span>アニメーションLP(スマホサイト)</span>
        </h2>

        <div class="p-product-area__inner">

          <!--投稿ループ-->
          <?php
            $args = array( 'post_type' => 'animationLp' );  // カスタム投稿タイプ「animationLp」
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

          <!--表示させるコンテンツ内容-->
          <div class="p-product mid">
            <a href="<?php echo esc_url(get_permalink()); ?>" class="p-product__thumb">
              <div  class="p-product__thumb-img--m">
                <!--サムネイル出力(遅延読み込みは無効に)-->
                <?php the_post_thumbnail('full', array('loading' => 'eager')); ?>

                <div class="p-product__thumb-ttl">
                  <h3><?php the_title(); ?></h3>
                </div>
              </div>
            </a>
            <div class="c-product-tag-wrap">
              <?php the_tags('<span class="c-product-tag">' , '</span><span class="c-product-tag">' , '</span>'); ?>
            </div>
          </div>

          <?php endwhile; else : ?>
          <!--コンテンツが無い場合に表示させる内容-->
          <?php endif; ?>

        </div>
      </section>

      <!--LP DESIGN-->
      <section id="page-scroll4" class="p-product-area">
        <h2 class="c-common-ttl">
          <span>LP DESIGN</span>
          <span></span>
          <span>LPデザイン(スマホサイト)</span>
        </h2>

        <div class="p-product-area__inner">

          <!--投稿ループ-->
          <?php
            $args = array( 'post_type' => 'lpDesign' );  // カスタム投稿タイプ「lpDesign」
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

          <!--表示させるコンテンツ内容-->
          <div class="p-product mid">
            <a href="<?php echo esc_url(get_permalink()); ?>" class="p-product__thumb">
              <div  class="p-product__thumb-img--m">
                <!--サムネイル出力(遅延読み込みは無効に)-->
                <?php the_post_thumbnail('full', array('loading' => 'eager')); ?>

                <div class="p-product__thumb-ttl">
                  <h3><?php the_title(); ?></h3>
                </div>
              </div>
            </a>
            <div class="c-product-tag-wrap">
              <?php the_tags('<span class="c-product-tag">' , '</span><span class="c-product-tag">' , '</span>'); ?>
            </div>
          </div>

          <?php endwhile; else : ?>
          <!--コンテンツが無い場合に表示させる内容-->
          <?php endif; ?>

        </div>

      </section>

    </main>

<!--フッター部-->
<?php get_footer(); ?>