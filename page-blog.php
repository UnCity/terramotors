<?php get_header(); ?>
<!-- //// ALL START //// -->

<div id="container" class="article p-edit">


	<!-- //// HEADER START //// -->

	<?php get_sidebar('header'); ?>

	<!-- //// HEADER END //// -->


	<!-- //// PAGE TITLE START //// -->

	<div class="c-pageTitle">

		<h1>記事一覧</h1><!-- Article List-->

	</div>

	<!-- //// PAGE TITLE END //// -->


	<div class="l-page--column_2">

		<!-- //// MAIN CONTENT START //// -->

		<main role="main" class="l-page__main">

			<!-- CONTENTS START -->



			<!-- ブログ一覧（3列） START Blog List (3 columns) start-->
			<section class="l-sec">

				<article class="l-wrapper">

					<?php
					$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
					$args = array(
						'post_type' => 'post',
						'paged' => $paged
					);
					$wp_query = new WP_Query($args);
					if ($wp_query->have_posts()) : ?>

						<div class="c-articleGrid">

							<?php while ($wp_query->have_posts()) {
								$wp_query->the_post();
								get_template_part('template-parts/article/post02');
							} ?>

						</div>

					<?php else : ?>

						<p class="u-text-center">まだ関連の投稿はありません。</p><!-- No related posts yet.-->

					<?php endif; ?>

				</article>

			</section>
			<!-- ブログ一覧（3列） END  Blog List (3 columns) end -->

			<!-- PAGER START -->
			<?php get_template_part('template-parts/common/paginate');
			wp_reset_query(); ?>
			<!-- PAGER END -->


		</main>

		<!-- //// MAIN CONTENT END //// -->


		<!-- //// SIDE CONTENT START //// -->

		<?php get_sidebar(); ?>

		<!-- //// SIDE CONTENT END //// -->

	</div>

	<?php get_template_part('template-parts/common/breadcrumbs'); ?>

	<?php get_sidebar('footer'); ?>

</div>

<!-- //// ALL END //// -->

<?php get_footer(); ?>
