<?php
	include "include/header.php";
 	$id=$_REQUEST['id'];//carries requested id from product page
	$query="select * from product where ProductId='$id'";
	$result=mysql_query($query);
	$rs=mysql_fetch_array($result);
	
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <div class="panel panel-primary">
        <div class="panel-body"><img src="images/product/<?php echo $rs['ProductImage']?>" class="img-responsive" style="width:100%" alt="Image"></div>
        </div>
        </div>
        <div class="col-md-8 col-sm-8" style="font-size: large;">
            <div class="panel panel-danger">
            <div class="panel-heading">
              <h1><?php echo $rs['ProductName']?></h1>
            </div>
            <div class="panel-body">
              <p><strong>Product Id:</strong>  <?php echo $rs['ProductId']?></p>
              <p><strong>Product Description:</strong><?php echo $rs['ProductDesc']?></p>
              <p><strong>Product Price:</strong><br />Rs: <?php echo $rs['ProductPrice']?></p>
            
            
            </div>
            <div class="panel-footer text-center">
              <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
                <!--Modal-->
           <div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-tag"></span> Buy Now</h4>
      </div>
      <div class="modal-body text-left">
        <form role="form" method="post">
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
            <input type="text" name="username" class="form-control" id="usrname" placeholder="Enter full name">
          </div>
          <div class="form-group">
            <label for="Contact"><span class="glyphicon glyphicon-earphone"></span> Contact</label>
            <input type="text" name="usercontact" class="form-control" id="usrcontact" placeholder="Enter phone number">
          </div>
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-road"></span> Adress</label>
            <input type="text" name="useraddress" class="form-control" id="usraddress" placeholder="Enter address">
          </div>
        

          <button name="buy" value="Submit" type="submit" class="btn btn-block"  data-dismiss="modal" data-toggle="modal" data-target="#myModal2">Buy 
            <span class="glyphicon glyphicon-ok"></span></button>
             
          
          
            </div>
        </form>
    
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Cancel
        </button>
      </div>
    </div>
  </div>
 </div> 
    <div class="modal fade" id="myModal2" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            
                            <div class="modal-body">
                              <p>Congratulation!!! Your order has been registered.</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>    
  
</div>
            </div>
          </div> 
          
        </div>
    </div>
</div>
<?php 
     if(isset($_POST['buy']) && isset($_POST['buy'])=="Buy")
       {
            $name=$_POST['username'];
            $contact=$_POST['usercontact'];
            $address=$_POST['useraddress'];
        	$query="insert into user values('','$name','$contact','$address','$id')";
            $result=mysql_query($query);
            if ($result){?>
                  
            <?php
            }
            else
                echo "Error ";  
                
    	
       }
    include("include/footer.php");
?>