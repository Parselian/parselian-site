<?php
    $phone_link ='+79999999999';
    $phone_format = '+7 (999) 999-99-99';
    $companyName = 'TEST';
    $address = 'Московский пр., 8';
    $email = "nikolay@irepair.ru";
    $domain = "https://guru-apple.loc"
?>

<!DOCTYPE html>
<!-- saved from url=(0022) -->
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description"
          content="Выездной ремонт техники Apple в Санкт Петербурге">
    <meta name="keywords"
          content="выездной, ремонт, техники Apple, Санкт Петербург, Apple">
    <meta property="og:url" content="<?= $domain?>">
    <meta property="og:title"
          content="<?= $companyName?> | Выездной ремонт техники Apple в Санкт Петербурге">
    <meta property="og:description"
          content="Выездной ремонт техники Apple в Санкт Петербурге">
    <meta property="og:type" content="website">
    <meta property="og:image" content="images/meta@2x.jpg">


    <meta name="theme-color" content="#ffffff">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <title><?= $companyName ?> | Выездной ремонт техники Apple в Санкт Петербурге</title>
    <!-- Bootstrap core CSS -->
    <link href="./apple-service-theme.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d88e07c64d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
    </script>
</head>

<body class="pace-done" style="">
<div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99"
         style="transform: translate3d(100%, 0px, 0px);">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div>
</div>
<div class="visible-xs top-menu">
    <div class="container">
        <div class="navigation"><a
                href="#"><span></span><span></span><span></span></a>
        </div>
        <div class="logotype"><a href="#">Выездной ремонт
            Apple в Санкт Петербурге</a></div>
        <div class="contact"><a href="tel:<?= $phone_link?>"><i class="fa fa-phone"
                                                           aria-hidden="true"></i></a>
        </div>
    </div>
</div>
<div class="burger" style="display: none;">
    <div class="container">
        <div class="list ajax-list">
            <div class="item"><a href="#">Ремонт
                iPhone</a></div>
            <div class="item"><a href="#">Ремонт iPad</a>
            </div>
        </div>
        <div class="list">
            <div class="item"><a href="#">Контакты</a>
            </div>
            <div class="item"><a href="#">О нас</a></div>
        </div>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="hline">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-2 col-lg-3 hidden-xs">
                    <div class="logo">
                        <a href="tel:<?= $phone_link?>"><img
                                src="./images/logo.svg" style="height: 50px" alt="#"></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-5 col-lg-4 hidden-xs">
                    <div class="adr">
                        <a href="#">
                            <?= $address?><span class="hidden-sm"><br>Пн - Вск: <span>10:00 - 20:00</span></span></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 hidden-xs">
                    <div class="phone">
                        <a href="tel:<?= $phone_link?>"><span>+7(812)509-27-59</span><br>Viber,
                            WhatsApp, Telegram</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-2 hidden-xs">
                    <div class="callback text-right">
                        <a href="#" class="btn btn-block"
                           data-toggle="modal" data-target="#callbackModal">Заказать
                            звонок</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hleft">
            <div class="title">
                <div class="h1">Сервисный центр <span
                        class="xs"><?= $companyName?></span></div>
                <div class="h2">Ремонт на Ваших глазах</div>
            </div>
            <div class="changes">
                <div class="hidden-xs">
                    <span class="r">Все что нам нужно - горизонтальная поверхность и 20 минут времени. <br> Все остальное у нас отлажено до автоматизма. <br> Где бы Вы не находились, мы приедем к Вам и починим ваше устройство в кратчайшие сроки.</span>
                </div>
                <a href="#" class="btn hidden-xs"
                   data-toggle="modal" data-target="#masterModal">СКИДКА 20% ПРИ
                    ЗАКАЗЕ С САЙТА</a>
            </div>
        </div>
        <div class="hright">
            <div class="desc visible-xs">
                <ul>
                    <li>Выезд мастера - БЕСПЛАТНО</li>
                    <li>Диагностика - БЕСПЛАТНО</li>
                    <li>Ремонт за 20 минут</li>
                    <li>ПОДАРОК - Чехол+Стекло+Попсокет</li>
                </ul>
            </div>
        </div>
        <div class="call-master input-group">
            <a href="#" data-toggle="modal"
               data-target="#masterModal" class="input-group-addon">Вызвать
                мастера</a>
            <a href="tel:<?= $phone_link?>" class="input-group-addon"><span><?= $phone_format?></span></a>
        </div>

        <div class="view visible-xs">Рассчитайте стоимость за 3 шага</div>
        <div class="view hidden-xs">Рассчитайте стоимость
            <span>за 2 шага!</span></div>
    </div>
    <a href="#devices-scroll" class="more"></a>
