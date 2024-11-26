<?php

get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-casestudy --collaboration">

    <?php get_sidebar('header'); ?>

    <!-- //// PAGE TITLE START //// -->

	<div class="c-pageTitle-large">
        <div class="c-pageTitle-large__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/business-collaboration/fv.png" alt="法人との取り組み"></div>
		<div class="l-wrapper">
			<p class="c-pageTitle-large__subttl">Case Study</p>
			<h1 class="c-pageTitle-large__en">Business Collaboration</h1>
			<p class="c-pageTitle-large__ja">法人との取り組み</p>
			<p class="c-pageTitle-large__txt">テラモーターズでは、インドの輸送インフラの改善やEV浸透の促進を目的に、<br>B2Bにおけるコラボレーションを積極的に実施することで、社会的インパクトを創出しています。</p>
        </div>
    </div>

	  <!-- //// PAGE TITLE END //// -->

    <?php get_template_part('template-parts/common/breadcrumbs'); ?>

	<!-- //// MAIN CONTENT START //// -->

	<main role="main" class="l-page__main">
		<!-- Finance START -->
		<section class="p-casestudy__story l-sec --bgImage">
			<div class="c-ttlBox">
				<span class="c-ttl">collaboration</span>
			</div>
			<div class="l-wrapper c-slideup init d_50">
				<div class="c-set01">
					<div class="c-set01__txt">
						<h2 class="p-casestudy__story-large-ttl">東インド最大のパンメーカー、Moreish社と業務提携</h2>
						<p class="p-casestudy__story-sub-ttl">Terra Motors EV三輪が<br class="u-hide_sp">デリバリーサービスのエリア拡大をサポート</p>
						<p class="p-casestudy__story-txt">モーリッシュ・フーズは1989年にジャールカンド州ランチに設立され、30年以上にわたりインド東部でパン製造とベーカリー事業を展開しています。<br class="u-hide_sp">自社所有の工場で製造から流通までを管理し、ヨーロッパ製と日本製の工場設備を使用。品質検査を定期的に行い、効率的な流通網を構築して、インド東部で広く知られるリーディングカンパニーです。</p>
						<p class="p-casestudy__story-txt">モーリッシュ・フーズ社では、4つの自社製造拠点から20km以内のラストワンマイルデリバリー対応、及びエリアの小売店への配送に活用するため、全4工場への導入を実施しました。<br class="u-hide_sp">初回の車体導入数は、350台予定であり、今回の業務提携を通し、拡大する宅配ニーズに今後もテラモーターズとモーリッシュ・フーズ社は戦略的パートナーとして、全国のお客様の利便性向上に努めてまいります。</p>
						<p class="p-casestudy__story-btn c-btn"><a href="#" class="c-btn__link" alt="詳細を見る">Read More</a></p>
					</div>
					<div class="c-set01__img">
						<figure>
							<img class="lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/business-collaboration/collaboration01.jpg" alt="Terra Motors L3ローダーモデル 企業カスタムモデル">
							<figcaption>Terra Motors L3ローダーモデル 企業カスタムモデル</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</section>
		<!-- Finance END -->

		<!-- Contact START -->
		<div class="p-cta p-cta--bg">
			<div class="c-ttlBox">
				<h2 class="c-ttl --wh">Contact</h2>
			</div>
			<div class="l-wrapper">
				<div class="p-cta__cont">
					<p class="p-cta__ttl">お問い合わせ</p>
					<p class="p-cta__text">B2Bコラボレーションに関するご相談</p>
					<p class="p-cta__button"><a href="<?php echo esc_url(home_url('contact')); ?>" class="c-btn --wh" alt="お問い合わせフォームへ">Contact Form</a></p>
					<p class="p-cta__mail"><a href="mailto:info.in@terramotors.co.jp" id="js-mailContact02" alt="メールでのお問い合わせ">info.in@terramotors.co.jp</a></p>
				</div>
			</div>
		</div>
		<!-- Contact END -->

		<?php get_template_part('template-parts/parts/ecosystem'); ?>

		<!-- Case Study START -->
		<section class="p-casestudy__case l-sec --bgImage">
			<div class="c-ttlBox">
				<h2 class="c-ttl">Collaborators</h2>
			</div>
			<div class="l-wrapper">
				<p class="p-casestudy__case-lead c-slideup init d_50">その他の取り組み</p>
				<ul class="p-front__case__list">
					<li class="p-front__case__item --cs c-slideup init d_50">
						<a href="<?php echo home_url(); ?>/customers-story/" class="p-front__case__item-box">
						<p class="p-front__case__item-subttl">Customer's Story</p>
						<h3 class="p-front__case__item-ttl">商用ドライバーの声</h3>
						<p class="p-front__case__item-text">商用EVとマイクロファイナンスの組み合わせによって、新興国における低所得者の生活水準の向上に取り組んでいます。</p>
						</a>
					</li>
					<li class="p-front__case__item --ig c-slideup init d_50">
						<a href="<?php echo home_url(); ?>/initiatives-with-governments" class="p-front__case__item-box">
						<p class="p-front__case__item-subttl">Initiatives with Governments</p>
						<h3 class="p-front__case__item-ttl">政府との取り組み</h3>
						<p class="p-front__case__item-text">政府機関との緊密な連携により、新興国におけるEVエコシステムを構築し、地域浸透戦略を実施することで、EVを人々にとってより身近な交通インフラへと進化させています。</p>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<!-- Case Study END -->

		<?php get_template_part('template-parts/parts/logos'); ?>
		<?php get_template_part('template-parts/parts/cta'); ?>

	</main>

	<!-- //// MAIN CONTENT END //// -->

	<?php get_sidebar('footer'); ?>

</div>

<!-- //// ALL END //// -->

<?php get_footer(); ?>
