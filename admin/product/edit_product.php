<?php
	include "../include/header.php";
 	$id=$_REQUEST['id'];//carries requested id from list page edit link
	$query="select * from product where ProductId='$id'";
	$result=mysql_query($query);
	$rs=mysql_fetch_array($result);
	
?>
 <div class="col-sm-9">
    <form name="add_product" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="productName">Product Name:</label>
            <input type="text" name="productName" class="form-control" id="productname" value="<?php echo $rs['ProductName']?>">
        </div>
        <div class="form-group">
            <label for="productImage">Product Image</label>
            <input type="file" name="productImage" class="form-control" id="pwd" value="<?php echo $rs['ProductImage']?>">
      </div>
      <div class="form-group">
            <label for="productDesc">Product Description:</label>
            <input type="text" name="productDesc" class="form-control" id="productdesc" value="<?php echo $rs['ProductDesc']?>">
        </div>
        <div class="form-group">
            <label for="productPrice">Product Price:</label>
            <input type="text" name="productPrice" class="form-control" id="productprice" value="<?php echo $rs['ProductPrice']?>">
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
            <input type="text" name="productFeature" class="form-control" id="productfeature" value="<?php echo $rs['ProductFeature']?>">
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
        $query="update product set ProductImage='$imgnme', ProductName='$name', ProductDesc='$desc', ProductPrice='$price',CategoryId='$category',ProductFeature='$feature' where ProductId='$id'";
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