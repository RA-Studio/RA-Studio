<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);


$templateLibrary = array('popup', 'fx');
$currencyList = '';

if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$templateData = array(
	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList,
	'ITEM' => array(
		'ID' => $arResult['ID'],
		'IBLOCK_ID' => $arResult['IBLOCK_ID'],
		'OFFERS_SELECTED' => $arResult['OFFERS_SELECTED'],
		'JS_OFFERS' => $arResult['JS_OFFERS']
	)
);
unset($currencyList, $templateLibrary);

$mainId = $this->GetEditAreaId($arResult['ID']);
$itemIds = array(
	'ID' => $mainId,
	'DISCOUNT_PERCENT_ID' => $mainId.'_dsc_pict',
	'STICKER_ID' => $mainId.'_sticker',
	'BIG_SLIDER_ID' => $mainId.'_big_slider',
	'BIG_IMG_CONT_ID' => $mainId.'_bigimg_cont',
	'SLIDER_CONT_ID' => $mainId.'_slider_cont',
	'OLD_PRICE_ID' => $mainId.'_old_price',
	'PRICE_ID' => $mainId.'_price',
	'DISCOUNT_PRICE_ID' => $mainId.'_price_discount',
	'PRICE_TOTAL' => $mainId.'_price_total',
	'SLIDER_CONT_OF_ID' => $mainId.'_slider_cont_',
	'QUANTITY_ID' => $mainId.'_quantity',
	'QUANTITY_DOWN_ID' => $mainId.'_quant_down',
	'QUANTITY_UP_ID' => $mainId.'_quant_up',
	'QUANTITY_MEASURE' => $mainId.'_quant_measure',
	'QUANTITY_LIMIT' => $mainId.'_quant_limit',
	'BUY_LINK' => $mainId.'_buy_link',
	'ADD_BASKET_LINK' => $mainId.'_add_basket_link',
	'BASKET_ACTIONS_ID' => $mainId.'_basket_actions',
	'NOT_AVAILABLE_MESS' => $mainId.'_not_avail',
	'COMPARE_LINK' => $mainId.'_compare_link',
	'TREE_ID' => $mainId.'_skudiv',
	'DISPLAY_PROP_DIV' => $mainId.'_sku_prop',
	'DISPLAY_MAIN_PROP_DIV' => $mainId.'_main_sku_prop',
	'OFFER_GROUP' => $mainId.'_set_group_',
	'BASKET_PROP_DIV' => $mainId.'_basket_prop',
	'SUBSCRIBE_LINK' => $mainId.'_subscribe',
	'TABS_ID' => $mainId.'_tabs',
	'TAB_CONTAINERS_ID' => $mainId.'_tab_containers',
	'SMALL_CARD_PANEL_ID' => $mainId.'_small_card_panel',
	'TABS_PANEL_ID' => $mainId.'_tabs_panel'
);
$obName = $templateData['JS_OBJ'] = 'ob'.preg_replace('/[^a-zA-Z0-9_]/', 'x', $mainId);
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
	: $arResult['NAME'];
$title = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE']
	: $arResult['NAME'];
$alt = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']
	: $arResult['NAME'];

$haveOffers = !empty($arResult['OFFERS']);
if ($haveOffers)
{
	$actualItem = isset($arResult['OFFERS'][$arResult['OFFERS_SELECTED']])
		? $arResult['OFFERS'][$arResult['OFFERS_SELECTED']]
		: reset($arResult['OFFERS']);
	$showSliderControls = false;

	foreach ($arResult['OFFERS'] as $offer)
	{
		if ($offer['MORE_PHOTO_COUNT'] > 1)
		{
			$showSliderControls = true;
			break;
		}
	}
}
else
{
	$actualItem = $arResult;
	$showSliderControls = $arResult['MORE_PHOTO_COUNT'] > 1;
}

