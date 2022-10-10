<?php session_start();


?>
<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine log page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
<script>



</script>
</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">logged in</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
					
					<li><a href="view.php"><button type="submit" name="submit">VIEW ALL ORDERS</button> </a></li>
					<li><a href="feed.php"><button type="submit" name="submit">FEEDBACK TO RESTAURANT</button> </a></li>
					<li><a href="logout.php"><button type="submit" name="exit">LOG OUT</button></a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	  
		<?php
		
			//connect and select the server
		$dbServername = "localhost";
					$dbUsername = "root";
					$dbPassword = "";
					$dbName = "skhafthini";
					
					$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
						{
	echo "<h1> Data base connected</h1>";
	}
					
			if(isset($_SESSION["unique_no"])){
              echo "Login success !!! WELCOME  : ".$_SESSION["unique_no"];
              }			  
				
				else
				{
		
				$phone_number=$_POST['phone_number'];
				$password=$_POST['password'];
				
				
				if($password > 0){
				$_SESSION["unique_no"] = $phone_number;
				
				}
			
			//preventing mysql injection
			    $phone_number=stripslashes($phone_number);
				$password=stripslashes($password);
			    $phone_number=mysqli_real_escape_string($aVar,$phone_number);
				$password=mysqli_real_escape_string($aVar,$password);
				
		

					
					
					//querying the database for user
					
					$result=mysqli_query($aVar,"select *from user_client where phone_number = '$phone_number' and password = '$password' and user_status= 'active'") 
					or die("Failed to query database".myssqli_error());
					$row=mysqli_fetch_array($result);
					if($row['phone_number'] == $phone_number && $row['password'] == $password && $row['user_status'] == 'active')
				    {   
					 
					   
						echo "Login success !!! WELCOME  : ".$_SESSION["unique_no"];
						
					
					}
				     else
					 {  
						echo "FAILED try again!.....";
						echo '<script type="text/javascript">';
						echo 'alert("DATA not found in the Database...Please try again.")';
						echo '</script>';
						
						unset($_SESSION["unique_no"]);
						
					    header('Location: c_log.html');
					 
					 }
			
			}
		?>
		<!--<style>.looks { background-color: rgba(0,0,0,.3); color:white;  }</style>-->
            <br>
                
				<li><h4 class="choice"><a class="Lk" href="food_site.php">Go to Restaurants </a></h4></li>
				
						
              	<form class="looks" action="concern.php" method="post">
			<fieldset>
				<legend class="lolos">Send us a message (concern) and we will get back to you as soon as possible </legend>
				<label for="phone_number">Phone Number</label><br>
				<input type="number" name="phone_number" placeholder="Your Phone Number" required/>
				<br>
				
                <label type="potential user"><font color="red">Please select option below</font></label>
				<br>
			    <input type="radio" name="user" value="Registered" required/>Registered</input>
				
			    
				<br>
								
				<label for="message">Write a message</label><br>
				<textArea name="message" rows="5" cols="50"></textarea><br>
				<button type="submit">Send Message</button>	    
			
			 </fieldset>
	</form>
	
	
			
	 
	  </section>
	  
	
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	


</body>
</html>
