<?php
session_start();
include ('inc/connection.php');
ob_start();
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = md5(mysqli_real_escape_string($conn,$_POST['password']));
$sql = "SELECT COUNT(*)from clients where client_email = '$email' and client_password = '$password'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row[0]>0){
$_SESSION['email'] = $email;
echo "success";
}
else {
    echo "<code>Incorrect credentials. Please try again.</code>";
}
?>