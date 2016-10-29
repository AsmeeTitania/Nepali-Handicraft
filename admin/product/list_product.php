<?php
	include "../include/header.php";
     if(isset($_REQUEST['del'])&& $_REQUEST['del']=='yes')
	{
		$query="delete from product where ProductId='".$_REQUEST['id']."'";
		$result=mysql_query($query);
		if($result)
		{
			header('Location:list_product.php');
		}
	}
?>
<div class="container">
    <h2>Product List</h2>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Desc</th>
                    <th>Product Price</th>
                    <th>Category Id</th>
                    <th>Product Feature</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
               <?php
                    $i=1;
                    	$query="select * from product";
                    	$result=mysql_query($query);
                    	while($rs=mysql_fetch_array($result))
                    	{
                    ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><img src="../../images/product/<?php echo $rs['ProductImage']?>" height="100px" width="100px"/><?php echo $rs['ProductImage']?></td>
                            
                            <td><?php echo $rs['ProductName']?></td>
                            <td><?php echo $rs['ProductDesc']?></td>
                            <td><?php echo $rs['ProductPrice']?></td>
                            <td><?php echo $rs['CategoryId']?></td>
                            <td><?php echo $rs['ProductFeature']?></td>
                           <?php //echo $rs['Image']?>
                            
                            <td><a href="edit_product.php?id=<?php echo $rs['ProductId']?>">Edit</a></td>
                            <td><a href="list_product.php?id=<?php echo $rs['ProductId']?>&del=yes" onClick="return confirm('Are you sure you want to delete this product?')">Delete</a></td>
                    
                        </tr>
                        <?php
                    	$i++;
                    	}
                    	?>
                        </table>
              </tbody>
        </table>
    </div>
</div>
<?php
    include "../include/footer.php";
?>
