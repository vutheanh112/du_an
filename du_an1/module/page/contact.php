<?php

get_header();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Trang Liên Hệ | Contact</title>


    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Font awesome -->
    <link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="public/css2/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="public/css2/slick.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="public/css2/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="public/css2/theme-color/default-theme.css" rel="stylesheet">
    <!-- Main style sheet -->
    <link href="public/css2/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>

  </head>
  <body>
  
  
 
 <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
          
          <div class="mu-title">
            <h2>Liên hệ với chúng tôi</h2>
            
          </div>
          
          <div class="mu-contact-content">           
            <div class="row">
              <div class="col-md-6">
                <div class="mu-contact-left">
                <?php
                $DBH = new PDO('mysql:host=localhost;dbname=laptop1', 'root', '');
               
                if (isset($_POST['submit'])) {
                    $name = $_POST['fullname'];
                    $email = $_POST['email'];
                    $subject =$_POST['subject'];
                    $deltal = $_POST['comment'];
                    $dates = date('y-m-d h:i:s');
                    $sql = "insert into feetback(name,	email,subject,deltal,ngayfeetback	)values('$name','$email' , '$subject','$deltal','$dates')";
                    $result = $DBH->exec($sql);
                }
                ?>
                <form action="" method="post" class="contactform">
                                 
                    <p class="comment-form-author">
                      <label for="author">Tên <span class="required">*</span></label>
                      <input type="text" required="required" size="30" value="" name="fullname">
                    </p>
                    <p class="comment-form-email">
                      <label for="email">Email <span class="required">*</span></label>
                      <input type="email" required="required" aria-required="true" value="" name="email">
                    </p>
                    <p class="comment-form-url">
                      <label for="subject">Danh mục bạn quan tâm</label>
                      <input type="text" name="subject">  
                    </p>
                    <p class="comment-form-comment">
                      <label for="comment">Lời nhắn</label>
                      <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                    </p>                
                    <p class="form-submit">
                      <input type="submit" value="Send Message" class="mu-post-btn" name="submit">
                    </p>        
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-contact-right">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.455226329226!2d106.62735611472675!3d10.852939092269658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529b6a2b351a5%3A0x11690ada8c36f9bc!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIFRo4buxYyBow6BuaCBGUFQgUG9seXRlY2huaWMgVFAuSENNIChDUzMp!5e0!3m2!1svi!2s!4v1605647774997!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
              </div>
            </div>
          </div>
          
         </div>
       </div>
     </div>
   </div>
 </section>
 
 

  
   <footer id="mu-footer">
    
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Thông tin FiveMan</h4>
                <ul>
                  <li><a href="#">Thông tin liên hệ</a></li>
                  <li><a href="#">Hệ thống showroom</a></li>
                  <li><a href="#">Hỏi đáp</a></li>
                  <li><a href="#">Tin công nghệ</a></li>
                  <li><a href="#">Tuyển dụng</a></li>
                  <li><a href="#">Chi nhánh</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Chính sách</h4>
                <ul>
                  <li><a href="#">Chính sách Đổi trả</a></li>
                  <li><a href="#">Chính sách Bảo mật</a></li>
                  <li><a href="#">Chính sách Bảo hành</a></li>
                  <li><a href="#">Chính sách Vận chuyển</a></li>
                  <li><a href="#">Chính sách lắp đặt</a></li>       
                  <li><a href="#">Chính sách trả góp</a></li>              
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Đăng ký nhận thông tin</h4>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Nhập Email của bạn vào đây">
                  <button class="mu-subscribe-btn" type="submit">Hoàn tất!</button>
                </form>               
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Liên lạc</h4>
                <address>
                  <p>Tầng 11 Minh Long Tower, số 17 Bà Huyện Thanh Quan, Phường 6, Quận 3, TP. Hồ Chí Minh</p>
                  <p>Phone: (415) 453-1568 </p>
                  <p>Website: fb.com/hoanghaminh01</p>
                  <p>Email: hoanghmps13667@fpt.edu.vn</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; Designed by Hoàng Hà <a href="http://www.fb.com/hoanghaminh01" rel="nofollow"> aka Black Tear</a></p>
        </div>
      </div>
    </div>
   
  </footer>
  





    <!-- jQuery library -->
    <script src="puclic/js2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="puclic/js2/bootstrap.js"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="puclic/js2/slick.js"></script>
    <!-- Counter -->
    <script type="text/javascript" src="puclic/js2/waypoints.js"></script>
    <script type="text/javascript" src="puclic/js2/jquery.counterup.js"></script>
    <!-- Mixit slider -->
    <script type="text/javascript" src="puclic/js2/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="puclic/js2/jquery.fancybox.pack.js"></script>


    <!-- Custom js -->
    <script src="puclic/js2/custom.js"></script>

  </body>
</html>