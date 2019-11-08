<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Полезные статьи о разработке и продвижении сайтов от компании РА Студио.");
$APPLICATION->SetPageProperty("description", "Мы расскажем, как правильно оптимизируются сайты, как выбрать подрядчика на создание сайтов и много полезной информации. Подводные камни при работе с веб-студиями. Что учитывать при разработке дизайна сайта.");
$APPLICATION->SetTitle("Блог");
?>

<?/*$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"cases", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "N",
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
		"CACHE_TYPE" => "Y",
		"COMMON_ADD_TO_BASKET_ACTION" => "ADD",
		"COMMON_SHOW_CLOSE_POPUP" => "N",
		"COMPATIBLE_MODE" => "Y",
		"COMPONENT_TEMPLATE" => "cases",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_ADD_TO_BASKET_ACTION" => array(
			0 => "BUY",
		),
		"DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(
			0 => "BUY",
		),
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BRAND_USE" => "N",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => array(
			0 => "POPUP",
			1 => "MAGNIFIER",
		),
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"DETAIL_IMAGE_RESOLUTION" => "16by9",
		"DETAIL_MAIN_BLOCK_PROPERTY_CODE" => array(
		),
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
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILE_404" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_HIDE_ON_MOBILE" => "N",
		"FILTER_NAME" => "blogFilter",
		"FILTER_PRICE_CODE" => array(
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "UF_TAGS",
			1 => "",
		),
		"FILTER_VIEW_MODE" => "VERTICAL",
		"HIDE_NOT_AVAILABLE" => "N",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_SUBSECTIONS" => "Y",
		"INSTANT_RELOAD" => "N",
		"LABEL_PROP" => array(
			0 => "UF_TAGS",
		),
		"LABEL_PROP_MOBILE" => array(
			0 => "UF_TAGS",
		),
		"LABEL_PROP_POSITION" => "top-left",
		"LAZY_LOAD" => "Y",
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
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'0','BIG_DATA':false}]",
		"LIST_PROPERTY_CODE_MOBILE" => array(
			0 => "UF_TAGS",
			1 => "UF_VIEW_COUNT",
			2 => "UF_LIKE",
			3 => "UF_AUTHOR_PHOTO",
			4 => "UF_AUTHOR_NAME",
			5 => "UF_AUTHOR_DESCRIPTION",
		),
		"LIST_SHOW_SLIDER" => "Y",
		"LIST_SLIDER_INTERVAL" => "3000",
		"LIST_SLIDER_PROGRESS" => "N",
		"LOAD_ON_SCROLL" => "N",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
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
		"PAGE_ELEMENT_COUNT" => "1",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_SUBSCRIPTION" => "N",
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
		"SEF_FOLDER" => "/blog/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_TOP_ELEMENTS" => "N",
		"SIDEBAR_DETAIL_SHOW" => "N",
		"SIDEBAR_PATH" => "",
		"SIDEBAR_SECTION_SHOW" => "N",
		"TEMPLATE_THEME" => "black",
		"TOP_ADD_TO_BASKET_ACTION" => "ADD",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_BIG_DATA" => "N",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "Y",
		"USE_COMPARE" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_FILTER" => "Y",
		"USE_GIFTS_DETAIL" => "N",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "N",
		"USE_GIFTS_SECTION" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_REVIEW" => "N",
		"USE_SALE_BESTSELLERS" => "Y",
		"USE_SEARCH" => "Y",
		"USE_STORE" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "/blog/",
			"section" => "",
			"element" => "#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_CODE#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);*/?>

