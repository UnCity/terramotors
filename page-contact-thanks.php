<?php 
/**
 * Template Name: お問い合わせ Contact Thanks
 */
get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-contact-thanks l-noBg">


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
                <div class="thanks-box">
                    <h3>お問い合わせありがとうございます。</h3>
                    <p>内容をご確認させていただき折り返し担当者より<br>
                    ご連絡をいたしますのでしばらくお待ち下さい。</p>
                    <p>数日経って弊社よりご連絡がなかった場合、<br>
                    お手数ではございますがお電話、またはお問い合わせにて<br>
                    再度ご連絡ください。</p>
                    <a href="" class="c-btn c-btn--back">BACK</a>
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
