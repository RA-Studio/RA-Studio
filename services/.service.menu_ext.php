<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$aMenuLinksExt=$APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
    "IS_SEF" => "Y",
    "SEF_BASE_URL" => "/service/",
    "SECTION_PAGE_URL" => "/service/#SECTION_CODE_PATH#/",
    "DETAIL_PAGE_URL" => "/service/#SECTION_CODE_PATH#/#ELEMENT_CODE#",
    "IBLOCK_TYPE" => "service",
    "IBLOCK_ID" => 8,
    "DEPTH_LEVEL" => "4",
    "CACHE_TYPE" => "N",
    "CACHE_TIME" => "36000000"
),
    false
);

$aMenuLinks = $aMenuLinksExt;//array_merge($aMenuLinksExt, $aMenuLinks);
Print_r($aMenuLinksExt);
?>