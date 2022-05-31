<?php get_header(); ?>

<main id="main" class="site-main default-page" role="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-8 mt-5 mb-5">
            <?php if (have_posts()) { ?>
                <header class="default-page__top">
                    <h1 class="default-page__title"><?php printf(esc_html__('Search Results for: %s', 'theme'), '<span>' . get_search_query() . '</span>'); ?></h1>

                    <div class="default-page__title-decor"></div>
                </header>

                <?php while (have_posts()) { the_post(); ?>
                    <?php get_template_part('template-parts/content', 'search'); ?>
                <?php } ?>

                <?php the_posts_navigation(); ?>
            <?php } else { ?>
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php } ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
