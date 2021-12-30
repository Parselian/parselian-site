<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>LTS company</title>
</head>

<body>
  <?php 
    include('header.php');
  ?>
  <!-- /.header.php -->

  <section class="our-location">
    <h2 class="section-title our-location__title">Контакты</h2>

    <div class="container our-location__wrap">
      <div class="our-location__information">
        <div class="our-location__information_address">
          <div class="our-location__information_titles our-location__information_address_title">Наш адрес:</div>
          <!-- /.our-location__information_address_title -->

          <div class="our-location__information_texts our-location__information_address_text">
            Москва, пер.Милютинский 4
          </div>
          <!-- /.our-location__information_address_text -->
        </div>
        <!-- /.our-location__information_address -->

        <div class="our-location__information_phone">
          <div class="our-location__information_titles our-location__information_phone_title">Номер телефона:</div>
          <!-- /.our-location__information_phone_title -->

          <div class="our-location__information_texts our-location__information_phone_text">
            <a href="tel:+79876552525">7 (987) 655 25 25</a>
          </div>
          <!-- /.our-location__information_phone_text -->
        </div>
        <!-- /.our-location__information_phone -->

        <div class="our-location__information_email">
          <div class="our-location__information_titles our-location__information_email_title">E-mail:</div>
          <!-- /.our-location__information_email_title -->

          <div class="our-location__information_texts our-location__information_email_text">
            <a href="mailto:lts@gmail.com">lts@gmail.com</a>
          </div>
          <!-- /.our-location__information_email_text -->
        </div>
        <!-- /.our-location__information_email -->

        <div class="our-location__information_socials">
          <div class="our-location__information_titles our-location__information_socials_title">Мы в соц.сетях:</div>
          <!-- /.our-location__information_socials_title -->

          <div class="our-location__information_socials_items">
            <a class="social-icon" href="#"><i class="fab fa-vk"></i></a>
            <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="social-icon" href="#"><i class="fab fa-instagram"></i></a>
          </div>
          <!-- /.our-location__information_socials_text -->
        </div>
        <!-- /.our-location__information_socials -->
      </div>
      <!-- /.our-location__information -->

      <div id="map" class="our-location__map"></div>
    </div>
  </section>

  <?php 
    include('request.php');
  ?>
  <!-- /.request.php -->

  <?php 
    include('footer.php');
  ?>

  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  <script src="js/jQueryMaskedInput.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/maps.js"></script>
</body>
</html>