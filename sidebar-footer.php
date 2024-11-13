<!-- //// FOOTER START //// -->
<footer class="l-footer">

  <div class="l-wrapper">

    <div class="l-footer__cont">
      <!-- 会社名ロゴ  company logo-->
      <div class="l-footer__left">
        <div class="l-footer__left-logo">
          <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/logo.png" alt="<?php bloginfo(); ?>"></a>
        </div>
        <div class="l-footer__left-sns u-mt_10">
          <ul>
            <li><a href="" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/facebook.svg" alt="facebook"></a></li>
            <li><a href="" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/x.svg" alt="X"></a></li>
            <li><a href="" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/youtube.svg" alt="Youtube"></a></li>
          </ul>
        </div>
      </div>

      <span class="border"></span>

      <!-- サイトマップ  sitemap-->
      <div class="l-footer__right">

        <ul class="l-footer__list">
          <li class="l-footer__item">
            <span>私たちについて</span>
            <ul>
              <li><a href="<?php echo esc_url(home_url('/about/')); ?>">Terra Mottorsについて</a></li>
              <li><a href="<?php echo esc_url(home_url('/brand-story/')); ?>">ブランドストーリー</a></li>
              <li><a href="<?php echo esc_url(home_url('/esg/')); ?>">ESG経営について</a></li>
            </ul>
          </li>
          <li class="l-footer__item">
            <span>事業内容</span>
            <ul>
              <li><a href="<?php echo esc_url(home_url('/ev3/')); ?>">EV3輪事業</a></li>
              <li><a href="<?php echo esc_url(home_url('/technology-business/')); ?>">テック事業</a></li>
              <li><a href="<?php echo esc_url(home_url('/microfinance-business/')); ?>">マイクロファイナンス事業</a></li>
            </ul>
          </li>
          <li class="l-footer__item">
            <span>ケーススタディ</span>
            <ul>
              <li><a href="<?php echo esc_url(home_url('/customer-story/')); ?>">商用ドライバー</a></li>
              <li><a href="<?php echo esc_url(home_url('/business-collaboration/')); ?>">ビジネスセクター</a></li>
              <li><a href="<?php echo esc_url(home_url('/initiatives-with-governments/')); ?>">政府との取り組み</a></li>
            </ul>
          </li>
          <li class="l-footer__item --sub">
            <ul>
              <li><a href="<?php echo esc_url(home_url('/recruit/')); ?>">採用</a></li>
              <li><a href="<?php echo esc_url(home_url('/library/')); ?>">ライブラリー</a></li>
              <li><a href="<?php echo esc_url(home_url('/press/')); ?>">プレス</a></li>
              <li><a href="<?php echo esc_url(home_url('/news/')); ?>">ニュース</a></li>
              <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
              <li><a class="mini" href="<?php echo esc_url(home_url('/privacy/')); ?>">プライバシー・ポリシー</a></li>
            </ul>
          </li>
        </ul>

      </div>
    </div>


    <!-- ドキュメントリンク document link -->
    <section class="l-footer__copyright">

      <p>© Terra Motors / All right reserved.</p>

    </section>
  </div>

</footer>
<!-- //// FOOTER END //// -->

<div class="c-fixedBg">
    <picture>
      <source media="(min-width: 769px)" data-srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/page-bg.jpg" sizes="">
      <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/page-bg-sp.jpg" sizes="">
      <img src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/common/page-bg.jpg" alt="背景画像" class="lazyload">
    </picture>
</div>