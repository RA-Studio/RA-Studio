<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

use \Bitrix\Main\Localization\Loc;

$FORM_ID           = trim($arParams['FORM_ID']);
$FORM_AUTOCOMPLETE = $arParams['FORM_AUTOCOMPLETE'] ? 'on' : 'off';
$FORM_ACTION_URI   = "";
$WITH_FORM = strlen($arParams['WIDTH_FORM']) > 0 ? 'style="max-width:'.$arParams['WIDTH_FORM'].'"' : '';
?>
<form class="vacancy-form"
      id="<?=$FORM_ID?>"
      enctype="multipart/form-data"
      method="POST"
      action="<?=$FORM_ACTION_URI;?>"
      autocomplete="<?=$FORM_AUTOCOMPLETE?>"
      novalidate="novalidate"
>
    <div class="vacancy-form__title"><?=$arParams['FORM_NAME']?></div>
    <input type="hidden" name="FORM_ID" value="<?=$FORM_ID?>">
    <input type="text" style="display: none" name="ANTIBOT[NAME]" value="<?=$arResult['ANTIBOT']['NAME'];?>" class="hidden">
    <?//hidden fields
    foreach($arResult['FORM_FIELDS'] as $fieldCode => $arField)
    {
        if($arField['TYPE'] == 'hidden')
        {
            ?>
            <input type="hidden" name="<?=$arField['NAME']?>" value="<?=$arField['VALUE'];?>"/>
            <?
            unset($arResult['FORM_FIELDS'][$fieldCode]);
        }
    }
    ?>
    <?if(!empty($arResult['FORM_FIELDS'])):?>
    <div class="vacancy-form-row">
        <?/*
        <input class="vacancy-form__input input-33" type="tel" placeholder="Телефон" name="tel" data-required>
        <input class="vacancy-form__input input-33" type="text" placeholder="Email" name="email" data-required>
        <input class="vacancy-form__input input-50" type="text" placeholder="Образование" name="education" data-required>
        <input class="vacancy-form__input input-50" type="text" placeholder="Опыт работы" name="experience">
        <input class="vacancy-form__input input-100" type="text" placeholder="Ссылка на портфолио" name="link">
        */?>
            <?foreach($arResult['FORM_FIELDS'] as $fieldCode => $arField):

                if(!$arParams['HIDE_ASTERISK'] && !$arParams['HIDE_FIELD_NAME']){
                    $asteriks = ':';
                    if($arField['REQUIRED']) {
                        $asteriks = '<span class="asterisk">*</span>:';
                    }
                    $arField['TITLE'] = $arField['TITLE'].$asteriks;
                }

                if($arField['TYPE'] == 'textarea'):?>
                    <? if(!$arParams['HIDE_FIELD_NAME']): ?>
                        <label for="<?=$arField['ID']?>"><?=$arField['TITLE']?></label>
                    <? endif; ?>
                    <textarea class="input-100" id="<?=$arField['ID']?>" rows="5" cols="30"  name="<?=$arField['NAME']?>" <?=$arField['PLACEHOLDER_STR'];?> <?=$arField['REQUIRED']==1?'data-required':''?> <?=$arField['REQ_STR']?>><?=$arField['VALUE'];?></textarea>
                <?elseif($arField['TYPE'] == 'radio' || $arField['TYPE'] == 'checkbox'):?>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <? if(!$arParams['HIDE_FIELD_NAME']): ?>
                                <label class="control-label"><?=$arField['TITLE']?>&nbsp;</label>
                            <? endif; ?>
                            <?foreach($arField['VALUE'] as $key => $arVal):?>
                                <?if(!$arField['SHOW_INLINE']):?><div class="<?=$arField['TYPE']?>"><?endif;?>
                                <?if(!empty($arVal)):?>
                                    <label class="<?=$arField['SHOW_INLINE'] ? $arField['TYPE'].'-inline' : ''?>">
                                        <input  type="<?=$arField['TYPE']?>" name="<?=$arField['NAME']?>" <?=$arField['REQUIRED']==1?'data-required':''?> value="<?=$arVal?>" <?=$arField['REQ_STR']?>>&nbsp;<?=$arVal?>
                                    </label>
                                <? endif; ?>
                                <?if(!$arField['SHOW_INLINE']):?></div><?endif;?>
                            <?endforeach;?>
                        </div>
                    </div>
                <?elseif($arField['TYPE'] == 'accept'):?>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input  type="checkbox" name="<?=$arField['NAME']?>" <?=$arField['REQUIRED']==1?'data-required':''?> value="<?=Loc::getMessage('SLAM_EASYFORM_YES')?>" <?=$arField['REQ_STR']?>>&nbsp;<?=htmlspecialcharsBack($arField['VALUE'])?>
                            </label>
                        </div>
                    </div>
                <?elseif($arField['TYPE'] == 'select'):?>
                    <div class="col-xs-12 switch-select">
                        <div class="form-group switch-parent">
                            <? if(!$arParams['HIDE_FIELD_NAME']): ?>
                                <label for="<?=$arField['ID']?>" class="control-label"><?=$arField['TITLE']?></label>
                            <? endif; ?>
                            <select class="form-control" id="<?=$arField['ID']?>" <?=$arField['MULTISELECT'] == 'Y' ? 'multiple' : ''?> name="<?=$arField['NAME']?>" <?=$arField['REQ_STR']?>>

                                <? if($arField['MULTISELECT'] != 'Y'): ?>
                                    <option value="">&#8212;</option>
                                <? endif; ?>

                                <?if(is_array($arField['VALUE'])):?>
                                    <?foreach($arField['VALUE'] as $arVal):?>
                                        <?if(!empty($arVal)):?>
                                            <option value="<?=$arVal?>"><?=$arVal?></option>
                                        <?endif;?>
                                    <?endforeach;?>
                                    <?if($arField['SET_ADDITION_SELECT_VAL']):?>
                                        <option value="" data-switch="other"><?=$arField['ADDITION_SELECT_VAL']?></option>
                                    <?endif;?>
                                <?endif;?>
                            </select>
                        </div>
                        <?if($arField['SET_ADDITION_SELECT_VAL']):?>
                            <div class="form-group switch-child hidden">
                                <? if(!$arParams['HIDE_FIELD_NAME']): ?>
                                    <label class="control-label" for="<?=$arField['SET_ADDITION_SELECT_ID']?>"><?=$arField['TITLE']?></label>
                                <? endif; ?>
                                <div class="row">
                                    <div class="col-xs-9">
                                        <input class="form-control" type="text" id="<?=$arField['SET_ADDITION_SELECT_ID']?>" name="<?=$arField['ADDITION_SELECT_NAME']?>" value="" maxlength="30" <?=$arField['REQ_STR']?> <?=$arField['REQUIRED']==1?'data-required':''?>>
                                    </div>
                                    <div class="col-xs-3">
                                        <a href="" class="btn-switch-back" onclick="return false;"><?=Loc::getMessage('SLAM_EASYFORM_TO_LIST')?></a>
                                    </div>
                                </div>
                            </div>
                        <?endif;?>
                    </div>
                <?elseif($arField['TYPE'] == 'file'):?>
                <?/*
                    <div class="vacancy-form-file">
                        <label class="control-label" for="<?=$arField['ID']?>"><?=$arField['TITLE']?></label>
                        <input type="file" id="<?=$arField['ID']?>" name="<?=$arField['NAME']?>">
                        <span> </span>
                    </div>
                    */?>
                            <? if(!$arParams['HIDE_FIELD_NAME']): ?>
                                <label class="control-label" for="<?=$arField['ID']?>"><?=$arField['TITLE']?></label>
                            <? endif; ?>
                            <div class="drag_n_drop-field">
                                <? $CID = $GLOBALS["APPLICATION"]->IncludeComponent(
                                    'bitrix:main.file.input',
                                    $arField['DROPZONE_INCLUDE'] ? 'drag_n_drop' : '.default',
                                    array(
                                        'HIDE_FIELD_NAME' => $arParams['HIDE_FIELD_NAME'],
                                        'INPUT_NAME' => $arField['CODE'],
                                        'INPUT_TITLE' => $arField['TITLE'],
                                        'INPUT_NAME_UNSAVED' => $arField['CODE'],
                                        'MAX_FILE_SIZE' => $arField['FILE_MAX_SIZE'],//'20971520', //20Mb
                                        'MULTIPLE' => 'Y',
                                        'CONTROL_ID' => $arField['ID'],
                                        'MODULE_ID' => 'slam.easyform',
                                        'ALLOW_UPLOAD' => 'F',
                                        'ALLOW_UPLOAD_EXT' => $arField['FILE_EXTENSION'],
                                    ),
                                    $component,
                                    array("HIDE_ICONS" => "Y")
                                );?>
                            </div>
                <?else:?>
                    <? if(!$arParams['HIDE_FIELD_NAME']): ?>
                        <label for="<?=$arField['ID']?>"><?=$arField['TITLE']?></label>
                    <? endif; //input-33 input-50 input-100?>
                    <input class="vacancy-form__input input-33" type="<?=$arField['TYPE'];?>" id="<?=$arField['ID']?>" name="<?=$arField['NAME']?>" value="<?=$arField['VALUE'];?>" <?=$arField['PLACEHOLDER_STR'];?> <?=$arField['REQ_STR']?> <?=$arField['REQUIRED']==1?'data-required':''?> <?=$arField['MASK_STR']?>>
                <?endif;
            endforeach;?>
            <?if($arParams["USE_CAPTCHA"]):?>
            <div class="col-xs-12">
                <div class="form-group">
                    <? if(!$arParams['HIDE_FIELD_NAME'] && strlen($arParams['CAPTCHA_TITLE']) > 0): ?>
                        <label for="<?=$FORM_ID?>-captchaValidator" class="control-label"><?=htmlspecialcharsBack($arParams['CAPTCHA_TITLE'])?></label>
                    <? endif; ?>
                    <input id="<?=$FORM_ID?>-captchaValidator"  class="form-control" type="text" required data-bv-notempty-message="<?=GetMessage("SLAM_REQUIRED_MESS");?>" name="captchaValidator" style="border: none; height: 0; padding: 0; visibility: hidden;">
                    <div id="<?=$FORM_ID?>-captchaContainer"></div>
                </div>
            </div>
        <?endif;?>
    </div>
    <?endif;?>
    <div class="vacancy-form-bot">
        <button class="vacancy-form-bot__btn" type="submit" data-default="<?=$arParams['FORM_SUBMIT_VALUE']?>"><?=$arParams['FORM_SUBMIT_VALUE']?></button>
        <?if($arResult['WARNING_MSG']):?>
        <span><?=$arResult['WARNING_MSG'];?></span>
        <?endif;?>
    </div>
</form>
<script type="text/javascript">
    var easyForm = new JCEasyForm(<?echo CUtil::PhpToJSObject($arParams)?>);
    function success_<?=$FORM_ID?>() {
        $(<?=$FORM_ID?>).addClass('success');
        $(<?=$FORM_ID?>).find('button[type="submit"]').text('Отправлено');
        $(<?=$FORM_ID?>).find('input').prop( "disabled", true );
        $(<?=$FORM_ID?>).find('textarea').prop( "disabled", true );
        setTimeout( () => {
            $(<?=$FORM_ID?>).removeClass('success');
            $(<?=$FORM_ID?>).find('button[type="submit"]').text('Связаться');
            $(<?=$FORM_ID?>).find('input').prop( "disabled", false ).val('').removeClass('input-border');
            $(<?=$FORM_ID?>).find('textarea').prop( "disabled", false ).val('').removeClass('input-border');
            $.fancybox.close();
        }, 2000);
    }
</script>
