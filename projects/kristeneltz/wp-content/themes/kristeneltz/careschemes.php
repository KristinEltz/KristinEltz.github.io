<?php
/*
Template Name: careschemes
*/
?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Кристен Эльц - приобрести доступ к индивидуальному уходу за волосами</title>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/care.css">
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.1.1.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '2090932064346063');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=2090932064346063&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->

        <?php wp_head(); ?>
    </head>

<body>

<header class="header">
    <div class="container">
        <div class="top-menu -desc">
            <div class="row">
                <div class="col-md-4">
                    <div class="top-menu-left">
                        <span class="top-menu-item"><span class="cross" id="x"></span></span>
                        <span class="top-menu-item"><a href="<?php echo get_page_link(13)?>">Вход</a></span>
                        <span class="top-menu-item popup"><a href="javascript:void(0)">Поддержка</a></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-menu-center">
                        <div class="top-logo"><a href="//kristeneltz.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="logo" alt="logo"></a></div>
                    </div>
                </div>
            </div>
            <div class="top-menu-toggle">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-menu-heading">Навигация</div>
                        <div class="footer-menu-item"><a href="//kristeneltz.com">На главную</a></div>
                        <div class="footer-menu-item"><a href="<?php echo get_page_link(108)?>">Схемы ухода</a></div>
                        <div class="footer-menu-item"><a href="<?php echo get_page_link(35)?>">Базовый уход</a></div>
                        <div class="footer-menu-item"><a href="<?php echo get_page_link(23)?>">Персональный уход</a></div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-menu-heading">Аккаунт</div>
                        <div class="footer-menu-item"><a href="<?php echo get_page_link(14)?>">Учетная запись</a></div>
                        <div class="footer-menu-item"><a href="<?php echo get_page_link(15)?>">Восстановление пароля</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-menu -mob">
        <div class="top-menu-icon">
            <span class="cross" id="x"></span>
            <a href="//kristeneltz.com" class="mob-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="logo" alt="logo"></a>
        </div>

        <div class="top-menu-toggle">
            <div class="top-menu-toggle-mob">
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(13)?>">Вход</a></div>
                <div class="toggle-mob-item"><a href="//kristeneltz.com">На главную</a></div>
                <div class="toggle-mob-item popup"><a href="javascript:void(0)">Поддержка</a></div>
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(108)?>">Схемы ухода</a></div>
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(35)?>">Базовый уход</a></div>
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(23)?>">Персональный уход</a></div>
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(14)?>">Учетная запись</a></div>
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(15)?>">Восстановление пароля</a></div>
            </div>
        </div>
    </div>
</header>


