<?php get_header(); ?>


<!-- //// ALL START //// -->

<div id="container" class="p-front">


  <?php get_sidebar('header'); ?>

  <div class="l-page">

    <!-- //// MAIN CONTENT START //// -->

    <main role="main" class="l-page__main">


      <!-- 1st View START -->
      <div class="p-front__fv top-swiper">
        <div class="p-front__image">
          <video class="p-front__image-video" poster="poster.jpg" loop muted autoplay playsinline>
            <source src="video.webm" type="video/webm">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/img/front/video.mp4" type="video/mp4">
          </video>
          <div class="p-front__image-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/front/mv-mask.png" alt="ファーストビューイメージ">
          </div>
        </div>
        <div class="p-front__cont l-wrapper">
          <h2>Plug Into the Future</h2>
          <p>最先端のテクノロジーで世界をリードし、人類と地球のより良い未来を創造する。</p>
        </div>
      </div>
      <!-- 1st View END -->

      <!-- Service START -->
      <section class="l-sec c-slideup init d_50">
        
        <div class="c-ttlBox">
          <h2 class="c-ttl">Service</h2>
        </div>

        <div class="l-wrapper">

          <ul class="p-front__service__list">
            <li class="p-front__service__item">
              <div>
                <span class="p-front__service__item-subttl">EV Three-Wheel Business</span>
                <h3 class="p-front__service__item-ttl">EV3<span>輪事業</span></h3>
                <p class="p-front__service__item-text">
                  日本のモビリティ技術を基礎にしたEV製造によって、新興国でのモビリティ革命を起こします。<br>
                  未来の交通インフラを形作る、耐久性・価格帯・耐久性を備えた車両ラインナップを開発しています。
                </p>
              </div>
            </li>
            <li class="p-front__service__item">
              <div>
                <span class="p-front__service__item-subttl">Technology Business</span>
                <h3 class="p-front__service__item-ttl">テック事業</h3>
                <p class="p-front__service__item-text">
                  日本のモビリティ技術を基礎にしたEV製造によって、新興国でのモビリティ革命を起こします。<br>
                  未来の交通インフラを形作る、耐久性・価格帯・耐久性を備えた車両ラインナップを開発しています。
                </p>
              </div>
            </li>
            <li class="p-front__service__item">
              <div>
                <span class="p-front__service__item-subttl">Microfinance Business</span>
                <h3 class="p-front__service__item-ttl">マイクロファイナンス事業</h3>
                <p class="p-front__service__item-text">
                  当社のマイクロファイナンスソリューションによって、誰もがEV自動車にアクセスし、利用できる世界を目指し、持続可能な交通手段として生活の質の向上を享受できることを保証します。
                </p>
              </div>
            </li>
          </ul>

        </div>

      </section>
      <!-- Service END -->

      <!-- ESG START -->
      <section class="l-sec c-slideup init d_50">

        <div class="c-ttlBox">
          <h2 class="c-ttl">ESG</h2>
          <p>Environmental, <br>Social, <br>and Governance</p>
        </div>

        <div class="l-wrapper">

          <div class="p-front__esg__box">
            <div class="p-front__esg__box-ttl">
              <h3>
                サステナブルな<br>
                未来のために
              </h3>
              <p>For a sustainable future</p>
            </div>
            <div class="p-front__esg__box-ttl">
              <p>
                より環境にやさしい未来のために。<br>
                当社の事業における環境持続可能性への取り組みと<br>
                ESG (環境、社会、ガバナンス) 原則の遵守についてご紹介します。
              </p>
            </div>
          </div>

        </div>

      </section>
      <!-- ESG END -->

      <!-- Case Study START -->
      <section class="l-sec c-slideup init d_50">
        
        <div class="c-ttlBox">
          <h2 class="c-ttl">Case Study</h2>
        </div>

        <div class="l-wrapper">

          <p>
          テラモーターズは、エンドユーザーであるドライバーだけでなく、<br>
          政府やビジネスセクターとの戦略的提携により、社会的価値、インパクトを生み出す<br>
          EVエコシステムの構築に挑戦しています。
          </p>

          <ul class="p-front__case__list">
            <li class="p-front__case__item">
              <div class="p-front__case__item-box">
                <p class="p-front__case__item-subttl">Customer’s Story</p>
                <h3 class="p-front__case__item-ttl">お客様の声</h3>
                <p class="p-front__case__item-text">
                  商用EVとマイクロファイナンスの組み合わせによって、新興国における低所得者の生活水準の向上に取り組んでいます。
                </p>
              </div>
            </li>
            <li class="p-front__case__item">
              <div class="p-front__case__item-box">
                <p class="p-front__case__item-subttl">Business Collaboration</p>
                <h3 class="p-front__case__item-ttl">法人との取り組み</h3>
                <p class="p-front__case__item-text">
                  B2Bにおける戦略的提携は、革新的なビジネスシナジーによって、産業課題を解決しています。
                </p>
              </div>
            </li>
            <li class="p-front__case__item">
              <div class="p-front__case__item-box">
                <p class="p-front__case__item-subttl">Initiatives with Governments</p>
                <h3 class="p-front__case__item-ttl">政府との取り組み</h3>
                <p class="p-front__case__item-text">
                  政府機関との緊密な連携により、新興国におけるEVエコシステムを構築し、地域浸透戦略を実施することで、EVを人々にとってより身近な交通インフラへと進化させています。
                </p>
              </div>
            </li>
          </ul>

        </div>

      </section>
      <!-- Service END -->

      <!-- お知らせ START News START -->
      <!-- /news/index.htmlにあるブログ一覧と同じもの↓, ul.list_articleのsassは_wp.scssで定義 same as blog list in /news/index.html↓, ul.list_article sass defined in _wp.scss -->
      <section class="l-sec c-slideup init d_50">

        <article class="l-wrapper">

          <h2 class="c-ttl">お知らせ</h2><!-- h2 = Information -->

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
              <a href="<?php echo esc_url(home_url('/news')); ?>" class="c-btn">もっとみる</a><!-- See more -->
            </div>

          <?php else : ?>

            <p class="u-text-center">まだ関連の投稿はありません。</p><!-- No related posts yet. -->

          <?php endif;
          wp_reset_query(); ?>

        </article>

      </section>
      <!-- お知らせ END news end -->


      <!-- ブログ START blog start-->
      <!-- /blog/index.htmlにあるブログ一覧と同じもの↓, div.list_article_gridのsassは_wp.scssで定義 same as the blog list in /blog/index.html ↓, sass for div.list_article_grid defined in _wp.scss -->
      <section class="l-sec p-front__blog">

        <article class="l-wrapper">

          <h2 class="c-ttl">ブログ</h2><!-- h2 = blog -->

          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3
          );
          $query = new WP_Query($args);
          if ($query->have_posts()) : ?>

            <div class="c-articleGrid">

              <?php while ($query->have_posts()) {
                $query->the_post();
                get_template_part('template-parts/article/post02');
              } ?>

            </div>

            <div class="u-text-center">
              <a href="<?php echo esc_url(home_url('/blog')); ?>" class="c-btn">もっとみる</a>
            </div>

          <?php else : ?>

            <p class="u-text-center">まだ関連の投稿はありません。</p>

          <?php endif;
          wp_reset_query(); ?>

        </article>

      </section>
      <!-- ブログ blog END -->



      <!-- よくあるご質問 FAQ START -->
      <section class="l-sec" id="faq">

        <article class="l-wrapper">

          <h2 class="c-ttl">よくあるご質問</h2>

          <p class="u-mb_30">よくあるご質問を入れるページにはFAQ page用のJSON-LDを作成してください。Please create a JSON-LD for the FAQ page for the page containing frequently asked questions.<br>
            JSON-LDジェネレータ JSON-LD Generator >>> <a href="https://technicalseo.com/tools/schema-markup-generator/" target="_blank" style="color: blue;">https://technicalseo.com/tools/schema-markup-generator/</a><br>
            作成したJSON-LDは&lt;/body&gt;の前あたりに配置してください。The created JSON-LD should be placed around before the &lt;/body&gt;.<br>
            <span style="color: red;">※ FAQのテキスト変更があった場合はJSON-LDの変更も忘れずに！Don't forget to change the JSON-LD if you change the text in the FAQ!</span>
          </p>

          <dl class="c-faq accordion">
            <dt>
              <span>質問</span>
              <p>質問タイトル、質問タイトル、質問タイトル、質問タイトル、question</p>
            </dt>
            <dd>
              <div class="detail">
                <span>回答</span>
                <p>回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、answer</p>
              </div>
            </dd>
            <dt>
              <span>質問</span>
              <p>質問タイトル、質問タイトル、質問タイトル、質問タイトル、</p>
            </dt>
            <dd>
              <div class="detail">
                <span>回答</span>
                <p>回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、</p>
              </div>
            </dd>
            <dt>
              <span>質問</span>
              <p>質問タイトル、質問タイトル、質問タイトル、質問タイトル、</p>
            </dt>
            <dd>
              <div class="detail">
                <span>回答</span>
                <p>回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、回答テキスト、</p>
              </div>
            </dd>
          </dl>

        </article>

      </section>
      <!-- よくあるご質問 FAQ END -->


    </main>
    <!-- //// MAIN CONTENT END //// -->

  </div>


  <?php get_template_part('template-parts/parts/breadcrumbs'); ?>


  <?php get_sidebar('footer'); ?>


</div>

<!-- //// ALL END //// -->

<?php get_footer(); ?>