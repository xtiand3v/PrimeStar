<?php
session_start();
include('../inc/connection.php');

if (isset($_POST['id'])) {
	$id = $_POST['id'];


	$stmt = mysqli_query($conn,"SELECT * FROM clients WHERE client_id='$id'");
	$row = mysqli_fetch_array($stmt);


	echo json_encode($row);
}
?>