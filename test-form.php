<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?>
  <script src="assets/scripts/supaform.js"></script>
  <form action="">
    <div class="general-form">
      <div class="general-btnBlock">
        <div class="general-btnBlock__title">Направление разработки</div>
        <div class="general-btnBlock-wrap">
          <input type="checkbox" id="store" class="general-btnBlock__check">
          <label class="general-btnBlock__label" for="store">Интернет-магазин</label>
          <input type="checkbox" id="landing" class="general-btnBlock__check">
          <label class="general-btnBlock__label" for="landing">Лендинг</label>
          <input type="checkbox" id="service" class="general-btnBlock__check">
          <label class="general-btnBlock__label" for="service">Сервис</label>
        </div>
      </div>

      <div class="general-itemInput general-itemInput_file">
        <div class="general-itemInput__exit"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="14px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357;" xml:space="preserve"><g id="close"><polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 214.2,178.5 "></polygon></g></svg></div>
        <label class="general-itemInput_file__label">
          <p style="display: flex;">
          <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 11.5V6C10 4.93913 9.57857 3.92172 8.82843 3.17157C8.07828 2.42143 7.06087 2 6 2C4.93913 2 3.92172 2.42143 3.17157 3.17157C2.42143 3.92172 2 4.93913 2 6V11.5C2 13.2239 2.68482 14.8772 3.90381 16.0962C5.12279 17.3152 6.77609 18 8.5 18C10.2239 18 11.8772 17.3152 13.0962 16.0962C14.3152 14.8772 15 13.2239 15 11.5V2H17V11.5C17 13.7543 16.1045 15.9163 14.5104 17.5104C12.9163 19.1045 10.7543 20 8.5 20C6.24566 20 4.08365 19.1045 2.48959 17.5104C0.895533 15.9163 0 13.7543 0 11.5V6C0 4.4087 0.632141 2.88258 1.75736 1.75736C2.88258 0.632141 4.4087 0 6 0C7.5913 0 9.11742 0.632141 10.2426 1.75736C11.3679 2.88258 12 4.4087 12 6V11.5C12 12.4283 11.6313 13.3185 10.9749 13.9749C10.3185 14.6313 9.42826 15 8.5 15C7.57174 15 6.6815 14.6313 6.02513 13.9749C5.36875 13.3185 5 12.4283 5 11.5V6H7V11.5C7 11.8978 7.15804 12.2794 7.43934 12.5607C7.72064 12.842 8.10218 13 8.5 13C8.89782 13 9.27936 12.842 9.56066 12.5607C9.84196 12.2794 10 11.8978 10 11.5Z" fill="black" fill-opacity="0.5"/></svg>
          Прикрепить файл</p>
          <input type="file" class="general-itemInput__FILE" multiple="multiple" id="filesCallOrder">
        </label>
        <div class="general-itemInput-box"></div>
      </div>

      
      <div class="general-itemInput">
        <input type="text" data-required data-type="" id="userName" class="general-itemInput__input">
        <label for="userName" class="general-itemInput__label">Имя</label>
      </div>
      <div class="general-itemInput">
        <input type="text" data-required data-type="tel" id="userTel" class="general-itemInput__input">
        <label for="userTel" class="general-itemInput__label">Телефон</label>
      </div>


      <div class="general-itemInput">
        <textarea row="1" data-required id="userText" class="general-itemInput__input general-itemInput__input_text"></textarea>
        <label for="userText" class="general-itemInput__label">Описание проекта</label>
      </div>


      <div class="general-itemInput general-itemInput_half">
        <input type="text" data-required data-type="email" id="userEmail" class="general-itemInput__input">
        <label for="userEmail" class="general-itemInput__label">Email</label>
      </div>
      <div class="general-itemInput general-itemInput_half">
        <input type="text" data-required data-type="" id="userNameOfCompany" class="general-itemInput__input">
        <label for="userNameOfCompany" class="general-itemInput__label">Название компании</label>
      </div>
      <div class="general-itemInput">
        <input type="text" data-required data-type="" id="userProject" class="general-itemInput__input">
        <label for="userProject" class="general-itemInput__label">Описание проекта</label>
      </div>

      <div class="general-itemInput general-itemInput_c">
        <input type="checkbox" class="general-itemInput__check" id="soglasen-huli">
        
        <label for="soglasen-huli" class="general-itemInput__check-label">
          <div>
            <span></span>
          </div>
          Согласен?
        </label>
      </div>

      <div class="general-itemInput general-itemInput_33">
        <input type="text" data-required data-type="" id="userName" class="general-itemInput__input">
        <label for="userName" class="general-itemInput__label">Треть</label>
      </div>
      <div class="general-itemInput general-itemInput_33">
        <input type="text" data-required data-type="" id="userName" class="general-itemInput__input">
        <label for="userName" class="general-itemInput__label">треть</label>
      </div>
      <div class="general-itemInput general-itemInput_33">
        <input type="text" data-required data-type="" id="userName" class="general-itemInput__input">
        <label for="userName" class="general-itemInput__label">треть</label>
      </div>

      
      <div class="general-itemInput general-itemInput_25">
        <input type="text" data-required data-type="" id="userName" class="general-itemInput__input">
        <label for="userName" class="general-itemInput__label">4</label>
      </div>
      <div class="general-itemInput general-itemInput_25">
        <input type="text" data-required data-type="" id="userName" class="general-itemInput__input">
        <label for="userName" class="general-itemInput__label">4етверть</label>
      </div>
      <div class="general-itemInput general-itemInput_25">
        <input type="text" data-required data-type="" id="userName" class="general-itemInput__input">
        <label for="userName" class="general-itemInput__label">4етверть</label>
      </div>
      <div class="general-itemInput general-itemInput_25">
        <input type="text" data-required data-type="" id="userName" class="general-itemInput__input">
        <label for="userName" class="general-itemInput__label">4етверть</label>
      </div>
      
      <div class="general-itemInput">
        <button data-type="cleanForm" class="general__btn">Очистить форму</button>
      </div>
      <div class="general-bottomBlock">
        <button type="submit" class="general__btn">Отправить заявку</button>
        <p class="general-bottomBlock__text">Нажимая на кнопку, вы даете согласие на обработку <a href="#">персональных данных</a></p>
      </div>
    </div>
  </form>


  <style>

    input, textarea{
      transition: .3s;
    }

    .general-form{
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .general-itemInput{
      position: relative;
      min-height: 41px;
      box-sizing: border-box;
      margin-top: 41px;
      width: 100%;
    }
    .general-itemInput_33{
      width: calc(100% / 3 - (40px / 3));
    }
    
    .general-itemInput_25{
      width: calc(25% - 15px);
    }
    .general-itemInput__check-label > div{
      height: 20px;
      width: 20px;
      box-sizing: border-box;
      border: 2px solid rgba(0, 0, 0, 0.5);
      border-radius: 3px;
      margin-right: 10px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .general-itemInput__check-label > div > span{
      height: 10px;
      width: 10px;
      opacity: 0;
      border-radius: 1px;
      transition: .3s;
      background-color: #6E1866;
    }
    .general-itemInput_c input{
      display: none;
    }
    .general-itemInput__check-label:hover div > span {
      opacity: 0.5;
    }
    .general-itemInput_c input:checked + .general-itemInput__check-label div span{
      opacity: 1;
    }
    .general-itemInput__check-label{
      cursor: pointer;
      display: flex;
      align-items: center; 
    }
    .general-itemInput_c{
      height: auto; 
    }
    .general-itemInput_half{
      width: calc(50% - 10px);
    }
    .general-itemInput__input{
      border: none;
      border-bottom: 1px solid rgba(0, 0, 0, 0.35);
      height: 100%;
      width: 100%;
      padding-top: 7px;
      font-weight: 450;
    }
    .general-itemInput__label{
      position: absolute;
      cursor: text;
      top: 13px;
      left: 0;
      color: rgba(0, 0, 0, 0.35);
      font-weight: 450;
      transition: .3s;  
      font-size: 16px;
    }
    .general-itemInput__label_top{
      top: 0;
      font-size: 10px;
    }
    .general-itemInput__input:focus + .general-itemInput__label{
      top: 0;
      font-size: 10px;
    }
    .general-btnBlock{
    }
    .general-btnBlock__label:hover{
      background-color: rgba(110, 24, 102, 0.05);
    }
    .general-btnBlock__check:checked + .general-btnBlock__label{
      background-color: #6E1866;
      color: #fff;
      border-color: #6E1866;
    }
    .general-btnBlock__label{
      transition: .3s;
      border: 1px solid rgba(0, 0, 0, 0.5);
      box-sizing: border-box;
      height: 30px;
      padding: 0 20px;
      margin-right: 10px;
      border-radius: 50px;
      font-size: 14px;
      font-weight: 450;
      align-items: center;
      cursor: pointer;  
      margin: 6.5px 10px 6.5px 0;
      display: flex;
    }
    .general-btnBlock__title{
      margin-bottom: 10px;
      font-size: 16px;
      line-height: 20px;
      font-weight: 450;
      color: rgba(0, 0, 0, 0.35);
    }
    .general-btnBlock__check{
      display: none;
    }
    .general-btnBlock-wrap{
      display: flex;
      flex-wrap: wrap;
      margin: -6.5px -10px -6.5px 0;
      width: calc(100% + 10px);
    }
    .general-bottomBlock{
      margin-top: 60px;
      display: flex;
      align-items: center;
    }
    .general-bottomBlock__text a{
      color: #6E1866;
    }
    .general-bottomBlock__text{
      font-size: 12px;
      line-height: 15px;  
      font-weight: 400;
      color: rgba(0, 0, 0, 0.7);
    }
    .general__btn:hover{
      background-color:  #6E1866;
      color: #fff;
    }
    .general__btn{
      border: 2px solid #6E1866;
      box-sizing: border-box;
      transition: .3s;
      background-color: #fff;
      cursor: pointer;
      border-radius: 5px;
      height: 50px;
      display: flex;
      padding: 0 35px;
      color: #6E1866;
      margin-right: 20px;
      align-items: center;
      font-weight: 450;
    }

    .general-itemInput_file{
      
    }
    .general-itemInput_file input{
      display: none;
    }
    .general-itemInput_file svg{
      margin-right: 10px;
    }
    .general-itemInput__exit{
      position: absolute;
      top: 0;
      right: 0;
    }
    .general-itemInput_file__label{
      color: rgba(0, 0, 0, 0.45);
      max-width: 300px;
      cursor: pointer;
    }
    .general-itemInput-box__item:not(:last-child){
      margin-bottom: 8px;
    }
    .general-itemInput__exit{
      cursor: pointer;
      display: none;
    }















    
    .general-itemInput__input_text{
      box-sizing: border-box;
      resize: none;
      padding-top: 14px;
      resize: none; 
      display: block;
      width: 100%;
      padding-bottom: 0;
      margin-bottom: -20px;
    }






















  </style>

  <script>

















    
    $(document).on('input', 'textarea', function(e){
      e.target.style.height = 'auto'
      e.target.style.height = e.target.scrollHeight + 10 + "px" 
    })





























  $(document).on('change', 'input[type=file]', function(){  
    let i = 0,
        inp = this,
        files1 = inp.files,
        len = files1.length,
        forma = $(this).closest('form');
    forma.find('.general-itemInput_file__label').fadeOut('fast');
    setTimeout (() => {
      for (; i < len; i++) {
        console.log($(this)[0].files[i].name);
        forma.find('.general-itemInput-box').append('<p class="general-itemInput-box__item">' + $(this)[0].files[i].name + '</p>');
      }
      forma.find('.general-itemInput__exit').fadeIn('fast');
    }, 200)
  });
  


  $(document).on('click', '.general-itemInput__exit', function(){
    $(this).closest('form').find('.general-itemInput_file__label').fadeIn();
    $(this).fadeOut();
    $(this).closest('form').find('.general-itemInput-box p').remove();

    $(this).closest('form').find('input[type=file]').files = [];
  })

  </script>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>