<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('location:login1.php');
};


?>