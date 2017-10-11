<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<header class="header-v2 wow slideInDown">
    <?= $this->render('/partials/header');?>
</header>

<div class="site-contact">
    <div class="b-page-content map-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 text-center">
                    <!-- Breadcrumbs -->
                    <div class="b-breadcrumbs wow slideInDown">
                        <ul class="list-inline">
                            <li>
                                <a href="index.php">
                                    home
                                </a>
                            </li>
                            <li class="current">
                                Contacts
                            </li>
                        </ul>
                    </div>
                    <h1 class="main-heading">
                        Contact Us
                    </h1>
                    <div class="heading-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus
                            <br>
                            vitae condimentum egestas, libero dolor auctor tellus
                        </p>
                    </div>
                </div>
                <!-- Info columns -->
                <div class="b-info-columns-holder col-xs-12 col-sm-12 wow fadeInUp">
                    <div class="row equal">
                        <div class="b-info-column col-xs-6 col-sm-3">
                            <div class="info-column-icon">
                                <i class="flaticon-placeholder"></i>
                            </div>
                            <h6 class="info-column-title">
                                Address
                            </h6>
                            <div class="info-column-text">
                                <p>
                                    25, Lomonosova St.
                                    <br>
                                    Moscow, Russia, 665087
                                </p>
                            </div>
                        </div>
                        <div class="b-info-column col-xs-6 col-sm-3">
                            <div class="info-column-icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <h6 class="info-column-title">
                                Phone
                            </h6>
                            <div class="info-column-text">
                                <p>
                                    +7 234 949-58-83
                                    <br>
                                    +7 239 585-58-61
                                </p>
                            </div>
                        </div>
                        <div class="b-info-column col-xs-6 col-sm-3">
                            <div class="info-column-icon">
                                <i class="flaticon-envelope"></i>
                            </div>
                            <h6 class="info-column-title">
                                E-mail
                            </h6>
                            <div class="info-column-text">
                                <p>
                                    support@futurico.com
                                </p>
                            </div>
                        </div>
                        <div class="b-info-column col-xs-6 col-sm-3">
                            <div class="info-column-icon">
                                <i class="flaticon-square"></i>
                            </div>
                            <h6 class="info-column-title">
                                Working Hours
                            </h6>
                            <div class="info-column-text">
                                <p>
                                    Monday-Friday: 8am-8pm
                                    <br>
                                    Saturday 9am-1pm
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="b-map-form-holder">
            <div class="map-form-switcher">
                <div class="switcher-bg">
                    <span class="switcher-text text-uppercase">Form</span>
                    <span class="switcher-toggle">
                                <span class="icon"></span>
                            </span>
                    <span class="switcher-text text-uppercase">Map</span>
                </div>
            </div>
            <div class="b-map">
                <div id="map" class="ui-map"></div>
            </div>
            <div class="b-contact-form">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <!-- Modded Form for simple valid check -->
                            <form id="contact-form" class="b-form form-check" method="get" action="#">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 form-check-line">
                                            <input type="text" pattern=".{3,}" class="required-field form-control" id="user-name" placeholder="Your Name">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 form-check-line">
                                            <input type="email" pattern=".{3,}" class="required-field mailfield form-control" id="user-email" placeholder="Your Email" autocomplete="off">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 form-check-line">
                                            <input type="text" pattern=".{3,}" class="required-field form-control" id="user-subject" placeholder="Subject" autocomplete="off">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 form-check-line">
                                            <textarea id="user-message" class="required-field textfield form-control" rows="6" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-xs-12 col-sm-12">
                                            <button type="submit" class="btn btn-submit text-uppercase">
                                                Send Message
                                            </button>
                                            <div class="send-alert send-success">
                                                Your message was sent successfully. Thanks!
                                            </div>
                                            <div class="send-alert send-error">
                                                Please check the form carefully for errors!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>