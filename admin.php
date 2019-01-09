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