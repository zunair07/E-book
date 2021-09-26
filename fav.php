<?php
session_start();
include ("../../includes/configdb.php");


    $tit=$_GET['title'];
    $Anam=$_GET['authr'];
    $Sou=$_GET['s'];
    $PIC=$_GET['pic'];

    $sql="insert into favbooks (`btitle`,`Aname`,`source`,`picsource`) values ('$tit','$Anam','$Sou','$PIC')";

   
    if(!mysqli_query($conn,$sql))
	{
		
    header("location:index1.php?msg=Something went wrong");
    
	}
	else{
		
		header("location:index1.php?msg=Inserted");
	}






?>