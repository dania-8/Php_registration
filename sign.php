<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>sign in</title>

  </head>
  <link rel="stylesheet" href="sign.css">
  <body>
    <div class="f">


    <form  action="login.php" method="POST" ><br><br>
     <label for="user">Username:</label><br />
      <input type="text" name="user" id="user"  placeholder="Username" /><br /><br>
      <label for="fname">First Name:</label><br>
      <input type="text" name="fname" placeholder="First Name"><br><br>
      <label for="lname">Last Name:</label><br>
        <input type="text" name="lname" placeholder="Last Name"><br><br>
      <label for="pass">Password:</label><br />
      <input type="password" name="pass" id="pass" placeholder="password"/> <br/><br>
   <label id="e"for="email">Email:</label><br />
   <input type="email" name="email" id="email" placeholder="Email" /><br /><br />
   Do you have acount  <a href="login"><span>login</span></a><br><br>
   <input type="checkbox" name="check" value="Remember ME ">Remember Me <br>
  <input type="submit" name="signup"submit id="submit" value="sign up"  />
<br><br></form>

 </div>
    <?php

    	if(isset($_POST['signup']))
    		{
    			$username = $_POST['user'];
    			$passn = $_POST['pass'];
    			$remember = $_POST['check'];

    			if(isset($remember))
    				{
    setcookie("username",$username,time()+(86400*30),"/");
    setcookie("password",$pass,time()+(86400*30),"/");
     				}


    		}
if(isset($_POST["signup"])){
     $_SESSION["user"] =$_POST["user"];
      $_SESSION["fname"] =$_POST["fname"];
      $_SESSION["lname"] =$_POST["lname"];
     $_SESSION["email"] = $_POST["email"];
     $_SESSION["pass"] = $_POST["pass"];
     $_SESSION["signup"]=$_POST["signup"];
}
       ?>
  </body>
</html>
