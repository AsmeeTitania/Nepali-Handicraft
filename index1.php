<?php
	include("include/header.php");
?>
<div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12">
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
      <div class="col-md-9 col-sm-9 col-xs-12">
          <div id="myCarousel" class="carousel slide">
      <!-- Indicators-->
      <ol class="carousel-indicators">
        <li class="item1 active"></li>
        <li class="item2"></li>
        <li class="item3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="theband1.jpg" alt="beauty">
          <div class="carousel-caption">
            <h3>Colourful Beach</h3>
           <!-- <p>What can be more beautiful than this beach</p>-->
          </div>
        </div>

        <div class="item">
          <img src="theband2.jpg" alt="house">
          <div class="carousel-caption">
            <h3>Dream house</h3>
            <p>Who dont wanna house like this?</p>
          </div>
        </div>

        <div class="item">
          <img src="theband3.jpg" alt="plant">
          <div class="carousel-caption">
            <h3>Plant</h3>
            <p>Beauty from different angle.</p>
          </div>
        </div>
      </div>

      <!--Left and right controls-->
      <a class="left carousel-control" href="#myCarousel" role="button">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>


    </div>
      </div>

    </div>
  </div><!--container end-->
  <?php
	include("include/footer.php");
?>
  