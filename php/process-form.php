<?php
if (isset($_REQUEST['1'],$_REQUEST['4'])) {
      
    $firstname = $_REQUEST['1'];
	$lastname = $_REQUEST['2'];
    $email = $_REQUEST['4'];
    $message = $_REQUEST['3'];
    $phone = $_REQUEST['5'];


      
    // Set your email address where you want to receive emails. 
    $to = 'david@vortechs.co.za';
      
    $subject = 'AAT:  Client Request has been made';
    $headers = "From: ".$firstname." <".$email."> (".$phone.") \r\n";
      
    $send_email = mail($to,$subject,$message,$headers);
      
    echo ($send_email) ? 'success' : 'error';
      
}
?>