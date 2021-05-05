<?php
session_start();
ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
    <link href="public/style.css" rel="stylesheet" type="text/css" />


</head>

<body>
    <?php


    if (isset($_POST['btn-login'])) {
        $error = array();
        #kiểm tra username
        if (empty($_POST['username'])) {
            $error['username'] = "không để trống username";
        } else {
            $pattern = '/^[A-Za-z0-9_\.]{6,32}$/';
            if (!preg_match($pattern, $_POST['username'])) {
                $error['username'] = "Tên đăng nhập khong đúng định dạng !!!";
            } else {
                $username = $_POST['username'];
            }
        }
        #kiểm tra password
        if (empty($_POST['password'])) {
            $error['password'] = "không để trống password";
        } else {
            $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
            if (!preg_match($pattern, $_POST['password'])) {
                $error['password'] = "Tên đăng nhập khong đúng định dạng !!!";
            } else {
                $password = $_POST['password'];
            }
        }
        #kêt luận
        if (empty($error)) {
             if(check_login($username, $password)){
              $_SESSION['is_login'] = true;
             $_SESSION['user_login'] = $username;
            redirect();
           } else{
             $error['account'] = "mật khẩu hoặc tà khoản không tồn tại";
               }
        }
    }
    ?>
    <div id="wp-content-login">

        <div id="container-top">
            <div class="wp-inner">
                <div id="hear-left">
                    <a href="?mod=home&act=home" class="logo fl-left"> <img src="public/image/logo.png" alt=""></a>
                    <p class="title_left"> đăng nhập</p>
                </div>
                <div id="hear-right " class="fl-right">
                    <p class="title_right">cần trợ giúp ? </p>
                </div>
            </div>
        </div>
        <div id="container-bot">
            <img src="public/image/benner.jpg" alt="">
            <div id="form_login">
                <h2>đăng nhập</h2>
                <form action="" method="post">
                    <input type="text" id="username" name="username">
                    <?php
                    if (!empty($error['username'])) {
                    ?>
                        <p class="error"><?php echo $error['username']  ?></p>

                    <?php
                    }
                    ?>
                    <input type="password" name="password" id="password">
                    <?php
                    if (!empty($error['password'])) {
                    ?>
                        <p class="error"><?php echo $error['password']  ?></p>

                    <?php
                    }
                    ?>
                    <input type="submit" name="btn-login" id="btn-login" value="Đăng nhập">
                    <?php
                    if (!empty($error['account'])) {
                    ?>
                        <p class="error"><?php echo $error['account']  ?></p>

                    <?php
                    }
                    ?>
                </form>
                <a href="" class="forgot_pass">quên mật khẩu</a>
                <a href=" ?mod=page&act=dangky " class="dangky">đăng ký</a>
            </div>

        </div>



    </div>