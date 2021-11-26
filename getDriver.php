<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./getDriver.css">

     
    <title>Get the driver</title>
  </head>
  <body>

  <div class="student">
      <h1>
          want a driver? <br><br>
      </h1>
</div>


<!-- finding the driver-->
<form action="getDriver.php" method="POST">
        <div class="classAA">
            <button style="background-color:green" type="submit" name="finddriver"class="btn btn-default">Find a driver</button> <br><br>
        </div>
    </div>

</form>


<?php
/* when the student log in, 
    record data into the studentlogin table
*/
if(isset($_POST['login-btnS'])){
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
 	  
      $sql= "INSERT INTO studentlogin (Ashesi_email, password, phone_number, location) VALUES ('$email', '$password','$phone', '$location')";

	if ($conn->query($sql) === FALSE) {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
 		  
	$conn->close();
    
}
echo "<br>";
?>

<div class="container">
                    <!-- finding the list of drivers available -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                          <?php 
                          
                          // Database connection
	                        $conn = new mysqli('localhost','root','Agahozo12!@','easy_transportation');
	                        if ($conn->connect_error) {
		                        die("Connection failed: " . $conn->connect_error);
	                        }
                          // if a button of find drivers is clicked, get the driver
                          if(isset($_POST['finddriver'])){
                          echo '<div class="card-header py-2">List of Drivers </div>';
                          $sql = "SELECT * FROM driverlogin";
                          $result = mysqli_query($conn, $sql);
                          if (mysqli_num_rows($result)>0){
                            echo '<div class="table-responsive">';
                               echo '<table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">';
                                    echo '<thead>';
                                        echo '<tr>';
                                            
                                           echo '<th data-field>First Name</th>';
                                         
                                           
                                           echo '<th>phone number</th>';
                                           echo '<th>Location</th>';
                                           echo '<th><label for="driver">Select</label></th>'; 
                                           
                                        echo '</tr>';
                                    echo '</thead>';
                                    echo '</tbody>';

                                    while($row = mysqli_fetch_assoc($result)){
                                      echo '<tr>';
                                            echo "<td>" .$row['first_name']. "</td>"; 
                                          
                                            
                                            echo "<td>" .$row['phone_number']. "</td>";
                                            echo "<td>" .$row['location']. "</td>";
                                            echo "<td>" .'<input type="radio" id="choosedriver" name="driver">'. "</td>";
                                           
                                              
                                            
                                    }
                                
                                    
                               echo '</table>';
                                }}
                                if(isset($_POST['finddriver'])){
                                  echo "<h2>Request for confirmation</h2>";
                                  echo '
                                  <form action="getDriver.php" method="POST" >
                                  <button style="background-color:#0fff" type="submit" name="RequestForDriver" class="btn btn-default">Request</button></form>';
                                }
                                    //Sending request to the student
                                    if(isset($_POST['RequestForDriver'])){
                                      echo "Well done! The Driver will contact you shortly!";
                                      
                                    } 
                                
                                
                                  
                                    ?>
                                
                            </div>
                        </div>
                      </div>
                      <form action="loginS.php" method="POST">
                            <div>
                              <button style="background-color:red" type="submit" name="logOut" class="btn btn-default">Log out</button></form>
                            </div>

                  </form>
                  <?php
                  // if find the log out button is clicked, Delete you go to the main page
                  if(isset($_POST['logOut'])){
                    $conn = new mysqli('localhost','root','Agahozo12!@','easy_transportation');
	                      if ($conn->connect_error) {
		                      die("Connection failed:" . $conn->connect_error);
	                      }
                        $sql2 = "DELETE FROM studentlogin WHERE Ashesi_email='$email'";
                        $result2 = mysqli_query($conn, $sql2); 
                        
                          
                        
                  }
                  ?>

</body>
  </html>