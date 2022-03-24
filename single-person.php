<?php
/*
Template Name: person
*/
?>
<?php get_header(); ?>
	<!-- main ===================================================-->
	<main id="person">
    <section class="top">
      <div class="bg-wave">
        <div class="wave">
          <canvas id="waveCanvas" class="wavecanvas"></canvas>
        </div>
      </div>
      <div class="top-inner">
        <div class="top-left">
          <p class="top-name__ja"><?php the_field('名前'); ?></p>
          <p class="top-name__en"><?php the_field('名前英語'); ?></p>
          <div class="top-logo"><?php the_field('入社方法'); ?></div>
          <p class="top-date"><?php the_field('入社日'); ?></p>
          <p class="top-position"><?php the_field('役職'); ?></p>
        </div>
        <div class="top-right">
          <img src="<?php the_field('個別ページ用画像'); ?>" alt="">
        </div>
      </div>
    </section>
    <section class="interview">
      <div class="interview-inner">
        <div class="interview-q1">
          <h3 class="interview-ttl">
            <div class="interview-ttl__logo">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/person/logo-q1.png" alt="ロゴ">
            </div>
            <p class="interview-ttl__text">仕事について教えて下さい</p>
          </h3>
          <div class="interview-cont">
            <p class="interview-cont__text"><?php the_field('仕事について教えて下さい'); ?></p>
          </div>
        </div>
        <div class="interview-q2">
          <div class="interview-q2-left">
            <img src="<?php the_field('個別ページ用画像2'); ?>" alt="写真">
            <div class="interview-q2-left__bg"></div>
          </div>
          <div class="interview-q2-right">
            <h3 class="interview-ttl">
              <div class="interview-ttl__logo">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/person/logo-q2.png" alt="ロゴ">
              </div>
              <p class="interview-ttl__text">働き方について教えて下さい</p>
            </h3>
            <div class="interview-cont">
              <p class="interview-cont__text"><?php the_field('働き方について教えて下さい'); ?></p>
            </div>
          </div>
        </div>
        <div class="interview-q3">
          <h3 class="interview-ttl">
            <div class="interview-ttl__logo">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/person/logo-q3.png" alt="ロゴ">
            </div>
            <p class="interview-ttl__text">働き方について教えて下さい</p>
          </h3>
          <div class="interview-cont">
            <p class="interview-cont__text"><?php the_field('働き方について教えて下さい2'); ?></p>
          </div>
        </div>
        <p class="interview-end">END</p>
      </div>
    </section>
    <!-- other =============================================================-->
    <section class="other">
      <div class="other-bg"></div>
      <div class="other-inner">
          <h2 class="other-ttl">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/person/logo-other.png" alt="ロゴ">
          </h2>
        </div>
        <ul class="other-list other-slick">
        <?php
        $args = array(
          'post_type' => 'person',// 投稿タイプを指定（スラッグ名が入る）
          'posts_per_page' => 3,// 表示する記事数（全部の場合は -1 を指定）
        );
        $news_query = new WP_Query($args); // データベースから投稿を取得
        if ($news_query->have_posts()):
          while ($news_query->have_posts()):
            $news_query->the_post();
        ?>
            <a href="<?php the_permalink(); ?>" class="person-item cmn-box">
              <div class="person-img-wrap cmn-box-image-wrap">
                <div class="person-logo cmn-box-logo"><?php the_field('入社方法'); ?></div>
                <div class="person-img cmn-box-img">
                  <img src="<?php the_field('人物画像'); ?>" alt="人物写真">
                </div>
              </div>
              <div class="person-card cmn-box-card">
                <div class="person-card__inner cmn-box-card__inner">
                  <div class="person-card__date cmn-box-card__date"><?php the_field('入社日'); ?></div>
                  <div class="person-card__place cmn-box-card__place"><?php the_field('役職'); ?></div>
                  <div class="person-card__name--ja cmn-box-card__name--ja"><?php the_field('名前'); ?></div>
                  <div class="person-card__name--ja cmn-box-card__name--en"><?php the_field('名前英語'); ?></div>
                </div>
              </div>
            </a>
            <?php
        endwhile;
        endif;
        wp_reset_postdata();
        ?>
        </ul>
        <a href="<?php echo esc_url(home_url('/person/')); ?>" class="other-btn cmn-btn">MORE</a>
    </section>
	</main>
	<!-- footer================================================== -->
  <?php get_footer(); ?>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/person.js"></script>
