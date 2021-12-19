<?php

file_put_contents('html/log.txt', "Ім'я: ", FILE_APPEND);

$name = $_POST['name'];
$email = $_POST['email'];
$messag = $_POST['messag'];
$date = $_POST['date'];
$phone = $_POST['phone'];
$list = $_POST['list'];

file_put_contents('log.txt', 'test\r\n', FILE_APPEND);

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$messag = htmlspecialchars($messag);
$date = htmlspecialchars($date);
$phone = htmlspecialchars($phone);
$list = htmlspecialchars($list);

$name = urldecode($name);
$email = urldecode($email);
$messag = urldecode($messag);
$date = urldecode($date);
$phone = urldecode($phone);
$list = urldecode($list);

$name = trim($name);
$email = trim($email);
$messag = trim($messag);
$date= trim($date);
$date = str_replace("T", "   ", $date);
$phone = trim($phone);
$list = trim($list);

// skvorushka.choir@gmail.com  maldevar@ukr.net

$headers = 'From: skvorushka.choir@gmail.com' . "\r\n" .
'Reply-To: skvorushka.choir@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

if(mail("skvorushka.choir@gmail.com",
"Новий лист з сайту",
"Ім'я: ".$name."\r\n".
"Email: ".$email."\r\n".
"Повідомлення: ".$messag."\r\n".
"Дата: ".$date."\r\n".
"Телефон: ".$phone."\r\n".
"Мета: ".$list."\r\n", $headers)     /*"From:  no-reply@mydomain.ru \r\n"*/
) {
echo ('Письмо успешно отправлено!');


//file_put_contents('html/log.txt', "Ім'я: ".$name, FILE_APPEND);

file_put_contents('html/log.txt',
"Ім'я: ".$name."\r\n".
"Email: ".$email."\r\n".
"Повідомлення: ".$messag."\r\n".
"Дата: ".$date."\r\n".
"Телефон: ".$phone."\r\n".
"Мета: ".$list."\r\n".
"From:  no-reply@mydomain.ru \r\n" .
$headers, FILE_APPEND);

exit;
}

else {
echo('Есть ошибки! Проверьте данные...');
}


?>
