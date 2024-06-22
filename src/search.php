<!--ヘッダー部-->
<?php get_header(); ?>

  <!--検索結果-->
  <h2 class="p-search-result">
    <?php
      if (isset($_GET['s']) && empty($_GET['s'])) {
        echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
      } else {
        echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
      }
    ?>
  </h2>

  <main class="l-main--search">

    <!--レスポンシブサイト-->
    <section class="p-product-area">
      <h2 class="c-common-ttl">
        <span>RESPONSIVE</span>
        <span></span>
        <span>レスポンシブサイト</span>
      </h2>
      <div class="p-product-area__inner">
        <!--検索結果ループ-->
        <?php $custom_query = new WP_Query(
          array(
          'post_type' => 'responsive',
          's' => get_search_query()
          )
        );
        ?>

        <?php
          if ($custom_query->have_posts() ) :
        ?>

        <?php
          while ( $custom_query->have_posts() ) :
          $custom_query->the_post();
        ?>

        <!--表示させるコンテンツ内容-->
        <div class="p-product large">
          <a href="<?php echo esc_url(get_permalink()); ?>" class="p-product__thumb">
            <picture class="p-product__thumb-img--b">
              <source media="(max-width:599px)" srcset="<?php echo first_image(); ?>" sizes="100vw" alt="<?php the_title(); ?>" />
              <img src="<?php echo second_image(); ?>" alt="<?php the_title(); ?>">
            </picture>

            <div class="p-product__thumb-ttl">
              <h3 class="p-product__thumb-subttl"><?php the_subtitle(); ?></h3>
              <h3 class="p-product__thumb-mainttl"><?php the_title(); ?></h3>
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
    <section class="p-product-area">
      <h2 class="c-common-ttl">
        <span>ANIMATION LP</span>
        <span></span>
        <span>アニメーションLP(スマホサイト)</span>
      </h2>
      <div class="p-product-area__inner">

        <!--検索結果ループ-->
        <?php $custom_query = new WP_Query(
          array(
          'post_type' => 'animationLp',
          's' => get_search_query()
          )
        );
        ?>

        <?php
          if ($custom_query->have_posts() ) :
        ?>

        <?php
          while ( $custom_query->have_posts() ) :
          $custom_query->the_post();
        ?>

        <!--表示させるコンテンツ内容-->
        <div class="p-product mid">
          <a href="<?php echo esc_url(get_permalink()); ?>" class="p-product__thumb">
            <div  class="p-product__thumb-img--m">
              <?php the_post_thumbnail(); ?>
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
    <section class="p-product-area">
      <h2 class="c-common-ttl">
        <span>LP DESIGN</span>
        <span></span>
        <span>LPデザイン(スマホサイト)</span>
      </h2>

      <div class="p-product-area__inner">

        <!--検索結果ループ-->
        <?php $custom_query = new WP_Query(
          array(
          'post_type' => 'lpDesign',
          's' => get_search_query()
          )
        );
        ?>

        <?php
          if ($custom_query->have_posts() ) :
        ?>

        <?php
          while ( $custom_query->have_posts() ) :
          $custom_query->the_post();
        ?>

        <!--表示させるコンテンツ内容-->
        <div class="p-product mid">
          <a href="<?php echo esc_url(get_permalink()); ?>" class="p-product__thumb">
            <div  class="p-product__thumb-img--m">
              <?php the_post_thumbnail(); ?>
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

    <a href="<?php echo esc_url(home_url('/')); ?>" class="c-back-btn">
        <span>
          トップへ戻る
        </span>
        <span></span>
      </a>

  </main>

<!--フッター部-->
<?php get_footer(); ?>