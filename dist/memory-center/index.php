<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./assets/main.css?<?=time();?>">
  <link rel="stylesheet" type="text/css" href="./assets/rrr.css">
  <title>Центр Apple 📱 Ремонт iPhone, MacBook, iMac, iPad в СПб</title>
  <meta name="theme-color" content="#ffffff">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">

  <style></style>
  <link rel="stylesheet" href="./assets/module.css">

</head>

<body>
  <?


// $phone_full = "+7 (812) 770-66-81";
// $phone_short = "770-66-81";
// $phone_tel = "+78127706681";
$phone_full = "+7 (812) 770-62-64";
$phone_short = "770-62-64";
$phone_tel = "+78127706264";



?>

  <header>
    <div class="nav navbarrr navbar-fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12" style="margin-bottom: -18px;">
            <div class="flex">
              <div class="block hidden-xs">
                <div class="logo">
                  <img src="./assets/logo.svg" alt="" class="img-responsive">
                </div>
                <div class="prof hidden-md hidden-sm hidden-xs" style="font-weight: 800; font-size: 20px;"><span>Центр
                    Apple</span><br><span style="font-size: 14px;">ремонт iPhone в СПб</span>
                </div>
              </div>
              <div class="block">
                <nav class="navbar navbar-default visible-xs">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false" class="navbar-toggle collapsed">
                        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                      </button>
                    </div>
                    <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                      <ul class="nav navbar-nav navb">
                        <li><a href="#price">Стоимость услуг </a></li>
                        <li class="hidden-sm"><a href="#about">О нас </a></li>

                        <li class="hidden-sm"><a href="#garanty">Гарантия</a></li>

                        <li><a href="#contacts">Контакты</a></li>
                      </ul>
                    </div>
                  </div>
                </nav>
                <nav class="hidden-xs">
                  <ul>
                    <li><a href="#price">Цены</a></li>
                    <li class="hidden-sm"><a href="#about">О нас </a></li>

                    <li class="hidden-sm"><a href="#garanty">Гарантия</a></li>

                    <li><a href="#contacts">Контакты</a></li>
                    <!-- КОРОНАВИРУС-->
                    <li class="nav__item nav__alert">
                      <svg class="coronavirus-warning" enable-background="new 0 0 512 512" version="1.1"
                        viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                        style="width: 30px; padding-top:5px;">
                        <path
                          d="m256 0c-141.5 0-256 114.51-256 256 0 141.5 114.51 256 256 256 141.5 0 256-114.51 256-256 0-141.5-114.51-256-256-256zm0 472c-119.39 0-216-96.615-216-216 0-119.39 96.615-216 216-216 119.39 0 216 96.615 216 216 0 119.39-96.615 216-216 216z"
                          fill="red"></path>
                        <path
                          d="m256 128.88c-11.046 0-20 8.954-20 20v128.79c0 11.046 8.954 20 20 20s20-8.954 20-20v-128.79c0-11.046-8.954-20-20-20z"
                          fill="red"></path>
                        <circle cx="256" cy="349.16" r="27" fill="red"></circle>
                      </svg>
                      <div class="alert-popup" style="display: block;">
                        <div class="alert-popup__arrow"></div>
                        <div class="alert-popup__message">
                          <p><b>Уважаемые клиенты!</b></p>
                          <p>Мы работаем в обычном режиме.</p>
                          В качестве мер по борьбе с распространением <span style="color:red;">коронавируса</span> — мы
                          ежедневно проверяем наших выездных
                          мастеров и инженеров, а также выдаем им защитные маски.
                        </div>
                        <div class="alert-popup__button">закрыть</div>
                      </div>
                    </li>
                    <!-- /КОРОНАВИРУС-->
                  </ul>
                </nav>
              </div>
              <div class="block">
                <div class="phone text-right"><img src="./assets/phone.svg" alt=""
                    style="margin-top: -6px;margin-right:10px;"><a href="tel:<?= $phone_tel ?>"
                    style="font-weight: 800;color: #fe1493;"
                    class="roistat-phone-center-apple roistat-phone-center-apple-tel <?= $roistat_tel_tag ?> <?= $roistat_tel_tag ?>-tel">
                    <?= $phone_full ?></a>
                  <div class="phone text-right" style="color: #fff;"> При заказе с сайта скидка 20%</div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-7">
          <div class="content">
            <h1><span class="text_bang1">Восстановление данных в СПб</span><br></h1>
            <div class="desc"><span class="text_bang2">Полная конфиденциальность данных <br></span></div>
            <div class="desc"><span class="text_bang2">Бесплатные диагностика и выезд. <br></span></div>
            <div class="desc"><span class="text_bang2">Большой склад запчастей <br></span></div>
            <div class="desc"><span class="text_bang2">Гарантия до 3 лет. <br></span></div>
            <button class="callback1"><span class="shine"></span>Оставить заявку на ремонт
              <svg xmlns="http://www.w3.org/2000/svg" width="45" height="13" viewBox="-15 0 45 13">
                <path fill="#fff"
                  d="M23.5 0a.47.47 0 0 0-.35.15c-.2.19-.2.51 0 .7L28.29 6H.5a.5.5 0 0 0-.5.5c0 .28.22.5.5.5h27.79l-5.14 5.15c-.2.19-.2.51 0 .7.09.1.22.15.35.15.13 0 .26-.05.35-.15l6-6c.05-.04.09-.1.11-.16a.4.4 0 0 0 .04-.18v-.02a.4.4 0 0 0-.04-.18.36.36 0 0 0-.11-.16l-6-6A.47.47 0 0 0 23.5 0z" />
              </svg>
            </button>
          </div>
        </div>
        <div class="col-sm-5"><a href="tel:<?= $phone_tel ?>"
            class="roistat-phone-center-apple-tel <?= $roistat_tel_tag ?>-tel"><img src="./img/iphone-tmp5-min.png"
              alt="" class="img-responsive phonebig"></a>
        </div>
      </div>
      <div class="mouse text-center hidden-xs"><span class="scroll-btn"><a href="/#"><span
              class="mouser"><span></span></span></a></span>
        <div class="text" style="font-size: 18px;padding-top: 5px;">Узнать стоимость</div>
      </div>
    </div>
  </header>


  <section id="price" class="bg2">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2> Стоимость услуг</h2>
          <div class="btn-group1">
            <button data-device="laptop" class="active">Ноутбук</button>
            <button data-device="computer">ПК</button>
            <button data-device="phone">Телефон</button>
            <button data-device="hdd">HDD</button>
            <button data-device="ssd">SSD</button>
            <button data-device="flash">Флеш-накопитель</button>
            <button data-device="nas">RAID & NAS</button>
          </div>

          <div class="phone devices">
            <div data-model="4" class="models active">
              <? $model = '5/5c/5s' ?>
              <div class="block">
                <div class="row">
                  <div class="col-sm-4">
                    <ul class="text-right">
                      <li>Восстановление изображений - <span class="text-align-right">1 400 руб.</span></li>
                      <li>Восстановление медиа файлов- <span class="text-align-right">1 300 руб. </span></li>
                      <li>Восстановление текстовых файлов - <span class="text-align-right">2 000 руб. </span></li>
                      <li>Восстановление файлов баз данных - <span class="text-align-right">1 200 руб. </span></li>
                      <li>Полное форматирование носителя - <span class="text-align-right">1 500 руб.</span></li>
                    </ul>
                  </div>
                  <div class="col-sm-4"><img src="./assets/iphone12mini.jpg" alt=""
                      class="img-responsive main center-block wow fadeInDown animated"
                      style="visibility: visible; animation-name: fadeInDown;"></div>
                  <div class="col-sm-4">
                    <ul>
                      <li>Восстановление архивов - <span class="text-align-right">2 500 руб.</span></li>
                      <li>Перенос восстановленных данных на донора - <span class="text-align-right">1 500 руб.</span></li>
                    </ul>
                    <div class="line"></div>
                    <div class="zag">Вашей поломки нет в списке?</div>
                    <div class="txt"> Оставьте заявку для уточнения<br>точной стоимости и сроков по телефону.</div>
                    <button class="callback2 pricebtn"><span class="shine"></span>Оставить заявку
                      <svg class="pink_arrow" xmlns="http://www.w3.org/2000/svg" width="45" height="16"
                        viewBox="-15 -3 45 16">
                        <path fill="#fe1498"
                          d="M23.5 0a.5.5 0 0 0-.35.85L28.29 6H.5a.5.5 0 0 0 0 1h27.8l-5.15 5.15a.5.5 0 0 0 .7.7l6-6A.5.5 0 0 0 30 6.5a.52.52 0 0 0-.15-.35l-6-6A.5.5 0 0 0 23.5 0z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="laptop devices device_active">
            <div data-model="MacBook" class="models active">
              <div class="block">
                <div class="row">
                  <div class="col-sm-4">
                    <ul class="text-right">
                      <li>Восстановление изображений - <span class="text-align-right">1 400 руб.</span></li>
                      <li>Восстановление медиа файлов- <span class="text-align-right">1 300 руб. </span></li>
                      <li>Восстановление текстовых файлов - <span class="text-align-right">2 000 руб. </span></li>
                      <li>Восстановление файлов баз данных - <span class="text-align-right">1 200 руб. </span></li>
                      <li>Полное форматирование носителя - <span class="text-align-right">1 500 руб.</span></li>
                    </ul>
                  </div>
                  <div class="col-sm-4"><img src="./assets/macbook.png" alt=""
                      class="img-responsive main center-block wow fadeInDown animated"
                      style="visibility: visible; animation-name: fadeInDown;"></div>
                  <div class="col-sm-4">
                    <ul>
                      <li>Восстановление архивов - <span class="text-align-right">2 500 руб.</span></li>
                      <li>Перенос восстановленных данных на донора - <span class="text-align-right">1 500 руб.</span></li>
                    </ul>
                    <div class="line"></div>
                    <div class="zag">Вашей поломки нет в списке?</div>
                    <div class="txt"> Оставьте заявку для уточнения<br>точной стоимости и сроков по телефону.</div>
                    <button class="callback2 pricebtn"><span class="shine"></span>Оставить заявку
                      <svg class="pink_arrow" xmlns="http://www.w3.org/2000/svg" width="45" height="16"
                        viewBox="-15 -3 45 16">
                        <path fill="#fe1498"
                          d="M23.5 0a.5.5 0 0 0-.35.85L28.29 6H.5a.5.5 0 0 0 0 1h27.8l-5.15 5.15a.5.5 0 0 0 .7.7l6-6A.5.5 0 0 0 30 6.5a.52.52 0 0 0-.15-.35l-6-6A.5.5 0 0 0 23.5 0z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="computer devices">
            <div data-model="MacBook" class="models active">
              <div class="block">
                <div class="row">
                  <div class="col-sm-4">
                    <ul class="text-right">
                      <li>Восстановление изображений - <span class="text-align-right">1 400 руб.</span></li>
                      <li>Восстановление медиа файлов- <span class="text-align-right">1 300 руб. </span></li>
                      <li>Восстановление текстовых файлов - <span class="text-align-right">2 000 руб. </span></li>
                      <li>Восстановление файлов баз данных - <span class="text-align-right">1 200 руб. </span></li>
                      <li>Полное форматирование носителя - <span class="text-align-right">1 500 руб.</span></li>
                    </ul>
                  </div>
                  <div class="col-sm-4"><img src="./img/computer.png" alt=""
                      class="img-responsive main center-block wow fadeInDown animated"
                      style="visibility: visible; animation-name: fadeInDown;"></div>
                  <div class="col-sm-4">
                    <ul>
                      <li>Восстановление архивов - <span class="text-align-right">2 500 руб.</span></li>
                      <li>Перенос восстановленных данных на донора - <span class="text-align-right">1 500 руб.</span></li>
                    </ul>
                    <div class="line"></div>
                    <div class="zag">Вашей поломки нет в списке?</div>
                    <div class="txt"> Оставьте заявку для уточнения<br>точной стоимости и сроков по телефону.</div>
                    <button class="callback2 pricebtn"><span class="shine"></span>Оставить заявку
                      <svg class="pink_arrow" xmlns="http://www.w3.org/2000/svg" width="45" height="16"
                        viewBox="-15 -3 45 16">
                        <path fill="#fe1498"
                          d="M23.5 0a.5.5 0 0 0-.35.85L28.29 6H.5a.5.5 0 0 0 0 1h27.8l-5.15 5.15a.5.5 0 0 0 .7.7l6-6A.5.5 0 0 0 30 6.5a.52.52 0 0 0-.15-.35l-6-6A.5.5 0 0 0 23.5 0z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="hdd devices">
            <div data-model="ipad2" class="models active">
              <div class="block">
                <div class="row">
                  <div class="col-sm-4">
                    <ul class="text-right">
                      <li>Восстановление изображений - <span class="text-align-right">1 500 руб.</span></li>
                      <li>Логические рарушения данных - <span class="text-align-right">1 400 руб.</span></li>
                      <li>Повреждения модулей служебной зоны - <span class="text-align-right">1 300 руб. </span></li>
                      <li>Неисправна плата электроники - <span class="text-align-right">2 000 руб. </span></li>
                      <li>Bad-блоки, вычитывание в несколько проходов - <span class="text-align-right">1 200 руб. </span></li>
                    </ul>
                  </div>
                  <div class="col-sm-4"><img src="./img/hdd.png" alt=""
                      class="img-responsive main center-block wow fadeInDown animated"
                      style="visibility: visible; animation-name: fadeInDown;"></div>
                  <div class="col-sm-4">
                    <ul>
                      <li>Восстановление архивов - <span class="text-align-right">2 500 руб.</span></li>
                      <li>Восстановление медиа-файлов - <span class="text-align-right">2 500 руб.</span></li>
                      <li>Перенос восстановленных данных на донора - <span class="text-align-right">1 500 руб.</span></li>
                    </ul>
                    <div class="line"></div>
                    <div class="zag">Вашей поломки нет в списке?</div>
                    <div class="txt"> Оставьте заявку для уточнения<br>точной стоимости и сроков по телефону.</div>
                    <button class="callback2 pricebtn"><span class="shine"></span>Оставить заявку
                      <svg class="pink_arrow" xmlns="http://www.w3.org/2000/svg" width="45" height="16"
                        viewBox="-15 -3 45 16">
                        <path fill="#fe1498"
                          d="M23.5 0a.5.5 0 0 0-.35.85L28.29 6H.5a.5.5 0 0 0 0 1h27.8l-5.15 5.15a.5.5 0 0 0 .7.7l6-6A.5.5 0 0 0 30 6.5a.52.52 0 0 0-.15-.35l-6-6A.5.5 0 0 0 23.5 0z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="ssd devices">
            <div data-model="watch1" class="models active">
              <div class="block">
                <div class="row">
                  <div class="col-sm-4">
                    <ul class="text-right">
                      <li>Восстановление изображений - <span class="text-align-right">1 400 руб.</span></li>
                      <li>Восстановление медиа файлов- <span class="text-align-right">1 300 руб. </span></li>
                      <li>Восстановление текстовых файлов - <span class="text-align-right">2 000 руб. </span></li>
                      <li>Восстановление файлов баз данных - <span class="text-align-right">1 200 руб. </span></li>
                      <li>Логические проблемы на исправных носителях - <span class="text-align-right">1 500 руб.</span></li>
                    </ul>
                  </div>
                  <div class="col-sm-4"><img src="./img/ssd.png" alt=""
                      class="img-responsive main center-block wow fadeInDown animated"
                      style="visibility: visible; animation-name: fadeInDown;"></div>
                  <div class="col-sm-4">
                    <ul>
                      <li>Восстановление архивов - <span class="text-align-right">2 500 руб.</span></li>
                      <li>Перенос восстановленных данных на донора - <span class="text-align-right">1 500 руб.</span></li>
                    </ul>
                    <div class="line"></div>
                    <div class="zag">Вашей поломки нет в списке?</div>
                    <div class="txt"> Оставьте заявку для уточнения<br>точной стоимости и сроков по телефону.</div>
                    <button class="callback2 pricebtn"><span class="shine"></span>Оставить заявку
                      <svg class="pink_arrow" xmlns="http://www.w3.org/2000/svg" width="45" height="16"
                        viewBox="-15 -3 45 16">
                        <path fill="#fe1498"
                          d="M23.5 0a.5.5 0 0 0-.35.85L28.29 6H.5a.5.5 0 0 0 0 1h27.8l-5.15 5.15a.5.5 0 0 0 .7.7l6-6A.5.5 0 0 0 30 6.5a.52.52 0 0 0-.15-.35l-6-6A.5.5 0 0 0 23.5 0z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="flash devices">
            <div data-model="watch1" class="models active">
              <div class="block">
                <div class="row">
                  <div class="col-sm-4">
                    <ul class="text-right">
                      <li>Диагностика - <span class="text-align-right">1 400 руб.</span></li>
                      <li>Копирование восстановленных данных- <span class="text-align-right">1 300 руб. </span></li>
                      <li>Логические проблемы на исправных носителях - <span class="text-align-right">2 000 руб. </span></li>
                      <li>Физические неисправности устройств (до 16Гб) - <span class="text-align-right">1 200 руб. </span></li>
                    </ul>
                  </div>
                  <div class="col-sm-4"><img src="./img/flash.png" alt=""
                      class="img-responsive main center-block wow fadeInDown animated"
                      style="visibility: visible; animation-name: fadeInDown;"></div>
                  <div class="col-sm-4">
                    <ul>
                      <li>ПФизические неисправности устройств (свыше 16Гб) - <span class="text-align-right">1 500 руб.</span></li>

                    </ul>
                    <div class="line"></div>
                    <div class="zag">Вашей поломки нет в списке?</div>
                    <div class="txt"> Оставьте заявку для уточнения<br>точной стоимости и сроков по телефону.</div>
                    <button class="callback2 pricebtn"><span class="shine"></span>Оставить заявку
                      <svg class="pink_arrow" xmlns="http://www.w3.org/2000/svg" width="45" height="16"
                        viewBox="-15 -3 45 16">
                        <path fill="#fe1498"
                          d="M23.5 0a.5.5 0 0 0-.35.85L28.29 6H.5a.5.5 0 0 0 0 1h27.8l-5.15 5.15a.5.5 0 0 0 .7.7l6-6A.5.5 0 0 0 30 6.5a.52.52 0 0 0-.15-.35l-6-6A.5.5 0 0 0 23.5 0z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="nas devices">
            <div data-model="watch1" class="models active">
              <div class="block">
                <div class="row">
                  <div class="col-sm-4">
                    <ul class="text-right">
                      <li>Восстановление RAID-массива - <span class="text-align-right">1 300 руб. </span></li>
                      <li>Копирование восстановленных данных - <span class="text-align-right">2 000 руб. </span></li>
                      <li>Восстановление данных массива из 2 дисков: RAID 0, RAID 1 (за массив) - <span class="text-align-right">1 200 руб. </span></li>
                      <li>Сбор RAID (за диск) - <span class="text-align-right">1 400 руб.</span></li>
                    </ul>
                  </div>
                  <div class="col-sm-4"><img src="./img/nas.jpg" alt=""
                      class="img-responsive main center-block wow fadeInDown animated"
                      style="visibility: visible; animation-name: fadeInDown;"></div>
                  <div class="col-sm-4">
                    <ul>
                      <li>Восстановление данных массива из 3 и более дисков (за каждый диск массива) - <span class="text-align-right">1 500 руб.</span></li>

                    </ul>
                    <div class="line"></div>
                    <div class="zag">Вашей поломки нет в списке?</div>
                    <div class="txt"> Оставьте заявку для уточнения<br>точной стоимости и сроков по телефону.</div>
                    <button class="callback2 pricebtn"><span class="shine"></span>Оставить заявку
                      <svg class="pink_arrow" xmlns="http://www.w3.org/2000/svg" width="45" height="16"
                        viewBox="-15 -3 45 16">
                        <path fill="#fe1498"
                          d="M23.5 0a.5.5 0 0 0-.35.85L28.29 6H.5a.5.5 0 0 0 0 1h27.8l-5.15 5.15a.5.5 0 0 0 .7.7l6-6A.5.5 0 0 0 30 6.5a.52.52 0 0 0-.15-.35l-6-6A.5.5 0 0 0 23.5 0z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>


  <section id="about" class="bg4">
    <div class="container">
      <div class="row">
        <div class="col-sm-15">
          <div class="block">
            <img data-wow-delay="0s" src="./assets/compass.png" alt=""
              class="mobile_ib svg-pic img-responsive center-block ics wow fadeInDown animated"
              style="visibility: visible; animation-delay: 0s; animation-name: fadeInDown;">
            <!--
					-->
            <div class="mobile_ib">
              <div class="name">Выезд в любую <br>точку города</div>
              <img src="./assets/dots.png" alt="" class="center-block img-responsive dots">
              <div class="txt">Проведем диагностику там, <br>где удобно Вам.</div>
            </div>
          </div>
        </div>
        <div class="col-sm-15">
          <div class="block">
            <img data-wow-delay="0.2s" src="./assets/guarantee.png" alt=""
              class="mobile_ib svg-pic img-responsive center-block ics wow fadeInDown animated"
              style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">
            <!--
					-->
            <div class="mobile_ib">
              <div class="name">Гарантия <br>3 года</div>
              <img src="./assets/dots.png" alt="" class="center-block img-responsive dots">
              <div class="txt">Гарантия до 3 лет на все комплектующие.</div>
            </div>
          </div>
        </div>
        <div class="col-sm-15">
          <div class="block">
            <img data-wow-delay="0.4s" src="./img/privacy.svg" alt=""
              class="mobile_ib svg-pic img-responsive center-block ics wow fadeInDown animated"
              style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">
            <!--
					-->
            <div class="mobile_ib">
              <div class="name">Конфиденциальность <br>данных</div>
              <img src="./assets/dots.png" alt="" class="center-block img-responsive dots">
              <div class="txt">Гарантируем полную <br>конфиденциальность ваших<br> данных.</div>
            </div>
          </div>
        </div>
        <div class="col-sm-15">
          <div class="block"><img data-wow-delay="0.6s" src="./assets/storage.png" alt=""
              class="mobile_ib svg-pic img-responsive center-block ics wow fadeInDown animated"
              style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInDown;">
            <!--
				-->
            <div class="mobile_ib">
              <div class="name">Собственный <br>склад запчастей</div>
              <img src="./assets/dots.png" alt="" class="center-block img-responsive dots">
              <div class="txt">В наличии комплектующие разного качества</div>
            </div>
          </div>
        </div>
        <div class="col-sm-15">
          <div class="block">
            <img data-wow-delay="0.8s" src="./assets/together.png" alt=""
              class="mobile_ib svg-pic img-responsive center-block ics wow fadeInDown animated"
              style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInDown;">
            <!--
				-->
            <div class="mobile_ib">
              <div class="name">Диагностику <br>делаем при клиенте</div>
              <img src="./assets/dots.png" alt="" class="center-block img-responsive dots">
              <div class="txt">Диагностика носителя всегда производится при клиенте:</div>
              вы можете наблюдать за процессом.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="garanty" class="bg5">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h2><span style="color: #000;">Ваши данные будут в надежных руках.</span></h2>
          <div class="desc" style="color: #000;">Договор, опись устройства, гарантия.</div>
          <div style="padding: 35px 0px 35px 0px;">
            <img data-wow-delay="0.4s" src="./img/dogovor-iphone.png" alt=""
              class="svg-pic img-responsive center-block ics wow fadeInDown animated animated animated dogovor"
              style="visibility: visible;animation-delay: 0.4s;animation-name: fadeInDown;">
          </div>
          <div class="text">Мастера и инженеры с опытом работы от 3 до 7 лет, прошедшие специализированные курсы от
            производителей. <br>Профессиональное оборудование. Мы
            знаем, как справиться с поломкой любой сложности.<br> После проведения диагностики носителя нашим
            специалистом, оформляем бессрочную гарантию на все
            комплектующие.
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="courier" class="bg6">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="gift visible-xs">
            <img src="./assets/gift.svg" alt="" class="img-responsive center-block">
            <div class="text">Хотите скидку?</div>
            <button class="callback5"><span>Получить</span></button>
          </div>
          <h2>Восстановление данных на выезде.</h2>
          <div class="desc">Вы сами назначаете время и место ремонта.</div>
          <div class="plach">
            <h3>Восстановление данных на выезде.</h3>
            <div class="text">Квартира? Отель? Офис? Ресторан?<br>Нет проблем!<br>Вам не нужно терять время на дорогу в
              сервисный центр,<br>Мы сами подъедем в удобное для
              Вас место и время!<br> При заказе с сайта <span> скидка 20%</span></div>
            <button class="callback4">Оставить заявку
              <svg xmlns="http://www.w3.org/2000/svg" width="45" height="13" viewBox="-15 0 45 13">
                <path fill="#fff"
                  d="M23.5 0a.47.47 0 0 0-.35.15c-.2.19-.2.51 0 .7L28.29 6H.5a.5.5 0 0 0-.5.5c0 .28.22.5.5.5h27.79l-5.14 5.15c-.2.19-.2.51 0 .7.09.1.22.15.35.15.13 0 .26-.05.35-.15l6-6c.05-.04.09-.1.11-.16a.4.4 0 0 0 .04-.18v-.02a.4.4 0 0 0-.04-.18.36.36 0 0 0-.11-.16l-6-6A.47.47 0 0 0 23.5 0z" />
              </svg>
            </button>
            <div class="dispinline">

            </div>
          </div>
        </div>
        <div class="col-sm-4 hidden-xs">
          <div class="gift">
            <img src="./assets/gift.svg" alt="" class="img-responsive center-block">
            <div class="text">Получить скидку</div>
            <button class="callback5"><span>Получить</span></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="gift" class="bg7">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="media">
            <div class="media-left">
              <img src="./assets/compasss.png" alt="">
            </div>
            <div class="media-body">
              <div class="text">Приедем и проведем диагностику </br> там, где вы скажете.</div>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <img src="./assets/business.png" alt=""></div>
            <div class="media-body">
              <div class="text">Выгодные предложения для <br>корпоративного обслуживания.</div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="media ml">
            <div class="media-left">
              <img src="./assets/discount.png" alt=""></div>
            <div class="media-body">
              <div class="text">35% скидка на ремонт, при <br>заказе 2х услуг и более.</div>
            </div>
          </div>
          <div class="media ml">
            <div class="media-left">
              <img src="./assets/support.png" alt=""></div>
            <div class="media-body">
              <div class="text">Консультации и помощь,<br>независимо от заказа ремонта.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer id="contacts">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <h2>Восстановление данных недорого.
            <hr>
          </h2>
          <div class="desc">Наша компания всегда идет навстречу своим клиентам и предлагает самые оптимальные цены по
            замене и ремонту основных деталей. Восстановление данных дешево
            и качественно можно получить только в нашем сервисном центре.
            <br>
            <br>
            Ежедневно: с 8:00 до 23:00.
            <br>
            Телефон: <span> <a href="tel:<?= $phone_tel ?>" style="color:#fe1498;"
                class="roistat-phone-center-apple roistat-phone-center-apple-tel <?= $roistat_tel_tag ?> <?= $roistat_tel_tag ?>-tel"><?= $phone_full ?></a>.</span>
          </div>
          <button class="callback6"><span class="shine"></span>Оставить заявку
            <svg class="pink_arrow" xmlns="http://www.w3.org/2000/svg" width="45" height="16" viewBox="-15 -3 45 16">
              <path fill="#fe1498"
                d="M23.5 0a.5.5 0 0 0-.35.85L28.29 6H.5a.5.5 0 0 0 0 1h27.8l-5.15 5.15a.5.5 0 0 0 .7.7l6-6A.5.5 0 0 0 30 6.5a.52.52 0 0 0-.15-.35l-6-6A.5.5 0 0 0 23.5 0z" />
            </svg>
          </button>
        </div>
        <div class="col-sm-7">

          <div class="map">
            <img src="./assets/plachfoot.png" alt="" class="img-responsive">
            <script type="text/javascript" charset="utf-8" async
              src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A81d02c1a3f837c5f939773d110e91cad00c22cd9c76a0c6d098046a8a7114efb&amp;width=594&amp;height=472&amp;lang=ru_RU&amp;scroll=true">
            </script>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="flex">
            <div class="block">
              <p><b>Центр Apple</b>. Все права защищены.</p>
            </div>
            <!--<div class="block"><p><a href="#" target="_blank">
                        <img src="./assets/insta.png" alt="" class="insta"></a><a href="#" target="_blank"><img src="./assets/vk.png" alt="" class="vk"></a></p></div>-->
            <div class="block text-right">
              <p><a href="/politika.html" target="_blank" style="color:#fe1498;">Политика конфиденциальности.</a></p>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="block">
        <p class="policy">
          Apple, Mac, Mac OS, Macbook, Macbook Pro, iPhone, iPad, iPad Air и их логотипы являются зарегистрированными
          товарными знаками Apple Inc. в США и других странах.
          Информация опубликованная на сайте не является публичной офертой, определяемой положениями Статьи 437 ГК РФ.
          Цены указаны за услугу, запчасти в эту стоимость не
          входят. *</p>
      </div>

      <p></p>
    </div>

  </footer>


  <div class="popups">
    <div class="popup1 popup_window">
      <div class="box-modal_close arcticmodal-close close"><span>Закрыть</span></div>
      <div class="row">
        <div class="col-xs-12">
          <div class="form">
            <div class="zag">Оставить заявку на бесплатную диагностику поломки <span></span></div>
            <p class="desc main">Оставьте заявку для уточнения точной стоимости и сроков по телефону.</p>
            <form id="frm2" method="post" action="/mail.php" data-goal="diagnost 33218127" class="contactform1">
              <div class="block">
                <label for="#name">Ваше имя:</label>
                <input id="name" type="text" name="user_name" placeholder="Ваше имя: "
                  class="form-control validate[required]">
              </div>
              <div class="block">
                <label for="phone">Ваш телефон:</label>
                <input id="phone" type="text" name="user_phone" placeholder="+7 (___) ___-__-__"
                  class="form-control phone validate[required]">
              </div>
              <input name="action" value="Оставить заявку" type="hidden">
              <button onclick="ym(51242635, 'reachGoal', 'make_order'); return true;"><span
                  class="shine"></span>Оставить заявку
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="13" viewBox="-15 0 45 13">
                  <path fill="#fff"
                    d="M23.5 0a.47.47 0 0 0-.35.15c-.2.19-.2.51 0 .7L28.29 6H.5a.5.5 0 0 0-.5.5c0 .28.22.5.5.5h27.79l-5.14 5.15c-.2.19-.2.51 0 .7.09.1.22.15.35.15.13 0 .26-.05.35-.15l6-6c.05-.04.09-.1.11-.16a.4.4 0 0 0 .04-.18v-.02a.4.4 0 0 0-.04-.18.36.36 0 0 0-.11-.16l-6-6A.47.47 0 0 0 23.5 0z" />
                </svg>
              </button>
              <div id="confidential" class="minconf">Нажимая на кнопку «<span class="textbtn">Оставить заявку</span>», я
                даю <a href="/politika.html" target="_blank">согласие
                  на обработку персональных данных.</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="popup2 popup_window">
      <div class="box-modal_close arcticmodal-close close"><span>Закрыть</span></div>
      <div class="row">
        <div class="col-xs-12">
          <div class="form">
            <div class="zag">При заказе с сайта <span>скидка 20%</span>
            </div>
            <p class="desc main">Введите свои данные ниже, и наш менеджер перезвонит Вам для уточнения деталей.</p>
            <form id="frm2" method="post" action="/mail.php" data-goal="uznat_stoimost 33218130" class="contactform1">
              <div class="block">
                <label for="#name">Ваше имя:</label>
                <input id="name" type="text" name="user_name" placeholder="Ваше имя: "
                  class="form-control validate[required]">
              </div>
              <div class="block">
                <label for="phone">Ваш телефон:</label>
                <input id="phone" type="text" name="user_phone" placeholder="+7 (___) ___-__-__"
                  class="form-control phone validate[required]"></div>
              <input name="action" value="Оставить заявку" type="hidden">
              <button onclick="ym(51242635, 'reachGoal', 'make_order'); return true;"><span
                  class="shine"></span>Оставить заявку
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="13" viewBox="-15 0 45 13">
                  <path fill="#fff"
                    d="M23.5 0a.47.47 0 0 0-.35.15c-.2.19-.2.51 0 .7L28.29 6H.5a.5.5 0 0 0-.5.5c0 .28.22.5.5.5h27.79l-5.14 5.15c-.2.19-.2.51 0 .7.09.1.22.15.35.15.13 0 .26-.05.35-.15l6-6c.05-.04.09-.1.11-.16a.4.4 0 0 0 .04-.18v-.02a.4.4 0 0 0-.04-.18.36.36 0 0 0-.11-.16l-6-6A.47.47 0 0 0 23.5 0z" />
                </svg>
              </button>
              <div id="confidential" class="minconf">Нажимая на кнопку «<span class="textbtn">Оставить заявку</span>», я
                даю <a href="/politika.html" target="_blank">согласие
                  на обработку персональных данных.</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="popup3 popup_window">
      <div class="box-modal_close arcticmodal-close close"><span>Закрыть</span></div>
      <div class="row">
        <div class="col-xs-12">
          <div class="form">
            <div class="zag">Оставить заявку на заказ лицензионных программ со скидкой!<span></span></div>
            <p class="desc main">Введите свои данные ниже, и наш менеджер перезвонит Вам для уточнения деталей.</p>
            <form id="frm2" method="post" action="/mail.php" data-goal="poluchit_skidku 33218133" class="contactform1">
              <div class="block">
                <label for="#name">Ваше имя:</label>
                <input id="name" type="text" name="user_name" placeholder="Ваше имя: "
                  class="form-control validate[required]"></div>
              <div class="block">
                <label for="phone">Ваш телефон:</label>
                <input id="phone" type="text" name="user_phone" placeholder="+7 (___) ___-__-__"
                  class="form-control phone validate[required]"></div>
              <input name="action" value="Оставить заявку" type="hidden">
              <button onclick="ym(51242635, 'reachGoal', 'make_order'); return true;"><span
                  class="shine"></span>Оставить заявку
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="13" viewBox="-15 0 45 13">
                  <path fill="#fff"
                    d="M23.5 0a.47.47 0 0 0-.35.15c-.2.19-.2.51 0 .7L28.29 6H.5a.5.5 0 0 0-.5.5c0 .28.22.5.5.5h27.79l-5.14 5.15c-.2.19-.2.51 0 .7.09.1.22.15.35.15.13 0 .26-.05.35-.15l6-6c.05-.04.09-.1.11-.16a.4.4 0 0 0 .04-.18v-.02a.4.4 0 0 0-.04-.18.36.36 0 0 0-.11-.16l-6-6A.47.47 0 0 0 23.5 0z" />
                </svg>
              </button>
              <div id="confidential" class="minconf">Нажимая на кнопку «<span class="textbtn">Оставить заявку</span>», я
                даю <a href="/politika.html" target="_blank">согласие
                  на обработку персональных данных.</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="popup4 popup_window">
      <div class="box-modal_close arcticmodal-close close"><span>Закрыть</span></div>
      <div class="row">
        <div class="col-xs-12">
          <div class="form">
            <div class="zag">Восстановление данных на выезде.<span></span></div>
            <p class="desc main">Введите свои данные ниже, и наш менеджер перезвонит Вам для уточнения деталей.</p>
            <form id="frm2" method="post" action="/mail.php" data-goal="uznat_skidki_podarki 33218136"
              class="contactform1">
              <div class="block">
                <label for="#name">Ваше имя:</label>
                <input id="name" type="text" name="user_name" placeholder="Ваше имя: "
                  class="form-control validate[required]"></div>
              <div class="block">
                <label for="phone">Ваш телефон:</label>
                <input id="phone" type="text" name="user_phone" placeholder="+7 (___) ___-__-__"
                  class="form-control phone validate[required]"></div>
              <input name="action" value="Оставить заявку" type="hidden">
              <button onclick="ym(51242635, 'reachGoal', 'make_order'); return true;"><span
                  class="shine"></span>Оставить заявку
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="13" viewBox="-15 0 45 13">
                  <path fill="#fff"
                    d="M23.5 0a.47.47 0 0 0-.35.15c-.2.19-.2.51 0 .7L28.29 6H.5a.5.5 0 0 0-.5.5c0 .28.22.5.5.5h27.79l-5.14 5.15c-.2.19-.2.51 0 .7.09.1.22.15.35.15.13 0 .26-.05.35-.15l6-6c.05-.04.09-.1.11-.16a.4.4 0 0 0 .04-.18v-.02a.4.4 0 0 0-.04-.18.36.36 0 0 0-.11-.16l-6-6A.47.47 0 0 0 23.5 0z" />
                </svg>
              </button>
              <div id="confidential" class="minconf">Нажимая на кнопку «<span class="textbtn">Оставить заявку</span>», я
                даю <a href="/politika.html" target="_blank">согласие
                  на обработку персональных данных.</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="popup5 popup_window">
      <div class="box-modal_close arcticmodal-close close"><span>Закрыть</span></div>
      <div class="row">
        <div class="col-xs-12">
          <div class="form">
            <div class="zag">Подарки.<span></span></div>
            <p class="desc main">Оставьте заявку, и мы свяжемся с Вами и подробно расскажем о наших текущих акциях и
              подарках.</p>
            <form id="frm2" method="post" action="/mail.php" class="contactform1">
              <div class="block">
                <label for="">Ваше имя:</label>
                <input id="" type="text" name="user_name" placeholder="Ваше имя: "
                  class="form-control validate[required]"></div>
              <div class="block">
                <label for="phone">Ваш телефон:</label>
                <input id="" type="text" name="user_phone" placeholder="+7 (___) ___-__-__"
                  class="form-control phone validate[required]"></div>
              <input name="action" value="Оставить заявку" type="hidden">
              <button type="submit" onclick="ym(51242635, 'reachGoal', 'make_order'); return true;">
                <span class="shine"></span>Оставить заявку
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="13" viewBox="-15 0 45 13">
                  <path fill="#fff"
                    d="M23.5 0a.47.47 0 0 0-.35.15c-.2.19-.2.51 0 .7L28.29 6H.5a.5.5 0 0 0-.5.5c0 .28.22.5.5.5h27.79l-5.14 5.15c-.2.19-.2.51 0 .7.09.1.22.15.35.15.13 0 .26-.05.35-.15l6-6c.05-.04.09-.1.11-.16a.4.4 0 0 0 .04-.18v-.02a.4.4 0 0 0-.04-.18.36.36 0 0 0-.11-.16l-6-6A.47.47 0 0 0 23.5 0z" />
                </svg>
              </button>
              <div id="confidential" class="minconf">Нажимая на кнопку «<span class="textbtn">
                  Оставить заявку</span>», я даю <a href="/politika.html" target="_blank">согласие на обработку
                  персональных данных.</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="popup6 popup_window">
      <div class="box-modal_close arcticmodal-close close"><span>Закрыть</span></div>
      <div class="row">
        <div class="col-xs-12">
          <div class="form">
            <div class="zag">Не хотите ждать в очереди?<br>Запишитесь на ремонт заранее!<span></span></div>
            <p class="desc main">Введите свои данные ниже, и наш менеджер перезвонит Вам для уточнения деталей.</p>
            <form id="frm2" method="post" action="/mail.php" class="contactform1">
              <div class="block">
                <label for="#name">Ваше имя:</label>
                <input id="name" type="text" name="user_name" placeholder="Ваше имя: "
                  class="form-control validate[required]"></div>
              <div class="block">
                <label for="phone">Ваш телефон:</label>
                <input id="phone" type="text" name="user_phone" placeholder="+7 (___) ___-__-__"
                  class="form-control phone validate[required]"></div>
              <input name="action" value="Оставить заявку" type="hidden">
              <button onclick="ym(51242635, 'reachGoal', 'make_order'); return true;"><span
                  class="shine"></span>Оставить заявку
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="13" viewBox="-15 0 45 13">
                  <path fill="#fff"
                    d="M23.5 0a.47.47 0 0 0-.35.15c-.2.19-.2.51 0 .7L28.29 6H.5a.5.5 0 0 0-.5.5c0 .28.22.5.5.5h27.79l-5.14 5.15c-.2.19-.2.51 0 .7.09.1.22.15.35.15.13 0 .26-.05.35-.15l6-6c.05-.04.09-.1.11-.16a.4.4 0 0 0 .04-.18v-.02a.4.4 0 0 0-.04-.18.36.36 0 0 0-.11-.16l-6-6A.47.47 0 0 0 23.5 0z" />
                </svg>
              </button>
              <div id="confidential" class="minconf">Нажимая на кнопку «<span class="textbtn">Оставить заявку</span>», я
                даю <a href="/politika.html" target="_blank">согласие
                  на обработку персональных данных.</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="thanks">
      <div class="box-modal_close arcticmodal-close close"><span>Закрыть</span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="zag">Спасибо!<br>Заявка отправлена, ожидайте звонка.</div>
        </div>
      </div>
    </div>
  </div>
  <section class="bottom-nav ">
    <nav class="navbar navbarrr navbar-fixed-bottom navbar-light visible-xs" style="background-color: #fe1498;">
      <div class="container">
        <div class="row">
          <div class="col-xs12">
            <div class=""><a href="tel:<?= $phone_tel ?>"
                class="callfooter roistat-phone-center-apple-tel <?= $roistat_tel_tag ?>-tel">
                <p class="ringer">позвонить</p>
              </a>
            </div>
          </div>
        </div>
      </div>

    </nav>
  </section>


  <!-- Подключаем jQuery -->

  <!-- Подключаем Bootstrap JS -->
  <!--<script src="js/bootstrap.min.js"></script>-->
  <script src="./assets/main.js"></script>
  <script src="./assets/script.js"></script>


  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
      m[i] = m[i] || function () {
        (m[i].a = m[i].a || []).push(arguments)
      };
      m[i].l = 1 * new Date();
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k,
        a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(51242635, "init", {
      id: 51242635,
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true
    });
  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/51242635" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->

  <!-- ПОПАП КОРОНАВИРУС -->
  <script>
    $('.alert-popup__button').click(function () {
      $(".alert-popup").fadeToggle(300)
    });
    $('.coronavirus-warning').click(function () {
      $(".alert-popup").fadeToggle(300)
    });
  </script>
  <!-- /ПОПАП КОРОНАВИРУС -->