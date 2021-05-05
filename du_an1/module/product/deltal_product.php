<?php

get_header();


?>


<div id="container">
    <div class="noidung">
        <div class="nd_left">
            <?php
            $id = (int)$_GET['id'];
            $info_cart =   get_product($id);
            if (!empty($info_cart)) {
                foreach ($info_cart as $item) {
                    $listimage = explode(',', $item['anhlist_sp']);
            ?>
                    <div class="nd_sanpham">
                        <div class="image_toanbo">
                            <div class="image">
                                <div class="image_chinh" id="image_hover" style="background-image: url(public/img_product/<?php echo $item['anh_sp']  ?>);  height: 300px; width: 300px;"></div>
                            </div>
                            <div class="image_list">
                                <?php
                                $listimage = explode(',', $item['anhlist_sp']);
                                foreach ($listimage as $img) {
                                ?>
                                    <button class="list1"><img class="hover_image" src="public/img_product/<?php echo $img ?>" onmouseover="hover(this);" onmouseout="unhover(this);"></button>

                                <?php
                                }

                                ?>
                            </div>
                            <div class="phancach"></div>
                            <script>
                                function hover(hover_vao) {
                                    var src = hover_vao.getAttribute("src");
                                    document.getElementById('image_hover').style.backgroundImage = "url(" + src + ")";
                                }

                                function unhover(hover_vao) {
                                    var src = hover_vao.getAttribute("src");
                                    document.getElementById('image_hover').style.backgroundImage = "url(" + src + ")";
                                }
                            </script>
                        </div>
                        <div class="tt_sanpham">
                            <p><?php echo $item['ten_sp']  ?></p>
                            <div class="thuong_hieu">Thương hiệu
                                <a href="#">ACER</a>
                                <span>|</span>
                                SKU: 200400304
                            </div>
                            <span class="giatien"><?php echo currency_format($item['gia_sp'])  ?></span>
                            <div class="phancach"></div>
                            <div class="dathang">
                                <strong>Chọn thêm 1 trong những khuyến mãi sau</strong>
                                <div class="khuyenmai">
                                    <div class="gia">
                                        <p>Giá: <?php echo currency_format($item['giamgia_sp'])  ?></p>
                                        <span>Đã giảm thêm</span> <span class="discount">1.300.000đ</span>
                                    </div>
                                    <div class="dautich">
                                        <span>✓</span>
                                    </div>
                                </div>
                                <div class="btn">
                                    <button class="btn_muahang">
                                        <a href="?mod=cart&act=add&id=<?php echo $item['id_sp']  ?>"><strong>MUA NGAY</strong></a>
                                    </button>
                                    <button class="btn_themcart">
                                        <a href="?mod=cart&act=add2&id=<?php echo $item['id_sp']  ?>"><strong>THÊM VÀO GIỎ HÀNG</strong></a>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

            <?php
                }
            }
            ?>

        </div>


        <div class="nd_right">
            <div class="noidung_right">
                <div class="header_right">
                    <span><i class="fas fa-shipping-fast"></i></span>
                    <div class="nd">Sản phẩm được miễn phí giao hàng</div>
                </div>
                <div class="phancach1"></div>
                <div class="content">
                    <div class="content1">
                        <p>Chính sách bán hàng</p>
                        <div class="camket">
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                            <span>Cam kết chính háng 100%.</span>
                        </div>
                        <div class="ship">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            <span>Miễn phí giao hàng từ 500k.</span>
                        </div>
                        <div class="doitra">
                            <i class="fa fa-refresh" aria-hidden="true"></i>
                            <span>Đổi trả miễn phí trong 10 ngày.</span>
                        </div>
                    </div>
                    <div class="content2">
                        <p>Dịch vụ khác</p>
                        <div class="setting">
                            <i class="fa fa-gear" aria-hidden="true"></i>
                            <span>Sửa chữa đồng giá 150.000đ.</span>
                        </div>
                        <div class="vesinh">
                            <i class="fa fa-laptop" aria-hidden="true"></i>
                            <span>Vệ sinh máy tính, laptop.</span>
                        </div>
                        <div class="baohanh">
                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            <span>Bảo hành tại nhà</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="nd_right2">
            <?php echo $item['mota_sp']  ?>
        </div>


        <div class="mota_sp">
            <div class="mota_sanpham">
                <div class="duongke2"></div>
                <span>Mô tả sản phẩm</span>
            </div>
            <div class="content_mota">
                <div class="nd_mota">
                    <div class="image_mota">
                        <img src="public/image/01.jpg">
                    </div>
                    <div class="text_mota">
                        <span class="title_mota">Màn hình không giới hạn</span>
                        <p>
                            Laptop ASUS VivoBook 15 A512FA-EJ1281T với ngôn ngữ thiết kế NanoEdge trên cả 4 cạnh đem lại một màn hình gần như không viền, giúp tăng diện tích màn hình hiển thị lớn hơn trên khung máy. Bạn sẽ được trải nghiệm hình ảnh cực kỳ sống động đến choáng ngợp cho cả công việc và giải trí, xóa tan mọi giới hạn về năng lực, khơi nguồn cảm hứng cho bạn phá vỡ những ranh giới mới.
                        </p>
                    </div>
                </div>
                <div id="nd_mota_hide">
                    <div class="image_mota">
                        <img src="public/image/03.jpg">
                    </div>
                    <div class="text_mota">
                        <span class="title_mota">Kích thước nhỏ gọn hơn</span>
                        <p>
                            Kích thước được thu gọn xuống mức tối thiểu nhờ màn hình NanoEdge không viền trên bốn cạnh, ASUS VivoBook 15 A512FA-EJ1281T sở hữu một thân hình nhỏ gọn và thanh mảnh hơn đáng kể so với thế hệ tiền nhiệm trước đó. Do đó không gian bàn làm việc của bạn sẽ trở nên gọn gàng nhờ chiếc máy tính chiếm ít diện tích này, và bạn cũng có thể thoải mái mang xách theo người khi xê dịch.
                        </p>
                    </div>
                    <div class="image_mota">
                        <img src="public/image/02.jpg">
                    </div>
                    <div class="text_mota">
                        <span class="title_mota">Thoải mái thể hiện cá tính</span>
                        <p>
                            Laptop ASUS VivoBook 15 A512FA-EJ1281T đem đến nhiều phiên bản màu sắc trẻ trung được hoàn thiện để phù hợp với phong cách của bạn như: màu Bạc bóng bẩy và tinh tế, màu Xám tinh tế và trầm lắng hơn. Để khác biệt hơn bạn có thể chọn xu hướng mới với màu Xanh lông công có khả năng đổi màu sắc khi nhìn từ những góc độ khác nhau. Còn nếu bạn muốn tiên phong về phong cách, bạn có thể chọn màu Hồng san hô với lớp hoàn thiện tươi sáng.
                        </p>
                    </div>
                    <button class="btn_detail_mota" id="show" onclick="btnHide(),btnShow_btn()">
                        <span>Thu gọn nội dung</span>
        
        
                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <button class="btn_detail_mota" id="hide_show" onclick="btnShow(),btnHide_btn()">
                <span>Xem thêm nội dung</span>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </button>
        </div>
        <script>
            function btnShow() {
                var show = document.getElementById("nd_mota_hide");
                show.style.display = "block";
                var container = document.getElementById("container");
                container.style.height = "3400px";
            }

            function btnHide_btn() {
                var hide_btn = document.getElementById("hide_show");
                hide_btn.style.display = "none";
            }

            function btnShow_btn() {
                var hide_btn = document.getElementById("hide_show");
                hide_btn.style.display = "block";
            }

            function btnHide() {
                var show = document.getElementById("nd_mota_hide");
                show.style.display = "none";
                var container = document.getElementById("container");
                container.style.height = "2000px";
            }
        </script>


        <div class="sp_tuongtu">
            <div class="title_tuongtu">
                <div class="duongke2"></div>
                <p>Sản phẩm tương tự</p>
            </div>
            <div class="content_tuongtu">
                <div class="nd_tuongtu">
                    <ul>
                        <?php
                        $list_product = get_product_list();
                        if (!empty($list_product)) {
                            foreach ($list_product as $item) {
                                echo '     <li>
                                   <a href="?mod=product&act=deltal_product&id='.$item['id_sp'].'">
                                       <div class="productDetail">
                                           <div class="image_tuongtu">
                                               <img src="public/img_product/' . $item['anh_sp'] . '">
                                           </div>
                                           <div class="content_sp">
                                               <div class="product_text">
                                                   <span>' . $item['ten_sp'] . '</span>
                                               </div>
                                               <div class="product_price">
                                                   <span>' . currency_format($item['giamgia_sp']) . '</span>
                                               </div>
                                               <div class="bt_lienhe">
                                                   <button><span>LIÊN HỆ</span></button>
                                               </div>
                                           </div>
                                       </div>
                                   </a>
                               </li>';
                            }
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </div>
        <!-- phần bình luận -->
        <div class="binhluan">
            <div class="div_binhluan">
                <div class="title_comment">
                    <div class="duongke2"></div>
                    <span>Bình luận</span>
                </div>
                <?php
                $DBH = new PDO('mysql:host=localhost;dbname=laptop1', 'root', '');
                $id = (int)$_GET['id'];
                if (isset($_POST['btn_comment'])) {
                    $name = $_POST['name_kh'];
                    $deltal = $_POST['noidung'];
                    $id_sp = $id;
                    $dates = date('y-m-d h:i:s');
                    $sql = "insert into comment(name_kh,noidung,id_sp,ngaybl)values('$name','$deltal',$id,'$dates')";
                    $result = $DBH->exec($sql);
                }
                ?>
                <div class="form_binhluan">
                    <form  method="post">
                        <div class="form_text">
                            <input class="form-control text_name" name="name_kh" cols="0" rows="1" placeholder="họ tên người bình luận">
                            <textarea class="form-control" name="noidung" cols="5" rows="5" placeholder="Xin mời để lại câu hỏi, Five Man sẽ trả lời trong 1h từ 8h - 22h mỗi ngày."></textarea>
                        </div>
                        <div class="form_submit">
                            <div class="login_bl">
                                <a href="#">Đăng nhập để bình luận</a>
                            </div>
                            <div class="submit_bl">
                                <input type="submit" name="btn_comment" value=" gửi">

                            </div>
                        </div>
                    </form>

                </div>
                <div class="comment_wrap">
                    <ul class="listcomment">
                        <?php
                         $id = (int)$_GET['id'];
                        $list_comment = get_commen($id);
                        //show_array($list_comment);
                        if (!empty($list_comment)) {
                            foreach ($list_comment as $item) {
                        ?>
                                <li class="cmt_item">
                                    <div class="ten_kh">
                                        <div>N</div>
                                        <strong><?php echo $item ['name_kh']  ?></strong>
                                        <span>| <?php echo $item ['ngaybl']  ?></span>
                                    </div>
                                    <div class="question">
                                    <?php echo $item ['noidung']  ?>
                                    </div>
                                </li>

                        <?php
                            }
                        }
                        ?>
                     
                     
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>