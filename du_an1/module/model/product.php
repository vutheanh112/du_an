<?php
    include_once('database.php');
        // phân trang
        function getAllProduct($item_per_page,$offset){
            $sql="select * from product order by id_sp asc limit " .$item_per_page. " offset ".$offset;
            return query($sql);
        }

        function rowsRecord(){
            $sql = "select count(*) from product";
            return queryRows($sql);
        }

        function getProductByID($id)
        {
            $sql="SELECT * from product where id_sp='$id'";
            return queryOne($sql);
        }

        function getProductBySearch($textSearch){
            $sql = "select * from product where ten_sp like '%$textSearch%'";
            return query($sql);
        }

        function selectProductByID($id)
        {
            $sql="select * from product where id_dm='$id'";
            return query($sql);
        }

        function addNewProduct($catalog_id,$catalogbig_id,$name,$price,$imgPro,$array_ProList)
        {
            $sql="insert into product(id_dm,id_catalog_big,ten_sp,gia_sp,anh_sp,anhlist_sp) 
            values('$catalog_id','$catalogbig_id','$name','$price','$imgPro','$array_ProList')";
            execute($sql);
        }

        function updateProduct($id,$catalog_id,$name,$priPro)
        {
            $sql="update product set id_dm='$catalog_id',ten_sp='$name',gia_sp='$priPro' where id_sp='$id'";
            execute($sql);
        }

        function updateImg($id,$imgPro,$array_ProList){
            $sql = "update product set anh_sp='$imgPro',anhlist_sp='$array_ProList' where id_sp='$id'";
            execute($sql);
        }
        function deleteProduct($id)
        {
            $sql="DELETE from product where id_sp='$id'";
            execute($sql);
        }
        
        function deleteProductAll($id)
        {
            $sql="DELETE from product where id_sp='$id'";
            execute($sql);
        }
?>