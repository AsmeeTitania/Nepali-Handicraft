<?php
	include "../include/header.php";
 
?>
 <div class="col-sm-9">
    <form name="add_product" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="productName">Product Name:</label>
            <input type="text" name="productName" class="form-control" id="productname">
        </div>
        <div class="form-group">
            <label for="productImage">Product Image</label>
            <input type="file" name="productImage" class="form-control" id="pwd">
      </div>
      <div class="form-group">
            <label for="productDesc">Product Description:</label>
            <input type="text" name="productDesc" class="form-control" id="productdesc">
        </div>
        <div class="form-group">
            <label for="productPrice">Product Price:</label>
            <input type="text" name="productPrice" class="form-control" id="productprice">
        </div>
         
        <div class="form-group">
            <label for="categoryId">Category Id:</label>
            <div class="radio">
            <label><input type="radio" name="optradio" value="1">Statue</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="optradio" value="2">Wooden Craft</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="optradio" value="3">Jewelry</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="optradio" value="4">Paper</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="optradio" value="5">Other</label>
        </div>
           <!--<input type="text" name="categoryId" class="form-control" id="categoryid">-->
        </div>
        <div class="form-group">
            <label for="productFeature">Product Feature:</label>
            <input type="text" name="productFeature" class="form-control" id="productfeature">
        </div>
      <button name="submit" type="submit" value="Submit" class="btn btn-default">Submit</button>
    </form>
</div>
<?php
     if(isset($_POST['submit']) && isset($_POST['submit'])=="Submit"){
        $name=$_POST['productName'];
        //$image=$_FILES['image']['tmp_name'];
        $imgnme=$_FILES['productImage']['name'];
        $price=$_POST['productPrice'];
        $desc=$_POST['productDesc'];
        $category=$_POST['optradio'];
        $feature=$_POST['productFeature'];
        
        //echo $imgnme;
        $query="insert into product values('','$imgnme','$name','$desc','$price','$category','$feature')";
        $result=mysql_query($query);
        if($result){
            move_uploaded_file($_FILES['productImage']['tmp_name'],'../../images/product/'.$imgnme);
            header('Location:list_product.php');  
        }
        else
        {
            echo "Insertion failed";
        }
        
    }
?>
<?php
	include "../include/footer.php";
?>