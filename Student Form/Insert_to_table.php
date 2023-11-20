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
$Id = $_POST['fid'];
$Name = $_POST['fname'];
$Semester = $_POST['fsemester'];
$Section = $_POST['fsection'];
$Phone = $_POST['fphone'];
$Email = $_POST['femail'];

$sql = "insert into Info values ('$Id', '$Name','$Semester', '$Section', '$Phone', '$Email')";

if($con->query($sql) === TRUE){
    echo "inserted data";
}
else{
    echo "failed to insert data";
}
$con -> close();
?>