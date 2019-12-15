<?php
$errors=array();
$server="localhost";
$usernameserver="root";
$passwordserver="";
$database="registration";
$sqlconnect=mysqli_connect($server,$usernameserver,$passwordserver,$database);
if(isset($_POST['LOG_IN']))
   { 
    $newusername=($_POST['username']);  
    $newpassword=($_POST['password']);
if (empty($newusername)){
    array_push($errors,'username is required');
    }
    if (empty($newpassword)){
    array_push($errors,'password is required');
}
if (count($errors) ==0)
{
    $query="SELECT * FROM users WHERE username='".$newusername."' AND password='".$newpassword."' LIMIT 1 " ;
    $finalquery=mysqli_query($sqlconnect,$query);
    header('location: home.php');
    if(mysqli_num_rows($finalquery)==1)
    {
         header('location: home.php');
    }
    else{
        header('location: registration.php');
        echo "<script>alert('first register ypurself')</script>";
    }
    mysqli_close($sqlconnect);
}
}
?>