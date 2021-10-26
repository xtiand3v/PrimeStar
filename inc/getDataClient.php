<?php
include ('connection.php');
$email = $_SESSION['email'];
$sql = "SELECT * from clients where client_email = '$email'";
$result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_array($result);
    $user_name = $user['client_fullname'];
    $email = $user['client_email'];
    $contact = $user['client_contact'];
    $address = $user['client_address'];
    $client_id = $user['client_id'];
?>