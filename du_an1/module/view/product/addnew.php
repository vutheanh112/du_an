<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include_once('../controller/index.php')
?>
<center>
    <div class="container_form">
        <form method ="post" class ="add_pro" action="product.php?ctrl=product&act=insert" enctype="multipart/form-data">
            <p class ="title">THÊM SẢN PHẨM</p>
            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Tên Danh Mục</span>
                    </div>
                    <select name="cataPro" class="form-control">
                        <?php
                        $dbh=new PDO('mysql:host=localhost;dbname=laptop','root','');
                        $query="select * from catalog";
                        $listCatalog = $dbh->query($query);
                            foreach ($listCatalog as $cataLog){
                                echo '<option value="'.$cataLog['id_dm'].'">'.$cataLog['ten_dm'].'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Tên Danh Mục Lớn</span>
                    </div>
                    <select name="cataBigPro" class="form-control">
                        <?php
                        $dbh=new PDO('mysql:host=localhost;dbname=laptop','root','');
                        $query="select * from catalog_big";
                        $listCatalog = $dbh->query($query);
                            foreach ($listCatalog as $cataLog){
                                echo '<option value="'.$cataLog['id'].'">'.$cataLog['cat_title'].'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Ảnh Sản Phẩm</span>
                    </div>
                    <input type="file" id="myfile" name="imgPro" class="form-control" required style ="overflow: hidden">
                </div>
            </div>

            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Ảnh Mô Tả</span>
                    </div>
                    <input type = "file" name = "imgProList[]" class="form-control" required multiple="multiple" style ="overflow: hidden">
                </div>
            </div>

            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Tên Sản Phẩm</span>
                    </div>
                    <input type = "text" name = "namePro" class="form-control" required>
                </div>
            </div>

            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Giá Tiền</span>
                    </div>
                    <input type = "number" min="0" name = "priPro" class="form-control" required>
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit" name="them_sanpham" class="btn btn-outline-info checkAddnew">Thêm Sản Phẩm</button>   
            </div>
        </form>
    </div>
</center>
</body>
</html>