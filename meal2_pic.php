<?php session_start();
 

?>
<!--PABALLO MOLATI 1818416-->

<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine meal2 picture page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">logged in as restaurant</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
					  <li><a href="logout.php"> log out </a></li>
					   <li><a href="meal_pic.php"><button> BACK </button></a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	 <?php
	    $id=$_POST['id'];
	
	 
	    $dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "skhafthini";
				
		$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
  	{
	echo "<h1> Data base connected</h1>";
	}

		if(isset($_POST["insert"]))
	{	
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		
		$sql= mysqli_query($aVar,"UPDATE meals SET meal_picture = '".$file."' WHERE meal_id = '".$id."' ");
		$query = mysqli_query($aVar,$sql);
	
		
		{
		
			echo '<script>alert("image inserted...")</script>';
			
		}
		
		
}		
	

	 ?>
	
	 
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	


</body>
</html>