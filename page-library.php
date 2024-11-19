<?php get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-library l-noBg">


	<?php get_sidebar('header'); ?>


	<!-- //// PAGE TITLE START //// -->
	<!-- H1 = NEWS ARCHIVE -->

	 <div class="c-pageTitle">
        <div class="l-wrapper">

            <h1><?php the_title(); ?></h1>
            <p>製品動画、製品写真</p>

        </div>
    </div>


	<!-- //// PAGE TITLE END //// -->

    <?php get_template_part('template-parts/common/breadcrumbs'); ?>

    <!-- //// MAIN CONTENT START //// -->

    <main role="main" class="l-page__main">

        <!-- CONTENTS START -->
        <section class="l-sec">
            <div class="c-ttlBox">
                <h2 class="c-ttl">Product</h2>
            </div>

            <div class="l-wrapper">
                <div class="p-library__product">
                    <h2 class="c-ttl01">製品</h2>
                    <div class="c-libraryList">
                        <div class="c-card">
                            <a href="">
                                <div class="c-card__image">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/library/dummy.jpg" alt="L5">
                                </div>
                                <div class="c-card__desc">
                                    <p class="c-card__desc-name">L5</p>
                                    <p class="c-card__desc-icon">Download</p>
                                </div>
                            </a>
                        </div>
                        <div class="c-card">
                            <a href="">
                                <div class="c-card__image">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/library/dummy.jpg" alt="Y4A">
                                </div>
                                <div class="c-card__desc">
                                    <p class="c-card__desc-name">Y4A</p>
                                    <p class="c-card__desc-icon">Download</p>
                                </div>
                            </a>
                        </div>
                        <div class="c-card">
                            <a href="">
                                <div class="c-card__image">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/library/dummy.jpg" alt="Y4A Pro">
                                </div>
                                <div class="c-card__desc">
                                    <p class="c-card__desc-name">Y4A Pro</p>
                                    <p class="c-card__desc-icon">Download</p>
                                </div>
                            </a>
                        </div>
                        <div class="c-card">
                            <a href="">
                                <div class="c-card__image">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/library/dummy.jpg" alt="L5 Loader">
                                </div>
                                <div class="c-card__desc">
                                    <p class="c-card__desc-name">L5 Loader</p>
                                    <p class="c-card__desc-icon">Download</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-library__management">
                    <h2 class="c-ttl01">マネジメント</h2>
                    <div class="c-libraryList">
                        <div class="c-card">
                            <a href="">
                                <div class="c-card__image">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/library/dummy.jpg" alt="上田 晃裕">
                                </div>
                                <div class="c-card__desc">
                                    <p class="c-card__desc-name">上田 晃裕 | CEO</p>
                                    <p class="c-card__desc-icon">Download</p>
                                </div>
                            </a>
                        </div>
                        <div class="c-card">
                            <a href="">
                                <div class="c-card__image">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/library/dummy.jpg" alt="Brandbook">
                                </div>
                                <div class="c-card__desc">
                                    <p class="c-card__desc-name">Brandbook</p>
                                    <p class="c-card__desc-icon">Download</p>
                                </div>
                            </a>
                        </div>
                        <div class="c-card">
                            <a href="">
                                <div class="c-card__image">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/library/dummy.jpg" alt="Photo Gallery">
                                </div>
                                <div class="c-card__desc">
                                    <p class="c-card__desc-name">Photo Gallery</p>
                                    <p class="c-card__desc-icon">Download</p>
                                </div>
                            </a>
                        </div>
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
