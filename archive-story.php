<?php
/*
Template Name: archive-story
*/
?>
<?php get_header(); ?>
  <!-- main ===================================================-->
  <main id="archive">
    <!-- mv ===================================================-->
    <section class="mv">
      <img class="forPc" src="<?php bloginfo('template_url'); ?>/assets/img/story-archive/mv-archive.png" alt="">
      <img class="forSp" src="<?php bloginfo('template_url'); ?>/assets/img/story-archive/mv-archive-sp.png" alt="">
      <div class="mv-inner">
        <h2 class="mv-ttl cmn-ttl">
          <p id="inview-fadeIn">ストーリー</p>
          <div class="mv-ttl__img cmn-ttl__img" data-aos="zoom-in" data-aos-duration="1000">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/story-archive/logo-story-white.png" alt="">
          </div>
        </h2>
      </div>
    </section>
    <!-- search ===================================================-->
    <section class="search">
      <div class="search-box" data-aos="fade-up" data-aos-duration="1500">
        <div class="search-box-inner">
          <p class="search-box-heading">ストーリー記事を並び替える</p>
          <div class="search-wrap">
            <div class="search-top">
              <div class="search-item">
                <div class="search-heading">
                  <div class="search-heading__logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/story-archive/part-calendar.png" alt="">
                  </div>
                  <p class="search-heading__text">Year</p>
                </div>
                <div class="search-selector">
                  <p class="js-trigger search-selector__text">すべての時期</p>
                  <div class="search-selector__wrap">
                    <div class="search-selector__item">
                      <p><span></span>2022年</p>
                    </div>
                    <div class="search-selector__item">
                      <p><span></span>2021年</p>
                    </div>
                    <div class="search-selector__item">
                      <p><span>2020年</span></p>
                    </div>
                    <div class="search-selector__item">
                      <p><span>2019年</span></p>
                    </div>
                    <div class="search-selector__item">
                      <p><span>2018年</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="search-item">
                <div class="search-heading">
                  <div class="search-heading__logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/story-archive/part-tag.png" alt="">
                  </div>
                  <p class="search-heading__text">Tag</p>
                </div>
                <div class="search-selector">
                <p class="search-selector__text js-trigger">すべてのタグ</p>
                  <div class="search-selector__wrap">
                    <div class="search-selector__item">
                      <p>会社紹介</p>
                    </div>
                    <div class="search-selector__item">
                      <p>営業所紹介</p>
                    </div>
                    <div class="search-selector__item">
                      <p>社員紹介</p>
                    </div>
                    <div class="search-selector__item">
                      <p>採用情報</p>
                    </div>
                    <div class="search-selector__item">
                      <p>お知らせ</p>
                    </div>
                    <div class="search-selector__item">
                      <p>日々のこと</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="search-bottom">
              <div class="search-heading--search">
                <div class="search-heading__logo">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/story-archive/part-search.png" alt="">
                </div>
                <p class="search-heading__text">Search</p>
              </div>
              <form action="<?=esc_url(home_url('/story'))?>">
                <div class="search-bottom-holder">
                  <input class="search-input" type="text" name="foo" placeholder="キーワードを入力してください" value="<?=esc_html(get_query_var('foo'))?>">
                  <div class="search-submit" >
                    <button type="submit"><img src="<?php bloginfo('template_url'); ?>/assets/img/story-archive/part-search-w.png" alt=""></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- posts ===================================================-->
    <section class="posts">
      <div class="posts-inner">
        <ul class="posts-list">
			<?php if(have_posts()) : while(have_posts()): the_post(); ?>
				<li  class="posts-item post" data-aos="fade-up" data-aos-duration="1500">
						<div class="posts-item__img-wrap post-img-wrap">
						  <div class="posts-item__img post-img">
							<img src="<?php the_field('サムネイル画像'); ?>" alt="サムネイル画像" style="height:100%;">
						  </div>
						</div>
						<div class="posts-item__desc post-desc">
						  <p class="posts-item__date postdesc__date"><?php echo get_the_date('Y.m.d') ;?></p>
						  <a href="<?php the_permalink(); ?>" class="posts-item__ttl post-desc__ttl"><?php the_title(); ?></a>
						  <div class="story-slider-item__category post-category">
							  <?php
									if ($terms = get_the_terms($post->ID, 'story_tag')) {
										foreach ( $terms as $term ) {
										echo ('<a href="" class="posts-item__category__link post-category__item">');
										echo '#';
										echo esc_html($term->name);
										echo ('</a>');
									  }
									}
								?>
						  </div>
						</div>
					</li>
			<?php endwhile; endif;?>
        </ul>
		</div>
    </section>
    <section class="pagination" data-aos="fade-up" data-aos-duration="1500">
    <div class="pagination-inner">
        <div class="pagination-arrow-prev" id="prev-arrow">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/story-archive/part-arrow-prev.png" alt="">
        </div>
        <div class="pagination-list">
          <a href="javascript:void(0)" class="pagination-item" id="prev-num">1</a>
          <a href="javascript:void(0)" class="pagination-item" id="now-num">2</a>
          <a href="javascript:void(0)" class="pagination-item" id="next-num">3</a>
        </div>
        <div class="pagination-arrow-next" id="next-arrow">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/story-archive/part-arrow-next.png" alt="">
        </div>
      </div>
    </section>
  </main>
  <!-- footer================================================== -->
  <?php get_footer(); ?>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/archive-story.js"></script>