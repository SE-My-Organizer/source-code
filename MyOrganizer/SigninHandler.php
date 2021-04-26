<?php
// receive all the informations from the interface specifically "register.php"
$Username = $_POST["Username"];
$Email = $_POST["Email"];
$UserType = $_POST["UserType"];
$Password = $_POST["Password"];
$PhoneNumber=$_POST["PhoneNumber"];
$Address=$_POST["Address"];

#To hash the password
$PasswordHashed=password_hash($Password, PASSWORD_DEFAULT);

#Check the connections with the server and DB
include "Configuration.php";


#Prevent SQL injection using prepared statement and then insert the informations to the DB
$insertUser = "INSERT INTO users (Email,Username,UserType,Password,PhoneNumber,Address) 
value(?,?,?,?,?,?)";


$stmt = mysqli_prepare($con,$insertUser);
mysqli_stmt_bind_param($stmt,"ssssis",$Email,$Username,$UserType,$PasswordHashed,$PhoneNumber,$Address);
$result=mysqli_stmt_execute($stmt);


if($result){	
	header('Location: login.php');	
}
else {
	die("Error: ".mysqli_stmt_error($stmt));
}

?>
