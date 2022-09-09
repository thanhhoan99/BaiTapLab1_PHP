<?php

  session_start();
  ob_start();
  if(isset($_SESSION['ojbuser']) ){

    unset($_SESSION['ojbuser']);
    header('Location: login.php');
  }


?>