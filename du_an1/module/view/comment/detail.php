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
                <th>Người BL</th>
                <th>Nội dung</th>
                <th>Ngày BL</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($items as $item){
                echo'<tr>
                        <td>'.$item['name_kh'].'</td>
                        <td>'.$item['noidung'].'</td>
                        <td>'.$item['ngaybl'].'</td>
                        <td>
                        <a href="comment.php?ctrl=comment&act=delete&id='.$item['id'].'" class="checkDelete"><button type="button" class="btn btn-outline-danger">Xóa</button></a>
                        </td>
                    </tr>';
            }
        ?>
        </tbody>
    </table>
</center>
</body>
</html>