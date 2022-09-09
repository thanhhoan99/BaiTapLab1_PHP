<?php
session_start();
ob_start();
if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $ojbuser = array($user, $pass);
    echo var_dump($ojbuser);

    $_SESSION['ojbuser'] = $ojbuser;

    header('location: logined.php');

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">

        <form method="post" action="login.php">
            <input type="text" name="user" id="">
            <input type="password" name="pass" id="">
            <input type="submit" name="dangnhap" value="Dang Nhap" id="">
        </form>
    </div>

</body>
</html>