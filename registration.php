<?php
    //includes session start, connection to database and options available for all users
  include ('header_public.php');

  /* If the values are posted, assign them to variables,
     escapes special characters in a string for security reason and 
     insert them into the database.
     */
        if (isset($_POST['username']) && isset($_POST['password'])){
            $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
            $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $password = mysqli_real_escape_string($con,$_POST['password']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $phone = mysqli_real_escape_string($con, $_POST['phone']);
            $user_type = 'Member';
            $create_date = date('Y-m-d H:i:s');
          
            //hashing password
           // $password = md5($password);


             
             //echo $membership_query;

           // $membership_result = mysqli_query($con, $membership_query);
          //  if($membership_result) {
              //returns the auto generated id used in the latest query
             // $membership = mysqli_insert_id($con);
              $query = "INSERT INTO user (first_name, last_name, username, password, email, phone, user_type, register_date) VALUES ('$first_name', '$last_name', '$username', '$password', '$email', '$phone', '$user_type', '$create_date')";
           echo $query;       
            $result = mysqli_query($con,$query);
            //display different messages depending on result query(true/false)
            if($result){
               echo  $msg_success = "<div class='box success'>Registration Successfull. Please log in.</div>";
               //Page redirect after certain time (3s)
              header( "refresh:3;url=login.php" );
            } else {
               echo $msg_fail = "<div class='box fail'>Registration Failed.</div>";
            }

       
      }
 ?>



      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
        <label for="first_name" class="sr-only">First Name</label>
        <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
        <label for="last_name" class="sr-only">Last Name</label>
        <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
        <label for="username" class="sr-only">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
        <label for="phone" class="sr-only">Phone</label>
        <input type="text" name="phone" class="form-control" placeholder="Phone" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>


<?php
  include ('footer.php');
 ?>
</div>