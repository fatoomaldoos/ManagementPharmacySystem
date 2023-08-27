<!DOCTYPE html>

<html>
<head>
    <title>Welcome</title>
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
       
</head>
<body>
<h1>Welcome to pharmacy management system</h1>
<br/>
<div class="row" id="myButton">
 <div class="col-md-2">
   @csrf
  <a href="{{ url('/customers.signIn') }}" class="btn btn-primary" >Sign in</a>
 </div>
  <div class="col-md-3">
   
   <a href="{{ url('/customers.confirm') }}" class="btn btn-primary">Create new account</a>
  
  </div>
</div>
 <script src="/js/jquery-3.6.0.min.js"></script>
 <script src="/js/bootstrap.min.js"></script>
</body>
</html>
