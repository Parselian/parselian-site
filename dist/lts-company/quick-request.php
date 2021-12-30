<section class="section-popup quick-request">
  <div class="section-popup__wrap">
    <div class="section-popup-block quick-request-block">
      <h2 class="section-title section-popup-block__title quick-request-block__title">Быстрая заявка</h2>
      <!-- /.request-title -->

      <div class="section-popup-block__close" onclick="ym(52696405, 'reachGoal', 'close-popup'); return true;">&times;</div>
      <!-- /.request-close -->

      <form action="mailer/smart.php" method="POST" class="section-form section-popup-form quick-request-form">
        <div class="section-form__inputs section-popup-form__inputs quick-request-form__inputs">
          <input type="text" name="user_location" placeholder="Откуда" required>
          <input type="text" name="user_destination" placeholder="Куда" required>
          <input type="text" name="user_name" placeholder="Как вас зовут?" required>
          <input type="text" class="section-popup-input__phone"  name="user_phone" placeholder="Номер телефона" required>
        </div>

        <button class="button section-form__button section-popup-form__button quick-request-form__button" onclick="ym(52696405, 'reachGoal', 'send-request'); return true;">Заказать звонок</button>
        <!-- /.button -->

        <div class="section-form__subtext section-popup-form__subtext quick-request-form__subtext">
          Нажав кнопку «Заказать звонок», я даю согласие на обработку моих персональных данных.
        </div>
        <!-- /.request-form__subtext -->
      </form>
      <!-- /.section-form request-form -->
    </div>
    <!-- /.section-popup-block quick-request-block -->
  </div>
  <!-- /.container request-container -->
</section>