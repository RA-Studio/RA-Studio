<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="vacancy">
    <h1 class="vacancy__title"><?$APPLICATION->ShowTitle(false)?></h1>
    <div class="vacancy__desc"><?=$arResult['PREVIEW_TEXT']?></div>
    <div class="vacancy-wrap"><?=$arResult['DETAIL_TEXT']?></div>
    <div class="vacancy-bonus">
        <div class="vacancy-bonus__title">Условия и бонусы</div>
        <div class="vacancy-bonus-wrap">
            <div class="vacancy-bonus-item">
                <div class="vacancy-bonus-item__title">🏠 Офис</div>
                <div class="vacancy-bonus-item__text">Уютный офис в центре города, 10 мин. от м. Петроградская</div>
            </div>
            <div class="vacancy-bonus-item">
                <div class="vacancy-bonus-item__title">📋 График</div>
                <div class="vacancy-bonus-item__text">Удобный график работы</div>
            </div>
            <div class="vacancy-bonus-item">
                <div class="vacancy-bonus-item__title">📚 Обучение</div>
                <div class="vacancy-bonus-item__text">Курсы, тренинги, семинары, книги — все для Вас</div>
            </div>
            <div class="vacancy-bonus-item">
                <div class="vacancy-bonus-item__title">📕 Оформление</div>
                <div class="vacancy-bonus-item__text">Оформление по ТК РФ</div>
            </div>
            <div class="vacancy-bonus-item">
                <div class="vacancy-bonus-item__title">🍕 Вкусняшки</div>
                <div class="vacancy-bonus-item__text">Пицца каждую пятницу, чай с печеньками каждые пять минут</div>
            </div>
            <div class="vacancy-bonus-item">
                <div class="vacancy-bonus-item__title">✈️ Отпуск</div>
                <div class="vacancy-bonus-item__text">Оплачиваемый отпуск</div>
            </div>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent(
	"slam:easyform", 
	"uniform", 
	array(
		"COMPONENT_TEMPLATE" => "uniform",
		"FORM_ID" => "FORM8",
		"FORM_NAME" => "Откликнуться на вакансию",
		"WIDTH_FORM" => "vacancy-form",
		"DISPLAY_FIELDS" => array(
			0 => "TITLE",
			1 => "EMAIL",
			2 => "PHONE",
			3 => "MESSAGE",
			4 => "ADUCATION",
			5 => "EXPERIENCE",
			6 => "PORTPHOLIO",
			7 => "FILE",
			8 => "VACANCY",
			9 => "",
		),
		"REQUIRED_FIELDS" => array(
			0 => "TITLE",
			1 => "EMAIL",
			2 => "PHONE",
		),
		"FIELDS_ORDER" => "VACANCY,TITLE,PHONE,EMAIL,ADUCATION,EXPERIENCE,PORTPHOLIO,MESSAGE,FILE",
		"FORM_AUTOCOMPLETE" => "Y",
		"HIDE_FIELD_NAME" => "N",
		"HIDE_ASTERISK" => "Y",
		"FORM_SUBMIT_VALUE" => "Отправить",
		"SEND_AJAX" => "Y",
		"SHOW_MODAL" => "N",
		"_CALLBACKS" => "success_FORM8",
		"OK_TEXT" => "Ваше сообщение отправлено. Мы свяжемся с вами в течение 2х часов",
		"ERROR_TEXT" => "Произошла ошибка. Сообщение не отправлено.",
		"ENABLE_SEND_MAIL" => "Y",
		"CREATE_SEND_MAIL" => "",
		"EVENT_MESSAGE_ID" => array(
			0 => "48",
		),
		"EMAIL_TO" => "",
		"EMAIL_BCC" => "",
		"MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",
		"EMAIL_FILE" => "Y",
		"EMAIL_SEND_FROM" => "N",
		"USE_IBLOCK_WRITE" => "N",
		"CATEGORY_TITLE_TITLE" => "ФИО",
		"CATEGORY_TITLE_TYPE" => "text",
		"CATEGORY_TITLE_PLACEHOLDER" => "",
		"CATEGORY_TITLE_VALUE" => "",
		"CATEGORY_TITLE_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_TITLE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_EMAIL_TITLE" => "E-mail",
		"CATEGORY_EMAIL_TYPE" => "email",
		"CATEGORY_EMAIL_PLACEHOLDER" => "",
		"CATEGORY_EMAIL_VALUE" => "",
		"CATEGORY_EMAIL_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_EMAIL_VALIDATION_ADDITIONALLY_MESSAGE" => "data-bv-emailaddress-message=\"E-mail введен некорректно\"",
		"CATEGORY_PHONE_TITLE" => "Телефон",
		"CATEGORY_PHONE_TYPE" => "tel",
		"CATEGORY_PHONE_PLACEHOLDER" => "",
		"CATEGORY_PHONE_VALUE" => "",
		"CATEGORY_PHONE_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_PHONE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_PHONE_INPUTMASK" => "N",
		"CATEGORY_PHONE_INPUTMASK_TEMP" => "+7 (999) 999-9999",
		"CATEGORY_MESSAGE_TITLE" => "Расскажите о себе",
		"CATEGORY_MESSAGE_TYPE" => "textarea",
		"CATEGORY_MESSAGE_PLACEHOLDER" => "",
		"CATEGORY_MESSAGE_VALUE" => "",
		"CATEGORY_MESSAGE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_ADUCATION_TITLE" => "Образование",
		"CATEGORY_ADUCATION_TYPE" => "text",
		"CATEGORY_ADUCATION_PLACEHOLDER" => "",
		"CATEGORY_ADUCATION_VALUE" => "",
		"CATEGORY_ADUCATION_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_EXPERIENCE_TITLE" => "Опыт работы",
		"CATEGORY_EXPERIENCE_TYPE" => "text",
		"CATEGORY_EXPERIENCE_PLACEHOLDER" => "",
		"CATEGORY_EXPERIENCE_VALUE" => "",
		"CATEGORY_EXPERIENCE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_PORTPHOLIO_TITLE" => "Ссылка на портфолио",
		"CATEGORY_PORTPHOLIO_TYPE" => "url",
		"CATEGORY_PORTPHOLIO_PLACEHOLDER" => "",
		"CATEGORY_PORTPHOLIO_VALUE" => "",
		"CATEGORY_PORTPHOLIO_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_FILE_TITLE" => "Прикрепить резюме",
		"CATEGORY_FILE_TYPE" => "file",
		"CATEGORY_FILE_PLACEHOLDER" => "",
		"CATEGORY_FILE_VALUE" => "",
		"CATEGORY_FILE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_VACANCY_TITLE" => "VACANCY",
		"CATEGORY_VACANCY_TYPE" => "hidden",
		"CATEGORY_VACANCY_PLACEHOLDER" => "",
		"CATEGORY_VACANCY_VALUE" => "",
		"CATEGORY_VACANCY_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"USE_CAPTCHA" => "N",
		"USE_MODULE_VARNING" => "N",
		"USE_FORMVALIDATION_JS" => "N",
		"HIDE_FORMVALIDATION_TEXT" => "N",
		"INCLUDE_BOOTSRAP_JS" => "Y",
		"USE_JQUERY" => "N",
		"USE_BOOTSRAP_CSS" => "N",
		"USE_BOOTSRAP_JS" => "N",
		"FORM_SUBMIT_VARNING" => "Нажимая на кнопку \"#BUTTON#\", вы даете согласие на обработку <a target=\"_blank\" href=\"/privacy-policy/\">персональных данных</a>",
		"CATEGORY_FILE_FILE_EXTENSION" => "doc, docx, xls, xlsx, txt, rtf, pdf, png, jpeg, jpg, gif",
		"CATEGORY_FILE_FILE_MAX_SIZE" => "20971520",
		"CATEGORY_FILE_DROPZONE_INCLUDE" => "Y",
		"CLEAR_FORM" => "N",
		"CATEGORY_TITLE_CLASS" => "general-itemInput_33",
		"CATEGORY_EMAIL_CLASS" => "general-itemInput_33",
		"CATEGORY_PHONE_CLASS" => "general-itemInput_33",
		"CATEGORY_MESSAGE_CLASS" => "general-itemInput",
		"CATEGORY_ADUCATION_CLASS" => "general-itemInput_33",
		"CATEGORY_EXPERIENCE_CLASS" => "general-itemInput_33",
		"CATEGORY_PORTPHOLIO_CLASS" => "general-itemInput_33",
		"CATEGORY_FILE_CLASS" => "",
		"CATEGORY_VACANCY_CLASS" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
    <?/*
    <form class="vacancy-form" method="post" enctype="multipart/form-data">
        <div class="vacancy-form__title">Контактные данные</div>
        <div class="vacancy-form-row">
            <input class="vacancy-form-row__input" type="text" placeholder="ФИО" name="name" data-required>
            <input class="vacancy-form-row__input" type="tel" placeholder="Телефон" name="tel" data-required>
            <input class="vacancy-form-row__input" type="text" placeholder="Email" name="email" data-required>
        </div>
        <div class="vacancy-form-row">
            <input class="vacancy-form-row__input" type="text" placeholder="Образование" name="education" data-required>
            <input class="vacancy-form-row__input" type="text" placeholder="Опыт работы" name="experience">
            <input class="vacancy-form-row__input" type="text" placeholder="Ссылка на портфолио" name="link">
        </div>
        <textarea name="description" cols="30" rows="5" placeholder="Расскажите о себе"></textarea>
        <div class="vacancy-form-file">
            <label for="file">Прикрепить файл</label>
            <input type="file" id="file" name="file"><span> </span>
        </div>
        <div class="vacancy-form-bot">
            <button class="vacancy-form-bot__btn" type="submit">Отправить</button><span>Нажимая на кнопку, Вы даете согласие на обработку персональных данных</span>
        </div>
    </form>
    */?>
</div>