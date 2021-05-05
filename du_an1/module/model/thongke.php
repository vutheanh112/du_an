<?php
require_once 'database.php';

function thong_ke_gia_sp(){
    $sql = "SELECT lo.id_dm, lo.ten_dm,"
            . " COUNT(*) soluong,"
            . " MIN(hh.gia_sp) gia_min,"
            . " MAX(hh.gia_sp) gia_max,"
            . " AVG(hh.gia_sp) gia_avg"
            . " FROM product hh "
            . " JOIN catalog lo ON lo.id_dm=hh.id_dm "
            . " GROUP BY lo.id_dm, lo.ten_dm";
    return query($sql);
}
function thongkehanghoa(){
    $sql = "select * from donhangchi_tiet";
    return query($sql);
}
function thongkebanchay(){
    $sql = "select * from donhangchi_tiet where soluong >= 2";
    return query($sql);
}
function thongkebancham(){
    $sql = "select * from donhangchi_tiet where soluong < 2";
return query($sql);
}
function thongkekhongban(){
    $sql = "select S.id_sp,ten_sp
    from product S
    where S.id_sp NOT IN(SELECT C.id_sp
    FROM donhangchi_tiet C INNER JOIN product S2
    ON C.id_sp = S2.id_sp)";
return query($sql);
}
