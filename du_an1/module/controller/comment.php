<?php
    session_start();
    include_once '../model/comment.php';
    if(!isset($_SESSION['admin'])){
        header('location: login.php');
    }

    $act='index';
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }

    switch ($act){
        case 'index':
            $items = thong_ke_binh_luan();
            include '../view/comment/index.php';
            break;

        case 'detail':
            $id=$_GET['id'];
            $items = chi_tiet_binh_luan($id);
            include '../view/comment/detail.php';
            break;
            
        case 'delete':
            $id=$_GET['id'];
            deleteComment($id);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            break;
    }
?>
<script>
    $(function(){
            $('#6').addClass('list');
    });
</script>