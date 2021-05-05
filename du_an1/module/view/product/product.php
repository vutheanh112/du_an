<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="http://d3js.org/d3.v2.min.js?2.10.0"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
<?php
    include_once ('../controller/index.php');
?>
<center>
    <div class="search" style="width: 55%; padding: 20px 0px 30px 10px; display: inline-flex;">
        <form>
            <div class= "form-group-select">
                <div class= "title_select">
                    <select class="form-control " onchange="location = this.value;" style = "width: 90%;">
                            <option>Chọn</option>
                            <?php
                                    include_once('../model/catalog.php');
                                    $listCatalog=getAllCatalog();
                                    foreach ($listCatalog as $cataLog){
                                        echo '<option value="product.php?ctrl=product&act=select&id='.$cataLog['id_dm'].'">'.$cataLog['ten_dm'].'</option>';
                                    }
                            ?>
                            <option value="product.php">Tất Cả Sản Phẩm</option>
                    </select>
                </div>
            </div>
        </form>

            <div class="search-box">
                <form class="search-form" action="product.php?ctrl=product&act=timkiem" method = "post" enctype="multipart/form-data">
                    <input class="form-control" name = "tukhoa" id="search" placeholder="Mời bạn nhập tìm kiếm" type="text" style="width: 90%"> 
                    <button class="btn btn-link search-btn"> 
                        <i class="fas fa-search"></i> 
                    </button> 
                </form>
            </div>
    </div>

</center>
<form action="product.php?ctrl=product&act=deleteAll" method = "post" enctype="multipart/form-data" style="width: 100%;">
    <div class="btn_xoaAll">
       <button type="submit" class = "btn btn-outline-danger" name="btn_delete">Xóa</button>
    </div>
    <table class = "table table-hover">
        <thead class = "thead">
            <tr>
                <th><input type="checkbox" id="checkAll"> All </th>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Sửa / Xóa</th>

            </tr>
        </thead>
        <tbody class="list_ajax">
            <?php
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
            ?>
        </tbody>
    </table>
</form>

<div class="phantrang">
    <ul class="pagination pagination-sm">
        <?php
            // trang đầu
            if(!isset($_GET['act'])){
                if($current_page > 3){
                    $first_page = 1;
                        echo '
                            <li class="page-item"><a class="page-link" style = "color: black; "href="product.php?ctrl=product&per_page='.$item_per_page.'&page='.$first_page.'">Trang Đầu</a></li>
                        ';
                }
                
                //quay lại
                if($current_page > 1){
                    $prev_page = $current_page - 1;
                        echo '
                            <li class="page-item"><a class="page-link" style = "color: black;" href="product.php?ctrl=product&per_page='.$item_per_page.'&page='.$prev_page.'">Quay Lại</a></li>
                        ';
                }
            
                // di chuyển theo bấm só bth
                for($num = 1; $num <= $totalPages; $num++){
                    if($num != $current_page){
                        if($num > $current_page - 3 & $num < $current_page + 3){
                            echo '
                                <li class="page-item"><a class="page-link" style = "color: black;" href="product.php?ctrl=product&per_page='.$item_per_page.'&page='.$num.'">'.$num.'</a></li>
                            ';
                        }
                    }else{
                        echo'<li class="page-item"><a style = "background-color: #41b0b3; color: white;" class="page-link" href="product.php?ctrl=product&per_page='.$item_per_page.'&page='.$num.'">'.$num.'</a></li>';
                    }
                }
    
                // tiếp tục
                if($current_page < $totalPages){
                    $next_page = $current_page + 1;
                        echo '
                            <li class="page-item"><a class="page-link" style = "color: black; "href="product.php?ctrl=product&per_page='.$item_per_page.'&page='.$next_page.'">Tiếp Tục</a></li>
                        ';
                }
    
                // trang cuối
                if($current_page < $totalPages - 2){
                    $end_page = $totalPages;
                        echo '
                            <li class="page-item"><a class="page-link" style = "color: black;" href="product.php?ctrl=product&per_page='.$item_per_page.'&page='.$end_page.'">Trang Cuối</a></li>
                        ';
                }
            }
        ?>
    </ul>
</div>

    <script>
        $("#checkAll").click(function(){
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>
</body>
</html>