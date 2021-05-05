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
                <th>Tên Khách Hàng</th>
                <th>Đối Tượng</th>
                <th>Nội Dung</th>
                <th>Ngày Phản Hồi</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($feetbacks as $feetback){
                echo'<tr>
                        <td>'.$feetback['name'].'</td>
                        <td>'.$feetback['subject'].'</td>
                        <td>'.$feetback['deltal'].'</td>
                        <td>'.$feetback['ngayfeetback'].'</td>
                        <td>'.$feetback['email'].'</td>
                        <td>
                        <a href="feetback.php?ctrl=feetback&act=delete&id='.$feetback['id'].'"><button type="button" class="btn btn-outline-danger">Xóa</button></a>
                        </td>
                    </tr>';
            }
        ?>
        </tbody>
    </table>
</center>
</body>
</html>