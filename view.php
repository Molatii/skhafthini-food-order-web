<?php session_start();
?>
<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine view orders page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
 
</head>
<body onload="alert('Please note that You will be charged M5.00 if you chancel an order')">
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">view</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
                      <li><a href="c_log_collect.php"><button type="submit" name="submit">BACK (client page)</button> </a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	  	  <table class="view">
	  <tr>
	  <th>Order_ID</th>
	  <th>Phone_No</th>
	  <th>Quantity</th>
	  <th>Price</th>
	  <th>Restaurant_Name</th> 
	  <th>Meal_Name</th>
	  <th>Order_Status</th> 
	  <th>Charges</th> 
      </tr>	 
	  
		    <?php
		
		echo	"<h1>Your orders</h1>"	;
		
		$clients_number=$_SESSION["unique_no"];
		
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "skhafthini";
				
		$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
		  	{
	echo "<h1> Data base connected</h1>";
	}     
		$sql = "SELECT order_id,phone_number,quantity,price,restaurant_name,meal_name,order_status,charges from orders where phone_number = $clients_number";
        $result = $aVar-> query($sql);
        
		if ($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
		echo "<tr><td>".$row["order_id"] ."</td><td>". $row["phone_number"] ."</td><td>".
		$row["quantity"] ."</td><td>". $row["price"] ."</td><td>". $row["restaurant_name"] ."</td><td>".
		$row["meal_name"] ."</td><td>". $row["order_status"] ."</td><td>". $row["charges"] ."</td></tr>";
		
        }
			echo "</table>";

		
		}
		else{   echo "</table>";
				echo "DATA NOT FOUND...........";
		}
		$aVar-> close();
		?>
	     <br>
	    <form class="looks" action="view2.php" method="post">   
	         <fieldset>
	  	     <style>.lolos { background-color:green; }</style>
	         <legend class="lolos">Cancel an order below</legend>
	         
	          <label type="id">ORDER ID:</label>
			  <input type="number" name="id" placeholder="enter order number" required/><br>
			  <br>
			  <label type="cc"><font color="red"> Please Select Chancel to Confirm</font></label>
			  <br>
			  <input type="radio" name="chancel" value="chancelled" required/>Chancel order</input>
			  
			  <br>
			  <br>
			  <button type="submit" value="submit">Send required</button>
	          <button type="reset">clear</button>
	
	
	         </fieldset>
	    </form>
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	  


</body>
</html>