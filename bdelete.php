<?php 
include ("../../includes/configdb.php");
session_start();
if($_POST['submit'])
{
	$bname= $_POST["bname"];
	$table = $_POST["seltab"];

$sql= "DELETE FROM `$table` WHERE btitle='$bname'";
	
	if(!mysqli_query($conn,$sql))
	{
		
    header("location:bdelete.php?msg4=Something went wrong");
    
	}
	else{
		
		header("location:admin.php?msg4=Deleted");
	}


}


?>