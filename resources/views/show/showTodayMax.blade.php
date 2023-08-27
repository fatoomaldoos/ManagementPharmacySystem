<!DOCTYPE html>

<html>

<head>

 <title>Table layout</title>
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

 <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
 <link rel="stylesheet" href="H1.css">
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
 <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="file:///E:/jquery.js"></script>

   <!-- Font Awesome icons (free version)-->
   <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
   <!-- Google fonts-->
   <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
   <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
   <!-- Core theme CSS (includes Bootstrap)-->
   <link href="css/styles.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <link rel="stylesheet" href="style/main.css">
 <style>
	 family=Montserrat|Open+Sans|Roboto');
*{
 margin:0;
 padding: 0;
 outline: 0;
}
.filter{
 position: absolute;
 left: 0;
 top: 0;
 bottom: 0;
 right: 0;
 z-index: 1;
 background: rgb(233,76,161);
background: -moz-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
background: -webkit-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
background: linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#e94ca1",endColorstr="#c74ae9",GradientType=1);
opacity: .7;
}
table{
  margin-top:120px;
  margin-right:400px;
  margin-bottom: 200px;
 position: absolute;
 z-index: 2;
 left: 50%;
 top: 50%;
 transform: translate(-50%,-50%);
 width: 60%; 
 border-collapse: collapse;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;
 overflow: hidden;

}
td , th{
 padding: 15px 20px;
 text-align: center;
 

}
th{
 background-color: #506bb4;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;

}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}
tr:nth-child(even){
 background-color: #eeeeee;
}
body{
 

}
	 </style>

</head>

<body>

 


      <div >
        @if(Session::has('msg'))
      <script>swal("Warnning!","{!! session('msg') !!}","error",{button:"Ok"})</script>
      @endif
      </div>
      <nav>
        <div class="logo">Pharmacy management system </div>
       
       
        <ul>
          <li><a href="/show.choose">home</a></li>
          <li><a href="/">maximum</a>
            <ul>
                 <li> <label for="btn-3" class="show">today +</label>
                    <a href="show.showTodayMax">today <span class="fa fa-plus"></span></a>
                    <input type="checkbox" id="btn-3">
                  
                  </li>
                  <li> <label for="btn-3" class="show"> date +</label>
                    <a href="show.addDateMax"> date <span class="fa fa-plus"></span></a>
                    <input type="checkbox" id="btn-3">
                   
                  </li>
                  <li> <label for="btn-3" class="show">year +</label>
                    <a href="show.addYearMax"> year <span class="fa fa-plus"></span></a>
                    <input type="checkbox" id="btn-3">
                   
                  </li>
                </ul>     </li>
         
          <li> <form class="col-md-12" action="{{url('/pdf.maxToday')}}" method="POST">
            @csrf
          <div>
        
            <label for="validationCustom05" class="form-label"></label>
            <input type="hidden" class="form-control" id="validationCustom05" name="date" value={{ session('date') }} required>
        
          </div>
        
            <div>
              <button class="btn btn-primary" type="submit" name="submit" style=" margin-top: 10px;border-radius:50%">pdf</button>
            </div>
        
                    </form></li>
  
  
         
        </ul>
      </nav>
   <br><br><br><br><br><br><br><br><br><br>

       <table > 
        <tr>
          <th>Section</th>

          <th>Medicine Name</th>
         
          <th>Quantity</th>
         
          <th>Cost</th>
         
          <th>Date </th>
         
          
         
          </tr> 
@foreach ( $store as $row)


 
 
   <tr>
 @foreach($sec as $row1) 
                  @if($row->parcode == $row1['parcode'])
                  
                    <td style="color:palevioletred"> {{ $row1['section_name'] }}</td>
                  @endif
                  @endforeach
 
  <td>{{ $row['medname'] }}</td>
 
  <td>{{ $row['quantity'] }}</td>
 
  <td>{{$row['all'] }}</td>
 
  <td>{{$row['date'] }}</td>
 
 
 
  </tr>
      @endforeach
    
    </table>
  
 
  

    
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>


    <script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>





