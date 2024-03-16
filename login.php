<?php session_start(); ?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="sign.css">
<body>

<div class="f">


  <form   method="POST" >
  <br><br>  <label for="usern">Username:</label><br />
    <input type="text" name="usern" id="usern"  value="<?php
if(isset($_COOKIE['username']))
        echo $_COOKIE['username'];?>"/><br /><br>
    <label for="pass2">Password:</label><br />
    <input type="password" name="pass2" id="pass2"  value="<?php
if(isset($_COOKIE['password']))
        echo $_COOKIE['password'];
      ?>" /><br /><br>
    create anew acounte  <a href="sign.php"><span>sign in</span></a><br><br>
<input type="checkbox" name="check" value="Remember ME ">Remember Me <br>

    <input type="submit" name="login"submit id="submit" value="log in"  /><br><br>
<br><br>  </form></div>


</body>
</html>
<?php
if(isset($_POST['signup']))
  {
    $username = $_POST['user'];
    $passn = $_POST['pass'];
    $remember = $_POST['check'];

    if(isset($remember))
      {
setcookie("username",$username,time()+(86400*30),"/");
setcookie("password",$passn,time()+(86400*30),"/");
}}
$_SESSION["user"];
 $_SESSION["fname"] ;
 $_SESSION["lname"] ;
$_SESSION["email"] ;
$_SESSION["pass"] ;
if (isset($_POST["login"])) {
$uernam=$_POST["usern"];
$passw=$_POST["pass2"];
if($uernam==$_SESSION["user"]&&$passw==$_SESSION["pass"]){
  header("Location: home.php");


  } else {
      $error = "Invalid username or password";

}}
 ?>
