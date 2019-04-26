<?php 
//starts here 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Student Portal</title>
 	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
 	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="assets/js/jquery.js"></script>

 </head>
 <body>
 <div class="jumbotron text-center">
 	<h1>Student Portal</h1>
 	<p>Log in Panel</p>
 </div>
 <div class="container">
 	<form action="auth.php" method="POST">
 		<div class="col-md-12 box">
 			<div class="form-group" style="padding-top:2%">
 				<label for="username">Username</label>
 				<input name="username" type="text" class="form-control" id="username">
 			</div>
 			<div class="form-group">
 				<label for="password">Password</label>
 				<input name="password" type="password" id="password" class="form-control">
 			</div>
 			<div class="form-group" align="center">
 				<input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info" style="width:50%;">
 			</div>
 			<div class="form-group" align="center">
 				-------------------OR----------------
 			</div>
 			<div class="form-group" align="center">
 				<button class="btn btn-info" id="google_image">Log in With Google</button>
 			</div>
 		</div>
 	</form>
 </div>
 <?php 
 session_start();
if (isset($_SESSION['error'])) {
	echo "<script>alert('Wrong Credentials')</script>";
}
  ?>
 </body>
 </html>