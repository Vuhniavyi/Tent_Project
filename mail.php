<?php
/*
if (isset($_POST['submit'])) {

  $to      = $_POST['email'];
  $subject = $_POST['phone'];
  $message = $_POST['name'];
  
  // Заголовки сообщения, в них определяется кодировка сообщения, поля From, To и т.д.
$headers = "MIME-Version: 1.0" . PHP_EOL .
"Content-Type: text/html; charset=utf-8" . PHP_EOL .
'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
'Reply-To: '.$admin_email.'' . PHP_EOL;
  
  // mail ($to, $subject, $message, $headers);
 
  require_once "smtp.php";
  MailSmtp ($to, $subject, $message, $headers);

} */

?> 
<?php
/*
if(isset($_POST['submit'])){
$to = "maksymvuhniavyi@gmail.com";; // Здесь нужно написать e-mail, куда будут приходить письма
$from = $_POST['email']; // this is the sender's Email address
$first_name = $_POST['first_name'];
$subject = "Форма отправки сообщений с сайта";
$subject2 = "Copy of your form submission";
$message = $first_name . " оставил сообщение:" . "\n\n" . $_POST['message'];
$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);

echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
echo "<br /><br /><a href='https://http://gofriends.shop/'>Вернуться на сайт.</a>";

}*/

?>



<?php

if(isset($_POST['submit'])){
$to = "maksymvuhniavyi@gmail.com";; // Здесь нужно написать e-mail, куда будут приходить письма
$from = $_POST['phone']; // this is the sender's Email address
$first_name = $_POST['first_name'];
$subject = "Форма отправки сообщений с сайта";
$subject2 = "Copy of your form submission";
$message = $first_name . " оставил сообщение:" . "\n\n" . $_POST['message'];
$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;

mail($to,$subject,$message,$headers);

echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
echo "<br /><br /><a href='http://gofriends.shop'>Вернуться на сайт.</a>";

}

?>