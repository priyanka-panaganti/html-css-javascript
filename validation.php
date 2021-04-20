<?php

session_start();


$con = mysqli_connect('localhost','root','Kala12345@');

mysqli_select_db($con, 'users_registration');

$name = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s = " select * from usertable where name='$name' && password='$pass' ";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if ($num==1) {

    header('location:home.php');
} else{
   header('location:login.php');
   echo "username or password is incorrect please try again";
}



?>