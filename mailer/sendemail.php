<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function sendEmail($toEmail, $subject, $message)
{
    try {
        $email = new PHPMailer(true);

        $email->isSMTP();
        $email->Host = 'smtp.gmail.com';
        $email->SMTPAuth = true;
        $email->Username = 'yassintresor332@gmail.com';
        $email->Password = 'fyklviughcregezp';
        $email->Port = 587;
        $email->isHTML(true);
        $email->setFrom('lapaix.dev@gmail.com', 'Boot camp Project Team');
        $email->addAddress($toEmail);
        $email->Subject = $subject;
        $email->Body = $message;

        $email->send();
        echo "email sent";
    } catch (Exception $e) {
        // echo $e;
        echo "Email not Sent ";
    }


}
if(isset($_POST['send'])){
$message=$_POST['message'];
$reg = rand(10000,99999)."<br>";
sendEmail("mbarushimanajoyce@gmail.com ", "your registration number",$message .$reg);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label >enter your details </label><br>
        <textarea name="message" id="" cols="30"></textarea>
        <input type="submit" name="send">
    </form>
</body>
</html>