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
?><div class="main-clients">
    <div class="main-clients__subtitle"><?=$arParams['SUB_TITLE']?></div>
    <h2 class="main-clients__title"><?=$arParams['TITLE']?></h2>
    <div class="main-clients-items" data-aos="fade"><?
        foreach($arResult["ITEMS"] as $arItem){
    	    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    	    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            $case = $arItem['PROPERTIES']['UF_CASE_LINK']['VALUE'];
            $link = $arItem['PROPERTIES']['UF_LINK']['VALUE'];
            if (!empty($link) || !empty($case)){
                ?><noindex>
                    <a rel="nofollow" data-nolink href="<?=$case?$case:$link?>" target="_blank" class="main-clients-items-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <img src="<?=CFile::GetPath($arItem['PROPERTIES']['UF_PREVIEW_PICTURE']['VALUE'])?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
                    </a>
                </noindex><?
            }else{
                ?><noindex>
                <div rel="nofollow" class="main-clients-items-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <img src="<?=CFile::GetPath($arItem['PROPERTIES']['UF_PREVIEW_PICTURE']['VALUE'])?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
                </div>
                </noindex><?
            }
        }
        ?><noindex>
            <a rel="nofollow" class="main-clients-items-add fancybox-btn-init" data-nolink title="Пишите, мы ответим" data-fancybox="" data-options="{&quot;src&quot;: &quot;#SendForm&quot;, &quot;touch&quot;: false}" href="javascript:;">
            Тут может быть<br/> Ваш логотип
            <span>+</span>
            </a>
        </noindex>
    </div>
</div>
