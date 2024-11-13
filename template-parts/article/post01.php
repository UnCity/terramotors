<?php $cat = get_the_category(get_the_ID())[0]; ?>
<li class="c-articleList__item">
    <a href="<?php the_permalink(); ?>">
        <p class="c-articleList__date"><?php echo get_the_date('Y.m.d'); ?></p>
        <?php if ($cat) : ?>
            <p class="c-articleList__cat"><span><?php echo esc_html($cat->name); ?></span></p>
        <?php endif; ?>
        <?php if (is_front_page()) : ?>
            <h3 class="c-articleList__ttl"><span class="textline"><?php the_title(); ?></span></h3>
        <?php else : ?>
            <h2 class="c-articleList__ttl"><span class="textline"><?php the_title(); ?></span></h2>
        <?php endif; ?>
    </a>
</li>
