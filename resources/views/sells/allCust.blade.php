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
 margin:150px;
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
  margin-top:50px;
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
 background-color: #b13aa1;
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

 background: -webkit-gradient(linear, left bottom, left top, from(#f1eaef), to(#f1eaef));
 background: -webkit-linear-gradient(bottom, #f1eaef 0%, #f1eaef 100%);
 background: -moz-linear-gradient(bottom, #f1eaef 0%, #f1eaef 100%);
 background: -o-linear-gradient(bottom, #f1eaef 0%, #f1eaef 100%);
 background: linear-gradient(to top, #f1eaef 0%, #080707 100%);
 background-attachment: fixed;
 background-size: :cover;
 background-repeat: no-repeat;
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
        <div class="logo"> {{ __('lang.Pharmacy management system') }}</div>


        <ul>
            <li><a href="/customers.custAll"> {{ __('lang.Setting') }}</a></li>

            <li>
                <label for="btn-1" class="show">  {{ __('lang.Medicine') }}</label>
                <a href="#"> {{ __('lang.Medicine') }}</a>
                <input type="checkbox" id="btn-1">
                <ul>

                  <li><a href="customers.addMedicine"> {{ __('lang.add') }}</a></li>
                  <li><a href="customers.showAllMedicine"> {{ __('lang.Show') }}</a></li>

                </ul>
              </li>

              <li><a href="/show.choose"> {{ __('lang.home') }}</a></li>

        </ul>
      </nav>
   <br><br><br><br><br><br><br><br><br><br>

       <table >
        <tr>

          <th> {{ __('lang.Customer name') }}</th>
          <th> {{ __('lang.Medicine') }}</th>
          <th> {{ __('lang.type of period') }}</th>
          <th> {{ __('lang.time of period') }}</th>
          <th> {{ __('lang.Sale') }}</th>

          </tr>

          @foreach ( $custs as $row)


   <tr>

  <td> {{ $row['cname'] }}</td>

  <td>{{$row['medname'] }}</td>
  <td>{{$row['type'] }}</td>
  <td>{{$row['period'] }}</td>

  <td>  <div>
               <form action="{{ url('/sells.allCust/'.$row['medname']) }}" method="POST">
               @csrf

                     <input class="btn btn-primary" type="submit" name="submit" value="Sale">
                     </form>
                   </div></td>







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
