<?php
/*
 * Field Group Name - section Hero
 * */
$clone_prefix  = $args['prefix'];
$section_class = 's-hero';
$section_id    = '';

if ( $args['section_class'] ) {
    $section_class = $args['section_class'] . ' ' . $section_class;
}
if ( $args['section_id'] ) {
    $section_id = $args['section_id'];
}

$slider  = get_field($clone_prefix . 'slider');
?>
<section class="<?php echo $section_class; ?>" <?php if($section_id) echo 'id="'.$section_id.'"'; ?>>
    <div class="<?php echo $section_class; ?>__inner">
        <div class="container">
            <?php if($slider) {
                $slides_qty = count($slider);
                $i = 0;
                ?>

                <div class="swiper js-hero-carousel">
                    <div class="swiper-wrapper">
                        <?php foreach( $slider as $row ) {
                            $i++;
                            $image_id = $row['slide_image'];
                            $image_url = wp_get_attachment_image_url($image_id, 'full');
                            $slide_name = $row['slide_name'];
                            $slide_subheading = $row['slide_subheading'];
                            $slide_heading = $row['slide_heading'];
                            $cta_button = $row['cta_button'];
                            ?>
                            <div class="swiper-slide" data-slide-image="<?php echo $image_url; ?>" data-slide-name="<?php echo $slide_name; ?>">
                                <?php if($slide_subheading ) { ?>
                                    <div class="<?php echo $section_class; ?>__subheading"><?php echo $slide_subheading; ?></div>
                                <?php } ?>

                                <?php if($i == 1 && $slide_heading ) { ?>
                                    <div class="<?php echo $section_class; ?>__title-wrapper">
                                        <h1 class="<?php echo $section_class; ?>__title"><?php echo $slide_heading; ?></h1>
                                    </div>
                                <?php } else { ?>
                                    <div class="<?php echo $section_class; ?>__title-wrapper">
                                        <h2 class="<?php echo $section_class; ?>__title"><?php echo $slide_heading; ?></h2>
                                    </div>
                                <?php } ?>

                                <?php
                                if ($cta_button) {
                                    $link_url = $cta_button['url'];
                                    $link_title = $cta_button['title'];
                                    $link_target = $cta_button['target'] ? $cta_button['target'] : '_self';
                                    ?>
                                    <div class="<?php echo $section_class; ?>__btn-wrapper">
                                        <div class="<?php echo $section_class; ?>__bottom-decor"></div>
                                        <a class="btn-light" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                            <?php echo esc_html( $link_title ); ?>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>

            <div class="swiper-pagination js-hero-carousel-pagination row"></div>
        </div>
    </div>
</section>
