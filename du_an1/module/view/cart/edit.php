<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include_once '../controller/index.php';
?>
<center>
    <div class="container_form">
        <form method ="post" class = "edit_cart" action="cart.php?ctrl=cart&act=update" enctype="multipart/form-data">
        <p class ="title">SỬA ĐƠN HÀNG</p>
            <div class = "form-group-hide">
                    <input type = "text" name = "id" class="form-control" value="<?php echo $cart['id_dh'] ?>">
            </div>
            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Họ Và Tên</span>
                    </div>
                    <input type = "text" name = "name" class="form-control" required value="<?php echo $cart['ten_kh'] ?>">
                </div> 
            </div>
            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Địa Chỉ</span>
                    </div>
                    <input type = "text" name = "address" class="form-control" required value="<?php echo $cart['diachi_kh'] ?>">
                </div>
            </div>
            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Email</span>
                    </div>
                    <input type = "email" name = "email" class="form-control" required value="<?php echo $cart['email_kh'] ?>">
                </div>
            </div>
            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">SĐT</span>
                    </div>
                    <input type = "tele" name = "tele" class="form-control" required value="<?php echo $cart['sdt_kh'] ?>">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" name="sua_sanpham" class="btn btn-outline-info">Sửa</button>   
            </div>
        </form>
    </div>
</center>
</body>
</html>