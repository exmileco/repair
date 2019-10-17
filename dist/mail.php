<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
$userName = $_POST['off_username'];
$userPhone = $_POST['off_phone'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Сообщение успешно отправлено!";
    $mail->isSMTP();   
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth   = true;
    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера GMAIL
    $mail->Username   = 'white_tiger75@mail.ru'; // Логин на почте
    $mail->Password   = 'ptItVR*ioI46'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    // $mail->SMTPSecure = 'tls';
    // $mail->Port       = 587;
    $mail->setFrom('white_tiger75@mail.ru', 'Почтовая голубь'); // Адрес самой почты и имя отправителя
    // Получатель письма
    $mail->addAddress('exmile.co@gmail.com');  
   
    // -----------------------
    // Само письмо
    // -----------------------
    $mail->isHTML(true);

    $mail->Subject = 'Новая заявка';
    $mail->Body    = "<b>Имя:</b> $userName <br><b>телефон:</b> $userPhone";
// Проверяем отравленность сообщения
if ($mail->send()) {
    header('Location: thanks.php');
    echo "Сообщение успешно отправлено";
} else {
    echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

?>