<?php get_header(); ?>

<!-- //// ALL START //// -->

<div id="container" class="p-library l-noBg">


  <?php get_sidebar('header'); ?>


  <!-- //// PAGE TITLE START //// -->
  <!-- H1 = NEWS ARCHIVE -->

  <div class="c-pageTitle">
    <div class="l-wrapper">

      <h1>Library</h1>
      <p>製品動画、製品写真</p>

    </div>
  </div>


  <!-- //// PAGE TITLE END //// -->

  <?php get_template_part('template-parts/common/breadcrumbs'); ?>

  <!-- //// MAIN CONTENT START //// -->

  <main role="main" class="l-page__main">

    <!-- CONTENTS START -->
    <section class="l-sec">
      <div class="c-ttlBox">
        <h2 class="c-ttl">Product</h2>
      </div>

      <div class="l-wrapper">
        <div class="p-library__product">
          <h2 class="c-ttl01">製品</h2>
          <div class="c-libraryList">
            <?php if (have_rows('products')) : ?>
              <?php while (have_rows('products')) : the_row();
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
        </div>
        <div class="p-library__management">
          <h2 class="c-ttl01">マネジメント</h2>
          <div class="c-libraryList">
            <?php if (have_rows('managements')) : ?>
              <?php while (have_rows('managements')) : the_row();
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