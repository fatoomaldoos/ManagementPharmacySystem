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
	<link href="/css.style.css" rel="stylesheet">
	<!-- =======================================================
	* Template Name: iPortfolio - v1.5.1
	* Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
	* Author: BootstrapMade.com
	* License: https://bootstrapmade.com/license/
	======================================================== -->
	<meta charset="utf-8">
	<!-- IE Compatibility meta-->
	<meta http-equiv="X-UA-Compatible"content="IE=edge">
	<!--first mobile meta-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--bootstrap -->
	<link rel="stylesheet" href="/css/css boot/bootstrap.css" />
	<!--[if lt IE 9]-->
	<script src="/js/html5shiv.min.js"></script>
	<script src="/js/respond.min.js"></script>
	<!--css -->
	<link rel="stylesheet" href="/css/myTamplate.css" />
   
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="H1.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="file:///E:/jquery.js"></script>
   
	  <!-- Font Awesome icons (free version)-->
	  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
	  <!-- Google fonts-->
	  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
	  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
	  <!-- Core theme CSS (includes Bootstrap)-->
	  <link href="css/styles.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
	<link rel="stylesheet" href="style/main.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

	  <!-- font awesome -->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	  <!--Import Google Icon Font-->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <!-- Compiled and minified CSS -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	  
  


</head>
<body>

	  <main id="main">
		 
		<!-- ======= About Section ======= -->
		<section id="about" class="about">
<div class="container">
	<div class="header"><h1>{{ $uname }}</h1></div>
	<div class="body" id='med'>
		@foreach ( $distributors as $row)
		<div class="fofo">
			<li><i class="icofont-rounded-right"></i> <strong>To:</strong> {{$row['uname'] }}</li>
			<li><i class="icofont-rounded-right"></i> <strong>Message:</strong> {{$row['message'] }}</li>
			<li><i class="icofont-rounded-right"></i> <strong>Sent At:</strong> {{ $row['created_at'] }}</li>
		
		  
	</div>
	@endforeach
	

</div>

</section><!-- End About Section -->
<div class="myNewAccount">
	<div style="color: red">{{ session('msg') }}</div>
    <form class="col-md-12" action="{{ url('/distributors.replayDist') }}" method="POST" enctype="multipart/form-data">
      @csrf
      {{ csrf_field() }}
	  <input  type="number" name="dcounter" value="{{$note->dcounter+1}}" style="visibility:hidden" id="products">
	  <div>
		<label for="validationCustomUsername" class="form-label">To</label>
		<div class="input-group has-validation">
		  <span class="input-group-text" id="inputGroupPrepend">@</span>
		  <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="uname" required>
		</div>
   
     <div>
       <label for="validationCustom05" class="form-label">Message</label>
       <!--<input type="textearea" class="form-control" id="validationCustom05" name="medname" required>-->
       <textarea id="validationCustom05" class="form-control"    name="message" ></textarea>
     </div>
   
   
   
   
     
   
    
      
     <div class="ty">
     <div class="op">
      
     <div>
       <input class="btn btn-primary" type="submit" name="submit" value="Send">
     </div>
   </form></div>


  

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
