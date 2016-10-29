<?php
    include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Nepali Handicraft</title>
  <meta name="description" content="Hello World">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body{
    margin: 0px;
  }
  .top{
    background-color: #1f3057;
    color: white;
    margin: 0px;
    padding: 2px;
    clear:both;
  }
    .sidenav{
      
      background-color: #e6e6e6;
      height: 100%;
    }
    h3{
      color: white;
    }

  </style>

</head>
  <body>
    <div class="top">
      <div class="row">
        <div class="col-sm-10 col-xs-10">
          <h2 class="text-center">Admin Panel</h2>
        </div>
        <div class="col-sm-2 col-xs-2">
           <h3><a href="#"><span class="glyphicon glyphicon-log-out "></span> LogOut</a></h3>
        </div>
      </div>
    </div>

    <div class="container-fluid">
    <div class="row content">
     <div class="col-sm-3 sidenav">
        
        <ul class="nav nav-stacked">
          <h4>DashBoard</h4>
        <li class="active"><a href="../dashboard/index.php">Dashboard</a></li>
        <h4>Admin</h4>
        <li><a href="../admin/list_admin.php">List Admin</a></li>
        <li><a href="../admin/add_admin.php">Add Admin</a></li>
        <h4>Product</h4>
        <li><a href="../product/list_product.php">List Product</a></li>
        <li><a href="../product/add_product.php">Add Product</a></li>
        <h4>Banner</h4>
        <li><a href="../banner/list_banner.php">List Banner</a></li>
        <li><a href="../banner/add_banner.php">Add Banner</a></li>
      </ul><br>
    </div>
   
   

  