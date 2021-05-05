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
    $previous = "javascript:history.go(-1)";
    if(isset($_SERVER['HTTP_REFERER'])) {
        $previous = $_SERVER['HTTP_REFERER'];
    }
    ?>
    <center>
        <div class="container_form">
            <form method ="post" class = "edit_detail" action="cart.php?ctrl=cart&act=update_detail" enctype="multipart/form-data">
            <p class ="title">SỬA ĐƠN HÀNG CHI TIẾT</p>
                <div class = "form-group-hide">
                    <input type = "text" name = "id_dh" class="form-control" value="<?php echo $cart['id_dh'] ?>">
                </div>

                <div class = "form-group-hide">
                    <input type = "text" name = "id_chitietdh" class="form-control" value="<?php echo $cart['id_chitietdh'] ?>">
                </div>

                <div class = "form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Số Lượng</span>
                        </div>
                        <input type = "number" min ="0" name = "soluong" class="form-control" requỉred value="<?php echo $cart['soluong'] ?>">
                    </div>
                </div>

                <div class = "form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Giá</span>
                        </div>
                        <input type = "number" min="0" name = "price" class="form-control" requỉred value="<?php echo $cart['gia_sp'] ?>">
                    </div>
                </div>

                <div class="form-group">
                    <a href="<?= $previous ?>" class="btn btn-outline-success">Quay lại</a>
                    <button type="submit" name="sua_sanpham" class="btn btn-outline-info">Sửa</button>   
                </div>
            </form>
        </div>
    </center>
</body>
</html>