<?php
session_start();
include('actions/authenticate.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
    <style>
        .navbar {
            transition: all 0.4s;
        }

        .navbar .nav-link {
            /* color: #fff; */
            color: #000;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link:focus {
            /* color: #fff; */
            color: #000;
            text-decoration: none;
        }

        .navbar .navbar-brand {
            /* color: #fff; */
            color: #000;
        }


        /* Change navbar styling on scroll */
        .navbar.active {
            background: #fff;
            box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar.active .nav-link {
            color: #555;
        }

        .navbar.active .nav-link:hover,
        .navbar.active .nav-link:focus {
            color: #555;
            text-decoration: none;
        }

        .navbar.active .navbar-brand {
            color: #555;
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">Rubi Restaurant</a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
               
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <?php if(isset($_SESSION['username'])) :?> 
                        <li class="nav-item text-uppercase font-weight-bold" style="color: red;"><?php echo $_SESSION['username']; ?></li>
                        <?php endif; ?>
                        <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                        
                        <li class="nav-item"><a href="reservation.php" class="nav-link text-uppercase font-weight-bold" data-toggle="modal" data-target="#exampleModal">Reserve</a></li>
                        <li class="nav-item"><a href="order.php" class="nav-link text-uppercase font-weight-bold" data-toggle="modal" data-target="#exampleModal">Order</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Contact Us</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">About Us</a></li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>
    


<script>
    $(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});
</script>
</body>
</html>