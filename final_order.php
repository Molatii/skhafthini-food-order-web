<?php session_start();
?>
<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine final order page </title>
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
	  <br>
	   
	   
	   <form  action="confirmation.php" method="POST" >
	   
	 <fieldset class="looks" >
	 <style>.lolos { background-color:green; }</style>
	     <legend class="lolos">MAKE PAYMENT</legend>
		 
		 
		<?php 
	     $quantity=$_POST['QUANTITY'];
		 $distance=$_POST['Distance'];
		 $location=$_POST['LOCATION'];
		 /*$order_type=$_POST['order_type'];*/
		 		
		 echo "QUANTITY  IS :".$quantity.'<br>';
				 
		 $_SESSION["price"] = $_SESSION["price"] * $quantity;
			
		 
		 if ($distance > "10" || $distance > "0"  )
		 {
		    $num=$distance-10;
			$fee=5*$num;
		 $_SESSION["price"] = $_SESSION["price"] + $fee;
		 
		  echo "DISTANCE(kms) IS: ".$distance.'<br>';
		  echo "LOCATION  IS :".$location.'<br>';
		  echo "NEW PRICE IS (Quantity + Distance) :" . $_SESSION["price"]."<br>";	
		 }
		 else
		 {
		 echo "NEW PRICE IS (Quantity ADDED) :" . $_SESSION["price"]."<br>";
		 
		   
		 
		 }
		 $_SESSION["quantity"]=$quantity;
		 $_SESSION["distance"]=$distance;	
		
		 /*$_SESSION["order_type"]=$order_type;*/
		 
		 if($distance < "1"){
		 $_SESSION["order_type"]="Pic Up";
		  $_SESSION["location"]="not required(Pic-up)";
		 }else
		 {
		 
		 $_SESSION["order_type"]="Delivery";
		  $_SESSION["location"]=$location;
		 }
		 
		 
	   ?>
		 <br>
		 
		 
		 
	    <label type="CARD NUMBER">CARD NUMBER</label><br>
		<input type="number" name="CARD NUMBER" Placeholder="CREDIT CARD NUMBER" required><br>
		
		
		<label type="CARD TYPE">CARD TYPE</label><br>
		<select> 
		        <option>VISA</option>
				<option>MASTER_CARD</option>
		</select>
	   <br>
	   <label type="CARD PIN">CARD PIN </label><br>
	   <input type="number" name="card pin" placeholder="CREDIT CARD PIN" required/><br>
	   
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
