<?php
if($_POST){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(($username == 'admin') && ($password == '123456')){
        header("location: product.php");
        exit(0);
    }else{
        echo "<script>alert('ທ່ານປ້ອນຂໍ້ມູນ username ຫຼື password ບໍ່ຖືກຕ້ອງ')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="font/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>ໜ້າຫຼັກ</title>
</head>
<body>
   <?php 
   include "layout/top.php";
   ?> 
    <div class="container-fluid">
        <div class="row">
           <div class="col-3"><?php include "./layout/sidebar_font.php"; ?></div>
           <div class="col-6">sidebar</div>
           <div class="col-3">sidebar</div>
        </div>
    </div>
</body>
</html>