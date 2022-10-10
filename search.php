<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine food site </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">

</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">restaurants </a></li>				   
				       <li><a href="home_page.html"> Home </a></li>
                         <li><a href="food_site.php"><button>BACK </button> </a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	  
	  <h1>--SEARCH RESULTS--</h1>
	  
	 <table class="view">  
	<tr> 
	   <th>Restaurant_name</th>
	   <th>Meal_name</th>
	   <th>Price</th>
	</tr
	   <?php
		
		
		$search_name=$_POST['search_meal'];
		
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "skhafthini";
				
		$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
		 
  		$sql = "SELECT restaurant_name,meal_name,price from meals where meal_name = '$search_name' ";
        $result = $aVar->query($sql);      	 

        if($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
		
		echo "<tr><td>".$row["restaurant_name"]."</td><td>". $row["meal_name"]."</td><td>". $row["price"]."</td></tr>";
					  
	    }
			echo "</table>";
		}
		else{
				echo "<h1>THE MEAL BELOW IS NOT AVAILABLE...</h1>";
				echo ""."<br>";
				echo "".$search_name;
				echo "</table>";
		}
		$aVar-> close();
		
	    ?>   
	
	            <br>
	            <h1 class="choice">select restaurant</h1>
			    <br>	
				<li><h4 class="choice"><a class="Lk" href="vip.php">THE VIP RESTAURANT</a></h4><br></li>
				<li><h4 class="choice"><a class="Lk" href="down.php">DOWN TOWN RESTAURANT</a></h4></li>
				

		
	  
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	  


</body>
</html>