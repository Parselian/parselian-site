<? require_once(__DIR__.'/database.php'); 

  $phone_link = '+78127478671';
  $phone_format = '+7 (812) 747-86-71';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/fonts.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
  </script> 
  <script>
  !function (w, d, t) {
    w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};


    ttq.load('C0HCJG4P76SVVJ0USH00');
    ttq.page();
  }(window, document, 'ttq');
  </script>

  <title>Ремонт техники Apple | Авторизованный сервисный центр Apstor</title>

 <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(70006978, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/70006978" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
  <script src="//code.jivosite.com/widget/yKkXmEqom8" async></script>
</head>
<body>
  <div class="burger-menu">
    <header class="header">
      <div class="container header__wrap">
        <a href="#promo">
          <img src="./images/svg/logo.svg" alt="logo" class="logo header__logo">
        </a>
        <nav class="header__menu">
          <a href="#about" class="header__menu-item">О нас</a>
          <a href="#prices" class="header__menu-item">Цены</a>
          <a href="#faq" class="header__menu-item">FAQ</a>
          <a href="#contacts" class="header__menu-item">Контакты</a>
        </nav>
        <div class="header__contacts">
          <button type="submit" class="request__button header__button open-callback-form">
            Оставить заявку
          </button>
          <div class="header__phone">
            <a href="tel:<?= $phone_link?>" class="header__phone-link">
              <?= $phone_format?>
            </a>
            <div class="text_accent header__phone-worktime">
              С 8:00 до 23:00 без выходных
            </div>
            <div class="burger-btn not-active">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="container burger-menu__wrap">
      <nav class="burger-menu__list">
        <a href="#about" class="burger-menu__list-item">О нас</a>
        <a href="#prices" class="burger-menu__list-item">Цены</a>
        <a href="#faq" class="burger-menu__list-item">FAQ</a>
        <a href="#contacts" class="burger-menu__list-item">Контакты</a>
      </nav>
      <div class="burger-menu__contacts">
        <div class="burger-menu__block">
          <h4 class="burger-menu__block-title">Наш телефон:</h4>
          <a href="tel:<?= $phone_link?>" class="burger-menu__block-text">
            <?= $phone_format?>
          </a>
        </div>
        <div class="burger-menu__block">
          <h4 class="burger-menu__block-title">Мы работаем:</h4>
          <div class="burger-menu__block-text">
            С 8:00 до 23:00
            <span class="line-break">Без выходных</span>
          </div>
        </div>
      </div>
      <button class="request__button burger-menu__button open-callback-form">Оставить заявку</button>
    </div>
  </div>

  <section id="promo" class="promo">
    <header class="header header_alt">
      <div class="container header__wrap">
        <nav class="header__menu">
          <a href="#about" class="header__menu-item header__menu-item_alt">О нас</a>
          <a href="#prices" class="header__menu-item header__menu-item_alt">Цены</a>
          <a href="#faq" class="header__menu-item header__menu-item_alt">FAQ</a>
          <a href="#contacts" class="header__menu-item header__menu-item_alt">Контакты</a>
        </nav>
        <div class="header__contacts">
          <button type="submit" class="request__button header__button open-callback-form">
            Оставить заявку
          </button>
        </div>
      </div>
    </header>
    <img class="promo__bg" src="./images/promo-bg.jpg" alt="iphones">
    <div class="promo__mask promo__mask_active"></div>

    <div class="container promo__wrap">
      <div class="promo__header">
        <img src="./images/svg/logo.svg" alt="logo" class="promo__header-logo">
        <img src="./images/svg/logo_mobile.svg" alt="logo" class="promo__header-logo promo__header-logo_mobile">
        <a href="tel:<?= $phone_link?>" class="promo__header-phone">
          <svg class="promo__header-phone-icon">
            <use xlink:href="./images/symbol/sprite.svg#phone-call"></use>
          </svg>
          <?= $phone_format?>
        </a>
        <div class="burger-btn not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <h1 class="promo__title">
        Авторизованный <span class="line-break">сервисный центр Apple</span>
      </h1>

      <div class="promo__features">
        <div class="promo__feature">
          <div class="promo__feature-content">
            <img src="./images/fire.png" alt="fire" class="promo__feature-icon">
            <div class="promo__feature-text">
              <span class="text_accent line-break">
                Гарантия
              </span>
              1 год
            </div>
          </div>
        </div>
        <div class="promo__feature">
          <div class="promo__feature-content">
            <img src="./images/car.png" alt="car" class="promo__feature-icon">
            <div class="promo__feature-text">
              <span class="text_accent line-break">
                Выезд
              </span>
              за 20 минут
            </div>
          </div>
        </div>
        <div class="promo__feature">
          <div class="promo__feature-content">
            <img src="./images/promo-cost.png" alt="money bag" class="promo__feature-icon">
            <div class="promo__feature-text">
              <span class="text_accent line-break">
                Фиксированные
              </span>
              цены
            </div>
          </div>
        </div>
        <!-- <div class="promo__feature">
          <div class="promo__feature-content">
            <img src="./images/lightning.png" alt="lightning" class="promo__feature-icon">
            <div class="promo__feature-text">
              <span class="text_accent line-break">
                Скидка
              </span>
              -20%
            </div>
          </div>
        </div> -->
      </div>
      <!-- <div class="promo__buttons">
        <button class="request__button promo__button open-callback-form">Оставить заявку</button>
        <a href="#prices" class="request__button promo__button promo__button_alt animate__fadeInUp">узнать стоимость</a>
      </div> -->
      <form action="./mail.php" method="POST" class="promo__form">
        <div class="promo__form-input-wrapper">
          <div class="promo__form-input-border"></div>
          <input type="text" name="user-phone" class="promo__form-input" placeholder="Ваш телефон" required>
        </div>
        <button type="submit" class="request__button promo__button">Заказать ремонт</button>
      </form>
      <img src="./images/certified-logo_white.png" alt="Сертификация Apple" class="promo__badge">
    </div>

    <a id="mouse-scroll" href="#about" class="promo__scroll">
      <div class="mousey">
        <div class="scroller"></div>
      </div>
    </a>
  </section>

  <header class="header">
    <div class="container header__wrap">
      <a href="#promo">
        <img src="./images/svg/logo.svg" alt="logo" class="logo header__logo">
      </a>
      <nav class="header__menu">
        <a href="#about" class="header__menu-item">О нас</a>
        <a href="#prices" class="header__menu-item">Цены</a>
        <a href="#faq" class="header__menu-item">FAQ</a>
        <a href="#contacts" class="header__menu-item">Контакты</a>
      </nav>
      <div class="header__contacts">
        <button type="submit" class="request__button header__button open-callback-form">
          Оставить заявку
        </button>
        <div class="header__phone">
          <a href="tel:<?= $phone_link?>" class="header__phone-link">
            <?= $phone_format?>
          </a>
          <div class="text_accent header__phone-worktime">
            С 8:00 до 23:00 без выходных
          </div>
          <div class="burger-btn not-active">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="about" class="features">
    <div class="container features__wrap">
      <h2 class="section__title">Почему именно мы?</h2>
      <div class="features__blocks">
        <div class="features__block">
          <img src="./images/car.png" alt="машина" class="features__block-icon">
          <div class="features__block-title text_bold">Выезд &ndash; 0 ₽</div>
          <div class="features__block-text">
            Бесплатно приедем и починим Ваше устройство дома, в офисе, в кафе
          </div>
        </div>
        <div class="features__block">
          <img src="./images/smile-in-glasses.png" alt="смайл" class="features__block-icon">
          <div class="features__block-title text_bold">Гарантия от Apple</div>
          <div class="features__block-text">
            Сохраняете право на сервисное обслуживание и поддержку Apple
          </div>
        </div>
        <div class="features__block">
          <img src="./images/promo-cost.png" alt="деньги" class="features__block-icon">
          <div class="features__block-title text_bold">Фиксированные цены</div>
          <div class="features__block-text">
            Официальный прайс Apple на оригинальные запчасти и услуги. Без наценок.
          </div>
        </div>
        <div class="features__block">
          <img src="./images/fire.png" alt="огонь" class="features__block-icon">
          <div class="features__block-title text_bold">Новое устройство</div>
          <div class="features__block-text">
            Отдаем вам новый iPhone, если что-то пошло не так
          </div>
        </div>
      </div>

      <div class="features__about">
        <div class="features__about-text">
          Мы работаем с 2007 года и каждый год обновляем свой статус Apple Premium Service Provider. Данный статус присваивают официальным сервисным центрам, которые отвечают наивысшим стандартам Apple в оказании сервисных услуг и имеют максимальное количество положительных отзывов клиентов. Все специалисты проходят сертификацию Apple и знают тонкости обслуживания каждого продукта из линейки Apple.
        </div>
        <img src="./images/certified-logo.png" alt="premium service provider" class="features__about-logo">

        <div data-relative-input="true" id="features-scene"  class="features__about-img">
          <img src="./images/animoji-stars.png" alt="animoji" data-depth="0.1">
        </div>
      </div>
    </div>
  </section>

  <section id="prices" class="prices">
    <div class="container prices__wrap">
      <h2 class="section__title">Выберите ваше устройство:</h2>
      <div class="prices__wrapper">
        <div class="prices__wrapper-col">
          <div class="prices__groups">
            <button class="prices__group prices__group_active" data-group="iphone">iPhone</button>
            <button class="prices__group" data-group="ipad">iPad</button>
            <button class="prices__group" data-group="macbook">MacBook</button>
            <button class="prices__group" data-group="mac">Mac</button>
            <button class="prices__group" data-group="accessories">Прочее</button>
          </div>
  
          <div class="prices__models-wrapper" data-group="iphone">
            <div class="prices__models-border"></div>
            <select name="user-model" id="models-iphone" class="prices__models">
              <option value="none" disabled selected>Выберите устройство:</option>
              <?
                foreach ($devices as $arrayName => $deviceGroups) {
                  if ($arrayName == 'iphone') {
                    foreach ($deviceGroups as $device) {
                      echo '<option value="'.$device['pathIMG'].'" data-group="'.$arrayName.'" '.$device['spec-attr'].'>'.$device['title'].'</option>';
                    }
                  }
                }
              ?>
            </select>
          </div>

          <div class="prices__models-wrapper"  data-group="ipad">
            <div class="prices__models-border"></div>
            <select name="user-model" id="models-list" class="prices__models">
              <option value="none" disabled selected>Выберите устройство:</option>
              <?
                foreach ($devices as $arrayName => $deviceGroups) {
                  if ($arrayName == 'ipad') {
                    foreach ($deviceGroups as $device) {
                      echo '<option value="'.$device['pathIMG'].'" data-group="'.$arrayName.'" '.$device['spec-attr'].'>'.$device['title'].'</option>';
                    }
                  }
                }
              ?>
            </select>
          </div>

          <div class="prices__models-wrapper"  data-group="macbook">
            <div class="prices__models-border"></div>
            <select name="user-model" id="models-list" class="prices__models">
              <option value="none" disabled selected>Выберите устройство:</option>
              <?
                foreach ($devices as $arrayName => $deviceGroups) {
                  if ($arrayName == 'macbook') {
                    foreach ($deviceGroups as $device) {
                      echo '<option value="'.$device['pathIMG'].'" data-group="'.$arrayName.'" '.$device['spec-attr'].'>'.$device['title'].'</option>';
                    }
                  }
                }
              ?>
            </select>
          </div>

          <div class="prices__models-wrapper"  data-group="mac">
            <div class="prices__models-border"></div>
            <select name="user-model" id="models-list" class="prices__models">
              <option value="none" disabled selected>Выберите устройство:</option>
              <?
                foreach ($devices as $arrayName => $deviceGroups) {
                  if ($arrayName == 'mac') {
                    foreach ($deviceGroups as $device) {
                      echo '<option value="'.$device['pathIMG'].'" data-group="'.$arrayName.'" '.$device['spec-attr'].'>'.$device['title'].'</option>';
                    }
                  }
                }
              ?>
            </select>
          </div>

          <div class="prices__models-wrapper" data-group="accessories">
            <div class="prices__models-border"></div>
            <select name="user-model" id="models-list" class="prices__models">
              <option value="none" disabled selected>Выберите устройство:</option>
              <?
                foreach ($devices as $arrayName => $deviceGroups) {
                  if ($arrayName == 'accessories') {
                    foreach ($deviceGroups as $device) {
                      echo '<option value="'.$device['pathIMG'].'" data-group="'.$arrayName.'" '.$device['spec-attr'].'>'.$device['title'].'</option>';
                    }
                  }
                }
              ?>
            </select>
          </div>
  
          <ul class="prices__list">
            <?
              foreach ($devices as $deviceGroups) {
                foreach ($deviceGroups as $device) {
                  if (is_array($device['servicesNames'])) {
                    foreach ($device['servicesNames'] as $key => $serviceNames) {
                      echo'
                        <li class="prices__list-item" data-device="'.$device['pathIMG'].'">
                          <span class="prices__list-item-name">'.$serviceNames.'</span>
                          <span class="prices__list-item-separator"></span>
                          <span class="prices__list-item-cost">'.$device['servicesPrices'][$key].' ₽</span>
                        </li>
                      ';
                    }
                  }
                }
              }
            ?>
          </ul>
  
          <div class="prices__controls">
            <button class="request__button prices__controls-callback open-callback-form">
              Оставить заявку
            </button>
            <div class="prices__controls-more">
              Показать больше
              <!-- <svg class="prices__controls-more_arrow">
                <use xlink:href="./images/symbol/sprite.svg#arrow"></use>
              </svg> -->
            </div>
          </div>
        </div>

        <div class="prices__wrapper-col">
          <img src="./images/ipad.jpg" alt="ipad" class="prices__device-img">
          <?
              foreach ($devices as $arrayName => $deviceGroups) {
                foreach ($deviceGroups as $device) {
                  echo '
                    <picture class="prices__device-img" data-device="'.$device['pathIMG'].'">
                      <source srcset="./images/webp/'.$device['pathIMG'].'.webp" type="image/webp">
                      <img src="./images/'.$device['pathIMG'].'.jpg" alt="'.$device['title'].'">
                    </picture>
                  ';
                }
              }
            ?>
        </div>
      </div>
    </div>
  </section>

  <section class="causes">
    <img src="./images/animoji-sprite.jpg" alt="" class="causes__bg">
    <img src="./images/animoji-sprite_mobile.jpg" alt="" class="causes__bg causes__bg_mobile">
    <div class="container causes__wrap">
      <h2 class="section__title causes__title">
        Почему нужно обращаться именно в 
        <span class="text_accent">авторизованный сервисный центр Apstor</span>
      </h2>
      <div class="causes__blocks">
        <div class="causes__block">
          <h2 class="causes__block-title">Выезд - <span class="text_accent">0 ₽</span></h2>
          <div class="causes__block-text">
            Вам не нужно терять время на дорогу в Сервисный центр – Сервис-инженер Apstor сам приедет в удобное для Вас время и место в течение 30 минут абсолютно бесплатно!
          </div>
        </div>
        <div class="causes__block">
          <h2 class="causes__block-title">
          Подменное <span class="text_accent">устройство</span>
          </h2>
          <div class="causes__block-text">
            В случае серьезных проблем для проведения сложного ремонта сервис-инженеру может потребоваться забрать Ваше устройство в сервисный центр Apstor.
            На время ремонта Вы получаете подменное устройство, чтобы всегда быть на связи с друзьями и родными.
          </div>
        </div>
        <div class="causes__block">
          <h2 class="causes__block-title">
          Оригинальные <span class="text_accent">запчасти</span>
            </h2>
          <div class="causes__block-text">
            Обновление iOS 12.1.4 показало, что Apple имеет возможность отключить работу iPhone с установленным неоригинальным дисплеем. Сервисный центр Apstor использует только совместимые с iOS комплектующие Apple и дает на них гарантию 2 года.
          </div>
        </div>
        <div class="causes__block">
          <h2 class="causes__block-title">
          Новый <span class="text_accent">гаджет</span>, если что-то не так.</h2>
          <div class="causes__block-text">
          После ремонта вы получите полностью рабочее устройство. В исключительных случаях, может потребоваться замена телефона целиком.
          Опытные инженеры объяснят, почему это произошло, согласуют с вами все нюансы, успокоят и заменят вам устройство на новое в кратчайший срок.
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="request">
    <div class="container request__wrap">
      <form action="./mail.php" method="POST" class="request__form">
        <h2 class="request__form-title">
          Оставьте свой номер телефона
        </h2>
        <div class="request__form-subtitle">
          и получите скидку 20%
        </div>
        <input type="text" name="user-phone" class="request__form-input" placeholder="Ваш телефон" required>
        <button type="submit" class="request__button request__form-submit">Получить скидку</button>
        <img src="./images/form-request-bg.png" alt="devices" class="request__form-img">
      </form>
      <img src="./images/svg/gift_alt.svg" class="request__form-gift">
    </div>
  </section>

  <section class="team">
    <div class="container team__wrap">
      <h2 class="section__title team__title">
        Сервисные инженеры <span class="text_accent">Apstor</span>
      </h2>

      <div class="section__subtitle team__subtitle">
      Сертифицированы по программам <span class="text_accent">iOS ACiT</span> и <span class="text_accent">Mac ACMT</span>
      </div>

      <div class="team__certificates-wrap">
        <div class="team__certificates-slider">
          <img src="./images/certificate-1.jpg" alt="сертификат 1" class="team__certificates-slide">
          <img src="./images/certificate-2.jpg" alt="сертификат 2" class="team__certificates-slide">
          <img src="./images/certificate-3.jpg" alt="сертификат 3" class="team__certificates-slide">
          <img src="./images/certificate-4.jpg" alt="сертификат 4" class="team__certificates-slide">
        </div>
      </div>

      <div class="team__blocks">
        <div class="team__block">
          <img src="./images/engineer-1.jpg" alt="Инженер" class="team__block-img">
          <h3 class="team__block-name">Яманов Антон</h3>
          <div class="team__block-button" data-slide="0">
            Посмотреть сертификат
          </div>
        </div>
        <div class="team__block">
          <img src="./images/engineer-2.jpg" alt="Инженер" class="team__block-img">
          <h3 class="team__block-name">Щербинин Даниил</h3>
          <div class="team__block-button" data-slide="1">
            Посмотреть сертификат
          </div>
        </div>
        <div class="team__block">
          <img src="./images/engineer-4.jpg" alt="Инженер" class="team__block-img">
          <h3 class="team__block-name">Золотарёв Андрей</h3>
          <div class="team__block-button" data-slide="2">
            Посмотреть сертификат
          </div>
        </div>
        <div class="team__block">
          <img src="./images/engineer-3.jpg" alt="Инженер" class="team__block-img">
          <h3 class="team__block-name">Меркушев Макс</h3>
          <div class="team__block-button" data-slide="3">
            Посмотреть сертификат
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="request">
    <div class="container request__wrap">
      <form action="./mail.php" method="POST" class="request__form">
        <div class="request__form-col request__form-features">
          <div class="request__form-feature">
            <svg class="request__form-feature-icon">
              <use xlink:href="./images/symbol/sprite.svg#wallet"></use>
            </svg>
            <div class="request__form-feature-info">
              <h3 class="request__form-feature-title">Платите как вам удобно</h3>
              <div class="request__form-feature-text">
                Наличными или картой
              </div>
            </div>
          </div>

          <div class="request__form-feature">
            <svg class="request__form-feature-icon">
              <use xlink:href="./images/symbol/sprite.svg#badge"></use>
            </svg>
            <div class="request__form-feature-info">
              <h3 class="request__form-feature-title">Выдаём все документы:</h3>
              <div class="request__form-feature-text">
                Гарантию, договор, опись устройства
              </div>
            </div>
          </div>
        </div>

        <div class="request__form-col">
          <h2 class="request__form-title">Нужен ремонт Apple?</h2>
          <div class="request__form-subtitle request__form-subtitle_alt">
            Оставьте ваш телефон и мы перезвоним.
          </div>
          <input type="text" name="user-phone" class="request__form-input" placeholder="Ваш телефон" required>
            <button type="submit" class="request__button request__form-submit">Позвоните мне</button>
        </div>
      </form>
      <img src="./images/svg/gift_alt.svg" class="request__form-gift">
    </div>
  </section>

  <section class="steps">
    <div class="container steps__wrap">
      <h2 class="section__title">С чего начать?</h2>
      <div class="steps__blocks">
        <div class="steps__block"> 
          <div class="steps__block-text">
            Создать резервную копию – Копию необходимо сохранить на компьютере с помощью iTunes или по Wi-Fi в iCloud.
          </div>
          <div data-relative-input="true" id="steps-1-scene" class="steps__block-img">
            <svg data-depth="0.1">
              <use xlink:href="./images/symbol/sprite.svg#one"></use>
            </svg>
          </div>
        </div>
        <div class="steps__block">
          <div class="steps__block-text">
            Отключить функцию «Найти iPhone» - можете сделать самостоятельно или во время передачи телефона в ремонт.
          </div>
          <div data-relative-input="true" id="steps-2-scene" class="steps__block-img">
            <svg data-depth="0.1">
              <use xlink:href="./images/symbol/sprite.svg#two"></use>
            </svg>
          </div>
        </div>
        <div class="steps__block">
          <div class="steps__block-text">
            Вызвать нашего сервис-инженера.
            <button type="submit" class="request__button steps__block-button open-callback-form">Вызвать инженера</button>
          </div>
          <div data-relative-input="true" id="steps-3-scene" class="steps__block-img">
            <svg data-depth="0.1">
              <use xlink:href="./images/symbol/sprite.svg#three"></use>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="faq" class="faq">
    <div class="container faq__wrap">
      <h2 class="section__title">Всё ещё сомневаетесь?</h2>
      <div data-relative-input="true" id="faq-scene" class="faq__animoji faq__animoji_left parallax-scene">
        <img src="./images/wow-animoji.png" alt="wow animoji" data-depth="0.1">
      </div>
      <div class="faq__blocks">
        <div class="faq__block">
          <h3 class="faq__block-title">
            Я опасаюсь, что не сохранится пыле- и <span class="line-break">влагозащищенность.</span>
          </h3>
          <div class="faq__block-text">
            Устанавливаем новую оригинальную проклейку дисплея. Она сохраняет влагостойкость по стандарту IP67 и IP68 (в зависимости от модели).
            </br>
            </br>
            До и после ремонта проводится полная диагностика устройства, которая включает в себя 32 теста. Вероятность получить устройство с другой неисправностью сводится к нулю.
          </div>
        </div>
        <div class="faq__block">
          <h3 class="faq__block-title">
            Я не хочу, чтобы мой iPhone ремонтировали.<span class="line-break"> Хочу замены.</span>
          </h3>
          <div class="faq__block-text">
            В свое время Apple разбаловала клиентов заменами устройств. Но сейчас Авторизованные сервисные центры доказали, что способны производить сложные работы, и компания расширяет круг поэлементных ремонтов
            </br>
            </br>
            Например, до 2017 года официальные сервисные центры не ремонтировали экраны iPhone, поскольку они в Россию не поставлялись. И по гарантии производитель заменял смартфон. Сейчас в авторизованных центрах есть абсолютно все запчасти для ремонта дисплея. Поэтому даже если вашу ситуацию признают заводским браком, вам, скорее всего, предложат ремонт телефона, а не его замену.
          </div>
        </div>
        <div class="faq__block">
          <h3 class="faq__block-title">
            Слишком дорогой ремонт, проще купить <span class="line-break">новый iPhone.</span>
          </h3>
          <div class="faq__block-text">
            Да, проще купить новый iPhone, если ремонтировать смартфон в сомнительном сервисе, где вам поставят неоригинальные комплектующие. Это уже ставит нормальную функциональность устройства под сомнение. При этом такие ремонты могут привести к потере гарантии и поддержки Apple.
            </br>
            </br>
            Ремонт в авторизованном сервисе кажется дорогим только в сравнении с неофициальным. Зато взамен вы получаете 100% оригинальные запчасти с гарантией производителя, полную работоспособность, и у вас остается право на сервисное обслуживание компании. И давайте не забывать народную мудрость о скупом и чем это обычно заканчивается.
          </div>
        </div>
        <div class="faq__block">
          <h3 class="faq__block-title">
            Эппл же не ремонтирует iPhone. <span class="line-break">Откуда запчасти?</span>
          </h3>
          <div class="faq__block-text">
            В мае 2017 года Apple запустила в России замену дисплеев в собственном Ремонтном Центре. Единственным минусом такого ремонта были достаточно большие сроки. А с декабря 2018 года все авторизованные сервисы получили специальное оборудование и возможность заказывать оригинальные дисплеи у Apple. Официальный ремонт доступен для моделей iPhone 6s и выше.
          </div>
        </div>
      </div>
      <div data-relative-input="true" id="faq-scene-2" class="faq__animoji faq__animoji_right">
        <img src="./images/thinking-animoji.png" alt="thinking animoji" data-depth="0.1">
      </div>
    </div>
  </section>

  <section class="request request_alt">
    <div class="container request__wrap">
      <form action="./mail.php" method="POST" class="request__form">
        <h2 class="request__form-title">
          Оставьте заявку на вызов <span class="line-break">сервис-инженера</span>
        </h2>
        <div class="request__form-subtitle">
          Приедем к вам за 30 минут!
        </div>
        <input type="text" name="user-phone" class="request__form-input" placeholder="Ваш телефон" required>
        <button type="submit" class="request__button request__form-submit">Вызвать инженера</button>
        <img src="./images/form-request-bg.png" alt="devices" class="request__form-img">
      </form>
      <img src="./images/svg/gift_alt.svg" class="request__form-gift">
    </div>
  </section>

  <section id="contacts" class="contacts">
    <div id="map" class="contacts__map"></div>
    <div class="container contacts__wrap">
      <div class="contacts__block">
        <div class="contacts__block-col">
          <h2 class="contacts__block-title">Наши контакты:</h2>
          <div class="contacts__block-item">
            <svg class="contacts__block-icon">
              <use xlink:href="./images/symbol/sprite.svg#placeholder"></use>
            </svg>
            <div class="contacts__block-item-text">
            190005, Санкт - Петербург, Московский проспект д.7
              (ст. м. Садовая)
            </div>
          </div>
          <div class="contacts__block-item">
            <svg class="contacts__block-icon">
              <use xlink:href="./images/symbol/sprite.svg#phone-call"></use>
            </svg>
            <div class="contacts__block-item-text">
              <a href="tel:<?= $phone_link?>" class="contacts__block-phone">
                <?= $phone_format?>
              </a>
            </div>
          </div>
        </div>

        <div class="contacts__block-col">
          <h2 class="contacts__block-title">Мы работаем:</h2>
          <div class="contacts__block-item">
            <svg class="contacts__block-icon">
              <use xlink:href="./images/symbol/sprite.svg#clock"></use>
            </svg>
            <div class="contacts__block-item-text">
              C 8:00 до 23:00 <span class="line-break">Без выходных</span>
            </div>
          </div>
          <button class="request__button contacts__block-button open-callback-form">
            Вызвать сервис-инженера
          </button>
        </div>

      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container footer__wrap">
      <div class="footer__col">
        <img src="./images/svg/logo.svg" alt="logo" class="footer__logo">
        <div class="footer__billings">
          <img src="./images/svg/visa.svg" alt="visa" class="footer__billing">
          <img src="./images/svg/mastercard.svg" alt="mastercard" class="footer__billing">
          <img src="./images/sber.png" alt="sberbank" class="footer__billing">
          <img src="./images/rub.png" alt="cash" class="footer__billing">
        </div>
      </div>
      <nav class="footer__col footer__nav">
        <a href="#about" class="footer__nav-link">О нас</a>
        <a href="#prices" class="footer__nav-link">Цены</a>
        <a href="#faq" class="footer__nav-link">FAQ</a>
        <a href="#contacts" class="footer__nav-link">Контакты</a>
      </nav>
      <div class="footer__col footer__contacts">
        <a href="tel:<?= $phone_link?>" class="footer__phone"><?= $phone_format?></a>
        <div class="footer__worktime">C 8:00 до 23:00 без выходных</div>
      </div>
    </div>
    <div class="container footer__footnote">
      Компания Apstor. Все права защищены. Apple, Mac, Mac OS, MacBook, MacBook Pro, iPhone, iPad, iPad Air и их логотипы являются зарегистрированными товарными знаками Apple Inc. в США и других странах. Информация опубликованная на сайте не является публичной офертой, определяемой положениями Статьи 437 ГК РФ. Цены указаны за услугу, запчасти в эту стоимость не входят.
    </div>
  </footer>

  <div class="popup popup-callback">
    <div class="container popup__wrap">
      <form action="./mail.php" method="POST" class="popup__form">
        <h2 class="popup__form-title">Оставьте ваши данные</h2>
        <div class="popup__form-subtitle">
          Наш оператор свяжется с вами в течении 5 минут.
        </div>
        <div class="popup__form-close">Закрыть</div>
        <div class="popup__form-col">
          <div class="popup__form-input-wrap">
            <label for="popup-callback-name" class="popup__form-label">
              Ваше имя
            </label>
            <input id="popup-callback-name" type="text" name="user-name" class="popup__form-input" placeholder="Введите имя">
          </div>

          <div class="popup__form-input-wrap">
            <label for="popup-callback-phone" class="popup__form-label">
              Ваш телефон
            </label>
            <input id="popup-callback-phone" type="text" name="user-phone" class="popup__form-input" placeholder="Введите телефон" required>
          </div>

          <button type="submit" class="request__button popup__form-button">
            Оставить заявку
          </button>

          <div class="popup__form-footnote">
            Нажимая на кнопку «Оставить заявку», я даю согласие на <a href="politika.html">обработку персональных данных.</a>
          </div>
        </div>
        <div class="popup__form-col">
          <div class="popup__form-text">Или позвоните нам:</div>
          <a href="tel:<?= $phone_link?>" class="popup__form-phone">
            <?= $phone_format?>
          </a>
          <img src="./images/popup-img.png" alt="iPhone" class="popup__form-img">
        </div>
      </form>
    </div>
  </div>

  <div class="popup popup-gift">
    <div class="container popup__wrap">
      <form action="./mail.php" method="POST" class="popup__form popup__form_gift">
        <h2 class="popup__form-title">Выберите подарок</h2>
        <div class="popup__form-close">Закрыть</div>

        <div class="popup__form-gifts">
          <div class="popup__form-gift" data-gift="кабель зарядки">
            <div class="popup__form-gift-name">
              Кабель <span class="line-break">зарядки</span>
            </div>
            <img src="./images/charging-cable.jpg" alt="кабель зарядки" class="popup__form-gift-img popup__form-gift-img_first">
            <input type="radio" name="user_gift" value="кабель зарядки" class="popup__form-gift-input">
          </div>

          <div class="popup__form-gift" data-gift="защитное стекло">
            <div class="popup__form-gift-name">Защитное стекло</div>
            <img src="./images/case-glass.jpg" alt="Защитное стекло" class="popup__form-gift-img">
            <input type="radio" name="user_gift" value="Защитное стекло" class="popup__form-gift-input">
          </div>

          <div class="popup__form-gift" data-gift="чехол">
            <div class="popup__form-gift-name">Чехол</div>
            <img src="./images/case.jpg" alt="Чехол" class="popup__form-gift-img">
            <input type="radio" name="user_gift" value="Чехол" class="popup__form-gift-input">
          </div>
        </div>

        <div class="popup__form-input-wrap popup__form-input-wrap_gift">
          <label for="popup-gift-phone" class="popup__form-label">
            Ваш телефон
          </label>
          <input id="popup-gift-phone" type="text" name="user-phone" class="popup__form-input popup__form-input_gift" placeholder="Введите телефон" required>
        </div>

        <button type="submit" class="request__button popup__form-button popup__form-button_gift">
          Оставить заявку
        </button>

        <div class="popup__form-footnote" style="text-align: center">
          Нажимая на кнопку «Оставить заявку», я даю согласие на <a href="politika.html">обработку персональных данных.</a>
        </div>
      </form>
    </div>
  </div>

  <div class="popup popup-thanks">
    <div class="container popup__wrap">
      <div action="" class="popup__form popup-thanks__content">
        <h2 class="popup__form-title">Спасибо!</h2>
        <div class="popup__form-subtitle">
          Наш оператор свяжется с вами в течении 5 минут.
        </div>
        <div class="popup__form-close">Закрыть</div>
        <button type="submit" class="request__button popup__form-button popup-thanks__button">
          Закрыть
        </button>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="./js/jquery-masked-input.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
  <script src="./js/script.js?<?=time()?>"></script>

  <script>
    ymaps.ready(init);
    function init(){
        // Создание карты.
      var myMap = new ymaps.Map("map", {
        // Координаты центра карты.
        // Порядок по умолчанию: «широта, долгота».
        // Чтобы не определять координаты центра карты вручную,
        // воспользуйтесь инструментом Определение координат.
        center: [59.952730, 30.305410],
        // Уровень масштабирования. Допустимые значения:
        // от 0 (весь мир) до 19.
        zoom: 12
      });

      const glyphServicesParams = {
          iconLayout: 'default#image',
          iconImageHref: './images/svg/map-placeholder.svg',
          iconImageSize: [100, 100]
      }

      // const glyphEngineersParams = {
      //     iconLayout: 'default#image',
      //     // iconImageHref: './img/placeholder-engineer.png',
      //     iconImageHref: './img/ifixit-engineer-placeholder.svg',
      //     iconImageSize: [40, 40]
      // }
      
      let servicePlacemarks = {
          sadovaya: new ymaps.Placemark([59.924726, 30.317046], {
            balloonContentHeader: 'Apstor на м. Садовая',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          gorkovskaya: new ymaps.Placemark([59.957081, 30.319257], {
              balloonContentHeader: 'Apstor на м. Горьковская',
              balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          petrogradskaya: new ymaps.Placemark([59.965483, 30.313301], {
            balloonContentHeader: 'Apstor на м. Петроградская',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          gostinyDvor: new ymaps.Placemark([59.935262, 30.335110], {
            balloonContentHeader: 'Apstor на м. Гостиный двор',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          vosstaniya: new ymaps.Placemark([59.927122, 30.359359], {
            balloonContentHeader: 'Apstor на м. Площадь Восстания',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          vasileostrovskaya: new ymaps.Placemark([59.940976, 30.280436], {
            balloonContentHeader: 'Apstor на м. Василеостровская',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          technolozhka: new ymaps.Placemark([59.915926, 30.312586], {
            balloonContentHeader: 'Apstor на м. Технологический Институт',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          narvskaya: new ymaps.Placemark([59.899923, 30.273741], {
            balloonContentHeader: 'Apstor на м. Нарвская',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          mezhdunarodnaya: new ymaps.Placemark([59.875975, 30.376100], {
            balloonContentHeader: 'Apstor на м. Международная',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          moskovskaya: new ymaps.Placemark([59.859279, 30.320540], {
            balloonContentHeader: 'Apstor на м. Московская',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          novocherkasskaya: new ymaps.Placemark([59.930182, 30.416796], {
            balloonContentHeader: 'Apstor на м. Новочеркасская',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          bolshevikov: new ymaps.Placemark([59.917443, 30.473776], {
            balloonContentHeader: 'Apstor на м. Проспект Большевиков',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          muzhestva: new ymaps.Placemark([59.999980, 30.352904], {
            balloonContentHeader: 'Apstor на м. Площадь Мужества',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          lenina: new ymaps.Placemark([59.960110, 30.345721], {
            balloonContentHeader: 'Apstor на м. Площадь Ленина',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          energetikov: new ymaps.Placemark([59.959632, 30.436838], {
            balloonContentHeader: 'Apstor на пр. Энергетиков',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          pionerskaya: new ymaps.Placemark([60.001014, 30.299878], {
            balloonContentHeader: 'Apstor на м. Пионерская',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          komendantskiy: new ymaps.Placemark([60.014319, 30.252404], {
            balloonContentHeader: 'Apstor на м. Комендантский проспект',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          ozerki: new ymaps.Placemark([60.039802, 30.324872], {
            balloonContentHeader: 'Apstor на м. Озерки',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          avtovo: new ymaps.Placemark([59.866627, 30.264984], {
            balloonContentHeader: 'Apstor на м. Автово',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          zvezdnaya: new ymaps.Placemark([59.832183, 30.363087], {
            balloonContentHeader: 'Apstor на м. Звёздная',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          proletarskaya: new ymaps.Placemark([59.869139, 30.460047], {
            balloonContentHeader: 'Apstor на м. Пролетарская',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          begovaya: new ymaps.Placemark([59.989656, 30.205812], {
            balloonContentHeader: 'Apstor на м. Беговая',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          primorskaya: new ymaps.Placemark([59.947552, 30.239507], {
            balloonContentHeader: 'Apstor на м. Приморская',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          dibenko: new ymaps.Placemark([59.900370, 30.486519], {
            balloonContentHeader: 'Apstor на м. Дыбенко',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          elizarovskaya: new ymaps.Placemark([59.889285, 30.426827], {
            balloonContentHeader: 'Apstor на м. Елизаровская',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          grazhdanka: new ymaps.Placemark([60.038807, 30.402445], {
            balloonContentHeader: 'Apstor на м. Гражданский проспект',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          kondratievskiy: new ymaps.Placemark([59.973282, 30.389281], {
            balloonContentHeader: 'Apstor на Кондратьевском пр.',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          moskVorota: new ymaps.Placemark([59.888972, 30.327267], {
            balloonContentHeader: 'Apstor на м. Московские ворота',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          parnas: new ymaps.Placemark([60.058574, 30.337453], {
            balloonContentHeader: 'Apstor на м. Парнас',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          obvodnyKanal: new ymaps.Placemark([59.908715, 30.346258], {
            balloonContentHeader: 'Apstor на м. Обводный канал',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          krestOstrov: new ymaps.Placemark([59.972065, 30.273265], {
            balloonContentHeader: 'Apstor на м. Крестовский остров',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          akademicheskaya: new ymaps.Placemark([60.010809, 30.398610], {
            balloonContentHeader: 'Apstor на м. Академическая',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          dunayskaya: new ymaps.Placemark([59.846634, 30.406242], {
            balloonContentHeader: 'Apstor на м. Дунайская',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          frunzenskaya: new ymaps.Placemark([59.904083, 30.323250], {
            balloonContentHeader: 'Apstor на м. Фрунзенская',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          chkalovskaya: new ymaps.Placemark([59.959321, 30.290739], {
            balloonContentHeader: 'Apstor на м. Чкаловская',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          udelnaya: new ymaps.Placemark([60.014788, 30.323675], {
            balloonContentHeader: 'Apstor на м. Удельная',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          lesnaya: new ymaps.Placemark([59.988010, 30.353747], {
            balloonContentHeader: 'Apstor на м. Лесная',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
          petergof: new ymaps.Placemark([59.848085, 30.148520], {
            balloonContentHeader: 'Apstor на Петергофском ш.',
            balloonContentBody: 'Для ремонта запишитесь по телефону: <a href="tel:<?=$phone_link?>"><?=$phone_format?></a>'
          }, glyphServicesParams),
      };
      
      myMap.geoObjects.add(servicePlacemarks['sadovaya']);
      myMap.geoObjects.add(servicePlacemarks['gorkovskaya']);
      myMap.geoObjects.add(servicePlacemarks['petrogradskaya']);
      myMap.geoObjects.add(servicePlacemarks['gostinyDvor']);
      myMap.geoObjects.add(servicePlacemarks['vosstaniya']);
      myMap.geoObjects.add(servicePlacemarks['vasileostrovskaya']);
      myMap.geoObjects.add(servicePlacemarks['technolozhka']);
      myMap.geoObjects.add(servicePlacemarks['narvskaya']);
      myMap.geoObjects.add(servicePlacemarks['mezhdunarodnaya']);
      myMap.geoObjects.add(servicePlacemarks['moskovskaya']);
      myMap.geoObjects.add(servicePlacemarks['novocherkasskaya']);
      myMap.geoObjects.add(servicePlacemarks['bolshevikov']);
      myMap.geoObjects.add(servicePlacemarks['muzhestva']);
      myMap.geoObjects.add(servicePlacemarks['lenina']);
      myMap.geoObjects.add(servicePlacemarks['energetikov']);
      myMap.geoObjects.add(servicePlacemarks['pionerskaya']);
      myMap.geoObjects.add(servicePlacemarks['komendantskiy']);
      myMap.geoObjects.add(servicePlacemarks['ozerki']);
      myMap.geoObjects.add(servicePlacemarks['avtovo']);
      myMap.geoObjects.add(servicePlacemarks['zvezdnaya']);
      myMap.geoObjects.add(servicePlacemarks['proletarskaya']);
      myMap.geoObjects.add(servicePlacemarks['begovaya']);
      myMap.geoObjects.add(servicePlacemarks['primorskaya']);
      myMap.geoObjects.add(servicePlacemarks['dibenko']);
      myMap.geoObjects.add(servicePlacemarks['elizarovskaya']);
      myMap.geoObjects.add(servicePlacemarks['grazhdanka']);
      myMap.geoObjects.add(servicePlacemarks['kondratievskiy']);
      myMap.geoObjects.add(servicePlacemarks['moskVorota']);
      myMap.geoObjects.add(servicePlacemarks['parnas']);
      myMap.geoObjects.add(servicePlacemarks['obvodnyKanal']);
      myMap.geoObjects.add(servicePlacemarks['krestOstrov']);
      myMap.geoObjects.add(servicePlacemarks['akademicheskaya']);
      myMap.geoObjects.add(servicePlacemarks['dunayskaya']);
      myMap.geoObjects.add(servicePlacemarks['frunzenskaya']);
      myMap.geoObjects.add(servicePlacemarks['chkalovskaya']);
      myMap.geoObjects.add(servicePlacemarks['udelnaya']);
      myMap.geoObjects.add(servicePlacemarks['lesnaya']);
      myMap.geoObjects.add(servicePlacemarks['petergof']);

      myMap.events.add('click', () => {
        for (let placemark in servicePlacemarks) {
          servicePlacemarks[placemark].balloon.close();
        }
        for (let placemark in engineerPlacemarks) {
          engineerPlacemarks[placemark].balloon.close();
        }
      });

      if (document.documentElement.clientWidth < 992) {
          myMap.behaviors.disable(['drag']);
      }
    }
  </script>
</body>
</html>