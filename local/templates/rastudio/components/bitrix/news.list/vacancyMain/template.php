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
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<div class="main-vacancy">
    <div class="main-vacancy__subtitle">Наша команда продолжает расти</div>
    <h2 class="main-vacancy__title">Открытые вакансии</h2>
    <div class="main-vacancy-wrap">
        <div class="main-vacancy-items">
            <?foreach($arResult["ITEMS"] as $key=>$arItem):?>
                <?$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
                <?if(!empty($arItem['ACTIVE_FROM'])){?>
                    <a class="main-vacancy-items-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" href="<?=$arItem["DETAIL_PAGE_URL"]?>" data-aos="fade-up">
                        <div class="main-vacancy-items-item__text"><?=$arItem['PROPERTIES']['UF_TAGS']['VALUE']?></div>
                        <div class="main-vacancy-items-item__title"><?=$arItem['NAME']?></div>
                        <div class="main-vacancy-items-item__btn">Подробнее</div>
                        <img src="<?=CFile::GetPath($arItem['PROPERTIES']['UF_PREVIEW_PICTURE']['VALUE'])?>" alt="<?=$arItem['PROPERTIES']['UF_PREVIEW_PICTURE']['DESCRIPTION']?>">
                    </a>
                <?}else{?>
                    <div class="main-vacancy-items-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" data-aos="fade-up">
                        <div class="main-vacancy-items-item__text"><?=$arItem['PROPERTIES']['UF_TAGS']['VALUE']?></div>
                        <div class="main-vacancy-items-item__title"><?=$arItem['NAME']?></div>
                        <div class="main-vacancy-items-item__btn">Подробнее</div>
                    </div>
                <?}?>
            <?endforeach;?>
        </div>
    </div>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

