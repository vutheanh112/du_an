<?php
    include_once('database.php');
    // dăng nhập
    function getAdmin($user,$pass)
    {
        $sql="select * from admin where username='$user' and password='$pass'";
        return query($sql);
    }
    function getFullname($user)
    {
        $sql="select * from admin where username='$user'";
        return queryOne($sql);
    }
    // đổi pass
    function getAdminChangePass($user,$pass)
    {
        $sql="select count(*) from admin where fullname ='$user' and password='$pass'";
        return queryOneCount($sql);
    }
    function updatePass($user,$pass_new1){
        $sql = "update admin set password='$pass_new1' where fullname='$user'";
        execute($sql);
    }

    // đăng ký
    function insertDangKy($fullname,$user,$email,$pass)
    {
        $sql="insert into admin(fullname,username,mail,password) values('$fullname','$user','$email','$pass')";
        execute($sql);
    }
    function getAdminDangKy($user,$email){
        $sql="select * from admin where username='$user' or mail='$email'";
        return query($sql);
    }

    // quên mật khẩu
    function getAdminEmail($email)
    {
        $sql="select count(*) from admin where mail='$email'";
        return queryOneCount($sql);
    }
    function updatePassForgot($email,$pass_new){
        $sql = "update admin set password='$pass_new' where mail='$email'";
        execute($sql);
    }
?>