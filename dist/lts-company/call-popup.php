<section class="section-popup call-popup">
  <div class="section-popup__wrap call-popup__wrap">
    <div class="section-popup-block call-popup">
      <h2 class="section-title section-popup-block__title call-popup__title">Заказать звонок</h2>

      <div class="section-popup-block__close call-popup-block__close" onclick="ym(52696405, 'reachGoal', 'close-popup'); return true;">&times;</div>
      <!-- /.request-close -->

      <form action="mailer/smart.php" method="POST" class="section-form section-popup-form call-popup-form">
        <div class="section-form__inputs section-popup-form__inputs call-popup__inputs">
          <input type="text" name="user_name" placeholder="Как вас зовут?" required>
          <input type="text" class="section-popup-input__phone" name="user_phone" placeholder="Номер телефона" required>
        </div>

        <button class="button section-form__button section-popup-form__button call-popup__button" onclick="ym(52696405, 'reachGoal', 'send-request'); return true;">Заказать звонок</button>
        <!-- /.button -->

        <div class="section-form__subtext section-popup-form__subtext call-popup__subtext">
          <span>Нажав кнопку «Заказать звонок»,</span> я даю согласие на обработку моих персональных данных.
        </div>
        <!-- /.request-form__subtext -->
      </form>
      <!-- /.section-form request-form -->
    </div>
    <!-- /.call-popup-block -->
  </div>
  <!-- /.call-popup__wrap -->
</section>