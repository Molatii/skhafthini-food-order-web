<?php session_start();
 

?>
<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine logout page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
<script>



</script>
</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
								   
				      <li><a href="home_page.html"> Home </a></li>
					
					
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	  
		<?php

		unset($_SESSION["unique_no"]);
		unset($_SESSION["res_name"]);
		unset($_SESSION["admin"]);
		
		session_destroy();
		
        header("Location: log_as.html");
		
		?>
		
	 
	  </section>
	  
	
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	


</body>
</html>