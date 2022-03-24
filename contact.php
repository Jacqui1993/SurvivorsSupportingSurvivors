<?php

if(isset($_POST['email'])) {
 
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = 'jacqui2302@hotmail.com';
    $email_subject = "Contact Form Submission";
 
    function died($error) {
 
 
        echo "Opps somethings went wrong!";
 
        echo "Please try again.";
 
        die();
    }
  
 
    $first_name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required

    $message = $_POST['message']; // required
 
    
    $error_message = "";
 
    $email_message = "Form details are given below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 

 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Email Adress: ".clean_string($email_from)."\n";
 
    $email_message .= "Message: ".clean_string($message)."\n";
 
      
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .

 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
<h1>Thank you for your message!</h1> <h2>We will contact you as soon as possible.</h2>
<?php
 
}
 
?>