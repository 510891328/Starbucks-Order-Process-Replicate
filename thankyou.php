<! DocTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link href="thankyou.css" rel="stylesheet" type="text/css" />
		<link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Starbucks_Corporation_Logo_2011.svg/1200px-Starbucks_Corporation_Logo_2011.svg.png" type="image" />
   		<title>Starbucks Coffee Company</title>	
   		</head>

	<body>
	<div class="container-fluid">
			<nav class="navbar navbar-expand-md navbar-white bg-white fixed-top">
				<a class="navbar-brand" href="home.php"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Starbucks_Corporation_Logo_2011.svg/1200px-Starbucks_Corporation_Logo_2011.svg.png" width=50/></a>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav md-auto" id="topnav">
						<li class="nav-item" id="order">
							<a class="nav-link" href="menu.php"> ORDER </a>
						</li>

						<li class="nav-item" id="rewards">
							<a class="nav-link" href="#"> REWARDS </a>
						</li>

						<li class="nav-item" id="gift">
							<a class="nav-link" href="#"> GIFT CARDS </a>
						</li>
					</ul>

					<ul class="navbar-nav md-auto ml-auto p-2 bd-highlight" id="topnav-right">
						<li class="nav-item">
							<a class="nav-link" href="#" ><button id="find_store"><i class="fa fa-map-marker"></i> Find a Store </button></a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#" id="sign_in_link"><button id="account"> account </button></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		
		<br />
		
			<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top fixed-top-2">	
				<div>		
					<ul class="navbar-nav md-auto" id="menunav">
						<li class="nav-item" id="all_product">
							<a class="nav-link-menu" href="menu.php"> All products </a>
						</li>

						<li class="nav-item" id="previous">
							<a class="nav-link-menu" href="#"> Previous </a>
						</li>

						<li class="nav-item" id="favorites">
							<a class="nav-link-menu" href="#"> Favorites </a>
						</li>
					</ul>
				</div>	
			</nav>
			
			
		<div id="message">
		 <h2>See you soon!</h2>
		 <p>When you arrive, head straight to the pickup counter or the drive thru and ask the barista for and order for you.</p>
		<br />
		 <p class="return"><a href="menu.php"><strong>Return to menu</strong></a></p>
		</div>

	</body>
</html>
<?php
	require('mysqli_connect.php');
	$query = "TRUNCATE TABLE products;";
	mysqli_query($dbc,$query);
?>