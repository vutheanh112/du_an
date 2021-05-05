<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include_once ('../controller/index.php');
?>

    <table class = "table table-hover load">
        <thead>
            <tr>
                <th>ID Danh Mục</th>
                <th>Tên Danh Mục</th>
                <th>Số Thứ Tự</th>
                <th>Sửa / Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($catalog as $cata){
                    echo'<tr>      
                            <td>'.$cata['id_dm'].'</td>
                            <td>'.$cata['ten_dm'].'</td>
                            <td>'.$cata['stt_dm'].'</td>
                            <td>
                            <a href="catalog.php?ctrl=catalog&act=edit&id='.$cata['id_dm'].'"><button type="button" class="btn btn-outline-info">Sửa</button></a>
                            <a href="catalog.php?ctrl=catalog&act=delete&id='.$cata['id_dm'].'" class="checkDelete"><button type="button" class="btn btn-outline-danger">Xóa</button></a>
                            </td>
                        </tr>';
                }
            ?>
        </tbody>
    </table>

</body>
</html>