<div class="blog">
    <div class="blog-main" style="background-color: #CFEFF1">
        <div class="blog-main-wrap">
            <div class="blog-main-col">
                <h1 class="blog-main__title">Как менеджеру проектов управлять общением с клиентами</h1>
                <div class="blog-main-bot">
                    <div class="blog-main-bot-author">
                        <div class="blog-main-bot-author__ava">
                            <img src="/local/templates/rastudio/assets/images/blog-ava.jpg" alt="">
                        </div>
                        <div class="blog-main-bot-author__name">Илья<br>Капустин</div>
                    </div>
                    <div class="blog-main-bot__date">14 сентября 2018 года</div>
                    <div class="blog-main-bot__timeread">Время чтения: 7 минут</div>
                    <div class="blog-main-bot__tags"><span>#управление</span></div>
                </div>
            </div>
            <div class="blog-main-img">
                <img src="/local/templates/rastudio/assets/images/blog1.png" alt="">
            </div>
        </div>
    </div>
    <div class="blog-content">
        <div class="blog-tags">
            <div class="blog-tags-item active">Все статьи</div>
            <div class="blog-tags-item" for="1">
                <input type="checkbox" id="1">
                <label for="1">#дизайн</label>
            </div>
            <div class="blog-tags-item" for="2">
                <input type="checkbox" id="2">
                <label for="2">#дизайн</label>
            </div>
            <div class="blog-tags-item" for="3">
                <input type="checkbox" id="3">
                <label for="3">#дизайн</label>
            </div>
        </div>
        <div class="blog-items">
            <div class="blog-items-item-wrap">
                <a href="#" class="blog-items-item">
                    <div class="blog-items-item__img" style="background-color: #F1CFCF">
                        <img src="/local/templates/rastudio/assets/images/blog2.png" alt="">
                    </div>
                    <div class="blog-items-item-info">
                        <div class="blog-items-item-info__title">Как менеджеру проектов управлять общением с клиентами</div>
                        <div class="blog-items-item-info-bot">
                            <div class="blog-items-item-info-bot-author">
                                <div class="blog-items-item-info-bot-author__img">
                                    <img src="/local/templates/rastudio/assets/images/blog-ava.jpg" alt="">
                                </div>
                                Илья Капустин
                            </div>
                            <div class="blog-items-item-info-bot__time">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="7.5" cy="7.5" r="7" stroke="black" stroke-opacity="0.75"/>
                                    <path d="M7.5 7.5V8H8V7.5H7.5ZM8 3C8 2.72386 7.77614 2.5 7.5 2.5C7.22386 2.5 7 2.72386 7 3H8ZM4.5 7C4.22386 7 4 7.22386 4 7.5C4 7.77614 4.22386 8 4.5 8V7ZM8 7.5V3H7V7.5H8ZM7.5 7H4.5V8H7.5V7Z" fill="black" fill-opacity="0.75"/>
                                </svg>
                                7 минут
                            </div>
                            <div class="blog-items-item-info-bot__looks">
                                <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.5 0.5C2.74592 0.5 1 5.375 1 5.375C1 5.375 2.74592 10.25 7.5 10.25C12.2541 10.25 14 5.375 14 5.375C14 5.375 12.2541 0.5 7.5 0.5Z" stroke="black" stroke-opacity="0.75" stroke-linejoin="round"/>
                                    <path d="M9.4375 5.375C9.4375 6.44505 8.57005 7.3125 7.5 7.3125C6.42995 7.3125 5.5625 6.44505 5.5625 5.375C5.5625 4.30495 6.42995 3.4375 7.5 3.4375C8.57005 3.4375 9.4375 4.30495 9.4375 5.375Z" stroke="black" stroke-opacity="0.75"/>
                                </svg>
                                123
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="blog-items-item-wrap">
                <a href="#" class="blog-items-item">
                    <div class="blog-items-item__img" style="background-color: #EEF1CF">
                        <img src="/local/templates/rastudio/assets/images/blog3.png" alt="">
                    </div>
                    <div class="blog-items-item-info">
                        <div class="blog-items-item-info__title">Как менеджеру проектов управлять общением с клиентами</div>
                        <div class="blog-items-item-info-bot">
                            <div class="blog-items-item-info-bot-author">
                                <div class="blog-items-item-info-bot-author__img">
                                    <img src="/local/templates/rastudio/assets/images/blog-ava.jpg" alt="">
                                </div>
                                Илья Капустин
                            </div>
                            <div class="blog-items-item-info-bot__time">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="7.5" cy="7.5" r="7" stroke="black" stroke-opacity="0.75"/>
                                    <path d="M7.5 7.5V8H8V7.5H7.5ZM8 3C8 2.72386 7.77614 2.5 7.5 2.5C7.22386 2.5 7 2.72386 7 3H8ZM4.5 7C4.22386 7 4 7.22386 4 7.5C4 7.77614 4.22386 8 4.5 8V7ZM8 7.5V3H7V7.5H8ZM7.5 7H4.5V8H7.5V7Z" fill="black" fill-opacity="0.75"/>
                                </svg>
                                7 минут
                            </div>
                            <div class="blog-items-item-info-bot__looks">
                                <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.5 0.5C2.74592 0.5 1 5.375 1 5.375C1 5.375 2.74592 10.25 7.5 10.25C12.2541 10.25 14 5.375 14 5.375C14 5.375 12.2541 0.5 7.5 0.5Z" stroke="black" stroke-opacity="0.75" stroke-linejoin="round"/>
                                    <path d="M9.4375 5.375C9.4375 6.44505 8.57005 7.3125 7.5 7.3125C6.42995 7.3125 5.5625 6.44505 5.5625 5.375C5.5625 4.30495 6.42995 3.4375 7.5 3.4375C8.57005 3.4375 9.4375 4.30495 9.4375 5.375Z" stroke="black" stroke-opacity="0.75"/>
                                </svg>
                                123
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="blog-items-item-wrap">
                <a href="#" class="blog-items-item">
                    <div class="blog-items-item__img" style="background-color: #CFD4F1">
                        <img src="/local/templates/rastudio/assets/images/blog4.png" alt="">
                    </div>
                    <div class="blog-items-item-info">
                        <div class="blog-items-item-info__title">Как менеджеру проектов управлять общением с клиентами</div>
                        <div class="blog-items-item-info-bot">
                            <div class="blog-items-item-info-bot-author">
                                <div class="blog-items-item-info-bot-author__img">
                                    <img src="/local/templates/rastudio/assets/images/blog-ava.jpg" alt="">
                                </div>
                                Илья Капустин
                            </div>
                            <div class="blog-items-item-info-bot__time">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="7.5" cy="7.5" r="7" stroke="black" stroke-opacity="0.75"/>
                                    <path d="M7.5 7.5V8H8V7.5H7.5ZM8 3C8 2.72386 7.77614 2.5 7.5 2.5C7.22386 2.5 7 2.72386 7 3H8ZM4.5 7C4.22386 7 4 7.22386 4 7.5C4 7.77614 4.22386 8 4.5 8V7ZM8 7.5V3H7V7.5H8ZM7.5 7H4.5V8H7.5V7Z" fill="black" fill-opacity="0.75"/>
                                </svg>
                                7 минут
                            </div>
                            <div class="blog-items-item-info-bot__looks">
                                <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.5 0.5C2.74592 0.5 1 5.375 1 5.375C1 5.375 2.74592 10.25 7.5 10.25C12.2541 10.25 14 5.375 14 5.375C14 5.375 12.2541 0.5 7.5 0.5Z" stroke="black" stroke-opacity="0.75" stroke-linejoin="round"/>
                                    <path d="M9.4375 5.375C9.4375 6.44505 8.57005 7.3125 7.5 7.3125C6.42995 7.3125 5.5625 6.44505 5.5625 5.375C5.5625 4.30495 6.42995 3.4375 7.5 3.4375C8.57005 3.4375 9.4375 4.30495 9.4375 5.375Z" stroke="black" stroke-opacity="0.75"/>
                                </svg>
                                123
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="blog-more">Показать еще</div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>