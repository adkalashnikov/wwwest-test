<article id="post-<?php the_ID(); ?>" <?php post_class('default-page'); ?>>
	<header class="entry-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-8 pb-5">
                    <?php the_title( '<h1 class="entry-title text-uppercase font-weight-bold mb-3">', '</h1>' ); ?>
                </div>
            </div>
        </div>
	</header>

    <div class="post-image__wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <?php echo get_the_post_thumbnail($post->ID, 'full', $attr = 'class=img-fluid rounded-lg w-100 mt-3 mb-3'); ?>
                </div>
            </div>
        </div>
    </div>

	<div class="entry-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-8">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
	</div>
</article>

<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-8 mt-5 mb-5">
            <?php the_post_navigation(); ?>
        </div>
    </div>
</div>
