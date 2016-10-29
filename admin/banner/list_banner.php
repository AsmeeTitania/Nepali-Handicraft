<?php
	include "../include/header.php";
    if(isset($_REQUEST['del'])&& $_REQUEST['del']=='yes')
	{
		$query="delete from banner where BannerId='".$_REQUEST['id']."'";
		$result=mysql_query($query);
		if($result)
		{
			header('Location:list_banner.php');
		}
	}
?>
<div class="container">
    <h2>Banner List</h2>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Banner Image</th>
                    <th>Banner Name</th>
                    <th>Banner Desc</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
               <?php
                    $i=1;
                    	$query="select * from banner";
                    	$result=mysql_query($query);
                    	while($rs=mysql_fetch_array($result))
                    	{
                    ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><img src="../../images/banner/<?php echo $rs['BannerImage']?>" height="100px" width="200px"/></td>
                            <td><?php echo $rs['BannerImage']?></td>
                            <td><?php echo $rs['BannerName']?></td>
                            
                            
                            <td><a href="edit_banner.php?id=<?php echo $rs['BannerId']?>">Edit</a></td>
                           <td><a href="list_banner.php?id=<?php echo $rs['BannerId']?>&del=yes" onClick="return confirm('Are you sure you want to delete this banner?')">Delete</a></td>
                       
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
