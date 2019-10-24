<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

/*$APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
	"LEVEL"	=>	"3",
	"COL_NUM"	=>	"2",
	"SHOW_DESCRIPTION"	=>	"Y",
	"SET_TITLE"	=>	"Y",
	"CACHE_TIME"	=>	"36000000"
	)
);*/?>

<div class="page404">
	<div class="page404__img">
		<img src="/images/404.svg" alt="">
	</div>
	<div class="page404__title">Упс... Такой страницы не существует.</div>
	<div class="page404__text">Проверьте написание адреса — может быть, вы просто ошиблись при наборе. А может быть, этой страницы уже нет.</div>
	<div class="page404-btns">
		<a href="/">Главная</a>
	</div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>