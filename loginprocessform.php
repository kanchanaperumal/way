<?php
session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'zathura');

$username=$_POST['username'];
$password=$_POST['password'];

$s="select * from users where username ='$username' && password='$password'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
 $_SESSION['login']=$username;
 header('location:home.php');
}
else{
header('location:login.php');
}
?>