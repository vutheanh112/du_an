<?php

$DBH = new PDO('mysql:host=localhost;dbname=laptop1', 'root', '');
//lay thong tin nguoi dat
if(isset($_POST['btn_thanhtoan'])){
 show_array($_POST);

$name = $_POST['fullname'];
$emails = $_POST['email'];
$add=$_POST['address'];
$phones=$_POST['phone'];
$ghichu = $_POST['note'];
$list_buy =  get_list_buy_cart();
show_array($_POST);
 $total_price =get_total_cart();

$dates=date('y-m-d h:i:s');
//su ly them vao don hang
       

$sql = "INSERT INTO order_pro (ten_kh,diachi_kh,email_kh,sdt_kh,ghi_chu,tongtien,ngaymua) values ('$name','$add','$emails','$phones','$ghichu','$total_price','$dates')";
$STH = $DBH->exec($sql);
//
$madh= $DBH->lastInsertId();
$list_buy =  get_list_buy_cart();

foreach($list_buy as $item){
$name_product=$item['product_title'] ;

$quatity = $item['qty'] ;
$total_price =get_total_cart();
}
$name = $_POST['fullname'];
$emails = $_POST['email'];
$add=$_POST['address'];
$phones=$_POST['phone'];
$dates=date('y-m-d h:i:s');
$query="INSERT INTO donhangchi_tiet( ten_sp2,soluong,tongtien,ten_nguoimua,diachi_nguoimua,email_nguoimua,sdt_nguoimua,ngaymua,id_chitietdh ) values ('$name_product','$quatity','$total_price','$name','$add','$emails',$phones,'$dates','$madh')";
$STH =$DBH->exec($query);


header('location:?mod=home&act=home');



}

?>