<?php
session_start();

include ("../../includes/configdb.php");
$mail=$_POST["adminmail"];
$pass=$_POST["password"];

$sql="select * from admin where email='$mail' and Password='$pass'";
$result =mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
{
	$row= mysqli_fetch_assoc($result);
	
	$_SESSION["title"]= $row["Name"];
	$_SESSION["DP"] =$row["admindp"];	
	header("location:admin.php");
}
else
{
	header("location:adminin.php?msg3=Invalid email and password");
}


?>
