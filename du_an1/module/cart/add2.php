
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <title>Document</title>
    <style>
        body {
           
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <?php
        $id = (int)$_GET['id'];
        $result= add_cart($id);
        if ($result) {
            echo '<script type="text/javascript">
	          swal({
	            title: "Success!",
	            text: "Ban đã sua thành công.",
	            type: "success",
	            timer: 5000,
	            showConfirmButton: true
	            }, function(){
	            window.location.href = "?mod=product&act=deltal_product&id='.$id.'";
	            });
	          </script>';
        } else {
            echo '<script type="text/javascript">
	          swal({
	            title: "Success!",
	            text: " thêm  thành công",
	            type: "success",
	            timer: 5000,
	            showConfirmButton: true
	            }, function(){
	            window.location.href = "?mod=product&act=deltal_product&id='.$id.'";
	            });
	          </script>';
        }
    

    // exec() : thuc thi cau lenh da cho
    // fetch() :Tìm nạp một hàng từ tập kết quả được liên kết với đối tượng PDOStatement. Tham số fetch_style xác định cách PDO trả về hàng. asssoc-> co gia tri tra ve hang , BOUND => khong co gia tri tra ve o input
    // query() : Thực hiện một truy vấn đối với cơ sở dữ liệu.
    ?>

</body>

</html>