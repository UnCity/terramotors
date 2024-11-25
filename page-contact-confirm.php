<?php 
/**
 * Template Name: お問い合わせ Contact Confirm
 */
get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-contact p-form l-noBg">


	<?php get_sidebar('header'); ?>


	<!-- //// PAGE TITLE START //// -->
	<!-- H1 = NEWS ARCHIVE -->

	 <div class="c-pageTitle">
        <div class="l-wrapper">

            <h1>Contact</h1>
            <p>お問い合わせ</p>

        </div>
    </div>


	<!-- //// PAGE TITLE END //// -->

    <?php get_template_part('template-parts/common/breadcrumbs'); ?>

    <!-- //// MAIN CONTENT START //// -->

    <main role="main" class="l-page__main">

        <!-- CONTENTS START -->
        <section class="l-sec">
            <div class="l-wrapper">
               <?php the_content(); ?>
            </div>
        </section>
        <!-- CONTENTS END -->

    </main>

    <!-- //// MAIN CONTENT END //// -->


	<?php get_sidebar('footer'); ?>


</div>

<!-- //// ALL END //// -->


<?php get_footer(); ?>
