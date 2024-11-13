<!-- パンくずリスト START  Breadcrumbs list START-->
<div class="c-breadcrumbs">

    <div class="in l-wrapper">

        <?php
        if (function_exists('yoast_breadcrumb')) {
            $breadcrumb = yoast_breadcrumb('<p id="breadcrumbs">', '</p>', false);
            if (!empty($breadcrumb)) {
                echo $breadcrumb;
            }
        }
        ?>

    </div>

</div>
<!-- パンくずリスト END  Breadcrumbs list END-->
