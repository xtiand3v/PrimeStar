<?php
include ('connection.php');
ob_start();
$client_id = mysqli_real_escape_string($conn,$_POST['client_id']);
$company_name = mysqli_real_escape_string($conn,$_POST['company_name']);
$listing_link = mysqli_real_escape_string($conn,$_POST['listing_link']);
$company_type = mysqli_real_escape_string($conn,$_POST['company_type']);
$listing_platform = mysqli_real_escape_string($conn,$_POST['listing_platform']);
$sql = "SELECT * from client_business where company_name = '$company_name' AND client_id = '$client_id'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if(mysqli_num_rows($result) >= 1){
    ?>
    <script>
        window.location.href = "../home.php?s=company-duplicate";
    </script>
    <?php
}
else {
    $insert = mysqli_query($conn,"INSERT into client_business(client_id,company_name,listing_links,company_type,listing_platform,status,company_added) VALUES ('$client_id','$company_name','$listing_link','$company_name','$listing_platform','1',NOW())");
    if($insert){
        ?>
        <script>
            window.location.href = "../home.php?s=company-added";
        </script>
        <?php
    } else {
        ?>
        <script>
            window.location.href = "../home.php?s=company-failed";
        </script>
        <?php
    }
}
?>