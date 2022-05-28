<?php
$pid = $post->ID;
$p_link = get_permalink($pid);
$image = get_the_post_thumbnail($pid, 'small');
$title = get_the_title($pid);
$p_views_count = getPostViews($pid);
$num_comments = $post->comment_count;
?>

<div class="col-12 col-md-4">
    <article  class="post__item">
        <div class="post__image-wrapper">
            <?php if($image) { ?>
                <a class="post__image" href="<?php echo $p_link; ?>">
                    <?php echo $image; ?>
                </a>
            <?php } ?>

            <div class="post__date">
                <span class="post__date-day"><?php echo get_the_date('j'); ?></span>
                <span><?php echo get_the_date('M'); ?></span>
            </div>
        </div>

        <h3 class="post__title"><a href="<?php echo $p_link;?>"><?php echo $title; ?></a></h3>

        <p class="post__text">
            <?php
            $excerpt = get_the_excerpt($pid);
            echo mb_strimwidth( $excerpt, 0, 95, ' ...' );
            ?>
        </p>

        <div class="post__bottom">
            <span><?php get_template_part( 'include/svg/ic-eye' ); ?> <?php echo $p_views_count; ?></span>
            <span><?php get_template_part( 'include/svg/ic-comment' ); ?> <?php echo $num_comments; ?></span>
        </div>
    </article>
</div>
