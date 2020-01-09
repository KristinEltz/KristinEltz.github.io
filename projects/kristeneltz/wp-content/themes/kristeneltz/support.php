<?php
/*
Template Name: support
*/
 ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Кристен Эльц</title>
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
                    <div class="toggle-mob-item"><a href="//kristeneltz.com">На главную</a></div>
                    <div class="toggle-mob-item"><a href="<?php echo get_page_link(35)?>">Базовый уход</a></div>
                </div>
            </div>
        </div>
    </div>
</header>

<main>

    <section class="block1">
        <div class="container">
            <div class="block1-wrap">


                <div class="block1-text block-pay">

                    <div class="block-pay-price">Сегодня ничего хорошего не возможно сделать без денежной поддержки, надеюсь ты это понимаешь, чтобы поддержать деньгами разработку программы по подбору индивидуального ухода в зависимости от особенностей и проблем нажми кнопку "поддержать разработку".
                        <br>Сумма для перевода 350 рублей.</div>

                    <div class="pay">

                        <form method="POST" action="https://money.yandex.ru/quickpay/confirm.xml">
                            <input type="hidden" name="receiver" value="410019960878285">
                            <input type="hidden" name="label" value="$order_id">
                            <input type="hidden" name="quickpay-form" value="donate">
                            <input type="hidden" name="targets" value="Индивидуальный уход">
                            <input type="hidden" name="sum" value="350.00" data-type="number">
                            <input type="hidden" name="need-email" value="true">
                            <label class="payment-method"><input type="radio" name="paymentType" value="PC"><span class="r"><span></span></span> Яндекс.Деньгами</label>
                            <label class="payment-method payment-method-cheked"><input type="radio" name="paymentType" checked value="AC"><span class="r"><span></span></span> Банковской картой</label>
                            <input type="submit" class="btn-yandex" value="Поддержать разработку">
                        </form>


                    </div>

                </div>

            </div>
        </div>
    </section>

</main>


