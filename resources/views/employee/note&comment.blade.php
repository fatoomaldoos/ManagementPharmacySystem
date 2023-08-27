<?php 
include 'note.php';
?>


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

	<script>
		(function(){
			setInterval(function()
			{
				axios.get('employee.note&comment',).then(function(response){
					document.querySelector('#ndata').innerHTML(employee.note&comment);
				});
			});
		},5000);
	</script>
	<header id="header">
		<div class="d-flex flex-column">
		
		  <div class="profile">
			<img src="assets/img/profilePhoto.jpg" alt="" class="img-fluid rounded-circle" id="profileimage">
			<h1 class="text-light"><a href="index.html" id="name">Profiles</a></h1>
			
		  <nav class="nav-menu">
			<ul>
				<li class="active"><a href="{{ url('employee.profilePage') }}"><i class="bx bx-home"></i> <span>My Informations</span></a></li>
				<li class="active"><a href="{{ url('employee.allUser') }}"><i class="bx bx-home"></i> <span>Informations of all users</span></a></li>
				<li><a href="{{ url('/employee.toEditUser') }}"><i class="bx bx-user"></i> <span>Edit</span></a></li>
				<li><a href="{{ url('/employee.deleteUsers') }}"><i class="bx bx-envelope"></i> Delete</a></li>
				<li><a href="{{ url('/employee.note&comment') }}"><i class="bx bx-envelope"></i> Note</a></li>
				<li><a href="{{ url('/employee.mainPageA') }}"><i class="bx bx-envelope"></i> Home</a></li>
	  
			  </ul>
		  </nav><!-- .nav-menu -->
		  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
	
		</div>
	  </header><!-- End Header -->
	  <main id="main">
		<!-- ======= About Section ======= -->
		<section id="about" class="about">
<div class="container">
	
	<div class="body" id='med'>
		@foreach ( $nots as $row)
		<div class="fofo" id="ndata">
            <li ><i class="icofont-rounded-right"></i> <strong>From:</strong> {{$row['uname'] }}</li>
			<li ><i class="icofont-rounded-right"></i> <strong>Message:</strong> {{$row['note'] }}</li>
			<li ><i class="icofont-rounded-right"></i> <strong>Sent At:</strong> {{ $row['date'] }}</li>
		
		  
	</div>
	@endforeach
	

</div>

</section><!-- End About Section -->
<div class="myNewAccount">
    <form class="col-md-12" action="{{ url('/employee.note&comment') }}" method="POST" enctype="multipart/form-data">
      @csrf
      {{ csrf_field() }}
	  <input  type="number" name="ncounter" value="{{$note->ncounter+1}}" style="visibility:hidden">
     <div>
       <label for="validationCustom05" class="form-label">Note</label>
	   
	   <li ><a href="{{ url('/noteDone/') }}"><i class="bx bx-check" style="color:rgb(204, 116, 131)"></i> <span style="color:rgb(204, 116, 131)">Done</span></a></li>
       <!--<input type="textearea" class="form-control" id="validationCustom05" name="medname" required>-->
       <textarea id="validationCustom05" class="form-control"    name="note" ></textarea>
     </div>
   
   
   
   
     
   
    
      
     <div class="ty">
     <div class="op">
      
     <div>
       <input class="btn btn-primary" type="submit" name="submit" value="Send Note">
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

<script>
	function loadDoc() {
	  setInterval(function()
	  {
		var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
	   document.getElementById("ndata").innerHTML = this.responseText;
	  }
	};
	xhttp.open("GET", 'note.php', true);
	xhttp.send();
  
	  },1000);}
	
  loadDoc();
	</script>

</body>
</html>
