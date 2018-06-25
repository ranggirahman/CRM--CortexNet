<?php
    include "koneksi.php";

    // for debuging only
    //error_reporting(0);

    $id_card = $_POST['idkartu'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat'];
    $tgl_lahir = $_POST['tanggal'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $notlp = $_POST['number'];
    $paket = $_POST['contype'];
    $password = $_POST['password'];
    $poin = 0;
    $harga = 0;

    if( $paket == "Standard Packet"){
        $poin = 100;
        $harga = 1000000;
    }else if( $paket == "Family Packet"){
        $poin = 200;
        $harga = 2300000;
    }else if( $paket == "Business Packet"){
        $poin = 300;
        $harga = 4200000;
    }else if( $paket == "Premium Packet"){
        $poin = 400;
        $harga = 1800000;
    }else if( $paket == "Family Plus Packet"){
        $poin = 600;
        $harga = 3000000;
    }else if( $paket == "Enterprise Packet"){
        $poin = 1000;
        $harga = 10000000;
    }

    // cek if available
    $c = mysqli_query($koneksi,"select count(email) from user where email='$email'");
    $cr = mysqli_fetch_array($c);
    $ci = $cr['count(email)'];

    if( $ci == 0 ){
        $query = "insert into user(id_card, nama, tempat_lahir, tgl_lahir, alamat, email, notlp, paket, password, poin, harga) values ('$id_card', '$nama', '$tempat_lahir', '$tgl_lahir', '$alamat', '$email', '$notlp', '$paket', '$password','$poin','$harga')";
      
        $result = mysqli_query($koneksi, $query);
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

    <title>Cortex.Net | About</title>

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
                    <li role="presentation"><a href="login.php">Login</a></li>
                </ul>
            </nav>
            <h3 class="text-muted"><b>Cortex</b>.Net</h3>
        </div>
    
        <div class="jumbotron">
            <?php if( $ci == 0  ){ echo '<img src="img/done.png" width="20%"><hr><h4>Thankyou for choosing us, now you can <a href="login.php" text-decoration="none"> login</a></h4>'; }else{ echo '<img src="img/block.png" width="20%"><hr><h4>You already registered please<a href="login.php" text-decoration="none"> login</a></h4>'; };?> 
        </div>

        <div class="row marketing">
        </div>

        <footer class="footer">
            <p>&copy; Copyright 2015, Design by <a href="http://www.facebook.com/ranggirahman" target="_blank" text-decoration="none">ranggirahman</a></p>
        </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
