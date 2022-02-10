<?php
//get data from form  
$firstname = $_POST['firstname'];
$lastname= $_POST['lastname'];
$address= $_POST['address'];
$refferal= $_POST['refferal'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$lice= $_POST['lice'];
$ninnumber= $_POST['ninnumber'];
$lasdri= $_POST['lasdri'];
$date= $_POST['date'];
$file= $_POST['file'];
$bname= $_POST['bname'];
$accnumber= $_POST['accnumber'];
$accname= $_POST['accname'];
$to = "youremail@mail.com";
$subject = "Mail From Driver Registration";
$txt ="firstname = ". $firstname . "\r\n  lastname = " . $lastname . "\r\n  address = " . $address . "\r\n  refferal = " . $refferal . "\r\n  phone =  " . $phone . "\r\n  email = " . $email . "\r\n  lice = " . $lice . "\r\n  ninnumber = " . $ninnumber . "\r\n  lasdri =" . $lasdri . "\r\n  date = " . $date . "\r\n  file = ".$file ."\r\n  bname = " . $bname ."\r\n  accnumber = " . $accnumber ."\r\n  accname = " . $accname;
$headers = "From: noreply@yoursite.com" .  "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>