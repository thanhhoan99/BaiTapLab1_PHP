<?php
session_start();
  if (isset($_POST['dathang']) && ($_POST['dathang'])) ;
    $img =$_POST['img'];
    $tensp =$_POST['tensp'];
    $gia=$_POST['gia'];
    $id =$_POST['id'];
    $sl=1;
    $sp=array($id,$img,$tensp,$gia,$sl);
if(!isset($_SESSION['cart']))  $_SESSION['cart']=array();
    array_push($_SESSION['cart'] ,$sp);
    header('location: viewcart.php');

?>