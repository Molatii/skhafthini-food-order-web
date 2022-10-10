<?php session_start();
 

?>
<!--PABALLO MOLATI 1818416-->

<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine new admin page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">

</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">Admin</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
					  <li><a href="logout.php"> log out </a></li>
					   <li><a href="a_log_collect.php"><button> BACK </button></a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>

	  </section>
	<?php
	
	 $number = $_POST["no"];
	 $password = $_POST["pass"];
	 $name = $_POST["name"];
	  
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "skhafthini";

	
	$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	{
	echo "<h3>data base connected!!!!!!!!</h3>".'<br>';
	}	
	
	
	$query="INSERT INTO administrators VALUES
	('". $number."','". $password ."','". $name."')";
	$query = mysqli_query($aVar,$query)or die('Error,insert query failed');
	echo "<h3>registration sucessfull</h3>";
	echo "<script>alert('new Admin is Added...')</script>";
?>
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	


</body>
</html>