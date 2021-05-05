<?php
 function get_user($start = 1 ,$num_per_page = 10 ,$where="" ) {
    if(!empty($where))
    $where = "where {$where}";
    $list_product = db_fetch_array("SELECT * FROM product  {$where}  limit {$start},{$num_per_page}   ");
    return $list_product;
 }

 function get_user2($start = 1 ,$num_per_page = 10 ,$where="" ) {
   if(!empty($where))
   $where = "where {$where}";
   $list_product = db_fetch_array("SELECT * FROM product  {$where}  limit {$start},{$num_per_page} ORDER BY gia_sp ASC   ");
   return $list_product;
}
//login



