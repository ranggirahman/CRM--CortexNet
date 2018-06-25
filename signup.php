<?php
	include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Cortex.Net | Signup</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">
      	<div class="header clearfix">
	        <nav>
	          	<ul class="nav nav-pills pull-right">
		            <li role="presentation"><a href="index.php">Home</a></li>
		            <li role="presentation"><a href="about.php">About</a></li>
		            <li role="presentation"><a href="contact.php">Contact</a></li>
		            <li role="presentation" class="active"><a href="signup.php">Signup</a></li>
		            <li role="presentation"><a href="login.php">Login</a></li>
	          	</ul>
	        </nav>
        	<h3 class="text-muted"><b>Cortex</b>.Net</h3>
      	</div>
		
		<div class="jumbotron">
			<img src="img/connection.png" width="50%">
			<hr>
			<h3>Joining The Future of Networking</h3>
		</div>

	  	<div class="row marketing">
			<div class="panel panel-primary">
				<div class="panel-heading"><h4>Register</h4></div>
				<div class="panel-body">
					<form action='response.php' method='POST'>
					<table border=0>
						<tr height="50px">
							<td width="40%">ID Card Number</td>
							<td><input class="form-control" type="text" name="idkartu" maxlength="40" size="40" required></td>
						</tr>
						<tr height="50px">
							<td width="25%">Name</td>
							<td><input class="form-control" type="text" name="nama" placeholder="Full Name" maxlength="40" size="40" required></td>
						</tr>
						<tr height="50px">
							<td width="25%">Place of Birth</td>
							<td><input class="form-control" type="text" name="tempat" maxlength="20" size="20" required></td>
						</tr>
						<tr height="50px">
							<td width="25%">Date of Birth</td>
							<td><input class="form-control" type="date" name="tanggal" maxlength="20" size="20" required></td>
						</tr>
						<tr height="50px">
							<td width="25%">Address</td>
							<td><textarea class="form-control" name="alamat" style="resize:none" rows="4" cols="40" required></textarea></td>
						</tr>
						<tr height="50px">
							<td width="25%">Email</td>
							<td><input class="form-control" type="email" name="email" placeholder="example@domain.com" maxlength="25" size="25" required></td>
						</tr>
						<tr height="50px">
							<td width="25%">Phone Number</td>
							<td><input class="form-control" type="number" name="number" maxlength="25" size="25"required></td>
						</tr>
						<tr height="50px">
							<td width="25%">Packet Connection Type</td>
							<td><select class="form-control" name="contype" required>
								<option value="Standard Packet">Standard Packet @ 1.000.000 IDR / Month</option>
								<option value="Family Packet">Family Packet @ 2.300.000 IDR / Month</option>
								<option value="Business Packet">Business Packet @ 4.200.000 IDR / Month</option>
								<option value="Premium Packet">Premium Packet @ 1.800.000 IDR / Month</option>
								<option value="Family Plus Packet">Family Plus Packet @ 3.000.000 IDR / Month</option>
								<option value="Enterprise Packet">Enterprise Packet @ 10.000.000 IDR / Month</option>
								</select>
							</td>
						</tr>
						<tr height="50px">
							<td width="25%">Password</td>
							<td><input class="form-control" type="password" name="password" maxlength="25" size="25"required></td>
						</tr>
					</table>
					<center>
						<hr>
						<input class="btn btn-success" type="submit" name="submit" value="Submit">
						<input class="btn btn-warning" type="reset" name="reset" value="Clear">
					</center>
					<br/>
					</form>
				</div>
			</div>
		</div>

	    <footer class="footer">
	        <p>&copy; Copyright 2015, Design by <a href="http://www.facebook.com/ranggirahman" target="_blank" text-decoration="none">ranggirahman</a></p>
	    </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
