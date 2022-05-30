<?php
/*
 * Field Group Name - section Our Team
 * */
$clone_prefix  = $args['prefix'];
$section_class = 's-ot';
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
$team_shortcode  = get_field($clone_prefix . 'team_shortcode');
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

            <?php if($team_shortcode) { ?>
                <?php echo do_shortcode($team_shortcode); ?>
            <?php } ?>
        </div>
    </div>
</section>
