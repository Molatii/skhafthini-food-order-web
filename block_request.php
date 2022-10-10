<?php session_start();
 

?>
<!--PABALLO MOLATI 1818416-->

<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine requets page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">logged in as restaurant</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
					  <li><a href="logout.php"> log out </a></li>
					   <li><a href="a_log_collect.php"><button> BACK </button></a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	  
	    <table class="view">
	  <tr>
	  <th>Request_ID</th>
	  <th>user_number</th>
	  <th>Request_reason</th>
	 <th>Request_Status</th>	  
      </tr>		  
	  
	  
	  
	  <?php
		
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "skhafthini";
				
		$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
		       
		$sql = "SELECT id,user_phone_no,request_reason,request_status from request where request_status = 'placed'";
        $result = $aVar-> query($sql);
        
		if ($result->num_rows > 0){
		while ($row = $result-> fetch_assoc()){
		echo "<tr><td>".$row["id"] ."</td><td>". $row["user_phone_no"] ."</td><td>".
		$row["request_reason"] ."</td><td>".
		$row["request_status"] ."</td></tr>";
		
        }
			echo "</table>";

		
		}
		else{   echo "</table>";
				echo "THERE ARE NO REQUESTS AT THE MOMENT...........";
		}
		$aVar-> close();
	//make blocked page to store changes
	 ?>
	  
	  
	 <br>
	  
	  
	  
              <form class="looks" action="blocked.php" method="post">   
	         <fieldset>
	  	     <!--<style>.lolos { background-color:green; }</style>-->
	         <legend class="lolos">Block user</legend>
	         
	          <label type="num">User_Phone Number :</label>
			  <input type="number" name="num" placeholder="enter user number" required/><br>
			  
			 <label type="blocked"><font color="red">Please Select an option below to Confirm</font></label><br>
             <input type="radio" name="blocked" value="blocked">Block User</input><br>			 
			 <input type="radio" name="blocked" value="active">UnBlock User</input><br>	 
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