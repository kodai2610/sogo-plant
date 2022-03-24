<?php
/*
Template Name: thanks
*/
?>
<?php get_header(); ?>
	<!-- main ===================================================-->
	<main id="thanks">
		<section class="thanks">
			<div class="thanks-inner">
				<h2 class="thanks-ttl cmn-ttl02">
					<p class="thanks-ttl__text cmn-ttl02__text">応募完了</p>
					<div class="thanks-ttl__img cmn-ttl02__img">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/thanks/thanks.png" alt="タイトル">
					</div>
				</h2>
				<p class="thanks-text forPc">
					この度はご応募いただき、誠にありがとうございます。
					<br>
					受付完了メール（自動送信）を送信しましたので、ご確認ください。
				</p>
				<p class="thanks-text forSp">
					この度はご応募いただき、誠にありがとうございます。
					受付完了メール（自動送信）を送信しましたので、ご確認ください。
				</p>
			</div>
      <div class="thanks-box">
        <div class="thanks-box__cont">
          <p class="thanks-box__text forPc">
            万が一メールが届いてない場合、以下の原因が考えられます。
            <br>
            メールが届かない場合は恐れ入りますが、再度応募お願いします。
          </p>
          <p class="thanks-box__text forSp">
            万が一メールが届いてない場合、以下の原因が考えられます。
  メールが届かない場合は恐れ入りますが、再度応募お願いします。
          </p>
          <ul class="thanks-box__list">
            <li class="thanks-box__item">
              <span class="thanks-box__item__square"></span>
              <p class="thanks-box__item__text"> 入力されたメールアドレスに誤りがある可能性があります。</p>
            </li>
            <li class="thanks-box__item">
              <span class="thanks-box__item__square"></span>
              <p class="thanks-box__item__text">迷惑メールフォルダに振り分けられている可能性があります。</p>
            </li>
            <li class="thanks-box__item">
              <div class="thanks-box__item__square"></div>
              <p class="thanks-box__item__text">ドメイン設定受信を行っている可能性があります。○○○○○○○○○○ のドメイン受信設定を行ってください。</p>
            </li>
          </ul>
        </div>
        <a href="<?php echo esc_url(home_url('/entry/')); ?>" class="thanks-box__btn cmn-btn">
          ENTRY
        </a>
      </div>
		</section>
	</main>
	<!-- footer================================================== -->
  <?php get_footer(); ?>


