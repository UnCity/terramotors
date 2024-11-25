<?php

get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-about">

    <?php get_sidebar('header'); ?>

    <!-- //// PAGE TITLE START //// -->
	<div class="c-pageTitle-large">
        <div class="c-pageTitle-large__bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/esg/fv.jpg" alt="ESG"></div>
		<div class="l-wrapper">
			<h1 class="c-pageTitle-large__en">ESG</h1>
			<p class="c-pageTitle-large__ja">ESG経営</p>
        </div>
		<div class="c-pageTitle-large__bg" 
		style="
			position: absolute;
			top: 50px;
			left: 0;
			width: 100%;
			height: calc(100% - 50px);
			object-fit: cover;">
			<source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/esg/coming-soon.png" sizes="">
			<source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/esg/coming-soon-sp.png" sizes="">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/esg/coming-soon.png" alt="Coming soon">
		</div>
	</div>
    <!-- //// PAGE TITLE END //// -->

    <?php get_template_part('template-parts/common/breadcrumbs'); ?>


	<?php get_template_part('template-parts/parts/cta'); ?>
    <?php get_sidebar('footer'); ?>

</div>

<!-- //// ALL END //// -->


<?php
get_footer();
