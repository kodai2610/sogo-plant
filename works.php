<?php
/*
Template Name: works
*/
?>
<?php get_header(); ?>
	<!-- main ===================================================-->
	<main id="works">
		<!-- mv ====================================== -->
		<section class="mv">
      <img class="forPc" src="<?php bloginfo('template_url'); ?>/assets/img/works/mv-works.png" alt="">
      <img class="forSp" src="<?php bloginfo('template_url'); ?>/assets/img/works/mv-works-sp.png" alt="">
			<h2 class="mv-ttl cmn-ttl">
        <p >仕事紹介</p>
				<div class="mv-ttl__img cmn-ttl__img" data-aos="zoom-in" data-aos-duration="1000">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/works/logo-works-white.png" alt="">
				</div>
      </h2>
		</section>
    <!-- intro ====================================== -->
    <section class="intro">
      <div class="intro-bg"></div>
      <div class="intro-inner">
        <ul class="intro-list">
          <li class="intro-item" data-aos="fade-up" data-aos-duration="1500">
            <div class="intro-item__inner">
              <div class="intro-item__left">
                <div class="intro-item__num">01</div>
                <h3 class="intro-item__ttl">人材コンサルティング営業</h3>
                <h3 class="intro-item__text">就職したい求職者の希望をもとに、採用課題を持つ企業に対しての架け橋になる仕事です。採用が上手くいかない、やり方がわからないといった課題を持つ企業をヒアリングし、求職者と企業の悩みを解決していきます。</h3>
              </div>
              <div class="intro-item__right">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/works/works-img01.png" alt="">
              </div>
            </div>
          </li>
          <li class="intro-item" data-aos="fade-up" data-aos-duration="1500">
            <div class="intro-item__inner">
              <div class="intro-item__left">
                <div class="intro-item__num">02</div>
                <h3 class="intro-item__ttl">広報</h3>
                <p class="intro-item__text">WebサイトからSNS広告まで幅広く携わり、より多くの人に注目してもらえるように改善していきます。既存の手法の枠にとらわれず、自由な発想で様々なコンテンツを活用し集客力強化へ挑戦していきます。</p>
                </div>
                <div class="intro-item__right">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/works/works-img02.png" alt="">
                </div>
              </div>
            </li>
            <li class="intro-item" data-aos="fade-up" data-aos-duration="1500">
              <div class="intro-item__inner">
                <div class="intro-item__left">
                  <div class="intro-item__num">03</div>
                  <h3 class="intro-item__ttl">事務</h3>
                  <h3 class="intro-item__text">総合人材サービスに伴う各種サポート事務職です。営業アシスタント、総務事務、経理事務など部署により様々な業務があります。</h3>
                </div>
                <div class="intro-item__right">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/works/works-img03.png" alt="">
                </div>
              </div>
            </li>
        </ul>
      </div>
    </section>
	</main>
	<!-- footer================================================== -->
  <?php get_footer(); ?>
  <!--各ページ固有のjsを読み込む-->
  <script src="<?php bloginfo('template_url'); ?>/assets/js/works.js"></script>
