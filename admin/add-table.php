<?php include('admin-nav.php'); ?>
<?php include('includes/table-action.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Local Jquery -->
    <script src="Jquery/jquery-3.2.1.slim.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
   
   <!-- Local links -->
   <link rel="stylesheet" href="dist/css/bootstrap.min.css">
   
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include('sidebar2.php'); ?>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col">
                            <div class="add">
                                <form action="" method="post" class="form">
                                    <div class="form-group">
                                        <label for="">Table Type</label>
                                        <input type="text" class="form-control" name="tbl-type">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Purpose</label>
                                        <input type="text" class="form-control" name="purpose">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="add" value="ADD">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 col">
                        <?php 
                            $query = "SELECT * FROM alltables";
                            $result = mysqli_query($mysqli, $query);
                        
                        ?>
                            <div class="show">
                                <div class="card">
                                    <div class="car-header bg-info">
                                        <h5>Table information</h5>
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
                                            <tr>
                                                <thead>
                                                    <th>Table ID</th>
                                                    <th>Table Type</th>
                                                    <th>Puprpose</th>
                                                </thead>
                                            </tr>
                                            <?php while ($row = $result->fetch_assoc()):?>

                                            <tr>
                                                <td><?php echo $row['Table_ID'];?></td>
                                                <td><?php echo $row['Tabletype'];?></td>
                                                <td><?php echo $row['Purpose'];?></td>
                                            </tr>
                                            <?php endwhile ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>