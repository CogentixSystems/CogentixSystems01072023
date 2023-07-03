<?php

$name = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phoneno'];
$subject = "Mail From website : cogentrix systems";
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$to = "bio@rishitomar.in";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone No.  =" . $phone ."\r\n  Message = ". $message;

if ($email and $name and $subject and $message)
{
    mail($to, $subject, $txt, $mailheader);
    echo "<script type='text/javascript'>alert('mail sent successfully!') </script>";
}
else
{
    echo "<script type='text/javascript'>alert('mail sent failed!')</script>";
}


?>