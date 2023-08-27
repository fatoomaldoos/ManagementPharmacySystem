<!DOCTYPE html>
<html>
    <head>
        <title>Add medicine</title>
        <meta charset="utf-8">
        <meta content="" name="description">
        <meta content="" name="keywords">
        <!-- IE Compatibility meta-->
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <!--first mobile meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap -->
        <link rel="stylesheet" href="/css/css boot/bootstrap.css" />
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
          <li ><a href="/employee.mainPage"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="/medicine.addMedicine"><i class="bx bx-plus"></i> <span>Add new medicine</span></a></li>
          <li><a href="/medicine.medicinesPage"><i class="bx bx-capsule"></i>Information of medicines</a></li>
          <li><a href="/medicine.parcodeForDelete"><i class="bx bx-trash"></i>Delete medicine</a></li>
          <li><a href="/medicine.findMedicineChoose"><i class="bx bx-search"></i>Fine medicine</a></li>
          <li><a href="/medicine.findAlternative"><i class="bx bx-search"></i>Fine alternative</a></li>
          <li><a href="/medicine.medicineDeleted"><i class="bx bx-trash"></i>Show deleted medicine</a></li>
          <li><a href="/medicine.addSection"><i class="bx bx-message-square-add"></i>Add section</a></li>
          <li><a href="/medicine.updatePriceChoose"><i class="bx bx-trending-up"></i>Update price</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
      </div>
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
         <form action="{{ url('/medicine.addMedicine') }}" method='POST' >
        @csrf

         <div class="row align-item-center">
     <div class="col-md-3" >


      <div>
{{--
--}}
      <label for="validationCustom02" class="form-label">Section name</label>
          <select id="validationCustom02" name="section_name" class="row"  style="width:100%; margin-left:-3px; border-radius: 5px;">
            @foreach ($sections as $section )
            <option value={{ $section->sname }} >{{ $section->sname }}</option>
            @endforeach
        </select>
      </div>
    
      <div>
       <label for="validationCustom03" class="form-label">Parcode</label>
       <input type="number" class="form-control" id="validationCustom03" name='parcode' required>
      </div>

      <div>
       <label for="validationCustom04" class="form-label">Physical name</label>
       <input type="text" class="form-control" id="validationCustom04" name='physical_name' required>
      </div>

      <div>
       <label for="validationCustom05" class="form-label">Commerce name</label>
       <input type="text" class="form-control" id="validationCustom05" name='commerce_name' required>
      </div>

      <div>
        <label for="validationCustom05" class="form-label">Chemical composition</label>
        <input type="text" class="form-control" id="validationCustom05" name='chemical_composition' required>
       </div>

       <div>
        <label for="validationCustom05" class="form-label">Diseases</label>
        <input type="text" class="form-control" id="validationCustom05" name='diseases' required>
       </div>


      <div class="form-check">
     <p style="margin-top:10px;"> Needs a prescription  </p>
      <input  type="radio" value="1" name="need_a_prescription"  >
      <label >
       yes
      </label>
      <input  type="radio" value="0" name="need_a_prescription" >
      <label >
       no
      </label>
     </div>
</div>
<div class="col-md-3">
    
      <div>
       <label for="validationCustom09" class="form-label">Type</label>
       <input type="text" class="form-control" id="validationCustom09" name="type" required>
      </div>

      <div>
       <label for="validationCustom10" class="form-label">Degree</label>
       <input type="text" class="form-control" id="validationCustom10" name="degree" required>
      </div>


      <div>
       <label for="validationCustom12" class="form-label">Company name</label>
       <input type="text" class="form-control" id="validationCustom12" name="company_name"  required>
      </div>

      <div>
        <label for="validationCustom05" class="form-label">image:</label>
        <input type="file" class="form-control" id="validationCustom05" name='image' required>
      </div>
     </div>
     </div>

      <div>
    <input class="btn btn-primary" type="submit" name="submit" value="add">
  </div>

    </form>
    </div>
    </br>  </br>  </br> </br>
    </main>
    </section>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
</body>
</html>
