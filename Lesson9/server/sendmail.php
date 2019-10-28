<?php
if(isset($_POST['btnSendMail'])){
    $email = $_POST['email'] ?? '';
    $eamil = strip_tags($email);

    $subject = $_POST['subject'] ?? '';
    $subject = strip_tags($subject);

    $content = $_POST['content'];

    if(filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($subject) && !empty($content)){
        $header = "From:trieuntgvt3h@gmail.com \r\n"; 
        $header = "Cc:stormshadow1110@gmail.com \r\n"; 
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n"; 

        $send = mail($email, $subject, $content, $header);
        if($send){
            header("Location:../index.php?sate=success");
        }else{
            header("Location:../index.php?sate=error");
        }
    }else{
        header("Location:../index.php?state=fail");
    }
}