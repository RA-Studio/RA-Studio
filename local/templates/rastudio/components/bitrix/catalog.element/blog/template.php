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


$views =!empty($arResult['PROPERTIES']['UF_VIEW_COUNT']['VALUE'])?$arResult['PROPERTIES']['UF_VIEW_COUNT']['VALUE']:0;
//unset($_SESSION['VIEW'][$arResult['IBLOCK_ID']][$arResult['ID']]);
if(!in_array($arResult['ID'],$_SESSION['VIEW'][$arResult['IBLOCK_ID']])) {
    CIBlockElement::SetPropertyValuesEx($arResult['ID'], false, array("UF_VIEW_COUNT" => $arResult['PROPERTIES']['UF_VIEW_COUNT']['VALUE'] + 1));
    unset($_SESSION['VIEW'][$arResult['IBLOCK_ID']][$arResult['ID']]);
    $_SESSION['VIEW'][$arResult['IBLOCK_ID']][$arResult['ID']] = $arResult['ID'];
    $views++;
}
?><?if (!empty($arResult['PROPERTIES']['UF_DETAIL_PICTURE']['VALUE'])){?>
        <div class="blogpage-banner">
            <img src="<?=CFile::GetPath($arResult['PROPERTIES']['UF_DETAIL_PICTURE']['VALUE'])?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>">
        </div>
    <?}?>
    <div class="blogpage-content">
        <div class="blogpage-content-side">
            <div class="blogpage-content-side-info">
                <div class="blogpage-content-side-info__ava">
                    <img src="<?=CFile::GetPath($arResult['PROPERTIES']['UF_AUTHOR_PHOTO']['VALUE'])?>" alt="<?=$arResult['PROPERTIES']['UF_AUTHOR_NAME']['VALUE']?>">
                </div>
                <div>
                    <div class="blogpage-content-side-info__name"><?=$arResult['PROPERTIES']['UF_AUTHOR_NAME']['VALUE']?></div>
                    <div class="blogpage-content-side-info__date"><?=$arResult['PROPERTIES']['UF_AUTHOR_DESCRIPTION']['VALUE']['TEXT']?></div>
                </div>
                <div class="blogpage-content-side-info__time"><?=FormatDate("d F Y \г\о\д\а",MakeTimeStamp($arResult['ACTIVE_FROM']?$arResult['ACTIVE_FROM']:$arResult['DATE_CREATE']))?></div>
                <?if (!empty($arResult['PROPERTIES']['UF_TAGS']['VALUE'])){?>
                    <div class="blogpage-content-side-info__tags">
                        <?foreach ($arResult['PROPERTIES']['UF_TAGS']['VALUE'] as $tag){?>
                            <span><?=$tag?></span>
                        <?}?>
                    </div>
                <?}?>
            </div>
        </div>
        <div class="blogpage-content-main">
            <h1 class="title"><?=$arResult['NAME']?></h1>
            <?=$arResult['DETAIL_TEXT']?$arResult['DETAIL_TEXT']:""?>
            <div class="blogpage-content-main-info">
                <span class="blogpage-content-main-info__date"><?=FormatDate("d F Y \г\о\д\а",MakeTimeStamp($arResult['ACTIVE_FROM']?$arResult['ACTIVE_FROM']:$arResult['DATE_CREATE']))?></span>
                <?foreach ($arResult['PROPERTIES']['UF_TAGS']['VALUE'] as $tag){?>
                    <span><?=$tag?></span>
                <?}?>
            </div>
            <?if(!empty($arResult['PROPERTIES']['UF_QUESTION']['VALUE'])){?>
                <div class="blogpage-content-main-question">
                    <div class="blogpage-content-main-question-info">
                        <div class="blogpage-content-main-question-info__ava">
                            <img src="<?=CFile::GetPath($arResult['PROPERTIES']['UF_AUTHOR_PHOTO']['VALUE'])?>" alt="<?=$arResult['PROPERTIES']['UF_AUTHOR_NAME']['VALUE']?>">
                        </div>
                        <div class="blogpage-content-main-question-info-content">
                            <div class="blogpage-content-main-question-info-content-top">
                                <div class="blogpage-content-main-question-info-content-top__name"><?=$arResult['PROPERTIES']['UF_AUTHOR_NAME']['VALUE']?></div>
                                <div class="blogpage-content-main-question-info-content-top__span">Автор материала</div>
                            </div>
                            <div class="blogpage-content-main-question-info-content__title"><?=$arResult['PROPERTIES']['UF_QUESTION']['VALUE']?></div>
                        </div>
                    </div>
                    <?$APPLICATION->IncludeComponent(
                        "slam:easyform",
                        "blogCallBack",
                        Array(
                            "CATEGORY_MESSAGE_CLASS" => "",
                            "CATEGORY_MESSAGE_PLACEHOLDER" => "Мы ценим ваше мнение",
                            "CATEGORY_MESSAGE_TITLE" => "Сообщение",
                            "CATEGORY_MESSAGE_TYPE" => "textarea",
                            "CATEGORY_MESSAGE_VALUE" => "",
                            "CLEAR_FORM" => "N",
                            "COMPONENT_TEMPLATE" => "uniform",
                            "CREATE_SEND_MAIL" => "",
                            "DISPLAY_FIELDS" => array(0=>"MESSAGE",1=>"",),
                            "EMAIL_BCC" => "",
                            "EMAIL_FILE" => "N",
                            "EMAIL_TO" => "",
                            "ENABLE_SEND_MAIL" => "Y",
                            "ERROR_TEXT" => "Произошла ошибка. Сообщение не отправлено.",
                            "EVENT_MESSAGE_ID" => array(0=>"48",),
                            "FIELDS_ORDER" => "MESSAGE",
                            "FORM_AUTOCOMPLETE" => "Y",
                            "FORM_ID" => "FORM2",
                            "FORM_NAME" => "",
                            "FORM_SUBMIT_VALUE" => "Отправить",
                            "FORM_SUBMIT_VARNING" => "",
                            "HIDE_ASTERISK" => "Y",
                            "HIDE_FIELD_NAME" => "Y",
                            "MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы обратной связи",
                            "OK_TEXT" => "Ваше сообщение отправлено. Мы свяжемся с вами в течение 2х часов",
                            "REQUIRED_FIELDS" => array(0=>"MESSAGE",),
                            "SEND_AJAX" => "Y",
                            "SHOW_MODAL" => "N",
                            "USE_BOOTSRAP_CSS" => "N",
                            "USE_BOOTSRAP_JS" => "N",
                            "USE_CAPTCHA" => "N",
                            "USE_FORMVALIDATION_JS" => "N",
                            "USE_IBLOCK_WRITE" => "N",
                            "USE_JQUERY" => "N",
                            "USE_MODULE_VARNING" => "N",
                            "WIDTH_FORM" => "blogpage-content-main-question-main",
                            "_CALLBACKS" => "success_FORM2"
                        )
                    );?>
                </div>
            <?}?>
        </div>
        <div class="blogpage-content-side"></div>
    </div>
    <div class="case-bottom">
        <div class="case-bottom-content">
            <div class="case-bottom-content-col"><?
                $prevFilter = Array(
                    "IBLOCK_ID"=>$arResult['IBLOCK_ID'],
                    "ACTIVE"=>"Y",
                    "<ID"=>$arResult['ID'],
                );
                $res = CIBlockElement::GetList(Array("ID"=>"DESC"), $prevFilter);
                $res->SetUrlTemplates($arParams['DETAIL_URL']);
                if ($ar_fields = $res->GetNextElement()){
                    $item=$ar_fields->GetFields();
                    ?>
                    <a href="<?=$item['DETAIL_PAGE_URL']?>" class="case-bottom-content__back case-tooltip" title="<?=$item['NAME']?>">
                        <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 1L1 4.5L4 8" stroke="black" stroke-opacity="0.75"/>
                        </svg>
                        Назад
                    </a>
                <?}
                $nextFilter = Array(
                    "IBLOCK_ID"=>$arResult['IBLOCK_ID'],
                    "ACTIVE"=>"Y",
                    ">ID"=>$arResult['ID'],
                );
                $res = CIBlockElement::GetList(Array("ID"=>"ASC"), $nextFilter);
                $res->SetUrlTemplates($arParams['DETAIL_URL']);
                if ($ar_fields = $res->GetNextElement()){
                    $item=$ar_fields->GetFields();
                    ?>
                    <a href="<?=$item['DETAIL_PAGE_URL']?>" class="case-bottom-content__forward case-tooltip" title="<?=$item['NAME']?>">
                        Вперед
                        <svg width="5" height="9" viewBox="0 0 5 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L4 4.5L1 8" stroke="black" stroke-opacity="0.75"/>
                        </svg>
                    </a>
                <?}?>
            </div><?
            $word_count = count(explode(' ',strip_tags($arResult['DETAIL_TEXT'])));
            $words_per_minute = 160;
            $minutes = ceil($word_count / $words_per_minute);
            $str_minutes = ($minutes == 1) ? "мин." : "мин.";
            $time = "{$minutes} {$str_minutes}";?>
            <div class="case-bottom-content__time">Время чтения: <?=$time?></div>
            <div class="case-bottom-content-col"><?
                if($_POST['LIKE']=='Y'){
                    $GLOBALS['APPLICATION']->RestartBuffer();}
                $likes =!empty($arResult['PROPERTIES']['UF_LIKES']['VALUE'])?$arResult['PROPERTIES']['UF_LIKES']['VALUE']:0;
                if($_POST['LIKE']=='Y'){
                    $likes = !in_array($_POST['ID'],$_SESSION['LIKES'][$arResult['IBLOCK_ID']])?$likes+1:$likes-1;
                    if (!in_array($_POST['ID'],$_SESSION['LIKES'][$arResult['IBLOCK_ID']]) || empty($_SESSION['LIKES'][$arResult['IBLOCK_ID']])){//проверка лайкано ли
                        if(empty($_SESSION['LIKES'][$arResult['IBLOCK_ID']])){ //если не просматривалась и просмотренных нет
                            $_SESSION['LIKES'][$arResult['IBLOCK_ID']][$_POST['ID']] = $_POST['ID'];
                        }else { //если не просматривалась и просмотренные есть
                            $_SESSION['LIKES'][$arResult['IBLOCK_ID']][$_POST['ID']]=$_POST['ID'];
                        }
                        if(!empty($arResult['PROPERTIES']['UF_LIKES']['VALUE'])) {
                            CIBlockElement::SetPropertyValuesEx($_POST['ID'], false, array("UF_LIKES" => $arResult['PROPERTIES']['UF_LIKES']['VALUE'] + 1));
                        }else{
                            CIBlockElement::SetPropertyValuesEx($_POST['ID'], false, array("UF_LIKES" => 1));
                        }
                    }else{
                        unset($_SESSION['LIKES'][$arResult['IBLOCK_ID']][$_POST["ID"]]);
                        if(!empty($arResult['PROPERTIES']['UF_LIKES']['VALUE'])) {
                            CIBlockElement::SetPropertyValuesEx($_POST['ID'], false, array("UF_LIKES" => $arResult['PROPERTIES']['UF_LIKES']['VALUE'] - 1));
                        }else{
                            CIBlockElement::SetPropertyValuesEx($_POST['ID'], false, array("UF_LIKES" => 0));
                        }

                    }
                }
                ?><div data-nolink data-entity="like" data-id="<?=$arResult['ID']?>" class="case-bottom-content__like <?=array_key_exists($arResult['ID'],$_SESSION['LIKES'][$arResult['IBLOCK_ID']])?'active':''?>">
                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.07186 5.73684C1.8604 10.4737 8.96659 16 8.96659 16C8.96659 16 16.0719 10.4737 16.8613 5.73684C17.1209 4.17938 16.8613 1 12.914 1C10.506 1 8.96659 4.15789 8.96659 4.15789C8.96659 4.15789 7.38765 1 5.01923 1C1.07186 1 0.812577 4.17933 1.07186 5.73684Z" stroke="black" stroke-opacity="0.75"/>
                    </svg>
                    <?=$likes?>
                </div><?
            if($_POST['LIKE']=='Y'){
                die() ;
            }
            ?><div class="case-bottom-content__looks">
                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1C3.14883 1 1 7 1 7C1 7 3.14883 13 9 13C14.8512 13 17 7 17 7C17 7 14.8512 1 9 1Z" stroke="black" stroke-opacity="0.75" stroke-linejoin="round"></path>
                        <path d="M11.5 7C11.5 8.38071 10.3807 9.5 9 9.5C7.61929 9.5 6.5 8.38071 6.5 7C6.5 5.61929 7.61929 4.5 9 4.5C10.3807 4.5 11.5 5.61929 11.5 7Z" stroke="black" stroke-opacity="0.75"></path>
                    </svg>
                    <?=$views?>
                </div>
            </div>
        </div>
        <div class="case-bottom-progress">
            <span class="case-bottom-progress-bar"></span>
        </div>
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