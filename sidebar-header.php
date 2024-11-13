<!-- //// HEADER START //// -->

<header class="l-header">

  <div class="l-header__inner">

    <!-- 会社名ロゴ company logo-->
    <?php if (is_front_page()) : ?>
      <h1 class="l-header__logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/logo.png" alt="<?php bloginfo(); ?>">
        </a>
      </h1>
    <?php else : ?>
      <div class="l-header__logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/logo.png" alt="<?php bloginfo(); ?>">
        </a>
      </div>
    <?php endif; ?>

    <!-- ハンバーガーボタン  hamburger button-->
    <div class="l-headerToggle" id="toggle">
      <span class="l-headerToggle__bar top"></span>
      <span class="l-headerToggle__bar bottom"></span>
    </div>

    <!-- ナビゲーション navigation-->
    <div class="drawer_bg" id="drawer_layer"></div>
    <nav class="l-header-nav">
      <ul class="l-header-nav__list">
        <li class="l-header-nav__item switching">
          <a href="/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/common/logo.png" alt="<?php bloginfo(); ?>"></a>
        </li>
        <li class="l-header-nav__item"><a href="<?php echo esc_url(home_url('/about/')); ?>" class="">About Us</a></li>
        <li class="l-header-nav__item"><a href="<?php echo esc_url(home_url('/business/')); ?>" class="">Business</a></li>
        <li class="l-header-nav__item"><a href="<?php echo esc_url(home_url('/case-study/')); ?>" class="">Case Study</a></li>
        <li class="l-header-nav__item"><a href="<?php echo esc_url(home_url('/career/')); ?>" class="">Career</a></li>
        <li class="l-header-nav__item"><a href="<?php echo esc_url(home_url('/library/')); ?>" class="">Library</a></li>
        <li class="l-header-nav__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="">Contact</a></li>
        <li class="l-header-nav__item switching"><a href="<?php echo esc_url(home_url('/news/')); ?>" class="">News</a></li>
        <li class="l-header-nav__item switching"><a href="<?php echo esc_url(home_url('/press/')); ?>" class="">Press</a></li>
      </ul>
    </nav>
  </div>

  <div class="l-header__inner --sub u-hide_less_spc">
    <ul class="l-header-nav__list --sub">
      <li class="l-header-nav__item"><a href="<?php echo esc_url(home_url('/news/')); ?>" class="">News</a></li>
      <li class="l-header-nav__item"><a href="<?php echo esc_url(home_url('/press/')); ?>" class="">Press</a></li>
    </ul>
  </div>

</header>

<!-- //// HEADER END //// -->