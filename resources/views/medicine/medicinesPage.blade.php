<!DOCTYPE html>
<html lang="en">
<head >
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--bootstrap -->
    <link rel="stylesheet" href="/css/css boot/bootstrap.css" />
        <!--[if lt IE 9]-->
        <link rel="stylesheet" href="/css/mainR.css" />
        <script src="/js/html5shiv.min.js"></script>
        <script src="/js/respond.min.js"></script>
        <script src="https://kit.fontawesome.com/96724a80e4.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"type="text/css">
        
     <title> Pharmacy Managment System </title>
     <style>
       nav .badge{
         position:relative;
         top:10px;
         right:30px;
         border-radius: 90%;
         
       }
       
       </style>
</head>
<body>
 
    


  <div class="navbar-fixed">
    <nav class="nav-wrapper indigo">
      <div class="container">
        <a href="#" class="brand-logo">Pharmacy Managment System</a>
        <a href="#" class="sidenav-trigger" data-target="mobile-links">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
         
          <li><a href="{{ url('/mainPageA') }}" class="btn white indigo-text">Home</a></li>
         
        </ul>
      </div>
    </nav>
  </div>




<div class="container text-center py-5">

       <div class="row py-5">

                 <div class="col-md-4 item">
                   <a href="/medicine.show">
                <i class="fa fa-medkit"></i></a>
               <h3 style="color: rgb(206, 194, 200)">Show Medicine</h3>
                  </div>
 

                  
                  <div class="col-md-4 item">
                    <a href="/section.show">

                 <i class="fa fa-medkit"></i></a>
                <h3 style="color: rgb(206, 194, 200)">Section</h3>
                   </div>
                  
                  
                   <div class="col-md-4 item">
                    <a href="/medicine.add">
                 <i class="fa fa-medkit"></i></a>
                <h3 style="color: rgb(235, 225, 230)">Add Medicine</h3>
                   </div>
  
                   <div class="col-md-4 item">
                    <a href="/distributors.distEdit">
                 <i class="fa fa-medkit"></i></a>
                <h3 style="color: rgb(206, 194, 200)">Edit Profile</h3>
                   </div>

                   <div class="col-md-4 item">
                    <a href="/distributors.distDelete">
                 <i class="fa fa-medkit"></i></a>
                <h3 style="color: rgb(206, 194, 200)">Delete Profile</h3>
                   </div>


                  
                   <div class="col-md-4 item">
                    <a href="/about">
                 <i class="fa fa-medkit"></i></a>
                <h3 style="color: rgb(206, 194, 200)">About Us</h3>
                   </div>
  
               
 </div>
</div>

<hr>

  <!-- Compiled and minified JavaScript -->

  <script src="/js/jquery-3.6.0.min.js"></script>
 <script src="/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="/js/mainPageR.js"></script>
</body>

</html>


