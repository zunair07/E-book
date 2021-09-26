<?php
session_start();
include ("../../includes/configdb.php");

$sql="select * from biography";

$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
	$_SESSION["book"]=$row["bname"];
	$_SESSION["author"]=$row["Aname"];
	$_SESSION["link"]=$row["source"];
	$_SESSION["PIC"] = $row["picsoucre"];
	header("location:admin.php");
}
?>
