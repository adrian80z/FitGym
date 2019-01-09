<?php
    
  //Connect to the database
  // Set the database access information as constants...
  DEFINE ('DB_USER', 'root');
  DEFINE ('DB_PASSWORD', '');
  DEFINE ('DB_HOST', 'localhost');
  DEFINE ('DB_NAME', 'fitgym');                          //The port #. It is always 3306
    
  // Make the connection...
  $con = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL! ' . mysqli_connect_error());
  // Set the encoding...
  mysqli_set_charset($con, 'utf8');

  //And now to perform a simple query to make sure it's working
 /* $query = "SELECT * FROM staff";
  echo 'SQL query to submit:<br/>&nbsp'.$query.'<br/><br/>';
  $result = mysqli_query($con, $query);
  echo 'var_dump of result<br/>&nbsp';
  var_dump($result);
  echo '<br/><br/>';
  echo 'rows of the result<br/>';
  while ($row = mysqli_fetch_assoc($result)) {
        echo "&nbsp The ID is: " . $row['staff_id'] . " and the Last_name is: " . $row['last_name'].'</br>';
  }
*/
?>