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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];
$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<div class="services-menu-wrap">
<?
if (0 < $arResult["SECTIONS_COUNT"])
{
?>
<?
    $intCurrentDepth = 1;
    $boolFirst = true;
    foreach ($arResult['SECTIONS'] as &$arSection)
    {
    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
?>
        <div class="services-menu-col" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
            <? $subSect = [];
            $sectList = CIBlockSection::GetList([], array("IBLOCK_ID"=>$arSection["IBLOCK_ID"],"SECTION_ID"=>$arSection['ID'],"ACTIVE"=>"Y") ,false, array("ID","IBLOCK_ID","IBLOCK_TYPE_ID","IBLOCK_SECTION_ID","CODE","SECTION_ID","NAME","SECTION_PAGE_URL"));
            while ($sect = $sectList->GetNext())
            {
                $subSect[]=$sect;
            }   ?>
            <? $elements = [];
            $elementList = CIBlockElement::GetList([], array("IBLOCK_ID"=>$arSection["IBLOCK_ID"],"IBLOCK_SECTION_ID"=>$arSection['ID'],"ACTIVE"=>"Y") ,false,array(), array("ID","IBLOCK_ID","IBLOCK_TYPE_ID","IBLOCK_SECTION_ID","CODE","SECTION_ID","NAME","DETAIL_PAGE_URL"));
            while ($element = $elementList->GetNextElement())
            {
                $arFields = $element->getFields();
                $elements[$arFields['ID']]= $arFields;
            }   ?>
        <?if (count($elements) + count($subSect) > 0 ){?>
            <div class="services-menu-col__title"><?=$arSection['NAME']?></div>
            <div class="services-menu-col-items">
                <?foreach ($subSect as $el){?>
                    <a href="<?=$el['SECTION_PAGE_URL']?>" class="services-menu-col-items__item"><?=$el['NAME']?></a>
                <?}?>
                <?foreach ($elements as $el){?>
                    <a href="<?=$el['DETAIL_PAGE_URL']?>" class="services-menu-col-items__item"><?=$el['NAME']?></a>
                <?}?>
            </div>
        <?}else{?>
            <a href="<?=$arSection['SECTION_PAGE_URL']?>" class="services-menu-col__title"><?=$arSection['NAME']?></a>
        <?}?>
        </div>
        <?
    }

			unset($arSection);
			while ($intCurrentDepth > 1)
			{
				echo '</li>',"\n",str_repeat("\t", $intCurrentDepth),'</ul>',"\n",str_repeat("\t", $intCurrentDepth-1);
				$intCurrentDepth--;
			}
			if ($intCurrentDepth > 0)
			{
				echo '</li>',"\n";
			}
  ?>
<?
}

?>
</div>