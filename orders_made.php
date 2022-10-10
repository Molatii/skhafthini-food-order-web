<?php session_start();
?>
<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine orders made page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
 
</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">Chancel OR confirm order</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
                      <li><a href="r_log_collect.php"><button type="submit" name="submit">BACK (Restaurant page)</button> </a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	  	  <table class="view">
	  <tr>
	  <th>Order_ID</th>
	  <th>Phone_No</th>
	  <th>Quantity</th>
	  <th>Price</th>
	  <th>Meal_Name</th>
	  <th>Order_Status</th> 
	  <th>Charges</th> 
      </tr>	 
	  
		    <?php
		
		echo	"<h1>Clients orders</h1>"	;
		
		$res_name=$_SESSION["res_name"];
		
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "skhafthini";
				
		$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
			{
	echo "<h1> Data base connected</h1>";
	}
		       
		$sql = "SELECT order_id,phone_number,quantity,price,meal_name,order_status,charges from orders where restaurant_name = '$res_name'";
        $result = $aVar-> query($sql);
        
		if ($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
		echo "<tr><td>".$row["order_id"] ."</td><td>". $row["phone_number"]."</td><td>".
		$row["quantity"]."</td><td>". $row["price"]."</td><td>".$row["meal_name"]."</td><td>".
		$row["order_status"]."</td><td>".$row["charges"]."</td></tr>";
		
        }
			echo "</table>";

		
		}
		else{   echo "</table>";
				echo "DATA NOT FOUND...........";
		}
		$aVar-> close();
		?>
	     <br>
	    <form class="looks" action="orders_made2.php" method="post">   
	         <fieldset>
	  	     <style>.lolos { background-color:green; }</style>
	         <legend class="lolos">Cancel OR confirm clients order</legend>
	         
	          <label type="id">ORDER ID:</label>
			  <input type="number" name="id" placeholder="enter order number" required/><br>
			  <br>
			  <label type="cc"><font color="red"> Please Select Chancel OR Confirm order</font></label>
			  <br>
			  <input type="radio" name="option" value="chancelled by restaurant" required/>Chancel order</input>
			  <input type="radio" name="option" value="confirmed by restaurant" required/>confirm order</input>
			  
			  <br>
			  <br>
			  <button type="submit" value="submit">Submit</button>
	          <button type="reset">clear</button>
	
	
	         </fieldset>
	    </form>
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	  


</body>
</html>