<?php
include "myfunc.php";
session_start();
if (isset($_SESSION['cart'])){

    showcart($_SESSION['cart']);
    // echo var_dump($_SESSION['cart']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="boxcenter">
        <h2>Don hang cua ban</h2>
        <table style="border-collapse: collapse;">
            <tr>
                <th>STT</th>
                <th>Hinh</th>
                <th>Ten sp</th>
                <th>Don gia</th>
                <th>so luong</th>
                <th>thanh tien</th>
                <th>xoa</th>


            </tr>
            <?php
             echo showcart($_SESSION['cart']);
              ?>
        </table>
        <p><a href="sanpham.php">Tiep tuc dat hamg</a></p>
        <p><a href="delcart.php">Xoa taon bo don hang</a></p>
    </div>

</body>
</html>
<?php

}else {
  echo "ban chua dat hang ban<a>dat hang</a> lai";  # code...
 }
?>