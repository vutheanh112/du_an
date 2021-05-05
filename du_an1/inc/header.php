<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/global.css">
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="public/style.css" rel="stylesheet" type="text/css" />
    <script src="public/js/slider2.js"></script>
    <script src="public/js/jquery.easing.1.3.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js "> </script>


    <style>
        body {
            font-size: 16px;
            font-family: 'Noto Serif';
            line-height: 23px;
        }
    </style>
    <title>Document</title>
</head>

<body>

    <div id="wp_header" class="">

        <div id="container-head" class="row">

            <div id="contact" class="col-md-7">
                <div class="list-contact row">
                    <p class="phone-cskh "><i class="fa fa-phone" aria-hidden="true"></i> CSKH+001-234-5 67</p>
                    <p class="phone-advisory"> Tư vấn mua hàng:1800 6865 </p>
                </div>

            </div> <!-- end-contact -->
            <div id="user">
                <ul class="menu_user row">
                    <li>
                       <p class="list-user"><a href="module/index.php">welcome to five man </a> </p>
                    </li>
                    <li>
                        <p class="list-user"> <a href="?mod=page&act=news">tin công nghệ</a> </p>
                    </li>
                    <li>
                        <p> <a href="?mod=page&act=info">giới thiệu</a> </p>
                    </li>
                </ul>
            </div>
            <!--end user -->


        </div> <!-- end container-hear -->

        <div id="container-body" class="clearfix">
            <div class="wp-inner">
                <!--- menu end logo -->

                <!--logo&search -->
                <a href="?mod=home&act=home" id="logo" class="fl-left col-md-3"> <img src="public/image/logo.png" alt=""></a>
                <script>
                    $(document).ready(function() {
                        $('#search').keyup(function() {
                            $.ajax({
                                url: 'http://localhost/5manduan1/?mod=product&act=ajax&data='+$('#search').val() ,
                                success: function(data) {
                                    $('#list_ajax').html(data);
                                },
                                type: 'get'
                            });
                        })
                    })
                </script>
                <div class="search-wp fl-left" col-md-7>

                    <input type="text" name="s" id="search" placeholder="Nhập từ khóa tìm kiếm tại đây!">
                    <button type="submit" id="sm-s"><i class="fa fa-search" aria-hidden="true"></i></button>


                </div>

                <!--icon--->
                <div id="info" class="col-md-4  row">
                    <div class="information ">
                        <a href="?mod=page&act=contact"> <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            <p class="list-infomation">liên hệ</p>
                        </a>



                    </div>
                    <div class="order">
                        <a href="?mod=cart&act=order">
                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                            <p class="list-order">đơn hàng</p>
                        </a>

                    </div>
                    <div class="user">
                        <a href="https://phongvu.vn/khuyen-mai">
                        <i class="fa fa-gavel" aria-hidden="true"></i>
                            <p class="list_user"> khuyến mãi</p>
                        </a>

                    </div>
                    <div id="cart-wp">
                        <a href="?mod=cart&act=order">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            <p class="list_cart">giỏ hàng</p>
                            <?php
                            $num_order = get_num_order_cart();
                            if ($num_order > 0) {
                            ?>
                                <span class="number"><?php echo $num_order  ?></span>
                            <?php
                            }

                            ?>

                        </a>
                        <div id="dropdown">


                            <ul class="list-cart">
                                <?php
                                $list_buy = get_list_buy_cart();
                                if (!empty($list_buy)) {

                                    foreach ($list_buy as $item) {
                                ?>
                                        <li class="clearfix">
                                            <a href="" title="" class="thumb fl-left">
                                                <img src="public/img_product/<?php echo $item['image']  ?>" alt="">
                                            </a>
                                            <div class="info fl-right">
                                                <a href="" title="" class="product-name"><?php echo $item['product_title']  ?></a>
                                                <p class="price"><?php echo currency_format($item['sup_total'])  ?></p>
                                                <p class="qty">Số lượng: <span><?php echo $item['qty']  ?></span></p>
                                            </div>
                                        </li>
                                <?php
                                    }
                                }
                                ?>

                            </ul>
                            <div class="total-price clearfix">
                                <p class="title fl-left">Tổng:</p>
                                <p class="price fl-right"><?php echo currency_format(get_total_cart())  ?></p>
                            </div>
                            <dic class="action-cart clearfix">
                                <a href="?mod=cart&act=order" title="Giỏ hàng" class="view-cart fl-left">Giỏ hàng</a>
                                <a href="?mod=product&act=payment" title="Thanh toán" class="checkout fl-right">Thanh toán</a>
                            </dic>
                        </div>

                    </div>
                </div>




            </div>
            <!---icon--->
        </div>
    </div>