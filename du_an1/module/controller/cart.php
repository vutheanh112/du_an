<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<?php
    include_once '../model/cart.php';
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location: login.php');
    }
    $act='index';
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    $messge='';
    switch ($act){
        case 'index':
            $cart=getAllCart();
            include '../view/cart/cart.php';
            break;
        
        case 'ngay_gan':
            $cart = getDate_gan();
            include '../view/cart/cart.php';
        break;

        case 'ngay_xa':
            $cart = getDate_xa();
            include '../view/cart/cart.php';
        break;

        case 'edit':
            $id=$_GET['id'];
            $cart=getCartByID($id);
            include '../view/cart/edit.php';
            break;

        case 'edit_detail':
            $id=$_GET['id'];
            $cart=getCartDetailByID($id);
            include '../view/cart/edit_detail.php';
            break;

        case 'update':
            $id=$_POST['id'];
            $name=$_POST['name'];
            $address=$_POST['address'];
            $email=$_POST['email'];
            $tele=$_POST['tele'];
            $date=date('Y-m-d H:i:s');
            updateCart($id,$name,$address,$email,$tele,$date);
            echo'
            <script>
                Swal.fire({
                    title: "Chúc Mừng, Bạn Đã Sửa Thành Công",
                    text: "Thông Tin Đã Được Sửa",
                    icon: "success"
                }).then((result) => {
                        window.location.href = "cart.php";
                })
            </script>
            ';
            break;

        case 'update_detail':
            // lấy id để quay lại trang
            $id_chitietdh=$_POST['id_chitietdh'];

            //Lấy id để update cart
            $id_dh=$_POST['id_dh'];
            $soluong=$_POST['soluong'];
            $price=$_POST['price'];
            $thanhtien=$soluong * $price;
            updateCartDetail($id_dh,$soluong,$price,$thanhtien);
            echo'
            <script>
                Swal.fire({
                    title: "Chúc Mừng, Bạn Đã Sửa Thành Công",
                    text: "Thông Tin Đã Được Sửa",
                    icon: "success"
                }).then((result) => {
                        window.location.href = "cart.php?ctrl=cart&act=detail&id='.$id_chitietdh.'";
                })
            </script>
            ';
            break;

        case 'detail':
            $id=$_GET['id'];
            $cart=SelectDetailCart($id);
            include '../view/cart/detail_cart.php';
            break;

        case 'delete':
            $id=$_GET['id'];
            $result=deleteCart($id);
            header('location:cart.php');
            break;

        case 'delete_detail':
            $id=$_GET['id'];
            DeleteDetailCart($id);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            break;
    }
?>
<script>
    $(function(){
            $('#4').addClass('list');
    });
</script>
</body>
</html>