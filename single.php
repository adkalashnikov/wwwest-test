<?php get_header(); ?>

<?php
$pid = $post->ID;
setPostViews($pid);
?>

<main id="main" class="site-main" >
<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/content', 'single'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-8 mt-5 mb-5">
                <?php // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif; ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>
</main>

<?php get_footer(); ?>
