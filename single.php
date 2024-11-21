<?php get_header(); ?>
<!-- //// ALL START //// -->

<div id="container" class="p-newsroom article p-edit l-noBg">


	<?php get_sidebar('header'); ?>


	<!-- //// PAGE TITLE START //// -->

	<div class="c-pageTitle">
        <div class="l-wrapper">
            <h1>NEWSROOM</h1>
            <p>ニュース</p>
        </div>
	</div>  

	<!-- //// PAGE TITLE END //// -->

    <?php get_template_part('template-parts/common/breadcrumbs'); ?>

    <!-- //// MAIN CONTENT START //// -->

    <main role="main" class="l-page__main">

        <!-- CONTENTS START -->
        <section class="l-sec">
            <div class="l-wrapper">
                <div class="p-newsroomSingle">
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
                            <li class="c-articleDay"><?php echo get_the_date('Y.m.d'); ?></li>
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

                    <div class="c-articleNav">
                        <!-- 前後の記事リンク START   Back and forth article links START -->
                        <a href="<?php echo esc_url(home_url('/news/')); ?>" class="c-btn c-btn--back">BACK</a>
                        <!-- 前後の記事リンク END  Back and forth article links END -->

                    </div>
                </div>
            </div>
        </section>


    </main>

    <!-- //// MAIN CONTENT END //// -->


	<?php get_sidebar('footer'); ?>

</div>

<!-- //// ALL END //// -->


<?php get_footer(); ?>
