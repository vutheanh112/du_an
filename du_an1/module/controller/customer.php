<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<?php
    include_once '../model/customer.php';
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location: login.php');
    }
    $act='index';
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    $message='';
    switch ($act){
        case 'index':
            $selectAll=false;
            $customers=getAllCustomer();
            include '../view/customer/customer.php';
            break;

        case 'addnew':
            include '../view/customer/addnew.php';
            break;

        case 'insert':
            $name=$_POST['nameCus'];
            $address=$_POST['addressCus'];
            $tele=$_POST['teleCus'];
            $email=$_POST['emailCus'];
            $pass=md5($_POST['passCus']);
            addNewCustomer($name,$address,$tele,$email,$pass);
            echo'
            <script>
            Swal.fire({
                title: "Chúc Mừng, Bạn Đã Thêm Thành Công",
                text: "Thông Tin Đã Được Thêm",
                icon: "success"
            }).then((result) => {
                    window.location.href = "customer.php";
                })
            </script>';
            break;

        case 'edit':
            $id=$_GET['id'];
            $cus=getCustomerByID($id);
            include '../view/customer/edit.php';
            break;

        case 'update':
            $id=$_POST['id'];
            $name=$_POST['nameCus'];
            $address=$_POST['addressCus'];
            $tele=$_POST['teleCus'];
            $email=$_POST['emailCus'];
            $pass=md5($_POST['passCus']);
            updateCustomer($id,$name,$address,$tele,$email,$pass);
            echo'
            <script>
            Swal.fire({
                title: "Chúc Mừng, Bạn Đã Sửa Thành Công",
                text: "Thông Tin Đã Được Sửa",
                icon: "success"
            }).then((result) => {
                    window.location.href = "customer.php";
                })
            </script>';
            break;

        case 'delete':
            $id=$_GET['id'];
            deleteCustomer($id);
            header('location:customer.php');
            break;
    }

?>
<script>
    $(function(){
            $('#5').addClass('list');
    });
</script>
</body>
</html>