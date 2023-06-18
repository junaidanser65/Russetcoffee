<?php
    include'privilage.php';
    include'connection.php';
    include'function.php';

    $result = display_data_admins();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Russet Coffee</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xl position-relative p-0 py-lg-5 bg-dark">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fas fa-mug-hot"></i>Russet Coffee</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="panel.php" class="nav-item nav-link">Orders</a>
                        <a href="panel_booking.php" class="nav-item nav-link">Bookings</a>
                        <a href="Booking_history.php" class="nav-item nav-link">Booking history</a>
                        <a href="admins.php" class="nav-item nav-link active">Admins</a>
                        <a href="panel_contact.php" class="nav-item nav-link">Contacts</a>
                        <a href="tables.php" class="nav-item nav-link">Tables</a>
                        <a href="completed.php" class="nav-item nav-link">Completed</a>
                        <a href="cancelled.php" class="nav-item nav-link">Cancelled</a>
                    </div>
                    <form method="POST" action="logout.php"><button value="logout" name="submit" type="submit" class="btn btn-lg btn-primary btn-lg-square"><i class="fas fa-power-off"></i></button></form>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-2">
                    <form class="my-3 px-3 offset-md-3" method="POST" action="add_admin.php">
                        <div class="form-group form-floating animated slideInLeft col-lg-10 col-sm-7 py-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating animated slideInLeft col-lg-10 col-sm-7 py-3">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                    <label for="email">Email</label>
                        </div>
                        <div class="form-floating animated slideInLeft col-lg-10 col-sm-7 py-3">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                                    <label for="password">Password</label>
                        </div>
                        <div class="form-floating animated slideInLeft col-lg-10 col-sm-7 py-3">
                                    <input type="number" class="form-control" id="privilage" name="privilage" placeholder="privilage" max="1" min="0" value="0" required>
                                    <label for="privilage">Privilage</label>
                        </div>
                        <button name="submit" class="btn btn-primary col-8 col-lg-8 col-md-5 col-sm-7 py-3 offset-md-1 offset-2 animated slideInLeft" type="submit" value="Add">Add</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid ">
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm table-responsive-md table-responsive-lg card-body align-item-center">
                        <table class="table-dark-striped table-bordered text-center offset-xl-1 offset-lg-1">
                            <tr class="bg-dark text-white">
                                <td class="px-5">ID</td>
                                <td class="px-5">Name</td>
                                <td class="px-5">Email</td>
                                <td class="px-5">Password</td>
                                <td class="px-5">Privilage</td>
                                <td class="px-5">Delete</td>
                            </tr>
                            <tr>
                                <?php
                                    while($row = mysqli_fetch_assoc($result)){
                                ?>
                                  
                                <td><?php echo $row['ID']; ?></td>
                                <td><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['Email']; ?></td>
                                <td><?php echo $row['Password']; ?></td>
                                <td><?php echo $row['privilage']; ?></td>
                                <td><a class="btn btn-danger px-2" href="admin_delete.php?deleteid=<?php echo $row['ID']; ?>">Delete</a>
                            </tr>  
                                <?php
                                    }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-sm btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>