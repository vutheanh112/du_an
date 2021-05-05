<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<?php
    include_once '../model/product.php';
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
            $item_per_page= !empty($_GET['per_page'])?$_GET['per_page']:7; //số sản phẩm trong 1 trang
            $current_page =  !empty($_GET['page'])?$_GET['page']:1; // xác định trang hiện tại
            $offset = ($current_page - 1) * $item_per_page; 

            $rowsRecord=rowsRecord();
            $totalPages = ceil($rowsRecord / $item_per_page); //tính số trang

            $products=getAllProduct($item_per_page,$offset);
            include '../view/product/product.php';
        break;
            
        case 'timkiem':
            $textSearch = addslashes($_POST['tukhoa']);
            $products = getProductBySearch($textSearch);
            $num=$products->rowCount();
            if(empty($textSearch)){
                header('Location: product.php');
            }
            else{
                include '../view/product/product.php';
                foreach ($products as $p){
                    echo'<tr>
                            <td><input name="checkbox[]" class="checkbox" type="checkbox" value="'.$p['id_sp'].'"></td>
                            <td>'.$p['id_sp'].'</td>
                            <td><img src = "../../public/img_product/'.$p['anh_sp'].'"width = "50px"></td>      
                            <td>'.$p['ten_sp'].'</td>
                            <td>'.$p['gia_sp'].'</td>
                            <td>
                                <a href="product.php?ctrl=product&act=edit&id='.$p['id_sp'].'"><button type="button" class="btn btn-outline-info">Sửa</button></a>
                                <a href="product.php?ctrl=product&act=delete&id='.$p['id_sp'].'" class="checkDelete"><button type="button" class="btn btn-outline-danger">Xóa</button></a>
                            </td>
                        </tr>';
                }
            }
        break;
        
        case 'addnew':
            include '../view/product/addnew.php';
        break;

        // Thêm sản phẩm
        case 'insert':
            $catalog_id=$_POST['cataPro'];
            $catalogbig_id=$_POST['cataBigPro'];
            $name=$_POST['namePro'];
            $price=$_POST['priPro'];

            // upload file ảnh chính
            $imgPro=''.$_FILES['imgPro']['name'].'';
            $path='../../public/img_product/'.$imgPro;
            move_uploaded_file($_FILES['imgPro']['tmp_name'],$path);

            //upload file ảnh mô tả
            $file_name=$_FILES['imgProList'];
            $imgProList=$file_name['name'];
            $array_ProList = implode(",", $imgProList);
            foreach ($imgProList as $key => $value) {
                move_uploaded_file($file_name['tmp_name'][$key],'../../public/img_product/'.$value);
            }
            addNewProduct($catalog_id,$catalogbig_id,$name,$price, $imgPro,$array_ProList);
            echo'
            <script>
            Swal.fire({
                title: "Chúc Mừng, Bạn Đã Thêm Thành Công",
                text: "Thông Tin Đã Được Thêm",
                icon: "success"
            }).then((result) => {
                    window.location.href = "product.php";
                })
            
            </script>';
        break;

        case 'edit':
            $id=$_GET['id'];
            $pro=getProductByID($id);
            include '../view/product/edit.php';
        break;

        // lọc dữ liệu sản phẩm theo id_dm
        case 'select':
            $id=$_GET['id'];
            $products=selectProductByID($id);
            include '../view/product/product.php';
        break;

        // Sửa sản phẩm
        case 'update':
            $id=$_POST['id'];
            $catalog_id=$_POST['cataPro'];
            $name=$_POST['namePro'];
            $price=$_POST['priPro'];

            $imgPro=$_FILES['imgPro']['name'];
            $file_name=$_FILES['imgProList'];
            $imgProList=$file_name['name'];

            if($imgPro != null){
                // upload file ảnh chính
                $path='../../public/img_product/'.$imgPro;
                move_uploaded_file($_FILES['imgPro']['tmp_name'],$path);

                //upload file ảnh mô tả
                $array_ProList = implode(",", $imgProList);
                foreach ($imgProList as $key => $value) {
                    move_uploaded_file($file_name['tmp_name'][$key],'../../public/img_product/'.$value);
                }
                updateImg($id,$imgPro,$array_ProList);
            }
            updateProduct($id,$catalog_id,$name,$price);

            echo'
            <script>
                Swal.fire({
                    title: "Chúc Mừng, Bạn Đã Sửa Thành Công",
                    text: "Thông Tin Đã Được Sửa",
                    icon: "success"
                }).then((result) => {
                        window.location.href = "product.php";
                })
            </script>
            ';
        break;

        case 'delete':  
            $id = $_GET['id'];
            deleteProduct($id);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
    
        case 'deleteAll':
            $checkbox = $_POST['checkbox'];
            foreach($checkbox as $id){
                deleteProductAll($id);
            }
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        break;
    }
?>
<script>
    $(function(){
            $('#3').addClass('list');
    });
</script>
</body>
</html>