<?php
function add_css()
{
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', false, '1.1', 'all');
    wp_enqueue_style('style');
    wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.css', false, '1.1', 'all');
    wp_enqueue_style('slick');
    wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', false, '1.1', 'all');
    wp_enqueue_style('responsive');
    wp_register_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', false, '1.1', 'all');
    wp_enqueue_style('carousel');
    wp_register_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', false, '1.1', 'all');
    wp_enqueue_style('normalize');
    wp_register_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', false, '1.1', 'all');
    wp_enqueue_style('nice-select');
    wp_register_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', false, '1.1', 'all');
    wp_enqueue_style('meanmenu');
    wp_register_style('mCustomScrollbar', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.min.css', false, '1.1', 'all');
    wp_enqueue_style('mCustomScrollbar');
    wp_register_style('fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', false, '1.1', 'all');
    wp_enqueue_style('fancybox');
    wp_register_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css', false, '1.1', 'all');
    wp_enqueue_style('jquery-ui');
    wp_register_style('icomoon', get_template_directory_uri() . '/assets/css/icomoon.css', false, '1.1', 'all');
    wp_enqueue_style('icomoon');
    wp_register_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', false, '1.1', 'all');
    wp_enqueue_style('font-awesome');
    wp_register_style('default-skin', get_template_directory_uri() . '/assets/css/default-skin.css', false, '1.1', 'all');
    wp_enqueue_style('default-skin');
    wp_register_style('bootstrapmin', get_template_directory_uri() . '/assets/css/bootstrap.min.css.map', false, '1.1', 'all');
    wp_enqueue_style('bootstrapmin');
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '1.1', 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('bootstrapmin3', get_template_directory_uri() . '/assets/css/bootstrap.css.map', false, '1.1', 'all');
    wp_enqueue_style('bootstrapmin3');
    wp_register_style('bootstrap3', get_template_directory_uri() . '/assets/css/bootstrap.css', false, '1.1', 'all');
    wp_enqueue_style('bootstrap3');
    wp_register_style('bootstrap-reboot-min', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css.map', false, '1.1', 'all');
    wp_enqueue_style('bootstrap-reboot-min');
    wp_register_style('bootstrap-reboot', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css', false, '1.1', 'all');
    wp_enqueue_style('bootstrap-reboot');
    wp_register_style('bootstrap-reboot-min3', get_template_directory_uri() . '/assets/css/bootstrap-reboot.css.map', false, '1.1', 'all');
    wp_enqueue_style('bootstrap-reboot-min3');
    wp_register_style('bootstrap-reboot3', get_template_directory_uri() . '/assets/css/bootstrap-reboot.css', false, '1.1', 'all');
    wp_enqueue_style('bootstrap-reboot3');
    wp_register_style('bootstrap-grid-min', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css.map', false, '1.1', 'all');
    wp_enqueue_style('bootstrap-grid-min');
    wp_register_style('bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', false, '1.1', 'all');
    wp_enqueue_style('bootstrap-grid');
    wp_register_style('bootstrap-grid-min3', get_template_directory_uri() . '/assets/css/bootstrap-grid.css.map', false, '1.1', 'all');
    wp_enqueue_style('bootstrap-grid-min3');
    wp_register_style('bootstrap-grid3', get_template_directory_uri() . '/assets/css/bootstrap-grid.css', false, '1.1', 'all');
    wp_enqueue_style('bootstrap-grid3');
    wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', false, '1.1', 'all');
    wp_enqueue_style('animate');
    wp_register_style('font', get_template_directory_uri() . 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', false, '1.1', 'all');
    wp_enqueue_style('font');
    wp_register_style('fancybox2', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', false, '1.1', 'all');
    wp_enqueue_style('fancybox2');
}
add_action('wp_enqueue_scripts', 'add_css');


function add_script()

{

    wp_register_script('bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array('jquery'), 1.1, true);

    wp_enqueue_script('bundle');

    wp_register_script('bundle-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js.map', array('jquery'), 1.1, true);

    wp_enqueue_script('bundle-js');

    wp_register_script('bundle-min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('bundle-min');

    wp_register_script('bundle-js-min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js.map', array('jquery'), 1.1, true);

    wp_enqueue_script('bundle-js-min');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('bootstrap');

    wp_register_script('bootstrap-map', get_template_directory_uri() . '/assets/js/bootstrap.min.js.map', array('jquery'), 1.1, true);

    wp_enqueue_script('bootstrap-map');


    wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), 1.1, true);

    wp_enqueue_script('custom');

    wp_register_script('jquery-3', get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('jquery-3');


    wp_register_script('mCustomScrollbar', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('mCustomScrollbar');


    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('jquery');


    wp_register_script('jquery-validate', get_template_directory_uri() . '/assets/js/jquery.validate.js', array('jquery'), 1.1, true);

    wp_enqueue_script('jquery-validate');

    wp_register_script('modernizer', get_template_directory_uri() . '/assets/js/modernizer.js', array('jquery'), 1.1, true);

    wp_enqueue_script('modernizer');


    wp_register_script('plugin', get_template_directory_uri() . '/assets/js/plugin.js', array('jquery'), 1.1, true);

    wp_enqueue_script('plugin');

    wp_register_script('popper-min', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('popper-min');

    wp_register_script('slider-setting', get_template_directory_uri() . '/assets/js/slider-setting.js', array('jquery'), 1.1, true);

    wp_enqueue_script('slider-setting');
}

add_action('wp_enqueue_scripts', 'add_script');
