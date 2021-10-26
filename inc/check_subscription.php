<?php
include ('connection.php');
$email = $_SESSION['email'];
$sql = "SELECT * from client_subscription where client_email = '$email'";
$result = mysqli_query($conn,$sql);
    $getSub = mysqli_fetch_array($result);
    $subscriptionStatus = $getSub['subscription_status'];
    $subscriptionID = $getSub['subscription_id'];
    if($subscriptionID == "1"){
        $subscriptionName = "Lite Plan";
    } elseif($subscriptionID == "2"){
        $subscriptionName = "Pro Plan";
    } elseif($subscriptionID == "3"){
        $subscriptionName = "Premium Plan";
    } else {
        $subscriptionName = "No Plan";
    }
?>