</div>
<!-- /.header -->

<!-- Modal -->
<div class="modal fade change-modal" id="changeModal" tabindex="-1"
     role="dialog" aria-labelledby="changeModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="i1">
                    <div class="i2">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="changeModalLabel">Замените
                            старый или сломанный iPhone новым</h4>

                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-offset-1">
                        <div class="title">Условия обмена</div>
                        <p>
                            Для наших Клиентов мы предлагаем услугу, с помощью
                            которой можно выгодно обновить свой гаджет. Если
                            ваше устройство вас уже не радует и хочется чего-то
                            лучше просто заполните форму и узнайте стоимость
                            обмена вашего устройства на новое.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="form">
                            <div class="text-center">
                                <div class="title">Заполните форму</div>
                                <div class="desc">чтобы проверить возможность
                                    обмена
                                </div>
                            </div>
                            <form action="#">
                                <div class="form-group">
                                    <label class="sr-only"
                                           for="imei1">Модель</label>
                                    <input type="text" class="form-control"
                                           id="model1" name="model1"
                                           placeholder="Модель" required="">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only"
                                           for="imei1">IMEI</label>
                                    <input type="text" class="form-control"
                                           id="imei1" name="imei"
                                           placeholder="IMEI" required="">
                                </div>
                                <div class="form-group left">
                                    <label class="sr-only"
                                           for="name">Name</label>
                                    <input type="text" class="form-control"
                                           id="name" name="user_name"
                                           placeholder="Имя" required="">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="contact">Номер
                                        телефона</label>
                                    <input type="text" class="form-control"
                                           id="contact" name="contact"
                                           placeholder="Номер телефона"
                                           required="">
                                </div>
                                <button class="btn btn-block btn-warning"
                                        type="submit" data-toggle="modal" >Отправить запрос
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="change">
    <div class="container">
        <div class="desc hidden-xs">
            <ul>
                <li>Выезд мастера <br>в Санкт-Петербурге</li>
                <li>Ремонт <br> в сервисном центре</li>
                <li>Мы почимим <br> Ваш iPhone за 20 минут</li>
                <li>Гарантия <br> до 1 года</li>
            </ul>
        </div>
    </div>
    <div class="i1" style="background-position: left 317px;">
        <div class="i2" style="background-position: right -317px;">
            <div class="inner">
                <div class="title">Как это будет ?</div>
                Назначьте удобное для вас время и место. Будьте уверены. К вам
                приедет инженер с опытом работы от 5 лет. Других у нас нет!
                <br><br>
                Он заполнит бланк первичной диагностики и больше узнает о вашей
                проблеме, если конечно вы найдете время об этом рассказать. Так,
                он сможет предложить наилучший вариант ее решения.
                <br><br>
                Вы не успеете допить свой вкусный кофе, как мастер уже вручит
                вам гарантийный бланк выполненных работ. И вот, ваш телефон
                лучше нового, с защитным стеклом в подарок. И пожизненной
                гарантией!
                <br> <br>
                Мы можем себе это позволить при установке оригинальных
                запчастей.А вообще, у нас собственный склад запчастей любой
                ценовой категории и качества.
            </div>
        </div>
    </div>
</div>
<!-- /.change -->


<div class="devices affix-top" id="devices-scroll">
    <div class="title">Кстати, вот здесь можно узнать <span class="xs"> стоимость ремонта</span></div>
    <div class="container">
        <div class="callback"><a href="#" class="btn btn-warning" data-toggle="modal" data-target="#callbackModal">Заказать звонок</a></div>
        <div class="phone">+7 <span>(812)509-27-59</span></div>
        <div class="logo"><a href="#"><img src="images/logo.svg" style="height: 50px" alt="#"></a></div>
        <ul id="devices">
            <li><a href="#"><span class="img" style="background-image: url('{pic}');"></span>{name}</a></li>
        </ul>
    </div>
