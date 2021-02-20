<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>
    <script src="JS/admin.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="CSS/sidebar2.css">
    
    <title>Document</title>
</head>
<body>

    <section class="mysidebar">
        <nav class="col-md-2 d-none d-md-block sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Newsletters
                </a>
              </li>
              <li class="nav-item">
                    <a href="#orders" data-toggle="collapse" class="nav-link" aria-expanded="false">Orders</a>
                    <ul class="collapse list-unstyled" id="orders">
                        <li nav-item><a class="nav-link" href="neworders.php">New Orders</a></li>
                        <li><a class="nav-link" href="allorders.php">Approved Orders</a></li>
                        <li><a class="nav-link" href="cancelled.php">Cancelled Orders</a></li>
                    </ul>
                </li>
              <li class="nav-item">
                    <a href="#tables" data-toggle="collapse" class="nav-link" aria-expanded="false">Manage Tables</a>
                    <ul class="collapse list-unstyled" id="tables">
                        <li><a class="nav-link" href="alltable.php">All tables</a></li>
                        <li><a class="nav-link" href="add-table.php">Add table</a></li>
                        <li><a class="nav-link" href="booked-tables.php">Booked tables</a></li>
                    </ul>
              </li>
              <li class="nav-item">
                    <a href="#reservations" class="nav-link" data-toggle="collapse" aria-expanded="false">Reservations</a>
                    <ul class="collapse list-unstyled" id="reservations">
                        <li class="nav-item"><a class="nav-link" href="newreserve.php">New Reservations</a></li>
                        <li class="nav-item"><a class="nav-link" href="allreserve.php">Approved Reservations</a></li>
                        <li class="nav-item"><a class="nav-link" href="cancelled.php">Cancelled Reservations</a></li>
                    </ul>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>
    </section>
    
</body>
</html>