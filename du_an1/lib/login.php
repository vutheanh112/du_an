<?php


 if(isset($_POST['btn-login'])){
     $error = array();
     #kiểm tra username
     if(empty($_POST['username'])){
         $error['username'] = "không để trống username";
     }else{
         $pattern = '/^[A-Za-z0-9_\.]{6,32}$/';
         if(!preg_match($pattern , $_POST['username'])){
            $error['username'] = "Tên đăng nhập khong đúng định dạng !!!";
         }
         else{
            $username = $_POST['username'];
        }
     }
     #kiểm tra password
     if(empty($_POST['password'])){
        $error['password'] = "không để trống password";
    }else{
        $pattern = '/^[A-Za-z0-9_\.!@#$%^&*()]{6,32}$/';
        if(!preg_match($pattern , $_POST['password'])){
           $error['password'] = "Tên đăng nhập khong đúng định dạng !!!";
        }else{
            $password = $_POST['password'];
        }
    }
    #kêt luận
    if(empty($error)){
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