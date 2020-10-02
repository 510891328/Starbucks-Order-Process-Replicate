<! DocTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="addins_edit_style.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="addins_edit.js"></script>
		<link href="cart.css" rel="stylesheet" type="text/css" />
		<link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Starbucks_Corporation_Logo_2011.svg/1200px-Starbucks_Corporation_Logo_2011.svg.png" type="image" />
    <title>Shopping Cart: Starbucks Coffee Company</title>
	</head>
	
<body>
            <?php 
              require('mysqli_connect.php');
              $query = 'SELECT * FROM products ORDER BY product_id ASC';
              $run = mysqli_query($dbc, $query);
              $count = mysqli_num_rows($run);
            ?>
      <!--Left-->
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-4 review-board">
		<div id="review-top">
			<a href="home.php" id="icon">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/d/d3/Starbucks_Corporation_Logo_2011.svg/1200px-Starbucks_Corporation_Logo_2011.svg.png" width=50/>
			</a>
			<a href="menu.php" class="rtm"> ˂ Back to Menu</a>
		</div>
        <h3 class="color-textWhite text-bold"> Review Order(<?php echo $count; ?>)</h3>
      </div>
      <!--Right-->

      <div class="col-lg-8" id="right_panel">
<?php
    if($count>0){
      $total = 0;
      $tax = 0.0875;
      while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){
        $total += $row['price'];
        ?>
        <div class="container-fluid d-flex align-items-center justify-content-between" id="items">
          <div class="col-lg-3"></div><div class="col-lg-3"><img src="<?php echo $row['image']; ?>" class="img-fluid rounded-circle"></div>
          <div class="col-lg-3">
              <div>
                <?php echo $row['drinksname']; ?>
              </div>
              <div>
                <?php echo $row['size']; ?>
              </div>
              <div>
                <?php echo $row['addins_value'];?>
              </div>
              <div>
                <?php echo "$ "; echo $row['price'];?>
              </div>
              <form onsubmit="setTimeout(function () { window.location.reload(); }, 10)" action="delete_add.php" method="post" >
                <input type="hidden" name="cart_product" value="<?php echo $row['product_id']; ?>">
                <input class="deletebttn"  type="submit" name="action" value="-">
                <input class="addbttn" type="submit" name="action" value="+">
              </form>
          </div>
          <div class="col-lg-3"></div>
        </div>    
<?php } ?>
        <div class="container-fluid d-flex align-items-center justify-content-between" id="items">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
              <div class="d-flex justify-content-between border-bottom">
                <span>Subtotal</span><span><?php echo '$ '; echo number_format($total, 2,'.', ',');?></span>
              </div>
              <div class="d-flex justify-content-between border-bottom">
                <span>Tax(8.875%)</span><span><?php echo '$ '; echo number_format($total*$tax, 2,'.', ','); ?></span>
              </div >
              <div class="d-flex justify-content-between border-bottom">
                <span><b>Total</b></span><span><b><?php echo '$ '; echo number_format($total + $total*$tax, 2,'.', ','); ?></b></span>
              </div>
          </div>
          <div class="col-lg-3"></div>
        </div>    
      
	  <div>
		<div class="confirm hideform">
        <button class="cart-payment-close" id="close">X</button>
        <form action="thankyou.php" method="post">
          <div class="form-group">
          <label>First Name: </label>
          <input type="text" name="FirstName">
        </div>
		<div class="form-group">
          <label>Last Name: </label>
          <input type="text" name="LastName">
        </div>
		<div class="form-group">
          <label>Card Number: </label>
          <input type="text" name="card_number">
        </div>
		
		<br/>
		
		<div class="form-group">
		<div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
              <div class="d-flex justify-content-between border-bottom">
                <span>Subtotal</span><span><?php echo '$ '; echo number_format($total, 2,'.', ',');?></span>
              </div>
              <div class="d-flex justify-content-between border-bottom">
                <span>Tax(8.875%)</span><span><?php echo '$ '; echo number_format($total*$tax, 2,'.', ','); ?></span>
              </div >
              <div class="d-flex justify-content-between border-bottom">
                <span><b>Total</b></span><span><b><?php echo '$ '; echo number_format($total + $total*$tax, 2,'.', ','); ?></b></span>
              </div>
          </div>
          <div class="col-lg-3"></div>
        </div>  
          <input class="cart-payment-submit" type="submit" value="Place Order"/>
        </div>
        </form>
      </div>
      
      <button class="continuebttn" id="show">Checkout<?php echo '  $ '; echo number_format($total + $total*$tax, 2,'.', ','); ?></button>
   
      <script>
          $('#show').on('click', function () {
              $('.confirm').show();
              $(this).hide();
          })
		  
		  $('#show').click(function () {
              $('#items').css({'background':'grey', 'opacity':'0.5'});
          })

          $('#close').on('click', function () {
            $('.confirm').hide();
            $('#show').show();
          })
		  
		  $('#close').click(function () {
              $('#items').css({'background':'transparent', 'opacity':'1'});
          })
      </script>

      </div>
    <?php 
          }else{
    ?>
    <div class="text md-tetx-left-lg-mt7" id="empty">
          <img src="emptyBag.PNG" width=200/>
    <div><p id="start_order">Start your next order</p></div>
    <div><p id="empty_text">As you add menu items, they'll appear here. You'll have a chance to review before placing your order.</p></div>
    <div class="d-flex align-items mb7">
       <button id="add_items"><a href="menu.php" class="sb-button">Add items</a></button>
      <div>
      <?php } mysqli_close($dbc)?>
   </div>
 </div>
</div>
</div>

</body>
</html>