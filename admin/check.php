<?php
session_start();
include ('../inc/connection.php');
ob_start();
$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = md5(mysqli_real_escape_string($conn,$_POST['password']));
$sql = "SELECT COUNT(*)from admin where admin_username = '$username' and admin_password = '$password'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row[0]>0){
$_SESSION['username'] = $username;
echo "success";
}
else {
    echo "<code>Incorrect credentials. Please try again.</code>";
}
?>