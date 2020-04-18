<?
$name = $_POST['name'];
$phone = $_POST['phone'];
$what = $_POST['what'];

$to = "karim20.ks@gmail.com";

$subject = "Заявка с сайта New Project";
$message = "Письмо отправлено из моей формы <br/>
Пользователь хочет: ".htmlspecialchars($what)."<br/>
Имя: ".htmlspecialchars($name)."<br/>"
"Телефон: ".htmlspecialchars($phone);

$headers = "Form: mysite.ru <site-email@mysite.ru>\r\nContent-type: text/html;
charset = utf-8 \r\n";

mail ($to, $subject, $message, $headers);
header('Location: thanks.html');
exit();
?>