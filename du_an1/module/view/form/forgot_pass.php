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
        <a href="#" class = "btn btn-outline-info" style = "margin: 5px 5px;"><h4>Quay lại trang web</h4></a>
        <div class="container-login100">
            <div class="wrap-login100"  style="padding: 200px 120px 60px 85px;">
                <div class="login100-pic js-tilt" data-tilt>
                      <img src="../../public/images/Customer-Supprt.png" alt="IMG">
                </div>

                <form method="post" action="forgot_pass.php?ctrl=forgot_pass&act=forgot_pass" onsubmit="return validate()">
                    <span class="login100-form-title">
                        LẤY LẠI MẬT KHẨU ĐĂNG NHẬP
                    </span>
                    
                    <div class="wrap-input100 validate-input"
                        data-validate="Bạn cần nhập đúng thông tin như: ex@fe.edu.vn">
                        <input class="input100" type="email" placeholder="Email" name="email" id="email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                    <div class="container-login100-form-btn">
                        <input type="submit" value="Gửi Yêu Cầu" name="btnDangNhap"/>
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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
    <!--===============================================================================================-->
    <script src="../../public/vendor/tilt/tilt.jquery.min.js"></script> <!Hiệu ứng ảnh admin>
   <script>
       $('.js-tilt').tilt({
           scale:1.1
       })
   </script>
   <script type="text/javascript">
    function validate() {
        var email = document.getElementById("email").value;

        //Nếu không nhập mật khẩu sẽ báo lỗi
        if (email == null || email == "") {
            Swal.fire("Bạn Chưa Nhập Email", "Vui Lòng Kiểm Tra Lại", "error");
            return false;
        }
    }
    </script> 
</body>

</html>
<!--THANK FOR WATCHING <3-->
