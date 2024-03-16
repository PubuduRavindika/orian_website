<?php
$con = mysqli_connect("localhost", "root", "", "");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];

$email_from = 'orion@gmail.com';
$email_subject = 'Orian New Form Submission';
$email_body = "User Name : $name.\n".
                "User Email : $email.\n".
                "User Subject : $subject.\n".
                "User massage : $massage.\n";
               
$to = 'iwpubuduravindika@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

                
?>