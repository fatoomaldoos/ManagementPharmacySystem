<!DOCTYPE html>
<html>
    <head>
        <title>Confirm</title>
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
        <link rel="stylesheet" href="/css/myTamplate.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
        <![endif]-->
    </head>
    <body class="security">
     <h1>Pharmacy management system</h1>
     <br/>
	 
     <div class="myBorder" style="width:38%;">
        
    <h2 class="signPro"><strong>Sign in</strong></h2>
     <div >
      @if(Session::has('suc'))
    <script>swal("Good Job!","{!! session('msg') !!}","success",{button:"Ok"})</script>
    @endif
    @if(Session::has('msg'))
  <script>swal("Oops","{!! session('msg') !!}","error",{button:"Ok"})</script>
  @endif
  </div>
      <div class="myOldAccount">
 <form class="col-md-12" action="/distributors.distSignIn" method="POST">
 @csrf
  <div>
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="uname" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div>
    <label for="validationCustom05" class="form-label">Password</label>
    <input type="password" class="form-control" id="validationCustom05" name="password" required>
    <div class="invalid-feedback">
      Please provide a valid Password.
    </div>
  </div>
  <div>
    <button class="btn btn-primary" type="submit" name="submit" >Sign in</button>
  </div>
            </form></div>
     </div>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
</body>
</html>