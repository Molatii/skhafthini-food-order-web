<?php 
session_start();
      
?>
<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
 
</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">make an order</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>

			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	<?php
	$food = explode(",",
	$_POST['food']);
	$food_name = $food[0];
	$food_price = $food[1];

	/*if session is empty user can not order(not registered)*/
	if (!isset($_SESSION["unique_no"])){
	
	 echo '<script>alert("You have to log in first to make an order!.... Note: we are taking you to log in page")</script>';
	

	
		header("Location: c_log.html");	
		}		
		
	
	 
	 
	
	
	?>
	   
	  <form action="final_order.php" method="POST">
	  
	
	   
	 <fieldset class="looks" >
	 	 <style>.lolos { background-color:green; }</style>
	     <legend class="lolos">CONTINUE BELOW</legend>
		 
		 <label type="ORDER NAME:">ORDER NAME:<?php echo "".$food_name;
		 $_SESSION["name"]=$food_name;
		 ?> </label><br>
		
		 
			
		
		<label type="PRICE:">PRICE:<?php printf("%.2f",$food_price); 
		$_SESSION["price"]=$food_price;
		?>
		</label><br>	
		 	   
		 <br>
	    <label type="QUANTITY">QUANTITY</label><br>
		<input type="number" name="QUANTITY" Placeholder="Quantity of order" required><br>
		

		<label type="order_type">ORDER TYPE</label><br>
		<select> <option>PICK UP</option>
				<option>DELIVER</option>
		</select>
	   <br>
	   	<label type="LOCATION">LOCATION (if ORDER TYPE IS DELIVER)</label><br>
		<input type="text" name="LOCATION" Placeholder="your location"><br>
		
	   <label type="Distance">DISTANCE(kms)--(write if order type is delivery )</label><br>
	   <input type="number" name="Distance" placeholder="write number -ONLY-"/><br>
	   <br>
	   <button type="submit" name="submit">PROCEED</button>
	  </fieldset>
	
	  
	 
	  </form>
	  
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	  


</body>
</html>