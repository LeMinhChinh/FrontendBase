<?php
// send mail sử dụng thư viện phpmailer
// Nhúng thu viện src

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

// gọi thư viện để sử dụng
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if(isset($_POST['btnSendMail'])){
    $email = $_POST['email'] ?? '';
    $eamil = strip_tags($email);

    $subject = $_POST['subject'] ?? '';
    $subject = strip_tags($subject);

    $content = $_POST['content'];

    // Khởi tạo đối tượng cho class phpmailer
    $mail = new PHPMailer(true);
    try {
        //Server settings
        //$mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.googlemail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'trieuntgvt3h@gmail.com';                     // SMTP username
        $mail->Password   = 'trieunt123';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        $mail->setFrom('trieuntgvt3h@gmail.com', 'LeMinhChinh');
        $mail->addAddress($email);     // Add a recipient
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

         // Attachments : Đính kèm file
        $mail->addAttachment('../Image/Leblanc.jpg');         // Add attachments
        $mail->addAttachment('../Image/Leblanc.jpg','send-file.png');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $content;

        if($mail->send()){
            header('Location:../index2.php?state=success');
        }else{
            header('Location:../index2.php?state=fail');
        }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
