<? require_once(__DIR__ . '/modules/header.php') ?>

    <main class="container">
        <h1 class="inner-page__title">
            Войти
        </h1>

        <div class="signup">
            <form action="#" method="POST" class="signup__col signup__form">
				<div class="form__input-wrap signup__form-input-wrap">
                    <label for="user_email" class="form__label signup__form-input-label">E-mail <span
                            class="text_alert">*</span></label>
                    <input id="user_email" type="text" class="form__input signup__form-input" required>
                </div>
                <div class="form__input-wrap signup__form-input-wrap">
                    <label for="user_password" class="form__label signup__form-input-label">Пароль <span
                            class="text_alert">*</span></label>
                    <input id="user_password" type="text" class="form__input signup__form-input" required>
                </div>

				<div class="form__input-wrap signup__form-checkbox-wrap">
                    <input id="user_remember" type="checkbox" class="form__input signup__form-input">
                    <label for="user_remember" class="signup__form-checkbox-label">Запомнить</label>
                </div>

                <button type="submit" class="form__submit signup__form-submit">Войти</button>
            </form>

            <div class="signup__col signup__features">
                <a href="/sign-up" class="form__submit signup__form-submit">Создать учетную запись</a>
            </div>
        </div>
    </main>

    <? require_once(__DIR__ . '/modules/footer.php') ?>

</body>
</html>