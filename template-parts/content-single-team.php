<?php
$pid = $post->ID;
$tm_position = get_field('tm_position', $pid);
$tm_facebook_link = get_field('tm_facebook_link', $pid);
$tm_twitter_link = get_field('tm_twitter_link', $pid);
$tm_pinteres_link = get_field('tm_pinteres_link', $pid);
$tm_instagram_link = get_field('tm_instagram_link', $pid);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header pt-5">
        <div class="container">
            <div class="row justify-content-center  pt-5">
                <div class="col col-md-8 pt-5 pb-2">
                    <?php the_title( '<h1 class="entry-title text-uppercase font-weight-bold mb-3">', '</h1>' ); ?>

                    <div class="team__item-socials">
                        <?php
                        if($tm_facebook_link) {
                            $link_url = $tm_facebook_link['url'];
                            $link_target = $tm_facebook_link['target'] ? $tm_facebook_link['target'] : '_self';
                            ?>
                            <a class="team__item-s-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                <?php get_template_part( 'include/svg/ic-fb' ); ?>
                            </a>
                        <?php } ?>

                        <?php
                        if($tm_twitter_link) {
                            $link_url = $tm_twitter_link['url'];
                            $link_target = $tm_twitter_link['target'] ? $tm_twitter_link['target'] : '_self';
                            ?>
                            <a class="team__item-s-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                <?php get_template_part( 'include/svg/ic-tw' ); ?>
                            </a>
                        <?php } ?>

                        <?php
                        if($tm_pinteres_link) {
                            $link_url = $tm_pinteres_link['url'];
                            $link_target = $tm_pinteres_link['target'] ? $tm_pinteres_link['target'] : '_self';
                            ?>
                            <a class="team__item-s-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                <?php get_template_part( 'include/svg/ic-pin' ); ?>
                            </a>
                        <?php } ?>

                        <?php
                        if($tm_instagram_link) {
                            $link_url = $tm_instagram_link['url'];
                            $link_target = $tm_instagram_link['target'] ? $tm_instagram_link['target'] : '_self';
                            ?>
                            <a class="team__item-s-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                <?php get_template_part( 'include/svg/ic-insta' ); ?>
                            </a>
                        <?php } ?>
                    </div>
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
