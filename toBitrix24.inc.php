<?php
define('CRM_HOST', 'autoslon.bitrix24.ua');//домен на битрикс24
define('CRM_PORT', '443');//порт для crm ВЕЗДЕ И ВСЕГДА
define('CRM_PATH', '/crm/configs/import/lead.php');//crm REST server  ВЕЗДЕ И ВСЕГДА

define('CRM_LOGIN', 'lukawov@rambler.ru'); // login ответственного манагера ИЛИ ГЛАВНОГО
define('CRM_PASSWORD', 'qwerty123!@#'); // его пароль
/*
define('CRM_LOGIN', 'bamper-ok@mail.ru'); // login ответственного манагера ИЛИ ГЛАВНОГО
define('CRM_PASSWORD', 'q539858'); // его пароль
*/
//define('CRM_AUTH', 'fwdennrdszhgiok0w0kg4csw4ww'); // authorization hash
/********************************************************************************************/
$postData = array(
    'TITLE' => date('d.m.Y H:i:s'),
    'PHONE_MOBILE' => $phone,
    //'COMPANY_TITLE' => $content ? $content : '',//зачем msg?
    //'NAME' => $user_name ? $user_name : '',
    'EMAIL_WORK' => $mail_skype ? $mail_skype : '',
    'COMMENTS' => $auto ? $auto : 'Звонок',
    'LOGIN' => CRM_LOGIN,
    'PASSWORD' => CRM_PASSWORD,
    //'ASSIGNED_BY_ID' => 1,
    //'AUTH' => CRM_AUTH,
);
$fp = fsockopen("ssl://".CRM_HOST, CRM_PORT, $errno, $errstr, 30);
if ($fp)
{
    $strPostData = '';
    foreach ($postData as $key => $value)
        $strPostData .= ($strPostData == '' ? '' : '&').$key.'='.urlencode($value);
    // prepare POST headers
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
else
{
    echo 'Connection Failed! '.$errstr.' ('.$errno.')';
}
