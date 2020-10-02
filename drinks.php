<?php
  $drinksname = $_POST['drinksname'];
  $image = $_POST['image'];
  $price = $_POST['price'];
?>
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
		<link href="drinks.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="addins_edit_style.css">
		<script src="addins_edit.js"></script>
		<link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Starbucks_Corporation_Logo_2011.svg/1200px-Starbucks_Corporation_Logo_2011.svg.png" type="image" />
    <title><?php echo $drinksname ?>:Starbucks Coffee Company</title>
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
    
	<!--Main-->
       <!--Main-->
      <!--Left-->
  <div class="container-fluid" id="info">
	  <div class="row align-items-center">
		<div class="col-lg-4" id="left_panel">
      <div class="container-fluid">
			<h1><?php echo $drinksname ?></h1>
			<div>
				Espresso shots are topped with hot water to produce a light layer of crema. The result is this wonderfully rich cup with depth and nuance. Pro tip: for additional caffeine, ask your barista to try this with an extra shot (75 mg caffeine per shot).
			</div>
      </div>
		</div>
      <!--Right-->
		<div class="col-lg-8" id="right_panel">
        <!--Form 1-->
			<div class="row">
			<div class="col-lg-6">
          <!--sbs-->
				<div class="flex-column">
          <img class="img-fluid rounded-circle mx-auto d-block" src="<?php echo $image?>">
          <h2 class="my-4">Customization</h2>

					<form onsubmit="setTimeout(function () { window.location.reload(); }, 10)" action="order.php" method="post">

            <input name="drinksname" value="<?php echo $drinksname ?>" type="hidden"/>
            <input name="image" value="<?php echo $image ?>" type="hidden"/>
            <input name="price" value="<?php echo $price?>" type="hidden"/>

            <div class="d-flex my-4 justify-content-between">
              <label for="size">Size</label>
              <div>
              <select name="size" class="custom-select">
                <option value="short">Short(8oz)</option>
                <option value="tall">Tall(12oz)</option>
                <option value="grande">Grande(16oz)</option>
                <option value="venti">Venti(20oz)</option>
              </select>
              </div>
            </div>
            <div class="d-flex my-4 justify-content-between align-items-end">
              <label for="addins" class="floatLabel">Add-ins</label>  
                <ul id="addins_list">
                    <li id="addins_value"></li>
                    <input type="hidden" name="addins_value" id="addins_value_value" value="">
                </ul>
              <button type="button" id="addins">Edit</button>
                
            </div>
            <div class="d-flex my-4 justify-content-between">
              <label for="espresso_shot">Espresso Shot Options</label>
              <button type="button" id="espresso_shot">Edit</button>
            </div>
            <div class="d-flex my-4 justify-content-between">
              <label for="toppings">Toppings</label>
              <button type="button" id="toppings">Edit</button>
            </div>
            <div class="d-flex my-4 justify-content-between">
              <label for="flavors">Flavors</label>
              <button type="button" id="flavors">Edit</button>
            </div>
            <div class="d-flex my-4 justify-content-between">
              <label for="teas">Teas</label>
              <button type="button" id="teas">Edit</button>
            </div>
            <div class="d-flex my-4 justify-content-between">
              <label for="cup-options">Cup Options</label>
              <button type="button" id="cup-options">Edit</button>
            </div>
            
            <div><input type="submit" name="submit" id="done" value="Add to Order"/></div>
          </form>
				</div>
			</div>
        <!--Form 2-->
			<div class="col-lg-6">
				<div class="flex-column">
					<h2>Nutrition Information</h2>
          <p>Nutrition information is calculated based on our standard recipes. Only changing drink size will update this information. Other customizations will not.</p>
          <div class="subtitle">Serving Size 16 fl oz</div>
          <div class="data data d-flex justify-content-between">
            <span class="bold">Calories15</span>
            <span>Calories from Fat 0</span>
          </div>
          <div class="subdata d-flex justify-content-end">% Daily Value *</div>
          <div class="subdata bold">Total Fat 0 g</div>
          <div class="subsubdata">Saturated Fat 0 g</div>
          <div class="subsubdata">Trans Fat 0 g</div>
          <div class="subdata bold">Cholesterol 0 mg</div>
          <div class="subdata d-flex justify-content-between">
            <span class="bold">Sodium 10 mg</span>
            <span>0%</span>
          </div>
          <div class="subdata d-flex justify-content-between">
            <span class="bold">Total Carbohydrates 2 g</span>
            <span>1%</span>
          </div>
          <div class="subsubdata">Dietary Fiber 0 g</div>
          <div class="subsubdata">Sugars 0 g</div>
          <div class="subdata d-flex justify-content-between">
            <span class="bold">Protein 1 g</span>
            <span>2%</span>
          </div>
          <div class="subdata bold">Caffeine 225 mg</div>
          <div class="p-2">* 2,000 calories a day is used for general nutrition advice, but calorie needs vary.</div>
          <h3>Ingredients</h3>
          <div class="bold">Water, Brewed Espresso</div>
          <div class="pt-3 bold">Allergens</div>
          <div class="p-2">Not available for this item</div>
          <div>We cannot guarantee that any unpackaged products served in our stores are allergen-free because we use shared equipment to store, prepare, and serve them. Customers with allergies can find ingredient information for products on the labels of our packaged products or online at Starbucks.com/menu.</div>
				</div>
				
		<br/>
          <!--sbs-->
			</div>
			</div>
		</div>
	</div>
