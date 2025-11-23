<?php
  session_start();

  $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
  $isUserLogin = isset($user) ? true : false;

    if ($isUserLogin) {

    include_once 'headerlogin.php';
} else {
  
    include_once 'unauthenticated-header.php'; 
   
}
?>


