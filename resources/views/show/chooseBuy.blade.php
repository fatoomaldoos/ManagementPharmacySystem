<!DOCTYPE html>

<html>
<head>
    <title>Sign In</title>
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
        <!--css -->
        <link rel="stylesheet" href="/css/myTamplate.css" />
        <link rel="stylesheet" href="/css/mymain.css" />
       <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
</head>
<body >
<h1>Welcome to pharmacy management system</h1>
<br/>
<div class="col-md-2" id="myButton">
   @csrf
   <a href="{{ url('/show.addYearB') }}" class="btn btn-primary" >Year</a>
   <br>
   <br>
   <a href="{{ url('/show.addDateB') }}" class="btn btn-primary">Specific Date</a>
   <br>
   <br>
   <a href="{{ url('/show.showTodayB') }}" class="btn btn-primary">Today</a>
 </div>
  <div class="col-md-3">
   
   
  
  </div>

 <script src="/js/jquery-3.6.0.min.js"></script>
 <script src="/js/bootstrap.min.js"></script>
</body>
</html>
