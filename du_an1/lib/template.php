<?php
function get_header(){
    
    $path_hearder ="inc/header.php";
    if(file_exists($path_hearder))
    require $path_hearder;
    else{
        echo "không tồn tại đường dẫn {$path_hearder}";
    }
}
function get_hearder_login(){
    
    $path_hearder_login ="inc/header_login.php";
    if(file_exists($path_hearder_login))
    require $path_hearder_login;
    else{
        echo "không tồn tại đường dẫn {$path_hearder_login}";
    }
}
function get_footer(){
    $path_footer ="inc/footer.php";
    if(file_exists($path_footer))
    require $path_footer;
    else{
        echo "không tồn tại đường dẫn {$path_footer}";
    }
}


?>