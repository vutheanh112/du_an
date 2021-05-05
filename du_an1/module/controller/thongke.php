<?php
    session_start();
    include_once '../model/thongke.php';
    if(!isset($_SESSION['admin'])){
        header('location: login.php');
    }

    $act='index';
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }

    switch ($act){
        case 'index':
            $items = thong_ke_gia_sp();
            include '../view/thongke/index.php';
        break;

        case 'da_ban':
            $items = thongkehanghoa();
            include '../view/thongke/da_ban.php';
            break;

        case 'banchay':
            $items = thongkebanchay();
            include '../view/thongke/da_ban.php';
        break;

        case 'bancham':
            $items = thongkebancham();
            include '../view/thongke/da_ban.php';
        break;

        case 'khongban':
            $items = thongkekhongban();
            include '../view/thongke/khongban.php';
        break;
        
        case 'bieudo':
            $items = thong_ke_gia_sp();
            include '../view/thongke/chart.php';
        break;
    }
?>
<script>
    $(function(){
            $('#7').addClass('list');
    });
</script>