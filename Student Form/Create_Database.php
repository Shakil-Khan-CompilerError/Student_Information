<?php
$servername = "localhost";
$username = "root";
$password = "";
$con = new mysqli($servername,$username,$password);
if(!$con)
{
	echo "fail to connect";
}
else
{
	echo "Connect successfully";
}
$sql = "Create Database Student_Information";
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