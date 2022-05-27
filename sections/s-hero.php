<?php
/*
 * Field Group Name - *************
 * */
$clone_prefix  = $args['prefix'];
$section_class = 's-hero';
$section_id    = '';

if ( $args['section_class'] ) {
    $section_class .= ' ' . $args['section_class'];
}
if ( $args['section_id'] ) {
    $section_id = $args['section_id'];
}

//$title  = get_field($clone_prefix . 'title');
//$qa_items  = get_field($clone_prefix . 'questions');
//$bottom_text  = get_field($clone_prefix . 'bottom_text');
//$bottom_text_icon  = get_field($clone_prefix . 'bottom_text_icon');
//$bottom_text_link  = get_field($clone_prefix . 'bottom_text_link');
?>
<section class="<?php echo $section_class; ?>" <?php if($section_id) echo 'id="'.$section_id.'"'; ?>>
    <div class="<?php echo $section_class; ?>__inner">
        <div class="container">
            <div class="swiper js-hero-carousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div>01 Creative Template</div>
                        <div>Welcome to MoGo</div>
                        <button class="btn">Learn more</button>
                    </div>

                    <div class="swiper-slide">
                        <div>02 Creative Template</div>
                        <div>Welcome to MoGo</div>
                        <button>Learn more</button>
                    </div>

                    <div class="swiper-slide">
                        <div>03 Creative Template</div>
                        <div>Welcome to MoGo</div>
                        <button>Learn more</button>
                    </div>

                    <div class="swiper-slide">
                        <div>04 Creative Template</div>
                        <div>Welcome to MoGo</div>
                        <button>Learn more</button>
                    </div>
                </div>
                <div class="swiper-pagination js-hero-carousel-pagination"></div>
            </div>
        </div>
    </div>
</section>
