<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

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
<div class="services">
    <div class="subtitle">
        <?$APPLICATION->ShowProperty('subtitle')?>
    </div>
    <h1 class="title"><?$APPLICATION->ShowTitle(false)?></h1>
<?
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"services",
	array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
		"TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
		"SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
		"HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
		"ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : '')
	),
	$component,
	($arParams["SHOW_TOP_ELEMENTS"] !== "N" ? array("HIDE_ICONS" => "Y") : array())
);
?>
<div class="main-project">
    <div class="main-project__title">Начать проект</div>
    <div class="main-project-content">
        <div class="main-project-content-left"><svg width="464" height="368" viewBox="0 0 464 368" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M128.285 186.841L0 225.084L23.5028 303.923L151.788 265.679L128.285 186.841Z" fill="url(#paint0_linear)"/>
                <path d="M126.093 189.624L2.15625 226.571L24.0908 300.149L148.027 263.202L126.093 189.624Z" fill="white"/>
                <g opacity="0.6">
                    <path opacity="0.6" d="M12.7084 242.218L28.4751 237.518L24.9966 225.849L9.22992 230.55L12.7084 242.218Z" fill="#F55F44"/>
                    <path opacity="0.6" d="M32.4084 261.064L92.957 243.013L91.8295 239.231L31.2808 257.281L32.4084 261.064Z" fill="#F55F44"/>
                    <path opacity="0.6" d="M51.2525 264.369L95.4023 251.208L94.6501 248.684L50.5003 261.846L51.2525 264.369Z" fill="#F55F44"/>
                </g>
                <path d="M328.192 9.80094e-05L312.467 80.7505L443.862 106.339L459.588 25.5884L328.192 9.80094e-05Z" fill="url(#paint1_linear)"/>
                <path d="M329.411 2.32632L314.734 77.6885L441.676 102.409L456.353 27.0473L329.411 2.32632Z" fill="white"/>
                <g opacity="0.6">
                    <path opacity="0.6" d="M331.456 21.0821L347.605 24.2271L349.933 12.2758L333.784 9.13092L331.456 21.0821Z" fill="#F55F44"/>
                    <path opacity="0.6" d="M340.174 46.9212L402.19 58.9985L402.945 55.1244L340.928 43.0471L340.174 46.9212Z" fill="#F55F44"/>
                    <path opacity="0.6" d="M355.337 58.5931L400.558 67.3994L401.061 64.8149L355.841 56.0086L355.337 58.5931Z" fill="#F55F44"/>
                </g>
                <path d="M409.903 159.438L334.431 192.176L387.702 314.984L463.174 282.245L409.903 159.438Z" fill="url(#paint2_linear)"/>
                <path d="M408.672 161.758L338.235 192.312L389.701 310.957L460.137 280.404L408.672 161.758Z" fill="white"/>
                <g opacity="0.6">
                    <path opacity="0.6" d="M394.353 174.081L400.9 189.174L412.071 184.329L405.523 169.235L394.353 174.081Z" fill="#47E6B1"/>
                    <path opacity="0.6" d="M377.983 195.886L403.126 253.85L406.747 252.279L381.604 194.315L377.983 195.886Z" fill="#47E6B1"/>
                    <path opacity="0.6" d="M376.945 214.987L395.278 257.251L397.694 256.204L379.36 213.939L376.945 214.987Z" fill="#47E6B1"/>
                </g>
                <path d="M161.899 0.57492L35.7363 45.3257L63.2383 122.86L189.401 78.1091L161.899 0.57492Z" fill="url(#paint3_linear)"/>
                <path d="M159.855 3.47553L37.9688 46.7095L63.6356 119.07L185.522 75.8361L159.855 3.47553Z" fill="white"/>
                <g opacity="0.6">
                    <path opacity="0.6" d="M49.2681 61.8257L64.7739 56.3257L60.7036 44.8505L45.1977 50.3505L49.2681 61.8257Z" fill="#6E1866"/>
                    <path opacity="0.6" d="M69.9053 79.6486L129.452 58.5269L128.133 54.8071L68.5859 75.9288L69.9053 79.6486Z" fill="#6E1866"/>
                    <path opacity="0.6" d="M88.8922 81.9871L132.312 66.5859L131.431 64.1044L88.012 79.5056L88.8922 81.9871Z" fill="#6E1866"/>
                </g>
                <path d="M231.755 4.89697L75.9009 151.618V367.669H387.603V151.618L231.755 4.89697Z" fill="url(#paint4_linear)"/>
                <path d="M386.023 362.929H77.481V151.266L231.755 7.52979L386.023 151.266V362.929Z" fill="white"/>
                <path d="M339.16 37.0142H124.343V289.742H339.16V37.0142Z" fill="url(#paint5_linear)"/>
                <path d="M336.447 39.1206H127.056V289.742H336.447V39.1206Z" fill="white"/>
                <path d="M77.481 151.266L231.755 257.098L77.481 362.929V151.266Z" fill="#F5F5F5"/>
                <path d="M386.023 151.266L231.755 257.098L386.023 362.929V151.266Z" fill="#F5F5F5"/>
                <path d="M77.481 362.924L225.696 247.608C227.421 246.25 229.552 245.512 231.747 245.512C233.942 245.512 236.073 246.25 237.797 247.608L386.023 362.924H77.481Z" fill="url(#paint6_linear)"/>
                <path d="M77.481 362.924L225.696 252.646C227.445 251.345 229.567 250.642 231.747 250.642C233.927 250.642 236.048 251.345 237.797 252.646L386.023 362.924H77.481Z" fill="white"/>
                <path d="M202.531 87.5576H158.828V94.9301H202.531V87.5576Z" fill="#47E6B1"/>
                <path d="M304.676 107.042H158.828V114.414H304.676V107.042Z" fill="#F5F5F5"/>
                <path d="M304.676 119.675H158.828V127.048H304.676V119.675Z" fill="#F5F5F5"/>
                <path d="M304.676 132.314H158.828V139.686H304.676V132.314Z" fill="#F5F5F5"/>
                <path d="M304.676 144.947H158.828V152.319H304.676V144.947Z" fill="#F5F5F5"/>
                <path d="M225.17 157.585H158.828V164.958H225.17V157.585Z" fill="#F5F5F5"/>
                <path d="M304.676 157.585H238.335V164.958H304.676V157.585Z" fill="#6E1866"/>
                <defs>
                    <linearGradient id="paint0_linear" x1="87.6452" y1="284.801" x2="64.1424" y2="205.962" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear" x1="9988.91" y1="23433.3" x2="13946.4" y2="3111.61" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear" x1="-47820.7" y1="42611.3" x2="-28827.3" y2="34372.4" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear" x1="-1333.52" y1="20313.7" x2="-5586.98" y2="8322.22" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                    <linearGradient id="paint4_linear" x1="135872" y1="250757" x2="135872" y2="3346.02" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                    <linearGradient id="paint5_linear" x1="93711.7" y1="137700" x2="93711.7" y2="17624.3" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                    <linearGradient id="paint6_linear" x1="185295" y1="92612" x2="185295" y2="66695.8" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <?$APPLICATION->IncludeComponent(
	"slam:easyform", 
	"uniform", 
	array(
		"COMPONENT_TEMPLATE" => "uniform",
		"FORM_ID" => "FORM10",
		"FORM_NAME" => "Заполните короткий бриф",
		"WIDTH_FORM" => "main-project-content-form",
		"DISPLAY_FIELDS" => array(
			0 => "TITLE",
			1 => "EMAIL",
			2 => "PHONE",
			3 => "MESSAGE",
			4 => "COMPANY",
			5 => "",
		),
		"REQUIRED_FIELDS" => array(
			0 => "TITLE",
			1 => "EMAIL",
			2 => "PHONE",
			3 => "MESSAGE",
			4 => "COMPANY",
		),
		"FIELDS_ORDER" => "TITLE,EMAIL,PHONE,COMPANY,MESSAGE",
		"FORM_AUTOCOMPLETE" => "Y",
		"HIDE_FIELD_NAME" => "N",
		"HIDE_ASTERISK" => "Y",
		"FORM_SUBMIT_VALUE" => "Отправить",
		"SEND_AJAX" => "Y",
		"SHOW_MODAL" => "N",
		"_CALLBACKS" => "success_FORM10",
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
		"CATEGORY_EMAIL_TYPE" => "text",
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
		"CATEGORY_MESSAGE_TITLE" => "Сообщение",
		"CATEGORY_MESSAGE_TYPE" => "textarea",
		"CATEGORY_MESSAGE_PLACEHOLDER" => "",
		"CATEGORY_MESSAGE_VALUE" => "",
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
		"USE_CAPTCHA" => "N",
		"USE_MODULE_VARNING" => "N",
		"USE_FORMVALIDATION_JS" => "N",
		"HIDE_FORMVALIDATION_TEXT" => "N",
		"INCLUDE_BOOTSRAP_JS" => "Y",
		"USE_JQUERY" => "N",
		"USE_BOOTSRAP_CSS" => "N",
		"USE_BOOTSRAP_JS" => "N",
		"FORM_SUBMIT_VARNING" => "Нажимая на кнопку \"#BUTTON#\", вы даете согласие на обработку <a target=\"_blank\" href=\"#\">персональных данных</a>",
		"CATEGORY_FILE_FILE_EXTENSION" => "doc, docx, xls, xlsx, txt, rtf, pdf, png, jpeg, jpg, gif",
		"CATEGORY_FILE_FILE_MAX_SIZE" => "20971520",
		"CATEGORY_FILE_DROPZONE_INCLUDE" => "Y",
		"CATEGORY_COMPANY_TITLE" => "Компания",
		"CATEGORY_COMPANY_TYPE" => "text",
		"CATEGORY_COMPANY_PLACEHOLDER" => "",
		"CATEGORY_COMPANY_VALUE" => "",
		"CLEAR_FORM" => "N",
		"CATEGORY_TITLE_CLASS" => "general-itemInput_half",
		"CATEGORY_EMAIL_CLASS" => "general-itemInput_half",
		"CATEGORY_PHONE_CLASS" => "general-itemInput_half",
		"CATEGORY_MESSAGE_CLASS" => "general-itemInput",
		"CATEGORY_COMPANY_CLASS" => "general-itemInput_half",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
    </div>
</div>
</div>
