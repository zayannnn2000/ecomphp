<div>
    <h1>Hi Admin</h1>
</div>

<div>

    <form action="productadd.php" method="post" id="formp">

    <div class="form-group">
       <label for="product_title">Product title</label>
          <input class="input input-borders" type="text" name="product_title" placeholder="product_title" id="product_title" required>
    </div>

    <div class="form-group">
       <label for="product_cat">Product category</label>
          <input class="input input-borders" type="text" name="product_cat" placeholder="product_category" id="product_cat" required>
    </div>

    <div class="form-group">
       <label for="product_brand">Product brand</label>
          <input class="input input-borders" type="text" name="product_brand" placeholder="product_brand" id="product_brand" required>
    </div>

    <div class="form-group">
       <label for="product_desc">Product description</label>
          <input class="input input-borders" type="text" name="product_desc" placeholder="product_description" id="product_desc" required>
    </div>

    <div class="form-group">
       <label for="product_price">Product price</label>
          <input class="input input-borders" type="text" name="product_price" placeholder="product_price" id="product_price" required>
    </div>

    <div class="form-group">
       <label for="product_image">Product_image</label>
          <input class="image" type="file" accept=".png, .jpg, jpeg, .bitmap" name="product_image" placeholder="product_image" id="product_image" required>
    </div>

    <div class="form-group">
       <label for="product_keywords">Product keywords</label>
          <input class="input input-borders" type="text" name="product_keywords" placeholder="product_keywords" id="product_keywords" required>
    </div>

    <input class="primary-btn btn-block"   type="submit"  Value="Add product">
    </form>


</div>


<script>
    
function getProduct(){

const xhttp = new XMLHttpRequest();
xhttp.onload = function() {
  document.getElementById("pds").innerHTML = this.responseText;
}
xhttp.open("GET", "getproducts.php");
xhttp.send();

}
    </script>



<div>
    <button onclick={getProduct()}>View Products</button>
    <div id="pds"></div>

</div>