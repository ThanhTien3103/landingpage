<?php
    include "includes/PHPMailer-phpmailer-5.2.0/class.smtp.php";
    include "includes/PHPMailer-phpmailer-5.2.0/class.phpmailer.php"; 
    if(($_POST['mail'] != '')){
        $email_i = "";
        $email_i = $_POST['mail'];
        if (!filter_var($email_i, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
        }
        else{
            $email = $email_i;

            $subject = "Dịch Vụ ThanhDuongShop";
            $message = "Có Phải Bạn đang cần đặt dịch vụ của chúng tôi";
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Port = 25; 
            $mail->SMTPDebug = 2;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->Username = 'testuser12921@gmail.com';
            $mail->Password = '@test123';
            $mail->setFrom('testuser12921@gmail.com', 'ThanhDuongShop');
            $mail->AddAddress($email,"お客様");
            $mail->WordWrap = 50;
            $mail->isHTML();
            $mail->subject = $subject ;
            $mail->Body = $message;
            $mail->AltBody = $message;
            if(!$mail->Send())
            {
                echo "Message could not be sent. <p>";
                echo "Mailer Error: " . $mail->ErrorInfo;
                exit;
            }

            echo "Message has been sent";
        }

    }else{
        echo "Vui lòng nhập địa chỉ email của Bạn";
    }
?>
<?php
    //goi thu vien
   
   
?>