<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Student_Information";
$con = new mysqli($servername, $username, $password, $database);
if(!$con)
{
    echo "fail to connect";
}
$sql = " delete from Info where id = 9";
if ($con -> query($sql) === TRUE)
{
    echo "Delete has been  succesfully";
}
else
{
    echo "fail ";
}
$con ->close();
?>