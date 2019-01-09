<?php 
//includes session start, connection to database and options available for all users
include ('header_public.php');

// checking if posted values are set
if (isset($_POST['username']) && isset($_POST['pass'])){
	//Assigning posted values to variables and escaping special character for security reasons
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['pass']);
	//hashing password
	//$password = md5($password);
	
	//Checking the values are existing in the database or not
	$query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
	//echo $query;
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
	$count = mysqli_num_rows($result);
	//If the posted values are equal to the database values, then session will be created for the user.
		if ($count == 1){
			$_SESSION['username'] = $username;
			}else{
			// If the login credentials doesn't match, he will be shown with an error message.
			echo "<div class='box fail'>Invalid login credentials</div>";
			}
	}	
	//if the user is logged in Greets the user with message
	if (isset($_SESSION['username'])){
	$username = $_SESSION['username'];
	header("Location: admin.php");

	}else{
	//When the user visits the page first time, login form will be displayed.
?>

      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Login</h2>
        <div class="input-group">  
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <a class="btn btn-lg btn-primary btn-block" href="registration.php">Register</a>
      </form>

<?php }
	include ('footer.php');
 ?>
</div>