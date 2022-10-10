<?php session_start();
 

?>
<!--PABALLO MOLATI 1818416-->

<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine requet sent page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">logged in as restaurant</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
					  <li><a href="logout.php"> log out </a></li>
					   <li><a href="sent_request.php"><button> BACK </button></a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
        <?php
		$user_num=$_POST["num"];
		$reason=$_POST["reason"];
		$status="Placed";
		
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "skhafthini";
				
		$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);		
		
	   $query="INSERT INTO request
       (id,user_phone_no,request_reason,request_status)
	   VALUES
	  (null,'".$user_num."','".$reason."','".$status."')";
	  
	  $query = mysqli_query($aVar,$query)or die('');
	   echo "<h1>Send...!</h1>";		
		
	 	echo '<script type="text/javascript">';
						echo 'alert("Thanks....Request Send..!")';
						echo '</script>';
						
	   ?>
	 
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	


</body>
</html>