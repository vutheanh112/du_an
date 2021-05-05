<?php
    include_once('../model/product.php');
    $textSearch = $_POST['data'];
    if($textSearch != null || $textSearch != ''){
      $products=getProductBySearch($textSearch);
      foreach ($products as $p){
          echo'<tr>
                  <td><input name="checkbox[]" class="checkbox" type="checkbox" value="'.$p['id_sp'].'"></td>
                  <td>'.$p['id_sp'].'</td>
                  <td><img src = "../../public/img_product/'.$p['anh_sp'].'"width = "50px"></td>      
                  <td>'.$p['ten_sp'].'</td>
                  <td>'.$p['gia_sp'].'</td>
                  <td>
                    <a href="product.php?ctrl=product&act=edit&id='.$p['id_sp'].'"><button type="button" class="btn btn-outline-primary">Sửa</button></a>
                    <a href="product.php?ctrl=product&act=delete&id='.$p['id_sp'].'"><button type="button" class="btn btn-outline-danger">Xóa</button></a>
                  </td>
              </tr>';
      }
    }else{
    }
?>