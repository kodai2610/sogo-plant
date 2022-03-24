
<?php get_header() ?>
<!-- main ================================================-->
<main id="entry">
	<!-- essentials ================================================-->
	<section class="essentials">
		<div class="essentials-inner">
			<h2 class="essentials-ttl" data-aos="fade-up" data-aos-duration="1500">
				<span class="essentials-ttl__square"></span>
				<p class="essentials-ttl__area"><?php the_title(); ?></p>
				<p class="essentials-ttl__text">エリアの募集要項</p>
			</h2>
			<table class="essentials-table" data-aos="fade-up" data-aos-duration="1500">
				<tbody class="essentials-table-body">
					<tr class="essentials-table-row">
						<td class="essentials-table-row__ttl">
							<p class="essentials-table-row__ttl__text">勤務地</p>
						</td>
						<td class="essentials-table-row__desc">
							<div class="essentials-table-row__desc__inner">
								<p class="essentials-table-row__desc__text"><?php the_field('勤務地'); ?></p>
							</div>
						</td>
					</tr>
					<tr class="essentials-table-row">
						<td class="essentials-table-row__ttl">
							<p class="essentials-table-row__ttl__text">資格</p>
						</td>
						<td class="essentials-table-row__desc">
							<div class="essentials-table-row__desc__inner">
								<p class="essentials-table-row__desc__text"><?php the_field('資格'); ?></p>
							</div>
						</td>
					</tr>
					<tr class="essentials-table-row">
						<td class="essentials-table-row__ttl">
							<p class="essentials-table-row__ttl__text">給与</p>
						</td>
						<td class="essentials-table-row__desc">
							<div class="essentials-table-row__desc__inner">
								<p class="essentials-table-row__desc__text"><?php the_field('給与'); ?></p>
							</div>
						</td>
					</tr>
					<tr class="essentials-table-row">
						<td class="essentials-table-row__ttl">
							<p class="essentials-table-row__ttl__text">勤務時間</p>
						</td>
						<td class="essentials-table-row__desc">
							<div class="essentials-table-row__desc__inner">
								<p class="essentials-table-row__desc__text"><?php the_field('勤務時間'); ?></p>
							</div>
						</td>
					</tr>
					<tr class="essentials-table-row">
						<td class="essentials-table-row__ttl">
							<p class="essentials-table-row__ttl__text">休日・休暇</p>
						</td>
						<td class="essentials-table-row__desc">
							<div class="essentials-table-row__desc__inner">
								<p class="essentials-table-row__desc__text"><?php the_field('休日・休暇'); ?></p>
							</div>
						</td>
					</tr>
					<tr class="essentials-table-row">
						<td class="essentials-table-row__ttl">
							<p class="essentials-table-row__ttl__text">待遇・福利厚生</p>
						</td>
						<td class="essentials-table-row__desc">
							<div class="essentials-table-row__desc__inner">
								<p class="essentials-table-row__desc__text"><?php the_field('待遇・福利厚生'); ?></p>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</section>
	<!-- entry-form ================================================-->
	<section class="entry-form">
		<div class="entry-form-inner">
			<div class="entry-form-cont">
				<h2 class="entry-form-ttl cmn-ttl02" data-aos="fade-up" data-aos-duration="1500">
					<p class="entry-form-ttl__text cmn-ttl02__text">エントリーフォーム</p>
					<div class="entry-form-ttl__img cmn-ttl02__img">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/entry/entry-form.png" alt="タイトル">
					</div>
				</h2>
				<p class="entry-form-desc" data-aos="fade-up" data-aos-duration="1500">
					募集要項の内容に基づき、エントリーを受け付けております。
					下記の項目は、全て入力必須です。
				</p>
				<div class="entry-form-wrap">
					<div class="entry-form-content">
						<form class="entry-form-form" action="/form.php" method="post">
						<?php echo do_shortcode('[mwform_formkey key="64"]'); ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- footer================================================== -->
<?php get_footer(); ?>