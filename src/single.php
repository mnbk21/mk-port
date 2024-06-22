<!--ヘッダー部-->
<?php get_header(); ?>

  <!--メイン部-->
  <main class="c-main--common">
    <section class="l-detail-area">

      <div class="l-detail">

        <h2 class="l-detail__subttl"><?php the_subtitle(); ?></h2>
        <h2 class="l-detail__mainttl"><?php the_title(); ?></h2>

        <div class="l-detail-txt">
          <div class="l-detail-txt__txt">
            <div class="l-detail-txt__flex">
              <?php the_content(); ?>
            </div>
          </div>
          
          <div class="c-product-tag-wrap">
            <?php the_tags('<span class="c-product-tag">' , '</span><span class="c-product-tag">' , '</span>'); ?>
          </div>

        <div class="l-capture-detail">
          <picture class="l-capture-detail__img">
            <source media="(max-width:599px)" srcset="<?php echo first_image(); ?>" sizes="100vw"  alt="<?php the_title(); ?>" />
            <img src="<?php echo second_image(); ?>" alt="<?php the_title(); ?>"> 
          </picture>
        </div>

      </div>

      <a href="<?php echo esc_url(home_url('/')); ?>" class="c-back-btn">
        <span>
          トップへ戻る
        </span>
        <span></span>
      </a>

    </section>
  </main>

<!--フッター部-->
<?php get_footer(); ?>

