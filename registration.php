<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Better Call Wattoo || welcome </title>
<link rel="stylesheet" type="text/css" href="css.css"/>
</head>
<body>
<header>
<div class="container">
<div id="branding"><h1><span class="highlight"> Wattoo </span> Security System </h1></div>
<nav><ul>
<li class="current"><a href="home.php" title="Go To MainScreen"> Home </a></li>
<li><a href="login.php" title="Enter into Your Account"> Login </a></li>
<li><a href="registration.php" title="Become a Member"> Register </a></li>
</ul></nav>
</div>
</header>



<section id="login">
<div class="container">
<div class="new"><h1> Register </h1></div>
<form method="post" action="registration.php" >
 
 <!--display validation error here-->
 <?php include('errors.php');?>
  <div class="input">
       username:<input type="text" name="username" value="<?php echo $newusername; ?>" >
   </div>
   <div class="input">
       Email:<input type="text" name="email" value="<?php echo $newemail; ?>" >
   </div>
    <div class="input">
       password:<input type="text" name="password" >
   </div> 
    <div class="input">
       Confirm_password:<input type="text" name="Confirm_Password" >
   </div>
    <div class="input">
       Country:<input type="text" name="Country" >
   </div> 
  <div class="input">
       <button type="submit" name="register" class="btn" >Register</button>
   </div>   
   <p>Already amember?<a href="login.php"> Log In </a></p>
</form>
</div>

</section>

<footer>
<p>Wattoo Company,copyright &copy; 2019</p>
</footer>
</body>
</html>
