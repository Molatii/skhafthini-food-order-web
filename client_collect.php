<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> link tp php</title>
<link rel="stylesheet" type="text/css" href="thestyle.css">



</head>
<body>

 <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">registered</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
                      <li><a href="c_log.html"> log in </a></li>
			
	     </ul>
	  
	  </div>
<section>	  
 <h1>Please select log in on the menu to continue(Your now registered)</h1>
 <?php
  
	 $phone_number = $_POST["phone_number"]; 
	 $password = $_POST["password"];
	 $address = $_POST["address"];
	 $email = $_POST["email"];
	 $status="active";
	  
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "skhafthini";

	
	$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	{
	echo "<h3>data base connected!!!!!!!!</h3>".'<br>';
	}

	
	
	
	$query="INSERT INTO user_client VALUES
	('". $phone_number."','". $password ."','". $address."','".$email."','".$status."')";
	$query = mysqli_query($aVar,$query)or die('Error,insert query failed');
	echo "<h3>registration sucessfull</h3>";
?>
	  
	  
</section>	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	  


</body>

</html>