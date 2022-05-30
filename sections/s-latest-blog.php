<?php
/*
 * Field Group Name - section Latest Blog
 * */
$clone_prefix  = $args['prefix'];
$section_class = 's-lbl';
$section_id    = '';

if ( $args['section_class'] ) {
    $section_class = $args['section_class'] . ' ' . $section_class;
}
if ( $args['section_id'] ) {
    $section_id = $args['section_id'];
}

$subheading  = get_field($clone_prefix . 'subheading');
$s_title  = get_field($clone_prefix . 'section_title');
?>
<section class="<?php echo $section_class; ?>" <?php if($section_id) echo 'id="'.$section_id.'"'; ?>>
    <div class="<?php echo $section_class; ?>__inner">
        <div class="container">
            <div class="<?php echo $section_class; ?>__top">
                <div class="<?php echo $section_class; ?>__subheading"><?php echo $subheading; ?></div>

                <h2 class="<?php echo $section_class; ?>__title"><?php echo $s_title; ?></h2>

                <div class="<?php echo $section_class; ?>__title-decor"></div>
            </div>

            <div class="<?php echo $section_class; ?>__posts">
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'post_type'      => 'post',
                    'post_status'    => 'publish'
                );

                $query = new WP_Query( $args );
                if ($query->have_posts()) { ?>
                    <div class="row justify-content-center">
                        <?php
                        while ( $query->have_posts() ) {
                            $query->the_post();

                            get_template_part('template-parts/card', 'posts');
                        } ?>
                    </div>

                    <?php
                    $max_page = intval($query->max_num_pages);
                    if(1 < $max_page) { ?>
                        <div class="row justify-content-center pt-5">
                            <a href="<?php echo get_permalink(get_page_by_path('blog')); ?>" class="btn">Show More</a>
                        </div>
                    <?php
                    }
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>
