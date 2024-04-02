<?php
get_header();
?>

<h2 class="layout upcoming__events__cat-title">
    Upcoming
    <?php single_cat_title(); ?> Events at Book Bliss
</h2>
<main class="layout upcoming__events__cat">
    <ul class="upcoming-events">
        <?php
    
    $category_slug = get_query_var('category_name');
    $category = get_category_by_slug($category_slug);
    if ($category) {
        $category_id = $category->term_id;
        $today = date('Ymd');
        $query = new WP_Query(array( 
            'post_type'=> 'events',
            'cat' => $category_id,
             'posts_per_page' => -1,
             'meta_key' => 'event_date',
             'orderby'=> 'meta_value_num',
             'order'=> 'ASC',
             'meta_query'=>  array(
                'key'=> 'event_date',
                'compare'=> '>=',
                'value'=> $today,
                'type'=> 'numeric'
            )
            
            ));

        if ($query->have_posts()): 
            while ($query->have_posts()): 
                $query->the_post(); ?>

        <li class="event_card">
            <?php if (has_post_thumbnail( )): ?>
            <div>
                <img class="event_card-img" src="<?php  the_post_thumbnail_url('event-thumbnail' ); ?>"
                    alt="<?php the_title()?>">
            </div> <?php endif; ?>

            <div>
                <a class="see-post-link" href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <div class="event_meta">
                    <span class="date">
                        <?php the_field('event_date') ?>
                    </span>

                </div>
            </div>

            <p><?php the_excerpt();?></p>
            <a class=" card-read-more " href="<?php the_permalink(); ?>">Read more</a>
        </li>

        <?php endwhile; 
        echo paginate_links();
            wp_reset_postdata(); 
        endif;
    }
    ?>
    </ul>
</main>

<?php
get_footer();
?>