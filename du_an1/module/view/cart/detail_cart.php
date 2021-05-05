<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .chitietfield{
            text-align: left;
            border-radius: 10px;
            border: 1px solid gray;
            margin-right: 10px;
            margin-left: 10px;
        }
        .chitietfield div{
            margin-left: 30px;
            padding: 10px 0px;
            border-bottom: 1px dotted #ccc;
        } 
        .chitietfield div span{
            display: inline-block;
            width: 200px;
        }
        .chitietfield div p{
            color: #009E8E;
        }
        span{
            font-weight: 500;
        }
        img{
            width: 65px;
        }
        table{
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<?php
    include_once '../controller/index.php';
?>
    <table class = "table table-hover">
        <thead class = "thead">
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Sửa / Xóa</th>
                </tr>
        </thead>
        <tbody>
            <?php
                foreach ($cart as $c){
                    echo'<tr>
                    <td>'.$c['id_sp'].'</td>
                    <td><img src="../../public/img_product/'.$c['image_pro'].'"</td>
                    <td>'.$c['ten_sp2'].'</td>
                    <td>'.$c['gia_sp'].' đ</td>
                    <td>'.$c['soluong'].'</td>
                    <td>'.$c['tongtien'].' đ</td>
                    <td>
                        <a href="cart.php?ctrl=cart&act=edit_detail&id='.$c['id_dh'].'"><button type="button" class="btn btn-outline-info">Sửa</button></a>
                        <a href="cart.php?ctrl=cart&act=delete_detail&id='.$c['id_dh'].'" class="checkDelete"><button type="button" class="btn btn-outline-danger">Xóa</button></a>
                    </td>
                </tr>';
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td colspan="4" class="hidden-xs"> </td> 
                <td class="hidden-xs text-left">
                    <!-- <strong>Tổng tiền: 3000000 đ</strong> -->
                </td>
                <td></td>
            </tr>
        </tfoot>
    </table>

    <div class = "chitietfield">
        <?php
        echo'
            <div>
                <span>Mã đơn hàng chi tiết:</span>
                <strong>'.$c['id_chitietdh'].'</strong>
            </div>
            <div>
                <span>Ngày đặt hàng:</span>
                <strong>'.$c['ngaymua'].'</strong>
            </div>
            <div>
                <span>Họ tên:</span>
                <strong>'.$c['ten_nguoimua'].'</strong>
            </div>
            <div>
                <span>Email:</span>
                <strong>'.$c['email_nguoimua'].'</strong>
            </div>
            <div>
                <span>Địa chỉ:</span>
                <strong>'.$c['diachi_nguoimua'].'</strong>
            </div>
            <div>
                <span>Số điện thoại:</span>
                <strong>'.$c['sdt_nguoimua'].'</strong>
            </div>
            
        ';
        ?>
    </div>



</body>
</html>