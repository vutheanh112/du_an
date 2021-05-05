<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng Nhập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        if(!isset($_SESSION['admin'])){
            header('location: login.php');
        }
    ?>
    <div id="clock"></div>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100"  style="padding: 150px 120px 80px 100px;">
                <div class="login100-pic js-tilt" data-tilt>
                      <img src="../../public/images/Customer-Supprt.png" alt="IMG">
                </div>

                <form method="post" action="change_pass.php?ctrl=change_pass&act=btn_changepass" onsubmit="return validate()">
                    <span class="login100-form-title">
                        ĐỔI MẬT KHẨU ĐĂNG NHẬP
                    </span>
                    
                    <div class="wrap-input100 validate-input">

                        <input class="input100" type="text" name="username" id="username" readonly style ="background-color: darkgray;" value="<?php echo $_SESSION['admin'] ?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input"
                        data-validate="Bạn cần nhập đúng thông tin như: ex@fe.edu.vn">
                        <input class="input100" type="password" placeholder="Mật khẩu cũ" name="pass_old" id="password">
                        <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password1"></span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password không được bỏ trống!">
                        <input class="input100" type="password" placeholder="Mật khẩu mới" name="pass_new1" id="new_pass1">
                        <span toggle="#new_pass1" class="fa fa-fw fa-eye field-icon toggle-password2"></span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password không được bỏ trống!">
                        <input class="input100" type="password" placeholder="Nhập lại mật khẩu mới" name="pass_new2" id="new_pass2">
                        <span toggle="#new_pass2" class="fa fa-fw fa-eye field-icon toggle-password3"></span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <input type="submit" value="Đổi Mật Khẩu" name="btnDangNhap"/>
                    </div>
                </form>

                <div class="text-center p-t-12 text_hover" style="padding-top: 0px;">
                        <a class="txt2" href="quantri.php" style = "padding-left: 90px;">
                            QUAY LẠI TRANG CHỦ
                        </a>
                    </div>
                    <div class="text-center p-t-135" style="padding-top: 100px;">
                        <a class="txt2" href="#">
                            FIVE MAN <i class="fa fa-copyright" aria-hidden="true"></i> DESIGN BY KHANG
                        </a>
                    </div>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>  <!để xem mật khẩu>
    <!--===============================================================================================-->
    <script src="../../public/vendor/tilt/tilt.jquery.min.js"></script> <!Hiệu ứng ảnh admin>
   <script>
       $('.js-tilt').tilt({
           scale:1.1
       })
   </script>
   <script type="text/javascript">
    function validate() {
        var password = document.getElementById("password-field").value;
        var pass_new1 = document.getElementById("new_pass1").value;
        var pass_new2 = document.getElementById("new_pass2").value;

        //Nếu không nhập mật khẩu sẽ báo lỗi
        if (password == null || password == "") {
            Swal.fire("Bạn Chưa Nhập Mật Khẩu Cũ", "Vui Lòng Kiểm Tra Mật Khẩu", "error");
            return false;
        }
        if (pass_new1 == null || pass_new1 == "") {
            Swal.fire("Bạn Chưa Nhập Mật Khẩu Mới", "Vui Lòng Kiểm Tra Mật Khẩu", "error");
            return false;
        }
        if (pass_new2 == null || pass_new2 == "") {
            Swal.fire("Bạn Chưa Nhập Mật Khẩu Mới", "Vui Lòng Kiểm Tra Mật Khẩu", "error");
            return false;
        }
        //Nếu mật khẩu dưới 8 ký tự
        if (password.length < 9, pass_new1.length < 9, pass_new2.length < 9) {
            Swal.fire("Bạn Nhập Chưa Đủ Mật Khẩu", "Mật Khẩu Phải Đủ 9 Ký Tự Bao Gồm Chữ Và Số", "error");
            return false;
        }
                //Nếu mật khẩu dưới 8 ký tự
        if (pass_new1 != pass_new2){
            Swal.fire("Hai mật khẩu không giống nhau", "Vui Lòng Kiểm Tra Lại Mật Khẩu", "error");
            return false;
        }
    }
    //show/hide pass
    $(".toggle-password1").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $(".toggle-password2").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $(".toggle-password3").click(function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
    </script> 
</body>

</html>
<!--THANK FOR WATCHING <3-->
