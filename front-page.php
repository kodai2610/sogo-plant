<?php
/*
Template Name: front-page
*/
?>
<?php get_header(); ?>
      <!-- loading ====================================== -->
      <div class="loading-bg no-scroll">
        <div class="loading-img">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/index/logo-loading.png" alt="">
        </div>
      </div>
    <main id="index">
      <!-- mv ====================================== -->
      <section class="mv">
        <div class="mv-inner">
        <img class="forPc" src="<?php bloginfo('template_url'); ?>/assets/img/index/mv-index.png" alt="">
        <img class="forSp" src="<?php bloginfo('template_url'); ?>/assets/img/index/mv-index-sp.png" alt="">
          <div class="mv-inner__wrap">
            <div class="mv-logo">
              <div class="mv-logo__img">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/index/logo-mv.png" alt="ロゴ">
              </div>
              <div class="mv-logo__absolute">
                <div class="mv-logo__relative">
                  <span class="mv-logo__text js-scrollAnimation">
                    Join us for
                  </span>
                </div>
              </div>
            </div>
            <div class="mv-text forPc ">
              <div class="mv-text-line">
                <div class="mv-text-line__wrap">
                  <p class="mv-text-line__left">Our mission</p>
                  <span class="mv-text-line__right"></span>
                </div>
              </div>
              <div class="mv-text-pc forPc">
                仕事を求める方と人材を
                <br class="mv-text-pc__space">
                求める企業の間に立ち、
                <br class="mv-text-pc__space">
                お互いにとって
                <br class="mv-text-pc__space">
                より良い仕事・人材との
                <br class="mv-text-pc__space">
                出会いを作り出すこと。
              </div>
              <!-- <div class="mv-text-sp forSp">
                仕事を求める方と人材を求める企業の間に立ち、
                <br class="mv-text-sp__space">
                お互いにとってより良い仕事・人材との
                <br class="mv-text-sp__space">
                出会いを作り出すこと。
              </div> -->
            </div>
          </div>
        </div>
        <div class="mv-text forSp">
          <div class="mv-text-line">
            <div class="mv-text-line__wrap">
              <p class="mv-text-line__left">Our mission</p>
              <span class="mv-text-line__right"></span>
            </div>
          </div>
          <div class="mv-text-sp forSp">
            仕事を求める方と人材を求める企業の間に立ち、
            <br class="mv-text-sp__space">
            お互いにとってより良い仕事・人材との
            <br class="mv-text-sp__space">
            出会いを作り出すこと。
          </div>
        </div>
      </section>
      <!-- arrow ====================================== -->
      <section class="arrow forSp">
        <div class="arrow-wrap forSp">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/index/part-arrow.png" alt="矢印">
        </div>
      </section>
      <!-- message ====================================== -->
      <section class="message">
        <div class="bg-wave">
          <div class="wave">
            <canvas id="waveCanvas1" class="wavecanvas"></canvas>
        </div>
        </div>
        <div class="message-inner">
          <h2 class="message-ttl forPc" data-aos="fade-up" data-aos-duration="1500">人と企業の架け橋となり、<br>働く人たちの「夢・未来」を応援したい。</h2>
          <h2 class="message-ttl-sp forSp" data-aos="fade-up" data-aos-duration="1500">人と企業の架け橋となり、<br>働く人たちの「夢・未来」を<br>応援したい。</h2>
          <p class="message-text01" data-aos="fade-up" data-aos-duration="1500">総合プラントは1986年9月、日本で労働者派遣法が施行されたその年に設立されました。本社のある熊本県を基盤にしつつ、現在は北九州、福岡、鹿児島など、九州を中心に人材サービスを展開しています。</p>
          <p class="message-text02" data-aos="fade-up" data-aos-duration="1500">働く人たちの「夢・未来」を応援したい。信頼されるサービスで選ばれ続ける企業を目指したい。そんな気持ちを持ち続けています。</p>
          <a href="<?php echo esc_url(home_url('/about/')); ?>" class="message-btn cmn-btn">MORE</a>
        </div>
        <div class="message-bg">
          <span></span>
        </div>
      </section>
      <!-- intro====================================== -->
      <section class="intro">
        <div class="intro-inner">
          <div class="intro-top" data-aos="fade-up" data-aos-duration="1500">
            <h2 class="intro-ttl">Get to Know us</h2>
            <p class="intro-desc forPc">
              株式会社総合プラントの会社紹介資料です。
              <br>
              下記のスライドにて、当社の魅力をさらにご覧いただけます。
            </p>
            <p class="intro-desc forSp">
              株式会社総合プラントの会社紹介資料です。
              <br>
              下記のスライドにて、
              <br>
              当社の魅力をさらにご覧いただけます。
            </p>
          </div>
          <div class="intro-document" data-aos="fade-up" data-aos-duration="1500">
            <div class="intro-document__cover">
            <script id="gfj_create_iframe_script" src="//good-for-job.com/js/user/slide_player/create_iframe.js" data-src="//good-for-job.com/slide-player/216" data-ratio="1.7777777777778" data-company_url="https://good-for-job.com/company/243" data-title="株式会社総合プラント 採用ピッチ資料"></script>
            </div>
          </div>
        </div>
      </section>
      <!-- works====================================== -->
      <section class="works cmn-media">
        <div class="bg-wave white">
          <div class="wave">
            <canvas id="waveCanvas1w" class="wavecanvas"></canvas>
          </div>
        </div>
        <div class="works-inner cmn-media-inner">
          <span class="works-inner-bg cmn-media-inner-bg" data-aos="slide-left" data-aos-duration="1000"></span>
          <div class="works-image-wrap cmn-media-image-wrap">
            <div class="works-image-wrap__relative">
              <div class="works-image-wrap__img01">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/index/works-img01.png" alt="写真">
              </div>
              <div class="works-image-wrap__img02">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/index/works-img02.png" alt="写真">
              </div>
            </div>
          </div>
          <div class="workd-desc cmn-media-desc">
            <h2 class="works-desc__ttl cmn-ttl" data-aos="fade-up"  data-aos-duration="1000">
              仕事紹介
              <div class="works-ttl__img cmn-ttl__img">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/index/logo-works.png" alt="">
              </div>
            </h2>
            <p class="works-desc__text cmn-media-desc__text">
              総合プラントは人材活用のプロとして幅広いサービスをご提案しております。
              熊本県・福岡県をはじめとし、地域密着、全業種対応で求職者と企業様の最適なマッチングを行う仕事です。
            </p>
            <a href="<?php echo esc_url(home_url('/works/')); ?>" class="works-desc__btn cmn-btn">MORE</a>
          </div>
        </div>
      </section>
      <!-- person====================================== -->
      <section class="person">
        <div class="bg-wave">
          <div class="wave">
            <canvas id="waveCanvas3" class="wavecanvas"></canvas>
          </div>
        </div>
        <div class="person-inner">
          <h2 class="person-ttl cmn-ttl" data-aos="fade-up" data-aos-duration="1500">
            働く人
            <div class="person-ttl__img cmn-ttl__img">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/index/logo-person.png" alt="ロゴ写真">
            </div>
          </h2>
          <p class="person-desc" data-aos="fade-up" data-aos-duration="1500">総合プラントで働く個性豊かな社員を紹介します。</p>
        </div>
          <ul class="person-list slick-person">
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
          </ul>
          <div class="person-btn" data-aos="fade-up" data-aos-duration="1500">
            <a href="<?php echo esc_url(home_url('/person/')); ?>" class="cmn-btn">MORE</a>
          </div>
      </section>
      <!-- culture ====================================== -->
      <section class="culture cmn-media">
        <div class="bg-wave white">
          <div class="wave">
            <canvas id="waveCanvas2w" class="wavecanvas"></canvas>
          </div>
        </div>
        <div class="culture-image-wrap cmn-media-image-wrap">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/index/culture-img.png" alt="写真">
        </div>
        <div class="culture-inner cmn-media-inner">
          <span class="culture-inner-bg cmn-media-inner-bg" data-aos="slide-left" data-aos-duration="1000"></span>
          <div class="culture-desc cmn-media-desc">
            <h2 class="culture-desc__ttl cmn-ttl" data-aos="fade-up" data-aos-duration="1500">
              働く環境
              <div class="culture-desc__ttl__img cmn-ttl__img">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/index/logo-culture.png" alt="">
              </div>
            </h2>
            <p class="culture-desc__text cmn-media-desc__text">
              社員一人ひとりの成長をサポート。
              <br>
              研修や福利厚生、キャリアパスを紹介します。（仮）
            </p>
            <a href="<?php echo esc_url(home_url('/culture/')); ?>" class="culture-desc__btn cmn-btn">MORE</a>
          </div>
        </div>
      </section>
      <!-- story ====================================== -->
      <section class="story" data-aos="fade-up" data-aos-duration="1500">
        <div class="story-top">
          <h2 class="story-ttl cmn-ttl" data-aos="fade-up" data-aos-duration="1500">
            働く環境
            <div class="story-ttl__img cmn-ttl__img">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/index/logo-story.png" alt="">
            </div>
          </h2>
          <p class="story-desc">総合プラントで活躍している社員や組織文化を、さまざまなストーリーを通じて紹介します。（仮）</p>
      </div>
      <!-- スライダー ===============- -->
      <div class="story-slider-wrap">
        <ul class="story-slider-list slick-story" data-aos="fade-up" data-aos-duration="1500">
        <?php
        $args = array(
          'post_type' => 'story',// 投稿タイプを指定（スラッグ名が入る）
          'posts_per_page' => 9,// 表示する記事数（全部の場合は -1 を指定）
        );
        $news_query = new WP_Query($args); // データベースから投稿を取得
        if ($news_query->have_posts()):
          while ($news_query->have_posts()):
            $news_query->the_post();
        ?>
        <li  class="story-slider-item post">
                <div class="story-slider-item__img-wrap post-img-wrap">
                  <div class="story-slider-item__img post-img">
                    <img src="<?php the_field('サムネイル画像'); ?>" alt="" style="height:100%;">
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
      </div>
        <!-- スライダー終わり ===============- -->
        <div class="story-btn" data-aos="fade-up" data-aos-duration="1500">
          <a href="<?php echo esc_url(home_url('/story/')); ?>" class="cmn-btn">MORE</a>
        </div>
      </section>
      <section class="entry">
        <div class="bg-wave">
          <div class="wave">
            <canvas id="waveCanvas2" class="wavecanvas"></canvas>
          </div>
        </div>
        <div class="entry-inner" data-aos="fade-up" data-aos-duration="1500">
          <img class="forPc" style="height:100%;" src="<?php bloginfo('template_url'); ?>/assets/img/index/entry-img.png" alt="">
          <img class="forSp" style="height:100%;" src="<?php bloginfo('template_url'); ?>/assets/img/index/entry-img-sp.png" alt="">
          <div class="entry-cover"></div>
          <h2 class="entry-ttl cmn-ttl">
            採用情報
            <div class="entry-ttl__img cmn-ttl__img">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/index/logo-entry.png" alt="">
            </div>
          </h2>
          <div class="entry-btn" data-aos="fade-up" data-aos-duration="1500">
            <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="cmn-btn">MORE</a>
          </div>
        </div>
      </section>
    </main>
    	<!-- footer================================================== -->
	<?php get_footer(); ?>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/index.js"></script>