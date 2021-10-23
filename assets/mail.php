

<?php
require "./mailer/Exception.php";
require "./mailer/PHPMailer.php";
require "./mailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;



class Mail
{




    function registerMail($ManagerEmail)
    {
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = "true";
        $mail->SMTPSecure = "tls";
        $mail->Port = "587";
        $mail->Username = "dileepal1213@gmail.com";
        $mail->Password = "973480448v";
        $mail->setFrom("dileepal1213@gmail.com", "NexHRM");
        $mail->isHTML(true);
        $mail->Subject = "This is the email subject";
        $mail->Body = "Your manager email is " . $ManagerEmail . "and Password is ";
        $mail->addAddress($ManagerEmail);
        $mail->send();
        if ($mail->send()) {
            echo "Send Success";
            # code...
        } else {
            echo "sending Fail";
        }

        $mail->smtpClose();
    }
}


?>