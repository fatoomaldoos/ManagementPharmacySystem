<!DOCTYPE html>
<html>
    <head>
        <title>Send Message</title>
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
        <h2 class="greatePro"><strong>Create a new Message</strong></h2>
       
        <div class="myNewAccount">
 <form class="col-md-12" action="{{ url('/distMessage') }}" method="POST" enctype="multipart/form-data">
   @csrf
   {{ csrf_field() }}
  <div>
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="uname" value="{{$uname}}" disabled>
    </div>
  </div>

  <div>
    <label for="validationCustom05" class="form-label">Messageame</label>
    <!--<input type="textearea" class="form-control" id="validationCustom05" name="medname" required>-->
    <textarea id="validationCustom05" class="form-control"    name="message" ></textarea>
  </div>




  

 
   
  <div class="ty">
  <div class="op">
    <div class="myNewAccount">
        <form class="col-md-12" action="{{ url('/distMessage') }}" method="POST" enctype="multipart/form-data">
          @csrf
          {{ csrf_field() }}
         <div>
           <label for="validationCustomUsername" class="form-label">Username</label>
           <div class="input-group has-validation">
             <span class="input-group-text" id="inputGroupPrepend">@</span>
             <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="uname" value="{{$uname}}" disabled>
           </div>
         </div>
       
         <div>
           <label for="validationCustom05" class="form-label">Messageame</label>
           <!--<input type="textearea" class="form-control" id="validationCustom05" name="medname" required>-->
           <textarea id="validationCustom05" class="form-control"    name="message" ></textarea>
         </div>
       
       
       
       
         
       
        
          
         <div class="ty">
         <div class="op">
          
         <div>
           <input class="btn btn-primary" type="submit" name="submit" value="Send Order">
         </div>
       </form></div>
   
  <div>
    <input class="btn btn-primary" type="submit" name="submit" value="Send Order">
  </div>
</form></div>
        </div>
       
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
</body>
</html>