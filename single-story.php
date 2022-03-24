
<?php get_header();?>
	<!-- main ===================================================-->
	<main id="story">
    <section class="topic">
      <div class="topic-inner">
        <div class="topic-top">
          <div class="topic-top-left">
            <div class="topic-date"><?php echo get_the_date('Y.m.d') ;?></div>
            <div class="topic-ttl"><?php the_title(); ?></div>
          </div>
          <div class="topic-top-right">
            <img src="<?php the_field('サムネイル画像'); ?>" alt="サムネイル画像">
          </div>
        </div>
        <div class="topic-bottom">
          <p class="topic-text">
            <?php the_field('文章'); ?>
          </p>
          <div class="topic-end">END</div>
        </div>
      </div>
    </section>
    <section class="other">
      <div class="other-bg"></div>
        <h2 class="other-ttl">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/story/logo-other-story.png" alt="">
        </h2>
        <ul class="other-list slick-other">
        <?php
        $args = array(
          'post_type' => 'story',// 投稿タイプを指定（スラッグ名が入る）
          'posts_per_page' => 3,// 表示する記事数（全部の場合は -1 を指定）
        );
        $news_query = new WP_Query($args); // データベースからニュースを取得
        if ($news_query->have_posts()):
          while ($news_query->have_posts()):
            $news_query->the_post();
        ?>
        <li  class="story-slider-item post">
                <div class="story-slider-item__img-wrap post-img-wrap">
                  <div class="story-slider-item__img post-img">
                    <img src="<?php the_field('サムネイル画像'); ?>" alt="サムネイル画像" style="height:100%;">
                  </div>
                </div>
                <div class="story-slider-item__desc post-desc">
                  <p class="story-slider-item__date postdesc__date"><?php echo get_the_date('Y.m.d') ;?></p>
                  <a href="<?php the_permalink(); ?>" class="story-slider-item__ttl post-desc__ttl"><?php the_title(); ?></a>
                  <div class="story-slider-item__category post-category">
                    <a href="" class="story-slider-item__category__link post-category__item">＃カテゴリー名</a>
                    <a href="" class="story-slider-item__category__link post-category__item">＃カテゴリー名</a>
                    <a href="" class="story-slider-item__category__link post-category__item">＃カテゴリー名</a>
                    <a href="" class="story-slider-item__category__link post-category__item">＃カテゴリー名</a>
                  </div>
                </div>
            </li>
        <?php
        endwhile;
        endif;
        wp_reset_postdata();
        ?>
        </ul>
        <a href="<?php echo esc_url(home_url('/story/')); ?>" class="other-btn cmn-btn">MORE</a>
    </section>
	</main>
	<!-- footer================================================== -->
  <?php get_footer();?>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/story.js"></script>
