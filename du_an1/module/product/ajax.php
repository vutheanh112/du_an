<?php
    include_once('lib/product.php');
    $textSearch = $_GET['data'];
    $products=getProductBySearch($textSearch);
    foreach ($products as $item){
        echo' <li>
        <div class="card-2" style="width: 18rem;">
            <a href= "?mod=product&act=deltal_product&id= ' .$item['id_sp']. ' "><img src="public/img_product/' .$item['anh_sp'] .'" class="card-img-top" alt="..."></a>

            <div class="card-body2">
                <a href="?mod=product&act=deltal_product&id='. $item['id_sp'] .'">
                    <p class="name-product">'. $item['ten_sp'] .'</p>
                </a>
                <p class="price-product fl-left">'. $item['gia_sp']  .'đ</p>
                <p class="discount">'. $item['giamgia_sp']   .'đ</p>
            </div>
        </div>
    </li>';
    }
    
 
  
