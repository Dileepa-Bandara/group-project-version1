<?php

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','2102_test');

$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if(isset($_POST['addnewuser'])){



$empId = $_POST['empId'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$userRole = $_POST['userRole'];
$department = $_POST['department'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];
$protected_password = password_hash($password, PASSWORD_DEFAULT);

$dbinsertsql = "INSERT INTO `systemusers`(`empId`, `name`, `gender`, `userRole`, `department`, `email`, `mobile`, `address`, `username`, `password`) VALUES ('$empId','$name','$gender','$userRole','$department','$email','$mobile','$address','$username','$protected_password')";
$result = mysqli_query($conn, $dbinsertsql);


if($result){
    header('location: ../index.php?Page=addUsers.php');
}
else {
    echo "<script>alert('Error Occured');</script>";
    header('location: ../index.php?Page=addUsers.php');
}



}

/*
$sql = "SELECT empId, name, userRole, department, email, mobile, `address`, FROM systemusers";
$result = $conn->query($sql);
*/




?>