<?php
/*
Template Name: oily-scalp
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

    <section class="block1 block1-buy">
        <div class="container">
            <div class="block1-wrap">
                <div class="head-schemes">СХЕМЫ УХОДА ЗА ЖИРНЫМ ТИПОМ КОЖИ ГОЛОВЫ</div>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/oily-scalp.jpg" width="100%" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="schemes-header">Кому подойдет:</div>
                            <p>Если голова быстро становится жирной, если приходится мыть голову каждый день или через день.</p>

                            <div class="schemes-header">Содержание:</div>
                            <p>
                                <i class="fa fa-play" style="color: black; padding-right: 0; font-size: 14px" aria-hidden="true"></i>  Два варианта схем ухода за жирным типом. <br>
                                <i class="fa fa-play" style="color: black; padding-right: 0; font-size: 14px" aria-hidden="true"></i> Схему нормализации жирности кожи головы. <br>
                                <i class="fa fa-play" style="color: black; padding-right: 0; font-size: 14px" aria-hidden="true"></i>  Информацию о том как выбрать средства. <br>
                                <i class="fa fa-play" style="color: black; padding-right: 0; font-size: 14px" aria-hidden="true"></i>  Информацию о том как понять что данные средства подходят. <br>
                                <i class="fa fa-play" style="color: black; padding-right: 0; font-size: 14px" aria-hidden="true"></i>  Списки с названиями средств, ссылками где купить наиболее выгодно с указанием цен упорядоченные от самых бюджетных до профессиональных.
                                <br>
                                <i class="fa fa-play" style="color: black; padding-right: 0;" aria-hidden="true"></i> Памятку - как правильно использовать данные средства.
                            </p>

                            <div class="schemes-header">Количество страниц:</div>
                            <p>15 стр. в pdf файле.</p>

                        </div>
                    </div>
            </div>
        </div>
    </section>


    <section class="block2 block2-buy">
        <div class="container">
            <div class="block1-wrap">

                <div class="block1-text block-pay">

                    <div class="block-pay-price">
                        <span class="price">Цена: 129 руб / 2,20$</span>
                        <br>
                        После оплаты файл со схемами ухода будет автоматически отправлен на email указанный при оплате.
                        <div class="how-to-pay-head">Как оплатить из Украины, Беларуси?</div>
                        <div class="how-to-pay">
                            1. Установите в браузер расширение VPN, например для Chrome - <a href="https://chrome.google.com/webstore/detail/vpncity-fast-unlimited-vp/nnpnnpemnckcfdebeekibpiijlicmpom?hl=en-GB">VPNCity</a>.
                            <br>
                            2. Включите VPN. <br>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vpn.jpg" width="200px" alt=""> <br>
                            3. С включеным VPN зайдите снова на <a href="https://kristeneltz.com/careschemes/">сайт</a> или обновите страницу, выберете схему которую хотите приобрести, выберете способ оплаты банковской картой и следуйте дальнейшим инструкциями.
                            <br> <br>
                            <span style="font-size: 15px; line-height: 11px;">*<b>Принимаются карты выпущенные в следующих странах:</b> Азербайджан, Армения, Белоруссия, Грузия, Казахстан, Кыргызстан, Латвия, Литва, Молдова, Россия, Таджикистан, Турция, Туркменистан, Украина, Узбекистан, Эстония, Южная Осетия.</span>
                        </div>
                    </div>

                    <div class="pay">

                        <form method="POST" action="https://money.yandex.ru/quickpay/confirm.xml">
                            <input type="hidden" name="receiver" value="410019960878285">
                            <input type="hidden" name="label" value="oily-scalp">
                            <input type="hidden" name="need-email" value="true">
                            <input type="hidden" name="quickpay-form" value="donate">
                            <input type="hidden" name="targets" value="Жирный тип">
                            <input type="hidden" name="sum" value="2.00" data-type="number">
                            <label><input type="radio" name="paymentType" value="PC">Яндекс.Деньгами</label>
                            <label><input type="radio" name="paymentType" value="AC">Банковской картой</label>
                            <input type="hidden" name="successURL" value="https://kristeneltz.com/payment-success/">
                            <input type="submit" class="btn-form-buy" value="Перевести">
                        </form>

                    </div>
                    * Очень важно после оплаты не закрывать страницу, а нажать кнопку вернутся на сайт - <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tothankyoupage.png"  width="140px"; alt="">, тогда письмо с файлом отправится автоматически, если письмо не пришло, проверьте папку спам и напишите на почту kristeneltz@yandex.ru.
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