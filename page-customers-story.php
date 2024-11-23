<?php

get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-customers-story">

    <?php get_sidebar('header'); ?>

    <!-- //// PAGE TITLE START //// -->
	<div class="c-pageTitle-large">
        <div class="c-pageTitle-large__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/customers-story/fv.png" alt=""></div>
		<div class="l-wrapper">
			<p class="c-pageTitle-large__subttl">Case Study</p>
			<h1 class="c-pageTitle-large__en"><?php the_title(); ?></h1>
			<p class="c-pageTitle-large__ja">商用ドライバーのサクセスストーリー</p>
			<p class="c-pageTitle-large__txt">テラモーターズのエンドユーザーは、EV3輪やカーゴの商用ドライバーです。<br>テラモーターズのEVエコシステムを活用して、成長をドライブさせた方々のストーリーをご紹介します。</p>
        </div>
      </div>
    <!-- //// PAGE TITLE END //// -->

    <?php get_template_part('template-parts/common/breadcrumbs'); ?>

    <div class="column_1">

        <!-- //// MAIN CONTENT START //// -->

        <main role="main" class="l-page__main">
			<!-- Finance START -->
			<section class="p-customers-story__Finance l-sec">
				<div class="c-ttlBox">
					<h2 class="c-ttl">Customer’s Story</h2>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<div class="c-set01">
						<div class="c-set01__txt">
							<h2 class="c-ttl02">Sushila</h2>
							<p>シングルマザーのスシラさんは、野菜売りとして生計を立てていましたが、3人の子供を育てながら十分な収入を得ることが難しい状況にありました。<br>テラ・ファイナンスのサポートを通じてEV3輪車を購入したことで、彼女は月16,000ルピー（約3万円）の安定した収入を得るEVドライバーとして自立し、地域で唯一の女性ドライバーとして活躍しています。</p>
							<p>安定した収入を得られるようになった今、スシラさんは子供たちを高校や大学に進学させるという新たな希望を抱いています。</p>
						</div>
						<div class="c-set01__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/customers-story/finance01.jpg" alt="">
						</div>
					</div>
					<div class="c-set01">
						<div class="c-set01__txt">
							<h2 class="c-ttl02">Lacky</h2>
							<p>ラッキーの父親は屋台で生計を立て、母親は専業主婦としてハウスメーカーとしてラッキーを育ててきました。<br>経済的理由で進学が叶わなかったラッキーは、叔父の支援を受け、テラ・ファイナンスでローンを取り付け、EV3輪車を購入、商用3輪ドライバーとして収入を得るようになりました。</p>
							<p>現在は、この収入で家計を支えながら、弟の教育費も援助してしています。</p>
						</div>
						<div class="c-set01__img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/customers-story/finance01.jpg" alt="">
						</div>
					</div>
				</div>
			</section>
			<!-- Finance END -->

			<?php get_template_part('template-parts/parts/ecosystem'); ?>

			<!-- Case Study START -->
			<section class="p-ev3__case-study l-sec --bgImage">
				<div class="c-ttlBox">
					<h2 class="c-ttl">Collaborators</h2>
				</div>
				<div class="l-wrapper">
					<p class="p-front__case__lead c-slideup init d_50">その他の取り組み</p>
					<ul class="p-front__case__list">
						<li class="p-front__case__item --cs c-slideup init d_50">
							<a class="p-front__case__item-box">
							<p class="p-front__case__item-subttl">Business Collaboration</p>
							<h3 class="p-front__case__item-ttl">法人との取り組み</h3>
							<p class="p-front__case__item-text">
							B2Bにおける戦略的提携は、革新的なビジネスシナジーによって、産業課題を解決しています。
							</p>
							</a>
						</li>
						<li class="p-front__case__item --ig c-slideup init d_50">
							<a class="p-front__case__item-box">
							<p class="p-front__case__item-subttl">Initiatives with Governments</p>
							<h3 class="p-front__case__item-ttl">政府との取り組み</h3>
							<p class="p-front__case__item-text">
							政府機関との緊密な連携により、新興国におけるEVエコシステムを構築し、地域浸透戦略を実施することで、EVを人々にとってより身近な交通インフラへと進化させています。
							</p>
							</a>
						</li>
					</ul>

					</div>
				</div>
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
