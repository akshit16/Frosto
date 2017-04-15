<?php 
session_start();
include_once("Connection.php");
if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		 header('Location:login.php');
	 }
else{
	if(isset($_GET["cid"])){
		$cid =$_GET["cid"];
	$query = "SELECT * FROM orderid where orderid ='{$cid}'";
		if($result = mysqli_query($conn,$query)){
			while ($row = mysqli_fetch_array($result)) {
				
				$user = $row["user"];

$_SESSION['user']=$user;
				//$name = $row["name"];
				$address = $row["address"];
				$contact = $row["contact"];
				$amount= $row["amount"];
				$date = $row["date"];
			$_SESSION['date']=$date;
      				$email = $row["email"];
				
			}
	}			
					
	}
	else{
		header('Location:index.php');
	}
}
$quer = "update userorder set status = 'completed' where user = '$user' and time_date='$date' ";

if($resul = mysqli_query($conn,$quer)){
	header("location:index.php");
}
	else{
		echo"hmm";
	}
?>