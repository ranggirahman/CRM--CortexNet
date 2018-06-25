<?php
 	include "koneksi.php";

 	$s = $_GET['s'];

 	$email = base64_decode($s);

 	$result = mysqli_query($koneksi,"select *from user where email='$email'");
	$row = mysqli_fetch_array($result);

	$id_card = $row['id_card'];
    $nama = $row['nama'];
    $tempat_lahir = $row['tempat_lahir'];
    $tgl_lahir = $row['tgl_lahir'];
    $alamat = $row['alamat'];
    $email = $row['email'];
    $notlp = $row['notlp'];
    $paket = $row['paket'];
    $password = $row['password'];
    $keluhan = $row['keluhan'];
    $poin = $row['poin'];
    $harga = $row['harga'];
    $speed = 0;
    $stemp = 0;

    if( $paket == "Standard Packet"){
        $speed = 10;
        $stemp = 10;
    }else if( $paket == "Family Packet"){
        $speed = 40;
        $stemp = 40;
    }else if( $paket == "Business Packet"){
        $speed = 200;
        $stemp = 90;
    }else if( $paket == "Premium Packet"){
        $speed = 50;
        $stemp = 50;
    }else if( $paket == "Family Plus Packet"){
    	$speed = 80;
    	$stemp = 80;
    }else if( $paket == "Enterprise Packet"){
    	$speed = 1000;
    	$stemp = 100;
    }

    
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

    <title>Cortex.Net | User Page</title>

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
	            	<li role="presentation" class="active"><a>Welcome, <?php echo $nama; ?></a></li>
	            	<li role="presentation"><a href="index.php">Logout</a></li>
	          	</ul>
	        </nav>
	        <h3 class="text-muted"><b>Cortex</b>.Net</h3>
      	</div>
		
		<div class="panel panel-primary">
		  	<div class="panel-heading"><h4>Costumer Information</h4></div>
		  	<div class="panel-body">
			    <table class="table">
			    	<tr>
			    		<td>1</td>
			    		<td>ID Card</td>
			    		<td><?php echo $id_card; ?></td>
			    	</tr>
			    	<tr>
			    		<td>2</td>
			    		<td>Name</td>
			    		<td><?php echo $nama; ?></td>
			    	</tr>
			    	<tr>
			    		<td>3</td>
			    		<td>Address</td>
			    		<td><?php echo $alamat; ?></td>
			    	</tr>
			    	<tr>
			    		<td>4</td>
			    		<td>Email</td>
			    		<td><?php echo $email; ?></td>
			    	</tr>
			    	<tr>
			    		<td>5</td>
			    		<td>Phone Number</td>
			    		<td><?php echo $notlp; ?></td>
			    	</tr>
			    	<tr>
			    		<td>6</td>
			    		<td>Packet</td>
			    		<td><?php echo $paket; ?></td>
			    	</tr>
			    	<tr>
			    		<td>7</td>
			    		<td>Price</td>
			    		<td><?php echo $harga; ?> IDR / Month</td>
			    	</tr>
			    	<tr>
			    		<td>8</td>
			    		<td>Poin</td>
			    		<td><?php echo $poin; ?></td>
			    	</tr>
				</table>
		  	</div>
		</div>

		<div class="panel panel-primary">
		  	<div class="panel-heading"><h4>Connection Status</h4></div>
		  	<div class="panel-body">

		  		<div class="col-lg-2">
		  			<p>Packet</p>
		  		</div>
		  		<div class="col-lg-10">
			  		<span class="label label-success">Active</span>
	  			</div>

	  			<div class="col-lg-12">
	  			</div>

		  		<div class="col-lg-2">
		  			<p>Speed</p>
		  		</div>
		  		<div class="col-lg-10">
			  		<div class="progress">
	  					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $stemp; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $stemp; ?>%;"><?php echo $speed ?> MB/s</div>
	  				</div>
	  			</div>
		  	</div>
		</div>

		<div class="panel panel-primary">
		  	<div class="panel-heading"><h4>Complaint and Feedback</h4></div>
		  	<div class="panel-body">
		  		<form action="" method="POST">
			  		<br/>
			   		<textarea class="form-control" name="keluhan" maxlength="225" style="resize:none" rows="4" cols="92"></textarea>
			   		<hr>
					<input class="btn btn-success" type="submit" name="submit" value="Submit">
				</form>
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


<?php
	if(isset($_POST['submit'])){

		$keluhan = $_POST['keluhan'];
		
		$query2 = "update user set keluhan='$keluhan' where email = '$email'";
		$result2 = mysqli_query($koneksi,$query2);
	}	
?>	