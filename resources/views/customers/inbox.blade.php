<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADD Note</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/message/css/css boot/bootstrap.css">
	<link rel="stylesheet" href="/message/css/css boot/bootstrap.min.css">
	<link rel="stylesheet" href='/message/css/style.css'>

<!--[if lt IE 9]-->
<script src="/message/js/html5shiv.min.js"></script>
<script src="/message/js/respond.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	
	

<div class="cont">
	<div class="head"><nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"></i>
		</label>
		<label class="logo">MESSAGE PAGE</label>
		<ul>
			<li><a class="active" href="distributors.welcomDist">Home</a></li>
			<li><a class="active" href="customers.inbox">message</a></li>
			@foreach ($note as $row )
			<li><span class="badge pink-text purble "id="notif">{{ $row['counter'] }}</span></li>
			@endforeach
		</ul>
	</nav></div>
<div class="bod" id='med'>
		
	
			@foreach ( $custs as $row)
			<div class="message">
			
			<li><i class="icofont-rounded-right"></i> <strong style="color:rgb(24, 22, 22)">Message:</strong> {{ $row['message'] }}</li>
			
			<li><i class="icofont-rounded-right"></i> <strong style="color:rgb(24, 22, 22)">sent at:</strong> {{ $row['created_at'] }}</li>
		  
		</div>
	@endforeach

</div>

	

<script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/JavaScript-1.js"></script>
<script src="js/mymain.js"></script>
<script>
    function loadDoc() {
      setInterval(function()
      {
        var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById("notif").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", 'data3.php', true);
    xhttp.send();
  
      },1000);}
    
  loadDoc();
    </script>
</body>
</html>
