<!DOCTYPE html>
<html>
    <head>
        <title>Creat new account</title>
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
        <![endif]-->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    </head>
    <body class="security">
        <h1>Pharmacy management system</h1>
        <br/><br/><br/><br/><br/>
        <div class="myBorder">
        <h2 class="greatePro"><strong>Create a new account</strong></h2>
        <div >
        
        @if(Session::has('msg'))
      <script>swal("Oops","{!! session('msg') !!}","error",{button:"Ok"})</script>
      @endif
      </div>
 <form  id="myNewAccount" action="/employee.createNewAccount" method="POST" enctype="multipart/form-data">
   @csrf
   {{ csrf_field() }}
   <div class="row">
 <div class="col-6">

  <div>
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="uname" required>
    </div>
  </div>

  <div>
    <label for="validationCustom04" class="form-label">Phone</label>
    <input type="phone-number" class="form-control" id="validationCustom04" name="number"  required>
  </div>
 <div>
    <label for="validationCustom05" class="form-label">Password</label>
    <input type="password" class="form-control" id="validationCustom05" name="password" required>
  </div>
  </div>
  <div class="col-6">
  <div>
    <label for="validationCustom03" class="form-label">From Time</label>
    <input type="time" class="form-control" id="validationCustom03" name="ftime" required>
  </div>
  <div>
    <label for="validationCustom03" class="form-label">To Time</label>
    <input type="time" class="form-control" id="validationCustom03" name="etime" required>
  </div>
   
  <div class="ty">
  <div class="op">
    <div>
      <label for="choose" class="form-label" >Set if admin or not</label>
      <select type="text" class="form-control" id="choose" name="type" required>
        <option value="admin">Admin</option>
        <option value="notadmin">Not Admin</option>
      </select>
    </div>
	 <div>
      <label for="validationCustom05" class="form-label">Select an image:</label>
      <input type="file" class="form-control" id="validationCustom05" name="image" required>
    </div>
    </div>
    </div>
    </div>
  <div class="row">
    <div class="col-6">
    <input class="btn btn-primary" type="submit" name="submit" value="Create a new account" style="margin-left:10%;margin-top:5px; ">
  </div> </div>
</form></div>

        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
</body>
</html>