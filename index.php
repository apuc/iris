<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Iris_Home
 */

get_header(); ?>

    <main class="main main-page">
        <section class="section-1 slider-wrap">
            <div class="slider-center-block">
                <h1 class="title">Скидка 30% <br> на новую коллекцию</h1>
                <a href="" class="title-button">Посмотреть коллекцию</a>
            </div>
            <div class="head-slider">
                <div class="head-slider-item">
                    <img class="slider-big-img" src="images/img-1.jpg" alt="">
                </div>
                <div class="head-slider-item">
                    <img class="slider-big-img" src="images/img-2.jpg" alt="">
                </div>
                <div class="head-slider-item">
                    <img class="slider-big-img" src="images/img-2.jpg" alt="">
                </div>
            </div>
        </section>

        <section class="section-2">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h2 class="content-title">Категории товаров</h2>
                        <ul class="content-list">
                            <li class="content-item bg-1">
                                <a href="">Постельное белье</a>
                            </li>
                            <li class="content-item bg-2">
                                <a href="">Cоздать свой комплект</a>
                            </li>
                            <li class="content-item bg-3">
                                <a href="">Покрывала и пледы</a>
                            </li>
                            <li class="content-item bg-4">
                                <a href="">Подушки и одеяла</a>
                            </li>
                            <li class="content-item bg-5">
                                <a href="">Полотенца и халаты</a>
                            </li>
                            <li class="content-item bg-6">
                                <a href="">Аксессуары</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-3">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h2 class="content-title">Наш instagram</h2>
                        <div class="content-wrap responsive-slider">
                            <div class="content-img-wrap img-wrap-1">
                                <img src="images/inst-1.jpg" alt="">
                            </div>
                            <div class="content-img-wrap img-wrap-2">
                                <img src="images/inst-2.jpg" alt="">
                            </div>
                            <div class="content-img-wrap img-wrap-3">
                                <img src="images/inst-3.jpg" alt="">
                            </div>
                            <div class="content-img-wrap img-wrap-4">
                                <img src="images/inst-4.jpg" alt="">
                            </div>
                            <div class="content-img-wrap img-wrap-5">
                                <img src="images/inst-5.jpg" alt="">
                            </div>
                            <div class="content-img-wrap img-wrap-6">
                                <img src="images/inst-6.jpg" alt="">
                            </div>
                        </div>
                        <div class="button-wrap">
                            <a href="" class="title-button title-button-color">Посмотреть профиль</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-4">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h2 class="content-title">Нам доверяют</h2>
                        <div class="slider-content">
                            <div class="feedback-item">
                                <div class="feedback-left-block">
                                    <div class="img-wrap">
                                        <img src="http://placehold.it/140x140" alt="">
                                    </div>
                                    <p class="user-name">Имя<br>Фамилия</p>
                                    <a href="" class="feedback-link">Ссылка на отзыв</a>
                                </div>
                                <div class="feedback-right-block">
                                    <p class="user-name">Имя Фамилия</p>
                                    <div class="feedback-text-wrap">
                                        <div class="scrollbar style-3">
                                            <div class="force-overflow">
                                                <p class="feedback-text">
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent vel consequat mi.
                                                    Donec gravida lectus justo, at tempor
                                                    lectus ultrices non. Vivamus at dolor
                                                    congue, auctor tellus at, faucibus dolor.
                                                    Nunc vehicula gravida quam, et blandit
                                                    odio egestas pulvinar. Fusce vel velit purus.
                                                    Nulla eu venenatis dolor, ut placerat est.
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent vel consequat mi.
                                                    Donec gravida lectus justo, at tempor
                                                    lectus ultrices non. Vivamus at dolor
                                                    congue, auctor tellus at, faucibus dolor.
                                                    Nunc vehicula gravida quam, et blandit
                                                    odio egestas pulvinar. Fusce vel velit purus.
                                                    Nulla eu venenatis dolor, ut placerat est.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-item">
                                <div class="feedback-left-block">
                                    <div class="img-wrap">
                                        <img src="http://placehold.it/140x140" alt="">
                                    </div>
                                    <p class="user-name">Имя<br>Фамилия</p>
                                    <a href="" class="feedback-link">Ссылка на отзыв</a>
                                </div>
                                <div class="feedback-right-block">
                                    <p class="user-name">Имя Фамилия</p>
                                    <div class="feedback-text-wrap">
                                        <div class="scrollbar style-3">
                                            <div class="force-overflow">
                                                <p class="feedback-text">
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent vel consequat mi.
                                                    Donec gravida lectus justo, at tempor
                                                    lectus ultrices non. Vivamus at dolor
                                                    congue, auctor tellus at, faucibus dolor.
                                                    Nunc vehicula gravida quam, et blandit
                                                    odio egestas pulvinar.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-item">
                                <div class="feedback-left-block">
                                    <div class="img-wrap">
                                        <img src="http://placehold.it/140x140" alt="">
                                    </div>
                                    <p class="user-name">Имя<br>Фамилия</p>
                                    <a href="" class="feedback-link">Ссылка на отзыв</a>
                                </div>
                                <div class="feedback-right-block">
                                    <p class="user-name">Имя Фамилия</p>
                                    <div class="feedback-text-wrap">
                                        <div class="scrollbar style-3">
                                            <div class="force-overflow">
                                                <p class="feedback-text">
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent vel consequat mi.
                                                    Donec gravida lectus justo, at tempor
                                                    lectus ultrices non. Vivamus at dolor
                                                    congue, auctor tellus at, faucibus dolor.
                                                    Nunc vehicula gravida quam, et blandit
                                                    odio egestas pulvinar. Fusce vel velit purus.
                                                    Nulla eu venenatis dolor, ut placerat est.
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent vel consequat mi.
                                                    Donec gravida lectus justo, at tempor
                                                    lectus ultrices non. Vivamus at dolor
                                                    congue, auctor tellus at, faucibus dolor.
                                                    Nunc vehicula gravida quam, et blandit
                                                    odio egestas pulvinar. Fusce vel velit purus.
                                                    Nulla eu venenatis dolor, ut placerat est.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback-item">
                                <div class="feedback-left-block">
                                    <div class="img-wrap">
                                        <img src="http://placehold.it/140x140" alt="">
                                    </div>
                                    <p class="user-name">Имя<br>Фамилия</p>
                                    <a href="" class="feedback-link">Ссылка на отзыв</a>
                                </div>
                                <div class="feedback-right-block">
                                    <p class="user-name">Имя Фамилия</p>
                                    <div class="feedback-text-wrap">
                                        <div class="scrollbar style-3">
                                            <div class="force-overflow">
                                                <p class="feedback-text">
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent vel consequat mi.
                                                    Donec gravida lectus justo, at tempor
                                                    lectus ultrices non. Vivamus at dolor
                                                    congue, auctor tellus at, faucibus dolor.
                                                    Nunc vehicula gravida quam, et blandit
                                                    odio egestas pulvinar. Fusce vel velit purus.
                                                    Nulla eu venenatis dolor, ut placerat est.
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent vel consequat mi.
                                                    Donec gravida lectus justo, at tempor
                                                    lectus ultrices non. Vivamus at dolor
                                                    congue, auctor tellus at, faucibus dolor.
                                                    Nunc vehicula gravida quam, et blandit
                                                    odio egestas pulvinar. Fusce vel velit purus.
                                                    Nulla eu venenatis dolor, ut placerat est.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-5">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h3 class="block-title">Подпишись на новости и получи подарок!</h3>
                        <form action="" class="main-form">
                            <input type="text" class="mail-input" placeholder="Ваш e-mail">
                            <input class="title-button title-button-color" type="submit" value="Подписаться">
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

	<!--<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
/*		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : */?>
				<header>
					<h1 class="page-title screen-reader-text"><?php /*single_post_title(); */?></h1>
				</header>

			<?php
/*			endif;

			while ( have_posts() ) : the_post();


				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; */?>

		</main>
	</div>-->

<?php
get_footer();
