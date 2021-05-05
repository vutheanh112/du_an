<?php
get_header();
?>
    <!---end header--->
    <div id="nav">

        <div id="slider">
            <img class="slider" src="public/image/5.jpg" stt="0" alt="">
            <img class="slider" src="public/image/3.jpg" stt="1" alt="" style="display: none;">
            <img class="slider" src="public/image/Untitled-2.jpg" stt="2" alt="" style="display: none;">
            <a href="#" id="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            <a href="#" id="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            <ul>
                <li class="active">1</li>
                <li>2</li>
                <li>3</li>

            </ul>

        </div>
    </div>
    <!--nav-->

    <div id="wp_content">
        <div class="wp-inner">
            <div id="main-nav" class="row no-gutters">
                <div class="main-1">
                    <img src="public/image/khung.png" alt="">
                    <div class="list-nav">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                        <div class="title-nav">
                            <p>Miễn phí ship</p> <br> <span>tối thiểu 200$</span>
                        </div>

                    </div>
                </div>
                <div class="main-1">
                    <img src="public/image/khung2.png" alt="">
                    <div class="list-nav">
                        <i class="fa fa-hourglass" aria-hidden="true"></i>
                        <div class="title-nav">
                            <p>30 ngày bảo hành</p> <br> <span>hoàn trả tiền</span>
                        </div>
                    </div>
                </div>
                <div class="main-1">
                    <img src="public/image/khung3.png" alt="">
                    <div class="list-nav">
                        <i class="fa fa-gear" aria-hidden="true"></i>
                        <div class="title-nav">
                            <a href="">
                                <p>nhân viên hỗ trợ 14/7</p> <br> <span>hỗ trợ nhiệt tình</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!--main-nav--->

            <div id="feature-product-wp" class="wp-inner">
                <div class="section-head">
                    <h3> hiệu nổi bật</h3>
                </div>
                <div id="wp-pro-Highlights">
                    <div id="pro-Highlights-left">
                        <div class="feature-product-left-top">
                            <img src="public/image/6.png" alt="">
                            <div class="bag-opacty"></div>
                            <div class="title"> laptop</div>
                            <div class="list-show">
                                <a href="?mod=product&act=product&cat_id=1">show now</a>
                            </div>
                        </div>
                        <div class="feature-product-left-top">
                            <img src="public/image/2b.jpg" alt="">
                            <div class="bag-opacty"></div>
                            <div class="title"> thiết bị văn phòng</div>
                            <div class="list-show">
                                <a href="?mod=product&act=product&cat_id=4">show now</a>
                            </div>
                        </div>
                    </div>
                    <div id="wp-pro-Highlights-mid">
                        <div class="Highlights-mid">
                            <img src="public/image/4.jpg" alt="">

                        </div>
                    </div>
                    <div id="pro-Highlights-left">
                        <div class="feature-product-left-top">
                            <img src="public/image/6.jpg" alt="">
                            <div class="bag-opacty"></div>
                            <div class="title"> máy tính pc</div>
                            <div class="list-show">
                                <a href="?mod=product&act=product&cat_id=2">show now</a>
                            </div>
                        </div>
                        <div class="feature-product-left-top">
                            <img src="public/image/7.jpg" alt="">
                            <div class="bag-opacty"></div>
                            <div class="title"> phụ kiện </div>
                            <div class="list-show">
                                <a href="?mod=product&act=product&cat_id=3">show now</a>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
            <!---feature-product-wp----->
            <div id="list-product-wp" class="wp-inner">
                <div class="section-head">
                    <h3>dành cho bạn </h3>


                </div>
                <div class="product-top">
                    <ul class="list-product row no-gutters" id="list_ajax">
                        <?php
                        $list_product = get_list_product();
                        if (!empty($list_product)) {
                            foreach ($list_product as $item) {
                        ?>

                                <li>
                                    <div class="card" style="width: 18rem;">
                                        <a href=" ?mod=product&act=deltal_product&id=<?php echo $item['id_sp']?>"><img src="public/img_product/<?php echo $item['anh_sp']  ?>" class="card-img-top" alt="..."></a>

                                        <div class="card-body">
                                            <a href=" ?mod=product&act=deltal_product&id= <?php echo $item['id_sp']?>" class="name-product">
                                                <p><?php echo $item['ten_sp']   ?></p>
                                            </a>
                                            <p class="price-product fl-left"><?php echo currency_format($item['gia_sp'])  ?></p>
                                            <p class="discount"><?php echo currency_format($item['giamgia_sp'])  ?></p>
                                        </div>
                                    </div>
                                </li>
                        <?php
                            }
                        }
                        ?>

                    </ul>


                </div>
                <!----product-top---->


            </div>
            <!----product-top---->


        </div>
        <div class="pagding wp-inner">
            <?php
            //get_pagding ($num_page ,$page , "?mod=home&controller=index");

            ?>

        </div>
        <!--pagding-->
        <!---list-product-wp--->
        <div id="trademark-product">
            <div class="section-head">
                <h3>thương hiệu nổi tiếng</h3>
            </div>
            <div class="list-trademark">
                <ul class="row no-gutters">
                    <li><a href=""><img src="public/image/Layer 16.png" alt=""></a></li>
                    <li><a href=""><img src="public/image/Layer 10.png" alt=""></a></li>
                    <li><a href=""><img src="public/image/Layer 9.png" alt=""></a></li>
                    <li><a href=""><img src="public/image/Layer 8.png" alt=""></a></li>
                    <li><a href=""><img src="public/image/Layer 7.png" alt=""></a></li>
                    <li><a href=""><img src="public/image/Layer 6.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <!--trademark-product--->
    </div>
    <div id="wp-evaluate">
        <div class="section-head">
            <h3>đánh giá</h3>
        </div>
        <div class="list-evaluate">

            <div class="wp-evaluate-one ">
                <div class="evaluate-left"> <img src="public/image/Layer 15.png" alt="">
                    <div class="wp-title">
                        <p class="title-evaluate">Không có gì phải buồn hết em,
                            mình có thực lực thua mới buồn
                            còn không có thực lực thì làm sao
                            phải buồn</p>
                        <p class="name">Nguyen Tran Tuong Vu</p>
                        <p class="title-industry"> CEO QG</p>
                    </div>
                </div>


            </div>
            <div class="evaluate-two  ">
                <div class="evaluate-right">
                    <img src="public/image/Layer 14.png" alt="">
                    <div class="wp-title">
                        <p class="title-evaluate">So với những người bạn,
                            tôi chỉ hơn họ ở ánh hào quang.
                            Chứ thực ra, tôi cũng chỉ như
                            mọi người mà thôi.</p>
                        <p class="name">Lee Sang-hyeok</p>
                        <p class="title-industry"> CEO T1</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
    <!--content--->


    <?php
    get_footer();
    ?>