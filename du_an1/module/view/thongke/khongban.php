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
    <div id = "container_thongke">
        <form>
            <div class= "form_searh_thongke">
                <div class= "title_thongke">
                    <select class="form-control" onchange="location = this.value;">
                        <option>Chọn</option>
                        <option value ="thongke.php">Thống Kê Giá Cả Sản Phẩm</option>
                        <option value ="thongke.php?ctrl=thongke&act=da_ban">Những Sản Phẩm Đã Bán</option>
                        <option value ="thongke.php?ctrl=thongke&act=khongban">Những Sản Phẩm Không Bán Được</option>
                        <option value ="thongke.php?ctrl=thongke&act=banchay">Những Sản Phẩm Bán Chạy</option>
                        <option value ="thongke.php?ctrl=thongke&act=bancham">Những Sản Phẩm Bán Chậm</option>
                    </select>
                </div>
                <div class="bieudo" style= "margin-left: 20px;">
                    <a href="thongke.php?ctrl=thongke&act=bieudo" class="btn btn-outline-info" style="width: max-content">Biểu Đồ</a>
                </div>
            </div>
        </form>
    </div>
    
    <table class = "table table-hover">
        <thead>
            <tr>
                <th>ID Sản Phẩm</th>
                <th>Tên sản Phẩm</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $items = thongkekhongban();
            foreach ($items as $item){
                echo'<tr>
                        <td>'.$item['id_sp'].'</td>
                        <td>'.$item['ten_sp'].'</td>
                    </tr>';
            }
        ?>
        </tbody>
    </table>
</center>
</body>
</html>