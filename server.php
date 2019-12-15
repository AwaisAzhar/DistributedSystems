<?php
//session_start();
$errors=array();
$server="localhost";
$usernameserver="root";
$passwordserver="";
$database="registration";
$sqlconnect=mysqli_connect($server,$usernameserver,$passwordserver,$database);

$newusername='';
$newemail='';
$newpassword= '';   
    
if(isset($_POST['register']))
   { 
    $newusername=($_POST['username']);
    $newemail=($_POST['email']);
    $newpassword=($_POST['password']);
    $newconfirmpassword=($_POST['Confirm_Password']);
    $newcountry=($_POST['Country']);
if (empty($newusername)){
    array_push($errors,'username is required');
    }
if (empty($newemail)){
    array_push($errors,'email is required');
    
}
    if (empty($newpassword)){
    array_push($errors,'password is required');
    
}
    if (empty($newconfirmpassword)){
    array_push($errors,'Please Confirm your password');
        }
    if ($newpassword != $newconfirmpassword){
    array_push($errors,'Pasword dindot match');
        }
    if (empty($newcountry)){
    array_push($errors,'Please Select your Country');
        }
}
if (count($errors) ==0)
{
    $query="INSERT INTO users (username,email,password) VALUES ('$newusername','$newemail','$newpassword' )";
    $finalquery=mysqli_query($sqlconnect,$query);
}

?>
