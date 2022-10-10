<?php session_start();
 

?>
<!--PABALLO MOLATI 1818416-->

<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine meal picture page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">logged in as restaurant</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
					  <li><a href="logout.php"> log out </a></li>
					   <li><a href="r_log_collect.php"><button> BACK </button></a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
    <table class="view">  
	<tr> 
	   <th>Meal_id</th>
	  <th>Meal_name</th>
	  <th>Price</th>
	</tr>	
	  
	  
	  
	  <?php
		echo	"<h1>Meals</h1>";
		
		$res_name=$_SESSION["res_name"];
		
		$dbServername = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbName = "skhafthini";
				
		$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
		  	{
	echo "<h1> Data base connected</h1>";
	       }     
		$sql = "SELECT meal_id,meal_name,price from meals where restaurant_name = '$res_name' ";
        $result = $aVar->query($sql);
        
		if($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
		echo "<tr><td>".$row["meal_id"]."</td><td>". $row["meal_name"]."</td><td>". $row["price"]."</td></tr>";
		
        }
			echo "</table>";

		
		}
		else{   echo "</table>";
				echo "DATA NOT FOUND...........!";
		}
		$aVar-> close();
		?>  
	  
	 <!-- <style>
	  form{width:50%; margin:20px auto; }
	  .vn {background-color: rgba(0,0,0,.3); color:white;}
	  #img_div{width:80%; padding:5px; margin:15px auto; border:1px solid #cbcbcb;}
	  img {}
	
	  </style>-->
	  <br>
	    <form  class="looks" action="meal2_pic.php" enctype="multipart/form-data" method="post">
		<fieldset class="vn">
		
	     <legend class="lolos" >Upload a meal picture</legend>
		 
		 <label type="id">MEAL ID:</label>
			  <input type="number" name="id" placeholder="enter meal id" required/><br>
			  <br>
		 <input type="file" name="image" id="image"/>
        	 
		 <br>
          <br>
         <button type="submit" name="insert" id="insert" value="insert">Upload</button>
         <button type="reset" value="reset">clear</button>		 
			
	    </fieldset>
        </form>
	 <script>
	 $(document).ready(function(){
	   $('#insert').click(function(){
	 
			var  image_name = $('#image').val();
			if(image_name == '')
			{
			alert ("PLease upload an image");
			 return false;
			}else
			{
				var extension = $('#image').val().split('.').pop().tolowercase();
				if(jquery.inArray(extension,['gif','png','jpg','jpeg']) == -1)
				{
					alert('invalid image file');
					$('#image').val('');
					return false;
				}
			
			}
	 
	  });
	 });
	 </script>
	 
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	


</body>
</html>