</div>
<div class="device-affix-line"></div>

<div class="device-model">
    <div class="inner">
        <div class="title">Выберите <span class="xs">модель</span></div>
        <div class="container">
            <div class="row justify-content-md-center" id="modal">
                <div class="col-xs-6 col-sm-4 col-md-20 "><a href="#" class="item"><span class="img" style="background-image: url('{pic}');"></span><span class="name">{name}</span><span class="btn btn-warning"><span class="check"></span>Выбрать</span></a></div>
            </div>
        </div>
    </div>
</div>

<div class="malfunction">
    <div class="left">
        <div class="inner">
            <div class="title">Типичные <span class="xs">неисправности</span></div>
            <div class="malfunction-main">
                <div class="row" id="malfunction-main">
                    <div class="col-xs-6 col-md-4"><a href="#" class="item"><span class="img" style="background-image: url('{pic}');"></span><span class="name">{name}</span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="inner">
            <div class="title">Все возможные неисправности</div>
            <div class="scrollbar">
                <ul class="items malfunction-full" id="malfunction-full">
                    <li>
                        <a href="#" class="item">
                            <span class="btn btn-warning">Выбрать</span>
                            <span class="name">{name}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /.malfunction -->

<div class="calculation" id="calculation">
    <div class="container">
        <div class="title">Ваш<span class="hidden-xs"> расчет <span class="xs">стоимости готов!</span></span></div>
        <div class="row">
            <div class="col-xs-12">
                <div class="selects">
                    <div class="form-group">
                        <label for="select-device">Устроиство</label>
                        <div class="select-style">
                            <select name="device" id="select-device">
                                <option>-</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select-model">Модель</label>
                        <div class="select-style">
                            <select name="model" id="select-model">
                                <option>-</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select-malfunction">Ремонт</label>
                        <div class="select-style">
                            <select name="malfunction" id="select-malfunction">
                                <option>-</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div id="master-departure">
                    <div class="master-departure">
                        <div class="title">This problem can be solved <span class="xs">without leaving home!</span></div>
                        <div class="dtitle">Departure of the master:</div>
                        <div class="dcheckbox">
                            <input type="checkbox" id="dep-master">
                            <label for="dep-master">
                                <span class="n">No</span>
                                <span class="y">Yes</span>
                            </label>
                        </div>
                        <div class="dprice">+ $<b>{price}</b></div>
                        <div class="ddesc">Master will arrive within 1-2 hours</div>
                    </div>
                </div>
                <div class="detail-price">
                    <div id="detail-price">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>{name}</td><td></td><td>{display_price}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="master-detail-price">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Departure of the master</td><td></td><td>from $<b>{price}</b></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="full-price">
                    <div class="full-price">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td><b>Стоимость ремонта</b></td><td><b>{price}</b> ₽</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <ul class="d-list" id="detail-list">
                    <li>{text}</li>
                </ul>
                <div class="d-form">
                    <div class="title">Как с вами связаться ?</div>
                    <form action="/mail.php" method="POST">
						<input name="selected-device" type="hidden" value="">
						<input name="selected-problem" type="hidden" value="">
                        <div class="form-group left">
                            <label class="sr-only" for="name1">Имя</label>
                            <input type="text" class="form-control" id="name1" name="user_name" placeholder="Имя" required="">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="phone1">Телефон</label>
                            <input type="tel" class="form-control" id="phone1" name="phone" placeholder="Телефон" required="">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="addr1">Адрес, куда приехать к мастеру</label>
                            <input type="text" class="form-control" id="addr1" name="addr" placeholder="Адрес, куда приехать к мастеру">
                        </div>
                        <button class="btn btn-warning" type="submit">Отправить заявку <span class="str"></span></button>
                    </form>
                </div>
            </div>
            <div class="col-xs-12">
                <!--<div class="payment-info">We accept bank cards</div> -->
            </div>
        </div>
    </div>
</div>
<!-- /.calculation -->

