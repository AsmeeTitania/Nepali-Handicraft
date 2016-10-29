<?php
	include("include/header.php");
?>
<div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12 ">
        <p class="lead">Category</p>
        <div class="list-group">
          <!--<a href="#" class="list-group-item">Statues</a>
          <a href="#" class="list-group-item">Wooden Crafts</a>
          <a href="#" class="list-group-item active">Thanka</a>
          <a href="#" class="list-group-item">Paper</a>
          <a href="#" class="list-group-item">Jewelry</a>-->
           <?php
                            $query = "Select * from category";
                            $result = mysql_query($query);
                            $rowCount = 1;
                            while($rs = mysql_fetch_array($result))
                            {
                         ?>
                            <a href="product.php?cat=<?php echo $rs['CategoryId'];?>" class="list-group-item">
                                <?php echo $rs['CategoryName']; ?></a>
                            
                         <?php       
                                
                                $rowCount++;
                            }                
                        ?>  
        </div>
      </div>
      
   <!-- </div><!--row end-->
  <!-- </div><!--container end-->
