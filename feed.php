<?php session_start();
?>
<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine feedback page </title>
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
					<h1 class="choice">Send a feedback to restaurant Below</h1><br>

				
              	<form class="looks" action="feed2.php" method="post">
			<fieldset>
	        <legend>Feedback</legend>
				
				<label type="restauran_name">RESTAURANT_NAME ( in full):</label>
				<input type="text" name="restauran_name" placeholder="restauran_name" required/>
				<label type="clients_no">CLIENTS_NO:</label>
				<input type="number" name="clients_no" placeholder="(Your Phone Number)" required/>
                
				
				
				<br>
				<label for="message">Write a message</label><br>
				<textArea name="message" rows="5" cols="50"></textarea><br>
				<button type="submit">Send Message</button> 
			
			 </fieldset>
	</form>

	
	  
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	  


</body>
</html>