<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine contact us page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">

</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  	<li><a class="active2">Contact US</a></li>			   
				      <li><a href="home_page.html"> Home </a></li>

			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	  <?php
	  $concern=$_POST['message'];
	  $number=$_POST['phone_number'];	  
	  $clients_status=$_POST['user'];
	  
	 $dbServername = "localhost";
	 $dbUsername = "root";
	 $dbPassword = "";
	 $dbName = "skhafthini";

	
	 $aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
		
	 $query="INSERT INTO concerns VALUES
	 ('".$number."','".$clients_status."','".$concern."')";
	 $query = mysqli_query($aVar,$query)or die('Error,insert query failed');
	 echo "<h1>Message Sent....</h1>";
	  
	  
	  ?>
	
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	  


</body>
</html>