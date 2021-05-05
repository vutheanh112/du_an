<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/Style4.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!--===============================================================================================-->
</head>
<body>
<?php
    if(!isset($_SESSION['admin'])){
        header('location: login.php');
    }
?>
    <div class="padding">
        <div class="nd_chinh">
            <div class="wrapper">
                <nav class="menu">
                    <ul class="clearfix">
                        <div class="img_logo">
                            <img src="../../public/images/logo.png" style="width: 50px; margin-left: 11px; margin-top: 3px; float: left;">
                        </div>
                        <li id = "1"><a href="quantri.php">Trang Chủ</a></li>
                        <li id = "2"><a href="catalog.php">Danh Mục</a>
                            <ul class="sub-menu">
                                <li><a href="catalog.php?ctrl=catalog&act=addnew">Thêm Danh Mục</a></li>
                            </ul>
                        <li id="3"><a href="product.php">Sản Phẩm</a>
                            <ul class="sub-menu">
                                <li><a href="product.php?ctrl=product&act=addnew">Thêm Sản Phẩm</a></li>
                            </ul>
                        <li id="4"><a href="cart.php">Đơn Hàng</a></li>
                        <li id="5"><a href="customer.php">Khách Hàng</a>
                            <ul class="sub-menu">
                                <li><a href="customer.php?ctrl=customer&act=addnew">Thêm Khách Hàng</a></li>
                            </ul>
                        </li>
                        <li id="6"><a href="comment.php">Bình Luận</a></li>
                        <li id="7"><a href="thongke.php">Thống Kê Hàng Hóa</a></li>
                        <li><a href="#">Bài Viết</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <script>
    $(function(){
        // Ajax cho tìm kiếm
        // $('#search').keyup(function(){
        //     var txt = $('#search').val();
        //     $.post('ajax.php', {data: txt}, function(data){
        //         $('.list_ajax').html(data);
        //     })
        // });
        
        // Thông báo khi xóa
        $('.checkDelete').click(function(e){
            var href = $(this).attr('href');
            e.preventDefault();
            Swal.fire({
                title: "Bạn Chắc Chứ",
                text: "Bạn Không Thể Khôi Phục Lại",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#41b0b3",
                cancelButtonColor: "#d33",
                confirmButtonText: "Có, Tôi Xóa Nó!",
                cancelButtonText: "Thoát",
            }).then((result) => {
                if(result.isConfirmed){
                        window.location.href = href;
                }
            })
        });
    })
</script>
</body>
</html>