<?php 
include ("../../includes/configdb.php");
session_start();
if($_POST['submit'])
{
	$bname= $_POST["bname"];
	$aname= $_POST["aname"];
	$table = $_POST["seltab"];
	$link= $_POST["link"];
	
	$filename = $_FILES["fileupload"]["name"];
$tempname = $_FILES["fileupload"]["tmp_name"];
$folder = "Book_title/".$filename;
move_uploaded_file($tempname,$folder);
	$sql= "insert into `$table` (`btitle`,`Aname`,`source`,`picsource`) values ('$bname','$aname','$link','$folder')";
	
	if(!mysqli_query($conn,$sql))
	{
		
	header("location:insertbook.php?msg=Something went wrong");
	}
	else{
		
		header("location:admin.php?msg=Inserted");
	}


}


?>