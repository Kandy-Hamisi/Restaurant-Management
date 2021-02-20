<?php
session_start();
include('navbar.php');
include('actions/authenticate.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js" integrity="sha512-BmoWLYENsSaAfQfHszJM7cLiy9Ml4I0n1YtBQKfx8PaYpZ3SoTXfj3YiDNn0GAdveOCNbK8WqQQYaSb0CMjTHQ==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider.js" integrity="sha512-/LtMywMLXZ29TJbETec4e6ndSWPxQDTdsqCud+8Q4IFnKQ1WVlr87r0D5oo9QNO9zuqQNJDmvQxQmvqe8DRYLA==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider.min.js" integrity="sha512-DMVsZXgX4yFXz69Stig0g783PuBnl245OQV2qj5gSHTVUAuSeqRolBbaqiungKghnEPYee081WTTN6WA4BPYww==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css" integrity="sha512-c7jR/kCnu09ZrAKsWXsI/x9HCO9kkpHw4Ftqhofqs+I2hNxalK5RGwo/IAhW3iqCHIw55wBSSCFlm8JP0sw2Zw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.css" integrity="sha512-HWY8i77pPLL23sU4pHj+5iuZEmmmu2YaiTUcWrBXqBRTpn6yUdDvlFGNmG0qyjDg/vpt+YWNMASjg9M0eOU9DA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="eatery-style.css">

    <title>Document</title>
</head>
<body>
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/cupcakes.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/italian-cuisine.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/pizza.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section>
        <div class="modals">
            
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Become a member. Get exclusive offers</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <ul class="nav nav-tabs" id="switch" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="register-tab" data-toggle="tab" aria-controls="register" aria-selected="true" href="#register">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="login-tab" data-toggle="tab" aria-controls="login" aria-selected="true" href="#login">Login</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="tab-content">
                                <div class="tab-pane fade show active" id="register" role="tabpane1" aria-labelledby="register-tab">
                                    <form action="#" method="post">
                                    <?php include('actions/errors.php') ?>
                                        <div class="form-group">
                                            <label for="">Your Name</label>
                                            <input type="text" name="username" class="form-control" placeholder="Your name" value="<?php echo $username; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Your Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo $email; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" name="pwd1" id="password1" placeholder="Enter your password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Confirm Password</label>
                                            <input type="password" name="pwd2" id="password2" placeholder="Re-enter the password">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="save" value="Submit" class="btn btn-success">
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="login" role="tabpane1" aria-labelledby="login-tab">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <label for="">Your Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Your email">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" name="pwd" id="password" placeholder="Enter your password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="login" value="Login" class="btn btn-success">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="meals">
            <div class="container">
                <div class="row" align="center">
                    <div class="col-md-12">
                        <h4>Our Meals</h4>
                        <hr>
                        <h5>We <b>Love</b> delicious meals</h5>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="meal-types-heads">
                    <div class="row" align="center">
                        <div  class="col-md-3 col">
                            <h5 id="breakfast" >Breakfast</h5>
                        </div>
                        <div  class="col-md-3 col">
                            <h5 id="showlunch">Lunch</h5>
                        </div>
                        <div id="showdessert" class="col-md-3 col">
                            <h5>Dessert</h5>
                        </div>
                        <div id="showdinner" class="col-md-3 col">
                            <h5>Dinner</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="breakfast1">
                            <div class="container">
                                <div class="row">
                                        <div class="col-md-4 col bg">
                                            <h6 align="center">Breakfast</h6>
                                            <div class="about-breakfast">
                                                <p>Between 6am and 10am as our esteemed customer you will be able to have various types of menus for your breakfast</p>
                                                <p>All you have to do is pick a meal.</p>
                                                <h4>Enjoy <b>5%</b> OFF!!</h4>
                                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col">

                                            <img style="height: 150px; width:150px;" class="rounded-circle" src="images/beverage.jpg" alt="">
                                            <img style="height: 150px; width:150px;" class="rounded" src="images/pizza-breakfast.jpg" alt="">
                                            <img style="height: 150px; width:150px;" class="rounded" src="images/beverage.jpg" alt="">
                                            <img style="height: 150px; width:150px;" class="rounded" src="images/beverage.jpg" alt="">
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="lunch1">
                            <div class="container">
                                <div class="row">
                                        <div class="col-md-4 col bg">
                                            <h6 align="center">Lunch</h6>
                                            <div class="about-breakfast">
                                                <p>Between 6am and 10am as our esteemed customer you will be able to have various types of menus for your breakfast</p>
                                                <p>All you have to do is pick a meal.</p>
                                                <h4>Enjoy <b>5%</b> OFF!!</h4>
                                                <a href="#" class="btn btn-success">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col">

                                            <img style="height: 150px; width:150px;" class="rounded-circle" src="images/beverage.jpg" alt="">
                                            <img style="height: 150px; width:150px;" class="rounded" src="images/pizza-breakfast.jpg" alt="">
                                            <img style="height: 150px; width:150px;" class="rounded" src="images/beverage.jpg" alt="">
                                            <img style="height: 150px; width:150px;" class="rounded" src="images/beverage.jpg" alt="">
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="dessert1">
                        <div class="container">
                                <div class="row">
                                        <div class="col-md-4 col bg">
                                            <h6 align="center">Dessert</h6>
                                            <div class="about-breakfast">
                                                <p>Between 6am and 10am as our esteemed customer you will be able to have various types of menus for your breakfast</p>
                                                <p>All you have to do is pick a meal.</p>
                                                <h4>Enjoy <b>5%</b> OFF!!</h4>
                                                <a href="#" class="btn btn-success">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col">

                                            <img style="height: 150px; width:150px;" class="rounded-circle" src="images/beverage.jpg" alt="">
                                            <img style="height: 150px; width:150px;" class="rounded" src="images/pizza-breakfast.jpg" alt="">
                                            <img style="height: 150px; width:150px;" class="rounded" src="images/beverage.jpg" alt="">
                                            <img style="height: 150px; width:150px;" class="rounded" src="images/beverage.jpg" alt="">
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="dinner1">
                        <div class="container">
                                <div class="row">
                                        <div class="col-md-4 col bg">
                                            <h6 align="center">Dinner</h6>
                                            <div class="about-breakfast">
                                                <p>Between 6am and 10am as our esteemed customer you will be able to have various types of menus for your breakfast</p>
                                                <p>All you have to do is pick a meal.</p>
                                                <h4>Enjoy <b>5%</b> OFF!!</h4>
                                                <a href="#" class="btn btn-success">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col">

                                            <img style="height: 150px; width:150px;" class="rounded-circle" src="images/beverage.jpg" alt="">
                                            <img style="height: 150px; width:150px;" class="rounded" src="images/pizza-breakfast.jpg" alt="">
                                            <img style="height: 150px; width:150px;" class="rounded" src="images/beverage.jpg" alt="">
                                            <img style="height: 150px; width:150px;" class="rounded" src="images/beverage.jpg" alt="">
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="mostly-dined">
            <div class="container">
                <div class="row" align="center">
                    <div class="col-md-12 col">
                        <h5>Mostly Dined Menus</h5>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col">
                        <p>I will display shit here in a few Bare with me please</p>
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <h4>me men</h4>
                            </div>
                            <div class="item">
                                <h4>you know men</h4>
                            </div>
                            <div class="item">
                                <h4>I bet you dont like me</h4>
                            </div>
                            <div class="item">
                                <h4>You know what?...Leave!!</h4>
                            </div>
                            <div class="item">
                                <h4>Please give me my money</h4>
                            </div>
                            <div class="item">
                                <h4>Am here</h4>
                            </div>
                        </div>
                    <!-- <div class="flexslider">
                        <ul class="slides">
                            <li>
                            <img src="images/breads.jpg" />
                            </li>
                            <li>
                            <img src="images/pancakes.jpg" />
                            </li>
                            <li>
                            <img src="images/tea.jpg" />
                            </li>
                            <li>
                            <img src="images/pizza.jpg" />
                            </li>
                        </ul>
                    </div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="reserve-info">
            <div class="container bg">
                <div class="row">
                    <div class="col-md-4 col">
                        <h5>Table Reservations</h5>
                        <hr>
                    </div>
                    <div class="col-md-4 col" align="center">
                        <p>You can select your apropriate time to reserve a table. For any of your occassions</p>
                        <div>
                            <a href="#" class="btn btn-success">Reserve Now</a>
                        </div>
                    </div>
                    <div class="col-md-4 col">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col">
                                    <h4>Opening Hours</h4>
                                    <p>MON - FRI   -   24HRS</p>
                                    <p>SAT - SAT   -   0200HRS - 2300HRS</p>
                                </div>
                                <div class="col-md-6 col">
                                    <h4>OFFER!!</h4>
                                    <p>Reserve for nore than 5 and get a 5% discount</p>
                                </div>
                            </div>
                        </div>
                        <!-- <img src="images/date.jpg" class="img-responsive" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="team">
            <div class="container">
                <div class="row" align="center">
                    <div class="col-md-12 col">
                        <h5>Our Team</h5>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col">
                        <img src="images/jeff.jpg" id="junior-chef"  class="img-responsive rounded-circle" alt="">
                        <div class="junior-content">
                            <h4>Asst. Chef Mercy Johnson</h4>
                            <p>Always ready to serve the customer</p>
                        </div>
                    </div> 
                    <div class="col-md-3 col">
                        <img src="images/klenova.jpg" id="hr-manager" class="img-responsive rounded-circle" alt="">
                        <div class="hr-content">
                            <h4>HR Manager Judith Armstrong</h4>
                            <p>Ensuring the eatery has the best employees</p>
                        </div>
                    </div>
                    <div class="col-md-3 col">
                        <img src="images/mario.jpg" id="senior-chef" class="img-responsive rounded-circle" alt="">
                        <div id="senior-content">
                            <h4>Senior Chef Ajay Thallapathy</h4>
                            <p>The Kitchen wizard who never fails the customers</p>
                        </div>
                    </div>
                    <div class="col-md-3 col">
                        <img src="images/rahabi.jpg" id="manager" class="img-responsive rounded-circle" alt="">
                        <div id="manager-content">
                            <h4>Manager Alex Devonte Dr.</h4>
                            <p>The Guy behind the better motivation of the employees</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="newsletter">
            <div class="container">
                <div class="row" align="center">
                    <div class="col-md-12">
                        <h5>SIGN UP TO OUR NEWSLETTERS</h5>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col">
                        <div class="advert">
                            <h6>Get Latest promotions from us</h6>
                            <p>Be the first one to enjoy our offers</p>
                            <i class="glyphicon glyphicon-hand-right"></i>
                        </div>
                    </div>

                    <div class="col-md-8 col form-pad">
                            <form action="#" method="post" class="form-inline">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="Your name">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Your email">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Sign Up">
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php include('footer.php'); ?>
    </section>




<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function(){
        var owl = $('.owl-carousel');
        owl.owlcarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true
        });
    });
