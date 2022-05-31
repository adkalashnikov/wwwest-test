<?php get_header(); ?>

<main id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-8 mt-5 mb-5">
                    <?php get_template_part( 'template-parts/content', 'page'); ?>

                    <?php
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif; ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
