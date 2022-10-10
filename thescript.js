<script>

function validate()
{  

  var form = document.getElementById('form');
  var Password = document.getElementById('Password');
  var number = document.getElementById('number');
  var Restaurant = document.getElementById('Restaurant');
  var form = document.getElementById('form');
  
  
   if (Password.value.length <=5)
   {
	alert("Password should be not less than 5 digits...");
      return false;
   }
   
   
   if (number.value.length <=7 || number.value.length >12)
   {
	alert("number should  not be less than 5 digits or more than 12 digits...");
      return false;
   }
   
   if ( Restaurant.value =="" ||  Restaurant.value >50)
   {
	alert(" Restaurant should have over 50 characters....");
     return false;
   }
   
   
   
 }










</script>