</script>
<script>
    $(document).ready(function(){
        $('.junior-content').hide();
        $('#manager-content').hide();
        $('#senior-content').hide();
        $('.hr-content').hide();

        $('#junior-chef').hover(function(){
            $('.junior-content').toggle(2000);
        });
    });
</script>
<script>
    $(document).ready(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 210,
    itemMargin: 5
  });
});
</script>
<script>
    $('.carousel').carousel({
  interval: 2000
});
</script>
<script>
$(document).ready(function(){
    $('#lunch1').hide();
    $('#dessert1').hide();
    $('#dinner1').hide();

    $('#showlunch').click(function() {
        $('#lunch1').show();
        $('#breakfast1').hide();
        $('#dessert1').hide();
        $('#dinner1').hide();

    });

    $('#breakfast').click(function() {
        $('#lunch1').hide();
        $('#breakfast1').show();
        $('#dessert1').hide();
        $('#dinner1').hide();

    });

    $('#showdessert').click(function() {
        $('#lunch1').hide();
        $('#breakfast1').hide();
        $('#dessert1').show();
        $('#dinner1').hide();

    });

    $('#showdinner').click(function() {
        $('#lunch1').hide();
        $('#breakfast1').hide();
        $('#dessert1').hide();
        $('#dinner1').show(2000);

    });
});

</script>

</body>
</html>