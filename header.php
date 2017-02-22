<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Iris_Home
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header class="header">
        <div class="header-top-block">
            <div class="container">
                <div class="row">
                    <div class="header-left-column col-lg-4 col-md-5 col-sm-5 hidden-xs">
                        <form action="" class="search-form">
                            <input type="text" class="search" placeholder="Я ищу...">
                        </form>
                        <ul class="net-block">
                            <li><a class="icon icon-insta-head" href=""></a></li>
                            <li><a class="icon icon-vk-head" href=""></a></li>
                            <li><a class="icon icon-fb-head" href=""></a></li>
                        </ul>
                    </div>
                    <div class="header-center-column col-lg-5 col-md-3 col-sm-3 col-xs-5">
                        <a href="" class="logo">
                            <img src="images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="header-right-column col-lg-3 col-md-4 col-sm-4 col-xs-7">
                        <a class="cart-block">
                            <i class="icon icon-cart"></i>
                            <span class="cart-title">5</span>
                        </a>
                        <a class="phone" href="tel:+88000000000">8 (800) 000-00-00</a>
                    </div>
                </div>
                <div class="cart">
                    <p class="cart-head">У вас в корзине 2 товара<br> на сумму 12 000р.</p>
                    <div class="cart-body">
                        <div class="scrollbar style-3">
                            <div class="force-overflow">
                                <ul class="cart-list">
                                    <li class="cart-item clearfix">
                                        <i class="icon icon-cart-close"></i>
                                        <div class="cart-img-wrap">
                                            <img src="images/cart-photo.jpg" alt="">
                                        </div>
                                        <div class="cart-text-wrap">
                                            <p class="cart-name">Постельное белье "Two"</p>
                                            <div class="cart-price-block clearfix">
                                                <p class="cart-price"> 7 500 р.</p>
                                                <p class="delete-link">Удалить</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cart-item clearfix">
                                        <i class="icon icon-cart-close"></i>
                                        <div class="cart-img-wrap">
                                            <img src="images/cart-photo.jpg" alt="">
                                        </div>
                                        <div class="cart-text-wrap">
                                            <p class="cart-name">Постельное белье "Two-Two"</p>
                                            <div class="cart-price-block clearfix">
                                                <p class="cart-price"> 17 500 р.</p>
                                                <p class="delete-link">Удалить</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cart-item clearfix">
                                        <i class="icon icon-cart-close"></i>
                                        <div class="cart-img-wrap">
                                            <img src="images/cart-photo.jpg" alt="">
                                        </div>
                                        <div class="cart-text-wrap">
                                            <p class="cart-name">Постельное белье "Two-Two"</p>
                                            <div class="cart-price-block clearfix">
                                                <p class="cart-price"> 17 500 р.</p>
                                                <p class="delete-link">Удалить</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cart-footer">
                        <a href="" class="cart-button">Перейти в корзину</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-block">
            <div class="container">
                <div class="row">
                    <nav class="navigation" role="navigation">
                        <div class="nav-bar">
                            <div class="mobile-menu hidden-sm">
                                <i class="icon icon-mobile-menu"></i>
                                <i class="icon icon-menu-close"></i>
                            </div>

                            <ul>
                                <li><a href="#">Главная</a></li>
                                <li><a href="#">Каталог</a></li>
                                <li><a href="#">Coздать комплект</a></li>
                                <li><a href="#">Доставка и оплата</a></li>
                                <li><a href="#">О нас</a></li>
                                <li><a href="#">Опт</a></li>
                                <li><a href="#">Контакты</a></li>
                                <li><a href="#">Наши новости</a></li>
                                <li><a href="#">Instashop</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
