<?php get_header() ?>


<main class="layout">

    <?php    if ( have_posts() ) :
                woocommerce_content();
            endif; // End the loop.
            ?>


</main>
<?php get_footer() ?>