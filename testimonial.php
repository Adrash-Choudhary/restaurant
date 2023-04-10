<?php include "connection/conn.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Maarjan Foods</title>
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
 <?php include "nav-bar.php" ?>
        <!-- Navbar & Hero End -->

<div class="container-fluid bg-dark bg-img p-5 mb-5">
<div class="row">
<div class="col-12 text-center">
<h1 class="display-4 text-uppercase text-white"></h1>
<a href="#"></a>
<i class="far fa-square text-primary px-2"></i>
<a href="">Testimonial</a>
</div>
</div>
</div>

        <!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container">
<div class="text-center">
<h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
<h1 class="mb-5">Our Customer Say!!!</h1>
</div>

<div class="owl-carousel testimonial-carousel">
<div class="testimonial-item bg-transparent border rounded p-4">
<i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
<p align="justify">A really nice restaurant with good food and service.Has really nice ambiance as well.</p>
<div class="d-flex align-items-center">
<img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonialjpg" style="width: 50px; height: 50px;">
<div class="ps-3">
<h5 class="mb-1">Puja Gupta</h5>
</div>
</div>
</div>

<div class="testimonial-item bg-transparent border rounded p-4">
<i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
<p align="justify">Good food and has a variety of cuisines to offer. Nice place if people want to try different types of food.</p>
<div class="d-flex align-items-center">
<img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonialjpg" style="width: 50px; height: 50px;">
<div class="ps-3">
<h5 class="mb-1">Prateek Kumar</h5>
</div>
</div>
</div>

<div class="testimonial-item bg-transparent border rounded p-4">
<i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
<p align="justify">If u are looking for a multi cuisine restaurant with best food and the best prices and the best location then this is the place to be. It's got almost everything going for it that no other restaurant currently offers in patna.
The Chinese food here is pretty good.</p>
<div class="d-flex align-items-center">
<img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonialjpg" style="width: 50px; height: 50px;">
<div class="ps-3">
<h5 class="mb-1">Ajit Sarkar</h5>
</div>
</div>
</div>

<div class="testimonial-item bg-transparent border rounded p-4">
<i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
<p align="justify">Best food great service to excellence and lil heavy on wallet.Its always great to have food here.
Fabulous place to enjoy with friends too.</p>
<div class="d-flex align-items-center">
<img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial.jpg" style="width: 50px; height: 50px;">
<div class="ps-3">
<h5 class="mb-1">Ratnesh Pandey</h5>
</div>
</div>
</div>
</div>
</div>
</div>
        <!-- Testimonial End -->
        

        <!-- Footer Start -->
<?php include "footer.php" ?>
        <!-- Footer End -->


        <!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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