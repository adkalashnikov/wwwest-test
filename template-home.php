<?php
/*
 * Template Name: Home Page Template
 */
?>

<?php get_header(); ?>
	<main id="main" class="page-main" >
        <?php
        $args = [
            'prefix' => 'hp_slider_', //REQUIRED VALUE
            'section_class' => '',
            'section_id' => '',
        ];
        get_template_part('sections/s', 'hero', $args);
        ?>

        <?php
        $args = [
            'prefix' => 'hp_lb_', //REQUIRED VALUE
            'section_class' => '',
            'section_id' => '',
        ];
        get_template_part('sections/s', 'latest-blog', $args);
        ?>

        <?php
        $args = [
            'prefix' => 'hp_wd_', //REQUIRED VALUE
            'section_class' => '',
            'section_id' => '',
        ];
        get_template_part('sections/s', 'what-we-do', $args);
        ?>

        <?php
        $args = [
            'prefix' => 'hp_ot_', //REQUIRED VALUE
            'section_class' => '',
            'section_id' => '',
        ];
        get_template_part('sections/s', 'our-team', $args);
        ?>
	</main>
<?php get_footer(); ?>
