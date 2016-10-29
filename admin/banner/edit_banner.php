<?php
	include "../include/header.php";
    $id=$_REQUEST['id'];//carries requested id from list page edit link
	$query="select * from banner where BannerId='$id'";
	$result=mysql_query($query);
	$rs=mysql_fetch_array($result);
?>
<div class="col-sm-9">
    <form name="add_banner" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="bannerName">Banner Name:</label>
            <input type="text" name="bannerName" class="form-control" id="bannername" value="<?php echo $rs['BannerName']?>">
        </div>
        <div class="form-group">
            <label for="bannerImage">banner Image</label>
            <input type="file" name="bannerImage" class="form-control" id="bannerImage" value="<?php echo $rs['BannerImage']?>">
      </div>
      <button name="submit" type="submit" value="Submit" class="btn btn-default">Submit</button>
    </form>
</div>
<?php
     if(isset($_POST['submit']) && isset($_POST['submit'])=="Submit"){
        $name=$_POST['bannerName'];
        //$image=$_FILES['image']['tmp_name'];
        $imgnme=$_FILES['bannerImage']['name'];
        //echo $imgnme;
        $query="update banner set BannerName='$name',BannerImage='$imgnme' where BannerId='$id'";
        $result=mysql_query($query);
        if($result){
            move_uploaded_file($_FILES['bannerImage']['tmp_name'],'../../images/banner/'.$imgnme);
            //header('Location:list_banner.php');
            echo "Insertion successful";
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