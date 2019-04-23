 <?php
$to = "katya-andreeva@ukr.net"; // емайл получателя данных из формы 
$tema = "Заявка на кредит"; // тема полученного емайла 
$message = "Ваше имя: ".$_POST['formname']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "E-mail: ".$_POST['formemail']."<br>"; //полученное из формы name=email
    $message .= "Прізвище: ".$_POST['formsurname']."<br>"; //полученное из формы name=email
     $message .= "По-батькові: ".$_POST['lastname']."<br>"; //полученное из формы name=email
     $message .= "Індивідуальний податковий номер: ".$_POST['code']."<br>"; //полученное из формы name=email
     $message .= "Дата народження: ".$_POST['dateOfBirth']."<br>"; //полученное из формы name=email
$message .= "Номер телефона: ".$_POST['formphone']."<br>"; //полученное из формы name=phone
$message .= "Сообщение: ".$_POST['formmessage']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
if (mail($to,$tema,$message,$headers)){echo "Ваше повідомлення доставлено.";}
exit('<meta http-equiv="refresh" content="2; url=credit.html"  />');

?>