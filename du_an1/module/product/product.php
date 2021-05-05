<?php
$id = (int)$_GET['cat_id'];
$num_row = db_num_rows("SELECT * FROM product where id_catalog_big={$id}");
//số lượng bả ghi trên trang
$num_per_page = 15;
// tông số bản ghi
$total_row = $num_row;
// tông số trang
$num_page = ceil($total_row / $num_per_page);
//echo $num_page;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $num_per_page;
$list_product = get_user($start, $num_per_page, " id_catalog_big={$id} ");
$result = array();
foreach ($list_product as $item) {
    if ($item['id_catalog_big'] == $id) {
        $item['url'] = "?mod=product&act=deltal_product&id={$item['id_sp']}";
        $result[] = $item;
    }
}
?>
<?php
get_header();

?>
    <div id="wp-container">
        <div id="menu-sm" class="wp-inner">
            <ul class="row no-gutters">
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> trang chủ</a></li>
                <li><a href=""><i class="fa fa-chevron-right" aria-hidden="true"></i>sản phẩm</a></li>
            </ul>
        </div>
        <div id="wp-content" class="wp-inner row no-gutters">
            <div id="sibarde">
                <div id="sibar-top">
                    <div class="section-hear">
                        <h2>danh mục sản phẩm</h2>
                    </div>
                    <ul class="list-product">
                        <?php
                        $info_cata = get_catalog();
                        if (!empty($info_cata)) {
                            foreach ($info_cata as $cata) {
                        ?>
                                <li><a href="?mod=product&act=product2&sp_id=<?php echo  $cata['id_dm']  ?>"> <?php echo $cata['ten_dm'] ?></a></li>

                        <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
                <!--sibar-top--->
                <div id="sibar-bot">
                    <div class="section-hear">
                        <h2>Bộ lọc</h2>
                    </div>
                    <form action="" method="post">
                        <table>
                            <thead>
                                <tr>
                                    <td colspan="2"> price</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="radio" name="r-price" id=""></td>
                                    <td>dươi 500.000đ</td>
                                </tr>


                                <tr>
                                    <td><input type="radio" name="r-price" id=""></td>
                                    <td>500.000đ - 1.000.000đ</td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="r-price" id=""></td>
                                    <td> 1.000.000đ-5.000.000đ</td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="r-price" id=""></td>
                                    <td>5.000.000đ - 10.000.000đ</td>
                                </tr>

                                <tr>
                                    <td><input type="radio" name="r-price" id=""></td>
                                    <td>trên 10.000.000đ</td>
                                </tr>

                            </tbody>
                        </table>
                    </form>

                </div>
            </div>
            <!--sibarde <?php// echo $info_cat['cat_title']  ?>-->

            <div id="content">
                <div id="hear-content">

                    <div class="wp-filter fl-right">
                        
                       
                    </div>



                </div>
                <!--hear-content-->
                <div id="wp-list-content">
                    <div class="list-product-wp">
                        <ul class="row no-gutters" id="list_ajax">
                            <?php
                            if (!empty($list_product)) {
                                foreach ($list_product as $item) {
                            ?>

                                    <li>
                                        <div class="card-2" style="width: 18rem;">
                                            <a href="?mod=product&act=deltal_product&id=<?php echo $item['id_sp']  ?>"><img src="public/img_product/<?php echo $item['anh_sp']  ?>" class="card-img-top" alt="..."></a>

                                            <div class="card-body2">
                                                <a href="?mod=product&act=deltal_product&id=<?php echo $item['id_sp']  ?>">
                                                    <p class="name-product"><?php echo $item['ten_sp']   ?></p>
                                                </a>
                                                <p class="price-product fl-left"><?php echo $item['gia_sp']   ?>đ</p>
                                                <p class="discount"><?php echo $item['giamgia_sp']   ?>đ</p>
                                            </div>
                                        </div>
                                    </li>
                            <?php
                                }
                            }
                            ?>


                        </ul>
                    </div>
                    <!---->
                    <div class="pagding wp-inner">
                        <?php

                        echo   get_pagding($num_page, $page, "?mod=product&act=product");
                        ?>
                    </div>
                </div>



            </div>
        </div>

    </div>

    </div>

    <?php
    get_footer();
    ?>
    
