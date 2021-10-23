<?php

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','2102_test');

$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_error())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if(isset($_POST['addnewdepartment'])){



$departmentId = $_POST['departmentId'];
$departmentName = $_POST['departmentName'];
$description = $_POST['description'];
$location = $_POST['location'];
$createdBy = $_POST['createdBy'];

$depManagerEmpId = $_POST['depManagerEmpId'];
$depManagerName = $_POST['depManagerName'];
$depManagerContact = $_POST['depManagerContact'];



$dbinsertdepartment = "INSERT INTO `departments`(`departmentId`, `departmentName`, `description`, `location`, `createdBy`, `depManagerEmpId`, `depManagerName`, `depManagerContact` ) VALUES (`$departmentId`, `$departmentName`, `$description`, `$location`, `$createdBy`, `$depManagerEmpId`, `$depManagerName`, `$depManagerContact` )";
$result = mysqli_query($conn, $dbinsertdepartment);


if($result){
    
    header('location: ../index.php?Page=dashboard.php');
}
else {
    echo "<script>alert('Error Occured');</script>";
    header('location: ../index.php?Page=addDepartment.php');
}



}





?>