</div>
   
   
   
   <!--addins edit code-->
   
   <div id="addins_edit_wrapper">
       <div id="addins_edit_content">
          <div class="addins_edit_content2" id="edit_form">
              <div class="addins_section1">
               <h3>Add-ins</h3>
               </div>
               <div class="addins_section2">
					<h6>CREAMER</h6>
					<br>
                    <form id="addins_edit_form" action="">
						<div id= "1%_milk">
                        <label for="milk_1">Splash of 1% Milk</label>
                        <select id="milk_1_selection">
                          <option value="Extra_1">Extra Splash of 1% Milk</option>
                          <option value="Light_1">Light Splash of 1% Milk</option>
                          <option value="Splash_1">Splash of 1% Milk</option>
                        </select>
						</div>
						
                        <br>
						
                        <div id= "2%_milk">
						<label for="milk_1">Splash of 2% Milk</label>
                        <select id="milk_1_selection">
                          <option value="Extra_1">Extra Splash of 2% Milk</option>
                          <option value="Light_1">Light Splash of 2% Milk</option>
                          <option value="Splash_1">No Splash of 2% Milk</option>
                          <option value="Splash_1">Splash of 2% Milk</option>
                        </select>
						</div>
                        
						<br>
						
						<div id= "almondmilk">
                        <label for="milk_1">Splash of Almondmilk</label>
                        <select id="milk_1_selection">
                          <option value="Extra_1">Extra Splash of Almondmilk</option>
                          <option value="Light_1">Light Splash of Almondmilk</option>
                          <option value="Splash_1">Splash of Almondmilk</option>
                        </select>
						</div>
						
                        <br>
						
						<div id= "coconutmilk">
                        <label for="milk_1">Splash of Coconutmilk</label>
                        <select id="milk_1_selection">
                          <option value="Extra_1">Extra Splash of Coconutmilk</option>
                          <option value="Light_1">Light Splash of Coconutmilk</option>
                          <option value="No_Splash">No Splash of Coconutmilk</option>
                          <option value="Splash_1">Splash of Coconutmilk</option>
                        </select>
						</div>
						
                        <br>
						
						<div id= "cream">
                        <label for="milk_1">Splash of Cream (Half & Half)</label>
                        <select id="milk_1_selection">
                          <option value="Extra_1">Extra Splash of Cream (Half & Half)</option>
                          <option value="Light_1">Light Splash of Cream (Half & Half)</option>
                          <option value="Splash_1">Splash of Cream (Half & Half)</option>
                        </select>
						</div>
						
                        <br>
						
						<div id= "heavycream">
                        <label for="milk_1">Splash of Heavy Cream</label>
                        <select id="milk_1_selection">
                          <option value="Extra_1">Extra Splash of Heavy Cream</option>
                          <option value="Light_1">Light Splash of Heavy Cream</option>
                          <option value="Splash_1">Splash of Heavy Cream</option>
                        </select>
						</div>
						
                        <br>
						
						<div id="nonfatmilk">
                        <label for="milk_1">Splash of Nonfat Milk</label>
                        <select id="milk_1_selection">
                          <option value="Extra_1">Extra Splash of Nonfat Milk</option>
                          <option value="Light_1">Light Splash of Nonfat Milk</option>
                          <option value="Splash_1">Splash of Nonfat Milk</option>
                        </select>
						</div>

                        <span id="submit_form">	Done </span>

                    </form>
               </div>
          </div>
       </div>
   </div>
   
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

</body>
</html>