<main>

    <section class="block1 block1-schemes">
        <div class="container">
            <div class="block1-wrap bg-wrap">
                <div class="head-schemes">СХЕМЫ УХОДА</div>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hair-care.jpg" width="100%" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="schemes-header">Что такое схемы ухода?</div>
                            <p>Это подробные инструкции, рецепты по уходу за разными волосами с разными проблемами. Все представленные ниже схемы предназначены для ухода в домашних условиях, без салона и салонных процедур. </p>

                            <div class="schemes-header">Что ждет в файлах?</div>

                            <p>
                                В файлах написано несколько вариантов ухода для одной проблемы, а именно:
                                <br>
                                <i class="fa fa-play" style="color: black; padding-right: 0; font-size: 14px" aria-hidden="true"></i> какими средствами ухаживать
                                <br>
                                <i class="fa fa-play" style="color: black; padding-right: 0; font-size: 14px" aria-hidden="true"></i> в каком порядке
                                <br>
                                <i class="fa fa-play" style="color: black; padding-right: 0; font-size: 14px" aria-hidden="true"></i> как часто использовать
                                <br>
                                <i class="fa fa-play" style="color: black; padding-right: 0; font-size: 14px" aria-hidden="true"></i> как правильно использовать
                                <br>
                                <i class="fa fa-play" style="color: black; padding-right: 0; font-size: 14px" aria-hidden="true"></i> как правильно выбрать средства
                                <br>
                                <i class="fa fa-play" style="color: black; padding-right: 0; font-size: 14px" aria-hidden="true"></i> даны списки с названиями, ценами и ссылками где можно купить данные средства наиболее выгодно.

                            </p>

                            <p>Средства подобраны на любой кошелек от 100 руб. до профессиональных и дорогих.</p>

                            <p>Представленные средства максимально эффективные в своей ценовой категории и подбирались на основании личного опыта, а также отзывов других людей.</p>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section class="block2 block2-schemes">
        <div class="container">
            <div class="block1-wrap">
                <div class="head-schemes">КАКИЕ СХЕМЫ УХОДА МОЖНО ПОЛУЧИТЬ</div>

               <div class="schemes-container">
                   <div class="row">
                       <div class="col-md-4" style="border: 8px solid #eeb8ad;">
                           <div class="buy-container">
                               <div class="block-buy-img"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hair-care.jpg" width="200" alt=""></div>
                               <div class="block-buy-name">C ЧЕГО НАЧАТЬ УХОД ЗА ВОЛОСАМИ</div>
                               <div class="block-buy-feature"><b>Кому подойдет:</b> всем кто хочет научится правильно ухаживать за своими волосами и иметь красивые и здоровые волосы.</div>
                               <div class="block-buy-price">ЦЕНА: БЕСПЛАТНО</div>
                               <div class="block-buy-btn"><a href="<?php echo get_stylesheet_directory_uri(); ?>/filestosend/hair-care.pdf" download class="btn-schemes-buy">СКАЧАТЬ</a></div>
                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="buy-container">
                               <div class="block-buy-img"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/oily-scalp.jpg" width="200" alt=""></div>
                               <div class="block-buy-name">СХЕМЫ УХОДА ЗА ЖИРНЫМ ТИПОМ КОЖИ ГОЛОВЫ</div>
                               <div class="block-buy-feature"><b>Кому подойдет:</b> если голова быстро становится жирной, если приходится мыть голову каждый день или через день.</div>
                               <div class="block-buy-price">ЦЕНА: 129 руб. / 2,20$</div>
                               <div class="block-buy-btn"><a href="<?php echo get_page_link(112)?>" target="_blank" class="btn-schemes-buy">УЗНАТЬ ПОДРОБНЕЕ</a></div>
                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="buy-container">
                               <div class="block-buy-img"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/normal-scalp.jpg" width="200" alt=""></div>
                               <div class="block-buy-name">СХЕМЫ УХОДА ЗА НОРМАЛЬНЫМ ТИПОМ КОЖИ ГОЛОВЫ</div>
                               <div class="block-buy-feature"><b>Кому подойдет:</b> если голова не быстро становится жирной и если мыть голову нужно каждые два-четыре дня.</div>
                               <div class="block-buy-price">ЦЕНА: 109 руб. / 1,73$</div>
                               <div class="block-buy-btn"><a href="<?php echo get_page_link(116)?>" target="_blank" class="btn-schemes-buy">УЗНАТЬ ПОДРОБНЕЕ</a></div>
                           </div>
                       </div>
                   </div>
               </div>

                <div class="schemes-container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="buy-container">
                                <div class="block-buy-img"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dry-scalp.jpg" width="200" alt=""></div>
                                <div class="block-buy-name">СХЕМЫ УХОДА ЗА СУХИМ ТИПОМ КОЖИ ГОЛОВЫ</div>
                                <div class="block-buy-feature"><b>Кому подойдет:</b> если голова становится долго жирной, а мыть приходится примерно раз в 4-7 дней, также может наблюдаться сухость, стянутость кожи головы и чувствительность.</div>
                                <div class="block-buy-price">ЦЕНА: 99 руб. / 1,57$</div>
                                <div class="block-buy-btn"><a href="<?php echo get_page_link(118)?>" target="_blank" class="btn-schemes-buy">УЗНАТЬ ПОДРОБНЕЕ</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="buy-container">
                                <div class="block-buy-img"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/damaged-hair.jpg" width="200" alt=""></div>
                                <div class="block-buy-name">СХЕМЫ ВОССТАНОВЛЕНИЯ ВОЛОС И УХОД ЗА ПОВРЕЖДЕННЫМИ ВОЛОСАМИ</div>
                                <div class="block-buy-feature"><b>Кому подойдет:</b> если волосы повреждены, не важно чем, окрашиванием, плойками или просто неправильным уходом.</div>
                                <div class="block-buy-price">ЦЕНА: 189 руб. / 3$</div>
                                <div class="block-buy-btn"><a href="<?php echo get_page_link(120)?>" target="_blank" class="btn-schemes-buy">УЗНАТЬ ПОДРОБНЕЕ</a></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="buy-container">
                                <div class="block-buy-img"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fluffy-hair.jpg" width="200" alt=""></div>
                                <div class="block-buy-name">СХЕМЫ УХОДА ЗА ПУШИСТЫМИ ВОЛОСАМИ</div>
                                <div class="block-buy-feature"><b>Кому подойдет:</b> если волосы пушатся. <br> <b>Дата выхода:</b> конец января.</div>
                                <div class="block-buy-price">ЦЕНА: -</div>
<!--                                <div class="block-buy-btn"><a href="#" target="_blank" class="btn-schemes-buy">УЗНАТЬ ПОДРОБНЕЕ</a></div>-->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="block3 block3-schemes">
        <div class="container">
            <div class="block1-wrap">
                <div class="head-schemes">ВАШИ ОТЗЫВЫ И КОММЕНТАРИИ</div>

                <?php
                // Start the loop.
                while ( have_posts() ) :
                    the_post();

                    // Include the page content template.
                    get_template_part( 'template-parts/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }

                    // End of the loop.
                endwhile;
                ?>


            </div>
        </div>
    </section>



</main>



<?php
get_footer(); ?>