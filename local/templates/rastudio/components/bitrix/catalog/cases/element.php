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
    <div class="main-project-content">
        <div class="main-project-content-left">
            <svg width="436" height="508" viewBox="0 0 436 508" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M217.783 0.84082L0.0407715 205.824V507.668H435.519V205.824L217.783 0.84082Z" fill="url(#paint0_linear)"/>
                <path d="M433.311 501.047H2.24792V205.333L217.783 4.51953L433.311 205.333V501.047Z" fill="white"/>
                <path d="M367.84 45.7119H67.7195V398.797H367.84V45.7119Z" fill="url(#paint0_linear)"/>
                <path d="M364.05 48.6562H71.5094V398.798H364.05V48.6562Z" fill="white"/>
                <path d="M2.24792 205.334L217.783 353.191L2.24792 501.048V205.334Z" fill="#F5F5F5"/>
                <path d="M433.311 205.334L217.783 353.191L433.311 501.048V205.334Z" fill="#F5F5F5"/>
                <path d="M2.24792 501.04L209.319 339.933C211.728 338.036 214.706 337.005 217.772 337.005C220.839 337.005 223.816 338.036 226.226 339.933L433.311 501.04H2.24792Z" fill="url(#paint0_linear)"/>
                <path d="M2.24792 501.04L209.319 346.971C211.762 345.153 214.727 344.172 217.772 344.172C220.818 344.172 223.782 345.153 226.226 346.971L433.311 501.04H2.24792Z" fill="white"/>
                <path d="M176.955 116.326H115.898V126.626H176.955V116.326Z" fill="#47E6B1"/>
                <path d="M319.662 143.548H115.898V153.848H319.662V143.548Z" fill="#F5F5F5"/>
                <path d="M319.662 161.197H115.898V171.497H319.662V161.197Z" fill="#F5F5F5"/>
                <path d="M319.662 178.854H115.898V189.155H319.662V178.854Z" fill="#F5F5F5"/>
                <path d="M319.662 196.505H115.898V206.805H319.662V196.505Z" fill="#F5F5F5"/>
                <path d="M208.583 214.163H115.898V224.463H208.583V214.163Z" fill="#F5F5F5"/>
                <path d="M319.662 214.163H226.976V224.463H319.662V214.163Z" fill="#6E1866"/>
                <defs>
                    <linearGradient id="paint0_linear" x1="189720" y1="350325" x2="189720" y2="4668.72" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                </defs>
            </svg>
            <svg width="216" height="172" viewBox="0 0 216 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M177.188 0.80211L0.92688 63.3232L39.3498 171.646L215.611 109.125L177.188 0.80211Z" fill="url(#paint0_linear)"/>
                <path d="M174.333 4.85582L4.04639 65.2578L39.9055 166.353L210.192 105.951L174.333 4.85582Z" fill="white"/>
                <g opacity="0.6">
                    <path opacity="0.6" d="M19.8321 86.3775L41.4952 78.6934L35.8086 62.6614L14.1454 70.3455L19.8321 86.3775Z" fill="#6E1866"/>
                    <path opacity="0.6" d="M48.6643 111.278L131.857 81.7686L130.014 76.5716L46.8209 106.081L48.6643 111.278Z" fill="#6E1866"/>
                    <path opacity="0.6" d="M75.1905 114.544L135.852 93.0273L134.622 89.5604L73.9608 111.077L75.1905 114.544Z" fill="#6E1866"/>
                </g>
                <defs>
                    <linearGradient id="paint0_linear" x1="-1912.05" y1="28380.1" x2="-7854.55" y2="11626.9" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                </defs>
            </svg>
            <svg width="207" height="149" viewBox="0 0 207 149" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.6">
                    <path d="M22.5164 -0.000646602L0.546265 112.815L184.119 148.565L206.089 35.7487L22.5164 -0.000646602Z" fill="url(#paint0_linear)"/>
                    <path d="M24.2189 3.24989L3.71484 108.538L181.065 143.076L201.569 37.7875L24.2189 3.24989Z" fill="white"/>
                    <path opacity="0.6" d="M27.0757 29.4539L49.6375 33.8477L52.8891 17.1506L30.3273 12.7569L27.0757 29.4539Z" fill="#F55F44"/>
                    <path opacity="0.6" d="M39.2545 65.5536L125.898 82.4268L126.952 77.0143L40.3085 60.1411L39.2545 65.5536Z" fill="#F55F44"/>
                    <path opacity="0.6" d="M60.4392 81.8608L123.616 94.1641L124.32 90.5533L61.1424 78.25L60.4392 81.8608Z" fill="#F55F44"/>
                </g>
                <defs>
                    <linearGradient id="paint0_linear" x1="13519.5" y1="32738.5" x2="19048.5" y2="4347.22" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                </defs>
            </svg>
            <svg width="213" height="164" viewBox="0 0 213 164" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M179.226 0.0341915L0 53.4639L32.8357 163.609L212.062 110.179L179.226 0.0341915Z" fill="url(#paint0_linear)"/>
                <path d="M176.164 3.92135L3.01233 55.54L33.657 158.336L206.808 106.717L176.164 3.92135Z" fill="white"/>
                <g opacity="0.6">
                    <path opacity="0.6" d="M17.7551 77.3997L39.7827 70.833L34.923 54.5313L12.8954 61.098L17.7551 77.3997Z" fill="#F55F44"/>
                    <path opacity="0.6" d="M45.2783 103.73L129.871 78.5117L128.295 73.2274L43.703 98.4454L45.2783 103.73Z" fill="#F55F44"/>
                    <path opacity="0.6" d="M71.605 108.348L133.287 89.96L132.236 86.4347L70.5541 104.823L71.605 108.348Z" fill="#F55F44"/>
                </g>
                <defs>
                    <linearGradient id="paint0_linear" x1="122.449" y1="136.894" x2="89.6131" y2="26.749" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                </defs>
            </svg>
            <svg width="181" height="219" viewBox="0 0 181 219" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M105.675 0.748932L0.232544 46.4873L74.6572 218.062L180.1 172.323L105.675 0.748932Z" fill="url(#paint0_linear)"/>
                <path d="M103.954 3.99232L5.54761 46.6787L77.4497 212.438L175.856 169.751L103.954 3.99232Z" fill="white"/>
                <g opacity="0.6">
                    <path opacity="0.6" d="M83.9487 21.2068L93.0958 42.2939L108.702 35.5246L99.5545 14.4374L83.9487 21.2068Z" fill="#47E6B1"/>
                    <path opacity="0.6" d="M61.0787 51.6717L96.2061 132.652L101.265 130.458L66.1374 49.4773L61.0787 51.6717Z" fill="#47E6B1"/>
                    <path opacity="0.6" d="M59.6288 78.3561L85.2424 137.404L88.6172 135.94L63.0036 76.8922L59.6288 78.3561Z" fill="#47E6B1"/>
                </g>
                <defs>
                    <linearGradient id="paint0_linear" x1="-67277.2" y1="59310.1" x2="-40741.5" y2="47799.5" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
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
                    "FORM_ID" => "FORM10",
                    "FORM_NAME" => "",
                    "WIDTH_FORM" => "main-project-content-form",
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
                        5 => "DIRECTION",
                    ),
                    "FIELDS_ORDER" => "DIRECTION,TITLE,EMAIL,PHONE,COMPANY,MESSAGE",
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
                    "CATEGORY_TITLE_WIDTH" => "",
                    "CATEGORY_EMAIL_WIDTH" => "input-100",
                    "CATEGORY_PHONE_WIDTH" => "",
                    "CATEGORY_MESSAGE_WIDTH" => "",
                    "CATEGORY_COMPANY_WIDTH" => "",
                    "COMPOSITE_FRAME_MODE" => "A",
                    "COMPOSITE_FRAME_TYPE" => "AUTO",
                    "CATEGORY_TITLE_CLASS" => "general-itemInput_half",
                    "CATEGORY_EMAIL_CLASS" => "general-itemInput_half",
                    "CATEGORY_PHONE_CLASS" => "general-itemInput_half",
                    "CATEGORY_MESSAGE_CLASS" => "",
                    "CATEGORY_COMPANY_CLASS" => "general-itemInput_half",
                    "CLEAR_FORM" => "N",
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


<div class="popup-form fancybox-content fancybox-content-popup-form" style="display: none" id="ProjectForm">
    <div class="main-project-content" >
        <div class="main-project-content-left main-project-content-left_hello">
            <svg width="436" height="508" viewBox="0 0 436 508" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M217.783 0.84082L0.0407715 205.824V507.668H435.519V205.824L217.783 0.84082Z" fill="url(#paint0_linear)"/>
                <path d="M433.311 501.047H2.24792V205.333L217.783 4.51953L433.311 205.333V501.047Z" fill="white"/>
                <path d="M367.84 45.7119H67.7195V398.797H367.84V45.7119Z" fill="url(#paint0_linear)"/>
                <path d="M364.05 48.6562H71.5094V398.798H364.05V48.6562Z" fill="white"/>
                <path d="M2.24792 205.334L217.783 353.191L2.24792 501.048V205.334Z" fill="#F5F5F5"/>
                <path d="M433.311 205.334L217.783 353.191L433.311 501.048V205.334Z" fill="#F5F5F5"/>
                <path d="M2.24792 501.04L209.319 339.933C211.728 338.036 214.706 337.005 217.772 337.005C220.839 337.005 223.816 338.036 226.226 339.933L433.311 501.04H2.24792Z" fill="url(#paint0_linear)"/>
                <path d="M2.24792 501.04L209.319 346.971C211.762 345.153 214.727 344.172 217.772 344.172C220.818 344.172 223.782 345.153 226.226 346.971L433.311 501.04H2.24792Z" fill="white"/>
                <path d="M176.955 116.326H115.898V126.626H176.955V116.326Z" fill="#47E6B1"/>
                <path d="M319.662 143.548H115.898V153.848H319.662V143.548Z" fill="#F5F5F5"/>
                <path d="M319.662 161.197H115.898V171.497H319.662V161.197Z" fill="#F5F5F5"/>
                <path d="M319.662 178.854H115.898V189.155H319.662V178.854Z" fill="#F5F5F5"/>
                <path d="M319.662 196.505H115.898V206.805H319.662V196.505Z" fill="#F5F5F5"/>
                <path d="M208.583 214.163H115.898V224.463H208.583V214.163Z" fill="#F5F5F5"/>
                <path d="M319.662 214.163H226.976V224.463H319.662V214.163Z" fill="#6E1866"/>
                <defs>
                    <linearGradient id="paint0_linear" x1="189720" y1="350325" x2="189720" y2="4668.72" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                </defs>
            </svg>
            <svg width="216" height="172" viewBox="0 0 216 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M177.188 0.80211L0.92688 63.3232L39.3498 171.646L215.611 109.125L177.188 0.80211Z" fill="url(#paint0_linear)"/>
                <path d="M174.333 4.85582L4.04639 65.2578L39.9055 166.353L210.192 105.951L174.333 4.85582Z" fill="white"/>
                <g opacity="0.6">
                    <path opacity="0.6" d="M19.8321 86.3775L41.4952 78.6934L35.8086 62.6614L14.1454 70.3455L19.8321 86.3775Z" fill="#6E1866"/>
                    <path opacity="0.6" d="M48.6643 111.278L131.857 81.7686L130.014 76.5716L46.8209 106.081L48.6643 111.278Z" fill="#6E1866"/>
                    <path opacity="0.6" d="M75.1905 114.544L135.852 93.0273L134.622 89.5604L73.9608 111.077L75.1905 114.544Z" fill="#6E1866"/>
                </g>
                <defs>
                    <linearGradient id="paint0_linear" x1="-1912.05" y1="28380.1" x2="-7854.55" y2="11626.9" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                </defs>
            </svg>
            <svg width="207" height="149" viewBox="0 0 207 149" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.6">
                    <path d="M22.5164 -0.000646602L0.546265 112.815L184.119 148.565L206.089 35.7487L22.5164 -0.000646602Z" fill="url(#paint0_linear)"/>
                    <path d="M24.2189 3.24989L3.71484 108.538L181.065 143.076L201.569 37.7875L24.2189 3.24989Z" fill="white"/>
                    <path opacity="0.6" d="M27.0757 29.4539L49.6375 33.8477L52.8891 17.1506L30.3273 12.7569L27.0757 29.4539Z" fill="#F55F44"/>
                    <path opacity="0.6" d="M39.2545 65.5536L125.898 82.4268L126.952 77.0143L40.3085 60.1411L39.2545 65.5536Z" fill="#F55F44"/>
                    <path opacity="0.6" d="M60.4392 81.8608L123.616 94.1641L124.32 90.5533L61.1424 78.25L60.4392 81.8608Z" fill="#F55F44"/>
                </g>
                <defs>
                    <linearGradient id="paint0_linear" x1="13519.5" y1="32738.5" x2="19048.5" y2="4347.22" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                </defs>
            </svg>
            <svg width="213" height="164" viewBox="0 0 213 164" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M179.226 0.0341915L0 53.4639L32.8357 163.609L212.062 110.179L179.226 0.0341915Z" fill="url(#paint0_linear)"/>
                <path d="M176.164 3.92135L3.01233 55.54L33.657 158.336L206.808 106.717L176.164 3.92135Z" fill="white"/>
                <g opacity="0.6">
                    <path opacity="0.6" d="M17.7551 77.3997L39.7827 70.833L34.923 54.5313L12.8954 61.098L17.7551 77.3997Z" fill="#F55F44"/>
                    <path opacity="0.6" d="M45.2783 103.73L129.871 78.5117L128.295 73.2274L43.703 98.4454L45.2783 103.73Z" fill="#F55F44"/>
                    <path opacity="0.6" d="M71.605 108.348L133.287 89.96L132.236 86.4347L70.5541 104.823L71.605 108.348Z" fill="#F55F44"/>
                </g>
                <defs>
                    <linearGradient id="paint0_linear" x1="122.449" y1="136.894" x2="89.6131" y2="26.749" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                    </linearGradient>
                </defs>
            </svg>
            <svg width="181" height="219" viewBox="0 0 181 219" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M105.675 0.748932L0.232544 46.4873L74.6572 218.062L180.1 172.323L105.675 0.748932Z" fill="url(#paint0_linear)"/>
                <path d="M103.954 3.99232L5.54761 46.6787L77.4497 212.438L175.856 169.751L103.954 3.99232Z" fill="white"/>
                <g opacity="0.6">
                    <path opacity="0.6" d="M83.9487 21.2068L93.0958 42.2939L108.702 35.5246L99.5545 14.4374L83.9487 21.2068Z" fill="#47E6B1"/>
                    <path opacity="0.6" d="M61.0787 51.6717L96.2061 132.652L101.265 130.458L66.1374 49.4773L61.0787 51.6717Z" fill="#47E6B1"/>
                    <path opacity="0.6" d="M59.6288 78.3561L85.2424 137.404L88.6172 135.94L63.0036 76.8922L59.6288 78.3561Z" fill="#47E6B1"/>
                </g>
                <defs>
                    <linearGradient id="paint0_linear" x1="-67277.2" y1="59310.1" x2="-40741.5" y2="47799.5" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#808080" stop-opacity="0.25"/>
                        <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                        <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
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
</div>