<aside class="l-sidebar">

    <section class="l-catalog">

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) : ?>
            <!-- 最近の投稿（3点リーダー） START   Recent Posts (3-Point Leader) START -->
            <article class="c-sidebarBlock">
                <h2 class="c-sidebarBlock__ttl">最近の投稿（3点リーダー）</h2>
                <ul class="c-articleEntry textend_dots">
                    <?php while ($query->have_posts()) {
                        $query->the_post();
                        get_template_part('template-parts/article/post03');
                    } ?>
                </ul>

            </article>
            <!-- 最近の投稿（3点リーダー） END   Recent Posts (3-Point Leader) END -->
        <?php endif;
        wp_reset_query(); ?>

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) : ?>
            <!-- 最近の投稿（文末グラデーションで非表示） START   Recent Posts (hidden by gradient at end of sentence) START-->
            <article class="c-sidebarBlock">
                <h2 class="c-sidebarBlock__ttl">最近の投稿（グラデーション）</h2>

                <ul class="c-articleEntry textend_grad">
                    <?php while ($query->have_posts()) {
                        $query->the_post();
                        get_template_part('template-parts/article/post03');
                    } ?>
                </ul>

            </article>
            <!-- 最近の投稿（文末グラデーションで非表示） END    Recent Posts (hidden by gradient at end of sentence) END-->
        <?php endif;
        wp_reset_query(); ?>

        <?php
        $args = array(
            'u-hide_empty' => false
        );
        if (get_categories($args)) : ?>
            <!-- カテゴリ START  Category START -->
            <article class="c-sidebarBlock">
                <h2 class="c-sidebarBlock__ttl">カテゴリ</h2>
                <ul class="c-categoryList">
                    <?php get_template_part('template-parts/article/categorylist'); ?>
                </ul>
            </article>
            <!-- カテゴリ END   Category END -->
        <?php endif; ?>


        <!-- アーカイブ START   Archive START-->
        <article class="c-sidebarBlock">
            <h2 class="c-sidebarBlock__ttl">アーカイブ</h2>

            <?php get_template_part('template-parts/article/get_post_date_search'); ?>

        </article>
        <!-- アーカイブ END   Archive END-->

        <?php
        $args = array(
            'hide_empty' => false
        );
        if (get_tags($args)) : ?>
            <!-- タグ START    TAG START-->
            <article class="c-sidebarBlock">
                <h2 class="c-sidebarBlock__ttl">タグ</h2>

                <ul class="c-articleTag">
                    <?php get_template_part('template-parts/article/taglist'); ?>
                </ul>

            </article>
            <!-- タグ END   TAG END-->
        <?php endif; ?>


    </section>

</aside>
