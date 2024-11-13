<?php

get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="article">

    <?php get_sidebar('header'); ?>

    <!-- //// PAGE TITLE START //// -->

    <div class="c-pageTitle">
        <div class="l-wrapper">

            <h1><?php the_title(); ?></h1>

        </div>
    </div>

    <!-- //// PAGE TITLE END //// -->

    <?php get_template_part('template-parts/common/breadcrumbs'); ?>

    <div class="l-page">

        <!-- //// MAIN CONTENT START //// -->

        <main role="main" class="l-page__main">

            <!-- CONTENTS START -->
            <section class="l-sec">


                <div class="l-wrapper">
                    <!-- エディターエリア editor area START -->
                    <div class="editor">

                        <?php
                        the_content();

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">PAGE:',
                                'after' => '</div>',
                            )
                        );
                        ?>

                    </div>
                    <!-- エディターエリア editor area END -->
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
