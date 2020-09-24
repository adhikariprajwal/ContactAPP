<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-del']))
{
	$id = $_GET['delete_id'];
	$crud->delete($id);
	header("Location: delete.php?deleted");	
}

?>
<?php include_once 'header.php'; ?>

<div class="container">

	<?php
	if(isset($_GET['deleted']))
	{
		?>
        <div class="alert alert-success">
    	Deleted Successfully 
		</div>
        <?php
	}
	else
	{
		?>
        <div class="alert alert-danger">
        Are you sure to delete the record?
		</div>
        <?php
	}
	?>	
</div>

<div class="container">
 	
	 <?php
	 if(isset($_GET['delete_id']))
	 {
		 ?>
         <table class='table table-bordered'>
         <tr>
         <th>S.No.</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>E-mail</th>
         <th>Contact</th>
         </tr>
         <?php
         $stmt = $DB_con->prepare("SELECT * FROM tbl_users WHERE id=:id");
         $stmt->execute(array(":id"=>$_GET['delete_id']));
         while($row=$stmt->fetch(PDO::FETCH_BOTH))
         {
             ?>
             <tr>
             <td><?php print($row['id']); ?></td>
             <td><?php print($row['first_name']); ?></td>
             <td><?php print($row['last_name']); ?></td>
             <td><?php print($row['email_id']); ?></td>
         	 <td><?php print($row['contact_no']); ?></td>
             </tr>
             <?php
         }
         ?>
         </table>
         <?php
	 }
	 ?>
</div>

<div class="container">
<p>
<?php
if(isset($_GET['delete_id']))
{
	?>
  	<form method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
    <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; Delete</button>
    <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Return to Dashboard</a>
    </form>  
	<?php
}
else
{
	?>
    <a href="main.php" class="btn btn-large btn-success" style="float: right;><i class="glyphicon glyphicon-backward"></i> &nbsp; Return to the Dashboard</a>
    <?php
}
?>
</p>
</div>	
<?php include_once 'footer.php'; ?>