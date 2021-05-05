<?php
function get_pagding ($num_page , $page ,  $base_url = ""){
   $id = (int)$_GET['cat_id'];
$str_pagding= " <ul class='pagding'> ";
   if($page >1 ){
       $page_prev = $page-1;
    $str_pagding .=" <li><a href=\"{$base_url}&page={$page_prev}&cat_id={$id}\">Trước</a></li>";
   }
   for($i=1; $i<=$num_page ; $i++){
    $str_pagding .=" <li><a href=\"{$base_url}&page={$i}&cat_id={$id}\">{$i}</a></li>";
   }
   if($page < $num_page ){
    $page_next = $page + 1;
    $str_pagding .=" <li><a href=\"{$base_url}&page={$page_next}&cat_id={$id}\">sau</a></li>";
   }
   

$str_pagding .=" </ul> ";
       return  $str_pagding;
}

?>