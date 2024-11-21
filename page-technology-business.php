<?php

get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-technology-business">

    <?php get_sidebar('header'); ?>

    <!-- //// PAGE TITLE START //// -->
	<div class="c-pageTitle-large">
        <div class="c-pageTitle-large__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/technology-business/fv.png" alt=""></div>
		<div class="l-wrapper">
			<h1 class="c-pageTitle-large__en"><?php the_title(); ?></h1>
			<p class="c-pageTitle-large__ja">テック事業</p>
			<p class="c-pageTitle-large__txt">IoT テクノロジーがどのように EV をグローバル ネットワークにシームレスに統合し、接続性、効率性<br>を強化し、スマート モビリティの未来を推進するかを探ります。</p>
        </div>
      </div>
    <!-- //// PAGE TITLE END //// -->

    <?php get_template_part('template-parts/common/breadcrumbs'); ?>

    <div class="column_1">

        <!-- //// MAIN CONTENT START //// -->

        <main role="main" class="l-page__main">
			<!-- Technology START -->
			<section class="p-technology-business__technology l-sec">
				<div class="c-ttlBox">
					<h2 class="c-ttl">Technology</h2>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<h2 class="c-ttl02">テクノロジーで繋ぐ</h2>
					<p>IoTやアプリ開発によって、<br>ドライバーやビジネスオーナーがリスクを低減し、より稼げる仕組みを提供します。</p>
				</div>
			</section>
			<!-- Technology END -->

			<!-- IoT START -->
			<section class="p-technology-business__iot l-sec">
				<div class="c-ttlBox">
					<h2 class="c-ttl">IoT</h2>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<div class="c-set01">
						<div class="c-set01__txt">
							<h2 class="c-ttl02">IoT搭載</h2>
							<p>EV3輪の車体にはIoTを設置しています。ダッシュボード上でドライバーの運行情報やローン返済状況を理することで、返済率の向上に貢献しています。</p>
						</div>
						<div class="c-set01__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/technology-business/iot01.jpg" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- IoT END -->

			<!-- Apps START -->
			<section class="p-technology-business__apps l-sec">
				<div class="c-ttlBox">
					<h2 class="c-ttl">Apps</h2>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<div class="c-set01">
						<div class="c-set01__txt">
							<h2 class="c-ttl02">Apps</h2>
							<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
						</div>
						<div class="c-set01__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/technology-business/apps01.jpg" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- Apps END -->

			<!-- Why START -->
			<section class="p-technology-business__why l-sec">
				<div class="c-ttlBox">
					<h2 class="c-ttl">Why Terra Motors?</h2>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<ul class="c-list__why">
						<li class="c-list__why-item">
							<div class="c-list__why-item-ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ev3/ico_why01.png" alt=""></div>
							<div class="c-list__why-item-cont">
								<h3 class="c-ttl02">顧客体験の向上</h3>
								<p class="c-list__why-item-txt">テラモーターズは、ユーザーとテックで繋がることでアフターケアの提供を実現しています。これは、新興国で一般的な「売り切りモデル」に対する課題に対応するためであり、ドライバーが車体の故障時に安心してサポートを受けられる日本ブランドならではの強みとして提供しています。</p>
							</div>
						</li>
						<li class="c-list__why-item">
							<div class="c-list__why-item-ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ev3/ico_why02.png" alt=""></div>
							<div class="c-list__why-item-cont">
								<h3 class="c-ttl02">ROIの最大化</h3>
								<p class="c-list__why-item-txt">IoTとアプリケーションを活用した稼働状況の一元管理により、ビジネスオーナーはドライバーの稼働率を最適化。ドライバーは、最寄りのEV充電所の案内や故障時の迅速なサポートを受けられるため、一日のパフォーマンスを向上しています。</p>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- Why END -->

			<?php get_template_part('template-parts/parts/logos'); ?>

        </main>
        <!-- //// MAIN CONTENT END //// -->
</div>
	<?php get_template_part('template-parts/parts/cta'); ?>
    <?php get_sidebar('footer'); ?>

</div>

<!-- //// ALL END //// -->


<?php
get_footer();
