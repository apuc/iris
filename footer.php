<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Iris_Home
 */

?>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="tab_container">
                <h3 class="tab_drawer_heading" rel="tab1">Информация</h3>
                <div id="tab1" class="tab_content">
                    <p class="footer-title">Информация</p>
                    <ul class="tab_content-list">
                        <li><a href="">О нас</a></li>
                        <li><a href="">Доставка</a></li>
                        <li><a href="">Оплата</a></li>
                    </ul>
                </div>
                <!-- #tab1 -->
                <h3 class="tab_drawer_heading" rel="tab2">Покупателям</h3>
                <div id="tab2" class="tab_content">
                    <p class="footer-title">Покупателям</p>
                    <ul class="tab_content-list">
                        <li><a href="">Каталог</a></li>
                        <li><a href="">Создать комплект</a></li>
                        <li><a href="">О нас</a></li>
                    </ul>
                </div>
                <!-- #tab2 -->
                <h3 class="tab_drawer_heading" rel="tab3">Контакты</h3>
                <div id="tab3" class="tab_content">
                    <p class="footer-title">Контакты</p>
                    <ul class="tab_content-list">
                        <li><a href="tel:+78000000">+7 (800) 000 00 00</a></li>
                        <li><a href="mailto:mail@mail.ru">mail@mail.ru</a></li>
                        <li>
                            <ul class="footer-net-list">
                                <li><a href="" class="icon icon-viber-footer"></a></li>
                                <li><a href="" class="icon icon-tel-footer"></a></li>
                                <li><a href="" class="icon icon-insta-footer"></a></li>
                                <li><a href="" class="icon icon-vk-footer"></a></li>
                                <li><a href="" class="icon icon-fb-footer"></a></li>
                            </ul>
                        </li>
                        <li><a href="" class="footer-button">Заказать звонок</a></li>
                    </ul>
                    <!-- #tab3 -->
                </div>
                <!-- .tab_container -->
            </div>
            <div class="footer-mobile-block">
                <a href="" class="footer-button">Заказать звонок</a>
                <ul class="footer-net-list">
                    <li><a href="" class="icon icon-viber-footer"></a></li>
                    <li><a href="" class="icon icon-tel-footer"></a></li>
                    <li><a href="" class="icon icon-insta-footer"></a></li>
                    <li><a href="" class="icon icon-vk-footer"></a></li>
                    <li><a href="" class="icon icon-fb-footer"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
