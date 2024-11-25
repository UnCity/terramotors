<?php get_header(); ?>


<!-- //// ALL START //// -->

<!-- classにコンテンツディレクトリを付与する Assign content directory to class-->
<div id="container" class="article l-noBg">


	<?php get_sidebar('header'); ?>

	<!-- //// PAGE TITLE START //// -->

	<div class="c-pageTitle">
        <div class="l-wrapper">

            <h1>404</h1>
            <p>Not Found</p>

        </div>
    </div>

    <!-- //// PAGE TITLE END //// -->

	<div class="l-page">

		<!-- //// MAIN CONTENT START //// -->

		<main role="main" class="l-page__main">


			<!-- CONTENTS START -->
			<section class="l-sec">

				<article class="l-wrapper">

					<div class="c-basket__box p-notFound">

						<h2>404 File not found.</h2>

						<p>ページが見つかりませんでした。<br>お探しのページは、一時的にアクセスができない状態にあるか、<br>もしくは削除された可能性があります。</p>

						<a href="<?php echo esc_url(home_url()); ?>" class="c-btn">トップページに戻る</a>

					</div>

				</article>

			</section>
			<!-- CONTENTS END -->


		</main>

		<!-- //// MAIN CONTENT END //// -->

	</div>


	<?php get_sidebar('footer'); ?>

</div>

<!-- //// ALL END //// -->


<?php get_footer(); ?>
