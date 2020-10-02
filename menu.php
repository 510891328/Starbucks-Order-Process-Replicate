<! DocTYPE html>
<html lang="en">
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link href="menu.css" rel="stylesheet" type="text/css" />
		<title> Menu: Starbucks Coffee Company </title>
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
		</div>
		
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
		
		 <div class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
              <h4><strong>Menu</strong></h4>
			  <div class="container">
			   <h5><strong>Drinks</strong></h5>
			   <hr>
              <div class="row">
                <div class="col-3 ">
				  <a href="hot_coffee.php"><img src="https://globalassets.starbucks.com/assets/f12bc8af498d45ed92c5d6f1dac64062.jpg?impolicy=1by1_wide_1242" alt="Hot Coffees" class="img-circle rounded-circle" width="120"></a></div>
				<div class="col-3 "><p class="align-middle" >Hot Coffees</p>
                </div>
                <div class="col-3">
                  <img src="https://globalassets.starbucks.com/assets/2d52f16a22fb40ff898be1815ecc952e.jpg?impolicy=1by1_wide_1242" alt="Hot Teas" class="img-circle rounded-circle" width="120"></div>
                <div class="col-3 "><p class="align-middle">Hot Teas</p>
                </div>	
                <div class="col-3">
				  <img src="https://globalassets.starbucks.com/assets/99b509a20b78419d965135d75a8cbbdb.jpg?impolicy=1by1_wide_1242" alt="Hot Drinks" class="img-circle rounded-circle" width="120"></div>
				  <div class="col-3"><p class="align-middle" >Hot Drinks</p>
                </div>
                <div class="col-3">
                  <img src="https://globalassets.starbucks.com/assets/eacda97022ca470db92afd9870e948b3.jpg?impolicy=1by1_wide_1242" alt="Frappuccino Blended Beverages" class="img-circle rounded-circle" width="120"></div>
                  <div class="col-3"><p class="align-middle">Frappuccino Blended Beverages</p>
                </div>	
				<div class="col-3">
                  <img src="https://globalassets.starbucks.com/assets/1791fd99e33248be844d360c90429bcd.jpg?impolicy=1by1_wide_1242" alt="Cold Coffees" class="img-circle rounded-circle" width="120"></div>
                  <div class="col-3"><p class="align-middle">Cold Coffees</p>
                </div>	
				<div class="col-3">
                  <img src="https://globalassets.starbucks.com/assets/7b51b01b4a394a829ff9df4ef9f3be3c.jpg?impolicy=1by1_wide_1242" alt="Iced Teas" class="img-circle rounded-circle" width="120"></div>
                  <div class="col-3"><p class="align-middle">Iced Teas</p>
                </div>	
				<div class="col-3">
                  <img src="https://globalassets.starbucks.com/assets/7fe2123728f844849ae4f9ea01473468.jpg?impolicy=1by1_wide_1242" alt="Cold Drinks" class="img-circle rounded-circle" width="120"></div>
                  <div class="col-3"><p class="align-middle">Cold Drinks</p>
                </div>	
              </div>
			</div>
			
			 <h5><strong>Food</strong></h5>
              <hr>
			  <div class="row">
                <div class="col-3">
				  <img src="https://globalassets.starbucks.com/assets/527497c5d3444b109c96990d007ce5ef.jpg" alt="Hot Breakfast" class="img-circle rounded-circle" width="120"></div>
				  <div class="col-3"><p class="align-middle" >Hot Breakfast</p>
                </div>
                <div class="col-3">
                  <img src="https://globalassets.starbucks.com/assets/d219588974da42e1a00decf48687974f.jpg?impolicy=1by1_wide_1242" alt="bakery" class="img-circle rounded-circle" width="120"></div>
                  <div class="col-3"><p class="align-middle">Bakery</p>
                </div>	
                <div class="col-3">
				  <img src="https://globalassets.starbucks.com/assets/113e06e87211480689383143d8d8b96b.jpg?impolicy=1by1_wide_1242" alt="lunch" class="img-circle rounded-circle" width="120"></div>
				  <div class="col-3"><p class="align-middle" >Lunch</p>
                </div>
                <div class="col-3">
                  <img src="https://globalassets.starbucks.com/assets/545c791eddd5449d9f6601cfabf9dc3a.jpg?impolicy=1by1_wide_1242" alt="Snacks & Sweets" class="img-circle rounded-circle" width="120"></div>
                  <div class="col-3"><p class="align-middle">Snacks & Sweets</p>
                </div>	
				<div class="col-3">
                  <img src="https://globalassets.starbucks.com/assets/73308a1b894347e19d4f1e807beb1c85.jpg" alt="Yogurt & Custard" class="img-circle rounded-circle" width="120"></div>
                  <div class="col-3"><p class="align-middle">Yogurt & Custard</p>
                </div>	
              </div>
			 <h5><strong>At Home Coffee</strong></h5>
              <hr>
              <div class="row">
                <div class="col-3">
				  <img src="https://globalassets.starbucks.com/assets/6357970b0e2f419fabfaeb0f2cdfc705.jpg?impolicy=1by1_wide_1242" alt="Whole Bean" class="img-circle rounded-circle" width="120"></div>
				  <div class="col-3"><p class="align-middle" >Whole Bean</p>
                </div>
                <div class="col-3">
                  <img src="https://globalassets.starbucks.com/assets/833e95732cc849a4b1fe1d315771ae0a.jpg?impolicy=1by1_wide_1242" alt="Verismo Pods" class="img-circle rounded-circle" width="120"></div>
                  <div class="col-3"><p class="align-middle">Verismo Pods</p>
                </div>	
                <div class="col-3">
				  <img src="https://globalassets.starbucks.com/assets/311317def79d4cc9864164a74f6dc22b.jpg" alt="VIA Instant" class="img-circle rounded-circle" width="120"></div>
				  <div class="col-3"><p class="align-middle" >VIA Instant</p>
                </div>
				<div class="col-3">
                  <img src="https://globalassets.starbucks.com/assets/fc5466b84b7d4153bc780fd11260c3ca.jpg" alt="Cold Brew" class="img-circle rounded-circle" width="120"></div>
                  <div class="col-3"><p class="align-middle">Cold Brew</p>
                </div>	
              </div>
			 <h5><strong>Shopping Bags</strong></h5>
              <hr>
              <div class="row">
                <div class="col-3">
				  <img src="https://globalassets.starbucks.com/assets/5d2937e197934c10b3901fb237440163.jpg" alt="Shopping Bags" class="img-circle rounded-circle" width="120"></div>
				  <div class="col-3"><p class="align-middle" >Shopping Bags</p>
                </div>
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

			<p id="copyright"> © 2019 Starbucks Coffee Company. All rights reserved.</p>
			<br/>
			<br/>
		</footer>
		
		<?php 
          require('mysqli_connect.php');
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
	
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>