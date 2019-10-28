<?php
  
if(isset($_POST['submit'])){
    $name = $_POST['requestName'];
    $email = $_POST['requestEmail'];
    $phone = $_POST['requestPhoneNo'];
    $address = $_POST['requestAddress'];
    $city = $_POST['requestCity'];
    $zip = $_POST['requestZip'];
    $children = $_POST['requestChildrenNo'];
    $hear = $_POST['requestHear'];
    
    $mailTo = ""
    $header = "From: ".$email;
    $message = "Potential Client: ". $name.".\n"."Info: ".$email."\n".$phone."\n".$address."\n".$city."\n".$zip."\n".$children."\n".$hear;
    mail($mailTo,"More Info Request",$message,$header);
    header("Location: http://www.google.com"); 
}
?>