<?php session_start();
?>
<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine chancel order page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">

</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">Chancel order </a></li>
							  <li><a  href="food_site.php">rastaurants </a></li>
				       <li><a  href="home_page.html"> Home </a></li>
					<li><a  href="c_log.html"><button> log out</button> </a></li>
                   <li><a  href="view.php"><button>Back(view)</button> </a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	 <?php
	$order_id =$_POST['id'];
	$status="chancelled by client";
	$fee="5";


	
	
    $dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "skhafthini";
				
	$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
		       
	 $sql=mysqli_query($aVar,"UPDATE orders SET order_status ='".$status."', charges = '".$fee."' WHERE order_id = '".$order_id."' ");
	 
	 
if ($sql === TRUE) {
    echo "<h1>Record updated successfully.....</h1>";
} else {
    echo "<h1>Error updating record....try again </h1> " . $con->error;
}
	?>
	  
	 
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	  


</body>
</html>