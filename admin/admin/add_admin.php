<?php
	include "../include/header.php";
 
?>
 <div class="col-sm-9">
    <form name="add_admin" action="" method="post" >
        <div class="form-group">
            <label for="adminName">Admin Name:</label>
            <input type="text" name="adminName" class="form-control" id="adminName">
        </div>
      <div class="form-group">
            <label for="adminPassword">Admin Password:</label>
            <input type="text" name="adminPassword" class="form-control" id="adminPassword">
        </div>
        <div class="form-group">
            <label for="conformAdminPassword">Conform Admin Password:</label>
            <input type="text" name="conformAdminPassword" class="form-control" id="conformAdminPassword">
        </div>
       <div class="checkbox">
        <label><input type="checkbox" name="chkBox"> Remember me</label>
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
                	
    	$query = "INSERT INTO admin VALUES ('','$name', '$pass', $active)";
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