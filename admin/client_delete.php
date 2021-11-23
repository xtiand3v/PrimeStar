<?php
session_start();
ob_start();
include('../inc/connection.php');

	if(isset($_POST['deleteCustomer'])){
		$id = $_POST['id'];
		
            $stmt = mysqli_query($conn,"DELETE FROM clients WHERE client_id='$id'");
            if($stmt){
			$_SESSION['success'] = 'Client deleted successfully';
            header('location: clients.php?s=deleted');
            } else {
            header('location: clients.php?s=faildelete');
            }
	}

	
?>