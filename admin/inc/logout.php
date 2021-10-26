<?php 
session_start();
ob_start();
if(isset($_SESSION['username'])){
    session_destroy();
    header("Location: ../index.php?s=logout");
}

?>