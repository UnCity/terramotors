<?php

get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-brand-story">

    <?php get_sidebar('header'); ?>

    <!-- //// PAGE TITLE START //// -->
	<div class="c-pageTitle-large">
        <div class="c-pageTitle-large__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-story/fv.png" alt="ブランドストーリー"></div>
		<div class="l-wrapper">
			<h1 class="c-pageTitle-large__en"><?php the_title(); ?></h1>
			<p class="c-pageTitle-large__ja">ブランドストーリー</p>
			<p class="c-pageTitle-large__txt">テラモーターズは、「日本発、世界一」を自らの手で。をモットーに日本発グローバルブランド<br>として日本の遺伝子をローカルチームと融合し続けることで独自のカルチャーを醸成してきました。</p>
        </div>
      </div>
    <!-- //// PAGE TITLE END //// -->

    <?php get_template_part('template-parts/common/breadcrumbs'); ?>

    <div class="column_1">

        <!-- //// MAIN CONTENT START //// -->

        <main role="main" class="l-page__main">
			<!-- Manifesto START -->
			<section class="p-brand-story__manifesto l-sec --bgImage">
				<div class="c-ttlBox">
					<span class="c-ttl">Manifesto</span>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<h2 class="c-ttl02">未来への宣言</h2>
					<p>EVの開発をはじめたのは、2010年。この技術が秘める力に気づいた私たちは、<br>EVを活かして人の可能性を引きだすことに挑戦してきました。</p>
					<p>EVの力で、何ができるのだろう。環境への負荷を減らすのはもちろんのこと、<br>それ以上の価値をもたらせる信じています。</p>
					<p>私たちが最初に取り組んだのは、アジアの新興国におけるモビリティの電動化です。<br>	
					現地では深刻な貧困や機会不足、大気汚染に悩まされながら暮らす人たちを目の当たりにしました。<br>
					そこで、日本の最先端技術やノウハウを生かしながら、耐久性に優れ、手頃な価格で手に入れられるEVを開発。<br>
					より多くの人にとって身近にするために、<br>手元に資金がなくても購入できるようなマイクロファイナンスシステムを構築。<br>
					その先、新たな職の機会を手に入れて、<br>人生を劇的に変えることに成功した人たちが次々と生まれていったのです。</p>
					<p>このエコシステムが発端となり、私たちはあらゆる可能性を探り始めました。<br>商業用のEVを通じて、世界のリーディングカンパニーとともによりよい連鎖を生み出せないか。<br>大気汚染の影響を受けている開発途上国に住むすべての人にとって、もっと暮らしやすい環境を実現できないか。<br>EV産業を盛り上げることで、可能性を秘める世界中の人が活躍できる場を創出できないか。</p>
					<p>人類はこれまで、人や地球を害する数々の過ちをおかしてきました。<br>
					しかし人間は、過去から学び、過ちを正すという唯一無二の力ももっています。<br>
					EVは、その一歩目を踏みだす有益な方法だと信じています。<br>
					世界をよりよい場所にしたいと願うすべての人と手を重ねて。<br>
					人や社会を前進させる革新的な技術や仕組みを、創造しつづけます。</p>
				</div>
			</section>
			<!-- Manifesto END -->

			<!-- Vision START -->
			<section class="p-brand-story__vision l-sec">
				<div class="c-ttlBox">
					<h2 class="c-ttl">Vision</h2>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<p class="p-brand-story__ttl-large">機会と変革の連鎖で、<br>進化しつづける世界。</p>
				</div>
			</section>
			<!-- Vision END -->

			<!-- Mission START -->
			<section class="p-brand-story__mission l-sec --bgImage">
				<div class="c-ttlBox">
					<h2 class="c-ttl">Mission</h2>
				</div>
				<div class="l-wrapper c-slideup init d_50">
					<p class="p-brand-story__ttl-large">EVの力を、<br class="u-hide_pc">人の可能性に。</p>
					<h2 class="c-ttl02">Brand Visual Identity</h2>
					<p>テラモーターズのブランドビジュアルは、「テラDNA」を象徴する小さな粒子が、分断された壁をどんどん越えて流れ込むイメージから生まれました。製造と金融の分野、貧富の差、先進国と途上国、ガソリン車からEVへのシフトなど、さまざまな領域を粒子が自由に行き来しながら、今の時代に必要なものへと変化していきます。</p>
					<p>この新しい「有機体」となったテラモーターズは、人と地球が共に生きるための新しいエコシステムを創り出していきます。世界をもっと良い場所にしたいと願う全ての人と一緒に、人や社会を前進させる革新的な技術や仕組みを生み出し続けます。</p>
					<div class="p-brand-story__mission-img c-slideup init d_50"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand-story/misson_imgs.png" alt="EVの力を、人の可能性に。"></div>
				</div>
			</section>
			<!-- Mission END -->

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
