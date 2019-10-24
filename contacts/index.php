<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Контакты");
$APPLICATION->SetTitle("Контакты");
?>
    <div class="contacts">
        <div class="contacts-left">
            <h1 class="contacts-left__title">Контакты</h1>
            <div class="contacts-left__subtitle">Адрес</div>
            <div class="contacts-left__text">г. Санкт-Петербург, ул. Инструментальная д.3, литер Х, офис 9</div>
            <div class="contacts-left__subtitle">Телефон и почта</div>
            <div class="contacts-left__text">
                <a href="mailto:info@ra-studio.ru">info@ra-studio.ru</a>
                <a href="tel:+78126112333">+7 (812) 611-2-333</a>
            </div>
            <?$APPLICATION->IncludeComponent("slam:easyform", "contacts", Array(
	"COMPONENT_TEMPLATE" => "main",
		"FORM_ID" => "FORM9",	// ID формы
		"FORM_NAME" => "Свяжитесь с нами",	// Название формы
		"WIDTH_FORM" => "500px",	// Ширина формы
		"DISPLAY_FIELDS" => array(	// Поля (символьный код)
			0 => "TITLE",
			1 => "PHONE",
			2 => "MESSAGE",
			3 => "",
		),
		"REQUIRED_FIELDS" => array(	// Обязательные поля
			0 => "TITLE",
			1 => "PHONE",
			2 => "MESSAGE",
		),
		"FIELDS_ORDER" => "TITLE,PHONE,MESSAGE",	// Расположение полей формы
		"FORM_AUTOCOMPLETE" => "Y",	// Автокомплит значений полей формы
		"HIDE_FIELD_NAME" => "Y",	// Скрывать названия полей  формы
		"HIDE_ASTERISK" => "Y",	// Убрать двоеточие и звездочки
		"FORM_SUBMIT_VALUE" => "Отправить",	// Название кнопки
		"SEND_AJAX" => "Y",	// Отправлять форму при помощи AJAX?
		"SHOW_MODAL" => "N",	// Показывать результат в модальном окне
		"_CALLBACKS" => "success_FORM9",	// Название функции при успешной отправки ( "_callbacks" )
		"OK_TEXT" => "Ваше сообщение отправлено. Мы свяжемся с вами в течение 2х часов",	// Сообщение об успешной отправке
		"ERROR_TEXT" => "Произошла ошибка. Сообщение не отправлено.",	// Сообщение об ошибке
		"ENABLE_SEND_MAIL" => "Y",	// Включить отправку писем
		"CREATE_SEND_MAIL" => "",	// Создание нового почтового шаблона
		"EVENT_MESSAGE_ID" => array(	// Шаблон письма
			0 => "48",
		),
		"EMAIL_TO" => "",	// E-mail, на который будет отправлено письмо (по умолчанию используется из настроек модуля)
		"EMAIL_BCC" => "",	// Скрытая копия
		"MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",	// Тема сообщения для администратора
		"EMAIL_FILE" => "Y",	// Прикладывать файлы к письму
		"EMAIL_SEND_FROM" => "N",
		"USE_IBLOCK_WRITE" => "N",	// Записывать результаты в ИБ
		"CATEGORY_TITLE_TITLE" => "ФИО",	// Название
		"CATEGORY_TITLE_TYPE" => "text",	// Тип поля
		"CATEGORY_TITLE_PLACEHOLDER" => "ФИО",	// Placeholder
		"CATEGORY_TITLE_VALUE" => "",	// Значение
		"CATEGORY_TITLE_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_TITLE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_EMAIL_TITLE" => "E-mail",
		"CATEGORY_EMAIL_TYPE" => "text",
		"CATEGORY_EMAIL_PLACEHOLDER" => "E-mail",
		"CATEGORY_EMAIL_VALUE" => "",
		"CATEGORY_EMAIL_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_EMAIL_VALIDATION_ADDITIONALLY_MESSAGE" => "data-bv-emailaddress-message=\"E-mail введен некорректно\"",
		"CATEGORY_PHONE_TITLE" => "Телефон",	// Название
		"CATEGORY_PHONE_TYPE" => "tel",	// Тип поля
		"CATEGORY_PHONE_PLACEHOLDER" => "Телефон",	// Placeholder
		"CATEGORY_PHONE_VALUE" => "",	// Значение
		"CATEGORY_PHONE_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_PHONE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_PHONE_INPUTMASK" => "N",	// Включить маску
		"CATEGORY_PHONE_INPUTMASK_TEMP" => "+7 (999) 999-9999",	// Шаблон маски
		"CATEGORY_MESSAGE_TITLE" => "Сообщение",	// Название
		"CATEGORY_MESSAGE_TYPE" => "textarea",	// Тип поля
		"CATEGORY_MESSAGE_PLACEHOLDER" => "Сообщение",	// Placeholder
		"CATEGORY_MESSAGE_VALUE" => "",	// Значение
		"CATEGORY_MESSAGE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_ADUCATION_TITLE" => "Образование",
		"CATEGORY_ADUCATION_TYPE" => "text",
		"CATEGORY_ADUCATION_PLACEHOLDER" => "Образование",
		"CATEGORY_ADUCATION_VALUE" => "",
		"CATEGORY_ADUCATION_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_EXPERIENCE_TITLE" => "Опыт работы",
		"CATEGORY_EXPERIENCE_TYPE" => "text",
		"CATEGORY_EXPERIENCE_PLACEHOLDER" => "Опыт работы",
		"CATEGORY_EXPERIENCE_VALUE" => "",
		"CATEGORY_EXPERIENCE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_PORTPHOLIO_TITLE" => "Ссылка на портфолио",
		"CATEGORY_PORTPHOLIO_TYPE" => "url",
		"CATEGORY_PORTPHOLIO_PLACEHOLDER" => "Ссылка на портфолио",
		"CATEGORY_PORTPHOLIO_VALUE" => "",
		"CATEGORY_PORTPHOLIO_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_FILE_TITLE" => "Прикрепить файл",
		"CATEGORY_FILE_TYPE" => "file",
		"CATEGORY_FILE_PLACEHOLDER" => "",
		"CATEGORY_FILE_VALUE" => "",
		"CATEGORY_FILE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_VACANCY_TITLE" => "VACANCY",
		"CATEGORY_VACANCY_TYPE" => "hidden",
		"CATEGORY_VACANCY_PLACEHOLDER" => "",
		"CATEGORY_VACANCY_VALUE" => "",
		"CATEGORY_VACANCY_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"USE_CAPTCHA" => "N",	// Использовать капчу reCAPTCHA
		"USE_MODULE_VARNING" => "N",	// Использовать сообщение из настроек модуля
		"USE_FORMVALIDATION_JS" => "N",	// Проверять поля через JS Bootstrap Validators
		"HIDE_FORMVALIDATION_TEXT" => "N",
		"INCLUDE_BOOTSRAP_JS" => "Y",
		"USE_JQUERY" => "N",	// Подключить jQuery-1.12.4
		"USE_BOOTSRAP_CSS" => "N",	// Подключить стандартные стили Bootstrap 3
		"USE_BOOTSRAP_JS" => "N",	// Подключить стандартный JS Bootstrap 3
		"FORM_SUBMIT_VARNING" => "Нажимая на кнопку \"#BUTTON#\", вы даете согласие на обработку <a target=\"_blank\" href=\"#\">персональных данных</a>",	// Сообщение, выводимое перед кнопкой
		"CATEGORY_FILE_FILE_EXTENSION" => "doc, docx, xls, xlsx, txt, rtf, pdf, png, jpeg, jpg, gif",
		"CATEGORY_FILE_FILE_MAX_SIZE" => "20971520",
		"CATEGORY_FILE_DROPZONE_INCLUDE" => "Y"
	),
	false
);?>
        </div>
        <div class="contacts-right">
            <div id="map"></div>
            <div id="ymap_ctrl_display">
                <div>Чтобы изменить масштаб, прокручивайте карту, удерживая клавишу Ctrl.</div>
            </div>
        </div>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>