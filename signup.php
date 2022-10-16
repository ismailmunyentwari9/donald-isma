<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="" method="POST">
     	<h2>SIGN UP</h2>
  

         

          <label>Name</label>
         
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                     ><br>
          
             
         

          <label>User Name</label>
         
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                  ><br>
          
              
          


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit" name="signup">Sign Up</button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>


<?php 
include 'db_conn.php';

if (isset($_POST['signup'])) {
  $name=$_POST['name'];
  $uname=$_POST['uname'];
  $code=$_POST['password'];
  $re_code=$_POST['re_password'];
  if ($re_code!==$code) {
    echo "<script> alert('The password are not matching,Try again')</script>";
  }
  else{
  $ans=mysqli_query($conn,"INSERT INTO users VALUES(NULL,'$uname','$code','$name')");
  if ($ans==true) {
    echo "<script> alert('Account has been Created successfully')</script>";
  }
  }
}

 ?>