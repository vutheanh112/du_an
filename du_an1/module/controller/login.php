<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('css.php')?>
    </head>
    <body>
<?php
    include_once '../model/form.php';
    $act='index';
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch ($act){
        case 'index':
            include '../view/form/login.php';
        break;

        case 'btn':
            session_start();
            $user=$_POST['username'];
            $pass=md5($_POST['current-password']);
            $result=getAdmin($user,$pass);
            $num=$result->rowCount();
            if($num>0){
                // lấy full name của người dùng
                $_SESSION['admin'] = getFullname($user)['fullname'];
                header('location: quantri.php');
            }
            else{
                echo
                '<script>
                        Swal.fire({
                            title: "Thông Tin Bạn Nhập Không Tồn Tại",
                            text: "Vui Lòng Kiểm Tra Hoặc Nhấn Quên Mật Khẩu",
                            icon: "error"
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