<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="driverstyle.css">
    <title>Driver's log in form</title>
</head>

<body>
    <!-- form for the log in as a driver -->
    <div class="container">
        <form id="form" class="form" action="getStudent.php" method="POST">
            <h2 sytle="color=white">log in as driver now</h2>
            <div class="form-control">
                <label for="firstname">First name</label>
                <input type="text" placeholder="First Name" name="firstname" id="firstname">
                <small id='firstnameError'></small>
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" placeholder="Enter Your Password" name="password" id="password">
                <small id='PasswordError'></small>
            </div>

            <div class="form-control">
                <label for="number">Phone Number</label>
                <input type="text" placeholder="Enter Your Phone number" name="phone" id="phone">
                <small id='phoneNumberError'></small>
            </div>

            
            <div class="form-control">
                <label for="location">Location</label>
                <input type="text" placeholder="Enter Your location" name="location" id="location">
                <small id='LocationError'></small>
            </div>

            <small id='success'></small>
            <button type="submit" name="submitloginD" id='submitBtn'>log in</button>
        </form>        
    </div>
       
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./script.js"></script>

    
    <?php
/* if the driver makes registration, 
    record into the database
*/
if(isset($_POST['submitD'])){
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$password= $_POST['password'];
$phone= $_POST['phone'];
$location= $_POST['location'];
    

	//Database connection
	require "database_credential.php";
	$conn = new mysqli(servename, username, password, db);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	  }

 	// inserting the sign up data for a driver into the database
	$sql= "INSERT INTO drivers_info (first_name, last_name, email, password, phone_number, location) VALUES ('$firstname', '$lastname', '$email', '$password', '$phone', '$location')";

	if ($conn->query($sql) === FALSE) {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
    else{
        echo "
        <h2> <br><br> You are most welcome, $firstname<br> login in to get the student going or coming to accra</h2>
        ";
    }
  
		  
	$conn->close();
    

}

?>



</body>
</html>