<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./OurServices.css">
    
    <title>Our Services</title>
  </head>
  <body>
<div class="priceInformation">
    <h2 ><br>We make sure that you get to your destination safely <br>with stated price for different location in Accra</h2> <br><br>
</div>
  
<div class="container">
                    <!-- showing the payment details -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-2">Locatin Payment details</div>
                        <div class="card-body">
                          <?php 
                          
                          // Database connection
	                        $conn = new mysqli('localhost','root','Agahozo12!@','Easy_Transportation');
	                        if ($conn->connect_error) {
		                        die("Connection failed: " . $conn->connect_error);
	                        }
                          // finding the payment details in the database
                          $sql = "SELECT * FROM location_payment";
                          $result = mysqli_query($conn, $sql);
                          if (mysqli_num_rows($result)>0){
                            echo '<div class="table-responsive">';
                               echo '<table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">';
                                    echo '<thead>';
                                        echo '<tr>';
                                            
                                           echo '<th data-field>Departure</th>';
                                         
                                           echo '<th>Destination</th>'; 
                                           echo '<th>payment (Cedis)</th>';
                                           
                                        echo '</tr>';
                                    echo '</thead>';
                                    echo '</tbody>';

                                    while($row = mysqli_fetch_assoc($result)){
                                      echo '<tr>';
                                            echo "<td>" .$row['departure']. "</td>"; 
                                          
                                            echo "<td>" .$row['destination']. "</td>";
                                            echo "<td>" .$row['payment']. "</td>";
                                           
                                           
                                              
                                            
                                    }
                                
                                    
                               echo '</table>';
                                }
                                  
                                    ?>
                                
                            </div>
                        </div>
                      </div>

</body>
  </html>