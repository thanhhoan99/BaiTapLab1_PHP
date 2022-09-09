<?php

  session_start();
  ob_start();
  if(isset($_SESSION['ojbuser']) ){
    echo '<h2>Ban da dang nhap</h2>';
    echo '<h2>Tai Khoan :'.$_SESSION['ojbuser'][0].'</h2>';
    echo '<h2>Mat Khau :'.$_SESSION['ojbuser'][1].'</h2>';

    echo 'ban muon thoat. <a href="loginout.php">click</a>';


  }else{
    echo "dangg nhap lai. <a href='login.php'>Click</a>";
  }


?>