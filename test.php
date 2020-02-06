<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

//из 1с
//пример данных из 1с
$json = /*!empty($_POST)?$_POST['param']:*/'[{"0":{"id":"71996","ПоследнееИзменение":"28.12.2019 23:20:58","СтатусСчета":"Формируется"}},"1":{"id":"71995","ПоследнееИзменение":"23.12.2019 23:20:58","СтатусСчета":"Формируется"}]';//'{"0":{"id":"71995","ПоследнееИзменение":"10.11.2019 18:56:04","СтатусСчета":"Новый"}}';
$obj = json_decode($json,true);

//в 1с

$orders = [];
$min5 = time() - 60*5*5000000;
$arFilter = Array(">=DATE_UPDATE" => date($DB->DateFormatToPHP(CSite::GetDateFormat("SHORT")), $min5));
$dbSales = CSaleOrder::GetList(Array("ID" => "ASC"),array()/*$arFilter*/, false, false,array("ID","STATUS_ID","PAY_SYSTEM_ID","DATE_UPDATE","DISCOUNT_VALUE"));

while ($ar_sales = $dbSales->Fetch()) {
    switch ($ar_sales['STATUS_ID']){
        case 'ND':
        case 'N':
            $status = 'Новый';
            break;
        case 'VM':
            $status = 'В магазине';
            break;
        case 'F':
            $status = 'Выполнен';
            break;
        case 'C':
            $status = 'Отменен';
            break;
        default:
            $status='';
            break;
    }
    switch ($ar_sales['PAY_SYSTEM_ID']){
        case 1:
            $payment = 'Оплата наличными';
            break;
        case 13:
            $payment = 'Оплачено yandex';
            break;
        case 16:
            $payment = 'Оплачен БН';
            break;
        case 14:
        case 18:
            $payment = 'Оплата сбербанк';
            break;
        default:
            $payment='';
            break;
    }
    array_push($orders, ["id"=>$ar_sales['ID'],"ПоследнееИзменение"=>$ar_sales['DATE_UPDATE'],"СтатусСчета"=>$status, "Оплата"=>$payment, "Скидка"=>$ar_sales['DISCOUNT_VALUE'] ]);
    foreach($obj as $key=>$order){
        if ($order['id']==$ar_sales["ID"]){
            unset($obj[$key]);
        }
    }
}
print_r($obj);
/**///изменить заказы
foreach ($obj[0] as $order) {

    $arOrder = CSaleOrder::GetByID($order["id"]);
    if ($arOrder) {
        echo "<pre>";
        print_r($order['id']);
        print_r($arOrder);
        echo "</pre>";
        if(strtotime($order['ПоследнееИзменение']) >strtotime($arOrder['DATE_UPDATE'])){
            switch ($order['СтатусСчета']){
                case 'Новый':
                    $status = 'ND';
                    break;
                case 'Дособрать':
                case 'Формируется':
                    $status = 'FO';
                    break;
                case 'В магазине':
                    $status = 'VM';
                    break;
                case 'Выполнен':
                    $status = 'F';
                    break;
                case 'Отмена (нет товара)':
                case 'Отменен':
                    $status = 'C';
                    break;
                default:
                    $status='';
                    break;
            }
            print_r($order);

            if($status!=''){
                $arFields = array("STATUS_ID" => $status);
                CSaleOrder::Update($order["id"], $arFields);
            }
        }
    }
}
echo '<pre>';
//print_r($orders/*json_encode($orders,JSON_UNESCAPED_UNICODE)*/);
echo '</pre>';
?>