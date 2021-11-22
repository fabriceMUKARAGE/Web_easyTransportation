<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Studentstyle.css">
    <title>Student's sign up form</title>
</head>
<body>
    <!-- form for the sign up as a student -->
    <div class="container">
        <form id="form" class="form" action="loginS.php" method="POST">
            <h2 sytle="color=white">Sign up as student now</h2>
            <div class="form-control">
                <label for="firstname">First name</label>
                <input type="text" placeholder="First Name" id="firstname" name="firstnameS">
                <small id='firstnameError'></small>
            </div>
            <div class="form-control">
                <label for="lastname">Last name</label>
                <input type="text" placeholder="Last Name" id="lastname" name="lastnameS">
                <small id='lastnameError'></small>
            </div>
            <div class="form-control">
                <label for="email">Ashesi email</label>
                <input type="text" placeholder="Enter Email" id="email" name="emailS">
                <small id='emailError'></small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" placeholder="Enter password" id="password" name="passwordS">
                <small id='passwordError'></small>
            </div>

            <div class="form-control">
                <label for="password2">Confirm Password</label>
                <input type="password" placeholder="Confirm Your Password" id="password2">
                <small id='password2Error'></small>
            </div>

            <div class="form-control">
                <label for="number">Phone Number</label>
                <input type="text" placeholder="Enter Your Phone number" id="phone" name="phoneS">
                <small id='password2Error'></small>
            </div>

            <small id='success'></small>
            <button href="loginD.php" type="submit" name="submitS" id='submitBtn'>Sign up</button>
        </form>        
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>
</html>