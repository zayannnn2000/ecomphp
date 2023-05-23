<?php

include "db.php";

session_start();

    

$product_title = $_POST["product_title"];
	$product_desc = $_POST["product_desc"];
    $product_cat = $_POST["product_cat"];
    $product_brand = $_POST["product_brand"];
    $product_image = $_POST["product_image"];
    $product_price = $_POST["product_price"];
    $product_keywords = $_POST["product_keywords"];
    
    $sql = "INSERT INTO `products` (`product_cat`, `product_brand`, `product_title`, `product_desc`, `product_image`, `product_keywords`, `product_price`) 
    VALUES ('$product_cat','$product_brand','$product_title','$product_desc','$product_image','$product_keywords', '$product_price')";
	$run_query = mysqli_query($con,$sql);
    header("Location: admin.php");
   



?>