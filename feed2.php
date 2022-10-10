<?php session_start();
?>
<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine feedback 2 page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
 
</head>
<body >
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">FEEDBACK</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
                       <li><a href="c_log_collect.php"><button type="submit" name="submit">BACK (client page)</button> </a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>

		  <?php 
		
        $res_name = $_POST["restauran_name"];
	    $clent_no = $_POST["clients_no"]; 
	    $message= $_POST["message"];
	   
	  
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "skhafthini";
	  

	  
	  $aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	{
	echo "<h1>DATABASE CONECTED......</h1>";
	}

	$query="INSERT INTO feedback 
	(id,resturant_name,clients_no,message)
	 VALUES
	(null,'".$res_name."','".$clent_no."','".$message."')";
	$query = mysqli_query($aVar,$query)or die('failed');
	echo "<h1>feed back sent</h1>";
	 
	  ?>
	
	  
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	  


</body>
</html>