<?php
session_start();
include_once("Connection.php");
$sql = "DELETE FROM cart
WHERE user='{$_SESSION["user"]}'";
$retvalI = mysqli_query( $conn, $sql );
if($retvalI){
//echo "Deleted.";
	header("location:index.php");
}
?>