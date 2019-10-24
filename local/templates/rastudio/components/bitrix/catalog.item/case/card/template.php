<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */
?>
<div class="cases-items-item-left">
    <div class="cases-items-item-left__title">
        <?=$item['NAME']?>
    </div>
    <div class="cases-items-item-left__text">
        <?=$item['PREVIEW_TEXT']?>
    </div>
    <div class="cases-items-item-left-tags">
        <?foreach ($item['PROPERTIES']['UF_TAGS']['VALUE'] as $tag){
            echo $tag." ";
        }?>
    </div>
    <a href="<?=$item['DETAIL_PAGE_URL']?>" class="cases-items-item-left__btn">Смотреть кейс</a>
</div>
<div class="cases-items-item-right">
    <a href="<?=$item['DETAIL_PAGE_URL']?>" class="cases-items-item-right-img">
        <div class="cases-items-item-right-img-wrap">
            <div class="cases-items-item-right__background" style="background-color: <?=$item['PROPERTIES']['UF_BACKGROUND']['VALUE']?>">
            </div>
            <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="" class="cases-items-item-right__img">
        </div>
    </a>
</div>