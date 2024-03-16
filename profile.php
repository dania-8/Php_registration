<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="set_sess.css">
  </head>
  <body>
    <header>

    	<div class="container">

    		<div class="profile">

    			<div class="profile-image">

    				<img src="profile.jpg" alt="">

    			</div>

    			<div class="profile-user-settings">

    				<h1 id="st"class="profile-user-name">
  <?php
  if (isset($_SESSION["signup"])) {

$_SESSION["user"];
   $_SESSION["fname"] ;
   $_SESSION["lname"] ;
  $_SESSION["email"] ;
  $_SESSION["pass"] ;
     }
    echo $_SESSION["user"]; ?> </h1>



   	<button class="btn profile-settings-btn" aria-label="profile settings"> <img id="set" src="se.png" alt=""> </button>


<form  action="sign.php" method="post">
  <input id="lo"type="submit" name="logout" class="btn profile-edit-btn"value="logout">

    <?php
  if(isset($_POST["logout"])){
session_unset();


session_destroy();
  }
    ?>


</form>

  	</div>



    			<div class="profile-bio">
            Bio <br>
<?php echo $_SESSION["fname"].$_SESSION["lname"];
 ?>

    			</div>

    		</div>
    		<!-- End of profile section -->
<hr>
    	</div>
    	<!-- End of container -->

    </header>


    	<div class="container">

    	<img id="im" src="em.jpg" alt="">
    			</div>

    		</div>
    		<!-- End of gallery -->

    		<div class="loader"></div>

    	</div>
    	<!-- End of container -->

  </body>
</html>