<div class="mini-notification">
    <div class="container">
        <div class="t" data-toggle="modal" data-target="#orderModal">
            <div class="left"><span class="n-malfunction">Замена дисплея</span> <span class="n-dm"><span class="n-device">iPhone</span> <span class="n-model">7</span></span></div>
            <div class="right"><span class="price">2500</span> ₽</div>
        </div>
    </div>
</div>
<!-- /.mini-notification -->

<div class="modal fade order-modal" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                <h4 class="modal-title" id="orderModalLabel"><span class="n-malfunction">Замена дисплея</span> <span class="n-dm"><span class="n-device">iPhone</span> <span class="n-model">7</span></span></h4>
            </div>
            <div class="modal-body">
                <div class="msg-auto text-center">Это предложение генерируется автоматически на основе вашего запроса</div>
                <div class="price">
                    <div class="left">Общая стоимость, включая выезд и запасные части</div>
                    <div class="right">
                        <div class="val"><span class="m-price">2500</span> ₽</div>
                    </div>
                </div>
                <!-- <div class="payment-info">We accept bank cards</div> -->
                <div class="detail-price">
                    <div class="dp-title">Что входит в стоимость:</div>
                    <div id="detail-price-dbl">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>диагностика</td>
                                <td></td>
                                <td>бесплатно</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Работа</td>
                                <td></td>
                                <td><b>200</b> ₽</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Запасные части</td>
                                <td></td>
                                <td><b>2500</b> ₽</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="master-detail-price-dbl">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Departure of the master</td><td></td><td>from $<b>{price}</b></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <ul class="d-list" id="detail-list-dbl">

                </ul>
                <div class="z-title">Оставьте заявку!</div>
                <div class="z-desc">Мы свяжемся с вами в течение 5 минут</div>
                <form action="/mail.php" method="POST">
					<input name="selected-device" type="hidden" value="">
					<input name="selected-problem" type="hidden" value="">
                    <div class="inputs">
                        <div class="form-group left">
                            <label class="sr-only" for="name2">Имя</label>
                            <input type="text" class="form-control" id="name2" name="user_name" placeholder="Имя" required="">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="phone2">Телефон</label>
                            <input type="text" class="form-control" id="phone2" name="phone" placeholder="Телефон" required="">
                        </div>
                        <button class="btn btn-warning" type="submit">Отправить заявку <span class="str"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="visiting-repair">
    <div class="text">
        <div class="inner">
            <div class="title">У нас есть <span class="xs">скидки</span></div>
            <p>Заказывая с сайта ремонт на выезде в течении дня, у вас будет скидка в размере 20%. А если вы ремонтирует больше одного устройства или не первый раз с нами Так там вообще скидка 35% на все виды работ.</p>
            <ul class="timer">
                <li><span id="hours"></span>Часы</li>
                <li><span id="minutes"></span>Минуты</li>
                <li><span id="seconds"></span>Секунды</li>
            </ul>
            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#masterModal">Получить скидку</a>
        </div>
    </div>
    <div class="img" style="background-image: url('images/banana-man.jpg');"></div>
</div>
<!-- /.visiting-repair -->

<div class="repair-service-center">
    <div class="text">
        <div class="inner">
            <div class="title">Ремонт в <span class="xs">сервисном центре</span>
            </div>
            <p>Если неисправность не может быть устранена в полевых условиях и
                для этого требуется стационарное оборудование, мы проводим такой
                ремонт в сервисном центре, где необходимо все для устранения
                наиболее сложных неисправностей.</p>
            <ul>
                <li>Быстрая доставка курьером</li>
                <li>Стационарное оборудование</li>
                <li>Ремонт любой сложности</li>
                <li>Полная конфиденциальность</li>
            </ul>

            <a href="#" class="btn btn-warning"
               data-toggle="modal" data-target="#courierModal">Позвонить
                курьеру</a>

        </div>
    </div>
    <div class="img"
         style="background-image: url('./images/repair-service-center-bg.jpg');"></div>
</div>
<!-- /.repair-service-center -->

