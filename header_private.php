<?php 
	//Start the Session
	session_start();
	//file required to connect with database
	require('connect.php');
	//condition check if session variable is set and is not empty, if false redirection to login page, if true set session variable and greeting user by displaying message
	if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		header ("Location: login.php");
	} else {
	 $username = $_SESSION['username'];
	 $greetings =  '<div class="greetings">Hello, <strong>' . $username . '</strong>&nbsp;&nbsp;[ <a href="logout.php" id="logout">Logout</a> ]</div>';
}
 ?> 
<!doctype html>
<html>
	<head>
		<title>DVD MS</title>
		<meta charset="utf-8" />
       <head>
		
		


		<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>FitGym</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/fitgym-custom.css" rel="stylesheet">

<!-- logout/customer delete confirmation window using jQuery -->
		<script>
			$(document).ready(function(){
				$('#logout').on('click', function(e){
  				return confirm("Are you sure you want to log out?");
  			});

			$('#del_customer').on('click', function(e){
  			return confirm("Are you sure you want to delete customer?");
  			});
			});
		</script>
	</head>
	<body>
		<header>
		<div class="btns">
		<a class="buttonlink" href="index_edit.php">Index Edit</a>/
		<a class="buttonlink" href="registration_edit.php">Registration Edit</a>/
		<a class="buttonlink" href="class_details_edit.php">Class Details Edit</a>/
		<a class="buttonlink" href="testimonial_manage.php">Tesimonial Edit</a>
			<a class="buttonlink" href="create_pages.php">Create Pages</a>
			<a class="buttonlink" href="contact_us_manage.php">Contact us manage</a>
			<a href="logout.php">Logout</a>
		</div>
	</header>


 
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
              <a class="nav-link" href="member.php">Home</a>
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
              <a class="nav-link" href="testimonials.php">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
            	<!-- greets user after session variable is set -->
              <?php echo $greetings ?>
            </li>
          </ul>
      </div>
    </nav>
	
			
