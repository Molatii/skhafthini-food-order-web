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
					  <li><a href="logout.php"> log out </a></li>
						<li><a href="a_log_collect.php"><button type="submit" name="submit">BACK (admin page)</button> </a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	  <h1> Concerns from all users </h1>
	  
	  <table class="view">
	  <tr>
	  
	  <th>Phone Number</th>
	  <th>User Status</th>
	  <th>Message (concern)</th>
	   
      </tr>	 
	  
	  
	  <?php
		
		
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "skhafthini";
				
		$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
		       
		$sql = "SELECT * from concerns";
        $result = $aVar-> query($sql);
        
		if ($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
		echo "<tr><td>".$row["phone_number"] ."</td><td>". $row["user_status"] ."</td><td>".
		$row["concern"] ."</td></tr>";
		
        }
			echo "</table>";

		
		}
		else{   echo "</table>";
				echo "<h1>THERE ARE NO CONCERNS AT THE MOMENT..</h1>";
		}
		$aVar-> close();
	  
	  ?>
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	


</body>
</html>