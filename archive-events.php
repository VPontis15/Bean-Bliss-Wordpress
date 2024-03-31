<?php get_header(); ?>
<div class="section__header-div events events-page">
    <div class="section__header-div--overlay"></div>
    <h2>See upcoming events in Beans Bliss</h2>
</div>
</div>
<section class="layout text-center">

</section>
<main class="layout upcoming-events">

    <?php
    $args = array(
        'post_type' => 'events',
        'posts_per_page' => -1,
    );
    $events = new WP_Query($args);

    while ($events->have_posts()) {
        $events->the_post(); ?><div class="event_card">
        <?php if (has_post_thumbnail( )): ?>
        <div>
            <img class="event_card-img" src="<?php  the_post_thumbnail_url('event-thumbnail' ); ?>"
                alt="<?php the_title()?>">
        </div> <?php endif; ?>
        <div>
            <a class="see-post-link" href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
            </a>
            <?php
$categories = get_the_category();

if ($categories) {
    echo '<ul class="category_ul">';
    foreach ($categories as $category) {
        echo '<li class="category-list-item"><a class="category-link" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
    }
    echo '</ul>';
}
?>

        </div>
        <p><?php the_excerpt(); ?></p>
        <a class=" card-read-more " href="<?php the_permalink(); ?>">Read more</a>
    </div><?php
    }
    wp_reset_postdata();
    ?>

</main>

<?php get_footer(); ?>