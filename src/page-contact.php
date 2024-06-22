<!--ヘッダー部-->
<?php get_header(); ?>

    <!--メイン部-->
    <main class="c-main--common">
      <div class="c-common-area">
        <h2 class="c-common-ttl">
          <span>CONTACT</span>
          <span></span>
          <span>お問合せ</span>
        </h2>
        <div class="l-contact">
          <?php the_content(); ?>
        </div>

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