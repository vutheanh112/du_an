<?php
    include_once('database.php');
        function getAllCatalog()
        {
            $sql="SELECT * from catalog";
            return query($sql);
        }

        function getCatalogByID($id)
        {
            $sql="SELECT * from catalog where id_dm='$id'";
            return queryOne($sql);
        }

        function addNewCatalog($name,$stt)
        {
            $sql="insert into catalog(ten_dm,stt_dm) 
            values('$name','$stt')";
            execute($sql);
        }
        
        function updateCatalog($id,$name,$stt)
        {
            $sql="update catalog set ten_dm='$name',stt_dm='$stt' where id_dm='$id'";
            execute($sql);
        }

        function deleteCatalog($id)
        {
            $sql="DELETE from catalog where id_dm='$id'";
            execute($sql);
        }
?>