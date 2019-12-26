<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");

?><pre></pre><?$APPLICATION->IncludeComponent("slam:easyform", "blogCallBack", Array(
	"COMPONENT_TEMPLATE" => "uniform",
		"FORM_ID" => "FORM2",	// ID формы
		"FORM_NAME" => "",	// Название формы
		"WIDTH_FORM" => "500px",	// Ширина формы
		"DISPLAY_FIELDS" => array(	// Поля (символьный код)
			0 => "MESSAGE",
			1 => "",
		),
		"REQUIRED_FIELDS" => array(	// Обязательные поля
			0 => "MESSAGE",
		),
		"FIELDS_ORDER" => "MESSAGE",	// Расположение полей формы
		"CLEAR_FORM" => "N",	// Кнопка очистить форму
		"FORM_AUTOCOMPLETE" => "Y",	// Автокомплит значений полей формы
		"HIDE_FIELD_NAME" => "Y",	// Скрывать названия полей  формы
		"HIDE_ASTERISK" => "Y",	// Убрать двоеточие и звездочки
		"FORM_SUBMIT_VALUE" => "Отправить",	// Название кнопки
		"SEND_AJAX" => "Y",	// Отправлять форму при помощи AJAX?
		"SHOW_MODAL" => "N",	// Показывать результат в модальном окне
		"_CALLBACKS" => "success_FORM2",	// Название функции при успешной отправки ( "_callbacks" )
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
		"EMAIL_FILE" => "N",	// Прикладывать файлы к письму
		"USE_IBLOCK_WRITE" => "N",	// Записывать результаты в ИБ
		"CATEGORY_MESSAGE_TITLE" => "Сообщение",	// Название
		"CATEGORY_MESSAGE_TYPE" => "textarea",	// Тип поля
		"CATEGORY_MESSAGE_PLACEHOLDER" => "Мы ценим ваше мнение",	// Placeholder
		"CATEGORY_MESSAGE_CLASS" => "general-itemInput",	// Класс (general-itemInput_33 general-itemInput_half general-itemInput_25)
		"CATEGORY_MESSAGE_VALUE" => "",	// Значение
		"USE_CAPTCHA" => "N",	// Использовать капчу reCAPTCHA
		"USE_MODULE_VARNING" => "N",	// Использовать сообщение из настроек модуля
		"FORM_SUBMIT_VARNING" => "",	// Сообщение, выводимое перед кнопкой
		"USE_FORMVALIDATION_JS" => "N",	// Проверять поля через JS Bootstrap Validators
		"USE_JQUERY" => "N",	// Подключить jQuery-1.12.4
		"USE_BOOTSRAP_CSS" => "N",	// Подключить стандартные стили Bootstrap 3
		"USE_BOOTSRAP_JS" => "N",	// Подключить стандартный JS Bootstrap 3
	),
	false
);?><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>