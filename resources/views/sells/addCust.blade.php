<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

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
       h1 {
        
        font-size: 40px;
        color:  #ccc2c2;/*white*/
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #080808;
        height: 70px;
        background-size: cover;
       
        margin-bottom: 40px;
        position: fixed;
        width:100%;
    }
     </style>
</head>

<body>

    <div >
     
      
    </div>
    <h1>Pharmacy management system</h1>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form action="/sells.addCust" method="POST">
                      @csrf
                      <div class="input-group">
                          <input class="input--style-3" type="text" value="{{ $object->medname }}" name="medname">
                      </div>
					   <div class="input-group">
                          <input class="input--style-3" type="text" value="{{ $object->cname }}" name="cname">
                      </div>
                      <div class="input-group">
                          <input class="input--style-3 js-datepicker" type="number" value="{{ $cost->cost }}" name="cost">
                          <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                      </div>
                    
                      <div class="input-group">
                          <input class="input--style-3" type="number" placeholder="Quantity" name="quantity">
                      </div>
					   <div class="input-group">
                          <input class="input--style-3" type="date"  name="next">
                      </div>
                      <div class="p-t-10">
                          <button class="btn btn--pill btn--green" type="submit">Submit</button>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->