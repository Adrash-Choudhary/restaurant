<?php

if(isset($_POST['btnsend'])) {

$officemail='adarshchaudharysrp@gmail.com';
$sendingmail='info@sanitysoftwares.com';

$name1=$_POST['name'];


$usermail=$_POST['email'];
$sub=$_POST['subject'];
$mobile=$_POST['number'];
$msg=$_POST['message'];

$date=date('Y-m-d');

 

//user//
$to = "$usermail";
$subject = "Sanity Software";
$txt = "Thank You Mr./Miss. $name1 for your equery, We will contact you soon.";
$headers = "From: $sendingmail";    
mail($to,$subject,$txt,$headers);


//office//
$to = "$officemail";
$subject = "Sanity Website Enquirey";
$txt = "Mr./Miss. $name1, Subject - $sub, Mobile Number - $mobile, Email - $usermail, Message -$msg . ";
$headers = "From: $sendingmail";    
mail($to,$subject,$txt,$headers);

}

echo "<script> window.location.href='../mail-send.html'; </script>";	

?>