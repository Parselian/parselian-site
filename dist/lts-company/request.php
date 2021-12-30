<section class="request">
  <div class="container request-container">
    <h2 class="section-title request-title">Запрос на услуги</h2>
    <!-- /.request-title -->

    <form action="mailer/smart.php" method="POST" class="section-form request-form">
      <div class=" section-form__inputs request-form__inputs">
        <input type="text" name="user_location" placeholder="Откуда" required>
        <input type="text" name="user_destination" placeholder="Куда" required>
        <input type="text" name="user_name" placeholder="Как вас зовут?" required>
        <input type="text"  class="section-popup-input__phone" name="user_phone" placeholder="Номер телефона" required>
      </div>

      <button class="button section-form__button request-form__button" onclick="ym(52696405, 'reachGoal', 'send-request'); return true;">Получить расчет</button>
      <!-- /.button -->

      <div class="section-form__subtext request-form__subtext">
        Нажав кнопку «Получить расчет», я даю согласие на обработку моих персональных данных.
      </div>
      <!-- /.request-form__subtext -->
    </form>
    <!-- /.section-form request-form -->
  </div>
  <!-- /.container request-container -->
</section>