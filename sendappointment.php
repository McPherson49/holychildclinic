<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $lname = htmlspecialchars($_POST['lname']);
    $fname = htmlspecialchars($_POST['fname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $date = htmlspecialchars($_POST['date']);
    $value = htmlspecialchars($_POST['services']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->Username   = 'afolabipeter367@gmail.com';                     //SMTP username
        $mail->Password   = 'ppfjklqiqbchpsqq';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('afolabipeter367@gmail.com', 'Appointment Form Submission');
        $mail->addAddress('info@holychildclinic.com', 'Admin Contact Submission');     //Add a recipient
        $mail->addReplyTo($email, $fname . ' ' . $lname);

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Enquiry - Appointment Form Submission';
        $mail->Body = '
            <div style="font-family: Arial, sans-serif; max-width: 600px; margin: auto; padding: 20px; border: 1px solid #e0e0e0; border-radius: 8px; background-color: #f9f9f9;">
                <h2 style="color: #0b5394; border-bottom: 1px solid #ccc; padding-bottom: 10px;">📩 New Contact Form Submission</h2>
                <p style="font-size: 16px; color: #333;"><strong>Name:</strong> ' . $fname . ' ' . $lname . '</p>
                <p style="font-size: 16px; color: #333;"><strong>Email:</strong> ' . $email . '</p>
                <p style="font-size: 16px; color: #333;"><strong>Phone:</strong> ' . $phone . '</p>
                <p style="font-size: 16px; color: #333;"><strong>Appointment Date:</strong> ' . $date . '</p>
                <p style="font-size: 16px; color: #333;"><strong>Appointment Type:</strong> ' . $value . '</p>
                <div style="margin-top: 20px;">
                    <p style="font-size: 16px; color: #333;"><strong>Message:</strong></p>
                    <div style="padding: 15px; background-color: #fff; border-left: 4px solid #0b5394; font-size: 15px; color: #444;">
                        ' . nl2br($message) . '
                    </div>
                </div>
                <p style="margin-top: 30px; font-size: 13px; color: #888; text-align: center;">
                    This message was sent from your website contact form.
                </p>
            </div>
        ';
        if($mail->send()){
            $_SESSION['status'] = 'Thank You for Booking an Appointment with us! We will Get intouch with you Shortly.';
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