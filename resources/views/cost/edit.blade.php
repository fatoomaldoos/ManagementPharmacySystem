<!DOCTYPE html>
<html>
    <head>
        <title>Add medicine</title>
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
        <![endif]-->
       <!--css -->

       <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

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

        <link href="assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/medicines.css" />
</head>
<body>
   <!-- ======= Mobile nav toggle button ======= -->
   <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
   <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="img/draklab1.jpg" alt="" class="img-fluid rounded-circle" id="profileimage">
        <h1 class="text-light"><a href="index.html" id="name">Add Medicines</a></h1>

      <nav class="nav-menu">
        <ul>
          <li><a href="/cost.parcode"><i class="bx bx-plus"></i> <span>Add </span></a></li>
          <li><a href="/cost.show"><i class="bx bx-capsule"></i>Information</a></li>
          <li><a href="/cost.parcodeEdit"><i class="bx bx-trash"></i>Edit</a></li>
           <li ><a href="/mainPageA"><i class="bx bx-home"></i> <span>Home</span></a></li>
         

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->



<main id="main">
    <!-- ======= About Section ======= -->
    <section id="myAbout1" class="about">
    </br> </br>
   <div class="myBorder">

       {{--  <form action=" {{ route('add_medicin') }}" method='POST' > --}}
       {{--  <form action="mainPage" method='POST' >--}}
       {{--   <form action="@dd($request->all())" method='POST' > --}}
        <div style="color: red">{{ session('msg') }}</div>
  
        <form action="{{ url('/cost.edit/'.$med->id) }}" method='POST' >
        @csrf

         <div class="row align-item-center">
     <div class="col-md-3" >


     
      <div>
       <label for="validationCustom03" class="form-label">Parcode</label>
       <input type="number" class="form-control" id="validationCustom03" name='parcode' value="{{ $med->parcode }}" required >
      </div>

      <div>
       <label for="validationCustom04" class="form-label">Medicine name</label>
       <input type="text" class="form-control" id="validationCustom04" name='medname'  value="{{ $med->medname }}"required>
      </div>

      <div>
       <label for="validationCustom05" class="form-label">Ratio</label>
       <input type="text" class="form-control" id="validationCustom05" name='add'value="{{ $med->add }}"required>
      </div>

     
      <div>
    <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
  </div>

    </form>

    </div>
   
    </main>
    </section>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
</body>
</html>
