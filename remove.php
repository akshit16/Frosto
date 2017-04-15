<?php
session_start();
include_once("Connection.php");
 $id = $_GET["id"];
 $sql = "DELETE FROM cart
WHERE id='$id'";
$retvalI = mysqli_query( $conn, $sql );
if($retvalI){
//echo "Deleted.";
	header("location:index.php");
}
?>