<!-- Modal -->
<div class="modal fade courier-modal" id="courierModal" tabindex="-1"
     role="dialog" aria-labelledby="courierModalLabel" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="i1">
                    <div class="i2">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="courierModalLabel">Вызов
                            курьера</h4>
                        <h5 class="modal-title">Мы свяжемся с вами, чтобы
                            уточнить детали.</h5>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="form">
                    <div class="text-center">
                        <div class="title">Заполните контактную информацию</div>
                        <form action="#">
                            <div class="form-group left">
                                <label class="sr-only" for="name3">Имя</label>
                                <input type="text" class="form-control"
                                       id="name3" name="user_name" placeholder="Имя"
                                       required="">
                            </div>
                            <div class="form-group">
                                <label class="sr-only"
                                       for="phone3">Телефон</label>
                                <input type="tel" class="form-control"
                                       id="phone3" name="phone"
                                       placeholder="Телефон" required="">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="addr2">Адрес</label>
                                <input type="text" class="form-control"
                                       id="addr2" name="addr"
                                       placeholder="Адрес" required="">
                            </div>
                            <button class="btn btn-warning" type="submit" data-toggle="modal" >
                                Отправить заявку <span class="str"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade courier-modal" id="masterModal" tabindex="-1"
     role="dialog" aria-labelledby="masterModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="i1">
                    <div class="i2">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="masterModalLabel">Вызов
                            мастера</h4>
                        <h5 class="modal-title">Мы свяжемся с вами, чтобы
                            уточнить детали.</h5>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="form">
                    <div class="text-center">
                        <div class="title">Заполните контактную информацию</div>
                        <form action="#">
                            <div class="form-group left">
                                <label class="sr-only" for="name4">Имя</label>
                                <input type="text" class="form-control"
                                       id="name4" name="user_name" placeholder="Имя"
                                       required="">
                            </div>
                            <div class="form-group">
                                <label class="sr-only"
                                       for="phone4">Телефон</label>
                                <input type="tel" class="form-control"
                                       id="phone4" name="phone"
                                       placeholder="Телефон" required="">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="addr3">Адрес</label>
                                <input type="text" class="form-control"
                                       id="addr3" name="addr"
                                       placeholder="Адрес" required="">
                            </div>
                            <button class="btn btn-warning" type="submit" data-toggle="modal" >
                                Отправить заявку <span class="str"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade thanks-modal" id="thanksModal" tabindex="-1"
     role="dialog" aria-labelledby="thanksModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="i1">
                    <div class="i2">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="thanksModalLabel">Спасибо!</h4>
                        <h5 class="modal-title">Мы свяжемся с вами, чтобы
                            уточнить детали.</h5>
                    </div>
                </div>
            </div>
            <div class="modal-body">
				<button class="btn btn-warning" data-toggle="modal" data-target="#thanksModal" type="submit">
					Закрыть <span class="str"></span>
				</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade courier-modal" id="callbackModal" tabindex="-1"
     role="dialog" aria-labelledby="callbackModalLabel" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="i1">
                    <div class="i2">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="callbackModalLabel">Заказать
                            звонок</h4>
                        <h5 class="modal-title">Мы перезвоним в течение 5
                            минут!</h5>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="form">
                    <div class="text-center">
                        <div class="title">Введите ваше имя и телефон</div>
                        <form action="#">
                            <div class="form-group left">
                                <label class="sr-only" for="name5">Имя</label>
                                <input type="text" class="form-control"
                                       id="name5" name="user_name" placeholder="Имя"
                                       required="">
                            </div>
                            <div class="form-group">
                                <label class="sr-only"
                                       for="phone5">Телефон</label>
                                <input type="tel" class="form-control"
                                       id="phone5" name="phone"
                                       placeholder="Телефон" required="">
                            </div>
                            <button class="btn btn-warning" type="submit" data-toggle="modal">
                                Отправить заявку <span class="str"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <div class="title">О сервисе</div>
                <p>Наш сервисный центр оснащен новейшим оборудованием для
                    диагностики и ремонта компьютерной техники и мобильных
                    устройств. Все мастера имеют богатый опыт ремонта техники
                    Apple.</p>
                <p>Если ваш iPhone, MacBook, iMac, iPad или другое устройство
                    вышло из строя, <strong>позвоните нам</strong>. Мы вернем
                    ваше устройство в рабочее состояние.</p>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="phone">
                  <a href="tel:<?= $phone_link?>" style="color: white;">
                    <b><?= $phone_format?></b></a></div>
                <div class="phone-btn">
                    <a href="#" class="btn btn-warning"
                       data-toggle="modal" data-target="#masterModal">Вызвать
                        мастера</a>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="vacancies">
    <div class="container">
        <h2 class="section__title">Примеры успешного ремонта</h2>

        <div class="vacancies__list">
            <img src="./images/remont-iphone_1.jpg" alt="Ремонт iPhone" class="vacancies__list-item">
            <img src="./images/remont-macbook_1.jpg" alt="Ремонт iPhone" class="vacancies__list-item">
            <img src="./images/remont-iphone_2.jpg" alt="Ремонт iPhone" class="vacancies__list-item">
            <img src="./images/remont-iphone_3.jpg" alt="Ремонт iPhone" class="vacancies__list-item">
            <img src="./images/remont-iphone_4.jpg" alt="Ремонт iPhone" class="vacancies__list-item">
            <img src="./images/remont-iphone_1.jpg" alt="Ремонт iPhone" class="vacancies__list-item">
            <img src="./images/remont-macbook_1.jpg" alt="Ремонт iPhone" class="vacancies__list-item">
            <img src="./images/remont-iphone_2.jpg" alt="Ремонт iPhone" class="vacancies__list-item">
        </div>
    </div>
