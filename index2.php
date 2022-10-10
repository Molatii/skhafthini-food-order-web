<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> link tp php</title>
<link rel="stylesheet" type="text/css" href="thestyle.css">



</head>
<body>

 <div class="header">    
				<h1>SK'HAFTINI WEB APP</h1>
					<ul>
					  <li><a class="active2" href="#">Administrator site</a></li>				   
				      <li><a href="home_page.html"> Home </a></li>

			
	     </ul>
	  
	  </div>
<section>	  

    <?php


 echo "<h1>account created!</h1>";
 
 

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "skhafthini";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(isset($_POST['submit']))
{

 $phone_number = $_POST['phone_number']; 
 $password = $_POST['password'];
 $address = $_POST['address'];
 $email = $_POST['email'];

 $query ="insert into user_client (phone_number,password,address,email) values ( $phone_number, $password, $address, $email)";
 if(mysql_query($query))
 {
   echo "<h4>Account created</h4>";
 }

}







?>
	  
	  
</section>	  
	  
	  <footer>
	  
	           
              <p>Copyright&copy:Sk'haftini Web App 2020 | Designed by Paballo Molati</p>
		
	  
	  
	  </footer>
	  


</body>

</html>