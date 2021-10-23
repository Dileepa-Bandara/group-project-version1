<?php

$departmentId = $_POST['departmentId'];
$departmentName = $_POST['departmentName'];
$description = $_POST['description'];
$location = $_POST['location'];
$createdBy = $_POST['createdBy'];
$createdDate = $_POST['createdDate'];
$depManagerEmpId = $_POST['depManagerEmpId'];
$depManagerName = $_POST['depManagerName'];
$depManagerContact = $_POST['depManagerContact'];


//Database connection
$conn = new mysqli('localhost', 'root', '', '2102_test');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into departments(departmentId, departmentName, description, location, createdBy, createdDate, depManagerEmpId, depManagerName, depManagerContact)values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssi", $departmentId, $departmentName, $description, $location, $createdBy, $createdDate, $depManagerEmpId, $depManagerName, $depManagerContact);
    $stmt->execute();
    header('location: ../index.php?Page=addDepartment.php');
    //echo "Added Succesfully";
    $stmt->close();
    $conn->close();
}



?>