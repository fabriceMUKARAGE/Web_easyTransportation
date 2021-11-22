<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="driverstyle.css">
    <title>Driver's sign up form</title>
</head>
<body>
    
    <!-- form for the sign up as a driver -->
    <div class="container" action>
        <form id="form" class="form" action="loginD.php" method="POST"> 
            <h2 sytle="color=white">Sign up as driver now</h2>
            <div class="form-control">
                <label for="firstname">First name</label>
                <input type="text" placeholder="First Name" id="firstname" name="firstname">
                <small id='firstnameError'></small>
            </div>
            <div class="form-control">
                <label for="lastname">Last name</label>
                <input type="text" placeholder="Last Name" id="lastname" name="lastname"  >
                <small id='lastnameError'></small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="text" placeholder="Enter Email" id="email" name="email">
                <small id='emailError'></small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" placeholder="Enter password" id="password" name="password">
                <small id='passwordError'></small>
            </div>

            <div class="form-control">
                <label for="password2">Confirm Password</label>
                <input type="password" placeholder="Confirm Your Password" id="password2" name="password2" >
                <small id='password2Error'></small>
            </div>

            <div class="form-control">
                <label for="number">Phone Number</label>
                <input type="text" placeholder="Enter Your Phone number" id="phone" name="phone">
                <small id='phoneNumberError'></small>
            </div>

            <div class="form-control">
                <label for="location">Location</label>
                <input type="text" placeholder="Enter Your Location" id="location" name="location">
                <small id='LocationError'></small>
            </div>


            <small id='success'></small>
            <button type="submit" name="submitD" id='submitBtn'>Sign up</button>
        </form>        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./script.js"></script>

</body>
</html>
