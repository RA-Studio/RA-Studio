<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>

  <div class="general-form">
    <div class="general-btnBlock" style="width: 100%;">
      <div class="general-btnBlock__title">Направление разработки</div>
      <div class="general-btnBlock__item"></div>
      <div class="general-btnBlock__item"></div>
      <div class="general-btnBlock__item"></div>
    </div>

    <div class="general-itemInput">
      <input type="text" data-required data-type="" id="userName" class="general-itemInput__input">
      <label for="userName" class="general-itemInput__label">Placeholder</label>
    </div>

    <div class="general-itemInput general-itemInput_33">
      <input type="text" data-required data-type="" id="userName" class="general-itemInput__input">
      <label for="userName" class="general-itemInput__label">Placeholder</label>
    </div>
    <div class="general-itemInput general-itemInput_33">
      <input type="text" data-required data-type="" id="userName" class="general-itemInput__input">
      <label for="userName" class="general-itemInput__label">Placeholder</label>
    </div>
    <div class="general-itemInput general-itemInput_33">
      <input type="text" data-required data-type="" id="userName" class="general-itemInput__input">
      <label for="userName" class="general-itemInput__label">Placeholder</label>
    </div>

    <div class="general-itemInput general-itemInput_half">
      <input type="text" data-required data-type="" id="userName" class="general-itemInput__input">
      <label for="userName" class="general-itemInput__label">Placeholder</label>
    </div>
    <div class="general-itemInput general-itemInput_half">
      <input type="text" data-required data-type="" id="userName" class="general-itemInput__input">
      <label for="userName" class="general-itemInput__label">Placeholder</label>
    </div>
  </div>


  <style>

    .general-form{
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .general-itemInput{
      position: relative;
      height: 41px;
      box-sizing: border-box;
      margin-top: 41px;
      width: 100%;
    }
    .general-itemInput_33{
      width: calc(100% / 3 - (40px / 3));
    }
    .general-itemInput_half{
      width: calc(50% - 10px);
    }
    .general-itemInput__input{
      border: none;
      border-bottom: 1px solid rgba(0, 0, 0, 0.35);
      height: 100%;
      width: 100%;
    }
    .general-itemInput__label{
      position: absolute;
      cursor: text;
      top: 13px;
      left: 0;
      color: rgba(0, 0, 0, 0.35);
      font-family: 'Avenir Next Cyr Medium';
      transition: .3s;  
      font-size: 16px;
    }
    .general-itemInput__input:focus + .general-itemInput__label{
      top: 0;
      font-size: 10px;
    }
    .general-itemInput__label_top{
      top: 0;
      font-size: 10px;
    }
  </style>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>