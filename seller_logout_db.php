<?php 
session_start();
unset($_SESSION['sellername']);
unset($_SESSION['seller_id']);
session_destroy();
header("location:index.php");
mysqli_close($db);
?>