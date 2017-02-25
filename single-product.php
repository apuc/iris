<?php
/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 24.02.2017
 * Time: 10:48
 */

get_header();
while (have_posts()) : the_post();

    global $post, $product, $woocommerce;

    $variations['Наволочки (4шт):'] = explode(',', $product->get_attribute('duvet-cover'))[0];
    $variations['Простынь, мм:'] = explode(',', $product->get_attribute('pillowcases'))[0];
    $variations['Пододеяльник, мм:'] = explode(',', $product->get_attribute('sheets'))[0];

    ?>
    <main class="main product-page">

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <ul class="breadcrumb-list clearfix">
                        <li><a href="">Каталог</a></li>
                        <li><a href="">Постельное белье</a></li>
                    </ul>
                    <div class="left-column">
                        <?php include locate_template('template-parts/product/single-pruduct-slider.php'); ?>
                    </div>
                    <div class="right-column">
                        <div class="description-block">
                            <p class="art">Артикул <?= $product->get_sku(); ?></p>
                            <h3 class="product-title"><?= the_title() ?></h3>
                            <div class="info-block">
                                <p class="info-title">Цвет</p>
                                <p class="info-text"><?= $product->get_attribute('color'); ?></p>
                            </div>
                            <div class="info-block">

                                <p class="info-title">Размер</p>
                                <?php foreach ($variations as $key => $variation):
                                    if (!empty($variation)) { ?>
                                        <p class="info-text"><?= $key; ?> <?= $variation; ?></p>
                                    <?php } endforeach; ?>
                                <!--<p class="info-text">Наволочки (4шт): </p>-->
                                <!--<p class="info-text">Простынь, мм: </p>-->
                                <!--<p class="info-text">Пододеяльник, мм:</p>-->
                            </div>
                            <ul class="product-filter-list">
                                <li class="product-filter-item">
                                    <p class="filter-title info-title">Пододеяльник</p>
                                    <select>
                                        <option value="1"><a href="">110*215</a></option>
                                        <option value="2"><a href="">110*220</a></option>
                                        <option value="3"><a href="">110*225</a></option>
                                        <option value="4"><a href="">110*230</a></option>
                                    </select>
                                </li>
                                <li class="product-filter-item">
                                    <p class="filter-title info-title">Простынь</p>
                                    <select>
                                        <option value="1"><a href="">240*260</a></option>
                                        <option value="2"><a href="">110*220</a></option>
                                        <option value="3"><a href="">110*225</a></option>
                                        <option value="4"><a href="">110*230</a></option>
                                    </select>
                                </li>
                                <li class="product-filter-item">
                                    <p class="filter-title info-title">Наволочки</p>
                                    <select>
                                        <option value="1"><a href="">70*70</a></option>
                                        <option value="2"><a href="">110*220</a></option>
                                        <option value="3"><a href="">110*225</a></option>
                                        <option value="4"><a href="">110*230</a></option>
                                    </select>
                                </li>
                            </ul>
                            <ul class="counter-list">
                                <li class="counter-item">
                                    <p class="info-title">Количество</p>
                                    <div class="counter-wrap clearfix">
                                        <a class="left-btn">-</a>
                                        <p class="counter">1</p>
                                        <a class="right-btn">+</a>
                                    </div>
                                </li>
                                <li class="counter-item">
                                    <p class="info-title">Цена</p>
                                    <!--<p class="price-value">7 500 р.</p>-->
                                    <p class="price-value"><?= $product->get_price(); ?> р.</p>
                                </li>
                            </ul>
                            <a href="#" class="catalog-button"><i class="icon icon-button"></i>Добавить в корзину</a>
                        </div>
                        <div class="description-tab-block clearfix">
                            <dl class="responsive-tabs clearfix">
                                <dt>Описание</dt>
                                <dd>
                                    <div class="scrollbar style-3">
                                        <div class="force-overflow">
                                            <?= the_content(); ?>
                                        </div>
                                    </div>
                                </dd>
                                <dt>Уход</dt>
                                <dd>
                                    <div class="scrollbar style-3">
                                        <div class="force-overflow">
                                            <?= product_short_description(); ?>
                                        </div>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section-1">
            <div class="container">
                <div class="row">
                    <div class="section-wrap">
                        <h1 class="content-title">сопутствующие товары</h1>
                        <div class="slider-product-content catalog-block clearfix">
                            <div class="catalog-item">
                                <div class="img-wrap">
                                    <a href="#">
                                        <img src="images/calalog-img.jpg" alt="">
                                    </a>
                                </div>
                                <div class="info-block">
                                    <a href="#">
                                        <span class="art">Артикул 17555</span>
                                        <span class="name">Постельное белье "Two"</span>
                                        <span class="price">7 600 p.</span>
                                    </a>
                                </div>
                                <a href="#" class="catalog-button"><i class="icon icon-button"></i>Добавить в
                                    корзину</a>
                            </div>
                            <div class="catalog-item">
                                <div class="img-wrap">
                                    <a href="#">
                                        <img src="images/calalog-img.jpg" alt="">
                                    </a>
                                </div>
                                <div class="info-block">
                                    <a href="#">
                                        <span class="art">Артикул 17555</span>
                                        <span class="name">Постельное белье "Two"</span>
                                        <span class="price">7 600 p.</span>
                                    </a>
                                </div>
                                <a href="#" class="catalog-button"><i class="icon icon-button"></i>Добавить в
                                    корзину</a>
                            </div>
                            <div class="catalog-item">
                                <div class="img-wrap">
                                    <a href="#">
                                        <img src="images/calalog-img.jpg" alt="">
                                    </a>
                                </div>
                                <div class="info-block">
                                    <a href="#">
                                        <span class="art">Артикул 17555</span>
                                        <span class="name">Постельное белье "Two"</span>
                                        <span class="price">7 600 p.</span>
                                    </a>
                                </div>
                                <a href="#" class="catalog-button"><i class="icon icon-button"></i>Добавить в
                                    корзину</a>
                            </div>
                            <div class="catalog-item">
                                <div class="img-wrap">
                                    <a href="#">
                                        <img src="images/calalog-img.jpg" alt="">
                                    </a>
                                </div>
                                <div class="info-block">
                                    <a href="#">
                                        <span class="art">Артикул 17555</span>
                                        <span class="name">Постельное белье "Two"</span>
                                        <span class="price">7 600 p.</span>
                                    </a>
                                </div>
                                <a href="#" class="catalog-button"><i class="icon icon-button"></i>Добавить в
                                    корзину</a>
                            </div>
                        </div>
                        <a class="prev-button"></a>
                        <a class="next-button"></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-2">
            <div class="container">
                <div class="row">
                    <div class="section-wrap">
                        <h1 class="content-title">Мы рекомендуем</h1>
                        <div class="slider-product-content-1 catalog-block clearfix">
                            <div class="catalog-item">
                                <div class="img-wrap">
                                    <a href="#">
                                        <img src="images/calalog-img.jpg" alt="">
                                    </a>
                                </div>
                                <div class="info-block">
                                    <a href="#">
                                        <span class="art">Артикул 17555</span>
                                        <span class="name">Постельное белье "Two"</span>
                                        <span class="price">7 600 p.</span>
                                    </a>
                                </div>
                                <a href="#" class="catalog-button"><i class="icon icon-button"></i>Добавить в
                                    корзину</a>
                            </div>
                            <div class="catalog-item">
                                <div class="img-wrap">
                                    <a href="#">
                                        <img src="images/calalog-img.jpg" alt="">
                                    </a>
                                </div>
                                <div class="info-block">
                                    <a href="#">
                                        <span class="art">Артикул 17555</span>
                                        <span class="name">Постельное белье "Two"</span>
                                        <span class="price">7 600 p.</span>
                                    </a>
                                </div>
                                <a href="#" class="catalog-button"><i class="icon icon-button"></i>Добавить в
                                    корзину</a>
                            </div>
                            <div class="catalog-item">
                                <div class="img-wrap">
                                    <a href="#">
                                        <img src="images/calalog-img.jpg" alt="">
                                    </a>
                                </div>
                                <div class="info-block">
                                    <a href="#">
                                        <span class="art">Артикул 17555</span>
                                        <span class="name">Постельное белье "Two"</span>
                                        <span class="price">7 600 p.</span>
                                    </a>
                                </div>
                                <a href="#" class="catalog-button"><i class="icon icon-button"></i>Добавить в
                                    корзину</a>
                            </div>
                            <div class="catalog-item">
                                <div class="img-wrap">
                                    <a href="#">
                                        <img src="images/calalog-img.jpg" alt="">
                                    </a>
                                </div>
                                <div class="info-block">
                                    <a href="#">
                                        <span class="art">Артикул 17555</span>
                                        <span class="name">Постельное белье "Two"</span>
                                        <span class="price">7 600 p.</span>
                                    </a>
                                </div>
                                <a href="#" class="catalog-button"><i class="icon icon-button"></i>Добавить в
                                    корзину</a>
                            </div>
                        </div>
                        <a class="prev-button-bot"></a>
                        <a class="next-button-bot"></a>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php
endwhile;
get_footer();
