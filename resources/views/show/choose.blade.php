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
    body{
          background-image: url('/img/med1 (4).jpg');
          background-repeat: no-repeat;
          background-size: cover;
        }
   </style>
</head>
<body >
   <nav>
      <div class="logo">Pharmacy management system </div>
     
     
      <ul>
        
        <li>
          <label for="btn-1" class="show"> Store </label>
          <a href="#">Store </a>
          <ul>
            <li> <label for="btn-3" class="show">show +</label>
              <a href="pharmacy.show">show <span class="fa fa-plus"></span></a>
              <input type="checkbox" id="btn-3">
            
            </li>
            <li> <label for="btn-3" class="show"> add +</label>
              <a href="pharmacy.add">add <span class="fa fa-plus"></span></a>
              <input type="checkbox" id="btn-3">
             
            </li>
           
       
      </ul>
</li>
        <li>
          <label for="btn-1" class="show"> Sales</label>
          <a href="#">Sales</a>
          <ul>
            <li> <label for="btn-3" class="show">today +</label>
              <a href="show.showToday">today <span class="fa fa-plus"></span></a>
              <input type="checkbox" id="btn-3">
            
            </li>
            <li> <label for="btn-3" class="show"> date +</label>
              <a href="show.addDate"> date <span class="fa fa-plus"></span></a>
              <input type="checkbox" id="btn-3">
             
            </li>
            <li> <label for="btn-3" class="show">year +</label>
              <a href="show.addYear"> year <span class="fa fa-plus"></span></a>
              <input type="checkbox" id="btn-3">
             
            </li>
          </ul>           <input type="checkbox" id="btn-1">
         
        </li>
       
        <li>
          <label for="btn-2" class="show">Bells</label>
          <a href="distributors.chatDist">Bells</a>
          <ul>
            <li> <label for="btn-3" class="show">today +</label>
              <a href="show.showTodayB">today <span class="fa fa-plus"></span></a>
              <input type="checkbox" id="btn-3">
            
            </li>
            <li> <label for="btn-3" class="show"> date +</label>
              <a href="show.addDateB"> date <span class="fa fa-plus"></span></a>
              <input type="checkbox" id="btn-3">
             
            </li>
            <li> <label for="btn-3" class="show">year +</label>
              <a href="show.addYearB"> year <span class="fa fa-plus"></span></a>
              <input type="checkbox" id="btn-3">
             
            </li>
          </ul>               <input type="checkbox" id="btn-2">
        
        </li>
        <li>
          <label for="btn-1" class="show"> minimum</label>
          <a href="#">minimum</a>
          <input type="checkbox" id="btn-1">
          <ul>
           
                <li> <label for="btn-3" class="show">today +</label>
                  <a href="show.showTodayMin">today <span class="fa fa-plus"></span></a>
                  <input type="checkbox" id="btn-3">
                
                </li>
                <li> <label for="btn-3" class="show">date +</label>
                  <a href="show.addDateMin"> date <span class="fa fa-plus"></span></a>
                  <input type="checkbox" id="btn-3">
                 
                </li>
                <li> <label for="btn-3" class="show"> year +</label>
                  <a href="show.addYearMin"> year <span class="fa fa-plus"></span></a>
                  <input type="checkbox" id="btn-3">
                 
                </li>
              </ul>     
        </li>
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

      


              <li><a href="/mainPageA">home</a></li>
      </ul>
    </nav>
<br/>

  
 </div>
  <div class="col-md-3">
   
   
  
  </div>

 <script src="/js/jquery-3.6.0.min.js"></script>
 <script src="/js/bootstrap.min.js"></script>
</body>
</html>
