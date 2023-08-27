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
         
          <li><a href="{{ url('/') }}" class="btn white indigo-text">LogOut</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <ul class="sidenav" id="mobile-links">
    <li><a href="">Home</a></li>
    <li><a href="">About</a></li>
    <li><a href="">Contact</a></li>
  </ul>



<div class="container text-center py-5">

       <div class="row py-5">

                 <div class="col-md-4 item">
                   <a href="/orderSent">
                <i class="fa fa-medkit"></i></a>
               <h3 style="color: rgb(206, 194, 200)">My Inbox</h3>
                  </div>
 

                  
                  <div class="col-md-4 item">
                    <a href="/replayDist">
                 <i class="fa fa-medkit"></i></a>
                <h3 style="color: rgb(206, 194, 200)">My Message</h3>
                   </div>
                  
                  
                   <div class="col-md-4 item">
                    <a href="/distProfile">
                 <i class="fa fa-medkit"></i></a>
                <h3 style="color: rgb(235, 225, 230)">My Profile</h3>
                   </div>
  
                   <div class="col-md-4 item">
                    <a href="/distEdit">
                 <i class="fa fa-medkit"></i></a>
                <h3 style="color: rgb(206, 194, 200)">Edit Profile</h3>
                   </div>

                   <div class="col-md-4 item">
                    <a href="/distDelete">
                 <i class="fa fa-medkit"></i></a>
                <h3 style="color: rgb(206, 194, 200)">Delete Profile</h3>
                   </div>


                  
                   <div class="col-md-4 item">
                    <a href="/about">
                 <i class="fa fa-medkit"></i></a>
                <h3 style="color: rgb(206, 194, 200)">About As</h3>
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


