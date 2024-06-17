<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../font/main.css">
    <title>Product Form</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center fw-bold fst-italic text-success mt-3">ເພີ່ມຂໍ້ມູນສິນຄ້າ</h1>
       <hr class="mb-3">
        <div class="row">
            <div class="col-3">
            <?php include "../layout/sidebar.php";  ?>
            </div>
            <div class="col-6">
                <form action="saveproduct.php" method="post">
                    <div class="mb-3">
                        <label for="pro_name" class="form-label">ຊື່ສິນຄ້າ</label>
                        <input type="text" name="pro_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="detail" class="form-label">ລາຍລະອຽດສິນຄ້າ</label>
                        <input type="text" name="detail" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">ລາຄາສິນຄ້າ</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">ຈຳນວນສິນຄ້າ</label>
                        <input type="text" name="quantity" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="ບັນທຶກຂໍ້ມູນ" class="btn btn-success">
                        <input type="reset" value="ລຶບຂໍ້ມູນ" class="btn btn-danger">
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
        
    </div>
</body>
</html>