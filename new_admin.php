<?php session_start();
 

?>
<!--PABALLO MOLATI 1818416-->

<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> Sk'haftine new admin page </title>
<link rel="stylesheet" type="text/css" href="thestyle.css">
<script >
    function validate(){
	 var password = document.getElementById('password');
	  var number = document.getElementById('number');
	
	 if (password.value.length <"5")
   {
	alert("Password should be not less than 5 digits and should be numbers only...");
	 
   if (number.value.length <"8" || number.value.length >"12")
   {
	alert("number should  not be less than 8 digits or more than 12 digits..."); 
   }
	
      return false;
   }
   else
   { 
      true;
   }
   
   
}
</script>
</head>
<body>
      <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">Admin</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>
					  <li><a href="logout.php"> log out </a></li>
					   <li><a href="a_log_collect.php"><button> BACK </button></a></li>
			
	     </ul>
	  
	  </div>
	  
	  
	  <section>
	<form class="looks"   action="admin.php" method="POST"  onsubmit="return validate()" name="form" >
				
		
		<fieldset>
		
			<legend class="lolos">Add Admin</legend>		
			
			<label for="no">Phone_number  <font>*</font></label></br>
			<input type="number" name="no" placeholder="phone_number" id="number" /></br>	
			
			<label for="Pass">Password <font>*</font></label></br>
			<input type="password" name="pass" placeholder="password" id="password" /></br>		
			
			<label for="name">Name <font>*</font></label></br>
			<input type="text" name="name" placeholder="New Admin name" id="name" required/></br>		
			<br>	
			
			<button type="submit" value="submit" name="submit" >Create_account</button> <input type="reset" value="CLEAR"/>			
			
			
		</fieldset>	
	


	
	
	
	
	
	 </form>
	  </section>
	  
	  
	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	


</body>
</html>