</section>

<div style="height: 500px; width: 100%; margin: 0 auto;" id="map-wrap">
    <script>
        document.addEventListener('click', function (e) {
            var map = document.querySelector('#map-wrap iframe')
            if (e.target.id === 'map-wrap') {
                map.style.pointerEvents = 'all'
            } else {
                map.style.pointerEvents = 'none'
            }
        })
    </script>
</div>
<div class="contacts">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-7">
                <div class="title">Контакты</div>
                <div class="desc">Сервисный центр «<?= $companyName?>>»</div>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="adr"><?= $address?><span
                                class="hidden-sm"><br>Пн - Вск: <span>10:00 - 20:00</span></span>
                        </div>
                        <div class="mails"><a href="mailto:<?= $email?>>"><?= $email?></a><br>Для
                            поставщиков: <a href="mailto:<?= $email?>"><?= $email?></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="phones">
                            <a href="tel:<?= $phone_link?>">
                                <?= $phone_format?>
                            </a>
                            <br>
                            <a href="#" class="btn"
                               data-toggle="modal" data-target="#callbackModal">Заказать
                                звонок</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-5">
                <div class="title">Пожелания и предложения</div>
                <div class="form">
                    <div id="wsForm">
                        <form action="#">
                            <div class="form-group left">
                                <label class="sr-only" for="name">Имя</label>
                                <input type="text" class="form-control"
                                       id="name" name="user_name" placeholder="Имя"
                                       required="">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="mail">Email</label>
                                <input type="email" class="form-control"
                                       id="mail" name="mail" placeholder="Email"
                                       required="">
                            </div>
                            <div class="form-group">
                                <label class="sr-only"
                                       for="msg">Сообщение</label>
                                <textarea class="form-control" id="msg"
                                          name="msg" placeholder="Сообщение"
                                          rows="4" required=""></textarea>
                            </div>
                            <button class="btn btn-warning" type="submit">
                                Отправить предложение
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="soc-text"><span>Присоединяйтесь к нам в социальных сетях!</span>
                    Мы публикуем только самые интересные проекты и новости
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
            </div>
        </div>
        <hr>
    </div>
</div>
<!-- /.contacts -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous"></script>
<script src="./bootstrap.min.js"></script>

<script src="./owl.carousel.min.js"></script>
<script src="./jquery.mCustomScrollbar.concat.min.js"></script>
<script src="./select2.full.min.js"></script>
<script src="./main.js"></script>
<script src="./jquery.device-calc.js"></script>

