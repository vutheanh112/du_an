<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<body>
<?php
    include_once '../controller/index.php';
?>
<center>
    <table class = "table table-hover">
        <thead>
            <tr>
                <th>Tên Hàng Hóa</th>
                <th>Số BL</th>
                <th>Mới Nhất</th>
                <th>Cũ Nhất</th>
                <th>Chi Tiết</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($items as $item){
                echo'<tr>
                        <td>'.$item['ten_sp'].'</td>
                        <td>'.$item['so_luong'].'</td>
                        <td>'.$item['moi_nhat'].'</td>
                        <td>'.$item['cu_nhat'].'</td>
                        <td>
                        <a href="comment.php?ctrl=comment&act=detail&id='.$item['id_sp'].'"><button type="button" class="btn btn-outline-info">Chi Tiết</button></a>
                        </td>
                    </tr>';
            }
        ?>
        </tbody>
    </table>
</center>
</body>
</html>