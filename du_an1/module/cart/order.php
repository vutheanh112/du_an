<?php

get_header();
?>


<div id="wp-content-main">
    <div id="section-hear">
        <div class="wp-inner">
        
        </div>
    </div>
    <div id="wrapper-main" class="wp-inner clearfix">
        <div class="section" id="info-cart-wp">
            <div class="section-detail table-responsive">
                <form action="?mod=cart&act=update_cart" method="post">
                    <?php
                    $list_buy =  get_list_buy_cart();
                    if (!empty($list_buy)) {
                    ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Mã sản phẩm</td>
                                    <td>Ảnh sản phẩm</td>
                                    <td>Tên sản phẩm</td>
                                    <td>Giá sản phẩm</td>
                                    <td>Số lượng</td>
                                    <td colspan="2">Thành tiền</td>
                                </tr>
                            </thead>
                            <tbody>


                                <?php
                                foreach ($list_buy as $item) {
                                ?>
                                    <tr>
                                        <td>HCA00031</td>
                                        <td>
                                            <a href="" title="" class="thumb">
                                                <img src="public/img_product/<?php echo $item['image']  ?>" alt="">
                                            </a>
                                        </td>
                                        <td>
                                            <a href="" title="" class="name-product"><?php echo $item['product_title']  ?></a>
                                        </td>
                                        <td><?php echo currency_format($item['price'])  ?></td>
                                        <td>
                                            <input type="number" min=1 max="10" name="qty[<?php echo $item['id']   ?>]" value="<?php echo $item['qty']  ?>" class="num-order">
                                        </td>
                                        <td><?php echo currency_format($item['sup_total'])  ?></td>
                                        <td>
                                            <a href="<?php echo $item['url_dele_cart']   ?>" title="" class="del-product"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>


                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">

                                            <p id="total-price" class="fl-right">Tổng giá: <span><?php echo currency_format(get_total_cart())  ?></span></p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7">
                                        <div class="clearfix">
                                            <div class="fl-right">
                                                <input type="submit" id="update-cart" name="btn_update_cart" value="cập nhật giỏ hàng">

                                                <a href="?mod=product&act=payment" title="" id="checkout-cart">Thanh toán</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>

                    <?php
                    } else {
                    ?>
                        <p>không có sản phẩm nào trong giỏ hàng</p>
                    <?php
                    }
                    ?>


                </form>

            </div>
        </div>
        <div class="section" id="action-cart-wp">
            <div class="section-detail">
                <p class="title">Click vào <span>“Cập nhật giỏ hàng”</span> để cập nhật số lượng. Nhập vào số lượng <span>0</span> để xóa sản phẩm khỏi giỏ hàng. Nhấn vào thanh toán để hoàn tất mua hàng.</p>
                <a class=" buy-more fl-left" href="?mod=home&act=home" title="" id="">Mua tiếp</a>
                <a class="delete-cart" href="?mod=cart&act=delete_all" title="" id="">Xóa giỏ hàng</a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>