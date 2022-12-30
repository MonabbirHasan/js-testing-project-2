<?php
$name=$_POST['name'];
$email=$_POST['email'];
$masseges=$_POST['masseges'];


$email_from="hmd320667@gmail.com";
$email_subject="new from subject";
$email_body="User Name:$name. \n".
"User Email:$email. \n".
"User massege:$masseges. \n";
$to="mdsuhelr954@gmail.com";
$headers="From:$email_from \r\n";
$headers.="Riplay-to:$email \r\n";
mail($ton,$email_subject,$email_body,$headers);
header("Location:send-mail.html");

?>
