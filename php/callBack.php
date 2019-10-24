<?php
require_once("phpMailer/PHPMailer.php");
require_once("phpMailer/Exception.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//isset($_REQUEST['name']) && $_REQUEST['tel']
if(!empty($_REQUEST)){
    $siteName = $_SERVER['HTTP_REFERER'];
    foreach ($_REQUEST as $key => $value){
        $_REQUEST[$key] = htmlspecialchars($value, ENT_QUOTES);
    }

    $ok = 1;
    $mail_from = !empty($_REQUEST['email']) ?  $_REQUEST['email'] : 'info@'.str_replace('/', '', str_replace('http://', '', $siteName));
    $mail = new PHPMailer();
    $mail->CharSet = "UTF-8";
    $mail->From = 'rnet2005@gmail.com';
    $mail->FromName = $siteName;

    $mail->addAddress('rnet2005@gmail.com');
    $mail->addAddress('ak@ra-studio.ru');
    $mail->addBCC('d.dyulger@ra-studio.ru');

    $mail->addReplyTo($mail->From, $mail->FromName);
    $mail->isHTML(true);
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['tel'];

    $mail->Subject = $siteName;

    if (!empty($_REQUEST['name'])){
        $mail->Body .= '<b>ФИО: </b>'.$_REQUEST['name'].'<br>';
    }
    if (!empty($_REQUEST['email'])){
        $mail->Body .= '<b>E-mail: </b>'.$_REQUEST['email'].'<br>';
    }
    if (!empty($_REQUEST['tel'])){
        $mail->Body .= '<b>Телефон: </b>'.$_REQUEST['tel'].'<br>';
    }
    if (!empty($_REQUEST['education'])){
        $mail->Body .= '<b>Образование : </b>'.$_REQUEST['education'].'<br>';
    }
    if (!empty($_REQUEST['experience'])){
        $mail->Body .= '<b>Опыт работы: </b>'.$_REQUEST['experience'].'<br>';
    }
    if (!empty($_REQUEST['link'])){
        $mail->Body .= '<b>Ссылка на портфолио: </b>'.$_REQUEST['link'].'<br>';
    }
    if (!empty($_REQUEST['description'])){
        $mail->Body .= '<b>Подробнее: </b>'.$_REQUEST['description'].'<br>';
    }
    if (!empty($_FILES['file'])){
        $mail->Body .= '<b>Резюме (): </b>'.$_FILES['file'].'<br>';
    }

    $result = $_FILES['file'];
    if(!$mail->send()) {
        //$result = 'Mailer Error: ' . $mail->ErrorInfo;
        $rs = 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $result = 'ok';
    }

    echo json_encode(array(
        'response' => $result,
        'success' => true,
    ));
}
