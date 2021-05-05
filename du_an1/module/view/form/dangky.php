<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
</head>
    <body>
        <div id="clock"></div>
        <div class="limiter">
            <a href="#" class = "btn btn-outline-info" style = "margin: 5px 5px;"><h4>Quay lại trang web</h4></a>
            <div class="container-login100">
                <div class="wrap-login100" style="padding: 120px 120px 60px 85px;">
                    <div class="login100-pic js-tilt" data-tilt>
                          <img src="../../public/images/Customer-Supprt.png" alt="IMG">
                    </div>
    
                    <form method="post" action="dangky.php?ctrl=dangky&act=btn_dangky" onsubmit="return validate()">
                    <div class="form_dangky" style="width: 400px">
                        <span class="login100-form-title">
                            ĐĂNG KÝ QUẢN TRỊ WEBSITE
                        </span>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="Họ và tên" name="fullname" id="fullname">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="Tên đăng nhập" name="username" id="username">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input"
                            data-validate="Bạn cần nhập đúng thông tin như: ex@fe.edu.vn">
                            <input class="input100" type="email" placeholder="Email" name="email" id="email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope"></i>
                            </span>
                        </div>
    
                        <div class="wrap-input100 validate-input" data-validate="Password không được bỏ trống!">
                            <input class="input100" type="password" placeholder="Mật khẩu" name="current-password"
                                id="password-field">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                            <div class="container-login100-form-btn">
                                <input type="submit" value="Đăng Ký" name="btnDangNhap"/>
                            </div>
                    </div>
                        
                    </form>
                    <div class="text-center p-t-12">
                        <a class="txt2" href="login.php" style = "padding-left: 80px;">
                            Quay lại trang đăng nhập
                        </a>
                    </div>
                    <div class="p-t-135">
                        <a class="txt2" href="#">
                            FIVE MAN <i class="fa fa-copyright" aria-hidden="true"></i> DESIGN BY KHANG
                        </a>
                    </div>
                </div>
            </div>
        </div>
    
        <!--===============================================================================================-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
        <!--===============================================================================================-->
        <script src="../../public/vendor/tilt/tilt.jquery.min.js"></script>
       <script>
           $('.js-tilt').tilt({
               scale:1.1
           })
       </script>
       <script type="text/javascript">
        function validate() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password-field").value;
            var email = document.getElementById("email").value;
            var fullname = document.getElementById("fullname").value;
    
            //Nếu không nhập gì mà nhấn đăng nhập thì sẽ báo lỗi
            if (username == "" && password == "" && email == "" && fullname == "") {
                Swal.fire("Bạn Chưa Nhập Thông Tin!", "Vui Lòng Kiểm Tra Lại", "warning");
                return false;
            }
            //Nếu không nhập họ và tên sẽ báo lỗi
            if (fullname == null || fullname == "") {
                Swal.fire("Bạn Chưa Nhập Họ Và Tên", "Vui Lòng Kiểm Tra Họ Và Tên", "error");
                return false;
            }
            //Nếu không nhập tài khoản sẽ báo lỗi
            if (username == null || username == "") {
                Swal.fire("Bạn Chưa Nhập Tên Đăng Nhập", "Vui Lòng Kiểm Tra Tài Khoản", "error");
                return false;
            }
            // Nếu khogo nhập email sẽ báo lỗi
            if (email == null || email == "") {
                Swal.fire("Bạn Chưa Nhập Email", "Vui Lòng Kiểm Tra Email", "error");
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
        function myFunction(){
            var x = document.getElementById("myInput");
            if (x.type === "password"){
                x.type = "text"
            } else {
                x.type = "password";
            }
        }
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