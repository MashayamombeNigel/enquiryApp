<?php
	include('config.php');
	$id=$_GET['Enquiry_ID'];
	$query=mysqli_query($conn,"select * from `enquiries` where Enquiry_ID='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/main1.css">
<title>Response form</title>
</head>
<body>
<div class="header">
		<ul>
			<li><a href="Home.php">Home</a></li>
			<li><a href="ViewEnquiries.php">Previous</a></li>
		</ul>

		<div class="user_info">
			<a href="logout.php">Logout</a>
	       </div>
	</div>
    <h2>Response Form</h2>
    <form method="POST"  action="update.php?id=<?php echo $id; ?>" >
        <fieldset>

            Username : <br>
            <input type="text" name ="username" value="<?php echo $row['username']; ?> readonly">
            <input type="hidden" name="Enquiry_ID" value="<?php echo $row['Enquiry_ID']; ?>  readonly" >
            <br>   

            Email : <br>
            <input type="email" name ="Email" value="<?php echo  $row['Email']; ?> readonly">
            <br>

            Phone : <br>
            <input type="number" name ="Phone" value="<?php echo $row['Phone']; ?> readonly">
            <br>

            Enquiry: <br>
            <textarea rows="6" name="Enquiry" value="<?php echo $row['Enquiry']; ?>readonly" ></textarea>
            <br>

            Response: <br>
            <textarea rows="6" placeholder="Your Message" id="message" name="response" value="<?php echo $row['Response']; ?>"></textarea>
            <br>

            <input type="submit"  name="submit">
        </fieldset>
    </form>  
    <footer class="footer">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </footer>
    <script src="https://kit.fontawesome.com/c69fab0add.js" crossorigin="anonymous"></script> 
</body>
</html>
