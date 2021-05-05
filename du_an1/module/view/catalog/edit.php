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
    <div class="div_form">
        <form method ="post" class="edit_cata" action="catalog.php?ctrl=catalog&act=update" enctype="multipart/form-data">
            <p class ="title">SỬA DANH MỤC</p>
            <div class = "form-group-hide">
                <input type = "text" name = "id" class="form-control" readonly required value="<?php echo $cata['id_dm'] ?>">
            </div>

            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Tên Danh Mục</span>
                    </div>
                    <input type = "text" name = "name" class="form-control" required value="<?php echo $cata['ten_dm'] ?>">
                </div>
            </div>

            <div class = "form-group">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">STT</span>
                    </div>
                    <input type = "number" name = "stt" class="form-control" required value="<?php echo $cata['stt_dm'] ?>">
                </div>
            </div>
            
            <div class="form-group">
                <button type="submit" name="them_danhmuc" class="btn btn-outline-info">Sửa Danh Mục</button>   
            </div>
        </form>
    </div>
</div>
</center>
</body>
</html>