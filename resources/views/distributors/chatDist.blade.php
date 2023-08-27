<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADD Note</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href='/css/stylee.css'>
	
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  

	<meta content="" name="description">
	<meta content="" name="keywords">
  
	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
  
	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">
  
	<!-- =======================================================
	* Template Name: iPortfolio - v1.5.1
	* Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
	* Author: BootstrapMade.com
	* License: https://bootstrapmade.com/license/
	======================================================== -->
  
  


</head>
<body>
	<header id="header">
		<div class="d-flex flex-column">
		<div class="body">
		  <div class="profile">
			<img src="assets/img/profilePhoto.jpg" alt="" class="img-fluid rounded-circle" id="profileimage">
			<h1 class="text-light"><a href="index.html" id="name">Profiles</a></h1>
			
		  <nav class="nav-menu">
			<ul>
				<li class="active"><a href="{{ url('/distributors.chatDist') }}"><i class="bx bx-envelope"></i> <span>My Inbox</span></a></li>
				
				<li><a href="{{ url('/order.distAll') }}"><i class="bx bx-envelope"></i> <span>Send Order</span></a></li>
					  <li><a href="{{ url('/order.showOrder') }}"><i class="bx bx-envelope"></i> <span>Show Order</span></a></li>
					 <li><a href="{{ url('/all.eDeleteDist') }}"><i class="bx bx-envelope"></i> <span>Delete Distributors</span></a></li>
					
		  
			  </ul>
		  </nav><!-- .nav-menu -->
		  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
	
		</div>
	  </header><!-- End Header -->
	  <main id="main">
		<!-- ======= About Section ======= -->
		<section id="about" class="about">
<div class="container">
	<div class="header"><h1>Order Chat</h1></div>
	<div class="body" id='med'>
		@foreach ( $distributors as $row)
		<div class="fofo">
			<li><i class="icofont-rounded-right"></i> <strong>To Pharmist:</strong> {{$row['uname'] }}</li>
			
            <li><i class="icofont-rounded-right"></i> <strong>Distributors:</strong> {{$row['dname'] }}</li>
			<li><i class="icofont-rounded-right"></i> <strong>Message:</strong> {{$row['message'] }}</li>
			<li><i class="icofont-rounded-right"></i> <strong>Sent At:</strong> {{ $row['created_at'] }}</li>
		
		  
	</div>
	@endforeach
	

</div>

</section><!-- End About Section -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<script src="/js/mainn.js"></script>

</body>
</html>