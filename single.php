<?php get_header(); ?>
<!-- //// ALL START //// -->

<div id="container" class="p-article p-edit">


	<?php get_sidebar('header'); ?>


	<!-- //// PAGE TITLE START //// -->

	<div class="c-pageTitle">

		<p>ブログの記事</p><!-- BLOG Posts-->

	</div>

	<!-- //// PAGE TITLE END //// -->


	<div class="l-page--column_2 l-wrapper">

		<!-- //// MAIN CONTENT START //// -->

		<main role="main" class="l-page__main">


			<!-- CONTENTS START -->
			<section class="l-sec">

				<article class="l-wrapper">

					<!-- ARTICLE DITAIL START -->
					<div class="c-articleHead">

						<!-- サムネイル  thumbnail-->
						<?php if (has_post_thumbnail()) : ?>
							<div class="c-articleHead__thum">
								<img class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
							</div>
						<?php endif; ?>

						<!-- タイトル   title-->
						<h1 class="c-articleHead__ttl"><?php the_title(); ?></h1>

						<!-- 日時・カテゴリ  Date, time, and category -->
						<ul class="c-articleHead__info">
							<li class="c-articleDay"><?php echo get_the_date(); ?></li>
							<?php
							$cats = get_the_category();
							if ($cats) {
								echo '<li><ul class="c-articleCgy">';
								foreach ($cats as $cat) {
									echo '<li><a href="' . get_category_link($cat) . '">' . $cat->name . '</a></li>';
								}
								echo '</ul></li>';
							}
							?>
						</ul>

					</div>
					<!-- ARTICLE DITAIL END -->


					<!-- エディターエリア START  editor area START -->
					<div class="editor">

						<?php the_content(); ?>

					</div>
					<!-- エディターエリア END    editor area END-->

				</article>


				<!-- タグ START  TAG START -->
				<ul class="c-articleTag">
					<?php get_template_part('template-parts/article/taglist'); ?>
				</ul>
				<!-- タグ END  TAG END -->

				<!-- SNSシェア START  SNS SHARE START-->
				<div class="c-shareBox">
					<div class="c-shareBox__bg u-mt_20">
						<ul class="c-shareBox__list">
							<li>
								<p class="text_share">Share On</p>
							</li>
							<li>
								<!-- ★★★URL★★★に現在ページURL、★★★URL★★★に現在ページタイトルを挿入   Insert the current page URL in ★★★URL★★★ and the current page title in ★★URL★★★. -->
								<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/icon_twitter.svg" alt="twitter" class="icon_twitter">
								</a>
							</li>
							<li>
								<!-- ★★★URL★★★に現在ページURL   Current page URL in ★★URL★★★★-->
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/icon_facebook.svg" alt="facebook" class="icon_facebook">
								</a>
							</li>
							<li>
								<!-- ★★★URL★★★に現在ページURL    Current page URL in ★★URL★★★★-->
								<a href="http://line.me/R/msg/text/?<?php the_permalink(); ?>" target="_blank">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/icon_line.svg" alt="Line" class="icon_line">
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- SNSシェア START  SNS SHARE START -->

				<div class="c-articleNav">
					<!-- 前後の記事リンク START   Back and forth article links START -->
					<ul class="c-articleNav__transfer">
						<li>
							<?php
							$prev_post = get_previous_post();
							if (!empty($prev_post)) {
								echo '<a href="' . get_permalink($prev_post->ID) . '">前の記事</a>';
							}
							?>
						</li>
						<li>
							<a href="<?php echo esc_url(home_url('/news/')); ?>">一覧に戻る</a>
						</li>
						<li>
							<?php
							$next_post = get_next_post();
							if (!empty($next_post)) {
								echo '<a href="' . get_permalink($next_post->ID) . '">次の記事</a>';
							}
							?>
						</li>
					</ul>
					<!-- 前後の記事リンク END  Back and forth article links END -->

				</div>

			</section>


		</main>

		<!-- //// MAIN CONTENT END //// -->


		<!-- //// SIDE CONTENT START //// -->

		<?php get_sidebar(); ?>

		<!-- //// SIDE CONTENT END //// -->

	</div>

	<?php get_template_part('template-parts/parts/breadcrumbs'); ?>


	<?php get_sidebar('footer'); ?>


</div>

<!-- //// ALL END //// -->


<?php get_footer(); ?>
