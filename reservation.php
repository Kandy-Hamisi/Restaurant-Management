<?php include('navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="eatery-style.css">

    <title>Document</title>
</head>
<body>
    <section>
        <div class="heading-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col align-self-center">
                        <h2>RESERVE YOUR TABLE FOR ANY OCCASSIONS</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="reserve">
            <div class="container">
                <div class="row" align="center">
                    <div class="col-md-12">
                        <h5>Fill in the Forms</h5>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col">
                        <form action="reserve-action.php" method="POST">
                            <div class="card">
                                <div class="card-header bg-magenta">
                                    <h1>Personal Information</h1>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">First Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="phone" class="form-control" name="phone" placeholder="Your phone number">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" name="email" id="" placeholder="Enter email">                    
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-6 col">
                        <div class="card">
                        <?php $mysqli = mysqli_connect('localhost', 'said', '#Password2021', 'Eatery');
                            $query = "SELECT * FROM alltables";
                            $result = mysqli_query($mysqli, $query);


                        ?>
                        
                            <div class="card-header bg-info">
                                <h1>Reservation Information</h1>                        
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                        <label for="">Table Type</label>
                                        <select class="form-control" name="table" id="">

                                            <option value="">Please select Table</option>
                                        <?php
                                            // $row = mysqli_num_rows($result);                                                                       
                                        ?>
                                        <?php //if($row == 0):?>
                                            <br>No records found</br>
                                        <?php //endif;?>
                                        
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label for="">Purpose</label>
                                        <?php //while ($row = $result->fetch_assoc()):  ?>
                                           
                                        <select class="form-control" name="purpose" id="">
                                            <option value="" selected>Select</option>
                                            <?php while ($row = mysqli_fetch_array($result)):?>
                                            <option value="<?php echo $row[0]; ?>"><?php echo $row[2]; ?></option>
                                            <!-- <option value="celebration">Celebration</option>
                                            <option value="birthday">Birthday</option>
                                            <option value="casual">Casual</option> -->
                                            <?php endwhile; ?>
                                        </select>
                                    
                                </div>
                                <div class="form-group">
                                        <label for="">Meal Deal</label>
                                        <select class="form-control" name="meal" id="">
                                            <option value="" selected>Select</option>
                                            <option value="breakfast">Beakfast</option>
                                            <option value="lunch">Lunch</option>
                                            <option value="dinner">Dinner</option>                                   
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input class="form-control" type="date" name="date" id="">
                                </div>
                                <div class="form-group">
                                    <label for="">Time</label>
                                    <input class="form-control" name="time" type="time" >
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="save" class="btn btn-primary">Submit</button>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="take-me">
            <div class="container">
                <div class="row" align="center">
                    <div class="col-md-12 col">
                        <p>Have You reserved your space? Click the button below</p>
                        <a href="" class="btn btn-success">Order Food</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>