<?php
include ('inc/connection.php');
ob_start();

$password = md5('admin');

    $insert = mysqli_query($conn,"INSERT into admin(admin_name,admin_email,admin_username,admin_password,admin_added) VALUES ('Administrator','admin@gmail.com','admin','$password',NOW())");
    if($insert){
        echo "success";
    } else {
        echo "failed";
    }
?>