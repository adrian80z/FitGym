<?php 
//Start the Session
session_start();
//file required to connect with database
require('connect.php');
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
        <a class="navbar-brand" href="./">FitGym</a>
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
              <a class="nav-link" href="testimonials.php">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-lg btn-success btn-block" href="membership.php">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
			
