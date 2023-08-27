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
         <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/reg/css/main.css" rel="stylesheet" media="all">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <style>
       body{
           background-color: white;
       }
   </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        
        @foreach($med as $row)
       
         <!-- Content section 1-->
         <section id="scroll" style="background-color: rgb(29, 27, 27)">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                   
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="/storage/image/{{  $row['image']}}" alt="..." style="height:500px"/></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                          <h2 class="display-4" style="color:rgb(138, 108, 141)">For edit the account...</h2>
                       
                    
                         
                           <div class="row">
                         <div class="col-6">
                        
                          <div>
                            <label for="validationCustomUsername" class="form-label" style="color:rgb(175, 131, 145)">Name of medicine</label>
                            
            
                              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"   value="{{  $row['commerce_name']}}"required>
                            
                          </div>
                          <div>
                            <label for="validationCustom04" class="form-label" style="color:rgb(175, 131, 145)">Physical name</label>
                            <input type="text" class="form-control" id="validationCustom04"  value="{{$row['physical_name'] }}" required>
                          </div>
                         <div>
                            <label for="validationCustom05" class="form-label" style="color:rgb(175, 131, 145)">Parcode</label>
                            <input type="text" class="form-control" id="validationCustom05"  value="{{ $row['parcode'] }}" required>
                          </div>
                          </div>
                          <div class="col-6">
                          <div>
                            <label for="validationCustom03" class="form-label" style="color:rgb(175, 131, 145)">type of medicine</label>
                            <input type="text" class="form-control" id="validationCustom03" name="ftime"  value="{{ $row['type'] }}"required>
                          </div>
                          <div>
                            <label for="validationCustom03" class="form-label" style="color:rgb(175, 131, 145)">degree</label>
                            <input type="number" class="form-control" id="validationCustom03" name="etime" value="{{ $row['degree'] }}" required>
                          </div>
                       
                            
                           <div>
                              <label for="validationCustom05" class="form-label" style="color:rgb(175, 131, 145)">Company name:</label>
                              <input type="text" class="form-control" id="validationCustom05" value="{{ $row['company_name'] }}"  >
                            </div>
                            </div>
                            </div>
                            </div>
                          <div class="row">
                            <div class="col-6">
                            </div> </div>
                        </form>
                                   </div>
                    </div>
                </div>
            </div>
        </section>
      @endforeach
        <!-- Content section 2-->
        <div> <br> <br>
            <br><br></div>
        
        <section>
            <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
                <div class="wrapper wrapper--w780">
                    <div class="card card-3">
                        <div class="card-heading"></div>
                        <div class="card-body">
                            <h2 class="title">Bills Info</h2>
                            <form action="sells.info" method="POST">
                              @csrf
                              <div class="input-group">
                                  <input class="input--style-3"  value="{{ "medicine:".$medname }}" >
                              </div>
                              <div class="input-group">
                                <input class="input--style-3"  value="{{"Quantity:". $qq }}" >
                            </div>
                            <div class="input-group">
                                <input class="input--style-3"  value="{{"Hole Cost:". $all}}" >
                            </div>
                            <div class="input-group">
                                <input class="input--style-3"  value="{{"date:". $to}}" >
                            </div>
                            <div class="p-t-10">
                              <button class="btn btn--pill btn--green" type="submit">Submit</button>
                          </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
       

            
           
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
          <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    </body>
</html>
