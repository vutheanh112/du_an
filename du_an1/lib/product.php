<?php
// product home
function get_list_product() {

    $result = db_fetch_array("SELECT * FROM product limit 16  ");
    return $result;
}
// product 2
function get_product_by_id($id)
{
    $list_product = db_fetch_array("SELECT * FROM product   ");
    $result = array();
    foreach ($list_product as $item) {
        if ($item['id_dm'] == $id) {
            $item['url'] = "?mod=product&controller=index&action=deltal_product&id={$item['id_sp']}";
            $result[] = $item;
        }
    }


    return $result;
}
//2
function get_product($id)
{
    $items = db_fetch_array("SELECT * FROM product WHERE id_sp = {$id} ");



    return $items;
}
//catalog_big
function get_catalog(){
    $info_cata = db_fetch_array("SELECT * FROM catalog");
    return  $info_cata; 
}
// trang product chi tiết
function get_product_list()
{
    $list_product = db_fetch_array("SELECT * FROM product limit 5 ");
    return $list_product;
}
// tìm kiếm
function getProductBySearch($textSearch){
    $sql =db_fetch_array("SELECT * FROM product where ten_sp like '%$textSearch%'");
    return $sql;
}

function get_commen($id){
    $sql =db_fetch_array("SELECT * FROM `comment` WHERE id_sp = {$id} ORDER BY `comment`.`ngaybl` DESC limit 3 " );
    return $sql;
}
