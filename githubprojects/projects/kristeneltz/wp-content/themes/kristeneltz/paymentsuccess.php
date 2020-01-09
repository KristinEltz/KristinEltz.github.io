<?php
/*
Template Name: payment-success
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



<?php


$secret_key = 'zrgHQvec+3XqdjPK8FRI0RAf'; // секретное слово, которое мы получили в предыдущем шаге.

// возможно некоторые из нижеперечисленных параметров вам пригодятся
// $_POST['operation_id'] - номер операция
// $_POST['amount'] - количество денег, которые поступят на счет получателя
// $_POST['withdraw_amount'] - количество денег, которые будут списаны со счета покупателя
// $_POST['datetime'] - тут понятно, дата и время оплаты
// $_POST['sender'] - если оплата производится через Яндекс Деньги, то этот параметр содержит номер кошелька покупателя
// $_POST['label'] - лейбл, который мы указывали в форме оплаты
// $_POST['email'] - email покупателя (доступен только при использовании https://)

$sha1 = sha1( $_POST['email'] . $_POST['notification_type'] . '&'. $_POST['operation_id']. '&' . $_POST['amount'] . '&643&' . $_POST['datetime'] . '&'. $_POST['sender'] . '&' . $_POST['codepro'] . '&' . $secret_key. '&' . $_POST['label'] );

$paymentemail = $_POST['email'];
$ordernumber = $_POST['label'];
//
//if ($sha1 != $_POST['sha1_hash'] ) {
//    // тут содержится код на случай, если верификация не пройдена
//    exit();
//}
//
//// тут код на случай, если проверка прошла успешно
//
//exit();

$thankyoutext = 'Спасибо за доверие. <br> На указанную при оплате почту автоматически был отправлен файл со схемами ухода, если вдруг вы не получили письмо проверьте папку спам и напишите на почту kristeneltz@yandex.ru.';

require_once(get_template_directory().'/PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;

$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->Username = 'kristeneltz@yandex.ru';
$mail->Password = 'Azi38038';

// От кого
$mail->setFrom('kristeneltz@yandex.ru', 'КРИСТЕН ЭЛЬЦ');

// Кому
$mail->addAddress($paymentemail);


if ($ordernumber == "oily-scalp") {

    $subject = 'СХЕМЫ УХОДА ДЛЯ ЖИРНОГО ТИПА КОЖИ ГОЛОВЫ';

// Тема письма
    $mail->Subject = $subject;

// Тело письма
    $body = '<p><strong>Спасибо за доверие, в прикрепленном файле схемы ухода.</strong></p>';
    $mail->msgHTML($body);

// Приложение
    $mail->addAttachment(get_template_directory() . '/filestosend/oily-scalp-care.pdf');

    $mail->send();

}
if ($ordernumber == "normal-scalp") {

    $subject = 'СХЕМЫ УХОДА ДЛЯ НОРМАЛЬНОГО ТИПА КОЖИ ГОЛОВЫ';

// Тема письма
    $mail->Subject = $subject;

// Тело письма
    $body = '<p><strong>Спасибо за доверие, в прикрепленном файле схемы ухода.</strong></p>';
    $mail->msgHTML($body);

// Приложение
    $mail->addAttachment(get_template_directory() . '/filestosend/normal-scalp-care.pdf');

    $mail->send();

}
if ($ordernumber == "dry-scalp") {

    $subject = 'СХЕМЫ УХОДА ДЛЯ СУХОГО ТИПА КОЖИ ГОЛОВЫ';

// Тема письма
    $mail->Subject = $subject;

// Тело письма
    $body = '<p><strong>Спасибо за доверие, в прикрепленном файле схемы ухода.</strong></p>';
    $mail->msgHTML($body);

// Приложение
    $mail->addAttachment(get_template_directory() . '/filestosend/dry-scalp-care.pdf');

    $mail->send();

}
if ($ordernumber == "damaged-hair") {

    $subject = 'СХЕМЫ ЛЕЧЕНИЯ И УХОДА ЗА ПОВРЕЖДЕННЫМИ ВОЛОСАМИ';

// Тема письма
    $mail->Subject = $subject;

// Тело письма
    $body = '<p><strong>Спасибо за доверие, в прикрепленном файле схемы ухода.</strong></p>';
    $mail->msgHTML($body);

// Приложение
    $mail->addAttachment(get_template_directory() . '/filestosend/damaged-hair-care.pdf');

    $mail->send();
}

if ($ordernumber == "care") {

    $subject = 'ПЕРСОНАЛЬНЫЙ УХОД - ДАННЫЕ ДЛЯ ВХОДА';

// Тема письма
    $mail->Subject = $subject;

// Тело письма
    $body = '<p><strong>Добро пожаловать, теперь ты можешь подобрать свой персональный уход за волосами!</strong></p>
 
<p>Перед началом подбора персонального ухода, рекомендую прочитать о базовом уходе здесь: https://kristeneltz.com/base-care/ </p>
 
<p><strong>Данные для входа на сайт:</strong> <br>
<strong>Логин:</strong> ' . $paymentemail . ' <br>
<strong>Пароль:</strong> 1234</p>
 
<p>Переходи по ссылке ниже и вводи логин и пароль для входа, переходи на вкладку персональный уход, чтобы подобрать уход:</p>
 
<p>https://kristeneltz.com/membership-login/</p>
 
<p>После первого входа, пароль желательно изменить во вкладке "учетная запись".</p>';
    $mail->msgHTML($body);

    $mail->send();
}

// Создание доступа к странице по подбору ухода
//Данные
$username = $paymentemail;
$email = $paymentemail;
$password = "\$P\$BkW6Qu2R9.G111PF6tlRhdzFsutjED.";
$membership_level = "2";
$status = "active";

// Параметры для подключения
$db_host = "localhost";
$db_user = "u0769198_default"; // Логин БД
$db_password = "_gO8PuCm"; // Пароль БД
$db_base = 'u0769198_default'; // Имя БД
$db_table = "wp_swpm_members_tbl"; // Имя Таблицы БД


// Подключение к базе данных
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
    die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$result = $mysqli->query("INSERT INTO " . $db_table . " (user_name,password,membership_level,email,account_state) VALUES ('$username','$password','$membership_level','$email','$status')");

$adduser = '';

if ($result == true) {
    $adduser = "Учетная запись успешно создана. На указанный при оплате email автоматически были отправлены данные для входа, если письмо не пришло проверьте папку спам и напишите на почту kristeneltz@yandex.ru.";
} else {
    $adduser = "Произошла ошибка при создании утечной записи, напишите об этом на почту kristeneltz@yandex.ru";
}
?>

    <main>

        <section class="block1 block1-purchase">
            <div class="container">
                <div class="block1-wrap">
                    <div class="schemes-header">
                        <?php
                                echo $thankyoutext;
                        ?>
                    </div>
                </div>
            </div>
        </section>

    </main>



<?php
get_footer(); ?>