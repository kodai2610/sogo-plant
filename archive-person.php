<?php
/*
Template Name: archive-person
*/
?>
<?php get_header(); ?>
	<!-- main ===================================================-->
	<main id="person-archive">
		<!-- mv ====================================== -->
		<section class="mv">
			<img class="forPc" src="<?php bloginfo('template_url'); ?>/assets/img/person-archive/mv-person.png" alt="メインビジュアル">
			<img class="forSp" src="<?php bloginfo('template_url'); ?>/assets/img/person-archive/mv-person-sp.png" alt="メインビジュアル">
			<h2 class="mv-ttl cmn-ttl">
				<p id="inview-fadeIn">働く人</p>
				<div class="mv-ttl__img cmn-ttl__img" data-aos="zoom-in" data-aos-duration="1000">
					<img src="<?php bloginfo('template_url'); ?>/assets/img/person-archive/person.png" alt="">
				</div>
      </h2>
		</section>
    <!-- person ====================================== -->
    <section class="person">
      <div class="person-inner">
        <div class="person-list">
        <?php
        $args = array(
          'post_type' => 'person',// 投稿タイプを指定（スラッグ名が入る）
          'posts_per_page' => 9,// 表示する記事数（全部の場合は -1 を指定）
        );
        $news_query = new WP_Query($args); // データベースから投稿を取得
        if ($news_query->have_posts()):
          while ($news_query->have_posts()):
            $news_query->the_post();
        ?>
            <a href="<?php the_permalink(); ?>" class="person-item cmn-box" data-aos="fade-up" data-aos-duration="1500">
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
        </div>
      </div>
    </section>
	</main>
	<!-- footer================================================== -->
  <?php get_footer(); ?>
