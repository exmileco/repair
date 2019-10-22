<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
// Переменные, которые отправляет пользователь
// if(!isset($_POST['off_username'])||!isset($_POST['off_phone'])) {
//     return error;
// }

// if (isset($_POST['username']) && isset($_POST['phone'])){
    $userName = $_POST['off_username'];
    $userPhone = $_POST['off_phone'];
//     echo "данные пришли такие: Имя - " . $_POST['off_username'] . " Телефон - " . $_POST['off_phone'];
// } else {
//     echo "Данные не были переданы.";
// }

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
    // header('Location: thanks.php');
    echo "Сообщение успешно отправлено. Имя: " . $userName . " телефон: " . $userPhone;
} else {
    echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
}
} catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

?>