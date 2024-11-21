<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= $templateFolder ?>/images/favicon.604825ed.ico" type="image/x-icon">
    <link href="<?= $templateFolder ?>/css/common.css" rel="stylesheet">
</head>
<body>
    <div class="contact-form">
        <div class="contact-form__head">
            <div class="contact-form__head-title">Связаться</div>
            <div class="contact-form__head-text">Наши сотрудники помогут выполнить подбор услуги и расчет цены с учетом ваших требований</div>
        </div>
        <form class="contact-form__form" action="<?= POST_FORM_ACTION_URI ?>" method="POST">
            <?= bitrix_sessid_post() ?>
            <div class="contact-form__form-inputs">
                <div class="input contact-form__input">
                    <label class="input__label" for="medicine_name">
                        <div class="input__label-text">Ваше имя*</div>
                        <input class="input__input" type="text" id="medicine_name" name="medicine_name" required>
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="medicine_company">
                        <div class="input__label-text">Компания/Должность*</div>
                        <input class="input__input" type="text" id="medicine_company" name="medicine_company" required>
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="medicine_email">
                        <div class="input__label-text">Email*</div>
                        <input class="input__input" type="email" id="medicine_email" name="medicine_email" required>
                        <div class="input__notification">Неверный формат почты</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="medicine_phone">
                        <div class="input__label-text">Номер телефона*</div>
                        <input class="input__input" type="tel" id="medicine_phone" maxlength="12" name="medicine_phone" required>
                    </label>
                </div>
            </div>
            <div class="contact-form__form-message">
                <div class="input">
                    <label class="input__label" for="medicine_message">
                        <div class="input__label-text">Сообщение</div>
                        <textarea class="input__input" id="medicine_message" name="medicine_message"></textarea>
                    </label>
                </div>
            </div>
            <div class="contact-form__bottom">
                <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы подтверждаете, что ознакомлены, полностью согласны и принимаете условия &laquo;Согласия на обработку персональных данных&raquo;.</div>
                <button class="form-button contact-form__bottom-button" type="submit">
                    <div class="form-button__title">Оставить заявку</div>
                </button>
            </div>
        </form>
    </div>
</body>
</html>
