<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once('css.php');?>
    </head>
    <body>
<?php
    include_once '../model/form.php';
    require_once "../../public/PHPMailer-master/src/PHPMailer.php";
    require_once "../../public/PHPMailer-master/src/Exception.php";
    require_once "../../public/PHPMailer-master/src/OAuth.php";    
    require_once "../../public/PHPMailer-master/src/SMTP.php";
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);     

    $act='index';
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch ($act){
        case 'index':
            include '../view/form/forgot_pass.php';
        break;

        case 'forgot_pass':
            $email = $_POST['email'];
            $result = getAdminEmail($email);
            if($result[0]==0){
                echo
                '<script>
                    Swal.fire({
                        title: "Email Của Bạn Không Đúng",
                        text: "Vui Lòng Kiểm Tra Lại",
                        icon: "error"
                    }).then((result) => {
                            window.location = "forgot_pass.php";
                    });
                </script>';
            }
            else{
                $pass_new = md5(rand (0, 9999)); // Phát sinh số ngẫu nhiên
                $pass_new = substr($pass_new, 0,10); // Cắt 8 ký tự đầu
                updatePassForgot($email,$pass_new);
                try {        
                    $mail->SMTPDebug = 0;   //chế độ full debug, khi mọi thứ ok thì chỉnh lại 0
                    $mail->isSMTP();       // Set mailer to use SMTP
                    $mail->Host = 'smtp.gmail.com';  // Server gửi thư
                    $mail->SMTPAuth = true;
                    $mail->Username = 'ctyfiveman@gmail.com';  // ví dụ: abc@gmail.com
                    $mail->Password = 'khang12345';
                    $mail->SMTPSecure = 'ssl'; //TLS hoặc `ssl` 
                    $mail->Port = 465;    // 587 hoặc 465
                    $mail -> CharSet = "UTF-8"; 
                    $mail->smtpConnect([ "ssl" => [
                              "verify_peer"=>false,
                              "verify_peer_name" => false,
                              "allow_self_signed" => true
                              ]
                           ]
                    );        
                    //Khai báo người gửi và người nhận mail        
                    $mail->setFrom('phankd1212@gmail.com', 'Công ty FIVE MAN');
                    $mail->addAddress("{$email}", 'Quý khách'); 
                    $mail->isHTML(true);  // nội dung của email có mã HTML
                    $mail->Subject = 'Cấp lại mật khẩu mới';
                    $mail->AddEmbeddedImage("../../images/logo.png", "logo", "logo.png");
                    $mail->Body = "<img src='cid:logo'> <br> <h3 color='black'>Đây là mật khẩu mới của bạn: {$pass_new}</h3>";
                    $mail->send();
                    $message .= "Đã gửi mail thành công";
                } catch (Exception $e) {
                        $message .= "Lỗi khi gửi thư: " . $mail->ErrorInfo;
                }
                
                echo
                '<script>
                    Swal.fire({
                        title: "Email Của Bạn Đã Đúng",
                        text: "Đã Gửi Email Thành Công",
                        icon: "success"
                    }).then((result) => {
                        window.location = "login.php";
                    });
                </script>';
            }
        break;
    }
?>
    </body>
</html>