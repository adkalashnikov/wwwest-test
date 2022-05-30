<?php
// remove wp version number from scripts and styles
function remove_css_js_version( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_version', 9999 );
add_filter( 'script_loader_src', 'remove_css_js_version', 9999 );


// setup post views count
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


/**
 * Create custom post types.
 */
add_action('init', 'create_post_type');
function create_post_type() {
    // register Team posttype
    register_post_type( 'team',
        array(
            'labels' => array(
                'name' => __( 'Team' ),
                'singular_name' => __( 'Team' )
            ),
            'menu_icon' => 'dashicons-buddicons-buddypress-logo',
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('with_front'=>false, 'pages'=>true, 'feeds'=>false, 'feed'=>false)
        )
    );
}


// Team members cards shortcode
//  [tm_cards posts_qty='3']
function tm_cards($atts) {
    $a = shortcode_atts( array(
        'posts_qty' => 3
    ), $atts );

    $content = '';

    // Start the output buffer
    ob_start();
    ?>
    <div class="dbl dbl__grid-wrapper">
        <?php
        $args = array(
            'post_type'      => 'team',
            'post_status'    => 'publish',
            'posts_per_page' => $a['posts_qty']
        );
        $query = new WP_Query($args);
        if ( $query->have_posts() ) { ?>
            <div class="row justify-content-center">
                <?php
                while ( $query->have_posts() ) {
                    $query->the_post(); ?>
                    <?php get_template_part('template-parts/card', 'team'); ?>
                <?php } ?>
            </div>
            <?php
            wp_reset_postdata();
        }
        ?>
    </div>

    <?php
    $content = ob_get_contents();
    ob_end_clean();

    return $content;
}
add_shortcode("tm_cards", "tm_cards");


// Custom pagination
function custom_paginated_links($query) {
    $currentPage = max(1, get_query_var('paged', 1));
    $pages = range(1, max(1, $query->max_num_pages));

    return array_map(function($page) use ($currentPage) {
        return (object) array(
            "isCurrent" => $page == $currentPage,
            "page" => $page,
            "url" => get_pagenum_link($page)
        );
    }, $pages);
}
