<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<script>
        $(document).on('click','#2',function(e){
            $(this).addClass('list');
    })
</script>
<?php
    include_once '../model/feetback.php';
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location: login.php');
    }
        $act='index';
        if(isset($_GET['act'])){
            $act=$_GET['act'];
        }
        $messge='';
        switch ($act){
            case 'index':
                $feetbacks=getAllFeetback();
                include '../view/feetback/feetback.php';
                break;
                
            case 'delete':
                $id=$_GET['id'];
                deleteFeetback($id);
                header('location:feedback.php');
                break;
        }

?>
</body>
</html>