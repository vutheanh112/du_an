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
        <form method ="post" class = "edit_pro" action="product.php?ctrl=product&act=update" enctype="multipart/form-data">
            <p class ="title">SỬA SẢN PHẨM</p>
            <div class = "form-group-hide">
                <input type = "number" name = "id" class="form-control" required value="<?php echo $pro['id_sp'] ?>">
            </div>

            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ID Danh Mục</span>
                    </div>
                    <input type = "number" name = "cataPro" class="form-control" value="<?php echo $pro['id_dm'] ?>">
                </div>
            </div>

            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Ảnh Sản Phẩm</span>
                    </div>
                    <input type = "file" name = "imgPro" class="form-control" value="<?php echo $pro['anh_sp'] ?>" style ="overflow: hidden">
                </div>
            </div>

            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Ảnh Mô Tả</span>
                    </div>
                    <input type = "file" name = "imgProList[]" class="form-control" multiple=multiple value="<?php echo $pro['anhlist_sp'] ?>" style ="overflow: hidden">
                </div>
            </div>

            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Tên Sản Phẩm</span>
                    </div>
                    <input type = "text" name = "namePro" class="form-control" required value="<?php echo $pro['ten_sp'] ?>">
                </div>
            </div>

            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Giá Tiền</span>
                    </div>  
                    <input type = "number" min="0" name = "priPro" class="form-control" required value="<?php echo $pro['gia_sp'] ?>">
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit" name="sua_sanpham" class="btn btn-outline-info checkUpdate">Sửa Sản Phẩm</button>   
            </div>
        </form>
    </div>
</center>
</body>
</html>