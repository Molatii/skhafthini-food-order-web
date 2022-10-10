<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> link restaurant collect php</title>
<link rel="stylesheet" type="text/css" href="thestyle.css">



</head>
<body>

 <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">registered</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
                      <li><a href="r_log.html"> log in </a></li>
			
	     </ul>
	  
	  </div>
<section>	  
 <h1>Please select log in on the menu to continue(Your now registered)</h1>
 <?php
      $Restaurant_Name = $_POST["Restaurant_Name"];
	  $Phone_number = $_POST["Phone_number"]; 
	  $password = $_POST["password"];
	  $Location = $_POST["Location"];
	  $Email = $_POST["Email"];
	  
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "skhafthini";

	
	$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	{
	echo "<h3>data base connected!!!!!!!!</h3>".'<br>';
	}

	
	
	
	$query="INSERT INTO the_restaurants VALUES
	('".$Restaurant_Name."','".$Phone_number."','".$password."','".$Location."','".$Email."')";
	$query = mysqli_query($aVar,$query)or die('Error,insert query failed');
	echo "<h3>registration sucessfull</h3>";
?>
	  
	  
</section>	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	  


</body>

</html>