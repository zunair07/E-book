<?php 
include ("../../includes/configdb.php");

if($_POST['submit'])
{
$email=$_POST['email'];
$name=$_POST['firstname'];
$password=$_POST['passa'];
$filename = $_FILES["fileupload"]["name"];
$tempname = $_FILES["fileupload"]["tmp_name"];
$folder = "users/".$filename;
move_uploaded_file($tempname,$folder);

$sql= "INSERT INTO `user` ( `username`, `Password`, `utitle`,`picture`) VALUES ('$email', '$password', '$name','$folder')"; 

$result = mysqli_query($conn, $sql);
if(!$result && $filename=="")
{
	header("location:sign up.php?msg1=Something went wrong");
	
	
}
else 
{
	header("location:sign in.php?msg2=Successful! please logn in");
	
	
}
}

?>