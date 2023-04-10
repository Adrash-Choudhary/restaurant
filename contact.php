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
<a href=""></a>
<i class="far fa-square text-primary px-2"></i>
<a href="">Contact Us</a>
</div>
</div>
</div>


<?php

if(isset($_POST['btnsend']))
{
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Subject = $_POST['subject'];
	$Msg = $_POST['message'];
	
$query="INSERT INTO contact(Name,Email,Subject,Message)
VALUES
('$Name','$Email','$Subject','$Msg')";
$result= mysqli_query($conn,$query);		
		
    }
?>

        <!-- Contact Start -->
<div class="container-xxl py-5">
<div class="container">
<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
<h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
<h1 class="mb-5">Contact For Any Query</h1>
</div>

<div class="row g-4">
<div class="col-12">


</div>
<div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
<iframe class="position-relative rounded w-100 h-100"
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.518432046596!2d85.1262044169667!3d25.62091377618557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed5849148625dd%3A0x12eb8c23b94c81e7!2sBuddha%20Colony%20Main%20Rd%2C%20Patna%2C%20Bihar%20800001!5e0!3m2!1sen!2sin!4v1677267505422!5m2!1sen!2sin"
frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
tabindex="0"></iframe>
</div>
<div class="col-md-6">
<div class="wow fadeInUp" data-wow-delay="0.2s">

<form action="" method="post">
<div class="row g-3">
<div class="col-md-6">
<div class="form-floating">
<input type="text" class="form-control" name="name" placeholder="Your Name">
<label for="name">Your Name <span class="text-danger">*</span></label>
</div>
</div>

<div class="col-md-6">
<div class="form-floating">
<input type="email" class="form-control" name="email" placeholder="Your Email">
<label for="email">Your Email <span class="text-danger">*</span></label>
</div>
</div>

<div class="col-12">
<div class="form-floating">
<input type="text" class="form-control" name="subject" placeholder="Subject" >
<label for="subject">Subject <span class="text-danger">*</span></label>
</div>
</div>

<div class="col-12">
<div class="form-floating">
<input type="text" class="form-control" name="number" placeholder="your number" maxlength="10" >
<label for="subject">Mobile <span class="text-danger">*</span></label>
</div>
</div>


<div class="col-12">
<div class="form-floating">
<textarea class="form-control" placeholder="Leave a message here" name="message" style="height: 150px" ></textarea>
<label for="message">Message <span class="text-danger">*</span></label>
</div>
</div>

<div class="col-12">
<button class="btn btn-primary w-100 py-3" name="btnsend" type="submit">Send Message</button>
</div>

</div>
</form>
</div>
</div>
</div>
</div>
</div>
        <!-- Contact End -->


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
