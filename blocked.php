<?php session_start();
?>
<!--PABALLO MOLATI 1818416-->

<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine Blocked page </title>
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
	  <?php
	    $numbers=$_POST['num'];
		 $status=$_POST['blocked'];
	
	
	  	$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "skhafthini";
				
		$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);	
		
	      {
	echo "<h1> Data base connected</h1>";
          	}
 
         $sql=mysqli_query($aVar,"UPDATE user_client SET user_status ='".$status."' WHERE phone_number = '".$numbers."'");
	 			
		
		
	    if($sql === true )
		{
	    $sql=mysqli_query($aVar,"UPDATE request SET request_status  = '".$status."' WHERE user_phone_no = '".$numbers."'");
		
		echo"<script type='text/javascript'>alert('The user is status Updated..!(blocked or active).');</script>";
	
		
		}
		else
		{
		   echo"<script type='text/javascript'>alert('something went wroung.....try again!!');</script>";
		}
	 ?>
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	


</body>
</html>