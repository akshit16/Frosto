<?php
session_start();
include_once("Connection.php");


$user = $_POST['user'];
$_SESSION['user']=$user;
$pass = $_POST['pass'];
$result ="select * from signup where user  = '$user' and password = '$pass'";
$res = mysqli_query($conn,$result);
$row = mysqli_fetch_array($res);
if($row['user'] == $user && $row['password'] == $pass)
{ 
	$_SESSION['name'] = $row['name'];
	//echo $_SESSION['name'];
	header('Location: index.php');
}
else
{
	header('Location: login.php');
	session_destroy();
}


$_SESSION['password']=$pass;

?>