
<?php 
if(isset($_POST['submit'])){ 
$dbconn=mysqli_connect("mysql","root","","schooldb"); // Database connetion 
// inserting in Database 
$user_firstname=$_POST['firstname']; 
$user_lastname=$_POST['lastname']; 
$user_Gender=$_POST['Gender']; 
$user_lastname=$_POST['email']; 
$user_regno=$_POST['pswd']; 

$sql="INSERT INTO tbl_student SET firstname='$firstname',  
lastname='$lastname',regno='$regno'"; 
$quer =mysqli_query($dbconn,$sql); 
//header("location:table.php"); 
} ?> 
<!DOCTYPE html> <html> <head>  <title>USER REGISTRATION</title> 
<body>
<
        <div>

</head><H2>USER REGISTRATION</H2><body> <table> <form action="" method="POST"> 
<tr><td>firstname</b></td><td><input type="text" name="firstname"  class="y"></td></tr> 

<tr><td>lastname</b></td><td><input type="text" name="lastname" class="y"></td></tr>
<tr><td>Gender</b></td><td><input type="text" name="Gender" class="y"></td></tr> 
<tr><td>email</b></td><td><input type="text" name="email" class="y"></td></tr>  
<tr><td>Password</b></td><td><input type="password" name="pswd" class="y"></td></tr> 

<tr><td><input type="submit" name="submit" id="p"></td> 
</tr> 
</div>
</form> </table></body> </html> 
  
