<?php get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-press">


  <?php get_sidebar('header'); ?>


  <!-- //// PAGE TITLE START //// -->
  <!-- H1 = NEWS ARCHIVE -->

  <div class="c-pageTitle">
    <div class="l-wrapper">

      <h1>Press</h1>
      <p>プレス</p>

    </div>
  </div>


  <!-- //// PAGE TITLE END //// -->

  <?php get_template_part('template-parts/common/breadcrumbs'); ?>

  <!-- //// MAIN CONTENT START //// -->

  <main role="main" class="l-page__main">

    <!-- CONTENTS START -->
    <section class="l-sec">
      <div class="c-ttlBox has-bg">
        <h2 class="c-ttl">Featured Stories</h2>
      </div>

      <?php if (have_rows('pickup')) : ?>
      <div class="p-press__story">
        <div class="l-wrapper">
          <h2 class="c-ttl01">注目のストーリー</h2>
          <div class="p-pressList">
              <?php while (have_rows('pickup')) : the_row(); $p = get_sub_field('pick_post'); ?>
                <div class="c-articleList__item">
                  <a href="<?php echo esc_url(get_the_permalink($p->ID)); ?>">
                    <?php if(get_the_terms($p->ID, 'category')) : ?>
                      <p class="c-articleList__cat"><span><?php echo esc_html(get_the_terms($p->ID, 'category')[0]->name); ?></span></p>
                    <?php endif; ?>
                    <h3><?php echo esc_html($p->post_title); ?></h3>
                  </a>
                </div>
              <?php endwhile; ?>
          </div>
        </div>
      </div>
      <?php endif; ?>

      <div class="p-press__news">
        <div class="c-ttlBox">
          <h2 class="c-ttl --wh">News</h2>
        </div>
        <div class="l-wrapper">

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
      </div>

      <div class="p-press__media">
        <div class="c-ttlBox">
          <h2 class="c-ttl">Media Kits </h2>
        </div>
        <div class="l-wrapper">
          <h2 class="c-ttl01">メディアキット</h2>
          <div class="c-libraryList">
            <?php if (have_rows('mediakits')) : ?>
              <?php while (have_rows('mediakits')) : the_row();
                if (!get_sub_field('text')) continue; ?>
                <div class="c-card">
                  <a href="<?php echo esc_url(get_sub_field('file')['url']); ?>" target="_blank">
                    <div class="c-card__image">
                      <?php
                      $image = get_template_directory_uri() . '/assets/img/library/dummy.jpg';
                      if (get_sub_field('image') && get_sub_field('image')['url']) {
                        $image = get_sub_field('image')['url'];
                      }
                      ?>
                      <img src="<?php echo esc_url($image); ?>" alt="<?php the_sub_field('text'); ?>">
                    </div>
                    <div class="c-card__desc">
                      <p class="c-card__desc-name"><?php the_sub_field('text'); ?></p>
                      <p class="c-card__desc-icon">Download</p>
                    </div>
                  </a>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="c-libraryList c-libraryList--2col">
            <div class="c-card">
              <a href="">
                <div class="c-card__image">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/press/dummy2.jpg" alt="製品動画">
                </div>
                <div class="c-card__desc">
                  <p class="c-card__desc-name">製品動画</p>
                  <p class="c-card__desc-icon c-card__desc-icon--read">read more</p>
                </div>
              </a>
            </div>
            <div class="c-card">
              <a href="">
                <div class="c-card__image">
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/press/dummy2.jpg" alt="マネージメント">
                </div>
                <div class="c-card__desc">
                  <p class="c-card__desc-name">製品写真</p>
                  <p class="c-card__desc-icon c-card__desc-icon--read">read more</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="p-cta p-cta--bg">
        <div class="c-ttlBox">
          <h2 class="c-ttl --wh">Hiring Inquiries </h2>
        </div>
        <div class="l-wrapper">
          <div class="p-cta__cont">
            <p class="p-cta__ttl">採用に関するお問い合わせ</p>
            <p class="p-cta__text">採用情報についてはHRへお問い合わせください。</p>
            <p class="p-cta__button"><a href="" class="c-btn --wh">Contact Form</a></p>
            <p class="p-cta__mail"><a href="" id="js-mailContact02">xxxxx</a></p>
          </div>
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