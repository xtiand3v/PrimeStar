<?php
include ('inc/connection.php');
ob_start();
$fullname = mysqli_real_escape_string($conn,$_POST['full_name']);
$country = mysqli_real_escape_string($conn,$_POST['country']);
$post_code = mysqli_real_escape_string($conn,$_POST['zip_code']);
$phone_number = mysqli_real_escape_string($conn,$_POST['phone_number']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = md5(mysqli_real_escape_string($conn,$_POST['password']));
$sql = "SELECT * from clients where client_email = '$email'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if(mysqli_num_rows($result) >= 1){
    echo "duplicate";
}
else {
    $insert = mysqli_query($conn,"INSERT into clients(client_fullname,client_contact,client_email,client_address,client_street,client_country,client_postcode,client_password,client_added) VALUES ('$fullname','$phone_number','$email','','','$country','$post_code','$password',NOW())");
    if($insert){
        mysqli_query($conn,"INSERT into client_subscription(client_email,subscription_id,subscription_status,payment_status,review_limit,remarks,subscription_added) VALUES ('$email','','Trial','Unpaid','3','',NOW())");
        echo "success";
    } else {
        echo "failed";
    }
}
?>