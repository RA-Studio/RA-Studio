<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

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

use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$this->setFrameMode(true);


if (isset($arParams['USE_COMMON_SETTINGS_BASKET_POPUP']) && $arParams['USE_COMMON_SETTINGS_BASKET_POPUP'] == 'Y')
{
	$basketAction = (isset($arParams['COMMON_ADD_TO_BASKET_ACTION']) ? array($arParams['COMMON_ADD_TO_BASKET_ACTION']) : array());
}
else
{
	$basketAction = (isset($arParams['DETAIL_ADD_TO_BASKET_ACTION']) ? $arParams['DETAIL_ADD_TO_BASKET_ACTION'] : array());
}

$isSidebar = ($arParams['SIDEBAR_DETAIL_SHOW'] == 'Y' && !empty($arParams['SIDEBAR_PATH']));
?>
<div class="case">
		<?
		if ($arParams["USE_COMPARE"] === "Y")
		{
			$APPLICATION->IncludeComponent(
				"bitrix:catalog.compare.list",
				"",
				array(
					"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
					"IBLOCK_ID" => $arParams["IBLOCK_ID"],
					"NAME" => $arParams["COMPARE_NAME"],
					"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
					"COMPARE_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["compare"],
					"ACTION_VARIABLE" => (!empty($arParams["ACTION_VARIABLE"]) ? $arParams["ACTION_VARIABLE"] : "action"),
					"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
					'POSITION_FIXED' => isset($arParams['COMPARE_POSITION_FIXED']) ? $arParams['COMPARE_POSITION_FIXED'] : '',
					'POSITION' => isset($arParams['COMPARE_POSITION']) ? $arParams['COMPARE_POSITION'] : ''
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
		}

		$componentElementParams = array(
			'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
			'IBLOCK_ID' => $arParams['IBLOCK_ID'],
			'PROPERTY_CODE' => (isset($arParams['DETAIL_PROPERTY_CODE']) ? $arParams['DETAIL_PROPERTY_CODE'] : []),
			'META_KEYWORDS' => $arParams['DETAIL_META_KEYWORDS'],
			'META_DESCRIPTION' => $arParams['DETAIL_META_DESCRIPTION'],
			'BROWSER_TITLE' => $arParams['DETAIL_BROWSER_TITLE'],
			'SET_CANONICAL_URL' => $arParams['DETAIL_SET_CANONICAL_URL'],
			'BASKET_URL' => $arParams['BASKET_URL'],
			'ACTION_VARIABLE' => $arParams['ACTION_VARIABLE'],
			'PRODUCT_ID_VARIABLE' => $arParams['PRODUCT_ID_VARIABLE'],
			'SECTION_ID_VARIABLE' => $arParams['SECTION_ID_VARIABLE'],
			'CHECK_SECTION_ID_VARIABLE' => (isset($arParams['DETAIL_CHECK_SECTION_ID_VARIABLE']) ? $arParams['DETAIL_CHECK_SECTION_ID_VARIABLE'] : ''),
			'PRODUCT_QUANTITY_VARIABLE' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
			'PRODUCT_PROPS_VARIABLE' => $arParams['PRODUCT_PROPS_VARIABLE'],
			'CACHE_TYPE' => "N",//$arParams['CACHE_TYPE'],
			'CACHE_TIME' => $arParams['CACHE_TIME'],
			'CACHE_GROUPS' => $arParams['CACHE_GROUPS'],
			'SET_TITLE' => $arParams['SET_TITLE'],
			'SET_LAST_MODIFIED' => $arParams['SET_LAST_MODIFIED'],
			'MESSAGE_404' => $arParams['~MESSAGE_404'],
			'SET_STATUS_404' => $arParams['SET_STATUS_404'],
			'SHOW_404' => $arParams['SHOW_404'],
			'FILE_404' => $arParams['FILE_404'],
			'PRICE_CODE' => $arParams['~PRICE_CODE'],
			'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
			'SHOW_PRICE_COUNT' => $arParams['SHOW_PRICE_COUNT'],
			'PRICE_VAT_INCLUDE' => $arParams['PRICE_VAT_INCLUDE'],
			'PRICE_VAT_SHOW_VALUE' => $arParams['PRICE_VAT_SHOW_VALUE'],
			'USE_PRODUCT_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
			'PRODUCT_PROPERTIES' => (isset($arParams['PRODUCT_PROPERTIES']) ? $arParams['PRODUCT_PROPERTIES'] : []),
			'ADD_PROPERTIES_TO_BASKET' => (isset($arParams['ADD_PROPERTIES_TO_BASKET']) ? $arParams['ADD_PROPERTIES_TO_BASKET'] : ''),
			'PARTIAL_PRODUCT_PROPERTIES' => (isset($arParams['PARTIAL_PRODUCT_PROPERTIES']) ? $arParams['PARTIAL_PRODUCT_PROPERTIES'] : ''),
			'LINK_IBLOCK_TYPE' => $arParams['LINK_IBLOCK_TYPE'],
			'LINK_IBLOCK_ID' => $arParams['LINK_IBLOCK_ID'],
			'LINK_PROPERTY_SID' => $arParams['LINK_PROPERTY_SID'],
			'LINK_ELEMENTS_URL' => $arParams['LINK_ELEMENTS_URL'],

			'OFFERS_CART_PROPERTIES' => (isset($arParams['OFFERS_CART_PROPERTIES']) ? $arParams['OFFERS_CART_PROPERTIES'] : []),
			'OFFERS_FIELD_CODE' => $arParams['DETAIL_OFFERS_FIELD_CODE'],
			'OFFERS_PROPERTY_CODE' => (isset($arParams['DETAIL_OFFERS_PROPERTY_CODE']) ? $arParams['DETAIL_OFFERS_PROPERTY_CODE'] : []),
			'OFFERS_SORT_FIELD' => $arParams['OFFERS_SORT_FIELD'],
			'OFFERS_SORT_ORDER' => $arParams['OFFERS_SORT_ORDER'],
			'OFFERS_SORT_FIELD2' => $arParams['OFFERS_SORT_FIELD2'],
			'OFFERS_SORT_ORDER2' => $arParams['OFFERS_SORT_ORDER2'],

			'ELEMENT_ID' => $arResult['VARIABLES']['ELEMENT_ID'],
			'ELEMENT_CODE' => $arResult['VARIABLES']['ELEMENT_CODE'],
			'SECTION_ID' => $arResult['VARIABLES']['SECTION_ID'],
			'SECTION_CODE' => $arResult['VARIABLES']['SECTION_CODE'],
			'SECTION_URL' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['section'],
			'DETAIL_URL' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['element'],
			'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
			'CURRENCY_ID' => $arParams['CURRENCY_ID'],
			'HIDE_NOT_AVAILABLE' => $arParams['HIDE_NOT_AVAILABLE'],
			'HIDE_NOT_AVAILABLE_OFFERS' => $arParams['HIDE_NOT_AVAILABLE_OFFERS'],
			'USE_ELEMENT_COUNTER' => $arParams['USE_ELEMENT_COUNTER'],
			'SHOW_DEACTIVATED' => $arParams['SHOW_DEACTIVATED'],
			'USE_MAIN_ELEMENT_SECTION' => $arParams['USE_MAIN_ELEMENT_SECTION'],
			'STRICT_SECTION_CHECK' => (isset($arParams['DETAIL_STRICT_SECTION_CHECK']) ? $arParams['DETAIL_STRICT_SECTION_CHECK'] : ''),
			'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
			'LABEL_PROP' => $arParams['LABEL_PROP'],
			'LABEL_PROP_MOBILE' => $arParams['LABEL_PROP_MOBILE'],
			'LABEL_PROP_POSITION' => $arParams['LABEL_PROP_POSITION'],
			'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
			'OFFER_TREE_PROPS' => (isset($arParams['OFFER_TREE_PROPS']) ? $arParams['OFFER_TREE_PROPS'] : []),
			'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
			'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
			'DISCOUNT_PERCENT_POSITION' => (isset($arParams['DISCOUNT_PERCENT_POSITION']) ? $arParams['DISCOUNT_PERCENT_POSITION'] : ''),
			'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
			'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
			'MESS_SHOW_MAX_QUANTITY' => (isset($arParams['~MESS_SHOW_MAX_QUANTITY']) ? $arParams['~MESS_SHOW_MAX_QUANTITY'] : ''),
			'RELATIVE_QUANTITY_FACTOR' => (isset($arParams['RELATIVE_QUANTITY_FACTOR']) ? $arParams['RELATIVE_QUANTITY_FACTOR'] : ''),
			'MESS_RELATIVE_QUANTITY_MANY' => (isset($arParams['~MESS_RELATIVE_QUANTITY_MANY']) ? $arParams['~MESS_RELATIVE_QUANTITY_MANY'] : ''),
			'MESS_RELATIVE_QUANTITY_FEW' => (isset($arParams['~MESS_RELATIVE_QUANTITY_FEW']) ? $arParams['~MESS_RELATIVE_QUANTITY_FEW'] : ''),
			'MESS_BTN_BUY' => (isset($arParams['~MESS_BTN_BUY']) ? $arParams['~MESS_BTN_BUY'] : ''),
			'MESS_BTN_ADD_TO_BASKET' => (isset($arParams['~MESS_BTN_ADD_TO_BASKET']) ? $arParams['~MESS_BTN_ADD_TO_BASKET'] : ''),
			'MESS_BTN_SUBSCRIBE' => (isset($arParams['~MESS_BTN_SUBSCRIBE']) ? $arParams['~MESS_BTN_SUBSCRIBE'] : ''),
			'MESS_BTN_DETAIL' => (isset($arParams['~MESS_BTN_DETAIL']) ? $arParams['~MESS_BTN_DETAIL'] : ''),
			'MESS_NOT_AVAILABLE' => (isset($arParams['~MESS_NOT_AVAILABLE']) ? $arParams['~MESS_NOT_AVAILABLE'] : ''),
			'MESS_BTN_COMPARE' => (isset($arParams['~MESS_BTN_COMPARE']) ? $arParams['~MESS_BTN_COMPARE'] : ''),
			'MESS_PRICE_RANGES_TITLE' => (isset($arParams['~MESS_PRICE_RANGES_TITLE']) ? $arParams['~MESS_PRICE_RANGES_TITLE'] : ''),
			'MESS_DESCRIPTION_TAB' => (isset($arParams['~MESS_DESCRIPTION_TAB']) ? $arParams['~MESS_DESCRIPTION_TAB'] : ''),
			'MESS_PROPERTIES_TAB' => (isset($arParams['~MESS_PROPERTIES_TAB']) ? $arParams['~MESS_PROPERTIES_TAB'] : ''),
			'MESS_COMMENTS_TAB' => (isset($arParams['~MESS_COMMENTS_TAB']) ? $arParams['~MESS_COMMENTS_TAB'] : ''),
			'MAIN_BLOCK_PROPERTY_CODE' => (isset($arParams['DETAIL_MAIN_BLOCK_PROPERTY_CODE']) ? $arParams['DETAIL_MAIN_BLOCK_PROPERTY_CODE'] : ''),
			'MAIN_BLOCK_OFFERS_PROPERTY_CODE' => (isset($arParams['DETAIL_MAIN_BLOCK_OFFERS_PROPERTY_CODE']) ? $arParams['DETAIL_MAIN_BLOCK_OFFERS_PROPERTY_CODE'] : ''),
			'USE_VOTE_RATING' => $arParams['DETAIL_USE_VOTE_RATING'],
			'VOTE_DISPLAY_AS_RATING' => (isset($arParams['DETAIL_VOTE_DISPLAY_AS_RATING']) ? $arParams['DETAIL_VOTE_DISPLAY_AS_RATING'] : ''),
			'USE_COMMENTS' => $arParams['DETAIL_USE_COMMENTS'],
			'BLOG_USE' => (isset($arParams['DETAIL_BLOG_USE']) ? $arParams['DETAIL_BLOG_USE'] : ''),
			'BLOG_URL' => (isset($arParams['DETAIL_BLOG_URL']) ? $arParams['DETAIL_BLOG_URL'] : ''),
			'BLOG_EMAIL_NOTIFY' => (isset($arParams['DETAIL_BLOG_EMAIL_NOTIFY']) ? $arParams['DETAIL_BLOG_EMAIL_NOTIFY'] : ''),
			'VK_USE' => (isset($arParams['DETAIL_VK_USE']) ? $arParams['DETAIL_VK_USE'] : ''),
			'VK_API_ID' => (isset($arParams['DETAIL_VK_API_ID']) ? $arParams['DETAIL_VK_API_ID'] : 'API_ID'),
			'FB_USE' => (isset($arParams['DETAIL_FB_USE']) ? $arParams['DETAIL_FB_USE'] : ''),
			'FB_APP_ID' => (isset($arParams['DETAIL_FB_APP_ID']) ? $arParams['DETAIL_FB_APP_ID'] : ''),
			'BRAND_USE' => (isset($arParams['DETAIL_BRAND_USE']) ? $arParams['DETAIL_BRAND_USE'] : 'N'),
			'BRAND_PROP_CODE' => (isset($arParams['DETAIL_BRAND_PROP_CODE']) ? $arParams['DETAIL_BRAND_PROP_CODE'] : ''),
			'DISPLAY_NAME' => (isset($arParams['DETAIL_DISPLAY_NAME']) ? $arParams['DETAIL_DISPLAY_NAME'] : ''),
			'IMAGE_RESOLUTION' => (isset($arParams['DETAIL_IMAGE_RESOLUTION']) ? $arParams['DETAIL_IMAGE_RESOLUTION'] : ''),
			'PRODUCT_INFO_BLOCK_ORDER' => (isset($arParams['DETAIL_PRODUCT_INFO_BLOCK_ORDER']) ? $arParams['DETAIL_PRODUCT_INFO_BLOCK_ORDER'] : ''),
			'PRODUCT_PAY_BLOCK_ORDER' => (isset($arParams['DETAIL_PRODUCT_PAY_BLOCK_ORDER']) ? $arParams['DETAIL_PRODUCT_PAY_BLOCK_ORDER'] : ''),
			'ADD_DETAIL_TO_SLIDER' => (isset($arParams['DETAIL_ADD_DETAIL_TO_SLIDER']) ? $arParams['DETAIL_ADD_DETAIL_TO_SLIDER'] : ''),
			'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
			'ADD_SECTIONS_CHAIN' => (isset($arParams['ADD_SECTIONS_CHAIN']) ? $arParams['ADD_SECTIONS_CHAIN'] : ''),
			'ADD_ELEMENT_CHAIN' => (isset($arParams['ADD_ELEMENT_CHAIN']) ? $arParams['ADD_ELEMENT_CHAIN'] : ''),
			'DISPLAY_PREVIEW_TEXT_MODE' => (isset($arParams['DETAIL_DISPLAY_PREVIEW_TEXT_MODE']) ? $arParams['DETAIL_DISPLAY_PREVIEW_TEXT_MODE'] : ''),
			'DETAIL_PICTURE_MODE' => (isset($arParams['DETAIL_DETAIL_PICTURE_MODE']) ? $arParams['DETAIL_DETAIL_PICTURE_MODE'] : array()),
			'ADD_TO_BASKET_ACTION' => $basketAction,
			'ADD_TO_BASKET_ACTION_PRIMARY' => (isset($arParams['DETAIL_ADD_TO_BASKET_ACTION_PRIMARY']) ? $arParams['DETAIL_ADD_TO_BASKET_ACTION_PRIMARY'] : null),
			'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
			'DISPLAY_COMPARE' => (isset($arParams['USE_COMPARE']) ? $arParams['USE_COMPARE'] : ''),
			'COMPARE_PATH' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['compare'],
			'USE_COMPARE_LIST' => 'Y',
			'BACKGROUND_IMAGE' => (isset($arParams['DETAIL_BACKGROUND_IMAGE']) ? $arParams['DETAIL_BACKGROUND_IMAGE'] : ''),
			'COMPATIBLE_MODE' => (isset($arParams['COMPATIBLE_MODE']) ? $arParams['COMPATIBLE_MODE'] : ''),
			'DISABLE_INIT_JS_IN_COMPONENT' => (isset($arParams['DISABLE_INIT_JS_IN_COMPONENT']) ? $arParams['DISABLE_INIT_JS_IN_COMPONENT'] : ''),
			'SET_VIEWED_IN_COMPONENT' => (isset($arParams['DETAIL_SET_VIEWED_IN_COMPONENT']) ? $arParams['DETAIL_SET_VIEWED_IN_COMPONENT'] : ''),
			'SHOW_SLIDER' => (isset($arParams['DETAIL_SHOW_SLIDER']) ? $arParams['DETAIL_SHOW_SLIDER'] : ''),
			'SLIDER_INTERVAL' => (isset($arParams['DETAIL_SLIDER_INTERVAL']) ? $arParams['DETAIL_SLIDER_INTERVAL'] : ''),
			'SLIDER_PROGRESS' => (isset($arParams['DETAIL_SLIDER_PROGRESS']) ? $arParams['DETAIL_SLIDER_PROGRESS'] : ''),
			'USE_ENHANCED_ECOMMERCE' => (isset($arParams['USE_ENHANCED_ECOMMERCE']) ? $arParams['USE_ENHANCED_ECOMMERCE'] : ''),
			'DATA_LAYER_NAME' => (isset($arParams['DATA_LAYER_NAME']) ? $arParams['DATA_LAYER_NAME'] : ''),
			'BRAND_PROPERTY' => (isset($arParams['BRAND_PROPERTY']) ? $arParams['BRAND_PROPERTY'] : ''),

			'USE_GIFTS_DETAIL' => $arParams['USE_GIFTS_DETAIL']?: 'Y',
			'USE_GIFTS_MAIN_PR_SECTION_LIST' => $arParams['USE_GIFTS_MAIN_PR_SECTION_LIST']?: 'Y',
			'GIFTS_SHOW_DISCOUNT_PERCENT' => $arParams['GIFTS_SHOW_DISCOUNT_PERCENT'],
			'GIFTS_SHOW_OLD_PRICE' => $arParams['GIFTS_SHOW_OLD_PRICE'],
			'GIFTS_DETAIL_PAGE_ELEMENT_COUNT' => $arParams['GIFTS_DETAIL_PAGE_ELEMENT_COUNT'],
			'GIFTS_DETAIL_HIDE_BLOCK_TITLE' => $arParams['GIFTS_DETAIL_HIDE_BLOCK_TITLE'],
			'GIFTS_DETAIL_TEXT_LABEL_GIFT' => $arParams['GIFTS_DETAIL_TEXT_LABEL_GIFT'],
			'GIFTS_DETAIL_BLOCK_TITLE' => $arParams['GIFTS_DETAIL_BLOCK_TITLE'],
			'GIFTS_SHOW_NAME' => $arParams['GIFTS_SHOW_NAME'],
			'GIFTS_SHOW_IMAGE' => $arParams['GIFTS_SHOW_IMAGE'],
			'GIFTS_MESS_BTN_BUY' => $arParams['~GIFTS_MESS_BTN_BUY'],
			'GIFTS_PRODUCT_BLOCKS_ORDER' => $arParams['LIST_PRODUCT_BLOCKS_ORDER'],
			'GIFTS_SHOW_SLIDER' => $arParams['LIST_SHOW_SLIDER'],
			'GIFTS_SLIDER_INTERVAL' => isset($arParams['LIST_SLIDER_INTERVAL']) ? $arParams['LIST_SLIDER_INTERVAL'] : '',
			'GIFTS_SLIDER_PROGRESS' => isset($arParams['LIST_SLIDER_PROGRESS']) ? $arParams['LIST_SLIDER_PROGRESS'] : '',

			'GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT' => $arParams['GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT'],
			'GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE' => $arParams['GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE'],
			'GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE' => $arParams['GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE'],
		);

		if (isset($arParams['USER_CONSENT']))
		{
			$componentElementParams['USER_CONSENT'] = $arParams['USER_CONSENT'];
		}

		if (isset($arParams['USER_CONSENT_ID']))
		{
			$componentElementParams['USER_CONSENT_ID'] = $arParams['USER_CONSENT_ID'];
		}

		if (isset($arParams['USER_CONSENT_IS_CHECKED']))
		{
			$componentElementParams['USER_CONSENT_IS_CHECKED'] = $arParams['USER_CONSENT_IS_CHECKED'];
		}

		if (isset($arParams['USER_CONSENT_IS_LOADED']))
		{
			$componentElementParams['USER_CONSENT_IS_LOADED'] = $arParams['USER_CONSENT_IS_LOADED'];
		}

		$elementId = $APPLICATION->IncludeComponent(
			'bitrix:catalog.element',
			'case',
			$componentElementParams,
			$component
		);
		$GLOBALS['CATALOG_CURRENT_ELEMENT_ID'] = $elementId;


		if ($elementId > 0)
		{
			if ($arParams['USE_STORE'] == 'Y' && ModuleManager::isModuleInstalled('catalog'))
			{
				$APPLICATION->IncludeComponent(
					'bitrix:catalog.store.amount',
					'.default',
					array(
						'ELEMENT_ID' => $elementId,
						'STORE_PATH' => $arParams['STORE_PATH'],
						'CACHE_TYPE' => 'A',
						'CACHE_TIME' => '36000',
						'MAIN_TITLE' => $arParams['MAIN_TITLE'],
						'USE_MIN_AMOUNT' =>  $arParams['USE_MIN_AMOUNT'],
						'MIN_AMOUNT' => $arParams['MIN_AMOUNT'],
						'STORES' => $arParams['STORES'],
						'SHOW_EMPTY_STORE' => $arParams['SHOW_EMPTY_STORE'],
						'SHOW_GENERAL_STORE_INFORMATION' => $arParams['SHOW_GENERAL_STORE_INFORMATION'],
						'USER_FIELDS' => $arParams['USER_FIELDS'],
						'FIELDS' => $arParams['FIELDS']
					),
					$component,
					array('HIDE_ICONS' => 'Y')
				);
			}

			$recommendedData = array();
			$recommendedCacheId = array('IBLOCK_ID' => $arParams['IBLOCK_ID']);

			$obCache = new CPHPCache();
			if ($obCache->InitCache(36000, serialize($recommendedCacheId), '/catalog/recommended'))
			{
				$recommendedData = $obCache->GetVars();
			}
			elseif ($obCache->StartDataCache())
			{
				if (Loader::includeModule('catalog'))
				{
					$arSku = CCatalogSku::GetInfoByProductIBlock($arParams['IBLOCK_ID']);
					$recommendedData['OFFER_IBLOCK_ID'] = (!empty($arSku) ? $arSku['IBLOCK_ID'] : 0);
					$recommendedData['IBLOCK_LINK'] = '';
					$recommendedData['ALL_LINK'] = '';
					$rsProps = CIBlockProperty::GetList(
						array('SORT' => 'ASC', 'ID' => 'ASC'),
						array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'PROPERTY_TYPE' => 'E', 'ACTIVE' => 'Y')
					);
					$found = false;
					while ($arProp = $rsProps->Fetch())
					{
						if ($found)
						{
							break;
						}

						if ($arProp['CODE'] == '')
						{
							$arProp['CODE'] = $arProp['ID'];
						}

						$arProp['LINK_IBLOCK_ID'] = intval($arProp['LINK_IBLOCK_ID']);
						if ($arProp['LINK_IBLOCK_ID'] != 0 && $arProp['LINK_IBLOCK_ID'] != $arParams['IBLOCK_ID'])
						{
							continue;
						}

						if ($arProp['LINK_IBLOCK_ID'] > 0)
						{
							if ($recommendedData['IBLOCK_LINK'] == '')
							{
								$recommendedData['IBLOCK_LINK'] = $arProp['CODE'];
								$found = true;
							}
						}
						else
						{
							if ($recommendedData['ALL_LINK'] == '')
							{
								$recommendedData['ALL_LINK'] = $arProp['CODE'];
							}
						}
					}

					if ($found)
					{
						if (defined('BX_COMP_MANAGED_CACHE'))
						{
							global $CACHE_MANAGER;
							$CACHE_MANAGER->StartTagCache('/catalog/recommended');
							$CACHE_MANAGER->RegisterTag('iblock_id_'.$arParams['IBLOCK_ID']);
							$CACHE_MANAGER->EndTagCache();
						}
					}
				}

				$obCache->EndDataCache($recommendedData);
			}

			if (!empty($recommendedData))
			{
				if (!empty($recommendedData['IBLOCK_LINK']) || !empty($recommendedData['ALL_LINK']))
				{
					?>
					<div class='row'>
						<div class='col-xs-12' data-entity="parent-container">
							<div class="catalog-block-header" data-entity="header" data-showed="false" style="display: none; opacity: 0;">
								<?=GetMessage('CATALOG_RECOMMENDED_BY_LINK')?>
							</div>
							<?
							$APPLICATION->IncludeComponent(
								'bitrix:catalog.recommended.products',
								'',
								array(
									'ID' => $elementId,
									'IBLOCK_ID' => $arParams['IBLOCK_ID'],
									'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
									'PROPERTY_LINK' => (!empty($recommendedData['IBLOCK_LINK']) ? $recommendedData['IBLOCK_LINK'] : $recommendedData['ALL_LINK']),
									'CACHE_TYPE' => $arParams['CACHE_TYPE'],
									'CACHE_TIME' => $arParams['CACHE_TIME'],
									'CACHE_FILTER' => $arParams['CACHE_FILTER'],
									'CACHE_GROUPS' => $arParams['CACHE_GROUPS'],
									'BASKET_URL' => $arParams['BASKET_URL'],
									'ACTION_VARIABLE' => (!empty($arParams['ACTION_VARIABLE']) ? $arParams['ACTION_VARIABLE'] : 'action').'_crp',
									'PRODUCT_ID_VARIABLE' => $arParams['PRODUCT_ID_VARIABLE'],
									'PRODUCT_QUANTITY_VARIABLE' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
									'ADD_PROPERTIES_TO_BASKET' => (isset($arParams['ADD_PROPERTIES_TO_BASKET']) ? $arParams['ADD_PROPERTIES_TO_BASKET'] : ''),
									'PRODUCT_PROPS_VARIABLE' => $arParams['PRODUCT_PROPS_VARIABLE'],
									'PARTIAL_PRODUCT_PROPERTIES' => (isset($arParams['PARTIAL_PRODUCT_PROPERTIES']) ? $arParams['PARTIAL_PRODUCT_PROPERTIES'] : ''),
									'PAGE_ELEMENT_COUNT' => $arParams['ALSO_BUY_ELEMENT_COUNT'],
									'LINE_ELEMENT_COUNT' => $arParams['ALSO_BUY_ELEMENT_COUNT'],
									'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
									'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
									'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
									'DISCOUNT_PERCENT_POSITION' => $arParams['DISCOUNT_PERCENT_POSITION'],
									'PRICE_CODE' => $arParams['~PRICE_CODE'],
									'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
									'SHOW_PRICE_COUNT' => $arParams['SHOW_PRICE_COUNT'],
									'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
									'PRICE_VAT_INCLUDE' => $arParams['PRICE_VAT_INCLUDE'],
									'USE_PRODUCT_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
									'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],
									'PRODUCT_BLOCKS_ORDER' => $arParams['LIST_PRODUCT_BLOCKS_ORDER'],
									'SECTION_URL' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['section'],
									'DETAIL_URL' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['element'],
									'ADD_TO_BASKET_ACTION' => $basketAction,
									'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',

									'ELEMENT_SORT_FIELD' => $arParams['ELEMENT_SORT_FIELD'],
									'ELEMENT_SORT_ORDER' => $arParams['ELEMENT_SORT_ORDER'],
									'ELEMENT_SORT_FIELD2' => $arParams['ELEMENT_SORT_FIELD2'],
									'ELEMENT_SORT_ORDER2' => $arParams['ELEMENT_SORT_ORDER2'],

									'SET_TITLE' => 'N',
									'SET_BROWSER_TITLE' => 'N',
									'SET_META_KEYWORDS' => 'N',
									'SET_META_DESCRIPTION' => 'N',
									'SET_LAST_MODIFIED' => 'N',
									'ADD_SECTIONS_CHAIN' => 'N',

									'HIDE_BLOCK_TITLE' => 'Y',
									'SHOW_NAME' => 'Y',
									'SHOW_IMAGE' => 'Y',

									'MESS_BTN_BUY' => (isset($arParams['~MESS_BTN_BUY']) ? $arParams['~MESS_BTN_BUY'] : ''),
									'MESS_BTN_ADD_TO_BASKET' => (isset($arParams['~MESS_BTN_ADD_TO_BASKET']) ? $arParams['~MESS_BTN_ADD_TO_BASKET'] : ''),
									'MESS_BTN_SUBSCRIBE' => (isset($arParams['~MESS_BTN_SUBSCRIBE']) ? $arParams['~MESS_BTN_SUBSCRIBE'] : ''),
									'MESS_BTN_DETAIL' => (isset($arParams['~MESS_BTN_DETAIL']) ? $arParams['~MESS_BTN_DETAIL'] : ''),
									'MESS_NOT_AVAILABLE' => (isset($arParams['~MESS_NOT_AVAILABLE']) ? $arParams['~MESS_NOT_AVAILABLE'] : ''),
									'MESS_BTN_COMPARE' => (isset($arParams['~MESS_BTN_COMPARE']) ? $arParams['~MESS_BTN_COMPARE'] : ''),

									'LABEL_PROP_MULTIPLE' => $arParams['LABEL_PROP'],
									'LABEL_PROP_MOBILE' => $arParams['LABEL_PROP_MOBILE'],
									'LABEL_PROP_POSITION' => $arParams['LABEL_PROP_POSITION'],

									'SHOW_SLIDER' => $arParams['LIST_SHOW_SLIDER'],
									'SLIDER_INTERVAL' => isset($arParams['LIST_SLIDER_INTERVAL']) ? $arParams['LIST_SLIDER_INTERVAL'] : '',
									'SLIDER_PROGRESS' => isset($arParams['LIST_SLIDER_PROGRESS']) ? $arParams['LIST_SLIDER_PROGRESS'] : '',

									'SHOW_PRODUCTS_'.$arParams['IBLOCK_ID'] => 'Y',
									'HIDE_NOT_AVAILABLE' => $arParams['HIDE_NOT_AVAILABLE'],
									'HIDE_NOT_AVAILABLE_OFFERS' => $arParams['HIDE_NOT_AVAILABLE_OFFERS'],
									'OFFERS_FIELD_CODE' => $arParams['LIST_OFFERS_FIELD_CODE'],
									'PROPERTY_CODE_'.$arParams['IBLOCK_ID'] => (isset($arParams['LIST_PROPERTY_CODE']) ? $arParams['LIST_PROPERTY_CODE'] : []),
									'PROPERTY_CODE_MOBILE' => $arParams['LIST_PROPERTY_CODE_MOBILE'],
									'PROPERTY_CODE_'.$recommendedData['OFFER_IBLOCK_ID'] => (isset($arParams['LIST_OFFERS_PROPERTY_CODE']) ?  $arParams['LIST_OFFERS_PROPERTY_CODE'] : []),
									'CART_PROPERTIES_'.$arParams['IBLOCK_ID'] => (isset($arParams['PRODUCT_PROPERTIES']) ? $arParams['PRODUCT_PROPERTIES'] : []),
									'CART_PROPERTIES_'.$recommendedData['OFFER_IBLOCK_ID'] => (isset($arParams['OFFERS_CART_PROPERTIES']) ? $arParams['OFFERS_CART_PROPERTIES'] : []),
									'OFFER_TREE_PROPS_'.$recommendedData['OFFER_IBLOCK_ID'] => (isset($arParams['OFFER_TREE_PROPS']) ? $arParams['OFFER_TREE_PROPS'] : []),
									'ADDITIONAL_PICT_PROP_'.$arParams['IBLOCK_ID'] => $arParams['ADD_PICT_PROP'],
									'ADDITIONAL_PICT_PROP_'.$recommendedData['OFFER_IBLOCK_ID'] => $arParams['OFFER_ADD_PICT_PROP'],
									'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
									'CURRENCY_ID' => $arParams['CURRENCY_ID'],

									'USE_ENHANCED_ECOMMERCE' => (isset($arParams['USE_ENHANCED_ECOMMERCE']) ? $arParams['USE_ENHANCED_ECOMMERCE'] : ''),
									'DATA_LAYER_NAME' => (isset($arParams['DATA_LAYER_NAME']) ? $arParams['DATA_LAYER_NAME'] : ''),
									'BRAND_PROPERTY' => (isset($arParams['BRAND_PROPERTY']) ? $arParams['BRAND_PROPERTY'] : ''),
								),
								$component
							);
							?>
						</div>
					</div>
					<?
				}

				if (!isset($arParams['DETAIL_SHOW_POPULAR']) || $arParams['DETAIL_SHOW_POPULAR'] != 'N')
				{
					?>
					<div class='row'>
						<div class='col-xs-12' data-entity="parent-container">
							<div class="catalog-block-header" data-entity="header" data-showed="false" style="display: none; opacity: 0;">
								<?=GetMessage('CATALOG_POPULAR_IN_SECTION')?>
							</div>
							<?
							$APPLICATION->IncludeComponent(
								'bitrix:catalog.section',
								'',
								array(
									'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
									'IBLOCK_ID' => $arParams['IBLOCK_ID'],
									'SECTION_ID' => $arResult['VARIABLES']['SECTION_ID'],
									'SECTION_CODE' => $arResult['VARIABLES']['SECTION_CODE'],
									'ELEMENT_SORT_FIELD' => 'shows',
									'ELEMENT_SORT_ORDER' => 'desc',
									'ELEMENT_SORT_FIELD2' => 'sort',
									'ELEMENT_SORT_ORDER2' => 'asc',
									'PROPERTY_CODE' => (isset($arParams['LIST_PROPERTY_CODE']) ? $arParams['LIST_PROPERTY_CODE'] : []),
									'PROPERTY_CODE_MOBILE' => $arParams['LIST_PROPERTY_CODE_MOBILE'],
									'INCLUDE_SUBSECTIONS' => $arParams['INCLUDE_SUBSECTIONS'],
									'BASKET_URL' => $arParams['BASKET_URL'],
									'ACTION_VARIABLE' => $arParams['ACTION_VARIABLE'],
									'PRODUCT_ID_VARIABLE' => $arParams['PRODUCT_ID_VARIABLE'],
									'SECTION_ID_VARIABLE' => $arParams['SECTION_ID_VARIABLE'],
									'PRODUCT_QUANTITY_VARIABLE' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
									'PRODUCT_PROPS_VARIABLE' => $arParams['PRODUCT_PROPS_VARIABLE'],
									'CACHE_TYPE' => $arParams['CACHE_TYPE'],
									'CACHE_TIME' => $arParams['CACHE_TIME'],
									'CACHE_FILTER' => $arParams['CACHE_FILTER'],
									'CACHE_GROUPS' => $arParams['CACHE_GROUPS'],
									'DISPLAY_COMPARE' => $arParams['USE_COMPARE'],
									'PRICE_CODE' => $arParams['~PRICE_CODE'],
									'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
									'SHOW_PRICE_COUNT' => $arParams['SHOW_PRICE_COUNT'],
									'PAGE_ELEMENT_COUNT' => 4,
									'FILTER_IDS' => array($elementId),

									"SET_TITLE" => "N",
									"SET_BROWSER_TITLE" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_LAST_MODIFIED" => "N",
									"ADD_SECTIONS_CHAIN" => "N",

									'PRICE_VAT_INCLUDE' => $arParams['PRICE_VAT_INCLUDE'],
									'USE_PRODUCT_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
									'ADD_PROPERTIES_TO_BASKET' => (isset($arParams['ADD_PROPERTIES_TO_BASKET']) ? $arParams['ADD_PROPERTIES_TO_BASKET'] : ''),
									'PARTIAL_PRODUCT_PROPERTIES' => (isset($arParams['PARTIAL_PRODUCT_PROPERTIES']) ? $arParams['PARTIAL_PRODUCT_PROPERTIES'] : ''),
									'PRODUCT_PROPERTIES' => (isset($arParams['PRODUCT_PROPERTIES']) ? $arParams['PRODUCT_PROPERTIES'] : []),

									'OFFERS_CART_PROPERTIES' => (isset($arParams['OFFERS_CART_PROPERTIES']) ? $arParams['OFFERS_CART_PROPERTIES'] : []),
									'OFFERS_FIELD_CODE' => $arParams['LIST_OFFERS_FIELD_CODE'],
									'OFFERS_PROPERTY_CODE' => (isset($arParams['LIST_OFFERS_PROPERTY_CODE']) ? $arParams['LIST_OFFERS_PROPERTY_CODE'] : []),
									'OFFERS_SORT_FIELD' => $arParams['OFFERS_SORT_FIELD'],
									'OFFERS_SORT_ORDER' => $arParams['OFFERS_SORT_ORDER'],
									'OFFERS_SORT_FIELD2' => $arParams['OFFERS_SORT_FIELD2'],
									'OFFERS_SORT_ORDER2' => $arParams['OFFERS_SORT_ORDER2'],
									'OFFERS_LIMIT' => (isset($arParams['LIST_OFFERS_LIMIT']) ? $arParams['LIST_OFFERS_LIMIT'] : 0),

									'SECTION_URL' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['section'],
									'DETAIL_URL' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['element'],
									'USE_MAIN_ELEMENT_SECTION' => $arParams['USE_MAIN_ELEMENT_SECTION'],
									'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
									'CURRENCY_ID' => $arParams['CURRENCY_ID'],
									'HIDE_NOT_AVAILABLE' => $arParams['HIDE_NOT_AVAILABLE'],
									'HIDE_NOT_AVAILABLE_OFFERS' => $arParams['HIDE_NOT_AVAILABLE_OFFERS'],

									'LABEL_PROP' => $arParams['LABEL_PROP'],
									'LABEL_PROP_MOBILE' => $arParams['LABEL_PROP_MOBILE'],
									'LABEL_PROP_POSITION' => $arParams['LABEL_PROP_POSITION'],
									'ADD_PICT_PROP' => $arParams['ADD_PICT_PROP'],
									'PRODUCT_DISPLAY_MODE' => $arParams['PRODUCT_DISPLAY_MODE'],
									'PRODUCT_BLOCKS_ORDER' => $arParams['LIST_PRODUCT_BLOCKS_ORDER'],
									'PRODUCT_ROW_VARIANTS' => "[{'VARIANT':'3','BIG_DATA':false}]",
									'ENLARGE_PRODUCT' => $arParams['LIST_ENLARGE_PRODUCT'],
									'ENLARGE_PROP' => isset($arParams['LIST_ENLARGE_PROP']) ? $arParams['LIST_ENLARGE_PROP'] : '',
									'SHOW_SLIDER' => $arParams['LIST_SHOW_SLIDER'],
									'SLIDER_INTERVAL' => isset($arParams['LIST_SLIDER_INTERVAL']) ? $arParams['LIST_SLIDER_INTERVAL'] : '',
									'SLIDER_PROGRESS' => isset($arParams['LIST_SLIDER_PROGRESS']) ? $arParams['LIST_SLIDER_PROGRESS'] : '',

									'DISPLAY_TOP_PAGER' => 'N',
									'DISPLAY_BOTTOM_PAGER' => 'N',
									'HIDE_SECTION_DESCRIPTION' => 'Y',

									'RCM_TYPE' => isset($arParams['BIG_DATA_RCM_TYPE']) ? $arParams['BIG_DATA_RCM_TYPE'] : '',
									'RCM_PROD_ID' => $elementId,
									'SHOW_FROM_SECTION' => 'Y',

									'OFFER_ADD_PICT_PROP' => $arParams['OFFER_ADD_PICT_PROP'],
									'OFFER_TREE_PROPS' => (isset($arParams['OFFER_TREE_PROPS']) ? $arParams['OFFER_TREE_PROPS'] : []),
									'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
									'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
									'DISCOUNT_PERCENT_POSITION' => $arParams['DISCOUNT_PERCENT_POSITION'],
									'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
									'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
									'MESS_SHOW_MAX_QUANTITY' => (isset($arParams['~MESS_SHOW_MAX_QUANTITY']) ? $arParams['~MESS_SHOW_MAX_QUANTITY'] : ''),
									'RELATIVE_QUANTITY_FACTOR' => (isset($arParams['RELATIVE_QUANTITY_FACTOR']) ? $arParams['RELATIVE_QUANTITY_FACTOR'] : ''),
									'MESS_RELATIVE_QUANTITY_MANY' => (isset($arParams['~MESS_RELATIVE_QUANTITY_MANY']) ? $arParams['~MESS_RELATIVE_QUANTITY_MANY'] : ''),
									'MESS_RELATIVE_QUANTITY_FEW' => (isset($arParams['~MESS_RELATIVE_QUANTITY_FEW']) ? $arParams['~MESS_RELATIVE_QUANTITY_FEW'] : ''),
									'MESS_BTN_BUY' => (isset($arParams['~MESS_BTN_BUY']) ? $arParams['~MESS_BTN_BUY'] : ''),
									'MESS_BTN_ADD_TO_BASKET' => (isset($arParams['~MESS_BTN_ADD_TO_BASKET']) ? $arParams['~MESS_BTN_ADD_TO_BASKET'] : ''),
									'MESS_BTN_SUBSCRIBE' => (isset($arParams['~MESS_BTN_SUBSCRIBE']) ? $arParams['~MESS_BTN_SUBSCRIBE'] : ''),
									'MESS_BTN_DETAIL' => (isset($arParams['~MESS_BTN_DETAIL']) ? $arParams['~MESS_BTN_DETAIL'] : ''),
									'MESS_NOT_AVAILABLE' => (isset($arParams['~MESS_NOT_AVAILABLE']) ? $arParams['~MESS_NOT_AVAILABLE'] : ''),
									'MESS_BTN_COMPARE' => (isset($arParams['~MESS_BTN_COMPARE']) ? $arParams['~MESS_BTN_COMPARE'] : ''),

									'USE_ENHANCED_ECOMMERCE' => (isset($arParams['USE_ENHANCED_ECOMMERCE']) ? $arParams['USE_ENHANCED_ECOMMERCE'] : ''),
									'DATA_LAYER_NAME' => (isset($arParams['DATA_LAYER_NAME']) ? $arParams['DATA_LAYER_NAME'] : ''),
									'BRAND_PROPERTY' => (isset($arParams['BRAND_PROPERTY']) ? $arParams['BRAND_PROPERTY'] : ''),

									'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
									'ADD_TO_BASKET_ACTION' => $basketAction,
									'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
									'COMPARE_PATH' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['compare'],
									'COMPARE_NAME' => $arParams['COMPARE_NAME'],
									'BACKGROUND_IMAGE' => '',
									'DISABLE_INIT_JS_IN_COMPONENT' => (isset($arParams['DISABLE_INIT_JS_IN_COMPONENT']) ? $arParams['DISABLE_INIT_JS_IN_COMPONENT'] : '')
								),
								$component
							);
							?>
						</div>
					</div>
					<?
				}

				if (
					Loader::includeModule('catalog')
					&& (!isset($arParams['DETAIL_SHOW_VIEWED']) || $arParams['DETAIL_SHOW_VIEWED'] != 'N')
				)
				{
					?>
					<div class='row'>
						<div class='col-xs-12' data-entity="parent-container">
							<div class="catalog-block-header" data-entity="header" data-showed="false" style="display: none; opacity: 0;">
								<?=GetMessage('CATALOG_VIEWED')?>
							</div>
							<?
							$APPLICATION->IncludeComponent(
								'bitrix:catalog.products.viewed',
								'',
								array(
									'IBLOCK_MODE' => 'single',
									'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
									'IBLOCK_ID' => $arParams['IBLOCK_ID'],
									'ELEMENT_SORT_FIELD' => $arParams['ELEMENT_SORT_FIELD'],
									'ELEMENT_SORT_ORDER' => $arParams['ELEMENT_SORT_ORDER'],
									'ELEMENT_SORT_FIELD2' => $arParams['ELEMENT_SORT_FIELD2'],
									'ELEMENT_SORT_ORDER2' => $arParams['ELEMENT_SORT_ORDER2'],
									'PROPERTY_CODE_'.$arParams['IBLOCK_ID'] => (isset($arParams['LIST_PROPERTY_CODE']) ? $arParams['LIST_PROPERTY_CODE'] : []),
									'PROPERTY_CODE_'.$recommendedData['OFFER_IBLOCK_ID'] => (isset($arParams['LIST_OFFERS_PROPERTY_CODE']) ? $arParams['LIST_OFFERS_PROPERTY_CODE'] : []),
									'PROPERTY_CODE_MOBILE'.$arParams['IBLOCK_ID'] => $arParams['LIST_PROPERTY_CODE_MOBILE'],
									'BASKET_URL' => $arParams['BASKET_URL'],
									'ACTION_VARIABLE' => $arParams['ACTION_VARIABLE'],
									'PRODUCT_ID_VARIABLE' => $arParams['PRODUCT_ID_VARIABLE'],
									'PRODUCT_QUANTITY_VARIABLE' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
									'PRODUCT_PROPS_VARIABLE' => $arParams['PRODUCT_PROPS_VARIABLE'],
									'CACHE_TYPE' => $arParams['CACHE_TYPE'],
									'CACHE_TIME' => $arParams['CACHE_TIME'],
									'CACHE_FILTER' => $arParams['CACHE_FILTER'],
									'CACHE_GROUPS' => $arParams['CACHE_GROUPS'],
									'DISPLAY_COMPARE' => $arParams['USE_COMPARE'],
									'PRICE_CODE' => $arParams['~PRICE_CODE'],
									'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
									'SHOW_PRICE_COUNT' => $arParams['SHOW_PRICE_COUNT'],
									'PAGE_ELEMENT_COUNT' => 4,
									'SECTION_ELEMENT_ID' => $elementId,

									"SET_TITLE" => "N",
									"SET_BROWSER_TITLE" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_LAST_MODIFIED" => "N",
									"ADD_SECTIONS_CHAIN" => "N",

									'PRICE_VAT_INCLUDE' => $arParams['PRICE_VAT_INCLUDE'],
									'USE_PRODUCT_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
									'ADD_PROPERTIES_TO_BASKET' => (isset($arParams['ADD_PROPERTIES_TO_BASKET']) ? $arParams['ADD_PROPERTIES_TO_BASKET'] : ''),
									'PARTIAL_PRODUCT_PROPERTIES' => (isset($arParams['PARTIAL_PRODUCT_PROPERTIES']) ? $arParams['PARTIAL_PRODUCT_PROPERTIES'] : ''),
									'CART_PROPERTIES_'.$arParams['IBLOCK_ID'] => (isset($arParams['PRODUCT_PROPERTIES']) ? $arParams['PRODUCT_PROPERTIES'] : []),
									'CART_PROPERTIES_'.$recommendedData['OFFER_IBLOCK_ID'] => (isset($arParams['OFFERS_CART_PROPERTIES']) ? $arParams['OFFERS_CART_PROPERTIES'] : []),
									'ADDITIONAL_PICT_PROP_'.$arParams['IBLOCK_ID'] => $arParams['ADD_PICT_PROP'],
									'ADDITIONAL_PICT_PROP_'.$recommendedData['OFFER_IBLOCK_ID'] => $arParams['OFFER_ADD_PICT_PROP'],

									'SHOW_FROM_SECTION' => 'N',
									'DETAIL_URL' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['element'],
									'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
									'CURRENCY_ID' => $arParams['CURRENCY_ID'],
									'HIDE_NOT_AVAILABLE' => $arParams['HIDE_NOT_AVAILABLE'],
									'HIDE_NOT_AVAILABLE_OFFERS' => $arParams['HIDE_NOT_AVAILABLE_OFFERS'],

									'LABEL_PROP_'.$arParams['IBLOCK_ID'] => $arParams['LABEL_PROP'],
									'LABEL_PROP_MOBILE_'.$arParams['IBLOCK_ID'] => $arParams['LABEL_PROP_MOBILE'],
									'LABEL_PROP_POSITION' => $arParams['LABEL_PROP_POSITION'],
									'PRODUCT_BLOCKS_ORDER' => $arParams['LIST_PRODUCT_BLOCKS_ORDER'],
									'PRODUCT_ROW_VARIANTS' => "[{'VARIANT':'3','BIG_DATA':false}]",
									'ENLARGE_PRODUCT' => $arParams['LIST_ENLARGE_PRODUCT'],
									'ENLARGE_PROP_'.$arParams['IBLOCK_ID'] => isset($arParams['LIST_ENLARGE_PROP']) ? $arParams['LIST_ENLARGE_PROP'] : '',
									'SHOW_SLIDER' => $arParams['LIST_SHOW_SLIDER'],
									'SLIDER_INTERVAL' => isset($arParams['LIST_SLIDER_INTERVAL']) ? $arParams['LIST_SLIDER_INTERVAL'] : '',
									'SLIDER_PROGRESS' => isset($arParams['LIST_SLIDER_PROGRESS']) ? $arParams['LIST_SLIDER_PROGRESS'] : '',

									'OFFER_TREE_PROPS_'.$recommendedData['OFFER_IBLOCK_ID'] => (isset($arParams['OFFER_TREE_PROPS']) ? $arParams['OFFER_TREE_PROPS'] : []),
									'PRODUCT_SUBSCRIPTION' => $arParams['PRODUCT_SUBSCRIPTION'],
									'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'],
									'DISCOUNT_PERCENT_POSITION' => $arParams['DISCOUNT_PERCENT_POSITION'],
									'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'],
									'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
									'MESS_SHOW_MAX_QUANTITY' => (isset($arParams['~MESS_SHOW_MAX_QUANTITY']) ? $arParams['~MESS_SHOW_MAX_QUANTITY'] : ''),
									'RELATIVE_QUANTITY_FACTOR' => (isset($arParams['RELATIVE_QUANTITY_FACTOR']) ? $arParams['RELATIVE_QUANTITY_FACTOR'] : ''),
									'MESS_RELATIVE_QUANTITY_MANY' => (isset($arParams['~MESS_RELATIVE_QUANTITY_MANY']) ? $arParams['~MESS_RELATIVE_QUANTITY_MANY'] : ''),
									'MESS_RELATIVE_QUANTITY_FEW' => (isset($arParams['~MESS_RELATIVE_QUANTITY_FEW']) ? $arParams['~MESS_RELATIVE_QUANTITY_FEW'] : ''),
									'MESS_BTN_BUY' => (isset($arParams['~MESS_BTN_BUY']) ? $arParams['~MESS_BTN_BUY'] : ''),
									'MESS_BTN_ADD_TO_BASKET' => (isset($arParams['~MESS_BTN_ADD_TO_BASKET']) ? $arParams['~MESS_BTN_ADD_TO_BASKET'] : ''),
									'MESS_BTN_SUBSCRIBE' => (isset($arParams['~MESS_BTN_SUBSCRIBE']) ? $arParams['~MESS_BTN_SUBSCRIBE'] : ''),
									'MESS_BTN_DETAIL' => (isset($arParams['~MESS_BTN_DETAIL']) ? $arParams['~MESS_BTN_DETAIL'] : ''),
									'MESS_NOT_AVAILABLE' => (isset($arParams['~MESS_NOT_AVAILABLE']) ? $arParams['~MESS_NOT_AVAILABLE'] : ''),
									'MESS_BTN_COMPARE' => (isset($arParams['~MESS_BTN_COMPARE']) ? $arParams['~MESS_BTN_COMPARE'] : ''),

									'USE_ENHANCED_ECOMMERCE' => (isset($arParams['USE_ENHANCED_ECOMMERCE']) ? $arParams['USE_ENHANCED_ECOMMERCE'] : ''),
									'DATA_LAYER_NAME' => (isset($arParams['DATA_LAYER_NAME']) ? $arParams['DATA_LAYER_NAME'] : ''),
									'BRAND_PROPERTY' => (isset($arParams['BRAND_PROPERTY']) ? $arParams['BRAND_PROPERTY'] : ''),

									'TEMPLATE_THEME' => (isset($arParams['TEMPLATE_THEME']) ? $arParams['TEMPLATE_THEME'] : ''),
									'ADD_TO_BASKET_ACTION' => $basketAction,
									'SHOW_CLOSE_POPUP' => isset($arParams['COMMON_SHOW_CLOSE_POPUP']) ? $arParams['COMMON_SHOW_CLOSE_POPUP'] : '',
									'COMPARE_PATH' => $arResult['FOLDER'].$arResult['URL_TEMPLATES']['compare'],
									'COMPARE_NAME' => $arParams['COMPARE_NAME'],
									'USE_COMPARE_LIST' => 'Y'
								),
								$component
							);
							?>
						</div>
					</div>
					<?
				}
			}
		}
		?>
</div>

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