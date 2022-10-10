<?php session_start();
?>

<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine comfirmation page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
 
</head>
<body onload="alert('ALMOST DONE.....PLEASE CONFIRM YOUR ORDER')">
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">make an order</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
                     
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	  <script>    </script>
		<!--make onload alert for confirmation-->	
		<?php
	    $card_no=$_POST['CARD_NUMBER'];
		$_SESSION["card_no"]=$card_no;	
			
	    ?>
				
	   <form class="looks" action="store_order.php" method="post">   
	   <fieldset>
	  	 <style>.lolos { background-color:green; }</style>
	     <legend class="lolos">ORDER CONFIRMATION</legend>

		 <label type="TIME" name="date">DELIVERY OR PICK UP DATE: :(ORDER IS DELIVERED OR PICKED UP WITHIN 15 MINUTES)</label><br> 
		 <label type="TIME" name="date">DATE IS:<font color="red">   <?php  date_default_timezone_set('Africa/Johannesburg');  echo "".date('Y-m-d-H:i:sA'); ?>   </font></label><br>
		 <?php
		
		$thedate = date('H:i:s');
		$addedtime = date('H:i:s',strtotime('+20 minutes',strtotime($thedate)));
		echo "EXPECTED TIME : ".$addedtime ;
		
		 
		 ?>
		 <br>
		 <br>
		 
	    <label type="CARD NUMBER:">CARD NUMBER:<?php echo "".$_SESSION["card_no"].""; ?> </label><br>
		<label type="ORDER NAME:">ORDER NAME:<?php echo "".$_SESSION["name"]."";?> </label><br>
		<label type="DISTANCE:">DISTANCE:<?php echo "".$_SESSION["distance"].""; ?> </label><br>
		<label type="QUANTITY:">QUANTITY:<?php echo "".$_SESSION["quantity"].""; ?> </label><br>
		<label type="LOCATION:">LOCATION:<?php echo "".$_SESSION["location"].""; ?> </label><br>
	    <label type="PRICE:">PRICE:<?php echo "".$_SESSION["price"]."";?></label>	<br>
		<label type="ORDER TYPE:">ORDER TYPE:<?php echo "".$_SESSION["order_type"].""; ?> </label><br>
		<br>
		<label type="CLIENT UNIQUE_NO:">CLIENT UNIQUE_NO:<?php echo "".$_SESSION["unique_no"].""; ?> </label><br>
		
		<label type="RESTAURANTS NAME:">RESTAURANTS NAME:<?php echo "".$_SESSION["restaurant_name"].""; ?> </label><br>
	
	   <br>
	   <button type="submit" name="submit" onclick="alert('THANK YOU....YOUR ORDER IS PLACED')">CONFIRM & Place order</button>
	   
  <br>
  
	   
	   
	   
	   
	  </fieldset>
	  </form>
	

	  
	  
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	  


</body>
</html>
