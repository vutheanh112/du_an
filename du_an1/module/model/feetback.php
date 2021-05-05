<?php
    include_once('database.php');
    function getAllFeetback()
    {
        $sql="SELECT * from feetback";
        return query($sql);
    }

    function deleteFeetback($id)
    {
        $sql="DELETE from feetback where id='$id'";
        execute($sql);
    }
?>