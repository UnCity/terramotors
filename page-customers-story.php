<?php

get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-casestudy">

    <?php get_sidebar('header'); ?>

    <!-- //// PAGE TITLE START //// -->
	<div class="c-pageTitle-large --case">
        <div class="c-pageTitle-large__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/customers-story/fv.png" alt="<?php the_title(); ?>"></div>
		<div class="l-wrapper">
			<p class="c-pageTitle-large__subttl">Case Study</p>
			<h1 class="c-pageTitle-large__en">Customer’s Story</h1>
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
			<section class="p-casestudy__story l-sec --bgImage">
				<div class="c-ttlBox">
					<h2 class="c-ttl">Customer’s Story</h2>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<div class="c-set01">
						<div class="c-set01__txt">
							<h3 class="p-casestudy__story-ttl en">Story of<span class="large">Sushila</span></h3>
							<p class="p-casestudy__story-area">インド</p>
							<p class="p-casestudy__story-txt">シングルマザーのスシラさんは、野菜売りとして生計を立てていましたが、3人の子供を育てながら十分な収入を得ることが難しい状況にありました。<br>テラ・ファイナンスのサポートを通じてEV3輪車を購入したことで、彼女は月16,000ルピー（約3万円）の安定した収入を得るEVドライバーとして自立し、地域で唯一の女性ドライバーとして活躍しています。</p>
							<p class="p-casestudy__story-txt">安定した収入を得られるようになった今、スシラさんは子供たちを高校や大学に進学させるという新たな希望を抱いています。</p>
						</div>
						<div class="c-set01__img">
							<div class="p-casestudy__story-iframe">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/tT9oTKpUetg?si=2M9Dds-ac5U0WZzz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="c-set01 --reverse">
						<div class="c-set01__txt">
							<h3 class="p-casestudy__story-ttl en">Story of<span class="large">Lacky</span></h3>
							<p class="p-casestudy__story-area">インド</p>
							<p class="p-casestudy__story-txt">ラッキーの父親は屋台で生計を立て、母親は専業主婦としてハウスメーカーとしてラッキーを育ててきました。<br>経済的理由で進学が叶わなかったラッキーは、叔父の支援を受け、テラ・ファイナンスでローンを取り付け、EV3輪車を購入、商用3輪ドライバーとして収入を得るようになりました。</p>
							<p class="p-casestudy__story-txt">現在は、この収入で家現在は、この収入で家計を支えながら、弟の教育費も援助してしています。</p>
						</div>
						<div class="c-set01__img">
							<div class="p-casestudy__story-iframe">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/VPZiQsopN-U?si=VuypriximwJAWy20" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Finance END -->

			<?php get_template_part('template-parts/parts/ecosystem'); ?>

			<!-- Case Study START -->
			<section class="p-casestudy__case l-sec --bgImage">
				<div class="c-ttlBox">
					<h2 class="c-ttl">Collaborators</h2>
				</div>
				<div class="l-wrapper">
					<p class="p-casestudy__case-lead c-slideup init d_50">その他の取り組み</p>
					<ul class="p-front__case__list">
						<li class="p-front__case__item --bc c-slideup init d_50">
							<a href="<?php echo home_url(); ?>/business-collaboration/" class="p-front__case__item-box">
							<p class="p-front__case__item-subttl">Business Collaboration</p>
							<h3 class="p-front__case__item-ttl">法人との取り組み</h3>
							<p class="p-front__case__item-text">B2Bにおける戦略的提携は、革新的なビジネスシナジーによって、産業課題を解決しています。</p>
							</a>
						</li>
						<li class="p-front__case__item --ig c-slideup init d_50">
							<a href="<?php echo home_url(); ?>/initiatives-with-governments/" class="p-front__case__item-box">
							<p class="p-front__case__item-subttl">Initiatives with Governments</p>
							<h3 class="p-front__case__item-ttl">政府との取り組み</h3>
							<p class="p-front__case__item-text">政府機関との緊密な連携により、新興国におけるEVエコシステムを構築し、地域浸透戦略を実施することで、EVを人々にとってより身近な交通インフラへと進化させています。</p>
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
