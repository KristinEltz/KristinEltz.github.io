<?php
/*
Template Name: personal-guide
*/
?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Кристен Эльц -  Составление личной схемы ухода и подбор средств.</title>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/care.css">
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
                        <div class="footer-menu-item"><a href="//kristeneltz.com">На главную</a></div>
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
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(35)?>">Базовый уход</a></div>
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(23)?>">Персональный уход</a></div>
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(14)?>">Учетная запись</a></div>
                <div class="toggle-mob-item"><a href="<?php echo get_page_link(15)?>">Восстановление пароля</a></div>
            </div>
        </div>
    </div>
</header>

<main>

    <section class="block1 block1-purchase">
        <div class="container">
            <div class="block1-wrap">
                <div class="head-brown-guide">Составление личной схемы ухода и подбор средств.</div>

                <div class="what-you-get">
                    <div class="about-head-guide">Как будет происходить подбор рекомендаций и средств?</div>
                    <br>
                    <p class="text">
                        <span class="number">1</span> Тебе необходимо заполнить анкету, приложить фото волос и отправить заявку.
                    </p>

                    <p class="text">
                        <span class="number">2</span> Каждая анкета разбирается индивидуально мной, схемы ухода, рекомендации по лечению, укладке и средства будут подбираться максимально подходящие под твой тип волос, особенности и проблемы. В анкете также можно задать любой вопрос о проблеме или уходе и получить консультацию по этому вопросу.
                    </p>

                    <p class="text">
                        <span class="number">3</span> Средства будут подбираться исходя из того что у тебя уже есть, а также на основании указанного тобой бюджета. Средств будет предлагаться несколько вариантов на выбор. На средства будут даны ссылки с ценой, где можно купить наиболее выгодно.
                    </p>
                </div>


                <div class="benefits">
                    <div class="about-head-guide" style="margin-top:20px">Что ты получишь?</div>
                    <p class="block1-text-guide">
                        ☆ Файл в котором я на основании твоей анкеты подробно распишу индивидуальные схемы ухода для твоих волос, включая ссылки на конкретные средства, а также как, когда и как часто использовать какие средства, а также в какой последовательности, рекомендации по лечению (если это необходимо) и укладке. В файле я отвечу на все вопросы которые ты задашь касательно своих волос.
                    </p>
                </div>
                <?php
                $price = ' ';
                $promocode = $_GET['promocode'];

                if ($promocode == 'one'|| $promocode == 'One') {
                    $price = '1200';
                } elseif ($promocode == 'ICXPC50') {
                    $a = '2400';
                    $b = '2';
                    $c = $a / $b;
                    $price = "$c";
                } else {
                    $price = '2400';
                }
                ?>

                <div class="block1-text block-pay">

                    <div class="block-pay-price">
                        Составление личной схемы ухода и подбор средств стоит <br>
                        <span class="price"><?php echo $price ?> рублей</span>.
                        <br>
                        Чтобы получить анкету, реквизиты для оплаты и дальнейшие инструкции нужно заполнить и отправить форму ниже.
                    </div>

                    <div class="pay">

                        <form class="promo-from" method="get">
                            <input type="text" class="input-promo" placeholder="Промокод на скидку" name="promocode">
                            <input type="submit" class="applypromo" value="Применить промокод">
                        </form>

                        <div role="form" class="wpcf7" id="wpcf7-f104-p73-o2" lang="ru-RU" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="/email/?preview_id=73&amp;preview_nonce=acfec06758&amp;preview=true#wpcf7-f104-p73-o2" method="post" class="wpcf7-form" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="104">
                                    <input type="hidden" name="_wpcf7_version" value="5.1.3">
                                    <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f104-p73-o2">
                                    <input type="hidden" name="_wpcf7_container_post" value="73">
                                    <input type="hidden" name="_price" value="<?php echo $price ?>">
                                </div>
                                <p><span class="wpcf7-form-control-wrap your-email"><input type="email" placeholder="E-mail (обязательно)" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span></p>

                                <p><input type="submit" value="Получить анкету и реквизиты" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
                                <div class="wpcf7-response-output wpcf7-display-none"></div></form></div>

                        <p class="block1-text smalltext">
                            * Запрос обрабатывается вручную, поэтому ответ на письмо может занять некоторое время, но я стараюсь отвечать всем сразу же и максимально быстро. Также обязательно правильно напиши e-mail. Если в течении суток тебе не пришел ответ на почту, проверь правильно ли ты указала e-mail, также попробуй указать другой e-mail и отправь запрос еще раз.
                        </p>

                    </div>

                </div>



            </div>
        </div>
    </section>

</main>


<?php
get_footer(); ?>