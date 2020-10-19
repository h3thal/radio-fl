<?php
header('Content-Type: text/html; charset=utf-8');
// Get Data	
$project = strip_tags($_POST['project']);
$name = strip_tags($_POST['name']);
$tel = strip_tags($_POST['tel']);
$subject = strip_tags($_POST['subject']);
$mail = strip_tags($_POST['mail']);
$company = strip_tags($_POST['company']);
$target = strip_tags($_POST['target']);
$target1 = strip_tags($_POST['target1']);
$target2 = strip_tags($_POST['target2']);
$target3 = strip_tags($_POST['target3']);
// Send Message
// reklama@artmedia-kbr.ru,



$header = "MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n"."From: Artmedia-kbr.ru Site  <support@artmedia-kbr.ru>\r\n";  

mail( "support@artmedia-kbr.ru, reklama@artmedia-kbr.ru, f89034909970@gmail.com", "Новая заявка на рекламу",
"Отправитель: $name\nТелефон: $tel\nПочта : $mail\nКомпания: $company\nРазмещение на: $target, $target1, $target2, $target3\n",$header);

?>