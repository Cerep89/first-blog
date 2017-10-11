<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="b-page-wrap">

    <!-- Loader-->
    <div id="page-preloader"><div class="loader-wrap"><span class="loader02"></span></div></div>
    <!-- Loader end-->

    <!-- ==========================-->
    <!-- SEARCH MODAL-->
    <!-- ==========================-->
    <div class="header-search open-search">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                    <div class="navbar-search">
                        <form class="search-global">
                            <input type="text" placeholder="Type to search" autocomplete="off" name="s" value="" class="search-global__input"/>
                            <button class="search-global__btn"><i class="icon fa fa-search"></i></button>
                            <div class="search-global__note">Begin typing your search above and press return to search.</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="search-close close"><i class="fa fa-times"></i></button>
    </div>
    <!-- ==========================-->
    <!-- MOBILE MENU-->
    <!-- ==========================-->
    <div data-off-canvas="mobile-slidebar left overlay"><a href="index-2.html" class="navbar-brand scroll"><img src="public/media/general/logo-white.png" alt="logo" class="normal-logo"/>Futurico</a>
        <ul class="nav navbar-nav">
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Home<b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="index-1.html" tabindex="-1">Home 01</a></li>
                    <li><a href="index-2.html" tabindex="-1">Home 02</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Services<b class="caret"></b>
                    <!-- Classic Dropdown--></a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="service-1.html" tabindex="-1">Services 01</a></li>
                    <li><a href="service-2.html" tabindex="-1">Services 02</a></li>
                </ul>
            </li>
            <li><a href="gallery-3.html">Works</a></li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">About<b class="caret"></b>
                    <!-- Classic Dropdown--></a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="about-1.html" tabindex="-1">About 01</a></li>
                    <li><a href="about-2.html" tabindex="-1">About 02</a></li>
                    <li><a href="about-me.html" tabindex="-1">About me</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">News<b class="caret"></b>
                    <!-- Classic Dropdown--></a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="blog-1.html" tabindex="-1">Blog 01</a></li>
                    <li><a href="blog-2.html" tabindex="-1">Blog 02</a></li>
                    <li><a href="blog-single.html" tabindex="-1">Blog Single</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Portfolio<b class="caret"></b>
                    <!-- Classic Dropdown--></a>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="gallery-1.html" tabindex="-1">Gallery 01</a></li>
                    <li><a href="gallery-2.html" tabindex="-1">Gallery 02</a></li>
                    <li><a href="gallery-3.html" tabindex="-1">Gallery 03</a></li>
                    <li><a href="gallery-single.html" tabindex="-1">Gallery Single</a></li>
                </ul>
            </li>
            <li><a href="contacts.html">Contacts</a></li>
        </ul>
    </div>

    <?= $content?>

<footer>
    <div class="b-footer-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="b-socials">
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/">
                                    <i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/">
                                    <i class="fa fa-twitter fa-fw" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/">
                                    <i class="fa fa-pinterest fa-fw" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://vk.com/">
                                    <i class="fa fa-vk fa-fw" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.behance.net/">
                                    <i class="fa fa-behance fa-fw" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <p class="copy">
                        &copy; 2017 Futurico <sup>&reg;</sup> All Right Reserved
                    </p>
                    <a href="index-2.html" class="footer-logo">
                        <img src="public/media/general/logo-footer.png" alt="/">
                    </a>
                </div>
                <div class="col-xs-4 col-sm-3 col-md-2">
                    <div class="b-footer-box">
                        <h5 class="footer-box-title">
                            Links
                        </h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                            <li>
                                <a href="login.php">Sign In</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-3 col-md-2">
                    <div class="b-footer-box">
                        <h5 class="footer-box-title">
                            About Us
                        </h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="about.php">About Us</a>
                            </li>
                            <li>
                                <a href="category.php">Blog</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-3 col-md-2">
                    <div class="b-footer-box">
                        <h5 class="footer-box-title">
                            About Us
                        </h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Patents</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-2">
                    <div class="b-footer-box">
                        <h5 class="footer-box-title">
                            Working Hours
                        </h5>
                        <p>
                            Monday-Friday:8am-8pm<br>Saturday 9am-1pm
                        </p>
                        <p class="footer-mail">
                            support@futurico.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
