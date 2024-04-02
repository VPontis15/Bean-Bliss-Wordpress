<?php get_header() ?>
<div style="min-height: 21.875rem; background-image: url('<?php the_post_thumbnail_url('event-full'); ?>');"
    class="section__header-div">

    <div class="section__header-div--overlay single_event_overlay"></div>

    <h2><?php the_title(); ?></h2>
</div>
<main class="layout">
    <section class="main_content">
        <?php the_content(); ?>
    </section>
</main>
<?php get_footer() ?>