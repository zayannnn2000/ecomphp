<?php


include "db.php";

session_start();


$sql = "SELECT * from `products`";




$run_query = mysqli_query($con,$sql);
if ($run_query) {
    if (mysqli_num_rows($run_query) > 0) {
        echo '<table border="1px">';
        echo "<tr>";
        echo "<th>Product Name</th>";
        echo "<th>Price (BDT)</th>";
        echo "<th>Description</th>";
        echo "<th>Category</th>";
        echo "<th>Image</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($run_query)) {
            echo "<tr>";
            echo "<td>" . $row['product_title'] . "</td>";
            echo "<td>" . $row['product_price'] . "</td>";
            echo "<td>" . $row['product_desc'] . "</td>";
            echo "<td>" . $row['product_cat'] . "</td>";
            echo "<td>" .'<img src="'.$row['product_image'].'">'."</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($run_query);
    } else {
        echo "No records found";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
// Close connection
mysqli_close($con);


/*

while($row = mysqli_fetch_array($run_query)){
    $pro_id    = $row['product_id'];
    $pro_cat   = $row['product_cat'];
    $pro_brand = $row['product_brand'];
    $pro_title = $row['product_title'];
    $pro_desc  = $row['product_desc'];
    $pro_price = $row['product_price'];
    $pro_image = $row['product_image'];
    $pro_key   = $row['product_keywords'];


    echo "

    
            <div class='col-md-3 col-xs-6'>
            <a href='product.php?p=$pro_id'><div class='product'>
                <div class='product-img'>
                    <img src='.$pro_image.' style='max-height: 170px;' alt=''>
                    
                </div></a>
                <div class='product-body'>
                    <h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
                    <h4 class='product-price header-cart-item-info'>$pro_price</h4>
                    
                    
                </div>
                <div class='add-to-cart'>
                    <button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> delete</button>
                </div>
            </div>
            </div>
        
    
";
}

*/



