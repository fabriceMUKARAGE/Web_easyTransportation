<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./getStudent.css">

     
    <title>Get the student from Ashesi</title>
  </head>
  <body>

  <div class="student">
      <h1>
          want a student? <br><br>
      </h1>
</div>

<form action="getStudent.php" method="POST">

    <!-- Viewing the students who want to go to accra or come from Accra-->
    <div class="classA">

        <div class="classAA">
            <h2>Check the students available</h2>
        </div>

        <div class="classAA">
            <button style="background-color:green" type="submit" name="view" class="btn btn-default">Check</button>
        </div>

    </div>

</form>


<?php
/* when the driver log in, 
    record data into the driverlogin table
*/
if(isset($_POST['login-btn'])){
$firstname= $_POST['firstname'];
$password= $_POST['password'];
$phone= $_POST['phone'];
$location= $_POST['location'];

	//Database connection
	require "database_credential.php";
	$conn = new mysqli(servename, username, password, db);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	  }
 	  
      $sql= "INSERT INTO DriverLogin (first_name, password, phone_number, location) VALUES ('$firstname', '$password','$phone', '$location')";

	if ($conn->query($sql) === FALSE) {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
 		  
	$conn->close();
    
}

?>

<p><br><p>
<div class="container">
                    <!-- finding the list of students available, the students who logged in -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                          <?php 
                          
                          // Database connection
	                        $conn = new mysqli('localhost','root','Agahozo12!@','easy_transportation');
	                        if ($conn->connect_error) {
		                        die("Connection failed: " . $conn->connect_error);
	                        }
                          // if find the students button clicked, check for the students available
                          if(isset($_POST['view'])){
                          echo '<div class="card-header py-2">Available Students right now
                          </div>';
                          $sql = "SELECT * FROM StudentLogin";
                          $result = mysqli_query($conn, $sql);
                          if (mysqli_num_rows($result)>0){
                            echo '<div class="table-responsive">';
                               echo '<table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">';
                                    echo '<thead>';
                                        echo '<tr>';
                                                                                    
                                           echo '<th>Ashesi Email</th>'; 
                                           echo '<th>phone number</th>'; 
                                           echo '<th>Location</th>'; 
                                           echo '
                                           <th><label for="student">Select</label></th>'; 
                                           
                                        echo '</tr>';
                                    echo '</thead>';
                                    echo '</tbody>';

                                    while($row = mysqli_fetch_assoc($result)){
                                      echo '<tr>';
                                                                                      
                                            echo "<td>" .$row['Ashesi_email']. "</td>";
                                            echo "<td>" .$row['phone_number']. "</td>";
                                            echo "<td>" .$row['location']. "</td>";
                                            echo "<td>" .'<input type="checkbox" id="choosestudent" name="student">'. "</td>";
                                                   
                                    }
                                
                               echo '</table>';
                                }}
                                if(isset($_POST['view'])){
                                echo "<h2>Request for confirmation</h2>";
                                echo '
                                <form action="getStudent.php" method="POST" >
                                <button style="background-color:#0fff" type="submit" name="RequestForStudent" class="btn btn-default">Request</button></form>';
                              }
                                  //Sending request to the student
                                  if(isset($_POST['RequestForStudent'])){
                                    echo "Well done! The Student will contact you shortly!";
                                    
                                  }                            
                         
                                
                                    ?>
                            

                                
                            </div>

                        </div>
                      </div>
                  <form action="loginD.php" method="POST">
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
                        $sql2 = "DELETE FROM driverlogin WHERE email='$email'";
                        $result2 = mysqli_query($conn, $sql2);  
                        
                          
                        
                  }
                  ?>



</body>
</html>