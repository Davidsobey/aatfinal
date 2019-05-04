<?php
if (isset($_REQUEST['firstname'],$_REQUEST['email'])) {
      
    $firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    $message = $_REQUEST['message'];
    $phone = $_REQUEST['phone'];


      
    // Set your email address where you want to receive emails. 
    $to = 'info@aatautoassist.co.za';
      
    $subject = 'AAT:  Client Request has been made';
    $headers = "From: ".$firstname." <".$email."> (".$phone.") \r\n";
      
    $send_email = mail($to,$subject,$message,$headers);
      
    echo ($send_email) ? 'success' : 'error';
      
}
?>