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
    <title>ໜ້າຫຼັກ</title>
</head>
<body class="bg-dark">
   <?php 
   include "layout/top.php";
   ?> 
    <div class="container">
        <div class="row">
           <h1 class="text-danger">Hello World</h1>
        </div>
    </div>
</body>
</html>