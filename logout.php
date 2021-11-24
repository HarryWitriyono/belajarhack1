<?php if(!isset($_SESSION)) session_start();
 unset($_SESSION['login']);
 session_destroy($_SESSION['login']);
 echo "<script>window.location.href='index.php';</script>";
?>