$skuProps = array();
$price = $actualItem['ITEM_PRICES'][$actualItem['ITEM_PRICE_SELECTED']];
$measureRatio = $actualItem['ITEM_MEASURE_RATIOS'][$actualItem['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'];
$showDiscount = $price['PERCENT'] > 0;

$showDescription = !empty($arResult['PREVIEW_TEXT']) || !empty($arResult['DETAIL_TEXT']);
$showBuyBtn = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION']);
$buyButtonClassName = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showAddBtn = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION']);
$showButtonClassName = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showSubscribe = $arParams['PRODUCT_SUBSCRIPTION'] === 'Y' && ($arResult['PRODUCT']['SUBSCRIBE'] === 'Y' || $haveOffers);

$arParams['MESS_BTN_BUY'] = $arParams['MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCE_CATALOG_BUY');
$arParams['MESS_BTN_ADD_TO_BASKET'] = $arParams['MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCE_CATALOG_ADD');
$arParams['MESS_NOT_AVAILABLE'] = $arParams['MESS_NOT_AVAILABLE'] ?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE');
$arParams['MESS_BTN_COMPARE'] = $arParams['MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCE_CATALOG_COMPARE');
$arParams['MESS_PRICE_RANGES_TITLE'] = $arParams['MESS_PRICE_RANGES_TITLE'] ?: Loc::getMessage('CT_BCE_CATALOG_PRICE_RANGES_TITLE');
$arParams['MESS_DESCRIPTION_TAB'] = $arParams['MESS_DESCRIPTION_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_DESCRIPTION_TAB');
$arParams['MESS_PROPERTIES_TAB'] = $arParams['MESS_PROPERTIES_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_PROPERTIES_TAB');
$arParams['MESS_COMMENTS_TAB'] = $arParams['MESS_COMMENTS_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_COMMENTS_TAB');
$arParams['MESS_SHOW_MAX_QUANTITY'] = $arParams['MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCE_CATALOG_SHOW_MAX_QUANTITY');
$arParams['MESS_RELATIVE_QUANTITY_MANY'] = $arParams['MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['MESS_RELATIVE_QUANTITY_FEW'] = $arParams['MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_FEW');

$positionClassMap = array(
	'left' => 'product-item-label-left',
	'center' => 'product-item-label-center',
	'right' => 'product-item-label-right',
	'bottom' => 'product-item-label-bottom',
	'middle' => 'product-item-label-middle',
	'top' => 'product-item-label-top'
);

$discountPositionClass = 'product-item-label-big';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
{
	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
	{
		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}

$labelPositionClass = 'product-item-label-big';
if (!empty($arParams['LABEL_PROP_POSITION']))
{
	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
	{
		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
	}
}


?>

<?
$projects = [];
$tags = [];
foreach ($arResult['PROPERTIES']['UF_CASES']['VALUE'] as $project) {
    $arSelect = array("ID", "IBLOCK_ID", "NAME", "DETAIL_PAGE_URL", "PREVIEW_PICTURE", "PREVIEW_TEXT", "PROPERTY_*");
    $arFilter = array("IBLOCK_ID" => 9, "ID" => $project, "ACTIVE" => "Y");
    $res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
    while ($ob = $res->GetNextElement()) {
        $arFields = $ob->GetFields();
        $arFields['PROPERTIES'] = $ob->GetProperties();
        //$tags[$arFields['ID']] = $arFields['PROPERTIES']['UF_TAGS'];
        $tags= array_unique(array_merge($arFields['PROPERTIES']['UF_TAGS']['VALUE'],$tags));
        $projects[$arFields['ID']] = $arFields;
    }

}
    ?>
    <div class="blogpage services-page">
        <div class="services-page-top">
            <h1 class="services-page-top__title"><?=$APPLICATION->showTitle(false)?></h1>
            <?if (!empty($tags)){?>
                <div class="services-page-top-tags">
                    <?foreach ($tags as $tag){?>
                    <span><?=$tag?></span>
                    <?}?>
                </div>
            <?}?>

        </div>
        <div class="blogpage-content">
            <div class="blogpage-content-side">
                <div class="blogpage-content-side-info services-menu">
                    <?
                    $nav = CIBlockSection::GetNavChain(false, $arResult['IBLOCK_SECTION_ID']);
                    $arSectionPath = $nav->GetNext();
                    $APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "service",
                        array(
                            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                            "SECTION_ID" => $arSectionPath['ID'],
                            "SECTION_CODE" => $arSectionPath['CODE'],
                            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                            "CACHE_TIME" => $arParams["CACHE_TIME"],
                            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                            "COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
                            "TOP_DEPTH" => 1,//$arParams["SECTION_TOP_DEPTH"],
                            "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
                            "VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
                            "SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
                            "HIDE_SECTION_NAME" => "N",
                            "ADD_SECTIONS_CHAIN" => 'N'
                        ),
                        $component,
                        array("HIDE_ICONS" => "N")
                    );
                    ?>
                </div>
            </div>

            <div class="blogpage-content-main">
                <div class="blogpage-content-main__text">
                    <?=$arResult['PROPERTIES']['UF_SEO_TOP']['VALUE']['TEXT']?>
                </div>
                <div class="blogpage-content-main-prices">
                    <div class="blogpage-content-main-prices-col">
                        <div class="blogpage-content-main-prices-col__title"><?=$arResult['PROPERTIES']['UF_PRICE']['NAME']?></div>
                        <div class="blogpage-content-main-prices-col__value"><?=$arResult['PROPERTIES']['UF_PRICE']['VALUE']?></div>
                    </div>
                    <div class="blogpage-content-main-prices-col">
                        <div class="blogpage-content-main-prices-col__title"><?=$arResult['PROPERTIES']['UF_TIME']['NAME']?></div>
                        <div class="blogpage-content-main-prices-col__value"><?=$arResult['PROPERTIES']['UF_TIME']['VALUE']?></div>
                    </div>
                </div>
                <div class="blogpage-content-main__text">
                    <?=$arResult['PROPERTIES']['UF_TEXT_BEFORE_CASES']['VALUE']['TEXT']?>
                </div>
                <?if (!empty($projects)){?>
                <div class="blogpage-content-main-smallcases">
                    <?foreach ($projects as $project){?>
                        <a href="<?=$project['DETAIL_PAGE_URL']?>" class="blogpage-content-main-smallcases-item">
                            <div class="blogpage-content-main-smallcases-item__img" style="background-color: <?=$project['PROPERTIES']['UF_BACKGROUND']['VALUE']?>">
                                <img src="<?=CFile::GetPath($project['PREVIEW_PICTURE'])?>" alt="<?=$project['NAME']?>">
                            </div>
                            <div class="blogpage-content-main-smallcases-item__title"><?=$project['NAME']?></div>
                        </a>
                    <?}?>
                </div>
                <?}?>

                <?=$arResult['DETAIL_TEXT']?>
            </div>
            <div class="blogpage-content-side">
            </div>


        </div>
    <div class="main-project">
        <div class="main-project-content">
            <div class="main-project-content-left">
                <svg width="436" height="508" viewBox="0 0 436 508" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M217.783 0.84082L0.0407715 205.824V507.668H435.519V205.824L217.783 0.84082Z" fill="url(#paint0_linear)"></path>
                    <path d="M433.311 501.047H2.24792V205.333L217.783 4.51953L433.311 205.333V501.047Z" fill="white"></path>
                    <path d="M367.84 45.7119H67.7195V398.797H367.84V45.7119Z" fill="url(#paint0_linear)"></path>
                    <path d="M364.05 48.6562H71.5094V398.798H364.05V48.6562Z" fill="white"></path>
                    <path d="M2.24792 205.334L217.783 353.191L2.24792 501.048V205.334Z" fill="#F5F5F5"></path>
                    <path d="M433.311 205.334L217.783 353.191L433.311 501.048V205.334Z" fill="#F5F5F5"></path>
                    <path d="M2.24792 501.04L209.319 339.933C211.728 338.036 214.706 337.005 217.772 337.005C220.839 337.005 223.816 338.036 226.226 339.933L433.311 501.04H2.24792Z" fill="url(#paint0_linear)"></path>
                    <path d="M2.24792 501.04L209.319 346.971C211.762 345.153 214.727 344.172 217.772 344.172C220.818 344.172 223.782 345.153 226.226 346.971L433.311 501.04H2.24792Z" fill="white"></path>
                    <path d="M176.955 116.326H115.898V126.626H176.955V116.326Z" fill="#47E6B1"></path>
                    <path d="M319.662 143.548H115.898V153.848H319.662V143.548Z" fill="#F5F5F5"></path>
                    <path d="M319.662 161.197H115.898V171.497H319.662V161.197Z" fill="#F5F5F5"></path>
                    <path d="M319.662 178.854H115.898V189.155H319.662V178.854Z" fill="#F5F5F5"></path>
                    <path d="M319.662 196.505H115.898V206.805H319.662V196.505Z" fill="#F5F5F5"></path>
                    <path d="M208.583 214.163H115.898V224.463H208.583V214.163Z" fill="#F5F5F5"></path>
                    <path d="M319.662 214.163H226.976V224.463H319.662V214.163Z" fill="#6E1866"></path>
                    <defs>
                        <linearGradient id="paint0_linear" x1="189720" y1="350325" x2="189720" y2="4668.72" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#808080" stop-opacity="0.25"></stop>
                            <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"></stop>
                            <stop offset="1" stop-color="#808080" stop-opacity="0.1"></stop>
                        </linearGradient>
                    </defs>
                </svg>
                <svg width="216" height="172" viewBox="0 0 216 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M177.188 0.80211L0.92688 63.3232L39.3498 171.646L215.611 109.125L177.188 0.80211Z" fill="url(#paint0_linear)"></path>
                    <path d="M174.333 4.85582L4.04639 65.2578L39.9055 166.353L210.192 105.951L174.333 4.85582Z" fill="white"></path>
                    <g opacity="0.6">
                        <path opacity="0.6" d="M19.8321 86.3775L41.4952 78.6934L35.8086 62.6614L14.1454 70.3455L19.8321 86.3775Z" fill="#6E1866"></path>
                        <path opacity="0.6" d="M48.6643 111.278L131.857 81.7686L130.014 76.5716L46.8209 106.081L48.6643 111.278Z" fill="#6E1866"></path>
                        <path opacity="0.6" d="M75.1905 114.544L135.852 93.0273L134.622 89.5604L73.9608 111.077L75.1905 114.544Z" fill="#6E1866"></path>
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear" x1="-1912.05" y1="28380.1" x2="-7854.55" y2="11626.9" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#808080" stop-opacity="0.25"></stop>
                            <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"></stop>
                            <stop offset="1" stop-color="#808080" stop-opacity="0.1"></stop>
                        </linearGradient>
                    </defs>
                </svg>
                <svg width="207" height="149" viewBox="0 0 207 149" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.6">
                        <path d="M22.5164 -0.000646602L0.546265 112.815L184.119 148.565L206.089 35.7487L22.5164 -0.000646602Z" fill="url(#paint0_linear)"></path>
                        <path d="M24.2189 3.24989L3.71484 108.538L181.065 143.076L201.569 37.7875L24.2189 3.24989Z" fill="white"></path>
                        <path opacity="0.6" d="M27.0757 29.4539L49.6375 33.8477L52.8891 17.1506L30.3273 12.7569L27.0757 29.4539Z" fill="#F55F44"></path>
                        <path opacity="0.6" d="M39.2545 65.5536L125.898 82.4268L126.952 77.0143L40.3085 60.1411L39.2545 65.5536Z" fill="#F55F44"></path>
                        <path opacity="0.6" d="M60.4392 81.8608L123.616 94.1641L124.32 90.5533L61.1424 78.25L60.4392 81.8608Z" fill="#F55F44"></path>
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear" x1="13519.5" y1="32738.5" x2="19048.5" y2="4347.22" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#808080" stop-opacity="0.25"></stop>
                            <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"></stop>
                            <stop offset="1" stop-color="#808080" stop-opacity="0.1"></stop>
                        </linearGradient>
                    </defs>
                </svg>
                <svg width="213" height="164" viewBox="0 0 213 164" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M179.226 0.0341915L0 53.4639L32.8357 163.609L212.062 110.179L179.226 0.0341915Z" fill="url(#paint0_linear)"></path>
                    <path d="M176.164 3.92135L3.01233 55.54L33.657 158.336L206.808 106.717L176.164 3.92135Z" fill="white"></path>
                    <g opacity="0.6">
                        <path opacity="0.6" d="M17.7551 77.3997L39.7827 70.833L34.923 54.5313L12.8954 61.098L17.7551 77.3997Z" fill="#F55F44"></path>
                        <path opacity="0.6" d="M45.2783 103.73L129.871 78.5117L128.295 73.2274L43.703 98.4454L45.2783 103.73Z" fill="#F55F44"></path>
                        <path opacity="0.6" d="M71.605 108.348L133.287 89.96L132.236 86.4347L70.5541 104.823L71.605 108.348Z" fill="#F55F44"></path>
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear" x1="122.449" y1="136.894" x2="89.6131" y2="26.749" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#808080" stop-opacity="0.25"></stop>
                            <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"></stop>
                            <stop offset="1" stop-color="#808080" stop-opacity="0.1"></stop>
                        </linearGradient>
                    </defs>
                </svg>
                <svg width="181" height="219" viewBox="0 0 181 219" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M105.675 0.748932L0.232544 46.4873L74.6572 218.062L180.1 172.323L105.675 0.748932Z" fill="url(#paint0_linear)"></path>
                    <path d="M103.954 3.99232L5.54761 46.6787L77.4497 212.438L175.856 169.751L103.954 3.99232Z" fill="white"></path>
                    <g opacity="0.6">
                        <path opacity="0.6" d="M83.9487 21.2068L93.0958 42.2939L108.702 35.5246L99.5545 14.4374L83.9487 21.2068Z" fill="#47E6B1"></path>
                        <path opacity="0.6" d="M61.0787 51.6717L96.2061 132.652L101.265 130.458L66.1374 49.4773L61.0787 51.6717Z" fill="#47E6B1"></path>
                        <path opacity="0.6" d="M59.6288 78.3561L85.2424 137.404L88.6172 135.94L63.0036 76.8922L59.6288 78.3561Z" fill="#47E6B1"></path>
                    </g>
                    <defs>
                        <linearGradient id="paint0_linear" x1="-67277.2" y1="59310.1" x2="-40741.5" y2="47799.5" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#808080" stop-opacity="0.25"></stop>
                            <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"></stop>
                            <stop offset="1" stop-color="#808080" stop-opacity="0.1"></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="main-project-content-right">
                <div class="main-project-content-right__title">Оставьте заявку</div>
                <div class="main-project-content-right__subtitle">Или свяжитесь с нами по телефону<br> <a href="tel:<?$APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH."/include/phone.php",
                        array(),
                        array(
                            "MODE" => "html",
                            "SHOW_BORDER" => false
                        )
                    );?>"><?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_TEMPLATE_PATH."/include/phone.php",
                                "EDIT_TEMPLATE" => ""
                            ),
                            false
                        );?></a></div>
                <?$APPLICATION->IncludeComponent(
                    "slam:easyform",
                    "uniform",
                    array(
                        "COMPONENT_TEMPLATE" => "uniform",
                        "FORM_ID" => "ProjectCallBackForm",
                        "FORM_NAME" => "",
                        "WIDTH_FORM" => "",
                        "DISPLAY_FIELDS" => array(
                            0 => "TITLE",
                            1 => "EMAIL",
                            2 => "PHONE",
                            3 => "MESSAGE",
                            4 => "COMPANY",
                            5 => "DIRECTION",
                            6 => "",
                        ),
                        "REQUIRED_FIELDS" => array(
                            0 => "TITLE",
                            1 => "EMAIL",
                            2 => "PHONE",
                            3 => "MESSAGE",
                            4 => "COMPANY",
                        ),
                        "FIELDS_ORDER" => "DIRECTION,TITLE,EMAIL,PHONE,COMPANY,MESSAGE",
                        "FORM_AUTOCOMPLETE" => "Y",
                        "HIDE_FIELD_NAME" => "N",
                        "HIDE_ASTERISK" => "Y",
                        "FORM_SUBMIT_VALUE" => "Отправить",
                        "SEND_AJAX" => "Y",
                        "SHOW_MODAL" => "N",
                        "_CALLBACKS" => "success_SendForm",
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
                        "FORM_SUBMIT_VARNING" => "Нажимая на кнопку \"#BUTTON#\", вы даете согласие на обработку <a target=\"_blank\" href=\"/privacy-policy/\">персональных данных</a>",
                        "CATEGORY_FILE_FILE_EXTENSION" => "doc, docx, xls, xlsx, txt, rtf, pdf, png, jpeg, jpg, gif",
                        "CATEGORY_FILE_FILE_MAX_SIZE" => "20971520",
                        "CATEGORY_FILE_DROPZONE_INCLUDE" => "Y",
                        "CATEGORY_TITLE_CLASS" => "general-itemInput_half",
                        "CATEGORY_PHONE_CLASS" => "general-itemInput_half",
                        "CATEGORY_MESSAGE_CLASS" => "",
                        "COMPOSITE_FRAME_MODE" => "A",
                        "COMPOSITE_FRAME_TYPE" => "AUTO",
                        "CLEAR_FORM" => "N",
                        "TITLE_SHOW_MODAL" => "Спасибо!",
                        "CATEGORY_EMAIL_CLASS" => "general-itemInput_half",
                        "CATEGORY_COMPANY_TITLE" => "Компания",
                        "CATEGORY_COMPANY_TYPE" => "text",
                        "CATEGORY_COMPANY_PLACEHOLDER" => "",
                        "CATEGORY_COMPANY_CLASS" => "general-itemInput_half",
                        "CATEGORY_COMPANY_VALUE" => "",
                        "CATEGORY_DIRECTION_TITLE" => "Направление разработки",
                        "CATEGORY_DIRECTION_TYPE" => "radio",
                        "CATEGORY_DIRECTION_CLASS" => "general-itemInput",
                        "CATEGORY_DIRECTION_VALUE" => array(
                            0 => "Интернет-магазин",
                            1 => "Лендинг",
                            2 => "Сервис",
                            3 => "",
                        ),
                        "CATEGORY_DIRECTION_SHOW_INLINE" => "Y"
                    ),
                    false
                );?>
            </div>
        </div>
    </div>
<?/*
        <div class="case-bottom">
            <div class="case-bottom-content">
                <div class="case-bottom-content-col">
                    <a href="/projects/gk-sails/" class="case-bottom-content__forward case-tooltip tooltipstered">
                        Вперед
                        <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L4 4.5L1 8" stroke="black" stroke-opacity="0.75"></path>
                        </svg>
                    </a>
                </div>
                <div class="case-bottom-content__time">Время чтения: 7 минут</div>
                <div class="case-bottom-content-col">
                    <div data-entity="like" data-id="18" class="case-bottom-content__like ">
                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.07186 5.73684C1.8604 10.4737 8.96659 16 8.96659 16C8.96659 16 16.0719 10.4737 16.8613 5.73684C17.1209 4.17938 16.8613 1 12.914 1C10.506 1 8.96659 4.15789 8.96659 4.15789C8.96659 4.15789 7.38765 1 5.01923 1C1.07186 1 0.812577 4.17933 1.07186 5.73684Z" stroke="black" stroke-opacity="0.75"></path>
                        </svg>
                        11
                    </div>
                    <div class="case-bottom-content__looks">
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 1C3.14883 1 1 7 1 7C1 7 3.14883 13 9 13C14.8512 13 17 7 17 7C17 7 14.8512 1 9 1Z" stroke="black" stroke-opacity="0.75" stroke-linejoin="round"></path>
                            <path d="M11.5 7C11.5 8.38071 10.3807 9.5 9 9.5C7.61929 9.5 6.5 8.38071 6.5 7C6.5 5.61929 7.61929 4.5 9 4.5C10.3807 4.5 11.5 5.61929 11.5 7Z" stroke="black" stroke-opacity="0.75"></path>
                        </svg>
                        112
                    </div>
                </div>
            </div>
            <div class="case-bottom-progress">
                <span class="case-bottom-progress-bar" style="width: 75.3998%;"></span>
            </div>
        </div>
        */?>
    </div>

<script>
	BX.message({
		ECONOMY_INFO_MESSAGE: '<?=GetMessageJS('CT_BCE_CATALOG_ECONOMY_INFO2')?>',
		TITLE_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_ERROR')?>',
		TITLE_BASKET_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_BASKET_PROPS')?>',
		BASKET_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_BASKET_UNKNOWN_ERROR')?>',
		BTN_SEND_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_SEND_PROPS')?>',
		BTN_MESSAGE_BASKET_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_BASKET_REDIRECT')?>',
		BTN_MESSAGE_CLOSE: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE')?>',
		BTN_MESSAGE_CLOSE_POPUP: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE_POPUP')?>',
		TITLE_SUCCESSFUL: '<?=GetMessageJS('CT_BCE_CATALOG_ADD_TO_BASKET_OK')?>',
		COMPARE_MESSAGE_OK: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_OK')?>',
		COMPARE_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_UNKNOWN_ERROR')?>',
		COMPARE_TITLE: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_TITLE')?>',
		BTN_MESSAGE_COMPARE_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT')?>',
		PRODUCT_GIFT_LABEL: '<?=GetMessageJS('CT_BCE_CATALOG_PRODUCT_GIFT_LABEL')?>',
		PRICE_TOTAL_PREFIX: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_PRICE_TOTAL_PREFIX')?>',
		RELATIVE_QUANTITY_MANY: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_MANY'])?>',
		RELATIVE_QUANTITY_FEW: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_FEW'])?>',
		SITE_ID: '<?=CUtil::JSEscape($component->getSiteId())?>'
	});

	var <?=$obName?> = new JCCatalogElement(<?=CUtil::PhpToJSObject($jsParams, false, true)?>);
</script>
<?
unset($actualItem, $itemIds, $jsParams);