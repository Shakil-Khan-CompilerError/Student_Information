<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Student_Information";
$con = new mysqli($servername,$username,$password,$database);
if(!$con)
{
	echo "fail to connect";
}
else
{
	echo "Connect successfully";
}
$sql = "Create Table Info (Id int(20),Name Varchar(50),Semester Varchar(50),Section Varchar(50),Phone int(50),Email Varchar(50))";
if($con->query($sql)==true)
{
	echo "Database has been successfully";
}
else
{
	echo "fail to connect";
}
$con->close()
?>