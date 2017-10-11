<?php

/* @var $this yii\web\View */

$this->title = 'FIRST-BLOG';
?>

<header class="header-transparent wow slideInDown">
    <?= $this->render('/partials/header');?>
</header>

    <div class="b-page-content with-layer-bg">
        <!-- ==========================-->
        <!-- PAGES BACKGROUND -->
        <!-- ==========================-->
        <div class="b-layer-big">
            <div class="layer-big-bg page-layer-big-bg">
                <div class="layer-content-big">
                    <!-- Home slider -->
                    <div class="b-home-slider-holder wow slideInUp">
                        <div class="b-home-slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "fade": true, "speed": 1000, "autoplay": true}'>
                            <!-- Home slide 1 -->
                            <div class="home-slide">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 text-center">
                                            <div class="b-home-slider-content">
                                                <h2 class="main-heading">
                                                    Creative. Multipurpose. Colorful.
                                                </h2>
                                                <div class="home-slider-text">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus
                                                    <br>
                                                    vitae condimentum egestas, libero dolor auctor tellus
                                                </div>
                                                <a href="about.php" class="btn btn-secondary">Read More</a>
                                                <a href="signup.php" class="btn btn-secondary">Sign Up</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Home slide 2 -->
                            <div class="home-slide">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 text-center">
                                            <div class="b-home-slider-content">
                                                <h2 class="main-heading">
                                                    At vero eos et
                                                </h2>
                                                <div class="home-slider-text">
                                                    Et harum quidem rerum facilis est et expedita ut aut reiciendis voluptatibus maiores alias consequatur
                                                    <br>
                                                    Itaque earum rerum hic tenetur a sapiente delectus, aut perferendis doloribus
                                                    <br>
                                                    perferendis doloribus asperiores repellat asperiores repellat. Nam libero tempore, cum soluta nobis est eligendi
                                                </div>
                                                <a href="about.php" class="btn btn-secondary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-slick-arrows">
                            <div class="custom-slideshow-controls">
                                <span id="home-slider-prev" class="slick-arrows-prev arrow-transparent"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                <span id="home-slider-next" class="slick-arrows-next arrow-transparent"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <!-- END Home slider -->
                </div>
            </div>
        </div>
        <div class="b-homepage-content-mod">
            <div class="b-layer-main">
                <!-- Home Features -->
                <div class="b-home-features">
                    <div class="b-features-columns-holder">
                        <div class="container">
                            <div class="row equal">
                                <div class="col-xs-12 col-sm-4 col-md-4 wow slideInRight">
                                    <div class="b-features-column">
                                        <div class="features-column-icon">
                                            <i class="flaticon-social"></i>
                                        </div>
                                        <h6 class="features-column-title">
                                            Sed Bibendum
                                        </h6>
                                        <div class="features-column-text">
                                            Vestibulum maximus ipsum sed
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 wow fadeInUp">
                                    <div class="b-features-column even-features-column">
                                        <div class="features-column-icon">
                                            <i class="flaticon-arrow"></i>
                                        </div>
                                        <h6 class="features-column-title">
                                            Sed Bibendum
                                        </h6>
                                        <div class="features-column-text">
                                            Vestibulum maximus ipsum sed
                                        </div>
                                    </div>
                                    <div class="page-arrow hidden-xs">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 wow slideInLeft">
                                    <div class="b-features-column">
                                        <div class="features-column-icon">
                                            <i class="flaticon-user"></i>
                                        </div>
                                        <h6 class="features-column-title">
                                            Sed Bibendum
                                        </h6>
                                        <div class="features-column-text">
                                            Vestibulum maximus ipsum sed
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gallery isotope -->
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 text-center">
                            <h3 class="big-title-mod">
                                Last Works
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="b-gallery-3 b-isotope">
                    <div class="b-gallery-sorting-holder">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <ul class="list-inline text-uppercase text-center b-items-sort b-isotope__filter">
                                        <li>
                                            <a href="#" data-filter="*" class="current">all works</a>
                                        </li>
                                        <li>
                                            <a href="#" data-filter=".web">web design</a>
                                        </li>
                                        <li>
                                            <a href="#" data-filter=".illustration">illustration</a>
                                        </li>
                                        <li>
                                            <a href="#" data-filter=".branding">Branding</a>
                                        </li>
                                        <li>
                                            <a href="#" data-filter=".photography">photography</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-items-gallery-holder">
                        <div class="js-zoom-gallery grid clearfix">
                            <div class="grid-sizer"></div>
                            <div class="b-gallery-3__item grid-item web illustration photography">
                                <div class="gallery-item-content">
                                    <div class="gallery-item-img">
                                        <img src="public/media/components/b-gallery/gallery-mid-1.jpg" alt="/" class="img-responsive">
                                        <div class="gallery-item-hover">
                                            <a href="public/media/components/b-gallery/gallery-mid-1.jpg" class="js-zoom-gallery__item">
                                                <span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                <img src="public/media/components/b-gallery/gallery-mid-1.jpg" alt="/" class="img-responsive">
                                            </a>
                                            <a href="#">
                                                <span class="item-hover-icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-gallery-3__item grid-item illustration photography">
                                <div class="gallery-item-content">
                                    <div class="gallery-item-img">
                                        <img src="public/media/components/b-gallery/gallery-mid-2.jpg" alt="/" class="img-responsive">
                                        <div class="gallery-item-hover">
                                            <a href="public/media/components/b-gallery/gallery-mid-2.jpg" class="js-zoom-gallery__item">
                                                <span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                <img src="public/media/components/b-gallery/gallery-mid-2.jpg" alt="/" class="img-responsive">
                                            </a>
                                            <a href="#">
                                                <span class="item-hover-icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-gallery-3__item grid-item branding web">
                                <div class="gallery-item-content">
                                    <div class="gallery-item-img">
                                        <img src="public/media/components/b-gallery/gallery-mid-3.jpg" alt="/" class="img-responsive">
                                        <div class="gallery-item-hover">
                                            <a href="public/media/components/b-gallery/gallery-mid-3.jpg" class="js-zoom-gallery__item">
                                                <span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                <img src="public/media/components/b-gallery/gallery-mid-3.jpg" alt="/" class="img-responsive">
                                            </a>
                                            <a href="#">
                                                <span class="item-hover-icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-gallery-3__item grid-item branding web">
                                <div class="gallery-item-content">
                                    <div class="gallery-item-img">
                                        <img src="public/media/components/b-gallery/gallery-mid-4.jpg" alt="/" class="img-responsive">
                                        <div class="gallery-item-hover">
                                            <a href="public/media/components/b-gallery/gallery-mid-4.jpg" class="js-zoom-gallery__item">
                                                <span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                <img src="public/media/components/b-gallery/gallery-mid-4.jpg" alt="/" class="img-responsive">
                                            </a>
                                            <a href="#">
                                                <span class="item-hover-icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-gallery-3__item grid-item grid-item-vertic">
                                <div class="gallery-item-content">
                                    <div class="gallery-item-img">
                                        <img src="public/media/components/b-gallery/gallery-mid-vertic.jpg" alt="/" class="img-responsive">
                                        <div class="gallery-item-hover">
                                            <a href="public/media/components/b-gallery/gallery-mid-vertic.jpg" class="js-zoom-gallery__item">
                                                <span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                <img src="public/media/components/b-gallery/gallery-mid-vertic.jpg" alt="/" class="img-responsive">
                                            </a>
                                            <a href="#">
                                                <span class="item-hover-icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-gallery-3__item grid-item grid-item-horiz branding illustration">
                                <div class="gallery-item-content">
                                    <div class="gallery-item-img">
                                        <img src="public/media/components/b-gallery/gallery-mid-horiz.jpg" alt="/" class="img-responsive">
                                        <div class="gallery-item-hover">
                                            <a href="public/media/components/b-gallery/gallery-mid-horiz.jpg" class="js-zoom-gallery__item">
                                                <span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                <img src="public/media/components/b-gallery/gallery-mid-horiz.jpg" alt="/" class="img-responsive">
                                            </a>
                                            <a href="#">
                                                <span class="item-hover-icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-gallery-3__item grid-item web illustration">
                                <div class="gallery-item-content">
                                    <div class="gallery-item-img">
                                        <img src="public/media/components/b-gallery/gallery-mid-5.jpg" alt="/" class="img-responsive">
                                        <div class="gallery-item-hover">
                                            <a href="public/media/components/b-gallery/gallery-mid-5.jpg" class="js-zoom-gallery__item">
                                                <span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                <img src="public/media/components/b-gallery/gallery-mid-5.jpg" alt="/" class="img-responsive">
                                            </a>
                                            <a href="#">
                                                <span class="item-hover-icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-gallery-3__item grid-item illustration">
                                <div class="gallery-item-content">
                                    <div class="gallery-item-img">
                                        <img src="public/media/components/b-gallery/gallery-mid-6.jpg" alt="/" class="img-responsive">
                                        <div class="gallery-item-hover">
                                            <a href="public/media/components/b-gallery/gallery-mid-6.jpg" class="js-zoom-gallery__item">
                                                <span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                <img src="public/media/components/b-gallery/gallery-mid-6.jpg" alt="/" class="img-responsive">
                                            </a>
                                            <a href="#">
                                                <span class="item-hover-icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-gallery-3__item grid-item branding">
                                <div class="gallery-item-content">
                                    <div class="gallery-item-img">
                                        <img src="public/media/components/b-gallery/gallery-mid-4.jpg" alt="/" class="img-responsive">
                                        <div class="gallery-item-hover">
                                            <a href="public/media/components/b-gallery/gallery-mid-4.jpg" class="js-zoom-gallery__item">
                                                <span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                <img src="public/media/components/b-gallery/gallery-mid-4.jpg" alt="/" class="img-responsive">
                                            </a>
                                            <a href="#">
                                                <span class="item-hover-icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-gallery-3__item grid-item  illustration photography">
                                <div class="gallery-item-content">
                                    <div class="gallery-item-img">
                                        <img src="public/media/components/b-gallery/gallery-mid-1.jpg" alt="/" class="img-responsive">
                                        <div class="gallery-item-hover">
                                            <a href="public/media/components/b-gallery/gallery-mid-1.jpg" class="js-zoom-gallery__item">
                                                <span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                <img src="public/media/components/b-gallery/gallery-mid-1.jpg" alt="/" class="img-responsive">
                                            </a>
                                            <a href="#">
                                                <span class="item-hover-icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-gallery-3__item grid-item photography web illustration">
                                <div class="gallery-item-content">
                                    <div class="gallery-item-img">
                                        <img src="public/media/components/b-gallery/gallery-mid-2.jpg" alt="/" class="img-responsive">
                                        <div class="gallery-item-hover">
                                            <a href="public/media/components/b-gallery/gallery-mid-2.jpg" class="js-zoom-gallery__item">
                                                <span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                <img src="public/media/components/b-gallery/gallery-mid-2.jpg" alt="/" class="img-responsive">
                                            </a>
                                            <a href="#">
                                                <span class="item-hover-icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-gallery-3__item grid-item illustration">
                                <div class="gallery-item-content">
                                    <div class="gallery-item-img">
                                        <img src="public/media/components/b-gallery/gallery-mid-3.jpg" alt="/" class="img-responsive">
                                        <div class="gallery-item-hover">
                                            <a href="public/media/components/b-gallery/gallery-mid-3.jpg" class="js-zoom-gallery__item">
                                                <span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                <img src="public/media/components/b-gallery/gallery-mid-3.jpg" alt="/" class="img-responsive">
                                            </a>
                                            <a href="#">
                                                <span class="item-hover-icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-gallery-3__item grid-item photography illustration">
                                <div class="gallery-item-content">
                                    <div class="gallery-item-img">
                                        <img src="public/media/components/b-gallery/gallery-mid-5.jpg" alt="/" class="img-responsive">
                                        <div class="gallery-item-hover">
                                            <a href="public/media/components/b-gallery/gallery-mid-5.jpg" class="js-zoom-gallery__item">
                                                <span class="item-hover-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                <img src="public/media/components/b-gallery/gallery-mid-5.jpg" alt="/" class="img-responsive">
                                            </a>
                                            <a href="#">
                                                <span class="item-hover-icon"><i class="fa fa-link" aria-hidden="true"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-service-page">
                    <!-- Title services block -->
                    <div class="b-title-service-mod wow fadeInUp">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-3">
                                    <h3 class="big-title-mod">
                                        What We Do
                                    </h3>
                                    <a href="contact.php" class="btn btn-primary btn-ask">
                                        <i class="fa fa-commenting" aria-hidden="true"></i>
                                        Ask a Question
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-4 col-md-offset-1">
                                    <div class="b-text">
                                        <p>
                                            Nullam aliquam eros a ex hendrerit, at eleifend elit gravida. Nulla lorem erat, varius et maximus at, gravida nec lacus. Maecenas vestibulum mauris maximus leo suscipit, sed varius leo auctor. Aenean leo justo, ultrices ac condimentum.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-1">
                                    <div class="b-links">
                                        <ul class="list-unstyled">
                                            <li>
                                                <p class="inline-title text-uppercase">
                                                    Links
                                                </p>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Vestibulum urna velit, iaculis ac
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Proin mauris odio, feugiat sed
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Nam tempus vulputate lorem
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    Nunc nec elementum arcu
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Services scroll slide -->
                    <div class="b-scroll-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <h3 class="b-upper-title text-center">
                                        Services
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Sly slider -->
                        <div class="b-sly-slider">
                            <div id="frame" >
                                <ul class="slidee">
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-tool-1"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Sed Bibendum
                                            </h6>
                                            <div class="features-column-text">
                                                Vestibulum maximus ipsum sed nulla dictum ullamcorper
                                            </div>
                                            <a href="#" class="btn btn-primary">
                                                Detail
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-people"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Maecenas Pulvinar
                                            </h6>
                                            <div class="features-column-text">
                                                Aenean ullamcorper, leo id rutrum convallis, velit mauris porttitor
                                            </div>
                                            <a href="#" class="btn btn-primary">
                                                Detail
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-softtware-engineer"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Nullam Lobortis
                                            </h6>
                                            <div class="features-column-text">
                                                Donec leo arcu, tincidunt sit amet justo ut, commodo scelerisque elit
                                            </div>
                                            <a href="#" class="btn btn-primary">
                                                Detail
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-technology"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Cras Posuere
                                            </h6>
                                            <div class="features-column-text">
                                                Phasellus sed elementum nulla. Integer eleifend lobortis felis in auctor
                                            </div>
                                            <a href="#" class="btn btn-primary">
                                                Detail
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-tool"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Vestibulum Urna
                                            </h6>
                                            <div class="features-column-text">
                                                Phasellus suscipit, mi vel blandit feugiat, leo tellus commodo arcu
                                            </div>
                                            <a href="#" class="btn btn-primary">
                                                Detail
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-pendulum"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Aliquam Euismod
                                            </h6>
                                            <div class="features-column-text">
                                                Maecenas est nisi, rhoncus a lobortis id, cursus a metus
                                            </div>
                                            <a href="#" class="btn btn-primary">
                                                Detail
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-tool-1"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Sed Bibendum
                                            </h6>
                                            <div class="features-column-text">
                                                Vestibulum maximus ipsum sed nulla dictum ullamcorper
                                            </div>
                                            <a href="#" class="btn btn-primary">
                                                Detail
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-people"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Maecenas Pulvinar
                                            </h6>
                                            <div class="features-column-text">
                                                Aenean ullamcorper, leo id rutrum convallis, velit mauris porttitor
                                            </div>
                                            <a href="#" class="btn btn-primary">
                                                Detail
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-softtware-engineer"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Nullam Lobortis
                                            </h6>
                                            <div class="features-column-text">
                                                Donec leo arcu, tincidunt sit amet justo ut, commodo scelerisque elit
                                            </div>
                                            <a href="#" class="btn btn-primary">
                                                Detail
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-technology"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Cras Posuere
                                            </h6>
                                            <div class="features-column-text">
                                                Phasellus sed elementum nulla. Integer eleifend lobortis felis in auctor
                                            </div>
                                            <a href="#" class="btn btn-primary">
                                                Detail
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-pendulum"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Vestibulum Urna
                                            </h6>
                                            <div class="features-column-text">
                                                Phasellus suscipit, mi vel blandit feugiat, leo tellus commodo arcu
                                            </div>
                                            <a href="#" class="btn btn-primary">
                                                Detail
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b-features-column-mod">
                                            <div class="features-column-icon">
                                                <i class="flaticon-tool"></i>
                                            </div>
                                            <h6 class="features-column-title">
                                                Aliquam Euismod
                                            </h6>
                                            <div class="features-column-text">
                                                Maecenas est nisi, rhoncus a lobortis id, cursus a metus
                                            </div>
                                            <a href="#" class="btn btn-primary">
                                                Detail
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="scrollbar">
                                            <div class="handle"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-about">
                    <div class="map-bg">
                        <div class="container">
                            <div class="row">
                                <!-- Info columns -->
                                <div class="b-info-columns-holder b-progress-list col-xs-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 text-center">
                                            <div class="b-big-progress">
                                                <div class="big-progress-title big-title-mod">
                                                    Years of experience
                                                </div>
                                                <div class="b-progress-list__item clearfix">
                                                        <span data-percent="8" class="b-progress-list__percent js-chart">
                                                            <span class="js-percent"></span>
                                                        </span>
                                                </div>
                                                <div class="big-progress-description">
                                                    Nullam aliquam eros a ex hendrerit, at eleifend
                                                    <br>
                                                    elit gravida. Nulla lorem erat, varius et maximus
                                                    <br>
                                                    at, gravida nec lacus.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row equal">
                                        <div class="b-info-column col-xs-6 col-sm-3">
                                            <div class="b-progress-list__item clearfix">
                                                    <span data-percent="35" class="b-progress-list__percent js-chart">
                                                        <span class="js-percent"></span>
                                                    </span>
                                            </div>
                                            <h6 class="info-column-title">
                                                Completed projects
                                            </h6>
                                            <div class="info-column-text">
                                                <p>
                                                    Pellentesque eget quam vel velit mollis
                                                    <br>
                                                    tempus a nec mauris.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="b-info-column col-xs-6 col-sm-3">
                                            <div class="b-progress-list__item clearfix">
                                                    <span data-percent="19" class="b-progress-list__percent js-chart">
                                                        <span class="js-percent"></span>
                                                    </span>
                                            </div>
                                            <h6 class="info-column-title">
                                                Completed projects
                                            </h6>
                                            <div class="info-column-text">
                                                <p>
                                                    Pellentesque eget quam vel velit mollis
                                                    <br>
                                                    tempus a nec mauris.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="b-info-column col-xs-6 col-sm-3">
                                            <div class="b-progress-list__item clearfix">
                                                    <span data-percent="97" class="b-progress-list__percent js-chart">
                                                        <span class="js-percent"></span>
                                                    </span>
                                            </div>
                                            <h6 class="info-column-title">
                                                Completed projects
                                            </h6>
                                            <div class="info-column-text">
                                                <p>
                                                    Pellentesque eget quam vel velit mollis
                                                    <br>
                                                    tempus a nec mauris.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="b-info-column col-xs-6 col-sm-3">
                                            <div class="b-progress-list__item clearfix">
                                                    <span data-percent="55" class="b-progress-list__percent js-chart">
                                                        <span class="js-percent"></span>
                                                    </span>
                                            </div>
                                            <h6 class="info-column-title">
                                                Completed projects
                                            </h6>
                                            <div class="info-column-text">
                                                <p>
                                                    Pellentesque eget quam vel velit mollis
                                                    <br>
                                                    tempus a nec mauris.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-service-page">
                    <div class="b-helper-wrapper">
                        <!-- Block with shape and page background -->
                        <div class="layer-bg-mod page-layer-bg4">
                            <div class="b-add-info-holder">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6 wow slideInLeft">
                                            <h3 class="inherit-title">
                                                Donec ac est vitae libero convallis hendrerit at quis lacus
                                            </h3>
                                            <div class="row equal">
                                                <div class="b-add-info col-xs-6 col-sm-6 col-md-6">
                                                    <div class="add-info-number">
                                                        01.
                                                    </div>
                                                    <div class="add-info-content">
                                                        <div class="add-info-content-title">
                                                            Class aptent
                                                        </div>
                                                        <div class="add-info-content-text">
                                                            Nam eleifend eros condimentum sodales quis diam nunc
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="b-add-info col-xs-6 col-sm-6 col-md-6">
                                                    <div class="add-info-number">
                                                        02.
                                                    </div>
                                                    <div class="add-info-content">
                                                        <div class="add-info-content-title">
                                                            Curabitur nisl
                                                        </div>
                                                        <div class="add-info-content-text">
                                                            Integer vulputate eros vitae purus dignissim, non volutpat
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="b-add-info col-xs-6 col-sm-6 col-md-6">
                                                    <div class="add-info-number">
                                                        03.
                                                    </div>
                                                    <div class="add-info-content">
                                                        <div class="add-info-content-title">
                                                            Nulla in mattis
                                                        </div>
                                                        <div class="add-info-content-text">
                                                            Aenean ullamcorper, leo id rutrum convallis
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="b-add-info col-xs-6 col-sm-6 col-md-6">
                                                    <div class="add-info-number">
                                                        04.
                                                    </div>
                                                    <div class="add-info-content">
                                                        <div class="add-info-content-title">
                                                            Nam sed nulla
                                                        </div>
                                                        <div class="add-info-content-text">
                                                            Pellentesque turpis arcu, imperdiet non viverra
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Block with shape -->
                            <div class="shape-bg"></div>
                        </div>
                        <!-- Absolute container with mac bg -->
                        <div class="container-absolute hidden-xs hidden-sm">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="mac-wrapper-mod wow slideInRight">
                                            <div class="mac-mod">
                                            </div>
                                            <a href="#">
                                                <img src="public/media/components/b-service/service-gallery-1.jpg" class="img-responsive" alt="/">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- About service additional block -->
                        <div class="b-about-additional">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-4">
                                        <h3 class="b-upper-title text-right">
                                            About Us
                                        </h3>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-5 text-center">
                                        <div class="about-additional-img">
                                            <img src="public/media/components/b-service/about-additional-img.jpg" class="img-responsive" alt="/">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-1">
                                        <div class="about-additional-content">
                                            <h3 class="inherit-title">
                                                Mauris viverra semper libero facilisis pulvinar
                                            </h3>
                                            <div class="about-additional-text">
                                                Lorem ipsum dolor sit amet, consectetuer gravida nibh vel velit auctor aliquet. Curabitur blandit vestibulum luctus. In hac habitasse platea dictumst. Aenean ullamcorper, leo id rutrum convallis, velit mauris porttitor orci, a posuere massa diam eu dui.
                                            </div>
                                            <a href="about.php" class="btn btn-primary">
                                                More information
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Price selectors -->
                    <div class="b-price pattern-bg wow fadeInUp">
                        <div class="b-icon-heading text-center">
                            <div class="icon">
                                <i class="fa fa-commenting" aria-hidden="true"></i>
                            </div>
                            <h3 class="icon-heading-title">
                                Pricing Three Columns
                            </h3>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="b-offers-holder-full clearfix">
                                    <div class="offer-item text-center col-xs-12 col-sm-4">
                                        <div class="offer-content">
                                            <div class="offer-name">
                                                Trial
                                            </div>
                                            <div class="offer-price">
                                                Free
                                                <span class="price-limit">
                                                            per month
                                                        </span>
                                            </div>
                                            <button class="btn btn-primary">
                                                select
                                            </button>
                                            <div class="offer-advantages">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                        Duis pharetra volutpat
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                        We value continuous
                                                    </li>
                                                    <li class="not-include">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                        Education and professional
                                                    </li>
                                                    <li class="not-include">
                                                        <i class="fa fa-times" aria-hidden="true"></i>
                                                        Growth, encourage
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offer-item even-item text-center col-xs-12 col-sm-4">
                                        <div class="offer-content">
                                            <div class="offer-name">
                                                Basic
                                            </div>
                                            <div class="offer-price">
                                                    <span class="price-currency">
                                                        $
                                                    </span>
                                                19.50
                                                <span class="price-limit">
                                                            per month
                                                        </span>
                                            </div>
                                            <button class="btn btn-primary">
                                                select
                                            </button>
                                            <div class="offer-advantages">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                        Duis pharetra volutpat
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                        We value continuous
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                        Education and professional
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                        Growth, encourage
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offer-item text-center col-xs-12 col-sm-4">
                                        <div class="offer-content">
                                            <div class="offer-name">
                                                Pro
                                            </div>
                                            <div class="offer-price">
                                                    <span class="price-currency">
                                                        $
                                                    </span>
                                                49.50
                                                <span class="price-limit">
                                                            per month
                                                        </span>
                                            </div>
                                            <button class="btn btn-primary">
                                                select
                                            </button>
                                            <div class="offer-advantages">
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                        Duis pharetra volutpat
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                        We value continuous
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                        Education and professional
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check" aria-hidden="true"></i>
                                                        Growth, encourage
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="offers-info-text col-xs-12 col-sm-12 text-center">
                                    Nullam aliquam eros a ex hendrerit, at eleifend elit gravida. Nulla lorem erat, varius et maximus at,
                                    <br>
                                    gravida nec lacus. Sed convallis tortor non turpis aliquet congue.
                                    <br>
                                    <a href="#">
                                        Morbi vitae libero quis augue efficitur eleifend.
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Reviews -->
                    <div class="b-reviews">
                        <div class="b-reviews-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <!-- bxslider with custom pager -->
                                        <div class="b-pager-slideshow-holder-mod">
                                            <ul class="pager-slideshow bxslider-pager">
                                                <li>
                                                    <div class="pager-item">
                                                        <div class="review-item text-center">
                                                            <div class="b-stars">
                                                                <ul class="list-inline">
                                                                    <li>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li class="star-empty">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <h4 class="review-title">
                                                                Pellentesque dictum nunc a libero scelerisque
                                                            </h4>
                                                            <div class="review-text">
                                                                “ Donec nibh felis, pulvinar nec erat id, venenatis semper magna. Sed lacus velit, cursus sed libero non, auctor hendrerit neque. Suspendisse ornare nulla neque. Cras libero urna, aliquam sed massa eu, lobortis euismod magna. ”
                                                            </div>
                                                            <div class="review-author">
                                                                <span class="pre-line"></span> Niels Bohr
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="pager-item">
                                                        <div class="review-item text-center">
                                                            <div class="b-stars">
                                                                <ul class="list-inline">
                                                                    <li>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li class="star-empty">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li class="star-empty">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li class="star-empty">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <h4 class="review-title">
                                                                A libero scelerisque
                                                            </h4>
                                                            <div class="review-text">
                                                                “ Sed lacus velit, cursus sed libero non, auctor hendrerit neque. Cras libero urna, aliquam sed massa eu, lobortis euismod magna. ”
                                                            </div>
                                                            <div class="review-author">
                                                                <span class="pre-line"></span> John Doe
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="pager-item">
                                                        <div class="review-item text-center">
                                                            <div class="b-stars">
                                                                <ul class="list-inline">
                                                                    <li>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <h4 class="review-title">
                                                                Ut enim ad minima veniam, quis nostrum
                                                            </h4>
                                                            <div class="review-text">
                                                                Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?                                                                </div>
                                                            <div class="review-author">
                                                                <span class="pre-line"></span> Bonorum et Malorum
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="custom-slideshow-controls hidden-xs">
                                                <span id="pager-slideshow-prev"></span>
                                                <span id="pager-slideshow-next"></span>
                                            </div>
                                        </div>
                                        <!-- END bxslider with custom pager -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- custom bxslider pager -->
                        <div class="bx-pager reviews-pager text-center">
                            <a data-slide-index="0" href="">
                                <img src="public/media/components/b-service/review-author-1.jpg" class="img-circle" alt="/">
                            </a>
                            <a data-slide-index="1" href="">
                                <img src="public/media/components/b-service/review-author-2.jpg" class="img-circle" alt="/">
                            </a>
                            <a data-slide-index="2" href="">
                                <img src="public/media/components/b-service/review-author-3.jpg" class="img-circle" alt="/">
                            </a>
                        </div>
                    </div>
                    <!-- Clients -->
                    <div class="b-clients wow fadeInUp">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <ul class="list-inline clients-list">
                                        <li>
                                            <a href="https://themeforest.net/" target="_blank">
                                                <img src="public/media/components/b-clients/client-1.jpg" alt="/">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://themeforest.net/" target="_blank">
                                                <img src="public/media/components/b-clients/client-2.jpg" alt="/">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://themeforest.net/" target="_blank">
                                                <img src="public/media/components/b-clients/client-3.jpg" alt="/">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://themeforest.net/" target="_blank">
                                                <img src="public/media/components/b-clients/client-4.jpg" alt="/">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://themeforest.net/" target="_blank">
                                                <img src="public/media/components/b-clients/client-5.jpg" alt="/">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://themeforest.net/" target="_blank">
                                                <img src="public/media/components/b-clients/client-6.jpg" alt="/">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://themeforest.net/" target="_blank">
                                                <img src="public/media/components/b-clients/client-7.jpg" alt="/">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://themeforest.net/" target="_blank">
                                                <img src="public/media/components/b-clients/client-8.jpg" alt="/">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://themeforest.net/" target="_blank">
                                                <img src="public/media/components/b-clients/client-9.jpg" alt="/">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://themeforest.net/" target="_blank">
                                                <img src="public/media/components/b-clients/client-10.jpg" alt="/">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://themeforest.net/" target="_blank">
                                                <img src="public/media/components/b-clients/client-11.jpg" alt="/">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://themeforest.net/" target="_blank">
                                                <img src="public/media/components/b-clients/client-12.jpg" alt="/">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
