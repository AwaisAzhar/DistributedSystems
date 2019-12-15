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
<li class="current"><a href="raspiberry.html" title="Go To MainScreen"> Home </a></li>
<li><a href="about.html" title="About Company"> About </a></li>
<li><a href="login.html" title="Enter into Your Account"> Login </a></li>
<li><a href="register.html" title="Become a Member"> Register </a></li>
</ul></nav>
</div>
</header>

<section id="index1">
<div class="container">
   <h1>HOME PAGE</h1>
   <div class ="content">
   <?php if(isset($_SESSION['success'])): ?>
    <div class="error success">
        <h3>
            <?php 
             echo $_SESSION['success'];
             unset($_SESSION['success']);
            
            ?>
        </h3>
    </div>
   <?php endif ?>
   <?php if(isset($_SESSION['success'])): ?>
   <p>welcom<strong><?php echo $_SESSION['username'];?></strong></p>
   <p><a href="" style="color:red;">Logout</a></p>
   <?php endif ?>
    </div>
    </div>
</section>


</body>
</html>
