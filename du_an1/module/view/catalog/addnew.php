<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include_once('../controller/index.php');
?>
    <center>
        <div class="container_form">
            <form method ="post" class = "add_cata" action="catalog.php?ctrl=catalog&act=insert" enctype= 'multipart/form-data'>
                <p class ="title">THÊM DANH MỤC</p>
                <div class = "form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Tên Danh Mục</span>
                        </div>
                        <input type = "text" name = "name" class="form-control" required>
                    </div>
                </div>
                <div class = "form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">STT</span>
                        </div>
                        <input type = "number" name = "stt" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="them_sanpham" class="btn btn-outline-info">Thêm Danh Mục</button>   
                </div>
            </form>
        </div>
    </center>
</body>
</html>