<?php
session_start();//
$arr = $_POST;
if (array_key_exists('phone', $arr)) {
  // $sendto = 'makarofff@ukr.net';     //  >>> Указать нужный ящик!
   $sendto = 'autoslon.com@yandex.ru';
  $sendtoIMS = 'client@imsmedia.net.ua';
  $from = 'Slon@mail.ru';
  $phone = $arr['phone'];
  $auto = array_key_exists('auto', $arr) ? $arr['auto'] : null;
  $mail_skype = array_key_exists('mail_skype', $arr) ? $arr['mail_skype'] : null;
  $order = array_key_exists('order', $arr) ? $arr['order'] : null;
  // header("HTTP/1.0 200 OK");
  // header("Content-Type: text/plain; charset=utf-8");
  $subject  = "Заявка Langing page Slonauto";
	$headers = "From: $from\nReply-To: $from\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
  $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
	$msg .= "<h2 style='color:#161616;font-weight:bold;font-size:30px;border-bottom:2px dotted #bd0707;'>Новая заявка на сайте SlonAuto.com</h2>\r\n";
  $msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
  if($auto!==null) $msg .= "<p><strong>Авто</strong> ".$auto."</p>\r\n";
  if($mail_skype!==null) $msg .= "<p><strong>Почта или  skype</strong> ".$mail_skype."</p>\r\n";
  if($order!==null) $msg .= "<p><strong>Дополнительно</strong> ".$order."</p>\r\n";
  if (array_key_exists('sourse', $_SESSION)) {
    $sourse = $_SESSION["sourse"];
    $msg .= "<p><strong>Поисковая система:</strong> ".$sourse."</p>\r\n";
  };
  if (array_key_exists('term', $_SESSION)) {
    $term = $_SESSION["term"];
    $msg .= "<p><strong>Ключ:</strong> ".$term."</p>\r\n";
  };
  if (array_key_exists('campaign', $_SESSION)) {
    $campaign = $_SESSION["campaign"];
    $msg .= "<p><strong>Кампания:</strong> ".$campaign."</p>\r\n";
  };
  $msg .= "</body></html>";
  include 'toBitrix24.inc.php';
  if((mail($sendto, $subject, $msg, $headers))&&(mail($sendtoIMS, $subject, $msg, $headers))) {
//    if(mail($sendto, $subject, $msg, $headers)) {
    header("HTTP/1.0 200 OK");
    echo '{"status":"success"}';
  } else {
    header("HTTP/1.0 404 Not Found");
    echo '{"status":"error"}';
  }
} else {
  header("HTTP/1.0 404 Not Found");
  echo '{"status":"error"}';
}
