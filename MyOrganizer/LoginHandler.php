<?php
// receive all the informations from the interface specifically "login.php"
$Username = $_POST["Username"];
$Password = $_POST["Password"];

#Check the connections with the server and DB
include "Configuration.php";

$login= "SELECT Username,Password FROM users WHERE Username= ? ";

# The code that provent SQL injections -----> to test it use ('or'1'='1)
$stmt = mysqli_prepare($con,$login);
mysqli_stmt_bind_param($stmt,"s",$Username);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

$count = mysqli_stmt_num_rows($stmt);

if($count == 1){
    #verify the hashing
    mysqli_stmt_bind_result($stmt,$rowUsername,$rowPassword);
    mysqli_stmt_fetch($stmt);
    #verify the Password
    if(password_verify($Password,$rowPassword)){
    session_start();
    $_SESSION["loggedUser"] = $Username;
    
    $ViewUser = "SELECT UserType FROM users WHERE Username = '$Username'";
		$result = mysqli_query($con,$ViewUser);
		if(!$result){
			echo "Error:".mysqli_error($con);
		}
		$row = mysqli_fetch_array($result);
		$UserType=$row["UserType"];
    #echo($UserType);
    if($UserType == "Student"){
        #echo("Hiii");
        header('Location: StudentHomePage/studentHome.php');       
    
    }
    else {header('Location: No_Service.php');}       
    }
   
}
 echo "<h2>Invalid Email and Password</h2>";

?>