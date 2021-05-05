<?php
    function getConnection(){
        // khai bao sever
        $host='localhost';
        $dbname='laptop1';
        $username='root';
        $password='';
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        //tao doi tuong thuoc lop PDO
        $dbh=new PDO('mysql:host='.$host.';
            dbname='.$dbname,$username,$password,$options);
        return $dbh;
    }

    function query($sql)
    {
        $connect=getConnection();
        $result=$connect->query($sql);
        return $result;
    }

    function queryOne($sql)
    {
        $connect=getConnection();
        $result=$connect->query($sql);
        $row=$result->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    function queryOneCount($sql)
    {
        $connect=getConnection();
        $result=$connect->query($sql);
        $row=$result->fetch();
        return $row;
    }

    function queryRows($sql)
    {
        $connect=getConnection();
        $number_of_rows = $connect->query($sql)->fetchColumn();  
        return $number_of_rows;
    }
    function execute($sql)
    {
        $connect=getConnection();
        $result=$connect->exec($sql);
        return $result;
    }
?>