<?php
include ('../inc/connection.php');
ob_start();
$first_name = mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
$company_name = mysqli_real_escape_string($conn,$_POST['company_name']);
$address = mysqli_real_escape_string($conn,$_POST['address']);
$phone_number = mysqli_real_escape_string($conn,$_POST['phone_number']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = md5(mysqli_real_escape_string($conn,$_POST['password']));
$subscription = mysqli_real_escape_string($conn,$_POST['subscription']);
if($subscription == "1"){
    $limit = "10";
} elseif($subscription == "2"){
    $limit = "20";
} elseif($subscription == "3"){
    $limit = "35";
} else {
    $limit = "0";
}
$sql = "SELECT * from clients where client_email = '$email'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if(mysqli_num_rows($result) >= 1){
    echo "duplicate";
}
else {
    $insert = mysqli_query($conn,"INSERT into clients(client_firstname,client_lastname,client_company,client_contact,client_email,client_address,client_password,client_added) VALUES ('$first_name','$last_name','$company_name','$phone_number','$email','$address','$password',NOW())");
    if($insert){
        mysqli_query($conn,"INSERT into client_subscription(client_email,subscription_id,subscription_status,payment_status,review_limit,remarks,subscription_added) VALUES ('$email','$subscription','Trial','Unpaid','$limit','',NOW())");
        echo "success";
    } else {
        echo "failed";
    }
}
?>