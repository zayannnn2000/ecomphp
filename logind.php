<?php

include "db.php";

session_start();


if(isset($_POST["email"]) && isset($_POST["password"])){
	$email = mysqli_real_escape_string($con,$_POST["email"]);
	$password = $_POST["password"];
	$sql = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	if($count > 0){    
        $row = mysqli_fetch_array($run_query);
        if($row["first_name"]=="admin"){
            header("location: admin.php");
        }
        else{
			$_SESSION["uid"] = $row["user_id"];
			$_SESSION["name"] = $row["first_name"];
			$ip_add = getenv("REMOTE_ADDR");

        header("location: index.php");    
        }
		}

	
    else{
        header("Location: login.php");
       
        
    }
}
?>
