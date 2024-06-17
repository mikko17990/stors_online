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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../font/main.css">
    <title>ໜ້າຫຼັກ</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="card-title">
                            <h2 class="text-center fw-bold">Form LogIn</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">UserName</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">PassWord</label>
                            <input type="password" name="password" class="form-control">
                        </div> 
                        <div>
                            <input type="submit" value="LogIn" class="btn btn-outline-info">
                        </div>   
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>
</html>