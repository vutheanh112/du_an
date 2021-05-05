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
        <form method ="post" class ="add_cus" action="customer.php?ctrl=customer&act=insert">
        <p class ="title">THÊM KHÁCH HÀNG</p>
        <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Họ Và Tên</span>
                    </div>
                    <input type = "text" name = "nameCus" class="form-control" required>
                </div>
            </div>
            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Địa Chỉ</span>
                    </div>
                    <input type = "text" name = "addressCus" class="form-control" required>
                </div>
            </div>
            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">SĐT</span>
                    </div>
                    <input type = "number" name = "teleCus" class="form-control" required>
                </div>
            </div>
            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Email</span>
                    </div>
                    <input type = "email" name = "emailCus" class="form-control" required>
                </div>
            </div>
            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Mật Khẩu</span>
                    </div>
                    <input type = "text" name = "passCus" class="form-control" required minlength="8">
                </div>
            </div>
            <button type="submit" name="them_cus" class="btn btn-outline-info checkAddnew">Thêm</button>
        </form>
    </div>
</center>
</body>
</html>