<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include_once('../controller/index.php');
?>
    <div class="padding">
        <div class="nd_chinh">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tbody>
                    <tr>
                        <td valign="top" width= "60%">
                            <div class="icon">
                                <a href="#">
                                    <div class = "i_con">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-globe2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M1.018 7.5h2.49c.037-1.07.189-2.087.437-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5zM3.05 3.049c.362.184.763.349 1.198.49.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05zM8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm-.5 1.077c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.473.257 2.282.287V1.077zm0 4.014c-.91-.03-1.783-.145-2.591-.332a12.344 12.344 0 0 0-.4 2.741H7.5V5.091zm1 2.409V5.091c.91-.03 1.783-.145 2.591-.332.223.827.364 1.754.4 2.741H8.5zm-1 1H4.51c.035.987.176 1.914.399 2.741A13.596 13.596 0 0 1 7.5 10.91V8.5zm1 2.409V8.5h2.99a12.343 12.343 0 0 1-.399 2.741A13.596 13.596 0 0 0 8.5 10.91zm-1 1c-.81.03-1.577.13-2.282.287.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91zm-2.173 2.563a6.695 6.695 0 0 1-.597-.933 8.857 8.857 0 0 1-.481-1.078 8.356 8.356 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.52zM2.38 12.175c.47-.258.995-.482 1.565-.667A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.964 6.964 0 0 0 1.362 3.675zm8.293 2.297a7.01 7.01 0 0 0 2.275-1.521 8.353 8.353 0 0 0-1.197-.49 8.859 8.859 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zm.11-2.276A12.63 12.63 0 0 0 8.5 11.91v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872zm1.272-.688c.57.185 1.095.409 1.565.667A6.964 6.964 0 0 0 14.982 8.5h-2.49a13.355 13.355 0 0 1-.437 3.008zm.437-4.008h2.49a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008zm-.74-3.96a8.854 8.854 0 0 0-.482-1.079 6.692 6.692 0 0 0-.597-.933c.857.355 1.63.875 2.275 1.521a8.368 8.368 0 0 1-1.197.49zm-.97.264c-.705.157-1.473.257-2.282.287V1.077c.67.204 1.335.82 1.887 1.855.143.268.276.56.395.872z"/>
                                        </svg>
                                        <p>Vào website</p>
                                    </div>
                                </a>

                                <a href="product.php?ctrl=product&act=addnew">
                                    <div class="i_con">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
                                            <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
                                            <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M7.5 10a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-2z"/>
                                        </svg>
                                        <p>Thêm sản phẩm</p>
                                    </div>
                                </a>

                                <a href="#">
                                    <div class="i_con">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                            <path fill-rule="evenodd" d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                        <p>Bài viết</p>
                                    </div>
                                </a>

                                <a href="feedback.php">
                                    <div class="i_con">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-open-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z"/>
                                        </svg>
                                        <p>Phản hồi</p>
                                    </div>
                                </a>

                                <a href="#">
                                    <div class="i_con">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
                                        </svg>
                                        <p>Hệ thống</p>
                                    </div>
                                </a>

                                <a href="customer.php">
                                    <div class="i_con">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                        </svg>
                                        <p>Thành viên</p>
                                    </div>
                                </a>

                                <a href="#">
                                    <div class="i_con">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                            <path d="M10.648 7.646a.5.5 0 0 1 .577-.093L15.002 9.5V13h-14v-1l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z"/>
                                            <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                        </svg>
                                        <p>Gallery</p>
                                    </div>
                                </a>

                                <a href="#">
                                    <div class="i_con">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 5a.5.5 0 0 0-1 0v4.793L5.354 7.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 9.793V5z"/>
                                        </svg>
                                        <p>Backup</p>
                                    </div>
                                </a>
                            </div>    
                        </td>
                        <td valign="top"> 
                            <table class="img_customer">
                                <div class="tk">
                                    <center>
                                    <div class="login100-pic">
                                        <img src="../../public/images/customer2.jpg" alt="IMG">
                                        <div class="glow-wrap">
                                            <i class="glow"></i>
                                        </div>
                                    </div>
                                    <div class="tt_tk">
                                        <?php 
                                        echo'<p>TÀI KHOẢN CỦA BẠN: '.$_SESSION['admin'].'</p>';
                                        ?>
                                    </div>
                                    <div class="btn_quantri">
                                        <div class="button_logout">
                                            <a href="quantri.php?ctrl=quantri&act=logout" class="btn btn-outline-danger">ĐĂNG XUẤT</a>
                                        </div>
                                        <div class="button_pass">
                                             <a href="change_pass.php" class="btn btn-outline-success">ĐỔI PASS</a>
                                        </div>
                                        </div>
                                    </center>
                                </div>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>