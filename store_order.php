<?php session_start();
?>

<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine store order page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
 
</head>
<body onload="alert('Click on "client welcome page" LINK to view orders, etc.....')">
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">order confirmation.....</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
                       <li><a href="c_log_collect.php"><button> CLIENT WELCOME PAGE</button> </a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
  	<?php 
	  $s="Placed";	
	  $a = $_SESSION["unique_no"];
	  
	 // $n = $_SESSION["down"]; 
	  //$nn = $_SESSION["vip"];
	  $names=$_SESSION["restaurant_name"]; 
	  //$names=$n . $nn;
	  
	 //$names = str_replace('.',' ',$names); 
	  
	  $c = $_SESSION["name"];
	  $d = $_SESSION["quantity"];
	  $e = $_SESSION["price"];
      $location=$_SESSION["location"];
	  $ordertype=$_SESSION["order_type"];
	    
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "skhafthini";
	  

	  
	  $aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	{
	echo "<h1> Data base connected</h1>";
	}

	$query="INSERT INTO orders
     (order_id,phone_number,quantity,price,restaurant_name,meal_name,order_status,order_type,location)
	VALUES
	(null,'".$a."','".$d."','".$e."','".$names."','".$c."','".$s."','".$ordertype."','".$location."')";
	$query = mysqli_query($aVar,$query)or die('');
	echo "<h1>ORDER PLACED...!</h1>";
	   
	   
	?> 
	
		
	

	  
	  
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	  


</body>
</html>
<?php

/* Distroy sessions data only*/
if(isset($_SESSION["card_no"])){unset($_SESSION["card_no"]);}
if(isset($_SESSION["name"])) {unset($_SESSION["name"]);}
if(isset($_SESSION["distance"])) {unset($_SESSION["distance"]);}
if(isset($_SESSION["quantity"])) {unset($_SESSION["quantity"]);}
if(isset($_SESSION["price"])) {unset($_SESSION["price"]);}

 if(isset($_SESSION["vip"])){unset($_SESSION["names"]);}
 

   ?>