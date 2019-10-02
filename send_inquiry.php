
<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$subject=$_POST['Subject'];

$message = $_POST['textarea'];
$formcontent=" From: $name  \n Message: $message";
$recipient = "abdulsattarmalic@zoho.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!, we'll get in touch soon!" . " -" . "<a href='index.php.html' style='text-decoration:underline;color:#0000;'> Return Home</a>";
?>

