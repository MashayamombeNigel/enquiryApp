<?php
	include('config.php');
	$id=$_GET['id'];
	
	$username = $_POST['username'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Enquiry = $_POST['Enquiry'];
    $response = $_POST['Response'];
    
	
	mysqli_query($conn,"update `enquiries` set username'='$username', Email='$Email' ,Phone='$Phone' ,Response='$response' ,Enquiry = '$Enquiry' where Enquiry_ID='$id'");
	echo'
	<script>
		window.alert("Response Recorded !!"); 
	</script>';
	header('location:ViewEnquiries.php');
?>