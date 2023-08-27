<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>One Page Wonder - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
    </head>
    <body id="page-top">
    
        <!-- navbar -->
        <header>
            <nav class="nav-wrapper transparent">
              <div class="container">
                <a href="" class="brand-logo">Pharmacy management system </a>
                 <ul class="right hide-on-med-and-down">
                  <li><a href="#photo" style="color:gray">information</a></li>   
                  <li><a href="/medicine.medicinePage" style="color:gray">Medicine Setting</a></li>
                  <li><a href="/mainPageA" style="color:gray">Home</a></li>
                  <li><a href="" class=" tooltipped btn-floating btn-small blue darken-2" data-tooltip="Facebook ">
                    <i class="fab fa-facebook "></i>
                  </a></li>
                  <li><a href="" class="tooltipped btn-floating btn-small pink darken-2" data-tooltip="Instagram">
                    <i class="fab fa-instagram "></i>
                  </a></li>
                  <li><a href="" class="tooltipped btn-floating btn-small blue darken-2" data-tooltip="Linked in ">
                    <i class="fab fa-linkedin"></i>
                  </a></li>
                </ul>
               
              </div>
    
            </nav>
            </header>
        <div >
      
            @if(Session::has('addCost'))
          <script>swal("Warning","{!! session('addCost') !!}","error",{button:"Ok"})</script>
          @endif
          </div>
        
        @foreach ( $med as $row)
        <!-- Content section 1-->
      
        <section id="scroll" style="background-color: rgb(43, 41, 42)">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="/storage/image/{{ $row['image'] }}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <li style="color: rgb(204, 196, 223)"><i class="icofont-rounded-right"></i> <strong style="color: rgb(189, 140, 182)">Commerce name:</strong>{{  $row['commerce_name']}}</li>
                            <li  style="color: rgb(204, 196, 223)"><i class="icofont-rounded-right"></i> <strong style="color: rgb(189, 140, 182)"> Physical name:</strong> {{$row['physical_name'] }}</li>
                            <li  style="color: rgb(204, 196, 223)"><i class="icofont-rounded-right"></i> <strong style="color: rgb(189, 140, 182)""> Parcode:</strong> {{ $row['parcode'] }}</li>
                            
                            <li  style="color: rgb(204, 196, 223)"><i class="icofont-rounded-right"></i> <strong style="color: rgb(189, 140, 182)""> Type:</strong> {{ $row['type'] }}</li>
                            <li  style="color: rgb(204, 196, 223)"><i class="icofont-rounded-right"></i> <strong style="color: rgb(189, 140, 182)"">Degree:</strong> {{ $row['degree'] }}</li>
                            <li  style="color: rgb(204, 196, 223)"><i class="icofont-rounded-right"></i> <strong style="color: rgb(189, 140, 182)"">Company name:</strong> {{ $row['company_name'] }}</li>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @endforeach
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
