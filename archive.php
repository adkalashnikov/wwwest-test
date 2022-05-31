<?php
if ( get_query_var('paged') ) {
    $paged = absint(get_query_var('paged'));
} elseif ( get_query_var('page') ) { // на статической главной странице используется 'page' вместо 'paged'
    $paged = absint(get_query_var('page'));
} else {
    $paged = 1;
}

$post_type = get_post_type();
$term = get_queried_object();

if (is_category() || is_tax()) {
    $current_term_id = $term->term_id;
    $current_term_tax = $term->taxonomy;
    $page_title = single_term_title('', 0);
} else {
    $page_title = $term->labels->all_items;
}
?>

<?php get_header(); ?>

<main id="main" class="page-main" role="main">
    <section class="default-page">
        <div class="container">
            <div class="default-page__top">
                <h1 class="default-page__title"><?php echo $page_title; ?></h1>

                <div class="default-page__title-decor"></div>
            </div>

            <?php
            $args = array(
                'posts_per_page' => 9,
                'paged'          => $paged,
                'post_type'      => $post_type,
                'post_status'    => 'publish'
            );

            if (is_category() || is_tax()) {
                $args = array(
                    'posts_per_page' => 9,
                    'paged'          => $paged,
                    'post_type'      => $post_type,
                    'post_status'    => 'publish',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => $current_term_tax,
                            'field'    => 'id',
                            'terms'    => $current_term_id
                        )
                    )
                );
            }

            $query = new WP_Query( $args );
            if ($query->have_posts()) { ?>
                <div class="row">
                <?php
                while ( $query->have_posts() ) {
                    $query->the_post();

                    if($post_type == 'team') {
                        get_template_part('template-parts/card', 'team');
                    } else {
                        get_template_part('template-parts/card', 'posts');
                    }
                } ?>
                </div>
            <?php
            } else { ?>
                <div class="no__text"><?php _e( 'Nothing Found', 'theme' ); ?></div>
            <?php }
            wp_reset_postdata();
            ?>

            <?php if ($query->max_num_pages > 1) { // custom pagination  ?>
                <nav class="nav justify-center pt-5">
                    <?php
                    $orig_query = $wp_query; // fix for pagination to work
                    $wp_query = $query;
                    ?>
                    <ul class="pagination">
                        <?php foreach(custom_paginated_links($wp_query) as $link) { ?>
                            <li class="page-item <?php if($link->isCurrent) { ?>active<?php } ?>">
                                <?php if($link->isCurrent) { ?>
                                    <a href="#" class="page-link"><?php _e($link->page) ?></a>
                                <?php } else { ?>
                                    <a href="<?php esc_attr_e( $link->url ) ?>" class="page-link">
                                        <?php _e( $link->page ) ?>
                                    </a>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>
                    <?php
                    $wp_query = $orig_query; // fix for pagination to work
                    ?>
                </nav>
            <?php } ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
