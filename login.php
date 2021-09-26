<?php 
session_start();

/*$dbserver="localhost";
$dbuser="root";
$dbpass="";
$db="books";
$conn=mysqli_connect($dbserver,$dbuser,$dbpass,$db);
if(!$conn)
{
    die ("connection failed");
}
*/
include ("../../includes/configdb.php");
$uname = $_POST["username"];
$upassword = $_POST["pass"];

$sql= "select * from user where username='$uname' and Password='$upassword'";

$result =mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
{
	$row= mysqli_fetch_assoc($result);
	
	$_SESSION["title"]= $row["utitle"];
	$_SESSION["pic"]=  $row["picture"];
	
	header("location:index1.php");
}
else
{
	header("location:sign in.php?msg=Invalid username/password");
}
	
	







?>