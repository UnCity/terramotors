<li class="c-articleEntry__item">
    <a href="<?php the_permalink(); ?>">
        <dl>
            <dt>
                <!-- サムネイル thumbnail -->
                <div class="c-articleEntry__thumb">
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
                </div>
            </dt>
            <dd>
                <!-- 記事の情報 Article Information -->
                <h3 class="c-articleEntry__ttl"><span class="textline"><?php the_title(); ?></span></h3>
                <p class="c-articleEntry__text"><span class="textline"><?php echo get_the_excerpt(); ?></span></p>
            </dd>
        </dl>
    </a>
</li>
