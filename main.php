<?php include_once 'dbconfig.php'; ?>
<?php include_once 'header.php'; ?>

<div class="container">
    <a href="create.php" class="btn btn-large btn-info">
        <i class="glyphicon glyphicon-plus"></i> &nbsp; Add Contact
    </a>
</div>
<br />
<div class="container"> 
	<table class='table table-bordered table-responsive'> 
        <tr>
            <th>S.No.</th>
            <th>First Name </th>
            <th>Last Name</th>
            <th>E-Mail</th>
            <th>Contact</th>
            <th colspan="2" align="center">Actions</th>
        </tr>
        <?php    
		  $crud->dataview("SELECT * FROM tbl_users");
	    ?>
    </table> 
</div>
<?php include_once 'footer.php'; ?>