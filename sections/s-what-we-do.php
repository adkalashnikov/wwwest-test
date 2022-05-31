<?php
/*
 * Field Group Name - section What We Do
 * */
$clone_prefix  = $args['prefix'];
$section_class = 's-wd';
$section_id    = '';

if ( $args['section_class'] ) {
    $section_class = $args['section_class'] . ' ' . $section_class;
}
if ( $args['section_id'] ) {
    $section_id = $args['section_id'];
}

$subheading  = get_field($clone_prefix . 'subheading');
$s_title  = get_field($clone_prefix . 'section_title');
$s_text  = get_field($clone_prefix . 'section_text');
$s_image_id  = get_field($clone_prefix . 'image');
$s_image_url = wp_get_attachment_image_url($s_image_id, 'large');
$accordion  = get_field($clone_prefix . 'accordion');
?>

<section class="<?php echo $section_class; ?>" <?php if($section_id) echo 'id="'.$section_id.'"'; ?>>
    <div class="<?php echo $section_class; ?>__inner">
        <div class="container">
            <div class="<?php echo $section_class; ?>__top">
                <div class="<?php echo $section_class; ?>__subheading"><?php echo $subheading; ?></div>

                <h2 class="<?php echo $section_class; ?>__title"><?php echo $s_title; ?></h2>

                <div class="<?php echo $section_class; ?>__title-decor"></div>

                <div class="<?php echo $section_class; ?>__text"><?php echo $s_text; ?></div>
            </div>

            <div class="row">
                <div class="col-lg-6 <?php echo $section_class; ?>__col-1">
                    <?php if($s_image_url) { ?>
                        <div class="<?php echo $section_class; ?>__image-wrapper">
                            <img src="<?php echo $s_image_url; ?>" alt="image">
                        </div>
                    <?php } ?>
                </div>

                <div class="col-lg-6 <?php echo $section_class; ?>__col-2">
                    <?php if($accordion) {
                        $i = 0;
                        ?>
                        <div class="accordion" id="accordion<?php echo $clone_prefix; ?>">
                        <?php foreach( $accordion as $row ) {
                            $i++;
                            $row_id = $clone_prefix . '_' . $i;
                            $r_image_id = $row['icon'];
                            $r_image_url = wp_get_attachment_image_url($r_image_id, 'thumbnail');
                            $r_title = $row['title'];
                            $r_text = $row['text'];
                            ?>
                            <div class="card">
                                <div class="card-header" id="heading<?php echo $row_id; ?>">
                                    <h3 class="card-title">
                                        <a class="<?php echo $section_class; ?>__card-link <?php if($i > 1 ) { ?>collapsed<?php } ?>"
                                           role="button"
                                           data-toggle="collapse"
                                           data-target="#collapse<?php echo $row_id; ?>"
                                           aria-expanded="<?php if($i == 1 ) { ?>true<?php } else { ?>false<?php } ?>"
                                           aria-controls="collapse<?php echo $row_id; ?>">
                                            <?php if($r_image_url) { ?>
                                                <img class="card-icon" src="<?php echo $r_image_url; ?>" alt="icon">
                                            <?php } ?>

                                            <?php echo $r_title; ?>

                                            <?php get_template_part( 'include/svg/ic-arr-down' ); ?>
                                        </a>
                                    </h3>
                                </div>

                                <div id="collapse<?php echo $row_id; ?>"
                                     class="collapse <?php if($i == 1 ) { ?>show<?php } ?>"
                                     aria-labelledby="heading<?php echo $row_id; ?>"
                                     data-parent="#accordion<?php echo $clone_prefix; ?>">
                                    <div class="card-body">
                                        <div class="<?php echo $section_class; ?>__card-text"><?php echo $r_text; ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
