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
					  <li><a class="active2" href="#">logged in as Administrator</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
					  <li><a href="logout.php"><button> LOG OUT</button> </a></li>

			
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
					
			if(isset($_SESSION["admin"])){
		            echo "Login success !!! WELCOME  : ".$_SESSION["admin"];
					                      }
			else
            {
			
				$Unique_number=$_POST['Unique_number'];
				$Password=$_POST['Password'];
			
			
			//preventing mysql injection
			    $Unique_number=stripslashes($Unique_number);
				$Password=stripslashes($Password);
			    $Unique_number=mysqli_real_escape_string($aVar,$Unique_number);
				$Password=mysqli_real_escape_string($aVar,$Password);
				
		

					
					
					//querying the database for user
					
					$result=mysqli_query($aVar,"select *from  administrators where Unique_number = '$Unique_number' and Password = '$Password'") 
					or die("Failed to query database".myssqli_error());
					$row=mysqli_fetch_array($result);
					if($row['Unique_number'] == $Unique_number && $row['Password'] == $Password)
				    {
					     $_SESSION["admin"] = $Unique_number;
						echo "Login success !!! WELCOME  : ".$_SESSION["admin"];
					
					}
				     else
					 {
						echo "FAILED try again!.....";
						unset($_SESSION["admin"]);
					     header('Location: a_log.html');
					 
					 }
		}	
			
		?>
		                <br>
						<br>
	 		            <button><a href="a_log_view_c.php">view clients</a></button> <br>
						<br>
						<button ><a href="concern_view.php">view Concerns</a></button><br>						
						<br>
						<button><a href="a_log_view_res.php">view Restaurants</a></button><br>						
						<br>
		                <button><a href="block_request.php">view requests</a></button><br>
						<br>
						<button><a href="new_admin.php">Add new Admin</a></button><br>
						<br>
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	


</body>
</html>