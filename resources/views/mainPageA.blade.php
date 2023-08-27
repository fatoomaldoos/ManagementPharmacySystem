
   <!DOCTYPE html>

   <html>
   <head>
       <title>Home</title>
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
           <link rel="stylesheet" href="H.css">
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
      
   </head>
   <body class="mainPage">
   
    <nav>
      <div class="logo">Pharmacy management system </div>
     
     
      <ul>  
      
       
        <li>
          <label for="btn-1" class="show"> Setting</label>
          <a href="#">Setting</a>
          <input type="checkbox" id="btn-1">
          <ul>
            <li> <label for="btn-3" class="show">languges</label>
              <a href="#">languges <span class="fa fa-plus"></span></a>
              <input type="checkbox" id="btn-3">
            
            </li>
            <li> <label for="btn-3" class="show">order</label>
              <a href="/company.main">order <span class="fa fa-plus"></span></a>
              <input type="checkbox" id="btn-3">
             
            </li>
          </ul>
        </li>
        <li><a href="/">Logout</a></li>




 


       
      </ul>
    </nav>
   
   
      <div class="row py-5" >
       
        <div class="col-md-4 item" >
          <a href="/employee.profilePage">
            <i class="bx bx-capsule"></i></a>
            <h3>employees</h3>

          <p>To add , edit and delete information of employees...</p>
          </div>

              <div class="col-md-4 item" >
              <a href="/medicine.medicinesPage">
                <i class="bx bx-capsule"></i></a>
                <h3>informatin of medicine</h3>
   
              <p>To add , edit and delete sections...</p>
              </div>
   
              <div class="col-md-4 item">
              <a href="/reverse.main" >
                <i class="bx bx-capsule" ></i></a>
                <h3>Reverse</h3>
   
              <p>To view informatin of medicine registered in the pharmacy please enter of this icon...</p>
              </div>
   
              <div class="col-md-4 item" >
              <a href="/end">
                <i class="bx bx-cart"></i></a>
                <h3>Sales System</h3>
   
              <p>To view sales system please enter of this icon...</p>
              </div>
   
              <div class="col-md-4 item" >
             <a href="/important.show"><i class="bx bx-calculator"></i></a>
             <h3>Setting System</h3>
              <p>To register a new costing or minimum quantity please enter of this icon...</p>
              </div>
   
              <div class="col-md-4 item" >
              <a href="/buy.main">
                <i class="bx bx-message-detail"></i></a>
                 <h3>Buy </h3>
              <p>To view buy system please enter of this icon...</p>
              </div>
   
              <div class="col-md-4 item">
              <a href="/order.distAll">
                <i class="bx bx-message-detail"></i></a>
                 <h3>Orders </h3>
              <p>send order, show order , inbox from distributors...</p>
              </div>
  
   
   
              <div class="col-md-4 item" data-aos="fade-right">
              <a href="/customers.custAll">
              <i class="bx bx-user-plus"></i></a>
   
              <h3>Customers</h3>
   
              <p>To connect with patients please enter of this icon... </p>
              </div>
   
   
              <div class="col-md-4 item">
              <a href="/show.choose">
              <i class="bx bx-message-square-edit"></i></a>
   
                <h3>Show Information</h3>
   
              <p>To view information in diffrent time and show the storage...</p>
              </div>
   
   
   </div>
   </div>
   
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
    <script>
      function loadDoc() {
        setInterval(function()
        {
          var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
         document.getElementById("dnote").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", 'data2.php', true);
      xhttp.send();
    
        },1000);}
      
    loadDoc();
      </script>
        <script>
          function loadDoc() {
            setInterval(function()
            {
              var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("unote").innerHTML = this.responseText;
            }
          };
          xhttp.open("GET", 'data1.php', true);
          xhttp.send();
        
            },1000);}
          
        loadDoc();
          </script>
           <script>
            function loadDoc() {
              setInterval(function()
              {
                var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
               document.getElementById("enote").innerHTML = this.responseText;
              }
            };
            xhttp.open("GET", 'data4.php', true);
            xhttp.send();
          
              },1000);}
            
          loadDoc();
            </script>
            
   </body>
   </html>
   
   
   