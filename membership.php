<?php
    //includes session start, connection to database and options available for all users
  include 'connect.php';

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
        //    $create_date = date('Y-m-d H:i:s');
            $membership_id = 1;
          
            //hashing password
           // $password = md5($password);


             //$membership_query = "INSERT INTO membership (memb_id, memb_name, memb_fee, memb_type)
            //  VALUES ('','Basic', 32.9, 'Monthly')";

             // echo $membership_query;

           // $membership_result = mysqli_query($con, $membership_query);
           // if($membership_result) {
              //returns the auto generated id used in the latest query
            //  $membership = mysqli_insert_id($con);
              $query = "INSERT INTO user (first_name, last_name, username, password, email, phone, user_type, membership_memb_id) VALUES ('$first_name', '$last_name', '$username', '$password', '$email', '$phone', '$user_type', '$membership_id')";
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

        //}
      }
 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>FitGym</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/fitgym-custom.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">FitGym</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownClassess" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Classess
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownClassess">
                <a class="dropdown-item" href="class-one.html">class one </a>
                <a class="dropdown-item" href="class-one.html">class two</a>
                <a class="dropdown-item" href="class-one.html">class three</a>
                <a class="dropdown-item" href="class-one.html">class four</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonials.html">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-lg btn-success btn-block" href="membership.php" >Sign Up</a>
            </li>
          </ul>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row margin_tb_mem">
        <div class="col-lg-6">
          <h1>Membership plans</h1>
        </div>
      </div>
      <!-- Content Row -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h3 class="card-header">Basic</h3>
            <div class="card-body">
              <div class="display-4">€19.99</div>
              <div class="font-italic">per month</div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Benefit 1 </li>
              <li class="list-group-item">Benefit 2 </li>
              <li class="list-group-item">Benefit 3 </li>
              <li class="list-group-item">
                <a data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary">Sign Up!</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card card-outline-primary h-100">
            <h3 class="card-header bg-primary text-white">Plus</h3>
            <div class="card-body">
              <div class="display-4">€99.99</div>
              <div class="font-italic">per 6 months</div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Benefit 1 </li>
              <li class="list-group-item">Benefit 2 </li>
              <li class="list-group-item">Benefit 3 </li>
              <li class="list-group-item">
                <a data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary">Sign Up!</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h3 class="card-header">Ultimate</h3>
            <div class="card-body">
              <div class="display-4">€199.99</div>
              <div class="font-italic">per 12 month</div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Benefit 1 </li>
              <li class="list-group-item">Benefit 2 </li>
              <li class="list-group-item">Benefit 3 </li>
              <li class="list-group-item">
                <a data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-success">Sign Up!</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.row -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
         <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Sign Up</h2>
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
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
      </form>
      </div>
    </div>
  </div>
</div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; FitGym <?php echo date("Y") ?> All rights reserved.</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
