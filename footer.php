<footer class="footer">
      <div class="footer-main">
        <div class="footer-inner">
          <div class="footer-left">
            <h2 class="footer-left__logo">
              <a href="<?php echo esc_url(home_url('')); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/common/logo-footer.png" alt="">
              </a>
            </h2>
            <div class="footer-left__place">
              本社所在地
              <br>
              〒154-0012
              <br>東京都世田谷区駒沢1-16-7　駒沢中村ビル
            </div>
            <div class="footer-left__links">
              <a href="https://www.sogo-plant.com/" target="_blank" class="footer-left__link">
                <div class="footer-left__link__img">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/index/part-footer.png" alt="">
                </div>
                <p class="footer-left__link__text">コーポレートサイト</p>
              </a>
              <a href="https://www.sogo-plant.com/privacy/" target="_blank" class="footer-left__link">
                <div class="footer-left__link__img">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/index/part-footer.png" alt="">
                </div>
                <p class="footer-left__link__text">プライバシーポリシー</p>
              </a>
            </div>
          </div>
          <div class="footer-right">
            <nav class="footer-right__nav">
              <ul class="footer-right__list01">
                <li class="footer-right__item">
                  <a href="<?php echo esc_url(home_url('/about/')); ?>" class="footer-right__link">私たちについて</a>
                </li>
                <li class="footer-right__item">
                  <a href="<?php echo esc_url(home_url('/works/')); ?>" class="footer-right__link">仕事紹介</a>
                </li>
                <li class="footer-right__item">
                  <a href="<?php echo esc_url(home_url('/person/')); ?>" class="footer-right__link">働く人</a>
                </li>
              </ul>
              <ul class="footer-right__list02">
                <li class="footer-right__item">
                  <a href="<?php echo esc_url(home_url('/culture/')); ?>" class="footer-right__link">働く環境</a>
                </li>
                <li class="footer-right__item">
                  <a href="<?php echo esc_url(home_url('/story/')); ?>" class="footer-right__link">ストーリー</a>
                </li>
                <li class="footer-right__item">
                  <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="footer-right__link">採用情報</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p class="footer-bottom__copy-write"> © 2022 SOGO PLANT Inc. ALL RIGHTS RESERVED.</p>
      </div>
    </footer>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- aos -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/aos.js"></script>
    <script>AOS.init();</script>
    <!-- slick CDN -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- common js -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/common.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>