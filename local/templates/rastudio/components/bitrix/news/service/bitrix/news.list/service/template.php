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
<div class="services-items">
    <!--<div class="services-items-item" style="background: #FBFCFE;">
        <div class="services-items-item-col">
            <div class="services-items-item__title">Разработка</div>
            <div class="services-items-item__text">Комплексный подход</div>
            <a href="#" class="services-items-item__btn">Узнать подробнее</a>
        </div>
        <div class="services-items-item-col">
            <img src="/local/templates/rastudio/assets/images/developer_service.svg" alt="">
        </div>
    </div>
    <div class="services-items-item" style="background: #FAFAFA;">
        <div class="services-items-item-col">
            <div class="services-items-item__title">SEO</div>
            <div class="services-items-item__text">Ваш уникальный знак</div>
            <a href="#" class="services-items-item__btn">Узнать подробнее</a>
        </div>
        <div class="services-items-item-col">
            <img src="/local/templates/rastudio/assets/images/seo_service.svg" alt="">
        </div>
    </div>
    <div class="services-items-item" style="background: #FFF7F9;">
        <div class="services-items-item-col">
            <div class="services-items-item__title">Контекстная рекламма</div>
            <div class="services-items-item__text">Управляйте выдачей</div>
            <a href="#" class="services-items-item__btn">Узнать подробнее</a>
        </div>
        <div class="services-items-item-col">
            <img src="/local/templates/rastudio/assets/images/context_service.svg" alt="">
        </div>
    </div>
    <div class="services-items-item" style="background: #FFF9F9;">
        <div class="services-items-item-col">
            <div class="services-items-item__title">1С-Битрикс</div>
            <div class="services-items-item__text">Покупка лицезнций</div>
            <a href="#" class="services-items-item__btn">Узнать подробнее</a>
        </div>
        <div class="services-items-item-col">
            <img src="/local/templates/rastudio/assets/images/1c_service.svg" alt="">
        </div>
    </div>
    <div class="services-items-item" style="background: #FBFCFE;">
        <div class="services-items-item-col">
            <div class="services-items-item__title">Репутация</div>
            <div class="services-items-item__text">Качественные разработки</div>
            <a href="#" class="services-items-item__btn">Узнать подробнее</a>
        </div>
        <div class="services-items-item-col">
            <img src="/local/templates/rastudio/assets/images/reputation_service.svg" alt="">
        </div>
    </div>-->
    <?//if($arParams["DISPLAY_TOP_PAGER"]):?>
    <!--	--><?//=$arResult["NAV_STRING"]?><!--<br />-->
    <?//endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="services-items-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="background:<?=$arItem['PROPERTIES']['UF_PREVIEW_BACKGROUND']['VALUE']?>">
        <div class="services-items-item-col">
            <div class="services-items-item__title"><?=$arItem['NAME']?></div>
            <div class="services-items-item__text"><?=$arItem['PREVIEW_TEXT']?></div>
            <a href="#" class="services-items-item__btn">Узнать подробнее</a>
        </div>
        <div class="services-items-item-col">
            <img src="<?=Cfile::GetPath($arItem['PROPERTIES']['UF_PREVIEW_PICTURE']['VALUE'])?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
        </div>
    </div>
<?endforeach;?>
<?/*if($arParams["DISPLAY_BOTTOM_PAGER"]):*/?><!--
	<br /><?/*=$arResult["NAV_STRING"]*/?>
--><?/*endif;*/?>
</div>
