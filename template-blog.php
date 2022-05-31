<?php
/*
 * Template Name: Blog page
 */
$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;

// Check is posts exist for current page
$args0 = array(
    'paged' => $paged,
    'post_type' => array('post'),
    'post_status' => 'publish'
);

$query0 = new WP_Query($args0);

if (!$query0->have_posts()) {
    global $wp_query;
    $wp_query->set_404();

    // 2. Fix HTML title
    add_action('wp_title', function () {
        return '404: Not Found';
    }, 9999);

    // 3. Throw 404
    status_header(404);
    nocache_headers();

    // 4. Show 404 template
    require get_404_template();

    // 5. Stop execution
    exit;
}

wp_reset_postdata();
// End Check is posts exist for current page
?>

<?php get_header(); ?>

<main id="main" class="page-main" role="main">
    <section class="default-page">
        <div class="container">
            <div class="default-page__top">
                <?php the_title('<h1 class="default-page__title">', '</h1>'); ?>

                <div class="default-page__title-decor"></div>
            </div>

            <div class="s-lbl__posts">
                <?php
                $args = array(
                    'posts_per_page' => 9,
                    'paged' => $paged,
                    'post_type' => 'post',
                    'post_status' => 'publish'
                );
                ?>

                <?php
                $query = new WP_Query($args);
                if ($query->have_posts()) { ?>
                    <div class="row">
                        <?php
                        while ($query->have_posts()) {
                            $query->the_post();

                            $args = array(
                                'use_animation' => true
                            );
                            get_template_part('template-parts/card', 'posts', $args);
                        } ?>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>

            <?php if ($query->max_num_pages > 1) { // custom pagination  ?>
                <nav class="nav justify-center">
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
