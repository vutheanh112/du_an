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
<?php
    include_once '../model/catalog.php';
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
                $selectAll=false;
                $catalog=getAllCatalog();
                include '../view/catalog/catalog.php';
                break;

            case 'addnew':
                include '../view/catalog/addnew.php';
                break;

            case 'insert':
                $stt=$_POST['stt'];
                $name=$_POST['name'];
                addNewCatalog($name,$stt);
                    echo'
                    <script>
                    Swal.fire({
                        title: "Chúc Mừng, Bạn Đã Thêm Thành Công",
                        text: "Thông Tin Đã Được Thêm",
                        icon: "success"
                    }).then((result) => {
                            window.location.href = "catalog.php";
                        })
                    
                    </script>';
                break;

            case 'edit':
                $id=$_GET['id'];
                $cata=getCatalogByID($id);
                include '../view/catalog/edit.php';
                break;

            case 'update':
                $id=$_POST['id'];
                $name=$_POST['name'];
                $stt=$_POST['stt'];
                updateCatalog($id,$name,$stt);
                echo'
                <script>
                    Swal.fire({
                        title: "Chúc Mừng, Bạn Đã Sửa Thành Công",
                        text: "Thông Tin Đã Được Sửa",
                        icon: "success"
                    }).then((result) => {
                            window.location.href = "catalog.php";
                    })
                </script>
                ';
                break;
                
            case 'delete':
                $id=$_GET['id'];
                deleteCatalog($id);
                header('location:catalog.php');
                break;
        }

?>
<script>
    $(function(){
            $('#2').addClass('list');
    });
</script>
</body>
</html>