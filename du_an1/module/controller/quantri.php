<?php
$act='index';
session_start();
if(isset($_GET['act'])){
    $act=$_GET['act'];
}
switch ($act){
    case 'index':
        include '../view/quantri.php';
    break;
    case 'logout':
        unset($_SESSION['admin']);
        header('location: login.php');
    break;
}
?>
<script>
    $(function(){
            $('#1').addClass('list');
    });
</script>