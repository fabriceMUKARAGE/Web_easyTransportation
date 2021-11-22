<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="firstpage.css">
    
    <title>Easy Transportation</title>
  </head>
  <body>

    <!-- Navbar with bootstrap -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark mt-5">
            <div class="container-fluid">
              <a class="navbar-brand fw-bold" href="#"><img src="logo1.png" alt="web logo" width="50" height="50" ></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                  <li class="nav-item">
                    <a href="#about" class="nav-link active" aria-current="page">About Us</a>
                  </li>

                  <li class="nav-item">
                    <a href="#Contact" class="nav-link active" aria-current="page">Contact</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="OurServices.php">Services</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">log in</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="loginD.php">log in as driver</a></li>
                      <li><a class="dropdown-item" href="loginS.php">log in as student</a></li>
                      
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sign up</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="signupD.php">Sign up as driver</a></li>
                      <li><a class="dropdown-item" href="signupS.php">Sign up as student</a></li>
                      
                    </ul>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
    </div>

    <!-- another div part -->
    <div class="container-fluid custom-container mt-5">
        <div class="container pt-5 pb-5">
            <h1 class="fw-bold">Fast Transport to Accra. </h1>
            <p class="fs-5 mb-0 text-white-50">Movement is what we do.</p>
        </div>
    </div>


  <!--Information for about us -->
  <div id="about" class="image">
      <h>
        about us <br><br>
        Easy transportation is a web based app designed for the Ashesi students to help them with the transportation from school to Accra. <br>
        Easy transportation's mission is to help Ashesi students with their movements from school to any part of Accra and back. <br><br>
        This web app will be free to use as long as you have internet connection and it is for Ashesi students only, <br>
         it is not applicable for other people. Help you can't find a tax?  <br><br>
         
        contact us on +2335478787 <br><br>
        
        Is driver adding on an extra money? let us on via this email fabrice.Mukarage1@gmail.com <br>
      </h>  
  </div>

  <!-- image for driver -->
  <div class="image">
      <img src="assets/driver.jpg" alt="Girl in a jacket" width="50%" height="50%">
  </div>


  <!-- footer part-->
  <div  id="Contact">
    <footer>

    <h1>Contact Us <br><br></h1>
    <div class="footerDetails">
      <div class="foot1">
        <h2><span>Our Address</span></h2>
        <p>1 University Avenue,</p>
        <p>Berekuso</p>
      </div>

      <div class="foot1">
        <h2><span>Email & Phone</span></h2>
        <p>+233 245627336</p>
        <p>Student.webapp@ashesi.edu.gh</p>
      </div>

      <div class="foot1">
            <h1><input type="subs" type="Subscribe" name="" placeholder="Your Email address">
              <a href="#"><button class="btn">Subscribe</button></a></h1>
        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
        <a href="#"><ion-icon name="logo-youtube"></ion-icon></a>
        <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
        <a href="#"><ion-icon name="logo-medium"></ion-icon></a>
      </div>

    </div>

    <div class="footerDetails">
      <div class="foot2">
      <img src="logo1.png" alt="Footer Logo" width="100" height="100"/>
      </div>
      <div class="foot2">
        <p>© Ashesi University Students Web App.  All rights reserved.</p>
      </div>

    </div>

  </footer>
</div>
	
	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->


  </body>
  
</html>