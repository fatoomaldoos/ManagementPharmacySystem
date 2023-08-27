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
    </head>
    <body>
        <h1>Pharmacy management system</h1>
        <br/><br/><br/><br/>
        <div class="myBorder">
        <h2 class="greatePro"><strong>Create a Remineds</strong></h2>
       @foreach ($custs as $row)
           
      
        <div class="myNewAccount">
 <form class="col-md-12" action="/customers.remined" method="POST" enctype="multipart/form-data">
   @csrf
   {{ csrf_field() }}
   <input  type="number" name="pcounter" value="{{$note->pcounter+1}}" style="visibility:hidden">
	 
   <div>
    <label for="validationCustomUsername" class="form-label">Customer</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="cname" value="{{ $row['cname'] }}" required>
    </div>
  </div>

  <div>
    <label for="validationCustomUsername" class="form-label">Message</label>
    <div class="input-group has-validation">
      
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="message" value="{{"this remined for your medicine.."}}" required>
    </div>
  </div>



 
   
  <div class="ty">
  <div class="op">
   
  <div>
    <input class="btn btn-primary" type="submit" name="submit" value="Send">
  </div>
</form></div>
@endforeach
        </div>
       
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
</body>
</html>