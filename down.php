<?php session_start();
?>
<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine down town restauranr page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
 
</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					<li><a class="active2" href="#">down town rastaurant </a></li>
					<li><a  href="food_site.php">rastaurants </a></li>
				    <li><a  href="home_page.html"> Home </a></li>
					<li><a  href="c_log.html"> log in </a></li>
                    <li><a  href="res__client.html"> register</a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	  <?php  //$_SESSION["down"] = "down town restaurant";
	  
             //$_SESSION["vip"] = ".";
			 $_SESSION["restaurant_name"]="down town restaurant";
	  ?>
			
	  <div class="form">	
				
	   
	
		<table >	
		<form action="order.php" method="POST">
		<h2>Please select an order name</h2>
				<tr>
					<td>
	<?php
							$dbServername = "localhost";
							$dbUsername = "root";
							$dbPassword = "";
							$dbName = "skhafthini";
									
							$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
							
							$query = "select meal_picture from `meals` where meal_id = '2'";
							$query_run = mysqli_query($aVar,$query);
							
							while($row = mysqli_fetch_array($query_run))
							
		                    {	?>
		                               <?php
					echo	'	<img src="data:image/jpg;base64,'.base64_encode($row['meal_picture']).'" alt="image" style="width:100px; height:100px;"/>'?>
				                    	<?php
		                    }
				
			            	?>	
					
						</td>
						
				    <td>
				<?php
						
						$query = "select meal_picture from `meals` where meal_id = '3'";
						$query_run = mysqli_query($aVar,$query);
						
						while($row = mysqli_fetch_array($query_run))
						
							{	?>
									<?php
					echo	'	<img src="data:image/jpg;base64,'.base64_encode($row['meal_picture']).'" alt="image" style="width:100px; height:100px;"/>'?>
									<?php
							}
				
								?>						
		
					
					</td>
					
				    <td>
				<?php
					
						$query = "select meal_picture from `meals` where meal_id = '4'";
						$query_run = mysqli_query($aVar,$query);
						
						while($row = mysqli_fetch_array($query_run))
						
						{	?>
								<?php
					echo	'	<img src="data:image/jpg;base64,'.base64_encode($row['meal_picture']).'" alt="image" style="width:100px; height:100px;"/>'?>
								<?php
						}
				
							?>						
				
					
					
					</td>
				
				
				</tr>
				
				<tr>
				<td>
				 <input type="radio" name="food" value="CHEESE BOY BURGER,15" /> CHEESE BOY BURGER<BR>PRICE:M15.00</input>
				 
				 </td>
				
				<td>
				 <input type="radio" name="food" value="THE KINGS BURGER,20" >THE KINGS BURGER<BR>PRICE:M20.00 </input>
				
				</td>
				
				<td>
				<input type="radio" name="food" value="REAL KIDS BURGER,10" >REAL KIDS BURGER<BR>PRICE:M10.00</input>
				
				</td>
				
				</tr>
				
				
			<tr>
            <td colspan="3"><button>Contiune</button> <button type="reset">Clear</button>  </td>
            </tr>			
				
		</form>		
	 	</table>	
	   
	 
	  </div>
	   
	  
	  
	  
	  
	  
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	  


</body>
</html>