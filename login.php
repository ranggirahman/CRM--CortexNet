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
                    <li role="presentation"><a href="signup.php">Signup</a></li>
                    <li role="presentation" class="active"><a href="login.php">Login</a></li>
                </ul>
            </nav>
            <h3 class="text-muted"><b>Cortex</b>.Net</h3>
        </div>
		
	    <div class="row marketing">

            <div class="col-lg-6">
                <div class="panel panel-info">
                    <div class="panel-heading"><h4>Not Have Account ?</h4></div>
                    <div class="panel-body">
                        <h4>&nbsp;Fast Activation</h4>
                        <h4>&nbsp;Secure Access</h4>
                        <h4>&nbsp;24 Hours Support</h4>
                        <hr>
                        <center>
                            <p><a class="btn btn-warning" href="signup.php" role="button">Connect Now !</a></p>
                        </center>
                    </div>
                </div>                    
            </div>

            <div class="col-lg-6">
                <div class="panel panel-warning panel-heading" role="alert"><h4>Login</h4></div>
                <form action="" method="POST">
                    <table border=0>
                        <tr height="50px">
                            <td><input class="form-control" type="email" name="email" placeholder="Email" maxlength="25" size="25" required></td>
                        </tr>
                        <tr height="50px">
                            <td><input class="form-control" type="password" name="password" placeholder="Password" maxlength="25" size="25" required></td>
                        </tr>
                    </table>
                  <hr>
                  <input class="btn btn-success" type="submit" name="submit" value="Login">
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

    $email = $_POST['email'];
    $password = $_POST['password'];

    $c = mysqli_query($koneksi,"select count(email) from user where email='$email' and password='$password'");

    $cr = mysqli_fetch_array($c);
    $ci = $cr['count(email)'];

    if( $ci == 1 ){
        $co = $email;
        $en = base64_encode($co);

        header("Location: user.php?s=$en");
    }else{
    }

  }
?>
