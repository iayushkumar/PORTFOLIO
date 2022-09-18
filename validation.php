<?php
session_start(); 
$con = mysqli_connect('localhost','root',''); 
mysqli_select_db($con,'myreg');
$name = $_POST['user']; 
$password = $_POST['password']; 
$email = $_POST['email']; 
$contact = $_POST['contact']; 

$s = "select * from user1 where name = '$name' && '$password'"; 

$result = mysqli_query($con,$s); 
$num = mysqli_num_rows($result); 

if($num == 1){

    header("location:home.php");
}
else {
   header("location:login.php");
}
?>