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
    $act='index';
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    $messge='';
    switch ($act){
        case 'index':
            include '../view/form/dangky.php';
        break;

        case 'btn_dangky':
            $fullname = $_POST['fullname'];
            $user = $_POST['username'];
            $email = $_POST['email'];
            $pass = md5($_POST['current-password']);

            // so sánh xem user với email có trung không
            $result = getAdminDangKy($user,$email);
            $num=$result->rowCount();
            if($num > 0 ){
                echo 
                '<script>
                    Swal.fire({
                        title: "Bạn Đã Đăng Ký Thất Bại",
                        text: "Tên Đăng Nhập Hoặc Email Của Bạn Đã Tồn Tại",
                        icon: "error"
                    }).then((result) => {
                        window.location = "dangky.php";
                    });
                </script>';
            }else{
                insertDangKy($fullname,$user,$email,$pass);
                echo 
                '<script>
                    Swal.fire({
                        title: "Bạn Đã Đăng Ký Thành Công",
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