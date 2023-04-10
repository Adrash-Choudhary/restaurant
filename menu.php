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
<a href="">Menu & Pricing</a>
</div>
</div>
</div>

        <!-- Menu Start -->
<div class="container-xxl py-5">
<div class="container">
<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
<h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
<h1 class="mb-5">Most Popular Items</h1>
</div>

<div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
<ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
<i class="fa fa-coffee fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">Popular</small>
<h6 class="mt-n1 mb-0">Mojito</h6>
</div>
</a>
</li>

<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
<i class="fa fa-hamburger fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">Special</small>
<h6 class="mt-n1 mb-0">Shakes</h6>
</div>
</a>
</li>

<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
<i class="fa fa-utensils fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">Chinese</small>
<h6 class="mt-n1 mb-0">Rolls</h6>
</div>
</a>
</li>

<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
<i class="fa fa-utensils fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">Chinese</small>
<h6 class="mt-n1 mb-0">STARTER</h6>
</div>
</a>
</li>

<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-5">
<i class="fa fa-utensils fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">Delicious</small>
<h6 class="mt-n1 mb-0">PASTA</h6>
</div>
</a>
</li>

<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-6">
<i class="fa fa-utensils fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">Light</small>
<h6 class="mt-n1 mb-0">STARTER</h6>
</div>
</a>
</li>

<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-7">
<i class="fa fa-hamburger fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">Special</small>
<h6 class="mt-n1 mb-0">BURGER</h6>
</div>
</a>
</li>

<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-8">
<i class="fa fa-hamburger fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">Special</small>
<h6 class="mt-n1 mb-0">DESSERTS</h6>
</div>
</a>
</li>


<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-9">
<i class="fa fa-hamburger fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">Special</small>
<h6 class="mt-n1 mb-0">BREADS</h6>
</div>
</a>
</li>

<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-10">
<i class="fa fa-hamburger fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">Special</small>
<h6 class="mt-n1 mb-0">SOUP</h6>
</div>
</a>
</li>

<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-11">
<i class="fa fa-hamburger fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">Chinese</small>
<h6 class="mt-n1 mb-0">ITEM</h6>
</div>
</a>
</li>

<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-12">
<i class="fa fa-hamburger fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">American</small>
<h6 class="mt-n1 mb-0">VEG PIZZA</h6>
</div>
</a>
</li>

<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-13">
<i class="fa fa-hamburger fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">American</small>
<h6 class="mt-n1 mb-0">NON-VEG PIZZA</h6>
</div>
</a>
</li>

<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-14">
<i class="fa fa-hamburger fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">Desi</small>
<h6 class="mt-n1 mb-0">VEG PIZZA</h6>
</div>
</a>
</li>

<li class="nav-item">
<a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-15">
<i class="fa fa-hamburger fa-2x text-primary"></i>
<div class="ps-3">
<small class="text-body">Desi</small>
<h6 class="mt-n1 mb-0">NON-VEG PIZZA</h6>
</div>
</a>
</li>

</ul>
					
<div class="tab-content">
<div id="tab-1" class="tab-pane fade show p-0 active">
<div class="row g-4">
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/mojito1." alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Green Apple</span>
<span class="text-primary">RS79</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/mojito5." alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Water Melon</span>
<span class="text-primary">RS79</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/mojito4." alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Blue Mint</span>
<span class="text-primary">RS79</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/mojito6." alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Black current</span>
<span class="text-primary">RS79</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/mojito2." alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Orange Punch</span>
<span class="text-primary">RS79</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/mojito1." alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Mint Mojito</span>
<span class="text-primary">RS79</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

</div>
</div>

<div id="tab-2" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes1." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Butter Scotch</span>
<span class="text-primary">RS99</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes2." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Vainilla</span>
<span class="text-primary">RS99</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes3." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Straw Berry</span>
<span class="text-primary">RS99</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes4." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Chocolet</span>
<span class="text-primary">RS99</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes5." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Kitkat</span>
<span class="text-primary">RS129</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Oreo Chocolate</span>
<span class="text-primary">RS129</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes7." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Cold Coffee</span>
<span class="text-primary">RS99</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

