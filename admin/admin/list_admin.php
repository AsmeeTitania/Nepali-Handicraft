<?php
	include "../include/header.php";
    if(isset($_REQUEST['del'])&& $_REQUEST['del']=='yes')
	{
		$query="delete from admin where AdminId='".$_REQUEST['id']."'";
		$result=mysql_query($query);
		if($result)
		{
			header('Location:list_admin.php');
		}
	}
?>
<div class="container">
    <h2>Admin List</h2>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Admin Name</th>
                    <th>Admin Password</th>
                    <th>Active</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
               <?php
                    $i=1;
                    	$query="select * from admin";
                    	$result=mysql_query($query);
                    	while($rs=mysql_fetch_array($result))
                    	{
                    ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $rs['AdminName']?></td>
                            <td><?php echo $rs['AdminPassword']?></td>
                            <td><?php echo $rs['IsActive']?></td>
                            <td><a href="edit_admin.php?id=<?php echo $rs['AdminId']?>">Edit</a></td>
                            <td><a href="list_admin.php?id=<?php echo $rs['AdminId']?>&del=yes" onClick="return confirm('Are you sure you want to delete this student?')">Delete</a></td>
                        
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
