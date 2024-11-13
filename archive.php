<?php get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="article p-edit">


	<?php get_sidebar('header'); ?>


	<!-- //// PAGE TITLE START //// -->
	<!-- H1 = NEWS ARCHIVE -->

	<div class="c-pageTitle">

		<h1>ニュース一覧</h1>

	</div>

	<!-- //// PAGE TITLE END //// -->


	<div class="l-page--column_2">

		<!-- //// MAIN CONTENT START //// -->

		<main role="main" class="l-page__main">

			<!-- CONTENTS START -->


			<!-- 投稿一覧（リスト型、文末3点リーダー）List of posts (list type, 3-point leader at end of sentence)  -->
			<section class="l-sec">

				<article class="l-wrapper">
					<?php if (have_posts()) : ?>
						<ul class="c-articleList textend_dots">
							<?php while (have_posts()) {
								the_post();
								get_template_part('template-parts/article/post01');
							} ?>
						</ul>
					<?php else : ?>
						<p class="u-text-center">まだ関連の投稿はありません。</p>
					<?php endif; ?>

				</article>

				<!-- PAGER START -->
				<?php get_template_part('template-parts/common/paginate'); ?>
				<!-- PAGER END -->

			</section>



		</main>

		<!-- //// MAIN CONTENT END //// -->

		<?php get_sidebar(); ?>

	</div>

	<?php get_template_part('template-parts/parts/breadcrumbs'); ?>


	<?php get_sidebar('footer'); ?>


</div>

<!-- //// ALL END //// -->


<?php get_footer(); ?>
