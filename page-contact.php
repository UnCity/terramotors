<?php

/**
 * Template Name: お問い合わせ Contact
 */
get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-contact article p-form l-noBg">

    <?php get_sidebar('header'); ?>

    <!-- //// PAGE TITLE START //// -->

    <div class="c-pageTitle">
        <div class="l-wrapper">

            <h1>Contact</h1>
            <p>お問い合わせ</p>

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

                    <div class="p-contact__cont">
                        <!-- エディターエリア START   editor area START-->
                        <div class="">

                            <?php the_content(); ?>

                        </div>
                        <!-- エディターエリア END  editor area END-->

                        <div class="box-contact">
                            <div class="box-contact__top">
                                <p class="box-contact__top-head">お急ぎの場合は以下メールまたはお電話にてお問い合わせください。</p>
                                <p class="box-contact__top-desc">Email:<a href="" id="js-mailContact03"></a></p>
                            </div>
                            <div class="box-contact__bot">
                                <div class="box-contact__bot-item">
                                    <a href="">
                                        <p class="box-contact__sub">東京支社</p>
                                        <p class="box-contact__number">03-6823-4959</p>
                                        <p class="box-contact__txt">受付時間　平日9:00-18:00（日本時間）</p>
                                    </a>
                                </div>
                                <div class="box-contact__bot-item">
                                    <a href="">
                                        <p class="box-contact__sub">インド支社</p>
                                        <p class="box-contact__number">＋91-3340908200</p>
                                        <p class="box-contact__txt">受付時間　平日9:00-17:00（現地時間）</p>
                                        <p class="box-contact__note">インド現地時間は日本時間より−3.5時間</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

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
