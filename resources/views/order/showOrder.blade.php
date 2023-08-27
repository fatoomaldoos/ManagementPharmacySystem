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
			<li><a class="active" href="mainPageA">Home</a></li>
			<li><a class="active" href="all.eDeleteDist">Orders</a></li>
			
		</ul>
	</nav></div>
<div class="bod" id='med'>
		
	
			@foreach ( $orders as $row)
			@if($row['uname'] ==$uname)
			<div class="message">
					 <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>User Name:</strong> {{ $row['uname'] }}</li>
                  
                  <li><i class="icofont-rounded-right"></i> <strong>medicine Name:</strong> {{$row['medname'] }}</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Quantity:</strong> {{ $row['quantity'] }}</li>
                  
                  <li><i class="icofont-rounded-right"></i> <strong>Ordered at:</strong> {{ $row['date'] }}</li>
                
                </ul>
		</div>
		@endif
		@if($row['uname'] !=$uname)
		<div class="messageleft">
				 <ul>
			  <li><i class="icofont-rounded-right"></i> <strong>User Name:</strong> {{ $row['uname'] }}</li>
			  
			  <li><i class="icofont-rounded-right"></i> <strong>medicine Name:</strong> {{$row['medname'] }}</li>
			  <li><i class="icofont-rounded-right"></i> <strong>Quantity:</strong> {{ $row['quantity'] }}</li>
			  
			  <li><i class="icofont-rounded-right"></i> <strong>Ordered at:</strong> {{ $row['date'] }}</li>
			
			</ul>
	</div>
	@endif
	@endforeach

</div>

	

<script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/JavaScript-1.js"></script>


</body>
</html>
