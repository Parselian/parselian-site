<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  
  <title>LTS company</title>
</head>

<body>
  <div class="preloader preloader_visible">
    <div class="item-1">
      <div></div>
    </div>
    <div class="item-2">
      <div></div>
    </div>
    <div class="item-3">
      <div></div>
    </div>
    <div class="item-4">
      <div></div>
    </div>
    <div class="item-5">
      <div></div>
    </div>
    <div class="item-6">
      <div></div>
    </div>
    <div class="item-7">
      <div></div>
    </div>
    <div class="item-8">
      <div></div>
    </div>
    <div class="item-9">
      <div></div>
    </div>
  </div>
  <!-- /.preloader -->

  <header class="header">
    <div class="container header-wrap">
      <div class="header-company">
        Импортно-экспортная компания
      </div>
      <!-- /.header-title_text -->

      <h1 class="header-title">

        <a href="#">
          Lts <span>Large Transport Ships</span>
        </a>
      </h1>
      <!-- /.header-title_title -->

      <div class="header-contacts">
        <a href="tel:+79876552525" class="header-contacts_phone">
          7 (987) 655-25-25
        </a>
        <!-- /.header-contacts_phone -->

        <button class="button header-contacts_button" onclick="ym(52696405, 'reachGoal', 'open-popup'); return true;">
          <img src="img/header/phone-call.svg" alt="телефон">
          <span class="header-contacts_button_text">Заказать звонок</span>
          <!-- /.header-contacts_button_text -->
        </button>
        <!-- /.header-contacts_button -->
      </div>
      <!-- /.header-contacts -->
    </div>
    <!-- /.container -->

    <div class="container">
      <ul class="section-menu">
        <li class="section-menu_item">
          <a href="#">О компании</a>
        </li>

        <li class="section-menu_item">
          <a href="./services.php">Услуги</a>
        </li>

        <li class="section-menu_item">
          <a href="#">Новости</a>
        </li>

        <li class="section-menu_item">
          <a href="#">Калькулятор</a>
        </li>

        <li class="section-menu_item">
          <a href="./our-location.php">Контакты</a>
        </li>

        <li class="section-menu_item">
          <a href="#" class="section-menu_item__last"></a>
        </li>
      </ul>
      <!-- /.header-menu -->
    </div>
    <!-- /.container -->

    <div class="header-backgrounds">
      <div class="header-background header-background-1">
        <img src="./img/header/background.jpg" alt="фон" class="header-background__img">
        <div class="container">
          <div class="header-text">
            <h2 class="header-text_title">
              Грузы из Китая <br>
              с компанией "LTS"
            </h2>

            <h3 class="header-text_subtitle">
              Экспорт и импорт грузов из Китая любым видом транспорта.
              <span>Без переплат и точно в срок!</span>
            </h3>
            <!-- /.header-text_subtitle -->

            <button class="button header-text_button" onclick="ym(52696405, 'reachGoal', 'open-popup'); return true;">Быстрая заявка</button>
            <!-- /.header-text_button -->
          </div>
          <!-- /.header-text -->
        </div>
      </div>
      <div class="header-background header-background-2">
        <img src="./img/header/second-bg.jpg" alt="фон" class="header-background__img">
        <div class="container">
          <div class="header-text">
            <h2 class="header-text_title">
              Грузы из Швеции <br>
              с компанией "LTS"
            </h2>

            <h3 class="header-text_subtitle">
              Экспорт и импорт грузов из Швеции любым видом транспорта.
              <span>Без переплат и точно в срок!</span>
            </h3>
            <!-- /.header-text_subtitle -->

            <button class="button header-text_button" onclick="ym(52696405, 'reachGoal', 'open-popup'); return true;">Быстрая заявка</button>
            <!-- /.header-text_button -->
          </div>
          <!-- /.header-text -->
        </div>
      </div>
      <div class="header-background header-background-3">
        <img src="./img/header/third-bg.jpg" alt="фон" class="header-background__img">
        <div class="container">
          <div class="header-text">
            <h2 class="header-text_title">
              Грузы из Британии <br>
              с компанией "LTS"
            </h2>

            <h3 class="header-text_subtitle">
              Экспорт и импорт грузов из Британии любым видом транспорта.
              <span>Без переплат и точно в срок!</span>
            </h3>
            <!-- /.header-text_subtitle -->

            <button class="button header-text_button" onclick="ym(52696405, 'reachGoal', 'open-popup'); return true;">Быстрая заявка</button>
            <!-- /.header-text_button -->
          </div>
          <!-- /.header-text -->
        </div>
      </div>
    </div>
  </header>
  <!-- /.header -->

  <section class="services">
    <?php
      include('burger-menu.php');
    ?>

    <div class="container services-wrap">
      <div class="services-wrapper">
        <h2 class="section-title services-title">
          Наши услуги
        </h2>
        <!-- /.services-title -->
      </div>
      <!-- /.services-wrapper -->

      <div class="services-cards">
        <div class="services-cards__item wow fadeIn">
          <div class="services-cards__item_img">
            <img src="img/services/globe.svg" alt="контейнер" class="services-cards__item_img-first">
            <img src="img/services/globe-white.svg" alt="контейнер" class="services-cards__item_img-second">
          </div>
          <!-- /.services-card_img -->

          <div class="services-cards__item__text">
            <div class="services-cards__item__text_title">
              Международные <span>грузоперевозки</span>
            </div>
            <!-- /.services-card_title -->

            <a href="#" class="button services-cards__item__text_button">
              Подробнее
            </a>
            <!-- /.services-card_button -->
          </div>
          <!-- /.services-cards__item__text -->
        </div>
        <!-- /.services-card -->

        <div class="services-cards__item wow fadeIn" data-wow-delay=".1s">
          <div class="services-cards__item_img">
            <img src="img/services/packaging.svg" alt="контейнер" class="services-cards__item_img-first">
            <img src="img/services/packaging-white.svg" alt="контейнер" class="services-cards__item_img-second">
          </div>
          <!-- /.services-card_img -->

          <div class="services-cards__item__text">
            <div class="services-cards__item__text_title">
              Доставка <span>грузов из Китая</span>
            </div>
            <!-- /.services-card_title -->

            <a href="#" class="button services-cards__item__text_button">
              Подробнее
            </a>
            <!-- /.services-card_button -->
          </div>
          <!-- /.services-cards__item__text -->
        </div>
        <!-- /.services-card -->

        <div class="services-cards__item wow fadeIn" data-wow-delay=".2s">
          <div class="services-cards__item_img">
            <img src="img/services/box.svg" alt="контейнер" class="services-cards__item_img-first">
            <img src="img/services/box-white.svg" alt="контейнер" class="services-cards__item_img-second">
          </div>
          <!-- /.services-card_img -->

          <div class="services-cards__item__text">
            <div class="services-cards__item__text_title">
              Таможенное <span>оформление</span>
            </div>
            <!-- /.services-card_title -->

            <a href="#" class="button services-cards__item__text_button">
              Подробнее
            </a>
            <!-- /.services-card_button -->
          </div>
          <!-- /.services-cards__item__text -->
        </div>
        <!-- /.services-card -->

        <div class="services-cards__item wow fadeIn" data-wow-delay=".3s">
          <div class="services-cards__item_img">
            <img src="img/services/transportation.svg" alt="контейнер" class="services-cards__item_img-first">
            <img src="img/services/transportation-white.svg" alt="контейнер" class="services-cards__item_img-second">
          </div>
          <!-- /.services-card_img -->

          <div class="services-cards__item__text">
            <div class="services-cards__item__text_title">
              Контейнерные <span>перевозки</span>
            </div>
            <!-- /.services-card_title -->

            <a href="#" class="button services-cards__item__text_button">
              Подробнее
            </a>
            <!-- /.services-card_button -->
          </div>
          <!-- /.services-cards__item__text -->
        </div>
        <!-- /.services-card -->

        <div class="services-cards__item wow fadeIn" data-wow-delay=".4s">
          <div class="services-cards__item_img">
            <img src="img/services/wooden-box.svg" alt="контейнер" class="services-cards__item_img-first">
            <img src="img/services/wooden-box-white.svg" alt="контейнер" class="services-cards__item_img-second">
          </div>
          <!-- /.services-card_img -->

          <div class="services-cards__item__text">
            <div class="services-cards__item__text_title">
              Доставка <span>сборных грузов</span>
            </div>
            <!-- /.services-card_title -->

            <a href="#" class="button services-cards__item__text_button">
              Подробнее
            </a>
            <!-- /.services-card_button -->
          </div>
          <!-- /.services-cards__item__text -->
        </div>
        <!-- /.services-card -->

        <div class="services-cards__item wow fadeIn" data-wow-delay=".5s">
          <div class="services-cards__item_img">
            <img src="img/services/calculator.svg" alt="контейнер" class="services-cards__item_img-first">
            <img src="img/services/calculator-white.svg" alt="контейнер" class="services-cards__item_img-second">
          </div>
          <!-- /.services-card_img -->

          <div class="services-cards__item__text">
            <div class="services-cards__item__text_title">
              Финансирование <span>поставок</span>
            </div>
            <!-- /.services-card_title -->

            <a href="#" class="button services-cards__item__text_button">
              Подробнее
            </a>
            <!-- /.services-card_button -->
          </div>
          <!-- /.services-cards__item__text -->
        </div>
        <!-- /.services-card -->
      </div>
      <!-- /.services-cards -->
    </div>
    <!-- /.container services-wrap -->
  </section>
  <!-- /.services -->

  <section class="about-us">
    <div class="wrap about-us__wrap">
      <div class="about-us__image">
        <img src="img/about-us/ship.jpg" alt="корабль">
      </div>
      <!-- /.about-us__image -->

      <div class="about-us__text">
        <h2 class="about-us__text_title">
          "LTS" - large transport ships
        </h2>
        <!-- /.about-us__text_title -->

        <div class="about-us__text_subtitle">
          Международная компания
        </div>
        <!-- /.about-us__text_subtitle -->

        <div class="about-us__text_descr">
          Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции влечет за
          собой процесс внедрения и модернизации систем массового участия. Товарищи! постоянное
          информационно-пропагандистское обеспечение нашей деятельности способствует подготовки и реализации
          существенных финансовых и административных условий.
        </div>
        <!-- /.about-us__text_descr -->
      </div>
      <!-- /.about-us__text -->
    </div>
    <!-- /.wrap about-us__wrap -->
  </section>
  <!-- /.about-us -->

  <?php 
    include('news.php');
  ?>
  <!-- /.news -->

  <section class="locations">
    <div class="locations-backgrounds">
      <div class="locations-background locations-background-1">
        <div class="container locations-container">
          <div class="locations-text">
            <h2 class="locations-text_title">
              <span>Работаем с экспортом</span>
              и импортом по всему миру
            </h2>

            <h3 class="locations-text_subtitle">
              <span>Наши специалисты помогут вам доставить</span>
              ваши грузы в любую точку мира
            </h3>
            <!-- /.header-text_subtitle -->

            <button class="button locations-text_button" onclick="ym(52696405, 'reachGoal', 'open-popup'); return true;">Быстрая заявка</button>
            <!-- /.header-text_button -->
          </div>
          <!-- /.header-text -->
        </div>
      </div>
      <div class="locations-background locations-background-2">
        <div class="container locations-container">
          <div class="locations-text">
            <h2 class="locations-text_title">
              <span>Работаем с экспортом </span>
              и импортом по всему миру
            </h2>

            <h3 class="locations-text_subtitle">
              <span>Наши специалисты помогут вам доставить</span>
              ваши грузы в любую точку мира
            </h3>
            <!-- /.header-text_subtitle -->

            <button class="button locations-text_button" onclick="ym(52696405, 'reachGoal', 'open-popup'); return true;">Быстрая заявка</button>
            <!-- /.header-text_button -->
          </div>
          <!-- /.header-text -->
        </div>
      </div>
      <div class="locations-background locations-background-3">
        <div class="container locations-container">
          <div class="locations-text">
            <h2 class="locations-text_title">
              <span>Работаем с экспортом </span>
              и импортом по всему миру
            </h2>

            <h3 class="locations-text_subtitle">
              <span>Наши специалисты помогут вам доставить</span> 
              ваши грузы в любую точку мира
            </h3>
            <!-- /.header-text_subtitle -->

            <button class="button locations-text_button" onclick="ym(52696405, 'reachGoal', 'open-popup'); return true;">Быстрая заявка</button>
            <!-- /.header-text_button -->
          </div>
          <!-- /.header-text -->
        </div>
      </div>
    </div>
  </section>

  <section class="partners">
    <div class="container partners-wrap">
      <h2 class="section-title partners-title">Наши партнеры</h2>
      <!-- /.section-title parters-title -->

      <div class="partners-block">
        <div class="partners-block__partner partners-block__partner_1"></div>
        <!-- /.partners-block__partner -->

        <div class="partners-block__partner partners-block__partner_2"></div>
        <!-- /.partners-block__partner -->

        <div class="partners-block__partner partners-block__partner_3"></div>
        <!-- /.partners-block__partner -->

        <div class="partners-block__partner partners-block__partner_4"></div>
        <!-- /.partners-block__partner -->

        <div class="partners-block__partner partners-block__partner_5"></div>
        <!-- /.partners-block__partner -->
      </div>
      <!-- /.partners-block -->
    </div>
    <!-- /.container partners-wrap -->
  </section>
  <!-- /.partners -->

  <?php
    include('request.php');
  ?>
  <!-- /.request -->

  <?php 
    include('footer.php');
  ?>
  <!-- /.footer -->

  <?php 
    include('call-popup.php');
  ?>
  <!-- /.call-popup -->

  <?php 
    include('quick-request.php');
  ?>
  <!-- /.request -->

  <?php 
    include('thanks-popup.php');
  ?>
  <!-- /.request -->

  <link rel="stylesheet" href="slick/slick.css">
  <link rel="stylesheet" href="slick/slick-theme.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic&display=swap" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
  <script src="js/jQueryMaskedInput.min.js"></script>
  <script src="slick/slick.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/script.js"></script>

  <noscript><div><img src="https://mc.yandex.ru/watch/52696405" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
</body>
</html>