</div>
</div>

<div id="tab-3" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/roll1." alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Veg Roll</span>
<span class="text-primary">RS39</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/roll2." alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Paneer Roll</span>
<span class="text-primary">RS69</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/roll3." alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Paneer Chilli Roll</span>
<span class="text-primary">RS99</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/roll4." alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Double Egg Roll</span>
<span class="text-primary">RS45</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/roll5." alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Chicken Roll</span>
<span class="text-primary">RS99</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/roll6." alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Fried Chicken Roll</span>
<span class="text-primary">RS120</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/roll7." alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Chicken Popcorn Roll</span>
<span class="text-primary">RS110</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/roll8." alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Aallo Masala Roll</span>
<span class="text-primary">RS59</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

</div>
</div>

<div id="tab-4" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CHILLY POTATO</span>
<span class="text-primary">RS140</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>HONEY CHILLY</span>
<span class="text-primary">RS150</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>MUSHROOM CHILLY</span>
<span class="text-primary">RS180</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>PANEER CHILLY</span>
<span class="text-primary">RS180</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CHICKEN CHILLY</span>
<span class="text-primary">RS200</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>EGG CHILLY</span>
<span class="text-primary">RS180</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

</div>
</div>


<div id="tab-5" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>REO SAUCE PASTA VEG</span>
<span class="text-primary">RS120</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>REO SAUCE PASTA NON-VEG</span>
<span class="text-primary">RS150</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>MIX SAUCE PASTA VEG</span>
<span class="text-primary">RS120</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>MIX SAUCE PASTA NON-VEG</span>
<span class="text-primary">RS150</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>WHITE SAUCE ALFREDO VEG</span>
<span class="text-primary">RS120</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>WHITE SAUCE ALFREDO NON-VEG</span>
<span class="text-primary">RS150</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

</div>
</div>

<div id="tab-6" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CHEES POTOTO POP</span>
<span class="text-primary">RS90</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CHEESE CORN NUGGETS</span>
<span class="text-primary">RS90</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CHEESE PIZZA FINGER</span>
<span class="text-primary">RS90</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>FRENCH FRIES</span>
<span class="text-primary">RS90</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>PERI PERI FRENCH FRIES</span>
<span class="text-primary">RS109</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>SIGNATURE FRENCH FRIES</span>
<span class="text-primary">RS149</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>LOADED FRENCH FRIES</span>
<span class="text-primary">RS169</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>


<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CHICKEN NUGGETS</span>
<span class="text-primary">RS99</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

</div>
</div>

<div id="tab-7" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>EGG BURGER</span>
<span class="text-primary">RS49</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>ALOO TIKKI BURGER</span>
<span class="text-primary">RS45</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>VEG BURGER</span>
<span class="text-primary">RS79</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>PANEER BURGER</span>
<span class="text-primary">RS99</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CHICKEN PATTY BURGER</span>
<span class="text-primary">RS99</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>FRIED CHICKEN BURGER</span>
<span class="text-primary">RS120</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>
</div>
</div>

<div id="tab-8" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>ICE CREAM SCOOP</span>
<span class="text-primary">RS65</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>BROWNIE</span>
<span class="text-primary">RS90</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>BROWNIE WITH ICE CREAM</span>
<span class="text-primary">RS125</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>SIZZLING BROWNIE</span>
<span class="text-primary">RS150</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

</div>
</div>

<div id="tab-9" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>GARLIC BREAD</span>
<span class="text-primary">RS75</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CHEESE GARLIC BREAD</span>
<span class="text-primary">RS99</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>SUPREME GARLIC BREAD</span>
<span class="text-primary">RS140</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>STUFFED GARLIC BREAD</span>
<span class="text-primary">RS125</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

</div>
</div>

<div id="tab-10" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Veg manchau soup</span>
<span class="text-primary">RS60/80</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/" alt="" style="width: 80px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>Hot and shower soup</span>
<span class="text-primary">RS60/80</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>


