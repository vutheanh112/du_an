<?php

get_header();
?>

<form method="post" action="?mod=product&act=xl_dathang" name="form-checkout">

    <div id="main-content-wp" class="checkout-page">
        <div class="section" id="breadcrumb-wp">
            <div class="wp-inner">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <a href="?page=home" title="">Trang chủ</a>
                        </li>
                        <li>
                            <a href="" title="">Thanh toán</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="wrapper-main" class="wp-inner clearfix">
            <div class="section" id="customer-info-wp">
                <div class="section-head">
                    <h1 class="section-title">Thông tin khách hàng</h1>
                </div>
                <div class="section-detail">

                    <div class="form-row clearfix">
                        <div class="form-col fl-left">
                            <label for="fullname">Họ tên</label>
                            <input type="text" name="fullname" id="fullname">
                          
                        </div>
                        <div class="form-col fl-right">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                      
                        </div>
                    </div>
                    <div class="form-row clearfix">
                        <div class="form-col fl-left">
                            <label for="address">Địa chỉ</label>
                            <input type="text" name="address" id="address">
                         
                        </div>
                        <div class="form-col fl-right">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" name="phone" id="phone">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="notes">Ghi chú</label>
                            <textarea name="note"></textarea>
                        </div>
                    </div>


                </div>
            </div>
            <div class="section" id="order-review-wp">
                <div class="section-head">
                    <h1 class="section-title">Thông tin đơn hàng</h1>
                </div>
                <div class="section-detail">
                    <table class="shop-table">
                        <thead>
                            <tr>

                                <td>Sản phẩm</td>
                                <td>Tổng</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $list_buy = get_list_buy_cart();
                            if (!empty($list_buy)) {
                                foreach ($list_buy as $item) {
                            ?>
                                    <tr class="cart-item">
                                        <td class="product-name"><?php echo $item['product_title']  ?><strong class="product-quantity">x<?php echo $item['qty']  ?></strong></td>
                                        <td class="product-total"><?php echo currency_format($item['sup_total'])  ?></td>
                                    </tr>

                            <?php
                                }
                            }

                            ?>
                            <td colspan="7">
                                <div class="clearfix">
                                    <p class="name_gia">tổng giá</p>

                                    <p id="total-price" class="fl-right"><span><?php echo currency_format(get_total_cart())  ?></span></p>
                                </div>
                            </td>


                            </tfoot>

                    </table>
                    <div id="payment-checkout-wp">

                    </div>

                </div>
            </div>
            <div class="place-order-wp clearfix">
                <input type="submit" id="order-now" name="btn_thanhtoan" value="Đặt hàng">
            </div>

        </div>
    </div>

</form>



<?php
get_footer();
?>