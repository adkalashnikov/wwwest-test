<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    $pid = $post->ID;
    $p_views_count = getPostViews($pid);
    $num_comments = $post->comment_count;
    ?>
	<header class="entry-header pt-5">
        <div class="container">
            <div class="row justify-content-center  pt-5">
                <div class="col col-md-8 pt-5 pb-5">
                    <?php the_title( '<h1 class="entry-title text-uppercase font-weight-bold mb-3">', '</h1>' ); ?>

                    <span class="border border-primary rounded p-1 mr-2">Views count: <?php echo $p_views_count; ?></span>

                    <span class="border border-primary rounded p-1">Comments count: <?php echo $num_comments; ?></span>
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
