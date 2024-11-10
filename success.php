<?php
require "includes/common.php";
session_start();

$user_id = $_SESSION['user_id'];
$query = "UPDATE users_products SET status='Confirmed' WHERE user_id='$user_id' AND status='Added to cart'";
mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add Bootstrap CSS if not already included -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f8fb;
        }

        #content {
            padding: 50px 0;
        }

        .jumbotron {
            background-color: #ffffff;
            padding: 3rem 2rem;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .jumbotron h3 {
            font-weight: bold;
            color: #2c3e50;
        }

        .jumbotron p {
            font-size: 1.1rem;
            color: #7f8c8d;
        }

        .jumbotron a {
            color: #3498db;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .jumbotron a:hover {
            color: #2980b9;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EcoShopper | Online Shopping Site for Men</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="refresh" content="4;url=index.php" />
</head>
<body>
    <?php
include 'includes/header_menu.php';
?>
    <div class="container-fluid mt-5 pt-5" id="content" style="margin-bottom:200px">
            <div class="col-md-8 mx-auto">
                <div class="jumbotron text-center">
                      <h3>Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p>Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
         <!-- footer-->
         <?php include 'includes/footer.php'?>
        <!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>