<!DOCTYPE html>
<html>
    <head>
       <meta lang="en">
       <meta name "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
       
        <title>
            Contact
        </title>
        
        <link REL = "STYLESHEET" TYPE = "text/css" HREF = "CONTACT.css">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
    </head>
    
    <body>
    
    <nav class="navbar navbar-expand-lg fixed-top navbarScroll">
        <div class="container">
           
            <a class="navbar-brand" href="#">MY BLOGS</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarResponsive">
               
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="HOME.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="SERVICES.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ABOUT.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="CONTACT.html">Contact</a>
                    </li>
                </ul>
                    
            </div>
        </div>
    </nav>
    
    
    <div id="container">
       
       <div id="mainContent">
	  
        <!-- Main Content -->
        
        <div class = "color">
        
        <h1 class = "example">--</h1>
        
        <h4 class = "demo">Join Us</h4>
         
         <center>
        <div>
            <img src="https://st2.depositphotos.com/1265075/7446/i/450/depositphotos_74468913-stock-photo-contact-us-icons-on-cubes.jpg" class = "image" alt="">
        </div>
         </center>
                
                <div class = "enjoy">
                    <p>For any help feel free to contact us..... </br>
            </br>          Join Us!!!
                    </p>   
                </div>
            
      <h2>Contact/Join</h2>
    <p>Click on the "Open" button to open the contact form.</p>
    
    <div class="openBtn">
      <button class="openButton" onclick="openForm()"><strong>Open</strong></button>
    </div>
    
    
    <div class="loginPopup">
     
      <div class="formPopup" id="popupForm">
      
      <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    $email = $_POST['email'];
	$number = $_POST['number'];
    $comment = $_POST['comment'];
}
	
$sql = "INSERT INTO contact_details (name, email, number, comment)
VALUES ('$name', '$email', '$number', $comment)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
       
        <form class="formContainer" action = "contact.php" method = "POST">
         
          <h2>Your details</h2>
              
            <div class = "form-group">
               <label for = "name">Your Name</label>
               <input type = "text" class = "form-control" name = "name" placeholder = "Your Name">
               </div>
               
               <div class = "form-group">
               
               <label for = "name">Your Email</label>
               <input type = "text" class = "form-control" name = "email" placeholder = "Your Email">
               </div>
               
               <div class = "form-group">
               
               <label for = "name">Contact No:</label>
               <input type = "text" class = "form-control" name = "number" placeholder = "Your Number">
               </div>
               
               <div class = "form-group">
               
               <label for = "name">Query/Comment</label>
               <input type = "text" class = "form-control" name = "comment" placeholder = "Your Comment">
               </div>
               
               <button type = "submit" class = "btn btn-primary">Submit</button>  
               <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
           </form>
           
           </div>
       </div> 
       
       <script type = "text/javaScript">
      
        function openForm() 
           {
           document.getElementById("popupForm").style.display = "block";
           }

        function closeForm() 
           {
            document.getElementById("popupForm").style.display = "none";
           }
      
        </script>
        
        <p style = "text-align: center">Thank you for reaching us.....</br>
                       Always there for you!!</p>
        
        </div> 
        
       <!-- Footer -->
       
       <footer class="page-footer font-small blue" style = "background-color: darkgray" >

  
       <div class="footer-copyright text-center py-3">Copyright 2022
       </div>

      </footer>
            <!--Footer-->
            
            </div>   <!--End #Main Content-->
        
    </div>     <!--End #Container-->
    
</body>
</html>