<?php
include ('connection.php');
$email = $_SESSION['email'];
$sql = "SELECT * from client_subscription where client_email = '$email'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 0){
    echo "<script> window.location.href = 'subscription.php'</script>";
} else {
    $getSub = mysqli_fetch_array($result);
    $subscriptionStatus = $getSub['subscription_status'];
    $subscriptionID = $getSub['subscription_id'];
    if($subscriptionID == "1"){
        $subscriptionName = "Lite Plan Subscription";
    } elseif($subscriptionID == "2"){
        $subscriptionName = "Pro Plan Subscription";
    } elseif($subscriptionID == "3"){
        $subscriptionName = "Premium Plan Subscription";
    } else {
        $subscriptionName = "No Plan Subscription";
    }
}
?>