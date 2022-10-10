<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine view client </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">logged in as Administrator</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
					  <li><a href="a_log.html"> log out </a></li>
				    <li><a href="a_log_collect.php"><button type="submit" name="submit">BACK (admin page)</button> </a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	  <table class="view">
	  <tr>
	  <th>Phone Number</th>
	  <th>Password</th>
	  <th>Address</th>
	  <th>Email</th> 
      </tr>	  
	  
	  
	    <?php
		
		echo	"<h1>These are Registered Clients</h1>"	;
		
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "skhafthini";
				
		$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
		       
		$sql = "SELECT phone_number,password,email,address from user_client";
        $result = $aVar-> query($sql);
        
		if ($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
		echo "<tr><td>".$row["phone_number"] ."</td><td>". $row["password"] ."</td><td>". $row["email"] ."</td><td>". $row["address"] ."</td></tr>";
		
        }
			echo "</table>";

		
		}
		else{
				echo "DATA NOT FOUND...........";
		}
		$aVar-> close();
		?>
		

	  
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	


</body>
</html>