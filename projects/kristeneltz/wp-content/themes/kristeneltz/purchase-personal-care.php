<?php
/*
Template Name: purchase-personal-care
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

            <div class="block1-wrap">
                <div class="container">
                <div class="head-brown -desc">Что тебя ждет на странице подбора индивидуального ухода.</div>
                <!--                <div class="about-head -desc">Что тебя ждет на странице подбора индивидуального ухода.</div>-->

                <p class="block1-img -desc">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/promo-web.jpg" alt="">
                </p>

                <p class="block1-img -mob">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/promo-mob.jpg" alt="">
                </p>
                </div>
                <div class="head-brown">ЧТО ТЫ УЗНАЕШЬ?</div>

                <div class="know">
                    <div class="container">
                    <p class="block1-text">
                        ☆ Как ухаживать за волнистыми, кудрявыми, прямыми, толстыми, тонкими, редкими и нормальными волосами.
                    </p>

                    <p class="block1-text">
                        ☆ Какой уход нужен если волосы сухие, пористые и пушатся.
                    </p>

                    <p class="block1-text">
                        ☆ Разницу в уходе в зависимости от времени года.
                    </p>

                    <p class="block1-text">
                        ☆ Что поможет отрастить волосы, а на что не стоит тратить время и деньги.
                    </p>

                    <p class="block1-text">
                        ☆ Инструкция: что делать при выпадении волос, какие могут быть причины.
                    </p>

                    <p class="block1-text">
                        ☆ Как решить следующие проблемы: ломаются (белые точки на волосах), кажется что перестали расти, секутся на концах или по всей длине, лишены блеска, перхоть, седина, путаются волосы, лишены объема у корней, слишком густые.
                    </p>

                    <p class="block1-text">
                        ☆ Как правильно укладывать горячими приборами, как их выбрать и как убрать вредное воздействие от них.
                    </p>

                    <p class="block1-text">
                        ☆ Какой цвет волос тебе подойдет.
                    </p>

                    <p class="block1-text">
                        ☆ Уход за окрашенными всегда будет отличатся от ухода за не окрашенными, а уход за осветленными или окрашенными в рыжий будет также отличаться. Ты узнаешь в чем разница между уходом, включая уход за окрашенными хной или басмой.
                    </p>

                    <p class="block1-text">
                        ☆ Что делать если волосы сожжены окрашиванием.
                    </p>

                    <p class="block1-text">
                        ☆ Как сменить окрашенный цвет на другой, например из черного вернуть свой или из рыжего стать блондинкой.
                    </p>
                    </div>
                </div>
                <div class="container">
                <p class="block1-img -desc">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/second-web.jpg" alt="">
                </p>

                <p class="block1-img -mob">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/second-mob.jpg" alt="">
                </p>
                </div>
                <div class="block-question">
                    <p class="block1-text">
                        <hl>Написано ли какие средства нужно использовать?</hl>
                    </p>
                    <div class="container">
                        <p class="block1-text">

                            Написано какие средства использовать, как часто и в каком формате лучше использовать, а также как это делать правильно.

                        </p>
                    </div>

                    <p class="block1-text">
                        <hl>Нужно ли платить за повторный подбор ухода? </hl>
                    </p>

                    <div class="container">
                        <p class="block1-text">
                            Нет, доступ оплачивается один раз и навсегда, доступ безлимитный. Если у тебя изменятся волосы или появятся проблемы которых раньше не было, ты можешь подобрать новый уход.
                        </p>
                    </div>

                </div>
                <div class="container">
                <p class="block1-img -desc">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/third-web.jpg" alt="">
                </p>

                <p class="block1-img -mob">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/third-mob.jpg" alt="">
                </p>

                <?php
                $price = ' ';
                $promocode = $_GET['promocode'];

                if ($promocode == 'new'|| $promocode == 'New') {
                    $price = '175';
                } elseif ($promocode == 'ICXPC50') {
                    $a = '350';
                    $b = '2';
                    $c = $a / $b;
                    $price = "$c";
                } else {
                    $price = '350';
                }
                ?>

                <script>
                    function timer() {
                        var nowDate = new Date();
                        var achiveDate = new Date(2019,11,7,20,0,0); //Задаем дату, к которой будет осуществляться обратный отсчет
                        var result = (achiveDate - nowDate)+1000;
                        if (result < 0) {
                            var elmnt = document.getElementById('timer');
                            elmnt.innerHTML = ' - : - - : - - : - - ';
                            return undefined;
                        }
                        var seconds = Math.floor((result/1000)%60);
                        var minutes = Math.floor((result/1000/60)%60);
                        var hours = Math.floor((result/1000/60/60)%24);
                        var days = Math.floor(result/1000/60/60/24);
                        if (seconds < 10) seconds = '0' + seconds;
                        if (minutes < 10) minutes = '0' + minutes;
                        if (hours < 10) hours = '0' + hours;
                        var elmnt = document.getElementById('timer');
                        elmnt.innerHTML = days + ':' + hours + ':' + minutes + ':' + seconds;
                        setTimeout(timer, 1000);
                    }
                    window.onload = function() {
                        timer();
                    }

                </script>

                <div class="block1-text block-pay">

                    <div class="block-pay-price">
                        Чтобы получить доступ нужно оплатить <span class="price">350 руб.</span>
<!--                        <s><span class="price">350 руб</span></s>-->
<!--                        <br>-->
<!--                        <span class="price" style="font-size: 29px">--><?php //echo $price ?><!-- рублей</span>.-->
<!--                        <br>-->
<!--                        <span id="event-mess"> До конца акции осталось <span id="timer"></span></span>-->
                        <br>
                        Чтобы получить варианты способов оплаты, заполни и отправь форму ниже.
                    </div>

                    <div class="pay">

                        <!--                        <form class="promo-from" method="get">-->
                        <!--                            <input type="text" class="input-promo" placeholder="Промокод" name="promocode">-->
                        <!--                            <input type="submit" class="applypromo" value="Применить скидку">-->
                        <!--                        </form>-->

                        <div role="form" class="wpcf7" id="wpcf7-f98-p73-o1" lang="ru-RU" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="/email/#wpcf7-f98-p73-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="98">
                                    <input type="hidden" name="_wpcf7_version" value="5.1.3">
                                    <input type="hidden" name="_wpcf7_locale" value="ru_RU">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f98-p73-o1">
                                    <input type="hidden" name="_wpcf7_container_post" value="73">
                                    <input type="hidden" name="_price" value="<?php echo $price ?>">
                                </div>
                                <p><span class="wpcf7-form-control-wrap your-email"><input type="email" placeholder="E-mail (обязательно)" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span></p>

                                <p><span class="wpcf7-form-control-wrap text-901"><input type="text" name="text-901" placeholder="Из какой страны (обязательно)" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span></p>

                                <p><input type="submit" value="Получить способы оплаты" onClick="fbq('track', 'Subscribe');" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
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