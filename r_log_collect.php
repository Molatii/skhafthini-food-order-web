<?php session_start();
 

?>
<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine log page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">logged in as restaurant</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
					   <li><a href="sent_request.php"><button>SEND BLOCK REQUEST</button> </a></li>
					      <li><a href="view_feedback.php"><button>FEEDBACK FROM USER</button> </a></li>
                       <li><a href="logout.php"><button>LOG OUT</button> </a></li>
					
			
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
					
				
		if(isset($_SESSION["res_name"])){
		  echo "Login success !!! WELCOME  : ".$_SESSION["res_name"];
		}
		
		else
		{
				$Restaurant_Name=$_POST['Restaurant_Name'];
				$password=$_POST['password'];
						    			
			
			//preventing mysql injection
			    $Restaurant_Name=stripslashes($Restaurant_Name);
				$password=stripslashes($password);
			    $Restaurant_Name=mysqli_real_escape_string($aVar,$Restaurant_Name);
				$password=mysqli_real_escape_string($aVar,$password);
									
					
					//querying the database for user
					
					$result=mysqli_query($aVar,"select *from  the_restaurants where Restaurant_Name = '$Restaurant_Name' and password = '$password'") 
					or die("Failed to query database".myssqli_error());
					$row=mysqli_fetch_array($result);
					if($row['Restaurant_Name'] == $Restaurant_Name && $row['password'] == $password)
				    { 
					   if($password > 0){
				
				      $_SESSION["res_name"] = $Restaurant_Name;
				    }
					
						echo "Login success !!! WELCOME  : ".$_SESSION["res_name"];
					    
					}
		
				     else
					 {
						echo "FAILED try again!.....";
						
						unset($_SESSION["res_name"]);
						
					  header('Location: r_log.html');
					 
					 }
			
		}

			
		?>
		<br>
		<br>
		<form>
				<button type="submit" name="submit"><a href="orders_made.php">VIEW ORDERS MADE</a></button><br>
				<br>
				<button type="submit" name="submit"><a href="meal_pic.php">UPLOAD MEAL PICTURE</a></button>
		</form>
	 
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	


</body>
</html>