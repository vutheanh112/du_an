<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng Nhập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div id="clock"></div>
    <div class="limiter">
        <a href="../home/home.php" class = "btn btn-outline-info" style = "margin: 5px 5px;"><h4>Quay lại trang web</h4></a>
        <div class="container-login100">
            <div class="wrap-login100" style="padding: 200px 120px 60px 85px;">
                <div class="login100-pic js-tilt" data-tilt>
                      <img src="../../public/images/Customer-Supprt.png" alt="IMG">
                </div>

                <form method="post" action="login.php?ctrl=login&act=btn" onsubmit="return validate()">
                    <span class="login100-form-title">
                        ĐĂNG NHẬP QUẢN TRỊ WEBSITE
                    </span>

                    <div class="wrap-input100 validate-input"
                        data-validate="Bạn cần nhập đúng thông tin như: ex@fe.edu.vn">
                        <input class="input100" type="text" placeholder="Tài Khoản" name="username" id="username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password không được bỏ trống!">
                        <input class="input100" type="password" placeholder="Mật Khẩu" name="current-password"
                            id="password-field">
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <input type="submit" value="Đăng Nhập" name="btnDangNhap"/>
                    </div>
                </form>

                <div class="text_quenmk" style = "padding-top: 10px; padding-left: 30px;">
                    <div class="text-center p-t-12"  style="margin-bottom: -15px;">
                        <span class="txt1">
                            Bạn quên mật khẩu?
                        </span>
                        <a class="txt2" href="forgot_pass.php">
                            Tài khoản / mật khẩu?
                        </a>
                    </div>
                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Bạn muốn đăng ký tài khoản?
                        </span>
                        <a class="txt2" href="dangky.php">
                            Đăng ký
                        </a>
                    </div>
                </div>
                <div class="text-center p-t-135">
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
        var username = document.getElementById("username").value;
        var password = document.getElementById("password-field").value;

        //Nếu không nhập gì mà nhấn đăng nhập thì sẽ báo lỗi
        if (username == "" && password == "") {
            Swal.fire("Bạn Chưa Nhập Thông Tin!", "Vui Lòng Kiểm Tra Lại", "warning");
            return false;
        }
        //Nếu không nhập tài khoản sẽ báo lỗi
        if (username == null || username == "") {
            Swal.fire("Bạn Chưa Nhập Tài Khoản", "Vui Lòng Kiểm Tra Tài Khoản", "error");
            return false;
        }
        //Nếu không nhập mật khẩu sẽ báo lỗi
        if (password == null || password == "") {
            Swal.fire("Bạn Chưa Nhập Mật Khẩu", "Vui Lòng Kiểm Tra Mật Khẩu", "error");
            return false;
        }
        //Nếu mật khẩu dưới 8 ký tự
        if (password.length < 8) {
            Swal.fire("Bạn Nhập Chưa Đủ Mật Khẩu", "Mật Khẩu Phải Đủ 8 Ký Tự Bao Gồm Chữ Và Số", "error");
            return false;
        }
    }

    //show/hide pass
    $(".toggle-password").click(function () {
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
