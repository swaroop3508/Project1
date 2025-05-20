<?php
//print_r($_POST);
//includes and session  start here
//validate that request parameters are set
if ( isset($_POST)) {
  //getters
//$data = $_POST["data"];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
  $email = $_POST['email'];
    
    $phone = $_POST['uphone'];
    $message = $_POST['msg'];
   
$toEmail = 'platominds@gmail.com';

                // Sender
                $from = $email;
                $fromName = 'Enquiry Form';
                
                 $htmlContent = '<h2>Enquiry Request</h2>
                    <p><b> First Name:</b> '.$fname.'</p>
                     <p><b> First Name:</b> '.$lname.'</p>
                    <p><b>Email:</b> '.$email.'</p>
                    <p><b>Mobile Number:</b> '.$phone.'</p>
                    <p><b>Message:</b><br/>'.$message.'</p>';
                
                // Header for sender info
                $headers = "From: $fromName"." <".$from.">";
                  // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";

                      
if (mail($toEmail, $htmlContent, $headers)) {
    echo json_encode(array('status' => 'success'));
} else {
  echo json_encode(array('status' => 'error'));
}
    // database insert  here..
    //return a json object
   
}

    ?>