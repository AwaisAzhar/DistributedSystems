<?php include('login_server.php'); ?>
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
<div class="new"><h1> LOG IN </h1></div>
<form method="post" action="login.php" >
  
  <?php include('errors.php');?>
   <div class="input">
       username:<input type="text" name="username" >
   </div>
    <div class="input">
       password:<input type="text" name="password" >
   </div>  
   <div class="input">
       <button type="submit" name="LOG_IN" class="btn" >LOG_IN</button>
   </div>   
  <p>New User <a href="registration.php"> Register Here </a></p>
</form>
</div>

</section>

<footer>
<p>Wattoo Company,copyright &copy; 2019</p>
</footer>
</body>
</html>
