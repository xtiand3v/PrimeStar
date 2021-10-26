<?php 
session_start();
ob_start();
if(isset($_SESSION['email'])){
    session_destroy();
    header("Location: ../login.php?s=logout");
}

?>