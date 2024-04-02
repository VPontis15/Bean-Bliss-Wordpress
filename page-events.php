<?php get_header(); ?>

<main class="layout">
    <?php
    $args = array(
        'post_type' => 'events',
        'posts_per_page' => -1,
    );
    $events = new WP_Query($args);

    while ($events->have_posts()) {
        $events->the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <p><?php the_excerpt(); ?></p>
    <a class="read-more" href="<?php the_permalink(); ?>">Read more</a>
    <?php
    }
    wp_reset_postdata();
    ?>
</main>

<?php get_footer(); ?>