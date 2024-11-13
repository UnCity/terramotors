<?php

/**
 * Template Name: お問い合わせ Contact
 */
get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="article p-form">

    <?php get_sidebar('header'); ?>

    <!-- //// PAGE TITLE START //// -->

    <div class="c-pageTitle">
        <div class="l-wrapper">

            <h1><?php the_title(); ?></h1>

        </div>
    </div>

    <!-- //// PAGE TITLE END //// -->

    <?php get_template_part('template-parts/common/breadcrumbs'); ?>

    <div class="column_1">

        <!-- //// MAIN CONTENT START //// -->

        <main role="main" class="l-page__main">

            <!-- CONTENTS START -->
            <section class="l-sec">


                <div class="l-wrapper">
                    <!-- エディターエリア START   editor area START-->
                    <div class="">

                        <?php the_content(); ?>

                    </div>
                    <!-- エディターエリア END  editor area END-->
                </div>


            </section>
            <!-- CONTENTS END -->

        </main>

        <!-- //// MAIN CONTENT END //// -->

    </div>


    <?php get_sidebar('footer'); ?>

</div>

<!-- //// ALL END //// -->


<?php
get_footer();
