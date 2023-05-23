<?php

include "db.php";

session_start();


if(isset($_POST["email"]) && isset($_POST["password"])){
	$email = $_POST["email"];
	$password = $_POST["password"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $mobile = $_POST["mobile"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
	$sql = "INSERT INTO `user_info` (`first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) 
    VALUES ('$first_name','$last_name','$email','$password','$mobile','$address1', '$address2')";
	$run_query = mysqli_query($con,$sql);
	
	if($run_query){
	    
			$_SESSION["name"] = $first_name;
			
        header("location: index.php");    
		}

	
    else{
        header("Location: login.php");
       
        
    }
}
?>