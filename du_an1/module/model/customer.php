<?php
    include_once('database.php');
    function getAllCustomer()
    {
        $sql="select * from khachhang";
        return query($sql);
    }

    function getCustomerByID($id)
    {
        $sql="select * from khachhang where id_kh='$id'";
        return queryOne($sql);
    }
    function addNewCustomer($name,$address,$tele,$email,$pass)
    {
        $sql="insert into khachhang(ten_kh,diachi_kh,sdt_kh,email,password) values('$name','$address','$tele','$email','$pass')";
        execute($sql);
    }

    function updateCustomer($id,$name,$address,$tele,$email,$pass)
    {
        $sql="update khachhang set id_kh='$id',ten_kh='$name',diachi_kh='$address',sdt_kh='$tele',email='$email',password='$pass' where id_kh='$id'";
        execute($sql);
    }

    function deleteCustomer($id)
    {
        $sql="DELETE from khachhang where id_kh='$id'";
        execute($sql);
    }

?>