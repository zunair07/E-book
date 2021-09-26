<?php
include ("../../includes/configdb.php");
$id=$_GET['id'];
$sql="Delete from favbooks where ID='$id'";
if(!mysqli_query($conn,$sql))
{
	header("location:mybooks.php?msg=error");
}
else 
{
    header("location:mybooks.php?msg=removed from list");
}
?>