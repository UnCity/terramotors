<?php get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-newsroom article p-edit l-noBg">


	<?php get_sidebar('header'); ?>


	<!-- //// PAGE TITLE START //// -->
	<!-- H1 = NEWS ARCHIVE -->

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
            <div class="c-ttlBox">
                <h2 class="c-ttl">Newsroom</h2>
            </div>

            <div class="p-newsroom__list">
                <div class="l-wrapper">
                    <div class="list-cate">
                        <ul>
                            <li><a href="<?php echo esc_url(home_url('/news/')); ?>">すべて</a></li>
                            <?php
                            $terms = get_terms(array(
                                'taxonomy' => 'category',
                                'hide_empty' => false,
                            ));

                            if (!empty($terms) && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    echo '<li><a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a></li>';
                                }
                            } else {
                                echo '<li>No categories found</li>';
                            }
                            ?>
                        </ul>
                    </div>
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

                </div>
                <!-- PAGER START -->
                <?php get_template_part('template-parts/common/paginate'); ?>
                <!-- PAGER END -->
            </div>

            <div class="p-cta p-cta--bg">
                <div class="c-ttlBox">
                    <h2 class="c-ttl">Contact</h2>
                </div>
                <div class="l-wrapper">
                    <div class="p-cta__cont">
                        <p class="p-cta__ttl">お問い合わせ</p>
                        <p class="p-cta__text">広報に関するご相談</p>
                        <p class="p-cta__button"><a href="" class="c-btn --wh">Contact Form</a></p>
                        <p class="p-cta__mail"><a href="" id="js-mailContact02">xxxxx</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- CONTENTS END -->

    </main>

    <!-- //// MAIN CONTENT END //// -->


	<?php get_sidebar('footer'); ?>


</div>

<!-- //// ALL END //// -->


<?php get_footer(); ?>
