<?php
    session_start();
    include'function.php';
    if(isset($_SESSION['o_stat'])){
        $o_stat = $_SESSION['o_stat'];
    }
    else{
        $o_stat = " ";
    }
    $_SESSION['o_stat'] = " ";
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
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fas fa-mug-hot"></i>Russet Coffee</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="menu.php" class="nav-item nav-link">Menu</a>
                        <a href="Shop.php" class="nav-item nav-link active">Shop</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.php" class="dropdown-item">Booking</a>
                                <a href="team.php" class="dropdown-item">Our Team</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="booking.php" class="btn btn-primary py-2 px-4">Book A Table</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Shop</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fas fa-mug-hot fa-3x text-primary mb-4"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Coffees</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>CAFFE LATTE</span>
                                                <span class="text-primary">$10</span>
                                            </h5>
                                            <small class="fst-italic">Fresh brewed coffee and steamed milk</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>COFFEE MOCHA</span>
                                                <span class="text-primary">$9</span>
                                            </h5>
                                            <small class="fst-italic">Espresso With Milk, and Whipped Cream</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>WHITE CHOCOLATE MOCHA</span>
                                                <span class="text-primary">$11</span>
                                            </h5>
                                            <small class="fst-italic">Espresso, White Chocolate, Milk, Ice and Cream</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>AMERICAN COFFEE</span>
                                                <span class="text-primary">$15</span>
                                            </h5>
                                            <small class="fst-italic">Espresso Shots and Light Layer of Cremas</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->

        <!-- Cart Start-->
        <div class="container-fluid">
            <div class="container py-5" >
                <div class="row g-5 justify-content-md-center">
                    <div class="col-lg-6 justify-content-md-center" >
                        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                                <li class="nav-item">
                                    <a class="d-flex align-items-center text-start mx-3 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                        <i class="fa fa-shopping-cart fa-3x text-primary mb-4"></i>
                                        <div class="ps-3">
                                            <small class="text-body">Order</small>
                                            <h6 class="mt-n1 mb-0">Coffees</h6>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div class="container-fluid" >
                                <div class="row g-5">
                                    <div class="col-lg-12">
                                        <form method="POST" action="make_order.php">
                                            <div class="form-floating my-3">
                                                <input type="text" class="form-control" id="Name" name="Name" placeholder="Name" maxlength="30" required>
                                                <label for="Name">Name</label>
                                            </div>
                                            <div class="form-floating my-3">
                                                <input type="Email" class="form-control" id="Email" name="Email" placeholder="Email" required>
                                                <label for="Email">Email</label>
                                            </div>
                                            <div class="form-floating my-3">
                                                <input type="text" class="form-control" id="Address" name="Address" placeholder="Address" required>
                                                <label for="Address">Address</label>
                                            </div>
                                            <div class="form-floating my-3">
                                                <input type="tel" class="form-control" id="Phone" name="Phone" placeholder="Phone" pattern="[0-9]{4}[0-9]{7}" maxlength="11" required>
                                                <label for="Phone">Phone: eg.03000000000</label>
                                            </div>
                                            <div class="form-floating my-3">
                                                <input type="number" class="form-control" id="CAFFE_LATTE" name="CAFFE_LATTE" placeholder="CAFFE LATTE" min="0" max="9" value="1" onchange="display_total()" required>
                                                <label for="CAFFE_LATTE">CAFFE LATTE</label>
                                            </div>
                                            <div class="form-floating my-3">
                                                <input type="number" class="form-control" id="COFFEE_MOCHA" name="COFFEE_MOCHA" placeholder="COFFEE MOCHA" min="0" max="9" value="1" onchange="display_total()" required>
                                                <label for="COFFEE_MOCHA">COFFEE MOCHA</label>
                                            </div>
                                            <div class="form-floating my-3">
                                                <input type="number" class="form-control" id="WHITE_CHOCOLATE_MOCHA" name="WHITE_CHOCOLATE_MOCHA" value="1" placeholder="WHITE CHOCOLATE MOCHA" min="0" max="9" onchange="display_total()" required>
                                                <label for="WHITE_CHOCOLATE_MOCHA">WHITE CHOCOLATE MOCHA</label>
                                            </div>
                                            <div class="form-floating my-3">
                                                <input type="number" class="form-control" id="AMERICAN_COFFEE" name="AMERICAN_COFFEE" value="1" placeholder="AMERICAN COFFEE" min="0" max="9" onchange="display_total()" required>
                                                <label for="AMERICAN_COFFEE">AMERICAN COFFEE</label>
                                            </div>
                                            <p class="text-primary animated slideInLeft"><?php echo $o_stat; ?></p>
                                            <h2 id="total_price">Total:    $45</h2>
                                            <button name="submit" class="btn btn-primary col-8 animated slideInLeft py-3" type="submit" value="Order">Order</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End-->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Reservation</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>DHA Phase 7, Karachi, Pakistan.</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+92 348 4783073</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@russetcoffee.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Greetings</h4>
                        <p>"Good morning! It's a great day to enjoy a delicious cup of coffee at Russet Coffee Shop. Stop by and see us today."</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Russet Coffee</a>, All Right Reserved.
                            Designed By <a class="border-bottom">Junaid Anser</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    
    <script>
        function display_total(){
            var num1 = parseInt(document.getElementById("CAFFE_LATTE").value);
            var num2 = parseInt(document.getElementById("COFFEE_MOCHA").value);
            var num3 = parseInt(document.getElementById("WHITE_CHOCOLATE_MOCHA").value);
            var num4 = parseInt(document.getElementById("AMERICAN_COFFEE").value);

            var total = ((num1)*10+(num2)*9+(num3)*11+(num4)*15);

            document.getElementById("total_price").innerHTML = "Total:    $" + total;
        }
    </script>

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