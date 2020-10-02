<! DocTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="Favicon/starbucks_favicon.ico">
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title> Hot Coffees:Starbucks Coffee Company </title>
	<link href="hotcoffee.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Starbucks_Corporation_Logo_2011.svg/1200px-Starbucks_Corporation_Logo_2011.svg.png" type="image" />
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
						<li class="nav-item" id="menu">
							<a class="nav-link" href="menu.php"> MENU </a>
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
							<a class="nav-link" href="#" id="sign_in_link"><button id="sign_in"> Sign in </button></a>
						</li>

						<li class="nav-item" >
							<a class="nav-link" href="#"><button id="join_now"> Join now </button></a>
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
	
	<div class="container" id="main">
		<div class="row">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
          <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <b class="nav-link">Drinks</b>
             <li><a class="nav-link"  id="hot-coffees-tab" data-toggle="pill" href="hot_coffee.php" role="tab" aria-controls="hot-coffees" aria-selected="true">Hot Coffees</a></li>
            <li><a class="nav-link" id="hot-teas-tab" data-toggle="pill" href="#hot-teas" role="tab" aria-controls="hot-teas" aria-selected="false">Hot Teas</a></li>
            <li><a class="nav-link" id="hot-drinks-tab" data-toggle="pill" href="#hot-drinks" role="tab" aria-controls="hot-drinks" aria-selected="false">Hot Drinks</a></li>
            <li><a class="nav-link" id="frap-tab" data-toggle="pill" href="#frap" role="tab" aria-controls="frap" aria-selected="false">Frappuccino Blended Beverages</a></li>
            <li><a class="nav-link" id="cold-coffees-tab" data-toggle="pill" href="#cold-coffees" role="tab" aria-controls="cold-coffees" aria-selected="false">Cold Coffees</a></li>
            <li><a class="nav-link" id="iced-teas-tab" data-toggle="pill" href="#iced-teas" role="tab" aria-controls="iced-teas" aria-selected="false">Iced Teas</a></li>
            <li><a class="nav-link" id="cold-drinks-tab" data-toggle="pill" href="#cold-drinks" role="tab" aria-controls="cold-drinks" aria-selected="false">Cold Drinks</a></li>
            <b class="nav-link">Food</b>
            <li><a class="nav-link" id="hot-breakfast-tab" data-toggle="pill" href="#hot-breakfast" role="tab" aria-controls="hot-breakfast" aria-selected="false">Hot breakfast</a></li>
            <li><a class="nav-link" id="bakery-tab" data-toggle="pill" href="#bakery" role="tab" aria-controls="bakery" aria-selected="false">Bakery</a></li>
			<li><a class="nav-link" id="lunch-tab" data-toggle="pill" href="#lunch" role="tab" aria-controls="lunch" aria-selected="false">Lunch</a></li>
            <li><a class="nav-link" id="snacks-tab" data-toggle="pill" href="#snacks" role="tab" aria-controls="snacks" aria-selected="false">Snacks & Sweets</a></li>
            <li><a class="nav-link" id="yogurt-tab" data-toggle="pill" href="#yogurt" role="tab" aria-controls="yogurt" aria-selected="false">Yogurt & Custard</a></li>
			<li><b class="nav-link">At Home Coffee</b>
			<li><a class="nav-link" id="whole-bean-tab" data-toggle="pill" href="#whole-bean" role="tab" aria-controls="whole-bean" aria-selected="false">Whole Bean</a></li>
			<li><a class="nav-link" id="verismo-pods-tab" data-toggle="pill" href="#verismo-pods" role="tab" aria-controls="verismo-pods" aria-selected="false">Verismo Pods</a></li>
			<li><a class="nav-link" id="via-instant-tab" data-toggle="pill" href="#via-instant" role="tab" aria-controls="via-instant" aria-selected="false">VIA Instant</a></li>
			<li><a class="nav-link" id="cold-brew-tab" data-toggle="pill" href="#cold-brew" role="tab" aria-controls="cold-brew" aria-selected="false">Cold Brew</a></li>
			<b class="nav-link">Shopping Bags</b>
			<li><a class="nav-link" id="shopping-bags-tab" data-toggle="pill" href="#shopping-bags" role="tab" aria-controls="shopping-bags" aria-selected="false">Shopping Bags</a></li>	
		  </ul>
        </div>
        
        <?php 
          require('mysqli_connect.php');
          $hot_coffees = "SELECT drinksname, image, price FROM drinks WHERE type = 'hot coffees' ";
          $brewed_coffees = "SELECT drinksname, image, price FROM drinks WHERE type = 'brewed coffees'";
          $hot_coffees_run = mysqli_query($dbc, $hot_coffees);
          $brewed_coffees_run = mysqli_query($dbc, $brewed_coffees);
          $hot_coffees_count = mysqli_num_rows($hot_coffees_run);
          $brewed_coffees_count = mysqli_num_rows($brewed_coffees_run);
        ?>
        <div class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="hot-coffees" role="tabpanel" aria-labelledby="hot-coffees-tab">
              <p id="path">Menu / <strong>Hot Coffees</strong></p>
              <h3>Hot Coffees</h3>
              <hr>
              <div class="row">
              <?php 
                if($hot_coffees_count>0){
                  while ($hot = mysqli_fetch_array($hot_coffees_run, MYSQLI_ASSOC)) { 
              ?>
                <div class="col-3 text-center">
                  <div>
                <form action="drinks.php" method="post">
                  <button type="submit"><img src="<?php echo $hot['image']?>" alt="<?php echo $hot['drinksname'];?>" class="img-circle rounded-circle" width="120"></button>
                  <p class="text-center" ><?php echo $hot['drinksname'];?></p>
                  <input type="hidden" name="drinksname" value="<?php echo $hot['drinksname'];?>"/>
                  <input type="hidden" name="image" value="<?php echo $hot['image'];?>"/>
                  <input type="hidden" name="price" value="<?php echo $hot['price'];?>"/>
                </form>
                  </div>
                </div>
              <?php
                  }
                }
              ?>
            </div>
			  
              <h3>Brewed Coffees</h3>
              <hr>
              <div class="row">
               <?php 
                    if($brewed_coffees_count>0){
                      while ($brewed = mysqli_fetch_array($brewed_coffees_run, MYSQLI_ASSOC)) { 
                  ?>
                    <div class="col-3 text-center">
                    <form action="drinks.php" method="post">
                      <button type="submit"><img src="<?php echo $brewed['image']?>" alt="<?php echo $brewed['drinksname'];?>" class="img-circle rounded-circle" width="120"></button>
                      <p class="text-center" ><?php echo $brewed['drinksname'];?></p>
                      <input type="hidden" name="drinksname" value="<?php echo $brewed['drinksname'];?>"/>
                      <input type="hidden" name="image" value="<?php echo $brewed['image'];?>"/>
                      <input type="hidden" name="price" value="<?php echo $brewed['price'];?>"/>
                    </form>
                    </div>
                  <?php
                      }
                    }
                  ?>			
              </div>



              <!--Not Available for php items-->
			  <h3>Cappuccinos</h3>
              <hr>
              <div class="row">
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/5c515339667943ce84dc56effdf5fc1b.jpg?impolicy=1by1_wide_1242" alt="Cappuccino" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Cappuccino</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/5c515339667943ce84dc56effdf5fc1b.jpg?impolicy=1by1_wide_1242" alt="Starbucks Blonde Cappuccino" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Blonde Cappuccino</p>
                </div>	
              </div> 
			  <h3>Espresso Shots</h3>
              <hr>
              <div class="row">
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/ec519dd5642c41629194192cce582135.jpg?impolicy=1by1_wide_1242" alt="Espresso" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Espresso</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/e9330b18ae524e69bdcbe97460d6f5bb.jpg?impolicy=1by1_wide_1242" alt="Espresso Con Panna" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Espresso Con Panna</p>
                </div>	
              </div> 
			  <h3>Flat Whites</h3>
              <hr>
              <div class="row">
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/fedee22e49724cd09fbcc7ee2e567377.jpg?impolicy=1by1_wide_1242" alt="Flat White" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Flat White</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/30ea475f30e744ecb72b9f72d87ea5f7.jpg" alt="Starbucks Blonde Flat White" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Blonde Flat White</p>
                </div>	
              </div> 
			  <h3>Lattes</h3>
              <hr>
              <div class="row">
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/741db5e629b34c739b3ecf4733aee4a3.jpg?impolicy=1by1_wide_1242" alt="Eggnog Latte" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Eggnog Latte</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/741db5e629b34c739b3ecf4733aee4a3.jpg?impolicy=1by1_wide_1242" alt="Starbucks Blonde Eggnog Latte" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Blonde Eggnog Latte</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/1039a0883ad548b69c5f93b9f76dbae2.jpg?impolicy=1by1_wide_1242" alt="Caramel Brulee Latte" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Caramel Brulee Latte</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/92cf4d884c3d4c0fa12605736d335ddb.jpg?impolicy=1by1_wide_1242" alt="Starbucks Blonde Caramel Brulee Latte" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Blonde Caramel Brulee Latte</p>
                </div>
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/7202df9b83c4419b8748263e73b4742f.jpg?impolicy=1by1_wide_1242" alt="Chestnut Praline Latte" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Chestnut Praline Latte</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/e576da99012845e6b1e16ec0acdf015c.jpg?impolicy=1by1_wide_1242" alt="Starbucks Blonde Chestnut Praline Latte" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Blonde Chestnut Praline Latte</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/b635f407bbcd49e7b8dd9119ce33f76e.jpg?impolicy=1by1_wide_1242" alt="Caffe Latte" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Caffe Latte</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/9329c03ce24f4623be25dd24d7537db2.jpg?impolicy=1by1_wide_1242" alt="Cinnamon Dolce Latte" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Cinnamon Dolce Latte</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/55083489399e435e81cf41d899051a5a.jpg?impolicy=1by1_wide_1242" alt="Starbucks Reserve Latte" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Reserve Latte</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/049d23aac19047f4b3a40532cc24b510.jpg?impolicy=1by1_wide_1242" alt="Starbucks Reserve Hazelnut Bianco Latte" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Reserve Hazelnut Bianco Latte</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/594c09a95efe47519f4b793c13aab64e.jpg" alt="Starbucks Blonde Vanilla Latte" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Blonde Vanilla Latte</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/b635f407bbcd49e7b8dd9119ce33f76e.jpg?impolicy=1by1_wide_1242" alt="Starbucks® Blonde Caffe Latte" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Blonde Caffe Latte</p>
                </div>	
              </div> 
			  <h3>Macchiatos</h3>
              <hr>
              <div class="row">
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/c2a647e72ace4d2da35b1d7b56b05d12.jpg?impolicy=1by1_wide_1242" alt="Cocoa Cloud Macchiato" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Cocoa Cloud Macchiato</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/c2a647e72ace4d2da35b1d7b56b05d12.jpg?impolicy=1by1_wide_1242" alt="Starbucks Blonde Cocoa Cloud Macchiato" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Blonde Cocoa Cloud Macchiato</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/6d8e64b212e843c2a960b2a7bdea44f9.jpg?impolicy=1by1_wide_1242" alt="Caramel Cloud Macchiato" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Caramel Cloud Macchiato</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/8842fc6157434ab985aee70479d12bcc.jpg?impolicy=1by1_wide_1242" alt="Starbucks Blonde Caramel Cloud Macchiato" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Blonde Caramel Cloud Macchiato</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/58db701349cb48738069e8c912e2b3ac.jpg?impolicy=1by1_wide_1242" alt="Caramel Macchiato" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Caramel Macchiato</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/26495f2a8b644fe8960dd74e1891b7b7.jpg?impolicy=1by1_wide_1242" alt="Espresso Macchiato" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Espresso Macchiato</p>
                </div>	
              </div> 
            </div>
			<h3>Mochas</h3>
              <hr>
              <div class="row">
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/ca435e1035e04487b6e2fa872a1f8ba7.jpg?impolicy=1by1_wide_1242" alt="Peppermint Mocha" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Peppermint Mocha</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/e33a910591d8437e8f0eb678c00f1210.jpg?impolicy=1by1_wide_1242" alt="Starbucks Blonde Peppermint Mocha" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Blonde Peppermint Mocha</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/7a326fe84639496f87326d60fb6ef342.jpg?impolicy=1by1_wide_1242" alt="Toasted White Chocolate Mocha" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Toasted White Chocolate Mocha</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/bba8a227ce534a84b75c5524dac1767b.jpg?impolicy=1by1_wide_1242" alt="Starbucks® Blonde Toasted White Chocolate Mocha" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Blonde Toasted White Chocolate Mocha</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/ce5bcd5f1ae549f69f57cf08157202a1.jpg?impolicy=1by1_wide_1242" alt="Peppermint White Chocolate Mocha" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Peppermint White Chocolate Mocha</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/b5086b57aee4498bbf389f4f227d70f7.jpg?impolicy=1by1_wide_1242" alt="Starbucks Blonde Peppermint White Chocolate Mocha" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Blonde Peppermint White Chocolate Mocha</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/d425c07148c5444db697694d0c0010ab.jpg?impolicy=1by1_wide_1242" alt="Salted Caramel Mocha" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Salted Caramel Mocha</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/d425c07148c5444db697694d0c0010ab.jpg?impolicy=1by1_wide_1242" alt="Starbucks Blonde Salted Caramel Mocha" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Blonde Salted Caramel Mocha</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/f4ec500b34624242b15c2d29e53f3c48.jpg?impolicy=1by1_wide_1242" alt="Caffe Mocha" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Caffe Mocha</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/ce6342b5aeea4607a0e866057e3b5a4c.jpg?impolicy=1by1_wide_1242" alt="Starbucks Reserve Dark Chocolate Mocha" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Starbucks Reserve Dark Chocolate Mocha</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/4b621e63f6ba4c19a8618055284eca8d.jpg?impolicy=1by1_wide_1242" alt="White Chocolate Mocha" class="img-circle rounded-circle" width="120">
                  <p class="text-center">White Chocolate Mocha</p>
                </div>	
              </div> 
			  <h3>Clover Brewed Coffees</h3>
              <hr>
              <div class="row">
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/43ad27c865f94d568f7272408127cda6.jpg?impolicy=1by1_wide_1242" alt="Christmas 2019 Starbucks Reserve Clover" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Christmas 2019 Starbucks Reserve Clover</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/5399d3d4174f45dabdfbd77763a5ccdf.jpg?impolicy=1by1_wide_1242" alt="Sun-dried Ethiopia Yirgacheffe Chelelektu Clover Starbucks Reserve" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Sun-dried Ethiopia Yirgacheffe Chelelektu Clover Starbucks Reserve</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/3d8d05eb40544dcba4ae7208cc986c63.jpg?impolicy=1by1_wide_1242" alt="Guatemala Antigua Santa Clara Estate Clover Starbucks Reserve" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Guatemala Antigua Santa Clara Estate Clover Starbucks Reserve</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/f4f0e3ec6c564a09af2a89eecde04537.jpg" alt="Hawaii Ka'u Clover Starbucks Reserve" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Hawaii Ka'u Clover Starbucks Reserve</p>
                </div>
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/a09204c8d2fc4b5d93943e552763914a.jpg?impolicy=1by1_wide_1242" alt="Pike Place Roast Clover" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Pike Place Roast Clover</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/f4604d4b4a1040c7afdee11eacaba1ed.jpg" alt="Organic Yukon Blend Clover" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Organic Yukon Blend Clover</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/c69fc25343ed45d28545bdc37f131a79.png" alt="Clover Costa Rica La Candelilla Starbucks Reserve" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Clover Costa Rica La Candelilla Starbucks Reserve</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/b707f32eee3d490bb9a3b3cdbfd0103f.jpg" alt="Gold Coast Clover" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Gold Coast Clover</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/746cc51f0a184b18b5369e2a2526197c.jpg" alt="Breakfast Blend Clover" class="img-circle rounded-circle" width="120">
                  <p class="text-center">Breakfast Blend Clover</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/660f3ac0b1924c0f904ff11ac914d76e.png" alt="Clover Ethiopia Bitta Farm Starbucks Reserve" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">Clover Ethiopia Bitta Farm Starbucks Reserve</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/bb9f7885fe514d79ab6e57f84ba37108.jpg" alt="Kenya Clover" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">Kenya Clover</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/ef70c21bc9474add8e402baaef675acd.jpg" alt="Veranda Blend Clover" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">Veranda Blend Clover</p>
                </div>
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/3da91c8569494a4bad44387a7c985542.jpg" alt="Guatemala Antigua Clover" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">Guatemala Antigua Clover</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/5cde992e278348879bdf6c1ce14665cd.jpg" alt="Willow Blend Clover" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">Willow Blend Clover</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/55012993380a4dd5ae2c22143dbd389a.jpg" alt="Decaf Sumatra Clover" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">Decaf Sumatra Clover</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/33d438a979334f4791befa1d451fba86.jpg" alt="Caffe Verona Clover" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">Caffe Verona Clover</p>
                </div>
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/6d2e93b03f0d47d89f1087eab71cf97b.jpg?impolicy=1by1_wide_1242" alt="Decaf Pike Place Roast Clover" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">Decaf Pike Place Roast Clover</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/3692176ddd10433c994a22df593ceca3.jpg" alt="Espresso Roast Clover" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">Espresso Roast Clover</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/1e873730fb2d419d9e7dd78a95585aa1.jpg" alt="Decaf Espresso Roast Clover" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">Decaf Espresso Roast Clover</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/09be4dcdfa4f48bca5da4808c1ee1d7f.jpg" alt="Ethiopia Clover" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">Ethiopia Clover</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/87bda87afc1e47ae88c0393581c30610.jpg" alt="French Roast Clover" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">French Roast Clover</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/c3d19bd8b3374fd5be70f4592f73b52c.jpg" alt="Italian Roast Clover" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">Italian Roast Clover</p>
                </div>	
				<div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/10e76a273237450594762b3b88d80b64.jpg" alt="Komodo Dragon Clover" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">Komodo Dragon Clover</p>
                </div>
                <div class="col-2">
                  <img src="https://globalassets.starbucks.com/assets/cbb9f9966b684ba485581a1fa80f3271.jpg" alt="Sumatra Clover" class="img-thumbnail rounded-circle" width="120">
                  <p class="text-center">Sumatra Clover</p>
                </div>	
              </div> 
            </div>
			
			
            
          </div>
        </div>
      </div>
	  </div>
	  
	  	
	<footer class="page-footer font-small stylish-color-dark pt-4">
			<div class="container text-center text-md-left">
				<div class="row" id="aboutus">
					<div class="col-sm mx-auto">
						<h6 class="font-weight-bold"> About Us</h6>
							<ul class="list-unstyled">
							  <li>
								<a href="#"> Our Heritage </a>
							  </li>
							  <li>
								<a href="#"> Our Coffee </a>
							  </li>
							  <li>
								<a href="#"> Stories and News </a>
							  </li>
							  <li>
								<a href="#"> Investor Relations </a>
							  </li>
							  <li>
								<a href="#"> Policies and Standards </a>
							  </li>
							  <li>
								<a href="#"> Customer Service </a>
							  </li>
							</ul>
					</div>

					<div class="col-sm mx-auto">
						<h6 class="font-weight-bold"> Careers </h6>
							<ul class="list-unstyled">
							  <li>
								<a href="#"> Culture and Values </a>
							  </li>
							  <li>
								<a href="#"> Diversity and Inclusion </a>
							  </li>
							  <li>
								<a href="#"> College Achievement Plan </a>
							  </li>
							  <li>
								<a href="#"> U.S. Careers </a>
							  </li>
							  <li>
								<a href="#"> International Careers </a>
							  </li>
							</ul>
					</div>

					<div class="col-sm mx-auto">
						<h6 class="font-weight-bold"> Social Impact</h6>
							<ul class="list-unstyled">
								<li>
									<a href="#"> Ethnical Sourcing </a>
								</li>
								<li>
									<a href="#"> Leading in Sustainability </a>
								</li>
								<li>
									<a href="#"> Strengthening Communities </a>
								</li>
								<li>
									<a href="#"> Creating Opportunities </a>
								</li>
								<li>
									<a href="#"> Global Social Impact Report </a>
								</li>
							</ul>
					</div>

					<div class="col-sm mx-auto">
						<h6 class="font-weight-bold"> For Business Partners </h6>
							<ul class="list-unstyled">
									<li>
										<a href="#"> Landlord Support Center </a>
									</li>
									<li>
										<a href="#"> Suppliers </a>
									</li>
									<li>
										<a href="#"> Corporate Gift Card Sales </a>
									</li>
							</ul>
					</div>

					<div class="col-md mx-auto">
						<h6 class="font-weight-bold"> Ways To Order </h6>
							<ul class="list-unstyled">
									<li>
										<a href="#"> Order on the Web </a>
									</li>
									<li>
										<a href="#"> Download the App </a>
									</li>
									<li>
										<a href="#"> Delivery </a>
									</li>
									<li>
										<a href="#"> Google Assistant </a>
									</li>
							</ul>
					</div>
				</div>
			</div>

		<hr />

			<ul class="container text-center text-sm-left list-unstyled list-inline" id="social_media">
				<li class="list-inline-item">
					<a href="#"><i class="fa fa-spotify" id="spotify"></i></a>
				</li>
				<li class="list-inline-item">
					<a href="#"><i class="fa fa-facebook-f" id="facebook"></i></a>
				</li>
				<li class="list-inline-item">
					<a href="#"><i class="fa fa-pinterest-p" id="pinterest"></i></a>
				</li>
				<li class="list-inline-item">
					<a href="#"><i class="fa fa-instagram" id="instagram"></i></a>
				</li>
				<li class="list-inline-item">
					<a href="#"><i class="fa fa-youtube-play" id="youtube"></i></a>
				</li>
				<li class="list-inline-item">
					<a href="#"><i class="fa fa-twitter" id="twitter"></i></a>
				</li>
			 </ul>


			<div class="container text-center text-sm-left" id="policy">
				<div class="row">
					<div class="col-md mx-auto" id="privacy">
						<a href="#"> Privacy Policy </a>
					</div>

					<div class="col-md mx-auto" id="term">
						<a href="#"> Terms of Use </a>
					</div>
					
					<div class="col-md mx-auto" id="CA">
						<a href="#"> CA Supply Chain Act </a>
					</div>

					<div class="col-md mx-auto">
						<a href="#" id="idea"> Submit Your Idea</a>
					</div>
				</div>
			</div>

			<div id="copyright"> © 2019 Starbucks Coffee Company. All rights reserved.</div>
			
			<br/>
			<br/>
		</footer>
    
	<?php 
      $query = 'SELECT * FROM products ORDER BY product_id ASC';
      $run = mysqli_query($dbc, $query);
      $count = mysqli_num_rows($run);
    ?>
   <div class="footer">
    <a href="cart.php"><img class="shopping bag" src="https://png.pngtree.com/png-vector/20190329/ourlarge/pngtree-vector-shopping-bag-icon-png-image_889429.jpg" width="40" alt="shopping bag"/>
      <span class="pickup"><?php echo $count; ?></span>
    </a>
    </div>

    <script type="text/javascript">
      $('.col-2').addClass('col-3').removeClass("col-2").addClass('text-center');
    </script>
    <?php mysqli_close($dbc);?>
	
	
		
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>