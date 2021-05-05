<?php
$id = (int)$_GET['id'];
add_cart($id);
show_array($_SESSION['cart']);
redirect('?mod=cart&act=order');


