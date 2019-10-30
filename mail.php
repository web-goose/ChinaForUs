<?
$mes = $_POST['message'] ? "<p>Сообщение: $_POST[message]</p>" : '';
$phone = $_POST['phone'] ? "<p>Телефон: $_POST[phone]</p>" : '';
$to = "<cfu.logistics@gmail.com>";
$subject = "Заявка | chinaforus";
$message = "<html lang='ru'><p>Имя: $_POST[name]</p><p>Email: $_POST[email]</p>".$phone.$mes."</html>";
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: <root@chinaforus.ru>\r\n";
if (mail($to, $subject, $message, $headers)) echo '{"result": "Success"}';