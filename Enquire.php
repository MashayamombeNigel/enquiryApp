<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/enquiryform.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="nav-items">
           <nav>
              <a href="#" class="logo">Mobile Planet</a>
            <button class="hamburger" id="hamburger">
            <h3>Menu</h3>
            </button>
            <ul class="nav-ul" id="nav-ul">
              <li><a href="Home.php" class="links">Home</a></li>
              <li><a href="About-Us.php" class="links">About</a></li>
              <li><a href="Catalog.php" class="links">Catalog</a></li>
              <li><a href="#" class="links">Enquire</a></li>
              <li><a href="index.php" class="links">Admin Login</a></li>
          </ul>
        </nav>
      </div>
    </header>
      <center>
        <h1 class="enquire">Enquiries</h1>
    </center>
      <div >
    
        <form action="add.php" method="POST">
            <fieldset>
            <label for="fname">Full name</label>
            <input type="text" id="fname" name="username" placeholder="Your Full Name" >
            <label for="email">Email Address</label>
            <input type="text" id="email" name="Email" placeholder="Your Email Address" >
            <label for="number">Number</label>
            <input type="text" id="number" name="Phone" placeholder="Your Phone number ">
            <label for="message">Message</label>
            <textarea rows="6" placeholder="Your Message" id="message" name="Enquiry" required></textarea>
            <button type="submit" id="submit" name="submit" value="insert">Send</button>
            
        </fieldset>  
        </form>
            <div id="error"></div>
            <div id="success-msg"></div>
            <hr><center><button  id="get_enquiry"><a href="GetEnquiry.php"><h4>View Enquiry</h4></a></button></center>
           
      </div>
       <footer class="footer">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <div class="copy"> &copy; Shrapnel Technologies 2022 <hr><br></div>
      </footer>
      <script src="https://kit.fontawesome.com/c69fab0add.js" crossorigin="anonymous"></script> 
    <script src="script.js"></script>
    
</body>
</html>