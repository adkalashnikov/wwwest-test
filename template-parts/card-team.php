<?php
$pid = $post->ID;
$p_link = get_permalink($pid);
$image = get_the_post_thumbnail($pid, 'small');
$title = get_the_title($pid);
$tm_position = get_field('tm_position', $pid);
$tm_facebook_link = get_field('tm_facebook_link', $pid);
$tm_twitter_link = get_field('tm_twitter_link', $pid);
$tm_pinteres_link = get_field('tm_pinteres_link', $pid);
$tm_instagram_link = get_field('tm_instagram_link', $pid);
?>

<div class="col-12 col-md-4">
    <article class="team__item">
        <div class="team__item-overlay">
            <div class="team__item-inner">
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

                <?php if($image) { ?>
                    <div class="team__item-image">
                        <?php echo $image; ?>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="team__item-info">
            <h3 class="team__item-title"><a class="team__item-link" href="<?php echo $p_link; ?>"><?php echo $title; ?></a></h3>
            <span><?php echo $tm_position;?></span>
        </div>
    </article>
</div>
