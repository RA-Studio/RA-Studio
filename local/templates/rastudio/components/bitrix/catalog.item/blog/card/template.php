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
<div class="blog-items-item__img" style="background-color:<?=$item['PROPERTIES']['UF_PREVIEW_BACKGROUND']['VALUE']?>">
    <img src="<?=CFile::GetPath($item['PROPERTIES']['UF_PREVIEW_PICTURE']['VALUE'])?>" alt="<?=$item['PREVIEW_PICTURE']['ALT']?>">
</div>
<div class="blog-items-item-info">
    <div class="blog-items-item-info__title"><?=$item['NAME']?></div>
    <div class="blog-items-item-info-bot"><?
        if(!empty($item['PROPERTIES']['UF_AUTHOR_NAME']['VALUE']) && !empty($item['PROPERTIES']['UF_AUTHOR_PHOTO']['VALUE'])){
            ?><div class="blog-items-item-info-bot-author">
                <?if(!empty($item['PROPERTIES']['UF_AUTHOR_PHOTO']['VALUE'])){
                    ?><div class="blog-items-item-info-bot-author__img">
                        <img src="<?=CFile::GetPath($item['PROPERTIES']['UF_AUTHOR_PHOTO']['VALUE'])?>" alt="<?=$item['PROPERTIES']['UF_AUTHOR_NAME']['VALUE']?>">
                    </div><?
                }?><?=$item['PROPERTIES']['UF_AUTHOR_NAME']['VALUE']
            ?></div><?
        }
        if(!empty($item['DETAIL_TEXT'])){
            $word_count = count(explode(' ',strip_tags($item['DETAIL_TEXT'])));
            $words_per_minute = 160;
            $minutes = ceil($word_count / $words_per_minute);
            $str_minutes = ($minutes == 1) ? "мин." : "мин.";
            $time = "{$minutes} {$str_minutes}";
            ?><div class="blog-items-item-info-bot__time">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="7.5" cy="7.5" r="7" stroke="black" stroke-opacity="0.75"/>
                    <path d="M7.5 7.5V8H8V7.5H7.5ZM8 3C8 2.72386 7.77614 2.5 7.5 2.5C7.22386 2.5 7 2.72386 7 3H8ZM4.5 7C4.22386 7 4 7.22386 4 7.5C4 7.77614 4.22386 8 4.5 8V7ZM8 7.5V3H7V7.5H8ZM7.5 7H4.5V8H7.5V7Z" fill="black" fill-opacity="0.75"/>
                </svg><?=$time
            ?></div><?
        }
        if($item['PROPERTIES']['UF_VIEW_COUNT']['VALUE']!=''){
            ?><div class="blog-items-item-info-bot__looks">
                <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 0.5C2.74592 0.5 1 5.375 1 5.375C1 5.375 2.74592 10.25 7.5 10.25C12.2541 10.25 14 5.375 14 5.375C14 5.375 12.2541 0.5 7.5 0.5Z" stroke="black" stroke-opacity="0.75" stroke-linejoin="round"/>
                    <path d="M9.4375 5.375C9.4375 6.44505 8.57005 7.3125 7.5 7.3125C6.42995 7.3125 5.5625 6.44505 5.5625 5.375C5.5625 4.30495 6.42995 3.4375 7.5 3.4375C8.57005 3.4375 9.4375 4.30495 9.4375 5.375Z" stroke="black" stroke-opacity="0.75"/>
                </svg>
                <?=$item['PROPERTIES']['UF_VIEW_COUNT']['VALUE']?>
            </div><?
        }
    ?></div>
</div>