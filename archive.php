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
        <div class="container">
            <h1><?php echo $page_title; ?></h1>
        </div>


        <section class="s2">
            <div class="page-container">
                <div class="s2__inner">
                    <div class="s2__grid">
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
                        if ( $query->have_posts() ) { ?>
                            <div class="row justify-content-center">
                            <?php
                            while ( $query->have_posts() ) {
                                $query->the_post();

                                get_template_part('template-parts/card', 'posts');
                            } ?>
                            </div>
                        <?php
                        } else { ?>
                            <div class="no__text"><?php _e( 'Nothing Found', 'theme' ); ?></div>
                        <?php }
                        wp_reset_postdata();
                        ?>
                    </div>

                    <?php if ($query->max_num_pages > 1) : // custom pagination  ?>
                        <nav class="pagination">
                            <?php
                            $orig_query = $wp_query; // fix for pagination to work
                            $wp_query = $query;
                            $big = 999999999;
                            echo paginate_links(array(
                                'base'     => str_replace($big, '%#%', get_pagenum_link($big)),
                                'format'   => '?paged=%#%',
                                'current'  => max(1, $paged),
                                'total'    => $wp_query->max_num_pages,
                                'type'     => 'list',
                                'mid_size' => 4,
                            ));
                            $wp_query = $orig_query; // fix for pagination to work
                            ?>
                        </nav>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
