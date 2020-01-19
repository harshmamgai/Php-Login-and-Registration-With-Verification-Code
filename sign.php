<?php
include_once 'dbConnection.php';
ob_start();

$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];


$email = stripslashes($email);
$email = addslashes($email);



$password = stripslashes($password);
$password = addslashes($password);

$cpassword = stripslashes($password);
$cpassword = addslashes($password);
//$password = md5($password);

$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$email' , '$password')");
if($q3)
{
session_start();
$_SESSION["email"] = $email;

header("location:welcome.php?q=1");
}
else
{
header("location:index.php?q7=Email Already Registered!!!");
}


ob_end_flush();
?>