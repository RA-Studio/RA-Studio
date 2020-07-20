<?
define('STOP_STATISTICS', true);
define('NOT_CHECK_PERMISSIONS', true);


define('CRM_HOST', 'rastudio.bitrix24.ru');
define('CRM_PORT', '443');
define('CRM_PATH', '/crm/configs/import/lead.php');
define('CRM_LOGIN', 'info@ra-studio.ru');
define('CRM_PASSWORD', 'rastudio123');

$_POST['AJAX'] = 'Y';


require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
$APPLICATION->RestartBuffer();

if (!\Bitrix\Main\Application::isUtfMode()) {
    $context = \Bitrix\Main\Application::getInstance()->getContext();
    $_POST['arParams']['templateName'] = \Bitrix\Main\Text\Encoding::convertEncoding($_POST['arParams']['templateName'], 'UTF-8', $context->getCulture()->getCharset());
    $_POST['arParams'] = \Bitrix\Main\Text\Encoding::convertEncoding($_POST['arParams'], 'UTF-8', $context->getCulture()->getCharset());
}

header('Content-Type: text/html; charset='.LANG_CHARSET);

foreach ($_POST['arParams'] as $key => $val){
    if(strpos($val, '-array-') !== false){
        $_POST['arParams'][$key] = explode('-array-', $val);
        TrimArr($_POST['arParams'][$key]);
    }
}

$title = $_POST['arParams']['FORM_NAME'];
$name = $_POST['FIELDS']['TITLE'];//получаем данные из поля Имя
$phone = $_POST['FIELDS']['PHONE']; //получаем данные из поля Телефон
if (isset($_POST['FIELDS']['MESSAGE']) && !empty($_POST['FIELDS']['MESSAGE'])){
    $communication = $_POST['FIELDS']['MESSAGE']; //получаем данные из поля email
}
if (isset($_POST['FIELDS']['EMAIL']) && !empty($_POST['FIELDS']['EMAIL'])) {
    $mail = $_POST['FIELDS']['EMAIL'];
}
if (isset($_POST['FIELDS']['ADUCATION']) && !empty($_POST['FIELDS']['ADUCATION'])) {
    $ADUCATION = $_POST['FIELDS']['ADUCATION'];
}
if (isset($_POST['FIELDS']['EXPERIENCE']) && !empty($_POST['FIELDS']['EXPERIENCE'])) {
    $EXPERIENCE = $_POST['FIELDS']['EXPERIENCE'];
}
if (isset($_POST['FIELDS']['PORTPHOLIO']) && !empty($_POST['FIELDS']['PORTPHOLIO'])) {
    $PORTPHOLIO = $_POST['FIELDS']['PORTPHOLIO'];
}
if (isset($_POST['FIELDS']['FILE']) && !empty($_POST['FIELDS']['FILE'])) {
    $FILE = $_POST['FIELDS']['FILE'];
}
if (isset($_POST['FIELDS']['COMPANY']) && !empty($_POST['FIELDS']['COMPANY'])) {
    $COMPANY = $_POST['FIELDS']['COMPANY'];
}
if (isset($_POST['FIELDS']['DIRECTION']) && !empty($_POST['FIELDS']['DIRECTION'])) {
    $DIRECTION = $_POST['FIELDS']['DIRECTION'];
}


$postData = array(
    'TITLE' => $title,
    'NAME' => $name,
    'PHONE_WORK' => $phone,
    'COMPANY_TITLE'=>$COMPANY,
    'COMMENTS'=>$communication,
    'EMAIL_WORK'=>$mail,
    'UF_CRM_1583417200232'=>$EXPERIENCE, //опыт работы
    'UF_CRM_1583417157269'=>$ADUCATION,// образование
    'UF_CRM_1583417235186'=>$PORTPHOLIO,// портфолио
    'UF_CRM_1583417287557' => $FILE,//файл резюме
    'UF_CRM_1583419667781' => $DIRECTION, //направление разработки
);

if (defined('CRM_AUTH')){
    $postData['AUTH'] = CRM_AUTH;
}
else{
    $postData['LOGIN'] = CRM_LOGIN;
    $postData['PASSWORD'] = CRM_PASSWORD;
}

$fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);

if ($fp){
    $strPostData = '';
    foreach ($postData as $key => $value)
        $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);

    $str = "POST ".CRM_PATH." HTTP/1.0\r\n";
    $str .= "Host: ".CRM_HOST."\r\n";
    $str .= "Content-Type: application/x-www-form-urlencoded\r\n";
    $str .= "Content-Length: ".strlen($strPostData)."\r\n";
    $str .= "Connection: close\r\n\r\n";
    $str .= $strPostData;

    fwrite($fp, $str);

    $result = '';
    while (!feof($fp))
    {
        $result .= fgets($fp, 128);
    }
    fclose($fp);

    $response = explode("\r\n\r\n", $result);

    $output = '<pre>'.print_r($response[1], 1).'</pre>';
}
else{
    echo 'Connection Failed! '.$errstr.' ('.$errno.')';
}





$APPLICATION->IncludeComponent('slam:easyform', $_POST['arParams']['templateName'], $_POST['arParams']);
?>