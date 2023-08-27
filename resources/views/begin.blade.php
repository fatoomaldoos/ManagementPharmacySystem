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
        <style>
        </style>

</head>
<body>
</div>


    <h1> {{ __('lang.Welcome to pharmacy management system') }} </h1>
<br/>

 <div class="col-md-2" id="myButton">
   @csrf
  <a href="{{ url('/distributors.startPageDist') }}" class="btn btn-primary" id="btn">   {{ __('lang.Distributors') }}</a>


   <a href="{{ route('first')}}" class="btn btn-primary" id="btn">  {{ __('lang.Employees') }}</a>



   <script src="/js/jquery-3.6.0.min.js"></script>
 <script src="/js/bootstrap.min.js"></script>
</body>
</html>
