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
                <a href="registration.php" class="btn btn-primary">Sign Up!</a>
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
                <a href="registration.php" class="btn btn-primary">Sign Up!</a>
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
                <a href="registration.php" class="btn btn-primary">Sign Up!</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.row -->

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
