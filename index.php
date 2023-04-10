<?php include "connection/conn.php" ?>

<!DOCTYPE html>
<html lang="en">

<?php include "header.php" ?>

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

<div class="container-xxl py-5 bg-dark hero-header mb-5">
<div class="container my-5 py-5">
<div class="row align-items-center g-5">
<div class="col-lg-6 text-center text-lg-start">
<h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Food</h1>
<p class="text-white animated slideInLeft mb-4 pb-2" align="justify">Welcome to Maarjan Food, we offer a wide range of delicious 
and mouth-watering dishes that are sure to tantalize your taste buds. 
Our expert chefs use only the freshest and finest ingredients to prepare each dish, ensuring a delectable and 
satisfying culinary experience for every customer. 
Come and enjoy our delicious food today, and discover why we are one of the most beloved restaurants in town.</p>
</div>

<div class="col-lg-6 text-center text-lg-end overflow-hidden">
<img class="img-fluid" src="img/hero...png" alt="">
</div>
</div>
</div>
</div>


        <!-- Service Start -->
<div class="container-xxl py-5">
<div class="container">
<div class="row g-4">
<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
<div class="service-item rounded pt-3">
<div class="p-4">
<i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
<h5>Free Home Delivery</h5>
<p align="justify">We understand that sometimes you just want to enjoy your favourite meal from the comfort of your own home. 
That's why we are excited to offer free home delivery services to our valued customers!</p>
</div>
</div>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
<div class="service-item rounded pt-3">
<div class="p-4">
<i class="fa fa-3x fa-utensils text-primary mb-4"></i>
<h5>Quality Food</h5>
<p align="justify">At Maarjan Food , we believe that quality is the key to a great dining experience. 
That's why we take great pride in using only the freshest and highest quality ingredients in all of our dishes, 
ensuring that every bite is packed with flavour and nutrition.</p>
</div>
</div>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
<div class="service-item rounded pt-3">
<div class="p-4">
<i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
<h5>Order on Call</h5>
<p>For any order direct call us on given number, we serve you at your door.
<br>0612-4081955, 8797113311</p>
</div>
</div>
</div>

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
<div class="service-item rounded pt-3">
<div class="p-4">
<i class="fa fa-3x fa-headset text-primary mb-4"></i>
<h5>Help</h5>
<p>We're happy to help you.<br>Call Us: 0612-4081955, 8797113311</p>
</div>
</div>
</div>
</div>
</div>
</div>
        <!-- Service End -->


        <!-- About Start -->
<div class="container-xxl py-5">
<div class="container">
<div class="row g-5 align-items-center">
<div class="col-lg-6">
<div class="row g-3">
<div class="col-6 text-start">
<img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/a4.jpg">
</div>
<div class="col-6 text-start">
<img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/a2.jpg" style="margin-top: 25%;">
</div>
<div class="col-6 text-end">
<img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/a4.jpg">
</div>
<div class="col-6 text-end">
<img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/a4.jpg">
</div>
</div>
</div>
<div class="col-lg-6">
<h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
<h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Maarjan Foods</h1>
<p class="mb-4">Welcome to Maarjan Food, where we take fast food to a whole new level! 
We are a fast-food restaurant that specializes in serving delicious and satisfying meals that are perfect 
for people on the go.</p>
<p class="mb-4">Our menu is filled with a variety of options, including classic favourites like burgers, fries, 
Chinese foods, sakes, beverages and pizza. 
we understand that our customers value convenience, quality, and affordability. 
That's why we pride ourselves on offering fast and friendly service that doesn't sacrifice on taste or quality. 
We use only the freshest and highest quality ingredients in all of our dishes, ensuring that every bite is 
packed with flavour and nutrition.
</p>
<div class="row g-4 mb-4">
<div class="col-sm-6">
<div class="d-flex align-items-center border-start border-5 border-primary px-3">
<h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">5</h1>
<div class="ps-4">
<p class="mb-0">Years of</p>
<h6 class="text-uppercase mb-0">Experience</h6>
</div>
</div>
</div>

<div class="col-sm-6">
<div class="d-flex align-items-center border-start border-5 border-primary px-3">
<h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">9999</h1>
<div class="ps-4">
<p class="mb-0">Satisfied</p>
<h6 class="text-uppercase mb-0">Customer</h6>
</div>
</div>
</div>

</div>
<a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
</div>
</div>
</div>
</div>
        <!-- About End -->


        


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
<img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial.jpg" style="width: 50px; height: 50px;">
<div class="ps-3">
<h5 class="mb-1">Puja Gupta</h5>
</div>
</div>
</div>
<div class="testimonial-item bg-transparent border rounded p-4">
<i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
<p align="justify">Good food and has a variety of cuisines to offer. Nice place if people want to try different types of food</p>
<div class="d-flex align-items-center">
<img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonia.jpg" style="width: 50px; height: 50px;">
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
<img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial.jpg" style="width: 50px; height: 50px;">
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
