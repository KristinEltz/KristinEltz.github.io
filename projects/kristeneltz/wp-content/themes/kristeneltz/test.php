<?php
/*
Template Name: test
*/
?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Кристен Эльц - подбери свой индивидуальный уход за волосами</title>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/media_index.css">
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.1.1.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
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
                        <div class="footer-menu-item"><a href="<?php echo get_page_link(108)?>">Схемы ухода</a></div>
                        <div class="footer-menu-item"><a href="<?php echo get_page_link(35)?>">Базовый уход</a></div>
                        <div class="footer-menu-item"><a href="<?php echo get_page_link(11)?>">Приобрести доступ к подбору рекомендаций</a></div>
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
                <div class="toggle-mob-item popup"><a href="javascript:void(0)">Поддержка</a></div>
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(108)?>">Схемы ухода</a></div>
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(35)?>">Базовый уход</a></div>
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(11)?>">Приобрести доступ к подбору рекомендаций</a></div>
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(23)?>">Персональный уход</a></div>
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(14)?>">Учетная запись</a></div>
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(15)?>">Восстановление пароля</a></div>
            </div>
        </div>
    </div>
</header>

<main>

    <section class="block-1">
            <div class="schemes-container">
                    <div class="block-1-wrap">
                        <div class="container">
                        <div class="block1-header">Подбери свой индивидуальный уход за волосами.</div>
                    </div>
                        <div class="block2-icon -mob"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insta-img.jpg" width="100%" alt=""></div>
                        <div class="container">
                        <div class="block1-text1">Меня зовут Кристен Эльц, я бывший парикмахер и я создала этот сайт чтобы ты могла легко подобрать свой персональный уход за волосами.

                            Я вложила сюда весь свой парикмахерский опыт и знания и очень надеюсь что эти рекомендации помогут улучшить состояние твоих волос.
                        </div>
                        </div>
                    </div>

                <div class="container">
                    <div class="row block-1-row">
                        <div class="col-md-5">
                        </div>
                        <div class="col-md-7 block-to-schemes">
                            <div class="block2-header block2-header-schemes">СКАЧАТЬ СХЕМЫ УХОДА ЗА ВОЛОСАМИ</div>
                            <p class="-mob" style="text-align: center;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hair-care.jpg" width="18%" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/oily-scalp.jpg" width="18%" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/normal-scalp.jpg" width="18%" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dry-scalp.jpg" width="18%" alt="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/damaged-hair.jpg" width="18%" alt="">
                            </p>
                            <p><i class="fa fa-play" style="color: black; padding-right: 0;" aria-hidden="true"></i> Здесь тебя ждут подробные инструкции, рецепты по уходу за разными волосами с разными проблемами. </p>
                            <p><i class="fa fa-play" style="color: black; padding-right: 0;" aria-hidden="true"></i>  Все схемы предназначены для ухода в домашних условиях, без салона и салонных процедур.</p>
                            <p><i class="fa fa-play" style="color: black; padding-right: 0;" aria-hidden="true"></i>  В схемах ухода подобраны максимально эффективные средства с ссылками где их купить наиболее выгодно, с указанием цен и упорядоченные от самых бюджетных до профессиональных.</p>
                            <a href="<?php echo get_page_link(108)?>" class="btn-red"><i class="fa fa-play" target="_blank" aria-hidden="true"></i>ПЕРЕЙТИ К СХЕМАМ</a>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <section class="block2 block-padding">
<!--        <div class="background-line"></div>-->
        <div class="container">
            <div class="row block2-row">
                <div class="col-md-6">
                    <div class="block2-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/222.jpg" class="block2-icon" alt="basecare"></div>
                    <div class="block2-header">Базовые рекомендации по уходу за волосами.</div>
                    <p>Здесь собрана базовая информация и базовый набор средств, который должен быть абсолютно у каждой девушки независимо от типа волос и проблем с волосами.
                        Все собранные здесь рекомендации обязательно нужно прочитать и знать, прежде чем приступить к подбору персональных рекомендаций.
                    </p>
                    <p>Доступ к данной информации абсолютно бесплатный.</p>
                    <a href="<?php echo get_page_link(35)?>" class="btn-red"><i class="fa fa-play" aria-hidden="true"></i>Читать</a>
                </div>
                <div class="col-md-6">
                    <div class="block2-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/111.jpg" class="block2-icon" alt="haircare"></div>
                    <div class="block2-header">Подобрать индивидуальные рекомендации по уходу исходя из особенностей и проблем с волосами.</div>
                    <p>Здесь тебя ждет индивидуальный подбор рекомендаций исходя из особенностей и проблем с твоими волосами.</p>
                    <p>Доступ к этому ресурсу платный, стоимость доступа - 350 рублей.</p>
                    <p>Жми кнопку узнать подробнее чтобы узнать что тебя там ждет. </p>
                    <a href="<?php echo get_page_link(11)?>" class="btn-red"><i class="fa fa-play" aria-hidden="true"></i>Узнать подробнее</a>
                </div>
            </div>
        </div>
    </section>


    <section class="block2 block2-buy">
        <div class="container">
            <div class="block1-wrap">

                <div class="block1-text block-pay">

                    <div class="block-pay-price">
                        <span class="price">Цена: 350 руб / 5,60$</span>
                        <br>
                        После оплаты учетная запись создается автоматически и данные для входа будут отправлены на email указанный при оплате.
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
                            <input type="hidden" name="receiver" value="410019041529814">
                            <input type="hidden" name="label" value="care">
                            <input type="hidden" name="need-email" value="true">
                            <input type="hidden" name="quickpay-form" value="donate">
                            <input type="hidden" name="targets" value="Уход">
                            <input type="hidden" name="sum" value="2.00" data-type="number">
                            <label><input type="radio" name="paymentType" value="PC">Яндекс.Деньгами</label>
                            <label><input type="radio" name="paymentType" value="AC">Банковской картой</label>
                            <input type="hidden" name="successURL" value="https://kristeneltz.com/payment-success/">
                            <input type="submit" class="btn-form-buy" value="Перевести">
                        </form>

                    </div>
                    * Очень важно после оплаты не закрывать страницу, а нажать кнопку вернутся на сайт - <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tothankyoupage.png"  width="140px"; alt="">, тогда письмо с данными для входа отправится автоматически, если письмо не пришло, проверьте папку спам и напишите на почту kristeneltz@yandex.ru.
                </div>

            </div>
        </div>
    </section>
</main>

<?php
get_footer(); ?>