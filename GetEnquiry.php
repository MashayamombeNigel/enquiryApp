<?php
include 'config.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<title>Get Enquiry</title>
</head>
<body>
	<div class="header">

		<ul>
			<li><a href="Home.php">Home</a></li>
			<li><a href="Enquire.php">Back to website</a></li>
		</ul>
	</div>
	<div >
	<form method="post">
		<input type="text" name="search" placeholder="input ">
		<button name="submit">Get Enquiry</button>
	</form>
	<div>
		<table>
			<?php
if(isset($_POST['submit'])){
	$search = $_POST['search'];
}
$sql = "SELECT * FROM enquiries  WHERE   Phone like '%$search%'  or  username like '%$search%' ";
$result =mysqli_query($con, $sql);
if($result){
	if(mysqli_num_rows($result)>0){
		echo '

		 <thead>
        <tr>
            <th>  </th>
            <th>Username</th>
            <th>Email</th>
            <th>Enquiry</th>
            <th>Response</th>          
        </tr>
    	</thead>' ;

   		while ($row =mysqli_fetch_assoc($result)) { 
  	 	echo'  <tbody>
        <tr>
           <td><a href="ResponsePage.php?data ='.$row['Enquiry_ID'].'">'.$row['Enquiry_ID'].'</a></td>
            <td>'.$row['username'].'</td>
            <td>'.$row['Email'].'</td>
            <td>'.$row['Phone'].'</td>
            <td>'.$row['Enquiry'].'</td>
            <td>'.$row['Response'].'</td>
        </tr>
    </tbody>' ;
     }

	}else{
       echo '
        <script type ="text/javascript">
        window.alert("Data does not Exist");  
       
    </script>';
	}
}

?>	
			
		</table>
	</div>
</div>
</body>
</html>