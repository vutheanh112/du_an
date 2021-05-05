<?php
session_start();
$DBH = new PDO('mysql:host=localhost;dbname=thoi_trang2', 'root', '');
//lay thong tin nguoi dat

$name = $_POST['names'];
$emails = $_POST['email'];
$add=$_POST['address'];
$phones=$_POST['phone'];
$dates=date('y-m-d h:i:s');
//su ly them vao don hang
$sql = "insert into donhang(ho_ten,email,dia_chi,phone,ngaydat )values('$name','$emails','$add','$phones','$dates')";
$STH = $DBH->exec($sql);
//
$madh= $DBH->lastInsertId();
foreach($_SESSION['carts'] as $item){
$masp =$item['id'];

$sl =$item['quantity'];
$query="insert into chitietdonhang (id_dh,id_sp,soluong) values ('$madh','$masp','$sl')";
$STH =$DBH->exec($query);
}
//xoa don hang
unset($_SESSION['carts']);
header('location:index.php');


?>