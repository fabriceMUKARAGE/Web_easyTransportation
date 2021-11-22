<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentstyle.css">
    <title>student's log in form</title>
</head>
<body>
    <!-- form for the login as a student -->
    <div class="container">
        <form id="form" class="form" action="getDriver.php" method="POST">
            <h2 sytle="color=white">log in as student now</h2>
            <div class="form-control">
                <label for="email">Ashesi Email</label>
                <input type="text" placeholder="Enter Email" name="email" id="email">
                <small id='emailError'></small>
            </div>

            <div class="form-control">
                <label for="phone">Password</label>
                <input type="password" placeholder="Enter your password" name="Password" id="Password">
                <small id='PasswordError'></small>
            </div>

            <div class="form-control">
                <label for="phone">Phone Number</label>
                <input type="text" placeholder="Enter your phone" name="phone" id="phone">
                <small id='phoneNumberError'></small>
            </div>

            <div class="form-control">
                <label for="phone">Location</label>
                <input type="text" placeholder="Enter your location" name="location" id="location">
                <small id='LocationError'></small>
            </div>

            <small id='success'></small>
            <button type="submit" name="submitloginS"id='submitBtn'>log in</button>
        </form>        
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./script.js"></script>


    
<?php
/* if the students makes registration, 
he/she will come to the login page to proceed
*/
if(isset($_POST['submitS'])){ 
$firstname= $_POST['firstnameS'];
$lastname= $_POST['lastnameS'];
$email= $_POST['emailS'];
$password= $_POST['passwordS'];
$phone= $_POST['phoneS'];
   

	//Database connection
	require "database_credential.php";
	$conn = new mysqli(servename, username, password, db);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	  }
 	
    // inserting the sign up data for a students into the database
	$sql= "INSERT INTO students_info (first_name, last_name, Ashesi_email, password, phone_number) VALUES ('$firstname', '$lastname', '$email', '$password', '$phone')";

    // if the database fail to connect, error message will be displayed
	if ($conn->query($sql) === FALSE) {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
		  
	$conn->close();
    
    echo "
    <h2> <br><br> You are most welcome, $firstname<br> login in to get the driver</h2>
    ";
}

?>
</body>
</html>