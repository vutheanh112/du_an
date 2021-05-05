<?php
    include_once('database.php');
        // Bảng đơn hàng
        function getAllCart()
        {
            $sql="SELECT * from order_pro";
            return query($sql);
        }

        function getDate_gan()
        {
            $sql = "SELECT * FROM order_pro WHERE ngaymua >= NOW() - INTERVAL 1 DAY";
            return query($sql);
        }

        function getDate_xa()
        {
            $sql = "SELECT * FROM order_pro WHERE ngaymua = (SELECT MIN(ngaymua) FROM order_pro)";
            return query($sql);
        }

        function getCartByID($id)
        {
            $sql="SELECT * from order_pro where id_dh='$id'";
            return queryOne($sql);
        }

        function updateCart($id,$name,$address,$email,$tele,$date)
        {
            $sql="update order_pro set ten_kh='$name',diachi_kh='$address',email_kh='$email',sdt_kh='$tele',ngaymua='$date' where id_dh='$id'";
            execute($sql);
        }
        
        function deleteCart($id)
        {
            $sql="DELETE from order_pro where id_dh='$id'";
            execute($sql);
        }

        // Bảng đơn hàng chi tiết
        function getCartDetailByID($id)
        {
            $sql="SELECT * from donhangchi_tiet where id_dh='$id'";
            return queryOne($sql);
        }

        function updateCartDetail($id_dh,$soluong,$price,$thanhtien)
        {
            $sql="update donhangchi_tiet set soluong='$soluong',gia_sp='$price', tongtien='$thanhtien' where id_dh='$id_dh'";
            execute($sql);
        }

        function SelectDetailCart($id)
        {
            $sql="select * from donhangchi_tiet where id_chitietdh='$id'";
            return query($sql);
        }
        
        function DeleteDetailCart($id)
        {
            $sql="DELETE from donhangchi_tiet where id_dh='$id'";
            execute($sql);
        }
?>