<?php
$to      = '18asanket@gmail.com';
$subject = 'enqury from my website';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['number'];
$msg = $_POST['msg'];
$message='name : '.$name."\r\n".'Email :'.$email."\r\n".'Phone : '.$phone."\r\n".'message : '.$msg;
$headers = 'From: '.$email . "\r\n" .
    'Reply-To: '.$email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$mail_sent = mail($to, $subject, $message, $headers);
if($mail_sent)
{
echo "<script>alert('message has been sent successfully')</script>";
echo "<script>window.location='index.php'</script>";
}
else
{
    echo "<script>alert('message not sent')</script>";
    echo "<script>window.location='index.php'</script>";
}
?> 