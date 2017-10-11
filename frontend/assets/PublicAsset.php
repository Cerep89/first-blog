<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'public/css/master.css',
    ];
    public $js = [
        "public/libs/jquery-1.12.4.min.js",
        "public/libs/jquery-migrate-1.2.1.js",
        //             <!-- Bootstrap-->
        "public/libs/bootstrap/bootstrap.min.js",
        //             <!-- Adaptive big text -->
        "public/plugins/slabText/js/jquery.slabtext.min.js",
        //             <!-- Sliders -->
        //             <!-- Owl slider -->
        "public/plugins/owl-carousel/owl.carousel.min.js",
        //             <!-- Slick slider -->
        "public/plugins/slick/slick.min.js",
        //             <!-- Sly slider -->
        "public/plugins/slyslider/sly.min.js",
        //             <!-- Bx slider -->
        "public/plugins/bxslider/vendor/jquery.easing.1.3.js",
        "public/plugins/bxslider/vendor/jquery.fitvids.js",
       "public/plugins/bxslider/jquery.bxslider.min.js",
        //             <!-- Pop-up window-->
        "public/plugins/magnific-popup/jquery.magnific-popup.min.js",
        //             <!-- Headers scripts-->
        "public/plugins/headers/slidebar.js",
        "public/plugins/headers/header.js",
        //             <!-- Filter and sorting images-->
        "public/plugins/isotope/isotope.pkgd.min.js",
        "public/plugins/isotope/imagesLoaded.js",
        //             <!-- Progress numbers-->
        "public/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js",
        "public/plugins/rendro-easy-pie-chart/waypoints.min.js",
        //             <!-- Entry Animations -->
        "public/plugins/wow.min.js",
        //             <!-- Calendar plugin -->
        "public/plugins/pickmeup/pickmeup.js",
        //             <!-- User customization-->
        "public/js/custom.js",

        "https://maps.googleapis.com/maps/api/js?key=AIzaSyBqQ_bBw186KJnMcRByvn5ffZueg88wp1E",
        //               <!-- Maps customization-->
        "public/js/custom-map.js",
        //               <!--Contact form-->
		"public/plugins/jqBootstrapValidation.js",
		"public/plugins/contact_me.js",
        //               <!--Simple check for contact-form-->
        "public/js/contactformcheck.js",
    ];
    public $depends = [

    ];
}
