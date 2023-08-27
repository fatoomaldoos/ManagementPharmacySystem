<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Drop-down Menu Bar</title>
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
 
      <style>
        body{
          background-image: url('/img/mm11 (1).jpg');
          background-repeat: no-repeat;
          background-size: cover;
        }
        </style>
  </head>
  <body id="page-top">
    <div >
        @if(Session::has('end'))
      <script>swal("Warnning!","{!! session('end') !!}","error",{button:"Ok"})</script>
      @endif
      </div>
    <nav>
      <div class="logo">Pharmacy management system </div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <input type="checkbox" id="btn">
      <ul>
        <li><a href="mainPageA">Home</a></li>
        <li>
          <label for="btn-1" class="show"> Sales</label>
          <a href="#">Sales</a>
          <input type="checkbox" id="btn-1">
          <ul>
            <li><a href="show.showToday">show</a></li>
            <li><a href="sells.parcode">add</a></li>
            
          </ul>
        </li>
        <li>
          <label for="btn-2" class="show"> Customers</label>
          <a href="#">Customers</a>
          <input type="checkbox" id="btn-2">
          <ul>
            <li><a href="sells.allCust">show</a></li>
            <li><a href="sells.showCustBell">show Bells</a></li>
          </ul>
        </li>
       
      </ul>
    </nav>
   



<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>


    <script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>

  </body>
</html>
