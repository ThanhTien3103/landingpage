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
            $to = $email_i;
            $subject = "Dịch Vụ ThanhDuongShop";
            $messeger = "Có Phải Bạn đang cần đặt dịch vụ của chúng tôi";
            $header = "From:testuser12921@gmail.com \r\n";
            $success = mail($to,$subject,$messeger,$header);
            if($success == false) {
                echo 'Có lỗi xảy ra!';
                 
            } else {
                 
                echo 'mail của bạn đã được gửi đi hãy kiếm tra hộp thư đến để xem kết quả. ';
            }
        }

    }else{
        echo "Vui lòng nhập địa chỉ email của Bạn";
    }
?>
<?php
    //goi thu vien
   
   
?>