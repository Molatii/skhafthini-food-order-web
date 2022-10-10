<?php session_start();
 

?>
<!--PABALLO MOLATI 1818416-->

<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine view feedback page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">logged in as restaurant</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
					  <li><a href="logout.php"> log out </a></li>
					   <li><a href="r_log_collect.php"><button> BACK </button></a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	  <table class="view">
	  <tr>
	  <th>Feedback_ID</th>
	  <th>Restaurant_name</th>
	  <th>Clients_No</th>
	  <th>feedback_message</th>
	  
      </tr>		  
	  
	  
	  
	  <?php
		echo	"<h1>--YOUR FEEDBACK--</h1>";
		$name=$_SESSION["res_name"];
			
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "skhafthini";
				
		$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
		$sql="SELECT id,resturant_name,clients_no,message FROM feedback where resturant_name = '$name'";
        $result =$aVar->query($sql);
        
		if ($result->num_rows>0){
		while ($row = $result-> fetch_assoc()){
		echo "<tr><td>".$row["id"] ."</td><td>". $row["resturant_name"] ."</td><td>".
		$row["clients_no"] ."</td><td>". $row["message"] ."</td></tr>";
		
        }
			echo "</table>";

		
		}
		else{   echo "</table>";
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