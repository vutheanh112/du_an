<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            padding: 5px;
        }
        a:hover{
            color: red;
            text-decoration: none;
        }
        button{
          margin-bottom: 10px;
        }
    </style>
</head>
<body>
<?php
    include_once('../controller/index.php');
?>
<center>
    <div class="search" style="width: 55%; padding: 20px 0px 30px 10px;">
        <form>
            <div class= "form-group-select">
                <div class= "title_select">
                    <select class="form-control " onchange="location = this.value;" style = "width: 90%;">
                            <option>Chọn</option>
                            <option value="cart.php?ctrl=cart&act=ngay_gan">Ngày Gần Nhất</option>
                            <option value="cart.php?ctrl=cart&act=ngay_xa">Ngày Xa Nhất</option>
                    </select>
                </div>
            </div>
        </form> 
    </div>
    <table class = "table table-hover">
        <thead class = "thead">
            <tr>
                <th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Ngày mua</th>
                <th>Chi tiết</th>
                <th>Sửa / Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($cart as $c){
                echo'<tr>
                        <td>'.$c['id_dh'].'</td>     
                        <td>'.$c['ten_kh'].'</td>
                        <td>'.$c['email_kh'].'</td>
                        <td>'.$c['diachi_kh'].'</td>
                        <td>'.$c['sdt_kh'].'</td>
                        <td>'.$c['ngaymua'].'</td>
                        <td>
                            <a href="cart.php?ctrl=cart&act=detail&id='.$c['id_dh'].'"><button type="button" class="btn btn-outline-primary">Chi tiết</button></a>
                        </td>
                        <td>
                            <a href="cart.php?ctrl=cart&act=edit&id='.$c['id_dh'].'"><button type="button" class="btn btn-outline-info">Sửa</button></a>
                            <a href="cart.php?ctrl=cart&act=delete&id='.$c['id_dh'].'" class="checkDelete"><button type="button" class="btn btn-outline-danger">Xóa</button></a>
                        </td>
                    </tr>';
            }
        ?>
        </tbody>
    </table>
</center>
</body>
</html>