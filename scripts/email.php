<?php
  
if($_POST) {

    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $emailSubject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $emailMessage = isset($_POST['message']) ? $_POST['message'] : '';

    $email_body = "<div>";
      
        $email_body .= "<div>
                           <label><b>Email:</b></label>&nbsp;<span>".$email."</span>
                        </div>
                        <div>
                           <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$emailSubject."</span>
                        </div>
                        <div>
                           <label><b>Message:</b></label>
                           <div>".$emailMessage."</div>
                        </div>";
            
    $email_body .= "</div>";

    $recipient = "valiokkapa@gmail.com";

    $headers = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
      
    if(mail($recipient, $emailSubject, $emailMessage, $headers)) {
        echo "<script>alert('Thank you for contacting us, $email. You will get a reply within 24 hours.');</script>";
        header("Location: ../pages/auth.php");
    } else {
        echo "<script>alert('We are sorry but the email did not go through.');</script>";
        header("Location: ../pages/auth.php");
    }
      
}
?>