<?php

get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-casestudy --governments">

    <?php get_sidebar('header'); ?>

    <!-- //// PAGE TITLE START //// -->
	<div class="c-pageTitle-large">
        <div class="c-pageTitle-large__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/governments/fv.png" alt="政府との取り組み"></div>
		<div class="l-wrapper">
			<p class="c-pageTitle-large__subttl">Case Study</p>
			<h1 class="c-pageTitle-large__en"><?php the_title(); ?></h1>
			<p class="c-pageTitle-large__ja">政府との取り組み</p>
			<p class="c-pageTitle-large__txt">テラモーターズでは、インドの輸送インフラの改善やEV浸透の促進を目的に、<br>B2Bにおけるコラボレーションを積極的に実施することで、社会的インパクトを創出しています。</p>
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
					<span class="c-ttl">Governments</span>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<div class="c-set01">
						<div class="c-set01__txt">
							<h2 class="p-casestudy__story-large-ttl">この文章はダミーです<br class="u-hide_sp">この文章はダミーです</h2>
							<p class="p-casestudy__story-sub-ttl">この文章はダミーですこの文章はダミーです<br class="u-hide_sp">この文章はダミーですこの文章はダミーです</p>
							<p class="p-casestudy__story-txt">この文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーです<br class="u-hide_sp">この文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーです</p>
							<p class="p-casestudy__story-txt">この文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーですこの文章はダミーです</p>
							<p class="p-casestudy__story-btn c-btn"><a href="#" class="c-btn__link">Read More</a></p>
						</div>
						<div class="c-set01__img">
							<figure>
								<img class="lazyload obj_image" src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/governments/governments01.jpg" alt="政府との取り組み">
								<figcaption>この文章はダミーですこの文章はダミーです</figcaption>
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
                        <p class="p-cta__text">コラボレーションに関するご相談</p>
                        <p class="p-cta__button"><a href="<?php echo home_url(); ?>/contact/" class="c-btn --wh">Contact Form</a></p>
                        <p class="p-cta__mail"><a href="" id="js-mailContact02">xxxxx</a></p>
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
						<li class="p-front__case__item --bc c-slideup init d_50">
							<a href="<?php echo home_url(); ?>/business-collaboration/" class="p-front__case__item-box">
							<p class="p-front__case__item-subttl">Business Collaboration</p>
							<h3 class="p-front__case__item-ttl">法人との取り組み</h3>
							<p class="p-front__case__item-text">B2Bにおける戦略的提携は、革新的なビジネスシナジーによって、産業課題を解決しています。</p>
							</a>
						</li>
					</ul>
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
