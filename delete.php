<?php
include ("../../includes/configdb.php");
$id=$_GET['id'];
$sql="Delete from user where ID='$id'";
if(mysqli_query($conn,$sql))
{
	header("location:users.php?msg=UserDeleted");
}
?>