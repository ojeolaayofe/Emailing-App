<?php
//get data from form  
$firstname = $_REQUEST['firstname'];
$lastname= $_REQUEST['lastname'];
$address= $_REQUEST['address'];
$refferal= $_REQUEST['refferal'];
$phone= $_REQUEST['phone'];
$email= $_REQUEST['email'];
$lice= $_REQUEST['lice'];
$ninnumber= $_REQUEST['ninnumber'];
$lasdri= $_REQUEST['lasdri'];
$date= $_REQUEST['date'];
$file= $_REQUEST['file'];
$bname= $_REQUEST['bname'];
$accnumber= $_REQUEST['accnumber'];
$accname= $_REQUEST['accname'];

if(empty($firstname) || empty($lastname) || empty($address) || empty($refferal) || empty($phone) || empty($email) || empty($lice) || empty($ninnumber) || empty($lasdri) || empty($date) || empty($file) || empty($bname) || empty($accnumber) || empty($accname)) {
    echo ('Please fill all fields');
}else{
    mail("ojeolaponle@gmail.com","Driver Registration", $firstname , $lastname , $address , $refferal , $phone , $email , $lice , $ninnumber , $lasdri , $date , $file , $bname , $accnumber , $accname, "From: $firstname <$email>");
    echo "<script type='text/javascript'>alert('Your Registration has been completed successfully');

    window.history.log(-1);

    </script>";
}
?>
// $to = "youremail@mail.com";
// $subject = "Mail From Driver Registration";
// $txt ="firstname = ". $firstname . "\r\n  lastname = " . $lastname . "\r\n  address = " . $address . "\r\n  refferal = " . $refferal . "\r\n  phone =  " . $phone . "\r\n  email = " . $email . "\r\n  lice = " . $lice . "\r\n  ninnumber = " . $ninnumber . "\r\n  lasdri =" . $lasdri . "\r\n  date = " . $date . "\r\n  file = ".$file ."\r\n  bname = " . $bname ."\r\n  accnumber = " . $accnumber ."\r\n  accname = " . $accname;
// $headers = "From: noreply@yoursite.com" .  "\r\n" .
// "CC: somebodyelse@example.com";
// if($email!=NULL){
//     mail($to,$subject,$txt,$headers);
// }
// //redirect
// header("Location:index.html");

