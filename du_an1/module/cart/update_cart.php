<?php
if(isset($_POST['btn_update_cart'])){
    //show_array($_POST);
    update_cart($_POST['qty']);
    redirect('?mod=cart&act=order');
}

?>