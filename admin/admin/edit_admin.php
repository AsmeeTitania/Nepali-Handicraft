<?php
	include "../include/header.php";
 
			$id=$_REQUEST['id'];//carries requested id from list page edit link
			$query="select * from admin where AdminId='$id'";
			$result=mysql_query($query);
			$rs=mysql_fetch_array($result);
	
?>
 <div class="col-sm-9">
    <form name="add_admin" action="" method="post" >
        <div class="form-group">
            <label for="adminName">Admin Name:</label>
            <input type="text" name="adminName" class="form-control" id="adminName" value="<?php echo $rs['AdminName']?>"/>
        </div>
      <div class="form-group">
            <label for="adminPassword">Admin Password:</label>
            <input type="text" name="adminPassword" class="form-control" id="adminPassword" value="<?php echo $rs['AdminPassword']?>"/>
        </div>
        <div class="form-group">
            <label for="conformAdminPassword">Conform Admin Password:</label>
            <input type="text" name="conformAdminPassword" class="form-control" id="conformAdminPassword" value="<?php echo $rs['AdminPassword']?>"/>
        </div>
       <div class="checkbox">
        <label><input type="checkbox" name="chkBox" value="<?php echo $rs['IsActive']?>"/> Remember me</label>
       </div>
      <button name="submit" type="submit" value="Submit" class="btn btn-default">Submit</button>
    </form>
</div>
<?php
     if(isset($_POST['submit']) && isset($_POST['submit'])=="Submit"){
        $name=$_POST['adminName'];
        $pass=$_POST['adminPassword'];
        $active = 0;        
        if(isset($_POST['chkBox'])) 
            $active	= 1;
                	
    	$query =  "Update admin Set AdminName='$name', AdminPassword='$pass',IsActive=$active Where AdminID=$id";
        $result=mysql_query($query);
        if ($result)
            header('Location:list_admin.php');       
        else
            echo "Error ";                	
    }             
?>
<?php
	include "../include/footer.php";
?>