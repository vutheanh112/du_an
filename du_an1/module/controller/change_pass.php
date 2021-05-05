<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once('css.php');?>
    </head>
    <body>
<?php
    session_start();
    include_once '../model/form.php';
    $act='index';
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch ($act){
        case 'index':
            include '../view/form/change_pass.php';
        break;

        case 'btn_changepass':
            $user= $_POST['username'];
            $pass = md5($_POST['pass_old']);
            $pass_new1 = md5($_POST['pass_new1']);
            $pass_new2 = md5($_POST['pass_new2']);
            // kiểm tra mk cũ chính xác không
            $result=getAdminChangePass($user,$pass);
            if ($result[0]!=1) {
                echo
                '<script>
                    Swal.fire({
                        title: "Mật Khẩu Cũ Của Bạn Không Chính Xác",
                        text: "Vui Lòng Kiểm Tra Lại",
                        icon: "error"
                        }).then((result) => {
                            window.location = "change_pass.php";
                        });
                </script>';
            }
            else{
                updatePass($user,$pass_new1);
                echo
                '<script>
                    Swal.fire({
                        title: "Bạn Đã Cập Nhật Mật Khẩu Thành Công",
                        icon: "success"
                    }).then((result) => {
                        window.location = "quantri.php";
                    });
            </script>';
            }
        break;
    }
?>
    </body>
</html>