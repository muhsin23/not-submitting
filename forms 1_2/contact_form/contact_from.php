<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

</div> <!-- End of previous content -->

<div id="space-for-footer"></div>
</div>

<div id="footer">
    <div id="copyright">
        <?php
        $APPLICATION->IncludeFile(
            SITE_DIR . "include/copyright.php",
            Array(),
            Array("MODE" => "html")
        );
        ?>
    </div>

    <div class="footer-links">
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "bottom",
            array(
                "ROOT_MENU_TYPE" => "bottom",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "36000000",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(),
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "N",
                "ALLOW_MULTI_SELECT" => "N"
            ),
            false
        );
        ?>
    </div>
</div>

<!-- Contact Form Section -->
<div id="footer-contact-form">
    <div class="contact-form">
        <div class="contact-form__head">
            <div class="contact-form__head-title">Связаться</div>
            <div class="contact-form__head-text">
                Наши сотрудники помогут выполнить подбор услуги и расчет цены с учетом ваших требований
            </div>
        </div>

        <!-- Bitrix Form Component -->
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:form.result.new",
            "", // Use a custom template (if required)
            Array(
                "WEB_FORM_ID" => "3", // Replace with your form ID
                "IGNORE_CUSTOM_TEMPLATE" => "Y",
                "USE_EXTENDED_ERRORS" => "Y",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "LIST_URL" => "", // Optional: submissions list
                "EDIT_URL" => "",
                "SUCCESS_URL" => "", // Optional: success redirect
                "SHOW_LIST_PAGE" => "N",
                "CUSTOM_SUBMIT_BUTTON" => "Оставить заявку" // Custom button text
            )
        );
        ?>
    </div>
</div>

<!-- External CSS -->
<link rel="stylesheet" href="/bitrix/local/templates/my_form_template/contact_form/css/common.css">

<!-- External Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Form Styles -->
<style>
    .contact-form {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        font-family: 'Poppins', sans-serif;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    .contact-form__head-title {
        font-size: 24px;
        font-weight: bold;
        color: #1e2a5a;
        margin-bottom: 10px;
    }

    .contact-form__head-text {
        font-size: 16px;
        color: #666;
        margin-bottom: 20px;
    }

    .contact-form input,
    .contact-form textarea {
        width: calc(50% - 10px);
        margin: 5px;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .contact-form textarea {
        width: calc(100% - 20px);
        height: 100px;
    }

    .contact-form .form-submit-button {
        width: 100%;
        padding: 10px;
        background-color: #1e2a5a;
        color: #fff;
        font-size: 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 20px;
    }

    .contact-form .form-submit-button:hover {
        background-color: #163c8a;
    }
</style>

<!-- Favicon -->
<link rel="icon" href="/bitrix/local/templates/contact_form/images/favicon.604825ed.ico" type="image/x-icon">

</body>
</html>
