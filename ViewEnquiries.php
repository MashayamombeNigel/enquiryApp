<?php
session_start();
$uname=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main1.css">
    <title>View</title>
</head>
<body>
<div class="header">
		<ul>
			<li><a href="Home.php">Home</a></li>
			<li><a href="Main.php">Previous</a></li>
		</ul>

		<div class="user_info">
			Welcome <?php echo "$uname"; ?>
			<a href="logout.php">Logout</a>
	       </div>
	</div>
    <div >
        <h2>Enquiries</h2>
    </div>
    <div id="table">
    <table border="2">
    <thead>
        <tr>
            <th>ID </th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Enquiry</th>
            <th>Response</th>
            <th>Action</th>          
        </tr>
    	</thead>
        <tbody>
            <?php
          include ('config.php');
          $query=mysqli_query($conn,"select * from `enquiries`");
          while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $row['Enquiry_ID'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><?php echo $row['Phone'];?></td>
                <td><?php echo $row['Enquiry'];?></td>
                <td><?php echo $row['Response'];?></td>
                <td><a href="responsePage.php?id = <?php echo $row['Enquiry_ID']; ?>">Respond</a></td>
            </tr>
        <?php   
         }
            

          ?>

        </tbody>
    </table>
    </div> 
    <footer class="footer">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
      </footer>
      <script src="https://kit.fontawesome.com/c69fab0add.js" crossorigin="anonymous"></script> 
</body>
</html> 