<?php
function add_cart($id)
{
    $items = db_fetch_array("SELECT * FROM product WHERE id_sp = {$id}  ");
    if (!empty($items)) {
        foreach ($items as $item) {
            $qty = 1;
            if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
                $qty =  $_SESSION['cart']['buy'][$id]['qty'] + 1;
            }
            $_SESSION['cart']['buy'][$id] = array(
                'id' => $item['id_sp'],
                'image' =>$item['anh_sp'],
                'product_title' => $item['ten_sp'],
                'price' => $item['gia_sp'],
                'qty' => $qty,
                'sup_total' => $item['gia_sp'] * $qty
                


            );
            update_info_cart();
            
        }
    }

   
}
function update_info_cart(){
    if (isset($_SESSION['cart'])) {
        $num_order = 0;
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $items) {
            $num_order += $items['qty'];
            $total += $items['sup_total'];
        }
        $_SESSION['cart']['info'] = array(
            'num_order' => $num_order,
            'total' => $total
        );
    }
}
// lấy danh sách sản phẩm trong giỏ hàng
function get_list_buy_cart (){
    if(isset($_SESSION['cart'])){
        foreach ($_SESSION['cart']['buy'] as &$item){
            $item['url_dele_cart'] = "?mod=cart&act=delete&id={$item['id']}";
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
}
// tổng hóa đơn
function get_total_cart(){
   
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['info'] ['total'];
    }
    return false;
}
// xóa sản phẩm trong giỏ hàng
function delete_cart($id){
    if(isset($_SESSION['cart'])){
            if( !empty($id)){
                unset($_SESSION['cart']['buy'] [$id]);
                update_info_cart();
            }else{
                unset($_SESSION['cart']);
            }
    }
    
}
function delete_cart2(){
    unset($_SESSION['cart']);
}
 function get_num_order_cart() {
     if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['info'] ['num_order'];
     }
 }
 function  update_cart($qty){
     foreach($qty as $id => $new_qty){
     $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
     $_SESSION['cart']['buy'][$id]['sup_total'] =$new_qty * $_SESSION['cart']['buy'][$id]['price'];

     }
     update_info_cart();
 }