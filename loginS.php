<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<HTML>
<HEAD>
<TITLE>Student login</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="signupS.php">Sign up</a>
			</div>
			<div class="signup-align">
				<form name="login" action="getDriver.php" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Login as Student</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Ashesi Email<span class="required error" id="email-info"></span>
							</div>
							<input class="input-box-330" type="text" name="email"
								id="email">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="password" id="password">
						</div>
					</div>
					<div class="row">
					<div class="inline-block">
							<div class="form-label">
								Phone number<span class="required error" id="phone-info"></span>
							</div>
							<input class="input-box-330" type="text" name="phone"
								id="phone">
						</div>
					</div>
					<div class="row">
					<div class="inline-block">
							<div class="form-label">
								Location<span class="required error" id="location-info"></span>
							</div>
							<input class="input-box-330" type="text" name="location"
								id="location">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="login-btnS"
							id="login-btn" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function loginValidation() {
	var valid = true;
	$("#firstname").removeClass("error-field");
	$("#password").removeClass("error-field");

	var firstname = $("#firstname").val();
	var Password = $('#password').val();

	$("#firstname-info").html("").hide();

	if (firstname.trim() == "") {
		$("#firstname-info").html("required.").css("color", "#ee0000").show();
		$("#firstname").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
    
    <?php
/* if the driver makes registration, 
    record into the database
*/
if(isset($_POST['signup-btnS'])){
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
$password= $_POST['password'];
$phone= $_POST['phone'];

    

	//Database connection
	require "database_credential.php";
	$conn = new mysqli(servename, username, password, db);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	  }

 	// inserting the sign up data for a driver into the database
	$sql= "INSERT INTO students_info (first_name, last_name, Ashesi_email, password, phone_number) VALUES ('$firstname', '$lastname', '$email', '$password', '$phone')";

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