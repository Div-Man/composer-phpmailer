<?php

/*
	Что бы установить компонент в текущую папку
	
	php -r "readfile('https://getcomposer.org/installer');" | php
	This will install composer to the current directory so that you can use php composer.phar
	
	или
	
	перемещаем installer в папку и запустить
	php installer

https://toster.ru/q/281663

https://www.alexeykopytko.com/2018/github-contributor-guide/
*/

//https://opencartforum.com/topic/81198-nastroyka-smtp-cherez-gmail/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
$mail->isSMTP();
$mail->Host = 'ssl://smtp.gmail.com'; //gmail: smtp.gmail.com
$mail->SMTPAuth = true;
$mail->Username = ''; //моя почта
$mail->Password = ''; //пароль от неё
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setLanguage('ru');
$mail->setFrom('robot@devreadwrite.com', 'PDD v moem gorode');
$mail->addAddress('dima@yandex.ru', 'My Friend');    //Получатель

 
$mail->isHTML(true);
 
$mail->Subject = 'Тема письма';
$mail->Body    = '<b>HTML</b> версия письма';
$mail->AltBody = 'Текстовая версия письма, без HTML тегов (для клиентов не поддерживающих HTML)';
 
//Отправка сообщения
if(!$mail->send()) {
    echo 'Ошибка при отправке. Ошибка: ' . $mail->ErrorInfo;
} else {
    echo 'Сообщение успешно отправлено';
}