</div>
</div>

<div id="tab-11" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes1." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>SCHEZWAN NOODLES</span>
<span class="text-primary">RS60/100</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes2." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>VEG. NOODLES</span>
<span class="text-primary">RS50/80</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes3." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>PANEER NOODLES</span>
<span class="text-primary">RS60/110</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes4." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>PANEER CHILLY</span>
<span class="text-primary">RS90/160</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes5." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>VEG. MANCHURIAN</span>
<span class="text-primary">RS60/100</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>MASHROOM CHILLY</span>
<span class="text-primary">RS90/170</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>VEG. FRIED RICE</span>
<span class="text-primary">RS50/90</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>


<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>PANEER FRIED RICE</span>
<span class="text-primary">RS60/110</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>SCHEZWAN FRIED RICE</span>
<span class="text-primary">RS60/110</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>


<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>BABY CHILLY</span>
<span class="text-primary">RS90/170</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>


<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>PANEER MANCHURIYAN</span>
<span class="text-primary">RS80/170</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>


<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>EGG NOODLES</span>
<span class="text-primary">RS70/120</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>


<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CHICKEN NOODLES</span>
<span class="text-primary">RS80/140</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>


<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CHICKEN CHILLY</span>
<span class="text-primary">RS100/180</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>


<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>EGG FRIED RICE</span>
<span class="text-primary">RS70/120</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>



<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CHICKEN FRIED RICE</span>
<span class="text-primary">RS80/140</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>LOLI POP (6 PC)</span>
<span class="text-primary">RS200</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes7." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>LEG FRIED CHICKEN</span>
<span class="text-primary">RS145</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

</div>
</div>


<div id="tab-12" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes1." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>MARGHERITA PIZZA</span>
<span class="text-primary">RS99/240/450</span>
</h5>
<small class="fst-italic">LOTS OF CHEESE</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes2." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>VEG BITE</span>
<span class="text-primary">RS165/300/499</span>
</h5>
<small class="fst-italic">Cheese capsicum tomato onion</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes3." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CORN FRENCH FRY PIZZA</span>
<span class="text-primary">RS160/300/499</span>
</h5>
<small class="fst-italic"></small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes4." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>SPICE MUSHROOM</span>
<span class="text-primary">RS190/350/550</span>
</h5>
<small class="fst-italic">Cheese chilly mushroom garlic sweet corn</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes5." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>AMERICAN HOT</span>
<span class="text-primary">RS190/350/550</span>
</h5>
<small class="fst-italic">Cheese capsicum onion beby corn jalapeno</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>MEXICAN PIZZA</span>
<span class="text-primary">RS210/380/600</span>
</h5>
<small class="fst-italic">Sweet corn chill black olives tomato</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>SPICE - HOT</span>
<span class="text-primary">RS249/450/650</span>
</h5>
<small class="fst-italic">Cheese capsicum spicy paneer olives jalapeno</small>
</div>
</div>
</div>


<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>SWADU SPECIAL</span>
<span class="text-primary">RS249/450/650</span>
</h5>
<small class="fst-italic">cheese onion capsicum mushroom
paneer sweet corn tomato olives</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CHEESE BURST</span>
<span class="text-primary">RS249/450/650</span>
</h5>
<small class="fst-italic">3 kind of cheese onion capsicum paneer jalapeno</small>
</div>
</div>
</div>
</div>
</div>

