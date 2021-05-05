<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<?php
    include_once '../controller/index.php';
?>
    <table class = "table table-hover">
        <thead>
            <tr>
                <th>ID Khách Hàng</th>
                <th>Tên Khách Hàng</th>
                <th>Địa Chỉ</th>
                <th>Số Điện Thoại</th>
                <th>Email</th>
                <th>Sửa / Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $customers=getAllCustomer();
            foreach ($customers as $cus){
                echo'<tr>
                        <td>'.$cus['id_kh'].'</td>
                        <td>'.$cus['ten_kh'].'</td>
                        <td>'.$cus['diachi_kh'].'</td>
                        <td>'.$cus['sdt_kh'].'</td>
                        <td>'.$cus['email'].'</td>
                        <td>
                          <a href="customer.php?ctrl=customer&act=edit&id='.$cus['id_kh'].'"><button type="button" class="btn btn-outline-info">Sửa</button></a>
                          <a href="customer.php?ctrl=customer&act=delete&id='.$cus['id_kh'].'" class="checkDelete"><button type="button" class="btn btn-outline-danger">Xóa</button></a>
                        </td>
                    </tr>';
            }
        ?>
        </tbody>
    </table>
</body>
</html>