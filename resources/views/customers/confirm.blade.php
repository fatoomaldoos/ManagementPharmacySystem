<!DOCTYPE html>
<html>
    <head>
        <title>Sign in</title>
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
        <![endif]-->
        <!--css -->
        <link rel="stylesheet" href="/css/mymain.css" />
        <![endif]-->
    </head>
    <body>
     <h1>Pharmacy management system</h1>
     <div class="myBorder">
        
      <h2 class="signPro"><strong>Sign in</strong></h2>
      <div class="myOldAccount">
        <div style="color: red">{{ session('msg') }}</div>
 <form class="col-md-12" action="{{url('/customers.confirm')}} " method="POST">
    @csrf
  <div>
    <label for="validationCustom05" class="form-label">Password</label>
    <input type="password" class="form-control" id="validationCustom05" name="password" required>
  
  </div>

  
    <div>
      <button class="btn btn-primary" type="submit" name="submit">Confirm Password</button>
    </div>
     
            </form></div>
     </div>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
</body>
</html>