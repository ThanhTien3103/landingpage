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
            $nFrom = "ThanhDuongShop";    //mail duoc gui tu dau, thuong de ten cong ty ban
            $mFrom = 'testuser12921@gmail.com';  //dia chi email cua ban 
            $mPass = '@test123';       //mat khau email cua ban
            $mTo = $email_i;   //dia chi nhan mail
            $nTo = "KhachHang ".$email_i;
            $mail = new PHPMailer();
            $body             = 'Có Phải Bạn đang cần đặt dịch vụ của chúng tôi';   // Noi dung email
            $title = 'Dịch Vụ ThanhDuongShop';   //Tieu de gui mail
            $mail->IsSMTP();             
            $mail->CharSet  = "utf-8";
            $mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
            $mail->SMTPAuth   = true;    // enable SMTP authentication
            $mail->SMTPSecure = "ssl";   // sets the prefix to the servier
            $mail->Host       = "smtp.gmail.com";    // sever gui mail.
            $mail->Port       = 465;         // cong gui mail
            // xong phan cau hinh bat dau phan gui mail
            $mail->Username   = $mFrom;  // khai bao dia chi email
            $mail->Password   = $mPass;              // khai bao mat khau
            $mail->SetFrom($mFrom, $nFrom);
            $mail->AddReplyTo('testuser12921@gmail.com', 'ThanhDuongShop'); //khi nguoi dung phan hoi se duoc gui den email nay
            $mail->Subject    = $title;// tieu de email 
            $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
            $mail->AddAddress($mTo, $nTo);
            // thuc thi lenh gui mail 
            if(!$mail->Send()) {
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