<div id="tab-13" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes1." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>HOT STUFF</span>
<span class="text-primary">RS220/400/600</span>
</h5>
<small class="fst-italic">Cheese capsicum chilly herbed chicken tomato</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes2." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>MEXICAN TIKKA</span>
<span class="text-primary">RS250/420/620</span>
</h5>
<small class="fst-italic">Cheese Mushroom baby corn mexican
chicken jalapino</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes3." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>TEX BBQ</span>
<span class="text-primary">RS250/420/620</span>
</h5>
<small class="fst-italic">Sweet corn Chicken Sausaga bbq chicken olives</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes4." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>MEWTEAR</span>
<span class="text-primary">RS260/450/650</span>
</h5>
<small class="fst-italic">Cheese onion chicken sausage BBQ chicken Mexican chicken jalapeno</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes5." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>PEPPRONI PLUS</span>
<span class="text-primary">RS280/410/650</span>
</h5>
<small class="fst-italic">Cheese & lots of chicken pepproni</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>MOMBO COMBO</span>
<span class="text-primary">RS300/499/699</span>
</h5>
<small class="fst-italic">Cheese Onion chicken sausage Mexican chicken mix pepper</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CHEESE BURST</span>
<span class="text-primary">RS299/499/699</span>
</h5>
<small class="fst-italic">3 kind of cheese onion capsicum BBQ chicken jalapeno
</small>
</div>
</div>
</div>


<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>SWADU SPECIAL</span>
<span class="text-primary">RS249/450/650</span>
</h5>
<small class="fst-italic">cheese onion capsicum mushroom
paneer sweet corn tomato olives</small>
</div>
</div>
</div>

</div>
</div>


<div id="tab-14" class="tab-pane fade show p-0">
<div class="row g-4">
<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes1." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>TANDOORI PANEER</span>
<span class="text-primary">RS200/380/550</span>
</h5>
<small class="fst-italic">Cheese onion Tandoori paneer capsicum tomato coriander</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes2." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>BALLE BALLE</span>
<span class="text-primary">RS220/400/590</span>
</h5>
<small class="fst-italic">Cheese onion spicy paneer chilly coriander</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes3." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>PANEER TIKKA</span>
<span class="text-primary">RS250/450/620</span>
</h5>
<small class="fst-italic">Cheese onion paneer tikka mix paper coriander</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes4." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>YUMMY YUMMY</span>
<span class="text-primary">RS260/450/650</span>
</h5>
<small class="fst-italic">Cheese onion spicy paneer sweet corn mushroom tomato</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes5." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>YUM DUM</span>
<span class="text-primary">RS250/420/600</span>
</h5>
<small class="fst-italic">Cheese onion spicy paneer garlic palak coriander</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>PANEER LOADED</span>
<span class="text-primary">RS260/450/650</span>
</h5>
<small class="fst-italic">Cheese onion spicy paneer tandoori pinner mix paper coriander</small>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="d-flex align-items-center">
<img class="flex-shrink-0 img-fluid rounded" src="img/shakes6." alt="" style="width: 50px;">
<div class="w-100 d-flex flex-column text-start ps-4">
<h5 class="d-flex justify-content-between border-bottom pb-2">
<span>CHATPATTA PANEER</span>
<span class="text-primary">RS260/420/650</span>
</h5>
<small class="fst-italic">Cheese sweet corn chatpatta paneer
tomato coriander</small>
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
		
		
		
		
        <!-- Menu Image -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container">
<div class="text-center">
<h5 class="section-title ff-secondary text-center text-primary fw-normal">We Serve</h5>
<h1 class="mb-5">Our Menu!!!</h1>
</div>

<div class="owl-carousel testimonial-carousel">
<div class="testimonial-item bg-transparent border rounded p-4">
<div class="">
<img class="img-fluid " src="img/m1.jpg" style="width: 800px; height: 400px;">

</div>
</div>

<div class="testimonial-item bg-transparent border rounded p-4">
<div class="">
<img class="img-fluid" src="img/m2.jpg" style="width: 800px; height: 400px;">
</div>
</div>

<div class="testimonial-item bg-transparent border rounded p-4">
<div class="">
<img class="img-fluid" src="img/m3.jpg" style="width: 800px; height: 400px;">
</div>
</div>

<div class="testimonial-item bg-transparent border rounded p-4">
<div class="">
<img class="img-fluid" src="img/m4.jpg" style="width: 800px; height: 400px;">
</div>
</div>
</div>
</div>
</div>
		<!-- Menu Image End -->

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