<?php
include ('connection.php');
$email = $_SESSION['email'];
$sql = "SELECT * from clients where client_email = '$email'";
$result = mysqli_query($conn,$sql);
$user = mysqli_fetch_array($result);
$client_id = $user['client_id'];
$orderss = "SELECT * from orders where client_id = '$client_id'";
$order = mysqli_query($conn,$orderss);
    $order = mysqli_fetch_array($order);
    $order_platform = $order['platform'];
    $order_amount = $order['order_amount'];
    $payment_method = $order['payment_method'];
    $order_status = $order['order_status'];
    $order_added = $order['order_added'];
    $status1 = mysqli_query($conn,"SELECT * from orders where client_id = '$client_id' AND order_status = 'Active'");
    $active = mysqli_num_rows($status1);
    $status2 = mysqli_query($conn,"SELECT * from orders where client_id = '$client_id' AND order_status = 'Completed'");
    $completed = mysqli_num_rows($status2);
?>