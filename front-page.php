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
          <video playsinline autoplay muted poster="<?php echo get_template_directory_uri(); ?>/assets/img/front/poster.jpg" loop class="p-front__fv__image-video pc-video u-hide_sp" id="js-video-pc" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/front/mv.mp4"></video>

          <!-- sp版 -->
          <video playsinline autoplay muted poster=".<?php echo get_template_directory_uri(); ?>/assets/img/front/poster-sp.jpg" loop class="sp-video u-hide_pc" id="js-video-sp" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/front/mv-sp.mp4"></video>
          
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
              <a>
                <span class="p-front__service__item-subttl">EV Three-Wheel Business</span>
                <h3 class="p-front__service__item-ttl"><span>EV3</span>輪事業</h3>
                <p class="p-front__service__item-text">
                  日本のモビリティ技術を基礎にしたEV製造によって、新興国でのモビリティ革命を起こします。<br>
                  未来の交通インフラを形作る、耐久性・価格帯・耐久性を備えた車両ラインナップを開発しています。
                </p>
              </a>
            </li>
            <li class="p-front__service__item --tech c-slideup init d_50">
              <a>
                <span class="p-front__service__item-subttl">Technology Business</span>
                <h3 class="p-front__service__item-ttl">テック事業</h3>
                <p class="p-front__service__item-text">
                  日本のモビリティ技術を基礎にしたEV製造によって、新興国でのモビリティ革命を起こします。<br>
                  未来の交通インフラを形作る、耐久性・価格帯・耐久性を備えた車両ラインナップを開発しています。
                </p>
              </a>
            </li>
            <li class="p-front__service__item --micro c-slideup init d_50">
              <a>
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

          <a class="p-front__esg__box">
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

        <div class="c-ttlBox">
          <h2 class="c-ttl">Case Study</h2>
        </div>

        <div class="l-wrapper">

          <p class="p-front__case__lead c-slideup init d_50">
            テラモーターズは、エンドユーザーであるドライバーだけでなく、<br class="u-hide_sp">
            政府やビジネスセクターとの戦略的提携により、社会的価値、インパクトを生み出す<br>
            EVエコシステムの構築に挑戦しています。
          </p>

          <ul class="p-front__case__list">
            <li class="p-front__case__item --cs c-slideup init d_50">
              <a class="p-front__case__item-box">
                <p class="p-front__case__item-subttl">Customer’s Story</p>
                <h3 class="p-front__case__item-ttl">お客様の声</h3>
                <p class="p-front__case__item-text">
                  商用EVとマイクロファイナンスの組み合わせによって、新興国における低所得者の生活水準の向上に取り組んでいます。
                </p>
              </a>
            </li>
            <li class="p-front__case__item --bc c-slideup init d_50">
              <a class="p-front__case__item-box">
                <p class="p-front__case__item-subttl">Business Collaboration</p>
                <h3 class="p-front__case__item-ttl">法人との取り組み</h3>
                <p class="p-front__case__item-text">
                  B2Bにおける戦略的提携は、革新的なビジネスシナジーによって、産業課題を解決しています。
                </p>
              </a>
            </li>
            <li class="p-front__case__item --ig c-slideup init d_50">
              <a class="p-front__case__item-box">
                <p class="p-front__case__item-subttl">Initiatives with Governments</p>
                <h3 class="p-front__case__item-ttl">政府との取り組み</h3>
                <p class="p-front__case__item-text">
                  政府機関との緊密な連携により、新興国におけるEVエコシステムを構築し、地域浸透戦略を実施することで、EVを人々にとってより身近な交通インフラへと進化させています。
                </p>
              </a>
            </li>
          </ul>

        </div>

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
              <h2 class="c-column__cont-ttl">EVを通じて人々の力を解き放つ。</h3>
                <p class="c-column__cont-text">テラモーターズの秘話をご覧ください。当社の使命、価値観、そしてよりクリーンで明るい未来に向けて当社を牽引する情熱的なチームについて学んでください。</p>
                <a href="" class="c-btn">read more</a>
            </div>
          </div>

          <div class="c-column --reverse u-mt_80 c-slideup init d_50">
            <div class="c-column__image">
              <img src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/front/carrers.jpg" alt="Carrers" class="lazyload obj_image">
            </div>
            <div class="c-column__cont">
              <h2 class="c-column__cont-ttl">無限の機会と変化の世界。</h3>
                <p class="c-column__cont-text">モビリティの未来を形作る私たちの仕事に加わってください。刺激的なキャリア チャンスを探求し、世界に良い影響を与えることに専念するダイナミックなチームの一員になりましょう。</p>
                <a href="" class="c-btn">Join Us</a>
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