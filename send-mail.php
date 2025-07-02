<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submitContact'])) {
    $lname = htmlspecialchars($_POST['lname']);
    $fname = htmlspecialchars($_POST['fname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->Username   = 'seniorservingsaints@gmail.com';                     //SMTP username
        $mail->Password   = 'itdrgszpcuwzipen';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('seniorservingsaints@gmail.com', 'Form Submission');
        $mail->addAddress('seniorservingsaints@gmail.com', 'Form Submission');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Enquiry - Form Submission';
        $mail->Body    = '
            <h3>Contact Form Submission</h3>
            <p><strong>Name:</strong> ' . $name . '</p>
            <p><strong>Email:</strong> ' . $email . '</p>
            <p><strong>Phone:</strong> ' . $phone . '</p>
            <p><strong>Subject:</strong> ' . $subject . '</p>
            <p><strong>Message:</strong> ' . $message . '</p>
        ';
        if($mail->send()){
            $_SESSION['status'] = 'Thank You for Contacting us! We will Get intouch with you Shortly';
            header("Location: {$_SERVER['HTTP_REFERER']}"); 
            exit();
        }else {
            $_SESSION['status'] = 'Message could not be sent. Mailer Error: {$mail->ErrorInfo}';
            header("Location: {$_SERVER['HTTP_REFERER']}"); 
            exit();
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
   header("Location: index.php"); 
   exit();
}
?>