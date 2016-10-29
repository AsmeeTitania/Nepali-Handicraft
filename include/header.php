<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Online Handicraft shop</title>
  <meta name="description" content="Hello World">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
    jQuery(".buy").hide();
    jQuery('div.panel-body').hover(function(){
         jQuery(this).find('.buy').fadeIn(1500);         // use .find() !
    }, function() {
        jQuery(this).find('.buy').fadeOut(1500);         // use .find() !
    });
        
    });
});
    </script>
<style >
body{
    background-color: #f0f0f5;
}
  .jumbotron{
    margin: 0px;
    background-color: #ffcccc;
  }
nav.navbar{
    background-color:#e60000;
}
  .sidebar{
     display: inline;
    float: left;
    padding: 6px 0;
    width: 214px;
  }
  
   .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
div.panel:hover {
   opacity:0.6;
 }
 
  div.panel:hover a.btn{
   display:block;
 }
 div.panel a.btn{
    position:absolute;
    display:none;
 }
 div.panel a{
    top:50%;
    left: 50%;
 }
 

</style>
  </head>
  <body>
        <div class="jumbotron">
      <div class="container text-center">
        <h1>Nepali Handicrafts</h1>      
        <p></p>
      </div>
    </div>


    <nav class="navbar" style="border-radius:0px !important;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Deals</a></li>
        <li><a href="#">Stores</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      
    </div>
  </div>
</nav>
