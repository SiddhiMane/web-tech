<?php
$servername="localhost";
$username="root";
$password="";
$dbname="emp1";
$id=$_POST["id"];
$EmployeeName=$_POST["EmployeeName"];
$Salary=$_POST["Salary"];
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
	die("connection failed" . mysqli_connect_error());
}
else{
	echo "connected successfully";
}

$sql="INSERT INTO Employee1(id,EmployeeName,Salary) VALUES($id,'$EmployeeName','$Salary')";

if(mysqli_query($conn,$sql)){
	echo "Successfully inserted!!";
}
else{
	echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>