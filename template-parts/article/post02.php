<div class="c-articleGrid__item">

    <a href="<?php the_permalink(); ?>" class="c-articleGrid__bgBox">

        <!-- サムネイル thumbnail -->
        <div class="c-articleGrid__thum">
            <?php
            $src = $noimage = get_template_directory_uri() . '/assets/img/article/noimage.jpg';
            if (has_post_thumbnail()) {
                $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                if (!empty($thumbnail[0])) {
                    $src = $thumbnail[0];
                }
            }
            ?>
            <img src="data:image/gif;base64,R0lGODlhAQABAGAAACH5BAEKAP8ALAAAAAABAAEAAAgEAP8FBAA7" data-src="<?php echo esc_url($src); ?>" alt="<?php the_title(); ?>" class="lazyload obj_image">
            <!-- 新着アイコン New Icons -->
            <?php if (eqn5_thema_is_new_post(get_the_date('Y-m-d'))) {
                echo '<div class="pop">NEW</div>';
            } ?>
        </div>

        <div class="c-articleGrid__cont">

            <!-- タイトル title -->
            <?php if (is_front_page()) : ?>
                <h3 class="c-articleGrid__ttl"><span class="textline"><?php the_title(); ?></span></h3>
            <?php else : ?>
                <h2 class="c-articleGrid__ttl"><span class="textline"><?php the_title(); ?></span></h2>
            <?php endif; ?>


            <!-- 日時・カテゴリ Date, time, and category -->
            <ul class="c-articleGrid__info">
                <li class="article-day"><?php echo get_the_title(); ?></li>
                <?php
                $cats = get_the_category(get_the_ID());
                if ($cats) {
                    echo '<li><ul class="article-cgy">';
                    foreach ($cats as $cat) {
                        echo '<li><span>' . $cat->name . '</span></li>';
                    }
                    echo '</ul></li>';
                } ?>
            </ul>

            <p class="c-articleGrid__text"><span class="textline"><?php echo get_the_excerpt(); ?></span></p>

        </div>
    </a>

</div>
