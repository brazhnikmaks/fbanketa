<?php 
$name = Trim(stripslashes($_POST['name'])); 
$accountCreate = Trim(stripslashes($_POST['accountCreate']));
$loggedFb = Trim(stripslashes($_POST['loggedFb']));
$varificated = Trim(stripslashes($_POST['varificated']));
$changedPass = Trim(stripslashes($_POST['changedPass']));
$adveted = Trim(stripslashes($_POST['adveted']));
$accountTelLink = Trim(stripslashes($_POST['accountTelLink']));
$deviceCount = Trim(stripslashes($_POST['deviceCount']));
$speedNet = Trim(stripslashes($_POST['speedNet']));
$access = Trim(stripslashes($_POST['access']));
 
$to = 'brazhnik.m@gmail.com';//your email address
$subject = 'Анкета FB'; //subject email
$message = 'Имя / Фамилия: <b>'.$name.'</b>\nКак давно был создан аккаунт: <b>'.$accountCreate.'</b>\nРанее заходил в Facebook через ПК: <b>'.$loggedFb.'</b>\nПройдена верификация по мобильному: <b>'.$varificated.'</b>\nИзменялся ли пароль за последние 3 месяца: <b>'.$changedPass.'</b>\nДавал ли рекламу с кабинета: <b>'.$adveted.'</b>\nНомер телефона и ссылка на FB: <b>'.$accountTelLink.'</b>\nСколько устройств использует аккаунт: <b>'.$deviceCount.'</b>\nСкорость интеренета: <b>'.$speedNet.'</b>\nПредоставит неограниченный доступ к ПК: <b>'.$access.'</b>';
$headers = 'From: me\r\n';

// detect & prevent header injections
$test = "/(content-type|bcc:|cc:|to:)/i";
foreach ( $_POST as $key => $val ) {
  if ( preg_match( $test, $val ) ) {
    exit;
  }
}

//send email
mail($to, $subject, $message, $headers);
// echo $message;

?>