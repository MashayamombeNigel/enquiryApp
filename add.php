<?php
	include('config.php');
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$name = $_POST['username'];
	$email = $_POST['Email'];
	$contact = $_POST['Phone'];
	$enquiry = $_POST['Enquiry'];
		
	mysqli_query($conn,"insert into `enquiries` (username, Email, Phone, Enquiry) values ('$name', '$email', '$contact', '$enquiry')");
	header('location:Home.php');
	
?>