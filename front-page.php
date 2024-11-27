<?php get_header(); ?>


<!-- //// ALL START //// -->

<div id="container" class="p-front">


  <?php get_sidebar('header'); ?>

  <div class="l-page">

    <!-- //// MAIN CONTENT START //// -->

    <main role="main" class="l-page__main">


      <!-- 1st View START -->
      <div class="p-front__fv">
        <div class="p-front__fv__image">
          <!-- pc版 -->
          <video playsinline autoplay muted poster="<?php echo get_template_directory_uri(); ?>/assets/img/front/poster.jpg" loop class="p-front__fv__image-video" id="js-video-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/front/mv.mp4"></video>
          
          <div class="p-front__fv__image-img u-hide_sp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front/mv-mask.png" alt="ファーストビューイメージ">
          </div>
        </div>
        <div class="p-front__fv__cont l-wrapper">
          <div class="p-front__fv__box">
            <h2>Plug Into the Future</h2>
            <p class="u-mt_20">最先端のテクノロジーで世界をリードし、<br class="u-hide_pc">人類と地球のより良い未来を創造する。</p>
          </div>
        </div>
      </div>
      <!-- 1st View END -->

      <!-- Service START -->
      <section class="p-front__service l-sec --bgImage">

        <div class="c-ttlBox">
          <h2 class="c-ttl">Service</h2>
        </div>

        <div class="l-wrapper">

          <ul class="p-front__service__list">
            <li class="p-front__service__item --ev c-slideup init d_50">
              <a href="./ev-three-wheel-business/">
                <span class="p-front__service__item-subttl">EV Three-Wheel Business</span>
                <h3 class="p-front__service__item-ttl"><span>EV3</span>輪事業</h3>
                <p class="p-front__service__item-text">
                  日本のモビリティ技術を基礎にしたEV製造によって、新興国でのモビリティ革命を起こします。<br>
                  未来の交通インフラを形作る、耐久性・価格帯・耐久性を備えた車両ラインナップを開発しています。
                </p>
              </a>
            </li>
            <li class="p-front__service__item --tech c-slideup init d_50">
              <a href="./technology-business/">
                <span class="p-front__service__item-subttl">Technology Business</span>
                <h3 class="p-front__service__item-ttl">テック事業</h3>
                <p class="p-front__service__item-text">
                  日本のモビリティ技術を基礎にしたEV製造によって、新興国でのモビリティ革命を起こします。<br>
                  未来の交通インフラを形作る、耐久性・価格帯・耐久性を備えた車両ラインナップを開発しています。
                </p>
              </a>
            </li>
            <li class="p-front__service__item --micro c-slideup init d_50">
              <a href="./microfinance-business/">
                <span class="p-front__service__item-subttl">Microfinance Business</span>
                <h3 class="p-front__service__item-ttl">マイクロファイナンス事業</h3>
                <p class="p-front__service__item-text">
                  当社のマイクロファイナンスソリューションによって、誰もがEV自動車にアクセスし、利用できる世界を目指し、持続可能な交通手段として生活の質の向上を享受できることを保証します。
                </p>
              </a>
            </li>
          </ul>

        </div>

      </section>
      <!-- Service END -->

      <!-- ESG START -->
      <section class="p-front__esg l-">

        <div class="c-ttlBox --flex">
          <h2 class="c-ttl --wh">ESG</h2>
          <p class="--wh">Environmental, <br>Social, <br>and Governance</p>
        </div>

        <div class="l-wrapper c-slideup init d_50">

          <a href="./esg/" class="p-front__esg__box">
            <div class="p-front__esg__box-ttl">
              <h3>
                サステナブルな<br>
                未来のために
              </h3>
              <p>For a sustainable future</p>
            </div>
            <div class="p-front__esg__box-cont">
              <p>
                より環境にやさしい未来のために。<br>
                当社の事業における環境持続可能性への取り組みと<br>
                ESG (環境、社会、ガバナンス) 原則の遵守についてご紹介します。
              </p>
            </div>
          </a>

        </div>

      </section>
      <!-- ESG END -->

      <!-- Case Study START -->
      <section class="p-front__case l-sec --bgImage">

        <?php get_template_part('template-parts/parts/case-study'); ?>

        <div class="p-front__case__logo case-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide p-front__case__logo-block">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front/logos.png" alt="CASE STUDY LOGO">
            </div>
            <div class="swiper-slide p-front__case__logo-block">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front/logos.png" alt="CASE STUDY LOGO">
            </div>
          </div>
        </div>

      </section>
      <!-- Case Study END -->

      <!-- Newsroom START -->
      <section class="p-front__news l-sec">

        <div class="c-ttlBox">
          <h2 class="c-ttl">News<br class="u-hide_more_sp">room</h2>
        </div>

        <div class="l-wrapper c-slideup init d_50">

          <div class="p-front__news__box">
            <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) : ?>

              <ul class="c-articleList textend_dots">
                <?php while ($query->have_posts()) {
                  $query->the_post();
                  get_template_part('template-parts/article/post01');
                } ?>
              </ul>

              <div class="u-text-center">
                <a href="./news/" class="c-btn">read more</a>
              </div>

            <?php else : ?>

              <p class="u-text-center">まだ関連の投稿はありません。</p><!-- No related posts yet. -->

            <?php endif;
            wp_reset_query(); ?>
          </div>

        </div>

      </section>
      <!-- News END -->

      <!-- Other START -->
      <section class="p-other l-sec --bgImage">

        <div class="l-wrapper">

          <div class="c-column c-slideup init d_50">
            <div class="c-column__image">
              <img src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/front/about.jpg" alt="About Us" class="lazyload obj_image">
            </div>
            <div class="c-column__cont">
              <h2 class="c-column__cont-ttl">EVを通じて<br class="u-hide_more_sp">解き放つ。</h3>
                <p class="c-column__cont-text">テラモーターズの秘話をご覧ください。当社の使命、価値観、そしてよりクリーンで明るい未来に向けて当社を牽引する情熱的なチームについて学んでください。</p>
                <a href="./about/" class="c-btn">read more</a>
            </div>
          </div>

          <div class="c-column --reverse u-mt_80 c-slideup init d_50">
            <div class="c-column__image">
              <img src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/front/carrers.jpg" alt="Carrers" class="lazyload obj_image">
            </div>
            <div class="c-column__cont">
              <h2 class="c-column__cont-ttl">無限の機会と変化の世界。</h3>
                <p class="c-column__cont-text">モビリティの未来を形作る私たちの仕事に加わってください。刺激的なキャリア チャンスを探求し、世界に良い影響を与えることに専念するダイナミックなチームの一員になりましょう。</p>
                <a href="./career/" class="c-btn">Join Us</a>
            </div>
          </div>

        </div>

      </section>
      <!-- News END -->

      <?php get_template_part('template-parts/parts/cta'); ?>


    </main>
    <!-- //// MAIN CONTENT END //// -->

  </div>


  <?php get_sidebar('footer'); ?>


</div>

<!-- //// ALL END //// -->

<?php get_footer(); ?>