<script type="text/javascript">
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map-wrap", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [59.926036369577616, 30.31827333897629],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 11
        });

        const headquarterGlyph = {
                iconLayout: 'default#image',
                iconImageHref: './images/placeholder.png',
                iconImageSize: [75, 75],
                iconImageOffset: [-50, -100]
            },
            serviceCentersGlyph = {
                iconLayout: 'default#image',
                iconImageHref: './images/placeholder.png',
                iconImageSize: [36, 36],
                iconImageOffset: [-18, -36]
            };

        const insertballoonMarkup = (address) => {
            let markup = document.getElementById('balloon-markup').innerHTML.replace(/\$\{address\}/g,address)

            return markup;
        };

        let servicePlacemarks = {
            headquarter: new ymaps.Placemark([59.926036369577616, 30.31827333897629], {
                balloonContentHeader: 'Главный офис <?= $companyName;?>',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="<?=$phone_link?>"><?= $phone_format?></a>'
            }, headquarterGlyph),
            vasileostrovskaya: new ymaps.Placemark([59.941389, 30.273369], {
                balloonContentHeader: '<?= $companyName;?> на Василеостровской',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="<?=$phone_link?>"><?= $phone_format?></a>'
            }, serviceCentersGlyph),
            bolshoy: new ymaps.Placemark([59.962887, 30.306896], {
                balloonContentHeader: '<?= $companyName;?> на Большом пр.',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="<?=$phone_link?>"><?= $phone_format?></a>'
            }, serviceCentersGlyph),
            vosstaniya: new ymaps.Placemark([59.931830, 30.366677], {
                balloonContentHeader: '<?= $companyName;?> на пл. Восстания',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="<?=$phone_link?>"><?= $phone_format?></a>'
            }, serviceCentersGlyph),
            lenina: new ymaps.Placemark([59.956589, 30.352401], {
                balloonContentHeader: '<?= $companyName;?> на пл. Ленина',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="<?=$phone_link?>"><?= $phone_format?></a>'
            }, serviceCentersGlyph),
            komenda: new ymaps.Placemark([60.006370, 30.264015], {
                balloonContentHeader: '<?= $companyName;?> на Комендантском пр.',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="<?=$phone_link?>"><?= $phone_format?></a>'
            }, serviceCentersGlyph),
            moskVorota: new ymaps.Placemark([59.886573, 30.318779], {
                balloonContentHeader: '<?= $companyName;?> у м. Московские ворота',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="<?=$phone_link?>"><?= $phone_format?></a>'
            }, serviceCentersGlyph),
            akadem: new ymaps.Placemark([60.010822, 30.404488], {
                balloonContentHeader: '<?= $companyName;?> у м. Академическая',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="<?=$phone_link?>"><?= $phone_format?></a>'
            }, serviceCentersGlyph),
            bolshevikov: new ymaps.Placemark([59.918892, 30.464466], {
                balloonContentHeader: '<?= $companyName;?> у м. пр. Большевиков',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="<?=$phone_link?>"><?= $phone_format?></a>'
            }, serviceCentersGlyph),
            sredneokhtinskiy: new ymaps.Placemark([59.953344, 30.413560], {
                balloonContentBody: '<?= $companyName;?> на Среднеохтинском пр.'
            }, serviceCentersGlyph),
            mezhdunarodnaya: new ymaps.Placemark([59.874634, 30.387686], {
                balloonContentHeader: '<?= $companyName;?> у м. Международная',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="<?=$phone_link?>"><?= $phone_format?></a>'
            }, serviceCentersGlyph),
            elizarovskaya: new ymaps.Placemark([59.897361, 30.433224], {
                balloonContentHeader: '<?= $companyName;?> у м. Елизаровская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="<?=$phone_link?>"><?= $phone_format?></a>'
            }, serviceCentersGlyph),
            baltiyskaya: new ymaps.Placemark([59.911150, 30.297336], {
                balloonContentHeader: '<?= $companyName;?> у м. Балтийская',
                balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="<?=$phone_link?>"><?= $phone_format?></a>'
            }, serviceCentersGlyph),
        };

        //add placemarks on map
        for (let placemark in servicePlacemarks) {
            myMap.geoObjects.add(servicePlacemarks[placemark]);
        }

        myMap.events.add('click', () => {
            for (let placemark in servicePlacemarks) {
                servicePlacemarks[placemark].balloon.close();
            }
        });

        myMap.behaviors.disable(['drag']);
        myMap.behaviors.disable(['scrollZoom']);
    }
</script>
</body>
</html>