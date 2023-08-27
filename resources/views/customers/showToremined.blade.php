<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile page</title>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
    
      <div class="profile">
        <img src="assets/img/person.png" alt="" class="img-fluid rounded-circle" id="profileimage">
        <h1 class="text-light"><a href="index.html" id="name">Profiles</a></h1>
        
      <nav class="nav-menu">
       <ul>
            <li class="active"><a href="{{ url('/customers.custAll') }}"><i class="bx bx-user"></i> <span>All Customers</span></a></li>
            <li class="active"><a href="{{ url('/customers.showAllMedicine') }}"><i class="bx bx-envelope"></i> <span>Medicine</span></a></li>
             <li><a href="{{ url('/customers.custToemp') }}"><i class="bx bx-home"></i> <span>My inbox </span></a></li>
           <li class="active"><a href="{{ url('/customers.showToremined') }}"><i class="bx bx-user"></i> <span>Remined</span></a></li> 
              <li><a href="{{ url('/mainPageA') }}"><i class="bx bx-home"></i> <span>Home </span></a></li>
               
      
          </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1 id="name">employees</h1>
      <div >
      
      @if(Session::has('msg'))
    <script>swal("This page is allowed for admin only..","{!! session('msg') !!}","error",{button:"Ok"})</script>
    @endif
    </div>
      <p>I'm <span class="typed" data-typed-items="Pharmacist"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
   
		   @foreach ( $custs as $row )
       </div>
       
            
            
            <div class="row">
              <div class="col-lg-6" >
                <ul style="margin-top:50px;">
                   <div class="row">
          
            <br/><br/><br/>
           
          </div>
          <div class="row">
              <div class="col-lg-6">
            <h3 style="margin-top:70px;">{{ $row['cname'] }}</h3>
                  
                           <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{ $row['number'] }}</li>
                    <li><i class="icofont-rounded-right"></i> <strong>Created At:</strong> {{ $row['created_at'] }}</li>
                    </ul><ul>
                 
                     <div>
          <form action="{{ url('/customers.showToremined/'.$row['id'])}}" method="POST">
          @csrf
          
                <input class="btn btn-primary" type="submit" name="submit" value="Remined">
                </form>
              </div> <br>
                         
                 
                </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    
                   
                  </ul>
                </div>
                <div class="line-1"><hr style="background-color:purple"></div>
                @endforeach
             
            </div>
            
            
          </div>
        </div>

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

</body>

</html>