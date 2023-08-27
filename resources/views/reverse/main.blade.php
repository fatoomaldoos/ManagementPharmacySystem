<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Drop-down Menu Bar</title>
    <link rel="stylesheet" href="H.css">
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
      <style>
        body{
          background-image: url('/img/med.jpg');
          background-repeat: no-repeat;
          background-size: cover;
        }
        </style>
  </head>
  <body id="page-top">
    <nav>
      <div class="logo">Pharmacy management system </div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <input type="checkbox" id="btn">
      <ul>
        <li><a href="mainPageA">Home</a></li>
        <li>
          <label for="btn-1" class="show"> distributors</label>
          <a href="#">distributors</a>
          <input type="checkbox" id="btn-1">
          <ul>
            <li><a href="reverse.show">show</a></li>
            <li><a href="reverse.add">add</a></li>
            
          </ul>
        </li>
        <li>
          <label for="btn-2" class="show"> Customers</label>
          <a href="#">Customers</a>
          <input type="checkbox" id="btn-2">
          <ul>
            <li><a href="reverse.customers">add</a></li>
            
           
           
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
