<?php
require_once 'database.php';

function thong_ke_binh_luan(){
    $sql = "SELECT bl.id, hh.id_sp, hh.ten_sp,"
            . " COUNT(*) so_luong,"
            . " MIN(bl.ngaybl) cu_nhat,"
            . " MAX(bl.ngaybl) moi_nhat"
            . " FROM comment bl "
            . " JOIN product hh ON hh.id_sp=bl.id_sp "
            . " GROUP BY hh.id_sp, hh.ten_sp"
            . " HAVING so_luong > 0";
    return query($sql);
}
function chi_tiet_binh_luan($id){
    $sql = "select *
            from product hh join comment bl
            on (hh.id_sp=bl.id_sp)
            where bl.id_sp='$id'";
    return query($sql);
}
function deleteComment($id){
    $sql="delete from comment where id='$id'";
    execute($sql);
}
