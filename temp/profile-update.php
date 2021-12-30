<? require_once(__DIR__ . '/modules/header.php') ?>

    <main class="container">
        <h1 class="inner-page__title">
            Обновление учетной записи
        </h1>

        <div class="signup">
            <form action="#" method="POST" class="signup__col signup__form">
                <div class="signup__form-row">
                    <div class="form__input-wrap signup__form-input-wrap">
                        <label for="user_name" class="form__label signup__form-input-label">Имя <span
                                class="text_alert">*</span></label>
                        <input id="user_name" type="text" class="form__input signup__form-input" placeholder="Ваше имя"
                               required>
                    </div>
                    <div class="form__input-wrap signup__form-input-wrap">
                        <label for="user_name" class="form__label signup__form-input-label">Фамилия <span
                                class="text_alert">*</span></label>
                        <input id="user_name" type="text" class="form__input signup__form-input" placeholder="Ваша фамилия"
                               required>
                    </div>
                </div>
                <div class="form__input-wrap signup__form-input-wrap">
                    <label for="user_name" class="form__label signup__form-input-label">Телефон <span
                            class="text_alert">*</span></label>
                    <input id="user_name" type="text" class="form__input signup__form-input" placeholder="Телефон"
                           required>
                </div>
                <div class="form__input-wrap signup__form-input-wrap">
                    <label for="user_name" class="form__label signup__form-input-label">Email <span
                            class="text_alert">*</span></label>
                    <input id="user_name" type="text" class="form__input signup__form-input" placeholder="Ваш e-mail"
                           required>
                </div>
                <div class="form__input-wrap signup__form-input-wrap">
                    <label for="user_name" class="form__label signup__form-input-label">Пароль <span
                            class="text_alert">*</span></label>
                    <input id="user_name" type="text" class="form__input signup__form-input" required>
                </div>
                <div class="form__input-wrap signup__form-input-wrap">
                    <label for="user_name" class="form__label signup__form-input-label">Подтверждение пароля <span
                            class="text_alert">*</span></label>
                    <input id="user_name" type="text" class="form__input signup__form-input" required>
                </div>

                <button type="submit" class="form__submit signup__submit">Обновить данные</button>
            </form>

            <div class="signup__col signup__features">
                <h2 class="signup__features-title">Детали учетной записи</h2>
                <div class="signup__features-text">
                    На этой странице вы можете изменить данные для авторизации и персональную информацию.
                </div>
                <div class="signup__features-text">
                    Чтобы повысить уровень безопасности своей учетной записи, рекомендуется избегать паролей, в
                    которых используются:
                </div>
                <ul class="signup__features-list">
                    <li class="signup__features-list-item">Слова из словарей на любом языке</li>
                    <li class="signup__features-list-item">Слова, написанные задом наперёд и аббревиатуры
                    </li>
                    <li class="signup__features-list-item">Последовательности символов или повторяющиеся символы.
                        Например: 12345678, 3333333, qwerty123 и т.д.</li>
                    <li class="signup__features-list-item">Персональную информацию (имя, дату рождения, номер
                        паспорта и т.п.)</li>
                </ul>
            </div>
        </div>
    </main>

    <? require_once(__DIR__ . '/modules/footer.php') ?>

</body>
</html>