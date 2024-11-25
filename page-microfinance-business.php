<?php

get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-microfinance">

    <?php get_sidebar('header'); ?>

    <!-- //// PAGE TITLE START //// -->
	<div class="c-pageTitle-large">
        <div class="c-pageTitle-large__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/microfinance-business/fv.png" alt="マイクロファイナンス事業"></div>
		<div class="l-wrapper">
			<h1 class="c-pageTitle-large__en">Microfinance Business</h1>
			<p class="c-pageTitle-large__ja">マイクロファイナンス事業</p>
			<p class="c-pageTitle-large__txt">新興国では、主に地方や低所得者層が金融融資を受けられず、貧困から抜け出すきっかけが少なく、<br class="u-hide_sp">
			貧困による負のサイクルから抜け出す事が困難です。テラモーターズは、この層がEV3輪をマイクロファイナンスで購入することで、稼ぐきっかけを提供しています。</p>
        </div>
      </div>
    <!-- //// PAGE TITLE END //// -->

    <?php get_template_part('template-parts/common/breadcrumbs'); ?>

    <div class="column_1">

        <!-- //// MAIN CONTENT START //// -->

        <main role="main" class="l-page__main">
			<!-- microfinance START -->
			<section class="p-microfinance__micro l-sec --bgImage">
				<div class="c-ttlBox">
					<span class="c-ttl">microfinance</span>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<h2 class="c-ttl02">新興国経済の真実。持続可能な成長の仕組み</h2>
					<p class="p-microfinance__micro-txt">アフリカとインドには、ローンや金融サービスへのアクセスが難しい人が多くいます。2021年時点で、アフリカ大陸では成人のおよそ57%（約3億5千万人）が銀行口座を持っておらず、主に非公式な経済活動に依存しています。インドでは、2022年の推計で約19%（約2億4千万人）の成人が金融機関と繋がりを持たず、主に地方や低所得層に集中しています。</p>
					<div class="p-microfinance__micro-video">
						<video playsinline="" controls="" src="<?php echo get_template_directory_uri(); ?>/assets/img/microfinance-business/movie.mp4"></video>
					</div>
				</div>
			</section>
			<!-- microfinance END -->

			<!-- Finance START -->
			<section class="p-microfinance__finance l-sec">
				<div class="c-ttlBox">
					<span class="c-ttl">Finance</span>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<div class="c-set01">
						<div class="c-set01__txt">
							<h2 class="c-ttl02">融資</h2>
							<p>過去に信用履歴がない地方在住者や低所得者に対して、800ドルから1,000ドルの少額融資を提供しています。</p>
						</div>
						<div class="c-set01__img">
							<img class="lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/microfinance-business/finance01.jpg" alt="融資">
						</div>
					</div>
				</div>
			</section>
			<!-- Finance END -->

			<!-- EV mobility START -->
			<section class="p-microfinance__evmobility l-sec">
				<div class="c-ttlBox">
					<span class="c-ttl">EV mobility</span>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<div class="c-set01">
						<div class="c-set01__txt">
							<h2 class="c-ttl02">EV3輪</h2>
							<p>EV3輪の車体にはIoTを設置しています。ダッシュボード上でドライバーの運行情報やローン返済状況を理することで、返済率の向上に貢献しています。</p>
						</div>
						<div class="c-set01__img">
							<img class="lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/microfinance-business/evmobility01.jpg" alt="EV3輪">
						</div>
					</div>
				</div>
			</section>
			<!-- EV mobility END -->

			<!-- IoT START -->
			<section class="p-microfinance__iot l-sec --bgImage">
				<div class="c-ttlBox">
					<span class="c-ttl">IoT</span>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<div class="c-set01">
						<div class="c-set01__txt">
							<h2 class="c-ttl02">IoT搭載</h2>
							<p>EV車体へIoTを搭載し、ソフトウェアで一元管理することで、ドライバーの返済能力のモニタリングを実施しリスクを低減しています。</p>
						</div>
						<div class="c-set01__img">
							<img class="lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/microfinance-business/lot01.jpg" alt="IoT搭載">
						</div>
					</div>
				</div>
			</section>
			<!-- IoT END -->

			<!-- Why START -->
			<section class="p-microfinance__why l-sec">
				<div class="c-ttlBox">
					<h2 class="c-ttl">Why Terra Motors?</h2>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<ul class="c-list__why">
						<li class="c-list__why-item">
							<div class="c-list__why-item-ico"><img src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/microfinance-business/ico_why01.png" alt="顧客体験の向上" class="lazyload obj_image"></div>
							<div class="c-list__why-item-txt">
								<h3 class="c-ttl02">顧客体験の向上</h3>
								<p>テラモーターズは、ユーザーとテックで繋がることでアフターケアの提供を実現しています。これは、新興国で一般的な「売り切りモデル」に対する課題に対応するためであり、ドライバーが車体の故障時に安心してサポートを受けられる日本ブランドならではの強みとして提供しています。</p>
							</div>
						</li>
						<li class="c-list__why-item">
							<div class="c-list__why-item-ico"><img src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/microfinance-business/ico_why02.png" alt="ROIの最大化" class="lazyload obj_image"></div>
							<div class="c-list__why-item-txt">
								<h3 class="c-ttl02">ROIの最大化</h3>
								<p>IoTとアプリケーションを活用した稼働状況の一元管理により、ビジネスオーナーはドライバーの稼働率を最適化。ドライバーは、最寄りのEV充電所の案内や故障時の迅速なサポートを受けられるため、一日のパフォーマンスを向上しています。</p>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- Why END -->

			<!-- Environment START -->
			<section class="p-microfinance__environment l-sec">
				<div class="c-ttlBox">
					<span class="c-ttl">Environment</span>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<h2 class="c-ttl02">生活向上に寄与</h2>
					<div class="p-microfinance__environment-list">
						<div class="p-microfinance__environment-item">
							<h3 class="p-microfinance__environment-item-ttl">累計販売台数</h3>
							<p class="p-microfinance__environment-item-num"><span class="num">6500</span><span class="plus">＋</span>件</p>
						</div>
						<div class="p-microfinance__environment-item">
							<h3 class="p-microfinance__environment-item-ttl">貸付額</h3>
							<p class="p-microfinance__environment-item-num"><span class="num">350万</span><span class="en">USD</span></p>
						</div>
						<div class="p-microfinance__environment-item is-large">
							<h3 class="p-microfinance__environment-item-ttl">はじめてローンを借りるドライバー</h3>
							<p class="p-microfinance__environment-item-num"><span class="num">50％</span><span class="plus">＋</span></p>
							<p class="p-microfinance__environment-item-txt">NTC(New To Credit：新規信用取引 )の割合</p>
							<div class="c-btn --wh"><a href="<?php echo home_url(); ?>/esg/" class="c-btn__link">ESGレポートを見る</a></div>
						</div>
					</div>
				</div>
			</section>
			<!-- Environment END -->

			<?php get_template_part('template-parts/parts/ecosystem'); ?>

			<!-- Case Study START -->
			<section class="p-microfinance__case l-sec --bgImage">
				<?php get_template_part('template-parts/parts/case-study'); ?>
			</section>
			<!-- Case Study END -->

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
