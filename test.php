<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");

?><pre></pre> <?/*$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket",
	"",
Array()
);*/?><br>
<?/*$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	"test",
	Array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"BIG_DATA_RCM_TYPE" => "personal",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMMON_ADD_TO_BASKET_ACTION" => "ADD",
		"COMMON_SHOW_CLOSE_POPUP" => "N",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_ADD_TO_BASKET_ACTION" => array(0=>"BUY",),
		"DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(0=>"BUY",),
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BRAND_USE" => "N",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => array(0=>"POPUP",1=>"MAGNIFIER",),
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"DETAIL_IMAGE_RESOLUTION" => "16by9",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
		"DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"DETAIL_SHOW_POPULAR" => "Y",
		"DETAIL_SHOW_SLIDER" => "N",
		"DETAIL_SHOW_VIEWED" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_HIDE_ON_MOBILE" => "N",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_SUBSECTIONS" => "Y",
		"INSTANT_RELOAD" => "N",
		"LABEL_PROP" => "",
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_ENLARGE_PRODUCT" => "STRICT",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"LIST_SHOW_SLIDER" => "Y",
		"LIST_SLIDER_INTERVAL" => "3000",
		"LIST_SLIDER_PROGRESS" => "N",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_COMMENTS_TAB" => "Комментарии",
		"MESS_DESCRIPTION_TAB" => "Описание",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"MESS_PRICE_RANGES_TITLE" => "Цены",
		"MESS_PROPERTIES_TAB" => "Характеристики",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "30",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => "",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SEARCH_CHECK_DATES" => "Y",
		"SEARCH_NO_WORD_LOGIC" => "Y",
		"SEARCH_PAGE_RESULT_COUNT" => "50",
		"SEARCH_RESTART" => "N",
		"SEARCH_USE_LANGUAGE_GUESS" => "Y",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTION_ADD_TO_BASKET_ACTION" => "ADD",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_TOP_DEPTH" => "2",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_TOP_ELEMENTS" => "Y",
		"SIDEBAR_DETAIL_SHOW" => "N",
		"SIDEBAR_PATH" => "",
		"SIDEBAR_SECTION_SHOW" => "Y",
		"TEMPLATE_THEME" => "blue",
		"TOP_ADD_TO_BASKET_ACTION" => "ADD",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"TOP_VIEW_MODE" => "SECTION",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_BIG_DATA" => "Y",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
		"USE_COMPARE" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_FILTER" => "N",
		"USE_GIFTS_DETAIL" => "Y",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
		"USE_GIFTS_SECTION" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_REVIEW" => "N",
		"USE_SALE_BESTSELLERS" => "Y",
		"USE_STORE" => "N",
		"VARIABLE_ALIASES" => array("ELEMENT_ID"=>"ELEMENT_ID","SECTION_ID"=>"SECTION_ID",)
	)
);*/?>
<?$APPLICATION->IncludeComponent(
	"slam:easyform",
	".default",
	Array(
		"CAPTCHA_TITLE" => "",
		"CATEGORY_ADUCATION_PLACEHOLDER" => "Образование",
		"CATEGORY_ADUCATION_TITLE" => "Образование",
		"CATEGORY_ADUCATION_TYPE" => "text",
		"CATEGORY_ADUCATION_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_ADUCATION_VALUE" => "",
		"CATEGORY_EMAIL_PLACEHOLDER" => "E-mail",
		"CATEGORY_EMAIL_TITLE" => "E-mail",
		"CATEGORY_EMAIL_TYPE" => "text",
		"CATEGORY_EMAIL_VALIDATION_ADDITIONALLY_MESSAGE" => "data-bv-emailaddress-message=\"E-mail введен некорректно\"",
		"CATEGORY_EMAIL_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_EMAIL_VALUE" => "",
		"CATEGORY_EXPERIENCE_PLACEHOLDER" => "Опыт работы",
		"CATEGORY_EXPERIENCE_TITLE" => "Опыт работы",
		"CATEGORY_EXPERIENCE_TYPE" => "text",
		"CATEGORY_EXPERIENCE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_EXPERIENCE_VALUE" => "",
		"CATEGORY_FILE_DROPZONE_INCLUDE" => "Y",
		"CATEGORY_FILE_FILE_EXTENSION" => "doc, docx, xls, xlsx, txt, rtf, pdf, png, jpeg, jpg, gif",
		"CATEGORY_FILE_FILE_MAX_SIZE" => "20971520",
		"CATEGORY_FILE_PLACEHOLDER" => "",
		"CATEGORY_FILE_TITLE" => "Прикрепить файл",
		"CATEGORY_FILE_TYPE" => "file",
		"CATEGORY_FILE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_FILE_VALUE" => "",
		"CATEGORY_MESSAGE_CLASS" => "",
		"CATEGORY_MESSAGE_PLACEHOLDER" => "",
		"CATEGORY_MESSAGE_TITLE" => "Сообщение",
		"CATEGORY_MESSAGE_TYPE" => "textarea",
		"CATEGORY_MESSAGE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_MESSAGE_VALUE" => "",
		"CATEGORY_PHONE_CLASS" => "general-itemInput_half",
		"CATEGORY_PHONE_INPUTMASK" => "N",
		"CATEGORY_PHONE_INPUTMASK_TEMP" => "+7 (999) 999-9999",
		"CATEGORY_PHONE_PLACEHOLDER" => "",
		"CATEGORY_PHONE_TITLE" => "Телефон",
		"CATEGORY_PHONE_TYPE" => "tel",
		"CATEGORY_PHONE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_PHONE_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_PHONE_VALUE" => "",
		"CATEGORY_PORTPHOLIO_PLACEHOLDER" => "Ссылка на портфолио",
		"CATEGORY_PORTPHOLIO_TITLE" => "Ссылка на портфолио",
		"CATEGORY_PORTPHOLIO_TYPE" => "url",
		"CATEGORY_PORTPHOLIO_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_PORTPHOLIO_VALUE" => "",
		"CATEGORY_TITLE_CLASS" => "general-itemInput_half",
		"CATEGORY_TITLE_PLACEHOLDER" => "",
		"CATEGORY_TITLE_TITLE" => "ФИО",
		"CATEGORY_TITLE_TYPE" => "text",
		"CATEGORY_TITLE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_TITLE_VALIDATION_MESSAGE" => "Обязательное поле",
		"CATEGORY_TITLE_VALUE" => "",
		"CATEGORY_VACANCY_PLACEHOLDER" => "",
		"CATEGORY_VACANCY_TITLE" => "VACANCY",
		"CATEGORY_VACANCY_TYPE" => "hidden",
		"CATEGORY_VACANCY_VALIDATION_ADDITIONALLY_MESSAGE" => "",
		"CATEGORY_VACANCY_VALUE" => "",
		"CLEAR_FORM" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CREATE_SEND_MAIL" => "",
		"CUSTOM_FORM" => "",
		"DISPLAY_FIELDS" => array(0=>"TITLE",1=>"PHONE",2=>"MESSAGE",3=>"",),
		"EMAIL_BCC" => "",
		"EMAIL_FILE" => "Y",
		"EMAIL_SEND_FROM" => "N",
		"EMAIL_TO" => "",
		"ENABLE_SEND_MAIL" => "Y",
		"ERROR_TEXT" => "Произошла ошибка. Сообщение не отправлено.",
		"EVENT_MESSAGE_ID" => array(0=>"48",),
		"FIELDS_ORDER" => "TITLE,PHONE,MESSAGE",
		"FORM_AUTOCOMPLETE" => "Y",
		"FORM_ID" => "FORM9",
		"FORM_NAME" => "Свяжитесь с нами",
		"FORM_SUBMIT_VALUE" => "Отправить",
		"FORM_SUBMIT_VARNING" => "Нажимая на кнопку \"#BUTTON#\", вы даете согласие на обработку <a target=\"_blank\" href=\"/privacy-policy/\">персональных данных</a>",
		"HIDE_ASTERISK" => "Y",
		"HIDE_FIELD_NAME" => "N",
		"HIDE_FORMVALIDATION_TEXT" => "N",
		"INCLUDE_BOOTSRAP_JS" => "Y",
		"MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",
		"OK_TEXT" => "Ваше сообщение отправлено. Мы свяжемся с вами в течение 2х часов",
		"REQUIRED_FIELDS" => array(0=>"TITLE",1=>"PHONE",2=>"MESSAGE",),
		"SEND_AJAX" => "Y",
		"SHOW_MODAL" => "N",
		"USE_BOOTSRAP_CSS" => "N",
		"USE_BOOTSRAP_JS" => "N",
		"USE_CAPTCHA" => "Y",
		"USE_FORMVALIDATION_JS" => "N",
		"USE_IBLOCK_WRITE" => "N",
		"USE_JQUERY" => "N",
		"USE_MODULE_VARNING" => "N",
		"WIDTH_FORM" => "main-project-content-form",
		"_CALLBACKS" => "success_FORM9"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"vertical_multilevel", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "service",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DELAY" => "N",
		"MAX_LEVEL" => "4",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "service",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "vertical_multilevel"
	),
	false
);?><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>